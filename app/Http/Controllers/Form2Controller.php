<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\FollowUpWizard;
use App\Models\F2cancerdiagnoseoutcome;
use App\Models\F2changetreatmentplan;
use App\Models\F2othercancertherapy;
use App\Models\F2patientstatus;
use App\Models\F2radiotheraphy;
use App\Traits\LogsActivity;
use Illuminate\Http\Request;

/** Form 2 - Patient Follow-up (6 pages). Page rendering lives in FollowUpFormController. */
class Form2Controller extends Controller
{
    use LogsActivity, FollowUpWizard;

    private const FORM = 'form2';

    /** Shared rules for the first page of Forms 2-4. */
    public static function firstPageRules(): array
    {
        return [
            'date'                      => 'required|date|before_or_equal:today',
            'name.firstname'            => 'required|string|max:100',
            'name.middlename'           => 'nullable|string|max:100',
            'name.lastname'             => 'required|string|max:100',
            'name.suffix'               => 'nullable|string|max:20',
            'primary_cancer_site'       => 'required_without:primary_cancer_site_other|nullable|array',
            'primary_cancer_site.*'     => 'string|max:255',
            'primary_cancer_site_other' => 'nullable|string|max:255',
            'laterality'                => 'required|string',
            'histologic_diagnosis'      => 'required|string|max:255',
            'icd10'                     => 'required|string|max:20',
            'clinical_stage'            => 'nullable|string',
            'stage'                     => 'nullable|array',
            'other_staging'             => 'nullable|array',
            'other_remarks'             => 'nullable|string|max:1000',
        ];
    }

    public static function firstPageMessages(): array
    {
        return [
            'name.firstname.required' => 'The first name field is required.',
            'name.lastname.required'  => 'The last name field is required.',
            'primary_cancer_site.required_without' => 'Please select at least one primary cancer site (or specify one under Others).',
        ];
    }

    /** "If a death outcome is selected, the cause-of-death fields are required." */
    public static function isDeathOutcome(Request $request, string $field = 'diagnosis_outcome'): bool
    {
        return collect((array) $request->input($field))->contains(fn ($o) => str_starts_with((string) $o, 'Death'));
    }

    public function submit_follow_up(Request $request, $hospitalID)
    {
        $data = $request->validate(self::firstPageRules(), self::firstPageMessages());
        $data['other_remarks'] = $data['other_remarks'] ?? 'N/A';   // f2followups.other_remarks is NOT NULL
        return $this->fuSaveFirstPage(self::FORM, $hospitalID, $data);
    }

    public function store_patient_eco_status(Request $request)
    {
        $this->fuRequireEntry(self::FORM);

        $validated = $request->validate([
            'ecog_status'                 => 'required|in:Yes,No',
            'ecog_grade'                  => 'nullable|required_if:ecog_status,Yes|string|max:255',
            'other_functional_assessment' => 'nullable|string|max:255',
            'surgery_done'                => 'required|in:Yes,No',
            'surgery_rvs'                 => 'nullable|string|max:255',
            'surgery_description'         => 'nullable|required_if:surgery_done,Yes|string|max:255',
            'surgery_date'                => 'nullable|required_if:surgery_done,Yes|date|before_or_equal:today',
            'surgery_goal'                => 'nullable|required_if:surgery_done,Yes|array',
            'ongoing_drug_therapy'        => 'required|in:Yes,No',
            'therapy_date_start'          => 'nullable|required_if:ongoing_drug_therapy,Yes|date',
            'drug_purpose'                => 'nullable|required_if:ongoing_drug_therapy,Yes|string|max:255',
            'drug_types'                  => 'nullable|required_if:ongoing_drug_therapy,Yes|array',
            'drug_regimen'                => 'nullable|array',
            'chemo_cycle'                 => 'nullable|array',
            'drug_type_other'             => 'nullable|string|max:255',
            'remarks'                     => 'nullable|string|max:255',
        ], [
            'ecog_grade.required_if'         => 'Please select the ECOG grade.',
            'surgery_description.required_if' => 'Please describe the surgery done.',
            'surgery_date.required_if'       => 'Please enter the surgery date.',
            'surgery_goal.required_if'       => 'Please select the goal of surgery.',
            'therapy_date_start.required_if' => 'Please enter the drug therapy start date.',
            'drug_purpose.required_if'       => 'Please select the purpose of the drug therapy.',
            'drug_types.required_if'         => 'Please select the drug type(s).',
        ]);

        $dependents = [
            'ecog_status'          => ['ecog_grade', 'other_functional_assessment'],
            'surgery_done'         => ['surgery_rvs', 'surgery_description', 'surgery_date', 'surgery_goal'],
            'ongoing_drug_therapy' => ['therapy_date_start', 'drug_purpose', 'drug_types', 'drug_regimen', 'chemo_cycle', 'drug_type_other'],
        ];

        foreach ($dependents as $parent => $fields) {
            if ($validated[$parent] === "No") {
                foreach ($fields as $field) {
                    $validated[$field] = null;   // previously written to a misspelled variable, so nothing was cleared
                }
            }
        }

        return $this->fuSavePage(self::FORM, 2, F2patientstatus::class, $validated, 'Patient ECOG status saved.');
    }

