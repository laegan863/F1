<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\F3patientsurveillanceform;
use App\Models\F3cancerdiagnoseoutcome;
use App\Models\F3cancertreatmenthistory;
use App\Models\F3treatmenthistory2;
use App\Models\F3financialsupport;

class Form3Controller extends Controller
{
    public function f3patientsurveillanceforms(Request $request, $hospitalID)
    {
        $validate = $request->validate([
            'date' => 'required|date',
            'name.firstname' => 'required',
            'name.middlename' => 'nullable',
            'name.lastname' => 'required',
            'primary_cancer_site' => 'required',
            'laterality' => 'required',
            'histologic_diagnosis' => 'required',
            'icd10' => 'required',
            'clinical_stage' => 'nullable',
            'stage' => 'nullable',
            'other_staging' => 'nullable',
            'other_remarks' => 'nullable',
        ]);

        $validate['hospitalID'] = $hospitalID;

        $data = F3patientsurveillanceform::create($validate);

        Session::put([
            'code' => $data->id
        ]);
        
        return to_route('form3.secondpage')->with('success', 'PATIENT SURVEILLANCE FORM Saved Successfully!');

    }

    public function cancerdiagnoseoutcome(Request $request)
    {
         $validated = $request->validate([
            'diagnosis_outcome'      => 'required|array',
            'diagnosis_outcome.*'    => 'string|max:255',
            'diagnosis_outcome_date' => 'required|date',

            'cause_immediate'        => 'required|string|max:255',
            'cause_antecedent'       => 'required|string|max:255',
            'cause_underlying'       => 'required|string|max:255',
            'cause_other'            => 'required|string|max:255',
        ],[
            'cause_immediate.required' => 'The Immediate Cause field is required',
            'cause_antecedent.required' => 'The Antecedent Cause field is required',
            'cause_underlying.required' => 'The Underlying Cause field is required',
            'cause_other.required' => 'The Other significant condition directly leading to death field is required',
        ]);

        // $validated['code'] = session('code');
        $validated['code'] = 4;

        F3cancerdiagnoseoutcome::updateOrCreate(
            ['code' => $validated['code']], 
            $validated
        );

        return to_route('form3.page3')
                ->with('success', 'Cancer Diagnosis Outcome saved successfully.');

    }

    public function treatment_history(Request $request)
    {
        $code = Session::get('code');

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

        $table1 = F3cancertreatmenthistory::updateOrCreate(
            ['code' => $code],
            $validatedSurgeryDrug
        );

        $table2 = F3treatmenthistory2::updateOrCreate(
            ['code' => $code],
            $validatedRadioOthers
        );

        return to_route('form3.page4')->with('success', 'Cancer Treatment History Data saved successfully.');

        return response()->json([
            'surgery_drug'      => $table1,
            'radio_thera_other' => $table2
        ]);
    }

    public function financial_support(Request $request)
    {
        Session::put('code', 4);
        $validated = $request->validate([
            'financial_support'   => 'required|in:Yes,No',
            'financial_type'      => 'nullable|array',
            'financial_other'     => 'nullable|string|max:255',
            'cspmap_meds'         => 'nullable|array',
            'cspmap_other'        => 'nullable|string|max:255',
            'other_meds'          => 'nullable|array',
            'other_med_other'     => 'nullable|string|max:255',
        ]);

        if($validated['financial_support'] == "No"){
            $validated['financial_type'] = null;
        }

        $validated['code'] = session('code');
        $validated['status'] = 1;
        F3financialsupport::updateOrCreate(
            ['code' => $validated['code']],
            $validated
        );

        

        $user = F3patientsurveillanceform::find($validated['code']);
        $user->status = 1;
        $user->save();

        $data = DB::table('demographicprofiles')
                ->where('hospitalID', $user->hospitalID)
                ->where('status', 1)
                ->first();
        Session::forget(['code']);
        return redirect('admin/forms/'.$data->id)->with('success', 'Form 3 was saved successfully!');
    }
}
 