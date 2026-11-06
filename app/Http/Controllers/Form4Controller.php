<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Concerns\FollowUpWizard;
use Illuminate\Http\Request;
use App\Models\F4esas;
use App\Models\F4painassessment;
use App\Models\F4palliativecare;
use App\Models\F4cancerdiagnoseoutcome;
use App\Models\F4financialsupportmechanism;
use App\Traits\LogsActivity;

/** Form 4 - Supportive / Palliative Care (6 pages). Page rendering lives in FollowUpFormController. */
class Form4Controller extends Controller
{
    use LogsActivity, FollowUpWizard;

    private const FORM = 'form4';
    public function palliative_form(Request $request, $hospitalID)
    {
        $othersPicked = in_array('Others', (array) $request->input('reason'), true);

        $data = $request->validate(Form2Controller::firstPageRules() + [
            'reason'        => 'required|array',
            'reason.*'      => 'string|max:255',
            'reason_others' => ($othersPicked ? 'required' : 'nullable') . '|string|max:255',
            'setting'       => 'required|array',
            'setting.*'     => 'string|max:255',
        ], Form2Controller::firstPageMessages() + [
            'reason.required'        => 'Please select the reason for the supportive/palliative care consult.',
            'reason_others.required' => 'Please specify the other reason for the consult.',
            'setting.required'       => 'Please select the palliative care setting.',
        ]);

        if (!$othersPicked) {
            $data['reason_others'] = null;
        }

        return $this->fuSaveFirstPage(self::FORM, $hospitalID, $data);
    }

    public function esas(Request $request)
    {
        $this->fuRequireEntry(self::FORM);
        $symptom = 'nullable|integer|min:0|max:10';

        $validated = $request->validate([
            'gcs_score'                 => 'required|integer|between:3,15',
            'esasr_score'               => 'required|integer|min:0|max:100',
            'pain'                      => $symptom,
            'tiredness'                 => $symptom,
            'drowsiness'                => $symptom,
            'nausea'                    => $symptom,
            'appetite'                  => $symptom,
            'breath'                    => $symptom,
            'depression'                => $symptom,
            'anxiety'                   => $symptom,
            'wellbeing'                 => $symptom,
            'other_problem'             => 'nullable|string',
            'other_problem_left_title'  => 'nullable|string|max:255',
            'other_problem_right_title' => 'nullable|string|max:255',
            'other_problem_score'       => $symptom,
        ], [
            'gcs_score.between' => 'The GCS score must be between 3 and 15.',
        ]);

        return $this->fuSavePage(self::FORM, 2, F4esas::class, $validated, 'ESAS-r (Edmonton Symptom Assessment System Revised) saved.');
    }

    public function pain_assessment(Request $request)
    {
        $this->fuRequireEntry(self::FORM);
        // The detailed PQRST / behaviour assessment only applies when the patient has pain
        $ifPain = fn (string $rule) => 'nullable|required_if:is_pain,Yes|' . $rule;

        $validated = $request->validate([
            'assessment_date'       => 'required|date|before_or_equal:today',
            'is_pain'               => 'required|in:Yes,No',
            'pain_score'            => $ifPain('integer|min:0|max:10'),
            'provocation'           => $ifPain('string|max:255'),
            'provocation_quality'   => $ifPain('array'),
            'provocation_quality.*' => 'string|max:100',
            'provocation_region'    => $ifPain('string|max:1000'),
            'provocation_remarks'   => 'nullable|string|max:255',
            'severity'              => $ifPain('integer|min:1|max:10'),
            'timing'                => $ifPain('string|max:1000'),
            'findings'              => 'nullable|string|max:1000',
            'verbal_vocal'          => 'nullable|array',
            'verbal_vocal.*'        => 'string|max:255',
            'body_movement'         => 'nullable|array',
            'body_movement.*'       => 'string|max:255',
            'facial'                => 'nullable|array',
            'facial.*'              => 'string|max:255',
            'touching'              => 'nullable|array',
            'associated_signs'      => 'nullable|string|max:255',
            'signs'                 => 'nullable|array',
            'signs.*'               => 'string|max:255',

            'paracetamol'                 => 'required|in:Yes,No',
            'paracetamol_pain_controlled' => 'nullable|required_if:paracetamol,Yes|in:Yes,No',
            'paracetamol_date'            => 'nullable|date',

            'nsaids'                 => 'required|in:Yes,No',
            'nsaids_pain_controlled' => 'nullable|required_if:nsaids,Yes|in:Yes,No',
            'nsaids_date'            => 'nullable|date',

            'tramadol'                 => 'required|in:Yes,No',
            'tramadol_pain_controlled' => 'nullable|required_if:tramadol,Yes|in:Yes,No',
            'tramadol_date'            => 'nullable|date',

            'opioid'                 => 'required|in:Yes,No',
            'opioid_pain_controlled' => 'nullable|required_if:opioid,Yes|in:Yes,No',
            'opioid_date'            => 'nullable|date',

            'other_drugs'                 => 'required|in:Yes,No',
            'other_drugs_specify_name'    => 'nullable|required_if:other_drugs,Yes|string|max:255',
            'other_drugs_pain_controlled' => 'nullable|required_if:other_drugs,Yes|in:Yes,No',
            'other_drugs_date'            => 'nullable|date',

            'non_pharma'                 => 'required|in:Yes,No',
            'non_pharma_specify_name'    => 'nullable|required_if:non_pharma,Yes|string|max:255',
            'non_pharma_pain_controlled' => 'nullable|required_if:non_pharma,Yes|in:Yes,No',
            'non_pharma_date'            => 'nullable|date',

            'other_notes' => 'nullable|string|max:2000',
        ], [
            'required_if' => 'The :attribute field is required when the answer above is Yes.',
        ]);

        if ($validated['is_pain'] === 'No') {
            foreach (['pain_score', 'provocation', 'provocation_quality', 'provocation_region', 'provocation_remarks', 'severity',
                      'timing', 'findings', 'verbal_vocal', 'body_movement', 'facial', 'touching', 'associated_signs', 'signs'] as $field) {
                $validated[$field] = null;
            }
        }

        foreach (['paracetamol', 'nsaids', 'tramadol', 'opioid', 'other_drugs', 'non_pharma'] as $key) {
            if ($validated[$key] === "No") {
                $validated[$key . '_pain_controlled'] = null;
                $validated[$key . '_date'] = null;
                if (in_array($key, ['other_drugs', 'non_pharma'], true)) {
                    $validated[$key . '_specify_name'] = null;
                }
            }
        }

        return $this->fuSavePage(self::FORM, 3, F4painassessment::class, $validated, 'Pain assessment saved.');
    }

