<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Models\Demographicprofile;
use App\Models\Riskfactor;
use App\Models\Cancerdiagnose;
use App\Models\Treatment;
use App\Traits\LogsActivity;

/**
 * Form 1 ("Add Record") wizard.
 *
 * Step 1  Validate hospital number   -> hospital_number()
 * Step 2  Demographic profile        -> demographic_page() / submit_demograpic_profile()
 * Step 3  Risk factors               -> riskfactor_page() / submit_riskfactor_data()
 * Step 4  Cancer diagnosis           -> cancer_diagnose_page() / submit_cancer_diagnose_data()
 * Step 5  Treatment                  -> treatment_page() / submit_treatment_data()
 *
 * Progress is tracked in the session: "patient" or "hospitalID" after step 1,
 * and "code" (the demographicprofiles.id of the draft) after step 2. The
 * record stays a draft (status = 0) until the last step is saved.
 *
 * Saved records can be edited per step via edit_step() / update_step().
 */
class MainController extends Controller
{
    use LogsActivity;

    /** step key => [view, model class, relation on Demographicprofile, label] */
    private const STEPS = [
        'demographic'     => ['forms.demographic',        null,                  null,              'Demographic Profile', 2],
        'riskfactor'      => ['forms.riskfactor',         Riskfactor::class,     'riskfactors',     'Risk Factors',        3],
        'cancer-diagnose' => ['forms.cancer-diagnose',    Cancerdiagnose::class, 'cancerdiagnoses', 'Cancer Diagnosis',    4],
        'treatment'       => ['forms.treatment-diagnose', Treatment::class,      'treatments',      'Treatment',           5],
    ];

    /* ===================================================================
     |  Wizard pages
     * =================================================================== */

    public function hospital_number(Request $request)
    {
        $request->validate([
            'HospitalID' => ['required', 'regex:/^\d{1,10}$/'],
        ], [
            'HospitalID.required' => 'Please enter the hospital number.',
            'HospitalID.regex'    => 'The hospital number must contain digits only (up to 10).',
        ]);

        $hospitalID = str_pad($request->HospitalID, 10, "0", STR_PAD_LEFT);

        $completed = Demographicprofile::where("hospitalID", $hospitalID)->where('status', 1)->first();
        if ($completed) {
            return back()->withInput()->with(
                "error",
                "A completed record for hospital number {$hospitalID} already exists. Open it from Manage Records to view or edit it."
            );
        }

        // Start a fresh wizard: never carry over data from a previous patient.
        Session::forget(['patient', 'hospitalID', 'code']);
        Session::put('hospitalID', $hospitalID);

        // Resume an unfinished draft for this hospital number, if any.
        $draft = Demographicprofile::where('hospitalID', $hospitalID)->where('status', 0)->first();
        if ($draft) {
            Session::put('code', $draft->id);
            return to_route('demographic-profile')
                ->with('info', "An unfinished record for {$hospitalID} was found. Your saved answers have been restored.");
        }

        try {
            $patient = DB::connection('sqlsrv')->table('Patient')->where('HospitalID', $hospitalID)->first();
        } catch (\Throwable $e) {
            Log::warning('Hospital information system lookup failed', ['error' => $e->getMessage()]);
            return to_route('demographic-profile')
                ->with('info', "The hospital information system could not be reached. Please enter the patient's details manually.");
        }

        if ($patient) {
            Session::put('patient', $patient);
            return to_route("demographic-profile")
                ->with('success', 'Patient found in hospital records. Details have been pre-filled.');
        }

        return to_route('demographic-profile')
            ->with('info', "No hospital record found for {$hospitalID}. Please enter the patient's details manually.");
    }

    public function demographic_page()
    {
        if (!Session::has('hospitalID')) {
            return to_route('first-page')->with('error', 'Please enter the hospital number first.');
        }

        $draft = Session::has('code') ? Demographicprofile::find(Session::get('code')) : null;

        if ($draft) {
            $this->prefill($draft->toArray());
        } elseif ($patient = Session::get('patient')) {
            $this->prefill($this->mapHisPatient($patient));
        }

        return view('forms.demographic');
    }

    public function riskfactor_page()
    {
        return $this->stepPage('riskfactor');
    }

    public function cancer_diagnose_page()
    {
        return $this->stepPage('cancer-diagnose');
    }

