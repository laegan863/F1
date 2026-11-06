<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Concerns\FollowUpWizard;
use Illuminate\Http\Request;
use App\Models\F3cancerdiagnoseoutcome;
use App\Models\F3cancertreatmenthistory;
use App\Models\F3treatmenthistory2;
use App\Models\F3financialsupport;
use App\Traits\LogsActivity;

/** Form 3 - Patient Surveillance (4 pages). Page rendering lives in FollowUpFormController. */
class Form3Controller extends Controller
{
    use LogsActivity, FollowUpWizard;

    private const FORM = 'form3';
    public function f3patientsurveillanceforms(Request $request, $hospitalID)
    {
        $data = $request->validate(Form2Controller::firstPageRules(), Form2Controller::firstPageMessages());
        return $this->fuSaveFirstPage(self::FORM, $hospitalID, $data);
    }

    public function cancerdiagnoseoutcome(Request $request)
    {
        $this->fuRequireEntry(self::FORM);
        // Cause-of-death fields only apply when a death outcome is selected
        $death = Form2Controller::isDeathOutcome($request) ? 'required' : 'nullable';

        $validated = $request->validate([
            'diagnosis_outcome'      => 'required|array',
            'diagnosis_outcome.*'    => 'string|max:255',
            'diagnosis_outcome_date' => 'required|date|before_or_equal:today',
            'cause_immediate'        => $death . '|nullable|string|max:255',
            'cause_antecedent'       => 'nullable|string|max:255',
            'cause_underlying'       => $death . '|nullable|string|max:255',
            'cause_other'            => 'nullable|string|max:255',
        ], [
            'cause_immediate.required'  => 'The immediate cause of death is required when a death outcome is selected.',
            'cause_underlying.required' => 'The underlying cause of death is required when a death outcome is selected.',
        ]);

        if ($death === 'nullable') {
            $validated['cause_immediate'] = $validated['cause_antecedent'] = $validated['cause_underlying'] = $validated['cause_other'] = null;
        }

        return $this->fuSavePage(self::FORM, 2, F3cancerdiagnoseoutcome::class, $validated, 'Cancer diagnosis outcome saved.');
    }

