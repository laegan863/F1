<?php

use App\Models\Cancerdiagnose;
use App\Models\Demographicprofile;
use App\Models\F2followup;
use App\Models\F2patientstatus;
use App\Models\F3cancerdiagnoseoutcome;
use App\Models\F3patientsurveillanceform;
use App\Models\F4painassessment;
use App\Models\F4palliativeform;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;

uses(RefreshDatabase::class);

const HID = '0000000042';

beforeEach(function () {
    $this->admin = User::factory()->create(['role' => 'admin', 'email' => 'fu-admin@example.test']);
    $this->user = User::factory()->create(['role' => 'user', 'email' => 'fu-user@example.test']);

    $this->patient = Demographicprofile::create([
        'hospitalID' => HID, 'patient_first_encounter' => '2026-01-01', 'patient_health_facility_id' => '0000000042',
        'philhealth_id' => '123456789012', 'name' => ['firstname' => 'Maria', 'middlename' => 'S', 'lastname' => 'Cruz', 'suffix' => 'N/A'],
        'date_of_birth' => '1970-01-01', 'sex' => 'female', 'civil_status' => 'Married', 'nationality' => 'Filipino',
        'permanent' => ['province' => 'P', 'city' => 'C', 'barangay' => 'B'], 'same_as_address' => 'on',
        'mobile_number' => '09123456789', 'email_address' => 'm@example.com', 'relative' => ['province' => 'P', 'city' => 'C', 'barangay' => 'B'],
        'relative_phone_number' => '09123456789', 'highest_education' => 'Tertiary', 'occupation' => 'Professionals',
        'number_of_years_in_occupation' => '5', 'status' => 1,
    ]);
    Cancerdiagnose::create([
        'code' => $this->patient->id, 'multiple_sites' => 'no', 'primary_site_number' => 1, 'cancer_sites' => ['Breast', 'Thyroid'],
        'laterality' => 'Not Applicable', 'histologic_diagnosis' => 'Invasive ductal carcinoma', 'icd_10' => 'C50.9',
        'clinical_stage' => 'Stage II', 'cancer_status' => 'Newly diagnosed',
    ]);
    $this->actingAs($this->user);
});

function firstPage(array $o = []): array
{
    return array_replace([
        'date' => now()->toDateString(),
        'name' => ['firstname' => 'Maria', 'middlename' => 'S', 'lastname' => 'Cruz', 'suffix' => 'N/A'],
        'primary_cancer_site' => ['Breast', 'Thyroid'],
        'primary_cancer_site_other' => 'Axillary node',
        'laterality' => 'Left',
        'histologic_diagnosis' => 'IDC',
        'icd10' => 'C50.9',
    ], $o);
}

function no(array $keys): array
{
    return array_fill_keys($keys, 'No');
}

function form2Pages(): array
{
    return [
        'submit.follow-up' => firstPage(),
        'store.patient-eco-status' => no(['ecog_status', 'surgery_done', 'ongoing_drug_therapy']),
        'store.radiotheraphy' => no(['radiotherapy', 'theranostics']),
        'store.other-theraphy' => no(['other_cancer_therapies']) + ['pre_op_scenario' => 'x', 'post_op_scenario' => 'y', 'treatment_status' => 'Ongoing'],
        'form2.store.change-treatment-plan' => no(['surgery_plan', 'anti_cancer_change', 'radio_change', 'thera_change', 'palliative', 'other_cancer']),
        'store-cancer-diagnose-outcome' => ['diagnosis_outcome' => ['Stable Disease'], 'diagnosis_outcome_date' => now()->toDateString(), 'financial_support' => 'No'],
    ];
}

function postPage($test, string $route, array $data)
{
    return $route === 'submit.follow-up' || $route === 'store.f3patientsurveillanceforms' || $route === 'store.palliative-form'
        ? $test->post(route($route, ['hospitalID' => HID]), $data)
        : $test->post(route($route), $data);
}

it('guards first pages against missing or unknown patients', function () {
    foreach (['form2-firstpage', 'form3-firstpage', 'form4-firstpage'] as $r) {
        $this->get(route($r))->assertRedirect(route('admin.records'))->assertSessionHas('error');
        $this->get(route($r, ['hospitalID' => '9999999999']))->assertRedirect(route('admin.records'));
    }
    $this->post(route('store.f3patientsurveillanceforms', ['hospitalID' => '9999999999']), firstPage())->assertRedirect(route('admin.records'));
    expect(F3patientsurveillanceform::count())->toBe(0);
});