    public function treatment_page()
    {
        return $this->stepPage('treatment');
    }

    private function stepPage(string $step)
    {
        $draft = Session::has('code') ? Demographicprofile::find(Session::get('code')) : null;
        if (!$draft) {
            return to_route('first-page')->with('error', 'Your session has expired. Please start again from the hospital number.');
        }

        [$view, , $relation] = self::STEPS[$step];
        if ($existing = $draft->{$relation}) {
            $this->prefill($existing->toArray());
        }

        return view($view);
    }

    /* ===================================================================
     |  Wizard submissions
     * =================================================================== */

    public function submit_demograpic_profile(Request $request)
    {
        $hospitalID = Session::get('hospitalID');
        if (!$hospitalID) {
            return to_route('first-page')->with('error', 'Your session has expired. Please start again from the hospital number.');
        }

        $data = $this->validateStep('demographic', $request);
        $data['hospitalID'] = $hospitalID;

        $profile = Demographicprofile::updateOrCreate(['hospitalID' => $hospitalID], $data);

        $action = $profile->wasRecentlyCreated ? 'create' : 'update';
        $this->logActivity($action, ucfirst($action) . "d demographic profile for Hospital ID: {$hospitalID}", $profile);

        Session::put('code', $profile->id);
        return to_route('risk-factor')->with('success', 'Demographic profile saved.');
    }

    public function submit_riskfactor_data(Request $request)
    {
        return $this->submitStep('riskfactor', $request, 'cancer-diagnose', 'Risk factors saved.');
    }

    public function submit_cancer_diagnose_data(Request $request)
    {
        return $this->submitStep('cancer-diagnose', $request, 'treatment-diagnose', 'Cancer diagnosis saved.');
    }

    public function submit_treatment_data(Request $request)
    {
        $profile = Session::has('code') ? Demographicprofile::find(Session::get('code')) : null;
        if (!$profile) {
            return to_route('first-page')->with('error', 'Your session has expired. Please start again from the hospital number.');
        }

        // Every earlier step must exist before the record can be completed.
        foreach (['riskfactors' => 'risk-factor', 'cancerdiagnoses' => 'cancer-diagnose'] as $relation => $route) {
            if (!$profile->{$relation}) {
                return to_route($route)->with('error', 'Please complete this step before finishing the record.');
            }
        }

        $data = $this->validateStep('treatment', $request);
        Treatment::updateOrCreate(['code' => $profile->id], $data + ['code' => $profile->id]);

        $profile->update(['status' => 1]);
        $this->logActivity('create', "Completed Form 1 record for Hospital ID: {$profile->hospitalID}", $profile);

        Session::forget(['code', 'hospitalID', 'patient']);

        $name = trim(($profile->name['firstname'] ?? '') . ' ' . ($profile->name['lastname'] ?? ''));
        return to_route('view.forms', ['id' => $profile->id])
            ->with('success', "Record for {$name} has been saved successfully!");
    }

    private function submitStep(string $step, Request $request, string $nextRoute, string $message)
    {
        $profile = Session::has('code') ? Demographicprofile::find(Session::get('code')) : null;
        if (!$profile) {
            return to_route('first-page')->with('error', 'Your session has expired. Please start again from the hospital number.');
        }

        [, $model] = self::STEPS[$step];
        $data = $this->validateStep($step, $request);
        $model::updateOrCreate(['code' => $profile->id], $data + ['code' => $profile->id]);

        return to_route($nextRoute)->with('success', $message);
    }

    /* ===================================================================
     |  Edit / update an existing record, one step at a time
     * =================================================================== */

    public function edit_step($id, $step)
    {
        abort_unless(isset(self::STEPS[$step]), 404);
        $record = Demographicprofile::findOrFail($id);
        [$view, , $relation, $label] = self::STEPS[$step];

        $source = $relation ? $record->{$relation} : $record;
        if ($source) {
            $this->prefill($source->toArray());
        }

        return view($view, [
            'mode'       => 'edit',
            'record'     => $record,
            'formAction' => route('records.update', ['id' => $record->id, 'step' => $step]),
            'stepLabel'  => $label,
        ]);
    }