    public function treatment_history(Request $request)
    {
        $code = $this->fuRequireEntry(self::FORM)->getKey();

        $validatedSurgeryDrug = $request->validate([
            // === SURGERIES ===
            'first_surgery'          => 'required|in:Yes,No',
            'first_surgery_date'     => 'nullable|required_if:first_surgery,Yes|date',
            'first_surgery_code'     => 'nullable|required_if:first_surgery,Yes|string|max:255',
            'first_surgery_desc'     => 'nullable|required_if:first_surgery,Yes|string|max:255',
            'first_goal'             => 'nullable|required_if:first_surgery,Yes|array',
            'first_goal.*'           => 'nullable|required_if:first_surgery,Yes|string|max:255',
            'first_adverse_event'    => 'nullable|required_if:first_surgery,Yes|string|in:None,Minor,Major,Serious,Unknown',

            'second_surgery'         => 'required|in:Yes,No',
            'second_surgery_date'    => 'nullable|required_if:second_surgery,Yes|date',
            'second_surgery_code'    => 'nullable|required_if:second_surgery,Yes|string|max:255',
            'second_surgery_desc'    => 'nullable|required_if:second_surgery,Yes|string|max:255',
            'second_goal'            => 'nullable|required_if:second_surgery,Yes|array',
            'second_goal.*'          => 'nullable|required_if:second_surgery,Yes|string|max:255',
            'second_adverse_event'   => 'nullable|required_if:second_surgery,Yes|string|in:None,Minor,Major,Serious,Unknown',

            'third_surgery'          => 'required|in:Yes,No',
            'third_surgery_date'     => 'nullable|required_if:third_surgery,Yes|date',
            'third_surgery_code'     => 'nullable|required_if:third_surgery,Yes|string|max:255',
            'third_surgery_desc'     => 'nullable|required_if:third_surgery,Yes|string|max:255',
            'third_goal'             => 'nullable|required_if:third_surgery,Yes|array',
            'third_goal.*'           => 'nullable|required_if:third_surgery,Yes|string|max:255',
            'third_adverse_event'    => 'nullable|required_if:third_surgery,Yes|string|in:None,Minor,Major,Serious,Unknown',

            'fourth_surgery'         => 'required|in:Yes,No',
            'fourth_surgery_date'    => 'nullable|required_if:fourth_surgery,Yes|date',
            'fourth_surgery_code'    => 'nullable|required_if:fourth_surgery,Yes|string|max:255',
            'fourth_surgery_desc'    => 'nullable|required_if:fourth_surgery,Yes|string|max:255',
            'fourth_goal'            => 'nullable|required_if:fourth_surgery,Yes|array',
            'fourth_goal.*'          => 'nullable|required_if:fourth_surgery,Yes|string|max:255',
            'fourth_adverse_event'   => 'nullable|required_if:fourth_surgery,Yes|string|in:None,Minor,Major,Serious,Unknown',

            // === DRUGS ===
            'first_drug'                    => 'required|in:Yes,No',
            'first_purpose_administration'  => 'nullable|required_if:first_drug,Yes|string|in:Neoadjuvant,Adjuvant,Palliative',
            'first_drug_type'               => 'nullable|required_if:first_drug,Yes|array',
            'first_drug_type.*'             => 'nullable|required_if:first_drug,Yes|string|max:255',
            'first_drug_regimen'            => 'nullable|required_if:first_drug,Yes|string|max:255',
            'first_drug_response'           => 'nullable|required_if:first_drug,Yes|string|max:255',
            'first_drug_adverse'            => 'nullable|required_if:first_drug,Yes|string|in:None,Minor,Major,Serious,Unknown',

            'second_drug'                   => 'required|in:Yes,No',
            'second_purpose_administration' => 'nullable|required_if:second_drug,Yes|string|in:Neoadjuvant,Adjuvant,Palliative',
            'second_drug_type'              => 'nullable|required_if:second_drug,Yes|array',
            'second_drug_type.*'            => 'nullable|required_if:second_drug,Yes|string|max:255',
            'second_drug_regimen'           => 'nullable|required_if:second_drug,Yes|string|max:255',
            'second_drug_response'          => 'nullable|required_if:second_drug,Yes|string|max:255',
            'second_drug_adverse'           => 'nullable|required_if:second_drug,Yes|string|in:None,Minor,Major,Serious,Unknown',

            'third_drug'                    => 'required|in:Yes,No',
            'third_purpose_administration'  => 'nullable|required_if:third_drug,Yes|string|in:Neoadjuvant,Adjuvant,Palliative',
            'third_drug_type'               => 'nullable|required_if:third_drug,Yes|array',
            'third_drug_type.*'             => 'nullable|required_if:third_drug,Yes|string|max:255',
            'third_drug_regimen'            => 'nullable|required_if:third_drug,Yes|string|max:255',
            'third_drug_response'           => 'nullable|required_if:third_drug,Yes|string|max:255',
            'third_drug_adverse'            => 'nullable|required_if:third_drug,Yes|string|in:None,Minor,Major,Serious,Unknown',

            'fourth_drug'                   => 'required|in:Yes,No',
            'fourth_purpose_administration' => 'nullable|required_if:fourth_drug,Yes|string|in:Neoadjuvant,Adjuvant,Palliative',
            'fourth_drug_type'              => 'nullable|required_if:fourth_drug,Yes|array',
            'fourth_drug_type.*'            => 'nullable|required_if:fourth_drug,Yes|string|max:255',
            'fourth_drug_regimen'           => 'nullable|required_if:fourth_drug,Yes|string|max:255',
            'fourth_drug_response'          => 'nullable|required_if:fourth_drug,Yes|string|max:255',
            'fourth_drug_adverse'           => 'nullable|required_if:fourth_drug,Yes|string|in:None,Minor,Major,Serious,Unknown',
        ]);


        $validatedSurgeryDrug['code'] = $code;

        foreach (['first','second','third','fourth'] as $key) {
            if ($validatedSurgeryDrug["{$key}_surgery"] === "No") {
                $validatedSurgeryDrug["{$key}_surgery_date"]  = null;
                $validatedSurgeryDrug["{$key}_surgery_code"]  = null;
                $validatedSurgeryDrug["{$key}_surgery_desc"]  = null;
                $validatedSurgeryDrug["{$key}_goal"]          = null;
                $validatedSurgeryDrug["{$key}_adverse_event"] = null;
            }
        }

        foreach (['first','second','third','fourth'] as $key) {
            if ($validatedSurgeryDrug["{$key}_drug"] === "No") {
                $validatedSurgeryDrug["{$key}_purpose_administration"] = null;
                $validatedSurgeryDrug["{$key}_drug_type"]              = null;
                $validatedSurgeryDrug["{$key}_drug_regimen"]           = null;
                $validatedSurgeryDrug["{$key}_drug_response"]          = null;
                $validatedSurgeryDrug["{$key}_drug_adverse"]           = null;
            }
        }


        $validatedRadioOthers = $request->validate([
            // ===== FIRST RADIOTHERAPY =====
            'first_radio'              => 'required|in:Yes,No',
            'first_radio_type'         => 'required_if:first_radio,Yes|array',
            'first_radio_type.*'       => 'required_if:first_radio,Yes|string|max:255',
            'first_radio_type_other'   => 'nullable|string|max:255',
            'first_sequence'           => 'required_if:first_radio,Yes|string|in:Concurrent ChemoRT,Sequential',
            'first_treatment_goal'     => 'required_if:first_radio,Yes|string|in:Definitive,Palliative',
            'first_radio_adverse'      => 'required_if:first_radio,Yes|string|in:None,Minor,Major,Serious,Unknown',

            // ===== SECOND RADIOTHERAPY =====
            'second_radio'             => 'required|in:Yes,No',
            'second_radio_type'        => 'required_if:second_radio,Yes|array',
            'second_radio_type.*'      => 'required_if:second_radio,Yes|string|max:255',
            'second_radio_type_other'  => 'nullable|string|max:255',
            'second_sequence'          => 'required_if:second_radio,Yes|string|in:Concurrent ChemoRT,Sequential',
            'second_treatment_goal'    => 'required_if:second_radio,Yes|string|in:Definitive,Palliative',
            'second_radio_adverse'     => 'required_if:second_radio,Yes|string|in:None,Minor,Major,Serious,Unknown',

            // ===== THIRD RADIOTHERAPY =====
            'third_radio'              => 'required|in:Yes,No',
            'third_radio_type'         => 'required_if:third_radio,Yes|array',
            'third_radio_type.*'       => 'required_if:third_radio,Yes|string|max:255',
            'third_radio_type_other'   => 'nullable|string|max:255',
            'third_sequence'           => 'required_if:third_radio,Yes|string|in:Concurrent ChemoRT,Sequential',
            'third_treatment_goal'     => 'required_if:third_radio,Yes|string|in:Definitive,Palliative',
            'third_radio_adverse'      => 'required_if:third_radio,Yes|string|in:None,Minor,Major,Serious,Unknown',

            // ===== FOURTH RADIOTHERAPY =====
            'fourth_radio'             => 'required|in:Yes,No',
            'fourth_radio_type'        => 'required_if:fourth_radio,Yes|array',
            'fourth_radio_type.*'      => 'required_if:fourth_radio,Yes|string|max:255',
            'fourth_radio_type_other'  => 'nullable|string|max:255',
            'fourth_sequence'          => 'required_if:fourth_radio,Yes|string|in:Concurrent ChemoRT,Sequential',
            'fourth_treatment_goal'    => 'required_if:fourth_radio,Yes|string|in:Definitive,Palliative',
            'fourth_radio_adverse'     => 'required_if:fourth_radio,Yes|string|in:None,Minor,Major,Serious,Unknown',

            // ===== FIRST THERANOSTICS =====
            'first_theranostics'                => 'required|in:Yes,No',
            'first_thera_type'                  => 'required_if:first_theranostics,Yes|array',
            'first_thera_type.*'                => 'required_if:first_theranostics,Yes|string|max:255',
            'first_theranostics_other_specify'  => 'nullable|string|max:255',
            'first_thera_goal'                  => 'required_if:first_theranostics,Yes|string|in:Definitive,Palliative',
            'first_thera_adverse'               => 'required_if:first_theranostics,Yes|string|in:None,Minor,Major,Serious,Unknown',

            // ===== SECOND THERANOSTICS =====
            'second_theranostics'               => 'required|in:Yes,No',
            'second_thera_type'                 => 'required_if:second_theranostics,Yes|array',
            'second_thera_type.*'               => 'required_if:second_theranostics,Yes|string|max:255',
            'second_theranostics_other_specify' => 'nullable|string|max:255',
            'second_thera_goal'                 => 'required_if:second_theranostics,Yes|string|in:Definitive,Palliative',
            'second_thera_adverse'              => 'required_if:second_theranostics,Yes|string|in:None,Minor,Major,Serious,Unknown',

            // ===== THIRD THERANOSTICS =====
            'third_theranostics'                => 'required|in:Yes,No',
            'third_thera_type'                  => 'required_if:third_theranostics,Yes|array',
            'third_thera_type.*'                => 'required_if:third_theranostics,Yes|string|max:255',
            'third_theranostics_other_specify'  => 'nullable|string|max:255',
            'third_thera_goal'                  => 'required_if:third_theranostics,Yes|string|in:Definitive,Palliative',
            'third_thera_adverse'               => 'required_if:third_theranostics,Yes|string|in:None,Minor,Major,Serious,Unknown',

            // ===== FOURTH THERANOSTICS =====
            'fourth_theranostics'               => 'required|in:Yes,No',
            'fourth_thera_type'                 => 'required_if:fourth_theranostics,Yes|array',
            'fourth_thera_type.*'               => 'required_if:fourth_theranostics,Yes|string|max:255',
            'fourth_theranostics_other_specify' => 'nullable|string|max:255',
            'fourth_thera_goal'                 => 'required_if:fourth_theranostics,Yes|string|in:Definitive,Palliative',
            'fourth_thera_adverse'              => 'required_if:fourth_theranostics,Yes|string|in:None,Minor,Major,Serious,Unknown',

            // ===== OTHER CANCER =====
            'other_cancer'              => 'required|in:Yes,No',
            'other_cancer_type'         => 'required_if:other_cancer,Yes|array',
            'other_cancer_type.*'       => 'required_if:other_cancer,Yes|string|max:255',
            'cancer_type_other_specify' => 'nullable|string|max:255',

            // ===== GENERAL =====
            'remarks'                   => 'nullable|string|max:1000',
        ]);


        foreach (['first','second','third','fourth'] as $key) {
            if ($validatedRadioOthers["{$key}_radio"] === "No") {
                $validatedRadioOthers["{$key}_radio_type"]        = null;
                $validatedRadioOthers["{$key}_radio_type_other"]  = null;
                $validatedRadioOthers["{$key}_sequence"]          = null;
                $validatedRadioOthers["{$key}_treatment_goal"]    = null;
                $validatedRadioOthers["{$key}_radio_adverse"]     = null;
            }
        }

        foreach (['first','second','third','fourth'] as $key) {
            if ($validatedRadioOthers["{$key}_theranostics"] === "No") {
                $validatedRadioOthers["{$key}_thera_type"]                 = null;
                $validatedRadioOthers["{$key}_theranostics_other_specify"] = null;
                $validatedRadioOthers["{$key}_thera_goal"]                 = null;
                $validatedRadioOthers["{$key}_thera_adverse"]              = null;
            }
        }

        if ($validatedRadioOthers['other_cancer'] === "No") {
            $validatedRadioOthers['other_cancer_type']         = null;
            $validatedRadioOthers['cancer_type_other_specify'] = null;
        }

        $validatedRadioOthers['code'] = $code;

        F3cancertreatmenthistory::updateOrCreate(['code' => $code], $validatedSurgeryDrug);
        F3treatmenthistory2::updateOrCreate(['code' => $code], $validatedRadioOthers);

        return $this->fuAfterSave(self::FORM, 3, $this->fuEntry(self::FORM), 'Cancer treatment history saved.');
    }

    public function financial_support(Request $request)
    {
        $this->fuRequireEntry(self::FORM);

        $validated = $request->validate([
            'financial_support'   => 'required|in:Yes,No',
            'financial_type'      => 'nullable|required_if:financial_support,Yes|array',
            'financial_other'     => 'nullable|string|max:255',
            'cspmap_meds'         => 'nullable|array',
            'cspmap_other'        => 'nullable|string|max:255',
            'other_meds'          => 'nullable|array',
            'other_med_other'     => 'nullable|string|max:255',
        ], [
            'financial_type.required_if' => 'Please select the type of financial support.',
        ]);

        if ($validated['financial_support'] === "No") {
            $validated['financial_type'] = null;
            $validated['financial_other'] = null;
        }
        $validated['status'] = 1;

        return $this->fuSavePage(self::FORM, 4, F3financialsupport::class, $validated, 'Financial support saved.');
    }
}
 