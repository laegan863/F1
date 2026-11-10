<?php

use App\Models\Cancerdiagnose;
use App\Models\Demographicprofile;
use App\Models\Riskfactor;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    // Point the hospital information system at an empty in-memory DB: lookups fail
    // and the wizard must fall back to manual entry instead of crashing.
    config(['database.connections.sqlsrv' => ['driver' => 'sqlite', 'database' => ':memory:', 'prefix' => '']]);

    $this->admin = User::factory()->create(['role' => 'admin', 'email' => 'admin@example.test', 'password' => bcrypt('password')]);
    $this->user = User::factory()->create(['role' => 'user', 'email' => 'user@example.test', 'password' => bcrypt('password')]);
});





it('renders the login page and signs in', function () {
    $this->get('/')->assertOk()->assertSee('Welcome back')->assertDontSee('name="password" value=', false);

    $this->post(route('verify-auth'), ['email' => $this->admin->email, 'password' => 'wrong-password'])
        ->assertSessionHasErrors('error');

    $this->post(route('verify-auth'), ['email' => $this->admin->email, 'password' => 'password', 'remember' => 1])
        ->assertRedirect(route('admin.dashboard'));
    $this->assertAuthenticatedAs($this->admin);
});

it('guards wizard steps when no record is in progress', function () {
    $this->actingAs($this->user);
    $this->get(route('demographic-profile'))->assertRedirect(route('first-page'));
    $this->get(route('risk-factor'))->assertRedirect(route('first-page'));
    $this->get(route('treatment-diagnose'))->assertRedirect(route('first-page'));
});

it('completes the whole add-record wizard', function () {
    $this->actingAs($this->user);

    $this->get(route('first-page'))->assertOk()->assertSee('Step 1 of 5');

    $this->post(route('admin.validate-hospital-number'), ['HospitalID' => '12345'])
        ->assertRedirect(route('demographic-profile'))
        ->assertSessionHas('hospitalID', '0000012345');

    $this->get(route('demographic-profile'))->assertOk()->assertSee('wizard-section', false)->assertSee('Step 2 of 5');

    $this->post(route('submit-demograpic-profile'), demographicPayload())->assertRedirect(route('risk-factor'));
    $profile = Demographicprofile::firstOrFail();
    expect($profile->status)->toBe('0')
        ->and($profile->current)->toBe($profile->permanent)
        ->and($profile->hospitalID)->toBe('0000012345');

    $this->get(route('risk-factor'))->assertOk();
    $this->post(route('submit-riskfactor-data'), riskPayload())->assertRedirect(route('cancer-diagnose'));

    // Going back to a finished step shows the saved answers
    $this->get(route('risk-factor'))->assertOk()->assertSee('value="Current Smoker"', false);

    $this->post(route('submit-cancer-diagnose-data'), diagnosisPayload())->assertRedirect(route('treatment-diagnose'));
    $this->post(route('submit-treatment-data'), treatmentPayload())
        ->assertRedirect(route('view.forms', ['id' => $profile->id]));

    expect($profile->fresh()->status)->toBe('1')
        ->and(Riskfactor::where('code', $profile->id)->exists())->toBeTrue()
        ->and(Cancerdiagnose::where('code', $profile->id)->value('primary_site_number'))->toBe('1')
        ->and(Treatment::where('code', $profile->id)->first()->surgery_goal)->toBe(['Curative']);

    // Session is cleared, and the same patient cannot be added twice
    $this->get(route('risk-factor'))->assertRedirect(route('first-page'));
    $this->post(route('admin.validate-hospital-number'), ['HospitalID' => '12345'])->assertSessionHas('error');

    $this->get(route('view.forms', ['id' => $profile->id]))->assertOk()->assertSee('Maria Santos Cruz');
});

it('keeps the risk factor answers when validation fails', function () {
    $this->actingAs($this->user);
    $this->post(route('admin.validate-hospital-number'), ['HospitalID' => '777']);
    $this->post(route('submit-demograpic-profile'), demographicPayload());

    $this->from(route('risk-factor'))
        ->post(route('submit-riskfactor-data'), riskPayload(['vaccine_hpv' => null]))
        ->assertSessionHasErrors('vaccine_hpv');

    $html = $this->get(route('risk-factor'))->getContent();
    // "Current Smoker" must be the checked tobacco option (it used to be overridden by a hard-coded default)
    expect($html)->toMatch('/value="Current Smoker"\s+checked/')
        ->and($html)->not->toMatch('/value="Non-smoker"\s+checked/');
});