    public function update_step(Request $request, $id, $step)
    {
        abort_unless(isset(self::STEPS[$step]), 404);
        $record = Demographicprofile::findOrFail($id);
        [, $model, $relation, $label] = self::STEPS[$step];

        $data = $this->validateStep($step, $request);

        if ($model === null) {
            $record->update($data);
            $target = $record;
        } else {
            $target = $model::updateOrCreate(['code' => $record->id], $data + ['code' => $record->id]);
        }

        $this->logUpdate($target, "Updated {$label} for Hospital ID: {$record->hospitalID}");

        return to_route('view.forms', ['id' => $record->id])
            ->with('success', "{$label} has been updated successfully.");
    }

    /** Legacy URL kept for existing links/bookmarks. */
    public function edit_demographic_profile($hospitalID)
    {
        $record = Demographicprofile::where('hospitalID', $hospitalID)->firstOrFail();
        return to_route('records.edit', ['id' => $record->id, 'step' => 'demographic']);
    }

    /* ===================================================================
     |  Printable result
     * =================================================================== */

    public function result($id)
    {
        $data = Demographicprofile::with(['riskfactors', 'cancerdiagnoses', 'treatments'])->findOrFail($id);

        $data['date_of_birth'] = str_split(str_replace("-", "", (string) $data->date_of_birth));
        $data['philhealth_id'] = str_split((string) $data->philhealth_id);
        $data['patient_first_encounter'] = str_split(str_replace("-", "", (string) $data->patient_first_encounter));

        return view('forms.form', ['data' => $data]);
    }

    /* ===================================================================
     |  Validation (shared by create and edit)
     * =================================================================== */

    private function validateStep(string $step, Request $request): array
    {
        return match ($step) {
            'demographic'     => $this->validateDemographic($request),
            'riskfactor'      => $this->validateRiskfactor($request),
            'cancer-diagnose' => $this->validateCancerDiagnose($request),
            'treatment'       => $this->validateTreatment($request),
        };
    }

    private function validateDemographic(Request $request): array
    {
        // PhilHealth PIN: accept "12-345678901-2" or "123456789012", store digits only
        if ($request->filled('philhealth_id')) {
            $request->merge(['philhealth_id' => preg_replace('/[\s-]/', '', (string) $request->input('philhealth_id'))]);
        }

        $same = $request->same_as_address === "on";
        $currentRule = $same ? "nullable" : "required";

        $data = $request->validate([
            'patient_first_encounter'       => 'required|date|before_or_equal:today',
            "patient_health_facility_id"    => "required|string|min:10",
            "philhealth_id"                 => ["required", "regex:/^\d{12,13}$/"],
            "name.firstname"                => "required|string|max:100",
            "name.middlename"               => "nullable|string|max:100",
            "name.lastname"                 => "required|string|max:100",
            "name.suffix"                   => "required|string",
            "married_maiden_name"           => "nullable|string|max:100",
            "date_of_birth"                 => "required|date|before_or_equal:today",
            "sex"                           => "required|in:male,female",
            "civil_status"                  => "required",
            "nationality"                   => "required",
            "permanent.province"            => "required|string",
            "permanent.city"                => "required|string",
            "permanent.barangay"            => "required|string",
            "current.province"              => $currentRule . "|string",
            "current.city"                  => $currentRule . "|string",
            "current.barangay"              => $currentRule . "|string",
            "same_as_address"               => "nullable",
            "mobile_number"                 => "nullable|string|max:20",
            "email_address"                 => "nullable|email|max:255",
            "relative.province"             => "required|string",
            "relative.city"                 => "required|string",
            "relative.barangay"             => "required|string",
            "relative_phone_number"         => "nullable|string|max:20",
            "relative_email"                => "nullable|email",
            "highest_education"             => "required",
            "occupation"                    => "required",
            "number_of_years_in_occupation" => "required|integer|min:0|max:100",
        ], [
            'patient_health_facility_id.min' => 'The health facility ID must be at least 10 characters.',
            'philhealth_id.regex'            => 'The PhilHealth PIN must be 12 or 13 digits (e.g. 12-345678901-2).',
            "name.firstname.required"        => "The first name field is required.",
            "name.lastname.required"         => "The last name field is required.",
            "name.suffix.required"           => "Please choose a suffix (choose N/A if none).",
            "permanent.province.required"    => "The permanent address province is required.",
            "permanent.city.required"        => "The permanent address city is required.",
            "permanent.barangay.required"    => "The permanent address barangay is required.",
            "current.province.required"      => "The current address province is required.",
            "current.city.required"          => "The current address city is required.",
            "current.barangay.required"      => "The current address barangay is required.",
            "relative.province.required"     => "The relative's address province is required.",
            "relative.city.required"         => "The relative's address city is required.",
            "relative.barangay.required"     => "The relative's address barangay is required.",
        ]);

        // The address selects submit place names directly (no server-side PSGC lookups needed).
        if ($same) {
            $data['current'] = $data['permanent'];
            $data['same_as_address'] = 'on';
        } else {
            $data['same_as_address'] = 'off';
        }

        return $data;
    }