    public function palliative_care(Request $request)
    {
        $this->fuRequireEntry(self::FORM);
        $kinds = ['nutritional', 'nursing', 'rehabilitation', 'psychosocial', 'spiritual', 'others'];

        $rules = [];
        $messages = [];
        foreach ($kinds as $key) {
            $label = ucfirst($key) . ' care';
            $rules["{$key}_care"]     = 'required|in:Yes,No';
            $rules["{$key}_place"]    = "nullable|required_if:{$key}_care,Yes|in:Home,Hospital,Community-based";
            $rules["{$key}_improved"] = "nullable|required_if:{$key}_care,Yes|in:Yes,No,Not assessed";
            $messages["{$key}_place.required_if"]    = "Please select where the {$label} is given.";
            $messages["{$key}_improved.required_if"] = "Please select whether the {$label} improved the condition.";
        }
        $rules['others_specify'] = 'nullable|required_if:others_care,Yes|string|max:255';
        $messages['others_specify.required_if'] = 'Please specify the other care given.';

        $validated = $request->validate($rules, $messages);

        foreach ($kinds as $key) {
            if ($validated["{$key}_care"] === "No") {
                $validated["{$key}_place"] = null;
                $validated["{$key}_improved"] = null;
            }
        }
        if ($validated['others_care'] === 'No') {
            $validated['others_specify'] = null;
        }

        return $this->fuSavePage(self::FORM, 4, F4palliativecare::class, $validated, 'Palliative care interventions saved.');
    }

    public function cancer_diagnose_outcome(Request $request)
    {
        $this->fuRequireEntry(self::FORM);
        $death = Form2Controller::isDeathOutcome($request) ? 'required' : 'nullable';

        $validated = $request->validate([
            'diagnosis_outcome'      => 'required|array',
            'diagnosis_outcome.*'    => 'string|max:255',
            'diagnosis_outcome_date' => 'required|date|before_or_equal:today',
            'immediate_cause'        => $death . '|nullable|string|max:255',
            'antecedent_cause'       => 'nullable|string|max:255',
            'underlying_cause'       => $death . '|nullable|string|max:255',
            'other_condition'        => 'nullable|string|max:255',
        ], [
            'immediate_cause.required'  => 'The immediate cause of death is required when a death outcome is selected.',
            'underlying_cause.required' => 'The underlying cause of death is required when a death outcome is selected.',
        ]);

        if ($death === 'nullable') {
            $validated['immediate_cause'] = $validated['antecedent_cause'] = $validated['underlying_cause'] = $validated['other_condition'] = null;
        }

        return $this->fuSavePage(self::FORM, 5, F4cancerdiagnoseoutcome::class, $validated, 'Cancer diagnosis outcome saved.');
    }

    public function financial_support_mechanism(Request $request)
    {
        $this->fuRequireEntry(self::FORM);

        $validated = $request->validate([
            'financial_support' => 'required|in:Yes,No',
            'financial_type'    => 'nullable|required_if:financial_support,Yes|array',
            'financial_type.*'  => 'nullable|string|max:255',
            'financial_other'   => 'nullable|string|max:255',
            'cspmap_meds'       => 'required|array',
            'cspmap_meds.*'     => 'nullable|string|max:255',
            'cspmap_other'      => 'nullable|string|max:255',
            'other_meds'        => 'required|array',
            'other_meds.*'      => 'nullable|string|max:255',
            'other_med_other'   => 'nullable|string|max:255',
        ], [
            'financial_type.required_if' => 'Please select the type of financial support.',
        ]);

        if ($validated['financial_support'] === "No") {
            $validated["financial_type"] = null;
            $validated["financial_other"] = null;
        }

        return $this->fuSavePage(self::FORM, 6, F4financialsupportmechanism::class, $validated, 'Financial support mechanism saved.');
    }

}