it('validates radiotherapy details against the radiotherapy answer', function () {
    $this->actingAs($this->user);
    $this->post(route('admin.validate-hospital-number'), ['HospitalID' => '888']);
    $this->post(route('submit-demograpic-profile'), demographicPayload());
    $this->post(route('submit-riskfactor-data'), riskPayload());
    $this->post(route('submit-cancer-diagnose-data'), diagnosisPayload());

    $this->post(route('submit-treatment-data'), treatmentPayload(['radiotherapy' => 'Yes']))
        ->assertSessionHasErrors(['radiotherapy_types', 'radiotherapy_sequence', 'radiotherapy_goal']);
});

it('resumes an unfinished draft', function () {
    $this->actingAs($this->user);
    $this->post(route('admin.validate-hospital-number'), ['HospitalID' => '999']);
    $this->post(route('submit-demograpic-profile'), demographicPayload());
    session()->flush();

    $this->post(route('admin.validate-hospital-number'), ['HospitalID' => '999'])
        ->assertRedirect(route('demographic-profile'))->assertSessionHas('info');
    $this->get(route('demographic-profile'))->assertOk()->assertSee('value="Maria"', false);
});


it('edits and updates each step of a saved record', function () {
    $this->actingAs($this->user);
    $p = completedRecord();

    foreach (['demographic', 'riskfactor', 'cancer-diagnose', 'treatment'] as $step) {
        $this->get(route('records.edit', ['id' => $p->id, 'step' => $step]))->assertOk()->assertSee('Editing record');
    }
    $this->get(route('records.edit', ['id' => $p->id, 'step' => 'cancer-diagnose']))->assertSee('value="C50.9"', false);

    $this->post(route('records.update', ['id' => $p->id, 'step' => 'cancer-diagnose']), diagnosisPayload(['icd_10' => 'C50.4']))
        ->assertRedirect(route('view.forms', ['id' => $p->id]));
    expect(Cancerdiagnose::where('code', $p->id)->value('icd_10'))->toBe('C50.4');

    $this->post(route('records.update', ['id' => $p->id, 'step' => 'demographic']), demographicPayload(['name' => ['firstname' => 'Ana']]))
        ->assertRedirect();
    expect($p->fresh()->name['firstname'])->toBe('Ana')->and($p->fresh()->status)->toBe('1');

    $this->get(route('edit-demographic-profile', ['hospitalID' => $p->hospitalID]))
        ->assertRedirect(route('records.edit', ['id' => $p->id, 'step' => 'demographic']));
});

it('lists records and renders the dashboard for every period', function () {
    $this->actingAs($this->admin);
    completedRecord();

    $this->get(route('admin.records'))->assertOk()->assertSee('Maria')->assertSee('Breast');
    foreach (['all', 'year', '12m', '30d', 'bogus'] as $period) {
        $this->get(route('admin.dashboard', ['period' => $period]))->assertOk()->assertSee('trendChart');
    }
});

it('renders the dashboard with no data', function () {
    $this->actingAs($this->user);
    $this->get(route('admin.dashboard'))->assertOk()->assertSee('No records yet');
});

it('deletes records safely', function () {
    $p = completedRecord();

    // Non-admins cannot delete
    $this->actingAs($this->user)->delete(route('admin.records.delete', ['id' => $p->id]))->assertRedirect(route('admin.dashboard'));
    expect(Demographicprofile::count())->toBe(1);

    $this->actingAs($this->admin);
    // Arbitrary tables are rejected, and GET no longer deletes
    $this->delete(route('admin.delete', ['id' => $p->id, 'table' => 'demographicprofiles']))->assertNotFound();
    $this->get('/admin/delete/' . $this->user->id . '/users')->assertStatus(405);
    expect(Demographicprofile::count())->toBe(1);

    $this->delete(route('admin.records.delete', ['id' => $p->id]))->assertRedirect(route('admin.records'));
    expect(Demographicprofile::count())->toBe(0)
        ->and(Riskfactor::count())->toBe(0)
        ->and(Treatment::count())->toBe(0);

    $this->delete(route('admin.delete', ['id' => $this->user->id, 'table' => 'users']))->assertRedirect();
    expect(User::find($this->user->id))->toBeNull();
});

it('does not allow public self-registration', function () {
    $before = User::count();
    $this->get('/register')->assertNotFound();
    $this->post('/register', ['name' => 'Intruder', 'email' => 'intruder@example.test', 'password' => 'password123'])
        ->assertNotFound();
    expect(User::count())->toBe($before);
    $this->assertGuest();
});