    private function validateRiskfactor(Request $request): array
    {
        $data = $request->validate([
            'tobacco_use' => 'required',
            'second_hand_smoke' => 'required',
            'alcohol_use' => 'required',
            'physical_activity' => 'required',
            'healtydiet.fatmeat' => 'required',
            'healtydiet.vegetables' => 'required',
            'healtydiet.sodium_salt' => 'required',
            'healtydiet.sugar' => 'required',
            'occupational_exposure' => 'required',
            'occupation_specify' => $request->occupational_exposure == 'yes' ? 'required|array' : 'nullable',
            'occupation_specify_others' => 'nullable',
            'air_pollution' => 'required',
            'family_history' => 'required',
            'cancer_sites' => $request->family_history == "yes" ? 'required' : 'nullable',
            'cancer_sites_other' => 'nullable',
            'cancer_sites_other_value' => 'nullable',
            'infections' => 'required|array',
            'infections_others' => 'nullable',
            'infections_other_content' => 'nullable',
            'comorbidities' => 'required|array',
            'comorbidities_others' => 'nullable',
            'comorbidities_others_content' => 'nullable',
            'has_cancer' => 'required',
            'patient_diagnosed_w_cancer' => $request->has_cancer == "yes" ? "required|array" : "nullable",
            'other_significant_medical_history' => 'nullable',
            'sexual_orientation' => 'nullable',
            'sexual_orientation_other' => 'nullable',
            'sexual_partners' => 'required|integer|min:0',
            'age_first_intercourse' => 'required|integer|min:0|max:120',
            'contraceptives_use' => 'required',
            'contraceptive_types' => $request->contraceptives_use == "Yes" ? "required" : "nullable",
            'contraceptive_types_other' => 'nullable',
            'cancer_screening' => 'required|array',
            'cancer_screening_other' => 'nullable',
            'vaccine_hpv' => 'required',
            'vaccine_hepb' => 'required',
            'other_vaccines' => 'nullable'
        ], [
            'alcohol_use.required' => 'The harmful use of alcohol field is required.',
            'healtydiet.fatmeat.required' => 'The fat-meat field is required.',
            'healtydiet.vegetables.required' => 'The vegetables field is required.',
            'healtydiet.sodium_salt.required' => 'The sodium/salt field is required.',
            'healtydiet.sugar.required' => 'The sugar field is required.',
            'occupation_specify.required' => 'Please specify the occupational exposure.',
            'patient_diagnosed_w_cancer.required' => 'Please select the cancer site where the patient has been diagnosed.',
            'cancer_sites.required' => 'Please select the family history cancer site/s.',
            'infections.required' => 'Please select the infections (choose None or Unknown if not applicable).',
            'comorbidities.required' => 'Please select the comorbidities (choose None or Unknown if not applicable).',
            'cancer_screening.required' => 'Please select the cancer screening received (choose None or Unknown if not applicable).',
            "contraceptive_types.required" => "Please specify the type of contraceptives used.",
        ]);

        // Clear dependent answers that no longer apply
        if (($data['occupational_exposure'] ?? null) !== 'yes') {
            $data['occupation_specify'] = null;
            $data['occupation_specify_others'] = null;
        }
        if (($data['family_history'] ?? null) !== 'yes') {
            $data['cancer_sites'] = null;
            $data['cancer_sites_other'] = null;
            $data['cancer_sites_other_value'] = null;
        }
        if (($data['has_cancer'] ?? null) !== 'yes') {
            $data['patient_diagnosed_w_cancer'] = null;
        }
        if (($data['contraceptives_use'] ?? null) !== 'Yes') {
            $data['contraceptive_types'] = null;
            $data['contraceptive_types_other'] = null;
        }

        return $data;
    }