    public function store_radiotheraphy(Request $request)
    {
        $this->fuRequireEntry(self::FORM);

        $validated = $request->validate([
            'radiotherapy'            => 'required|in:Yes,No',
            'radio_date_start'        => 'nullable|required_if:radiotherapy,Yes|date',
            'radio_date_end'          => 'nullable|date|after_or_equal:radio_date_start',
            'radio_total_dose'        => 'nullable|string|max:255',
            'radio_dose_fraction'     => 'nullable|string|max:255',
            'radio_total_fractions'   => 'nullable|string|max:255',
            'radio_total_days'        => 'nullable|string|max:255',
            'radio_body_site'         => 'nullable|array',
            'radio_body_site.*'       => 'nullable|string|max:255',
            'radio_body_site_other'   => 'nullable|string|max:255',
            'radio_type'              => 'nullable|required_if:radiotherapy,Yes|array',
            'radio_type.*'            => 'nullable|string|max:255',
            'radio_type_other'        => 'nullable|string|max:255',
            'radio_goal'              => 'nullable|required_if:radiotherapy,Yes|in:Curative,Palliative',

            'theranostics'            => 'required|in:Yes,No',
            'theranostics_type'       => 'nullable|required_if:theranostics,Yes|array',
            'theranostics_type.*'     => 'nullable|string|max:255',
            'theranostics_type_other' => 'nullable|string|max:255',
            'thera_total_planned'     => 'nullable|string|max:255',
            'thera_total_received'    => 'nullable|string|max:255',
            'thera_sequences'         => 'nullable|string|max:255',
            'thera_goal'              => 'nullable|required_if:theranostics,Yes|in:Definitive,Palliative',
        ], [
            'radio_date_start.required_if'   => 'Please enter the radiotherapy start date.',
            'radio_type.required_if'         => 'Please select the radiotherapy type(s).',
            'radio_goal.required_if'         => 'Please select the radiotherapy goal.',
            'theranostics_type.required_if'  => 'Please select the theranostics type(s).',
            'thera_goal.required_if'         => 'Please select the theranostics goal.',
        ]);

        $groups = [
            'radiotherapy' => ['radio_date_start', 'radio_date_end', 'radio_total_dose', 'radio_dose_fraction', 'radio_total_fractions',
                               'radio_total_days', 'radio_body_site', 'radio_body_site_other', 'radio_type', 'radio_type_other', 'radio_goal'],
            'theranostics' => ['theranostics_type', 'theranostics_type_other', 'thera_total_planned', 'thera_total_received', 'thera_sequences', 'thera_goal'],
        ];

        foreach ($groups as $parent => $fields) {
            if ($validated[$parent] === "No") {
                foreach ($fields as $field) {
                    $validated[$field] = null;
                }
            }
        }

        return $this->fuSavePage(self::FORM, 3, F2radiotheraphy::class, $validated, 'Radiotherapy and theranostics saved.');
    }

    public function store_other_theraphy(Request $request)
    {
        $this->fuRequireEntry(self::FORM);

        $validated = $request->validate([
            'other_cancer_therapies'   => 'required|in:Yes,No',
            'cancer_therapies'         => 'nullable|required_if:other_cancer_therapies,Yes|array',
            'cancer_therapies_other'   => 'nullable|string|max:255',
            'pre_op_scenario'          => 'required|string',
            'post_op_scenario'         => 'required|string',
            'treatment_status'         => 'required|string',
        ], [
            'cancer_therapies.required_if' => 'Please select the other cancer directed therapies.',
        ]);

        if ($validated["other_cancer_therapies"] === "No") {
            $validated["cancer_therapies"] = null;
            $validated["cancer_therapies_other"] = null;
        }

        return $this->fuSavePage(self::FORM, 4, F2othercancertherapy::class, $validated, 'Other cancer directed therapies saved.');
    }