it('does not expose debug routes', function () {
    $this->get('/encrypt/secret')->assertNotFound();
    $this->actingAs($this->admin)->get('/connection')->assertNotFound();
});

it('treats the patient email address as optional', function () {
    $this->actingAs($this->user);
    $this->post(route('admin.validate-hospital-number'), ['HospitalID' => '4321']);

    $this->get(route('demographic-profile'))->assertSee('Email Address <small class="text-muted">(optional)</small>', false);

    $this->post(route('submit-demograpic-profile'), demographicPayload(['email_address' => 'not-an-email']))
        ->assertSessionHasErrors('email_address');

    $this->post(route('submit-demograpic-profile'), demographicPayload(['email_address' => '']))
        ->assertSessionHasNoErrors()->assertRedirect(route('risk-factor'));

    expect(Demographicprofile::where('hospitalID', '0000004321')->value('email_address'))->toBeNull();
});

it('offers the "Old case, continuing treatment" cancer status', function () {
    $this->actingAs($this->user);
    $p = completedRecord();

    $this->get(route('records.edit', ['id' => $p->id, 'step' => 'cancer-diagnose']))->assertSee('Old case, continuing treatment');

    $this->post(route('records.update', ['id' => $p->id, 'step' => 'cancer-diagnose']), diagnosisPayload(['cancer_status' => 'Old case, continuing treatment']))
        ->assertSessionHasNoErrors();
    expect(Cancerdiagnose::where('code', $p->id)->value('cancer_status'))->toBe('Old case, continuing treatment');

    expect($this->get(route('records.edit', ['id' => $p->id, 'step' => 'cancer-diagnose']))->getContent())
        ->toMatch('/value="Old case, continuing treatment"\s+id="status5"\s+checked/');

    $print = $this->get(route('result.form1', ['id' => $p->id]))->assertOk()->getContent();
    expect($print)->toContain('Old case, continuing treatment')
        ->and(substr_count($print, '#checked-checkbox-id'))->toBeGreaterThan(0);
});

it('accepts a 12- or 13-digit PhilHealth PIN', function () {
    $this->actingAs($this->user);
    $this->post(route('admin.validate-hospital-number'), ['HospitalID' => '1212']);

    $this->get(route('demographic-profile'))->assertSee('placeholder="12-345678901-2"', false)->assertSee('maxlength="15"', false);

    foreach (['12345678901', '12345678901234', '12-34567890A-2', ''] as $bad) {
        $this->post(route('submit-demograpic-profile'), demographicPayload(['philhealth_id' => $bad]))
            ->assertSessionHasErrors('philhealth_id');
    }

    // Both lengths are accepted (dashed or not) and stored as digits only
    foreach (['12-345678901-2' => '123456789012', '12-3456789012-3' => '1234567890123', '1234567890123' => '1234567890123'] as $typed => $stored) {
        $this->post(route('submit-demograpic-profile'), demographicPayload(['philhealth_id' => $typed]))
            ->assertSessionHasNoErrors()->assertRedirect(route('risk-factor'));
        expect(Demographicprofile::where('hospitalID', '0000001212')->value('philhealth_id'))->toBe($stored);
    }

    // The printout groups the boxes by length: 2-9-1 for 12 digits, 2-10-1 for 13
    $full = completedRecord();
    $text = fn () => preg_replace('/\s+/', '', strip_tags($this->get(route('result.form1', ['id' => $full->id]))->assertOk()->getContent()));
    $full->update(['philhealth_id' => '123456789012']);
    expect($text())->toContain('12-345678901-2');
    $full->update(['philhealth_id' => '1234567890123']);
    expect($text())->toContain('12-3456789012-3');
});

it('saves a patient with no mobile number and no email', function () {
    $this->actingAs($this->user);
    $this->post(route('admin.validate-hospital-number'), ['HospitalID' => '6543']);

    $this->get(route('demographic-profile'))->assertSee('Mobile No. <small class="text-muted">(optional)</small>', false)
        ->assertSee('Relative / Guardian Mobile No. <small class="text-muted">(optional)</small>', false);

    $this->post(route('submit-demograpic-profile'), demographicPayload(['mobile_number' => '', 'email_address' => '', 'relative_phone_number' => '']))
        ->assertSessionHasNoErrors()->assertRedirect(route('risk-factor'));

    $p = Demographicprofile::where('hospitalID', '0000006543')->firstOrFail();
    expect($p->mobile_number)->toBeNull()->and($p->email_address)->toBeNull()->and($p->relative_phone_number)->toBeNull();
});