    private function validateCancerDiagnose(Request $request): array
    {
        $data = $request->validate([
            'multiple_sites'       => 'required|in:yes,no',
            'primary_site_number'  => $request->multiple_sites == "yes" ? "required|integer|min:1" : 'nullable|integer|min:1',
            'cancer_sites'         => 'required_without:cancer_site_other|nullable|array',
            'cancer_site_other'    => 'nullable|string|max:255',
            'laterality'           => 'required|in:Left,Right,Bilateral,Not Applicable,Unknown',
            'histologic_diagnosis' => 'required|string|max:255',
            'icd_10'               => 'required|string|max:20',
            'clinical_stage'       => 'nullable',
            't_stage'              => 'nullable',
            'n_stage'              => 'nullable',
            'm_stage'              => 'nullable',
            's_stage'              => 'nullable',
            'other_staging'        => 'nullable|array',
            'other_remarks'        => 'nullable',
            'cancer_status'        => 'required'
        ], [
            'multiple_sites.required'       => 'Please answer whether there is more than 1 active primary cancer site.',
            'cancer_sites.required_without' => 'Please select at least one primary cancer site (or specify one under Others).',
        ]);

        if ($data["multiple_sites"] == "no") {
            $data["primary_site_number"] = 1;
        }

        return $data;
    }

    private function validateTreatment(Request $request): array
    {
        $ifYes = fn (string $field, string $rule = 'required') => $request->input($field) === "Yes" ? $rule : "nullable";

        $data = $request->validate([
            'date_of_diagnosis' => 'required|date|before_or_equal:today',
            'team_approach' => 'required|in:Yes,No',
            'disciplines' => $ifYes('team_approach', 'required|array'),
            'discipline_other' => "nullable",

            'surgery' => 'required|in:Yes,No',
            'surgery_goal' => $ifYes('surgery', 'required|array'),

            'anticancer_drug' => 'required|in:Yes,No',
            'drug_purpose' => $ifYes('anticancer_drug', 'required|array'),
            'drug_types' => $request->anticancer_drug === "Yes" ? "required_without:drug_types_others|nullable|array" : "nullable",
            'drug_types_others' => 'nullable',

            'first_line_drug' => 'required|in:Yes,No',
            "first_drug_regimen" => $ifYes('first_line_drug'),
            "first_cycles" => $ifYes('first_line_drug', 'required|integer|min:1'),
            "first_treatment_goal" => $ifYes('first_line_drug'),
            "first_time" => $ifYes('first_line_drug'),

            'second_line_drug' => 'required|in:Yes,No',
            "second_drug_regimen" => $ifYes('second_line_drug'),
            "second_cycles" => $ifYes('second_line_drug', 'required|integer|min:1'),
            "second_treatment_goal" => $ifYes('second_line_drug'),
            "second_time" => $ifYes('second_line_drug'),

            'third_line_drug' => 'required|in:Yes,No',
            "third_drug_regimen" => $ifYes('third_line_drug'),
            "third_cycles" => $ifYes('third_line_drug', 'required|integer|min:1'),
            "third_treatment_goal" => $ifYes('third_line_drug'),
            "third_time" => $ifYes('third_line_drug'),

            'other_subsequent_line_drug' => 'required|in:Yes,No',
            'indicate_line' => $ifYes('other_subsequent_line_drug'),
            "other_subsequent_drug_regimen" => $ifYes('other_subsequent_line_drug'),
            "other_subsequent_cycles" => $ifYes('other_subsequent_line_drug', 'required|integer|min:1'),
            "other_subsequent_treatment_goal" => $ifYes('other_subsequent_line_drug'),
            "other_subsequent_time" => $ifYes('other_subsequent_line_drug'),

            // NOTE: these previously (wrongly) depended on other_subsequent_line_drug
            'radiotherapy' => 'required|in:Yes,No',
            'radiotherapy_types' => $request->radiotherapy === "Yes" ? "required_without:radiotherapy_types_others|nullable|array" : "nullable",
            'radiotherapy_types_others' => 'nullable',
            'radiotherapy_sequence' => $ifYes('radiotherapy'),
            'radiotherapy_goal' => $ifYes('radiotherapy'),

            'theranostics' => 'required|in:Yes,No',
            'theranostics_types' => $request->theranostics === "Yes" ? "required_without:theranostics_types_others|nullable|array" : "nullable",
            'theranostics_types_others' => "nullable",
            'theranostics_goal' => $ifYes('theranostics'),

            'other_therapies' => 'required|in:Yes,No',
            'other_therapies_types' => $ifYes('other_therapies', 'required|array'),
            'other_therapies_other' => "nullable",
        ], [
            'team_approach.required' => 'Please answer whether a multidisciplinary cancer team approach was practiced.',
            'other_therapies.required' => 'The other cancer directed therapies field is required.',
            'disciplines.required' => 'Please specify all disciplines involved.',
            'surgery_goal.required' => 'Please specify the goal of surgery.',
            'drug_purpose.required' => 'Please specify the purpose of drug administration.',
            'drug_types.required_without' => 'Please specify the anti-cancer drug type(s).',
            'radiotherapy_types.required_without' => 'Please specify the radiotherapy type(s).',
            'theranostics_types.required_without' => 'Please specify the theranostics type(s).',
        ]);

        $dependents = [
            'team_approach' => ['disciplines', 'discipline_other'],
            'surgery' => ['surgery_goal'],
            'anticancer_drug' => ['drug_purpose', 'drug_types', 'drug_types_others'],
            'first_line_drug' => ['first_drug_regimen', 'first_cycles', 'first_treatment_goal', 'first_time'],
            'second_line_drug' => ['second_drug_regimen', 'second_cycles', 'second_treatment_goal', 'second_time'],
            'third_line_drug' => ['third_drug_regimen', 'third_cycles', 'third_treatment_goal', 'third_time'],
            'other_subsequent_line_drug' => ['indicate_line', 'other_subsequent_drug_regimen', 'other_subsequent_cycles', 'other_subsequent_treatment_goal', 'other_subsequent_time'],
            'radiotherapy' => ['radiotherapy_types', 'radiotherapy_types_others', 'radiotherapy_sequence', 'radiotherapy_goal'],
            'theranostics' => ['theranostics_types', 'theranostics_types_others', 'theranostics_goal'],
            'other_therapies' => ['other_therapies_types', 'other_therapies_other'],
        ];

        foreach ($dependents as $condition => $fields) {
            if ($data[$condition] === "No") {
                foreach ($fields as $field) {
                    $data[$field] = null;
                }
            }
        }

        return $data;
    }