it('guards later pages when nothing is in progress', function () {
    $this->get(route('form2-secondpage'))->assertRedirect(route('admin.records'))->assertSessionHas('error');
    $this->get(route('form4.page6'))->assertRedirect(route('admin.records'));
    $this->post(route('store.patient-eco-status'), no(['ecog_status', 'surgery_done', 'ongoing_drug_therapy']))->assertRedirect(route('admin.records'));
    $this->post(route('store.cancerdiagnoseoutcome'), [])->assertRedirect(route('admin.records'));
    expect(F2patientstatus::count())->toBe(0);
});

it('pre-fills page 1 from Form 1 and uses site names for every checkbox', function () {
    $html = $this->get(route('form2-firstpage', ['hospitalID' => HID]))->assertOk()
        ->assertSee('Page 1 of 6')->assertSee('value="C50.9"', false)->getContent();

    expect($html)->toMatch('/value="Thyroid"[^>]*checked/')        // a site from the old numeric column
        ->and($html)->toMatch('/value="Not applicable"[^>]*checked/')   // case-insensitive laterality match
        ->and($html)->not->toContain('value="41"');
});

it('completes Form 2 end to end without touching the Form 1 session', function () {
    session(['code' => 777]); // a Form 1 wizard in progress

    $steps = array_keys(form2Pages());
    foreach (form2Pages() as $route => $payload) {
        $res = postPage($this, $route, $payload);
        $res->assertSessionHasNoErrors();
    }
    $res->assertRedirect(route('view.forms', ['id' => $this->patient->id]));

    $entry = F2followup::firstOrFail();
    expect($entry->status)->toBe('1')
        ->and($entry->primary_cancer_site)->toBe(['Breast', 'Thyroid'])
        ->and($entry->primary_cancer_site_other)->toBe('Axillary node')
        ->and(session('code'))->toBe(777)
        ->and(session('f2_code'))->toBeNull()
        ->and($entry->f2patientstatuses)->not->toBeNull()
        ->and($entry->f2cancerdiagnoseoutcomes)->not->toBeNull();
});

it('clears ECOG answers when No is chosen and saves remarks', function () {
    postPage($this, 'submit.follow-up', firstPage());
    $this->post(route('store.patient-eco-status'), [
        'ecog_status' => 'No', 'ecog_grade' => 'Grade 3', 'surgery_done' => 'No', 'surgery_rvs' => 'R1',
        'ongoing_drug_therapy' => 'No', 'remarks' => 'stable',
    ])->assertRedirect(route('form2-thirdpage'));

    $s = F2patientstatus::firstOrFail();
    expect($s->ecog_grade)->toBeNull()->and($s->surgery_rvs)->toBeNull()->and($s->remarks)->toBe('stable');

    $this->post(route('store.patient-eco-status'), ['ecog_status' => 'Yes', 'surgery_done' => 'Yes', 'ongoing_drug_therapy' => 'No'])
        ->assertSessionHasErrors(['ecog_grade', 'surgery_date', 'surgery_goal', 'surgery_description']);
});

it('only requires cause of death for death outcomes (Forms 3 and 4)', function () {
    postPage($this, 'store.f3patientsurveillanceforms', firstPage());
    $this->post(route('store.cancerdiagnoseoutcome'), ['diagnosis_outcome' => ['Stable Disease'], 'diagnosis_outcome_date' => now()->toDateString()])
        ->assertSessionHasNoErrors()->assertRedirect(route('form3.page3'));
    $this->post(route('store.cancerdiagnoseoutcome'), ['diagnosis_outcome' => ['Death (Cancer related)'], 'diagnosis_outcome_date' => now()->toDateString()])
        ->assertSessionHasErrors(['cause_immediate', 'cause_underlying']);
    expect(F3cancerdiagnoseoutcome::first()->diagnosis_outcome)->toBe(['Stable Disease']);

    postPage($this, 'store.palliative-form', firstPage(['reason' => ['Supportive Care'], 'setting' => ['Home']]));
    $this->post(route('store.cancer-diagnose-outcome'), ['diagnosis_outcome' => ['Ongoing treatment'], 'diagnosis_outcome_date' => now()->toDateString()])
        ->assertSessionHasNoErrors();
});