    public function change_treatment_plan(Request $request)
    {
        $this->fuRequireEntry(self::FORM);

        $validated = $request->validate([
            'surgery_plan'       => 'required|string',
            'treatment_plan'     => 'nullable|string',
            'surgery_reason'     => 'nullable|string',

            // Anti-Cancer Drug Therapy
            'anti_cancer_change' => 'required|string',
            'new_regimen'        => 'nullable|string',
            'same_regimen'       => 'nullable|string',
            'deferred_regimen'   => 'nullable|string',
            'new_drug_type'      => 'nullable|array',
            'same_drug_type'     => 'nullable|array',
            'deferred_drug_type' => 'nullable|array',
            'new_drug_regimen'   => 'nullable|array',
            'same_drug_regimen'  => 'nullable|array',
            'deferred_drug_regimen' => 'nullable|array',
            'new_chemo_cycle'    => 'nullable|array',
            'same_chemo_cycle'   => 'nullable|array',
            'deferred_chemo_cycle' => 'nullable|array',
            'new_drug_other'     => 'nullable|string',
            'same_drug_other'    => 'nullable|string',
            'deferred_drug_other'=> 'nullable|string',
            'new_next_cycle'     => 'nullable|date',
            'same_next_cycle'    => 'nullable|date',
            'deferred_next_cycle'=> 'nullable|date',
            'deferred_reason'    => 'nullable|string',

            // Radiotherapy
            'radio_change'       => 'required|string',
            'radio_treatment_plan' => 'nullable|string',
            'radio_reason'       => 'nullable|string',
            'radio_date_start'   => 'nullable|date',
            'radio_date_end'     => 'nullable|date|after_or_equal:radio_date_start',
            'radio_total_dose'   => 'nullable|string',
            'radio_dose_fraction'=> 'nullable|string',
            'radio_total_fractions' => 'nullable|string',
            'radio_type'         => 'nullable|array',
            'radio_type_other'   => 'nullable|string',

            // Theranostics
            'thera_change'       => 'required|string',
            'thera_treatment_plan' => 'nullable|string',
            'thera_reason'       => 'nullable|string',
            'thera_type'         => 'nullable|array',
            'thera_type_other'   => 'nullable|string',
            'thera_total_planned_dose' => 'nullable|string',
            'thera_total_fractions' => 'nullable|string',
            'thera_dose_fraction'=> 'nullable|string',

            // Palliative Care
            'palliative'         => 'required|string',

            // Other Cancer Directed Therapies
            'other_cancer'       => 'required|string',
            'other_cancer_treatment_plan' => 'nullable|string',
            'other_cancer_type'  => 'nullable|array',
            'other_cancer_other' => 'nullable|string',
            'other_cancer_reason'=> 'nullable|string',

            'remarks'            => 'nullable|string',
        ]);

        $dependents = [
            'surgery_plan'       => ['treatment_plan', 'surgery_reason'],
            'anti_cancer_change' => ['new_regimen', 'same_regimen', 'deferred_regimen', 'new_drug_type', 'same_drug_type', 'deferred_drug_type',
                                     'new_drug_regimen', 'same_drug_regimen', 'deferred_drug_regimen', 'new_chemo_cycle', 'same_chemo_cycle',
                                     'deferred_chemo_cycle', 'new_drug_other', 'same_drug_other', 'deferred_drug_other', 'new_next_cycle',
                                     'same_next_cycle', 'deferred_next_cycle', 'deferred_reason'],
            'radio_change'       => ['radio_reason', 'radio_treatment_plan', 'radio_date_start', 'radio_date_end', 'radio_total_dose',
                                     'radio_dose_fraction', 'radio_total_fractions', 'radio_type', 'radio_type_other'],
            'thera_change'       => ['thera_reason', 'thera_type', 'thera_type_other', 'thera_total_fractions', 'thera_dose_fraction',
                                     'thera_treatment_plan', 'thera_total_planned_dose'],
            'other_cancer'       => ['other_cancer_type', 'other_cancer_other', 'other_cancer_reason', 'other_cancer_treatment_plan'],
        ];

        foreach ($dependents as $parent => $fields) {
            if ($validated[$parent] === "No") {
                foreach ($fields as $field) {
                    $validated[$field] = null;
                }
            }
        }

        return $this->fuSavePage(self::FORM, 5, F2changetreatmentplan::class, $validated, 'Change in treatment plan saved.');
    }

    public function store_cancer_diagnose(Request $request)
    {
        $this->fuRequireEntry(self::FORM);
        $death = self::isDeathOutcome($request) ? 'required' : 'nullable';

        $validated = $request->validate([
            'diagnosis_outcome'       => 'nullable|array',
            'diagnosis_outcome.*'     => 'string|max:255',
            'diagnosis_outcome_date'  => 'nullable|required_with:diagnosis_outcome|date',

            'cause_immediate'   => $death . '|nullable|string|max:255',
            'cause_antecedent'  => 'nullable|string|max:255',
            'cause_underlying'  => $death . '|nullable|string|max:255',
            'cause_other'       => 'nullable|string|max:255',

            'financial_support' => 'required|in:Yes,No',
            'financial_type'    => 'nullable|required_if:financial_support,Yes|array',
            'financial_type.*'  => 'string|max:255',
            'financial_other'   => 'nullable|string|max:255',

            'cspmap_meds'       => 'nullable|array',
            'cspmap_meds.*'     => 'string|max:255',
            'cspmap_other'      => 'nullable|string|max:255',

            'other_meds'        => 'nullable|array',
            'other_meds.*'      => 'string|max:255',
            'other_med_other'   => 'nullable|string|max:255',
        ], [
            'cause_immediate.required'  => 'The immediate cause of death is required when a death outcome is selected.',
            'cause_underlying.required' => 'The underlying cause of death is required when a death outcome is selected.',
            'financial_type.required_if' => 'Please select the type of financial support.',
        ]);

        if ($validated['financial_support'] === "No") {
            $validated['financial_type'] = null;
            $validated['financial_other'] = null;
        }

        return $this->fuSavePage(self::FORM, 6, F2cancerdiagnoseoutcome::class, $validated, 'Cancer diagnosis outcome saved.');
    }
}