    /* ===================================================================
     |  Helpers
     * =================================================================== */

    /**
     * Pre-fill a form from saved data by exposing it as "old input" for this
     * request only. Real old input (after a failed validation) always wins.
     */
    private function prefill(array $values): void
    {
        if (!Session::hasOldInput()) {
            // Drop nulls so old('field', []) falls back to its default instead of returning null.
            $clean = array_filter($values, fn ($v) => $v !== null);
            unset($clean['id'], $clean['code'], $clean['created_at'], $clean['updated_at']);
            Session::now('_old_input', $clean);
        }
    }

    /** Map a row from the hospital information system to form field names. */
    private function mapHisPatient(object $p): array
    {
        $civil = collect(['Single', 'Married', 'Divorced/Separated/Annulled', 'Common-law/Live-in', 'Widowed'])
            ->first(fn ($c) => strcasecmp($c, (string) ($p->CivilStatus ?? '')) === 0);

        return array_filter([
            'patient_health_facility_id' => $p->HospitalID ?? null,
            'name' => [
                'firstname'  => $p->FirstName ?? null,
                'middlename' => $p->MiddleName ?? null,
                'lastname'   => $p->LastName ?? null,
                'suffix'     => !empty($p->Suffix) ? $p->Suffix : 'N/A',
            ],
            'date_of_birth' => !empty($p->Birthdate) ? \Carbon\Carbon::parse($p->Birthdate)->toDateString() : null,
            'sex'           => !empty($p->Gender) ? strtolower($p->Gender) : null,
            'civil_status'  => $civil,
            'nationality'   => $p->Nationality ?? null,
            'mobile_number' => $p->ContactNo ?? null,
            'email_address' => $p->Email ?? null,
        ], fn ($v) => $v !== null && $v !== '');
    }
}