it('applies the Form 4 validation fixes', function () {
    postPage($this, 'store.palliative-form', firstPage(['reason' => ['Others'], 'setting' => ['Home']]))->assertSessionHasErrors('reason_others');
    postPage($this, 'store.palliative-form', firstPage(['reason' => ['Others'], 'reason_others' => 'Family request', 'setting' => ['Home']]))
        ->assertRedirect(route('form4.page2'));
    expect(F4palliativeform::first()->reason_others)->toBe('Family request');

    $this->post(route('store.esas'), ['gcs_score' => 40, 'esasr_score' => 10, 'pain' => 15])->assertSessionHasErrors(['gcs_score', 'pain']);
    $this->post(route('store.esas'), ['gcs_score' => 15, 'esasr_score' => 10, 'pain' => 3])->assertRedirect(route('form4.page3'));

    // No pain: the detailed assessment is not required
    $this->post(route('store.pain-assessment'), ['assessment_date' => now()->toDateString(), 'is_pain' => 'No']
        + no(['paracetamol', 'nsaids', 'tramadol', 'opioid', 'other_drugs', 'non_pharma']))
        ->assertSessionHasNoErrors()->assertRedirect(route('form4.page4'));
    expect(F4painassessment::first()->pain_score)->toBeNull();

    $this->post(route('store.pain-assessment'), ['assessment_date' => now()->toDateString(), 'is_pain' => 'Yes']
        + no(['paracetamol', 'nsaids', 'tramadol', 'opioid', 'other_drugs', 'non_pharma']))
        ->assertSessionHasErrors(['pain_score', 'severity', 'provocation']);

    $care = no(['nutritional_care', 'nursing_care', 'rehabilitation_care', 'psychosocial_care', 'spiritual_care', 'others_care']);
    $this->post(route('store.palliative-care'), array_merge($care, ['nursing_care' => 'Yes']))
        ->assertSessionHasErrors(['nursing_place', 'nursing_improved']);
    $this->post(route('store.palliative-care'), $care)->assertRedirect(route('form4.page5'));
});

it('reopens an unfinished draft instead of creating duplicates', function () {
    postPage($this, 'submit.follow-up', firstPage());
    session()->forget('f2_code');

    $this->get(route('form2-firstpage', ['hospitalID' => HID, 'new' => 1]))->assertOk()->assertSee('reopened');
    postPage($this, 'submit.follow-up', firstPage(['icd10' => 'C50.4']));

    expect(F2followup::count())->toBe(1)->and(F2followup::first()->icd10)->toBe('C50.4');
});

it('edits a saved entry page and keeps it complete', function () {
    foreach (form2Pages() as $route => $payload) {
        postPage($this, $route, $payload);
    }
    $entry = F2followup::firstOrFail();

    $this->get(route('followup.edit', ['form' => 'form2', 'id' => $entry->id, 'page' => 3]))->assertRedirect(route('form2-thirdpage'));
    $this->get(route('form2-thirdpage'))->assertOk()->assertSee('Editing record')->assertSee('value="No"', false);

    $this->post(route('store.radiotheraphy'), ['radiotherapy' => 'Yes', 'radio_date_start' => '2026-10-01', 'radio_type' => ['3DCRT'], 'radio_goal' => 'Curative', 'theranostics' => 'No'])
        ->assertRedirect(route('user.multiform', ['hospitalID' => HID, 'form' => 2]));

    expect($entry->fresh()->status)->toBe('1')
        ->and($entry->fresh()->f2radiotheraphies->radio_goal)->toBe('Curative')
        ->and(F2followup::count())->toBe(1);

    $this->get(route('user.multiform', ['hospitalID' => HID, 'form' => 2]))->assertOk()->assertSee('Edit page');
});

it('deletes entries (admin only) and cascades when a patient is deleted', function () {
    foreach (form2Pages() as $route => $payload) {
        postPage($this, $route, $payload);
    }
    $entry = F2followup::firstOrFail();

    $this->delete(route('followup.destroy', ['form' => 'form2', 'id' => $entry->id]))->assertRedirect(route('admin.dashboard'));
    expect(F2followup::count())->toBe(1);

    $this->actingAs($this->admin)->delete(route('followup.destroy', ['form' => 'form2', 'id' => $entry->id]))->assertRedirect();
    expect(F2followup::count())->toBe(0)->and(F2patientstatus::count())->toBe(0);

    postPage($this, 'submit.follow-up', firstPage());
    postPage($this, 'store.f3patientsurveillanceforms', firstPage());
    $this->delete(route('admin.records.delete', ['id' => $this->patient->id]))->assertRedirect(route('admin.records'));
    expect(F2followup::count())->toBe(0)->and(F3patientsurveillanceform::count())->toBe(0);
});

