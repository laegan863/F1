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

function demographicPayload(array $overrides = []): array
{
    return array_replace_recursive([
        'patient_first_encounter' => now()->toDateString(),
        'patient_health_facility_id' => '0000012345',
        'philhealth_id' => '1234567890123',
        'name' => ['firstname' => 'Maria', 'middlename' => 'Santos', 'lastname' => 'Cruz', 'suffix' => 'N/A'],
        'date_of_birth' => '1970-05-01',
        'sex' => 'female',
        'civil_status' => 'Married',
        'nationality' => 'Filipino',
        'permanent' => ['province' => 'Negros Occidental', 'city' => 'City of Bacolod', 'barangay' => 'Barangay 1'],
        'same_as_address' => 'on',
        'mobile_number' => '09123456789',
        'email_address' => 'maria@example.com',
        'relative' => ['province' => 'Negros Occidental', 'city' => 'City of Bacolod', 'barangay' => 'Barangay 2'],
        'relative_phone_number' => '09987654321',
        'highest_education' => 'Tertiary',
        'occupation' => 'Professionals',
        'number_of_years_in_occupation' => 10,
    ], $overrides);
}

function riskPayload(array $overrides = []): array
{
    return array_merge([
        'tobacco_use' => 'Current Smoker',
        'second_hand_smoke' => 'No',
        'alcohol_use' => 'No history of harmful use of alcohol',
        'physical_activity' => 'Usually Inactive',
        'healtydiet' => ['fatmeat' => 'high', 'vegetables' => 'low', 'sodium_salt' => 'moderate', 'sugar' => 'low'],
        'occupational_exposure' => 'no',
        'air_pollution' => 'yes',
        'family_history' => 'no',
        'infections' => ['None'],
        'comorbidities' => ['Hypertension'],
        'has_cancer' => 'no',
        'sexual_partners' => 1,
        'age_first_intercourse' => 20,
        'contraceptives_use' => 'No',
        'cancer_screening' => ['Mammography'],
        'vaccine_hpv' => 'No',
        'vaccine_hepb' => 'Unknown',
    ], $overrides);
}

function diagnosisPayload(array $overrides = []): array
{
    return array_merge([
        'multiple_sites' => 'no',
        'cancer_sites' => ['Breast'],
        'laterality' => 'Left',
        'histologic_diagnosis' => 'Invasive ductal carcinoma',
        'icd_10' => 'C50.9',
        'clinical_stage' => 'Stage II',
        'cancer_status' => 'Newly diagnosed',
    ], $overrides);
}

function treatmentPayload(array $overrides = []): array
{
    return array_merge([
        'date_of_diagnosis' => now()->subMonth()->toDateString(),
        'team_approach' => 'No',
        'surgery' => 'Yes',
        'surgery_goal' => ['Curative'],
        'anticancer_drug' => 'No',
        'first_line_drug' => 'No',
        'second_line_drug' => 'No',
        'third_line_drug' => 'No',
        'other_subsequent_line_drug' => 'No',
        'radiotherapy' => 'No',
        'theranostics' => 'No',
        'other_therapies' => 'No',
    ], $overrides);
}

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

function completedRecord(): Demographicprofile
{
    $p = Demographicprofile::create(demographicPayload() + ['hospitalID' => '0000000042', 'status' => 1, 'current' => ['province' => 'X', 'city' => 'Y', 'barangay' => 'Z']]);
    Riskfactor::create(riskPayload() + ['code' => $p->id]);
    Cancerdiagnose::create(diagnosisPayload() + ['code' => $p->id, 'primary_site_number' => 1]);
    Treatment::create(treatmentPayload() + ['code' => $p->id]);
    return $p;
}

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