it('renders print pages for partial entries and 404s unknown ids', function () {
    postPage($this, 'submit.follow-up', firstPage(['name' => ['firstname' => 'Maria', 'lastname' => 'Cruz']]));
    postPage($this, 'store.f3patientsurveillanceforms', firstPage());
    postPage($this, 'store.palliative-form', firstPage(['reason' => ['Supportive Care'], 'setting' => ['Home']]));

    $this->get(route('form2', ['id' => F2followup::first()->id]))->assertOk();
    $this->get(route('form3', ['id' => F3patientsurveillanceform::first()->id]))->assertOk();
    $this->get(route('form4', ['id' => F4palliativeform::first()->id]))->assertOk();

    $this->get(route('form2', ['id' => 999]))->assertNotFound();
    $this->get(route('form3', ['id' => 999]))->assertNotFound();
    $this->get(route('form4'))->assertNotFound();
});

it('repairs site values that were saved as numbers', function () {
    $entry = F2followup::create(firstPage(['primary_cancer_site' => ['Breast', '50', '55']]) + ['hospitalID' => HID, 'other_remarks' => 'N/A']);

    (require database_path('migrations/2026_11_06_120000_fix_followup_form_data.php'))->up();

    expect($entry->fresh()->primary_cancer_site)->toBe(['Breast', 'Thyroid', 'Vulva']);
});

it('completes Forms 3 and 4 end to end and prints the finished entries', function () {
    $ordinals = ['first', 'second', 'third', 'fourth'];
    $history = ['other_cancer' => 'No'];
    foreach ($ordinals as $o) {
        $history += no(["{$o}_surgery", "{$o}_drug", "{$o}_radio", "{$o}_theranostics"]);
    }

    $form3 = [
        'store.f3patientsurveillanceforms' => firstPage(),
        'store.cancerdiagnoseoutcome' => ['diagnosis_outcome' => ['Complete Remission'], 'diagnosis_outcome_date' => now()->toDateString()],
        'store.treatment-history' => $history,
        'store.financial-support' => ['financial_support' => 'No'],
    ];
    foreach ($form3 as $route => $payload) {
        $res = postPage($this, $route, $payload)->assertSessionHasNoErrors();
    }
    $res->assertRedirect(route('view.forms', ['id' => $this->patient->id]));

    $form4 = [
        'store.palliative-form' => firstPage(['reason' => ['Hospice Care'], 'setting' => ['Hospital']]),
        'store.esas' => ['gcs_score' => 14, 'esasr_score' => 20, 'pain' => 4],
        'store.pain-assessment' => ['assessment_date' => now()->toDateString(), 'is_pain' => 'No'] + no(['paracetamol', 'nsaids', 'tramadol', 'opioid', 'other_drugs', 'non_pharma']),
        'store.palliative-care' => no(['nutritional_care', 'nursing_care', 'rehabilitation_care', 'psychosocial_care', 'spiritual_care', 'others_care']),
        'store.cancer-diagnose-outcome' => ['diagnosis_outcome' => ['Stable Disease'], 'diagnosis_outcome_date' => now()->toDateString()],
        'store.financial-support-mechanism' => ['financial_support' => 'No', 'cspmap_meds' => ['None'], 'other_meds' => ['None']],
    ];
    foreach ($form4 as $route => $payload) {
        $res = postPage($this, $route, $payload)->assertSessionHasNoErrors();
    }
    $res->assertRedirect(route('view.forms', ['id' => $this->patient->id]));

    $f3 = F3patientsurveillanceform::firstOrFail();
    $f4 = F4palliativeform::firstOrFail();
    expect($f3->status)->toBe('1')->and($f4->status)->toBe('1')
        ->and(session('f3_code'))->toBeNull()->and(session('f4_code'))->toBeNull();

    foreach (form2Pages() as $route => $payload) {
        postPage($this, $route, $payload);
    }
    $this->get(route('form2', ['id' => F2followup::first()->id]))->assertOk()->assertSee('Cruz');
    $this->get(route('form3', ['id' => $f3->id]))->assertOk();
    $this->get(route('form4', ['id' => $f4->id]))->assertOk();

    $this->get(route('view.forms', ['id' => $this->patient->id]))->assertOk()->assertSee('Has saved entries');
    foreach ([2, 3, 4] as $n) {
        $this->get(route('user.multiform', ['hospitalID' => HID, 'form' => $n]))->assertOk()->assertSee('Edit page');
    }
    $this->get(route('user.multiform', ['hospitalID' => HID, 'form' => 9]))->assertNotFound();
});
