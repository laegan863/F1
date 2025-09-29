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
            'other_remarks' => 'required',
        ]);

        $validate['hospitalID'] = $hospitalID;

        $data = F3patientsurveillanceform::updateOrCreate(
            ['hospitalID' => $hospitalID],
            $validate
        );

        Session::put([
            'code' => $data->id
        ]);
        
        return to_route('form3.secondpage');

    }

    public function cancerdiagnoseoutcome(Request $request)
    {
         $validated = $request->validate([
            'diagnosis_outcome'      => 'nullable|array',
            'diagnosis_outcome.*'    => 'string|max:255',
            'diagnosis_outcome_date' => 'nullable|date',

            'cause_immediate'        => 'nullable|string|max:255',
            'cause_antecedent'       => 'nullable|string|max:255',
            'cause_underlying'       => 'nullable|string|max:255',
            'cause_other'            => 'nullable|string|max:255',
        ]);

        $validated['code'] = session('code');

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
            'first_surgery'          => 'nullable|in:Yes,No',
            'first_surgery_date'     => 'nullable|date',
            'first_surgery_code'     => 'nullable|string|max:255',
            'first_surgery_desc'     => 'nullable|string|max:255',
            'first_goal'             => 'nullable|array',
            'first_goal.*'           => 'nullable|string|max:255',
            'first_adverse_event'    => 'nullable|string|in:None,Minor,Major,Serious,Unknown',

            'second_surgery'         => 'nullable|in:Yes,No',
            'second_surgery_date'    => 'nullable|date',
            'second_surgery_code'    => 'nullable|string|max:255',
            'second_surgery_desc'    => 'nullable|string|max:255',
            'second_goal'            => 'nullable|array',
            'second_goal.*'          => 'nullable|string|max:255',
            'second_adverse_event'   => 'nullable|string|in:None,Minor,Major,Serious,Unknown',

            'third_surgery'          => 'nullable|in:Yes,No',
            'third_surgery_date'     => 'nullable|date',
            'third_surgery_code'     => 'nullable|string|max:255',
            'third_surgery_desc'     => 'nullable|string|max:255',
            'third_goal'             => 'nullable|array',
            'third_goal.*'           => 'nullable|string|max:255',
            'third_adverse_event'    => 'nullable|string|in:None,Minor,Major,Serious,Unknown',

            'fourth_surgery'         => 'nullable|in:Yes,No',
            'fourth_surgery_date'    => 'nullable|date',
            'fourth_surgery_code'    => 'nullable|string|max:255',
            'fourth_surgery_desc'    => 'nullable|string|max:255',
            'fourth_goal'            => 'nullable|array',
            'fourth_goal.*'          => 'nullable|string|max:255',
            'fourth_adverse_event'   => 'nullable|string|in:None,Minor,Major,Serious,Unknown',

            'first_drug'                    => 'nullable|in:Yes,No',
            'first_purpose_administration'  => 'nullable|string|in:Neoadjuvant,Adjuvant,Palliative',
            'first_drug_type'               => 'nullable|array',
            'first_drug_type.*'             => 'nullable|string|max:255',
            'first_drug_regimen'            => 'nullable|string|max:255',
            'first_drug_response'           => 'nullable|string|max:255',
            'first_drug_adverse'            => 'nullable|string|in:None,Minor,Major,Serious,Unknown',

            'second_drug'                   => 'nullable|in:Yes,No',
            'second_purpose_administration' => 'nullable|string|in:Neoadjuvant,Adjuvant,Palliative',
            'second_drug_type'              => 'nullable|array',
            'second_drug_type.*'            => 'nullable|string|max:255',
            'second_drug_regimen'           => 'nullable|string|max:255',
            'second_drug_response'          => 'nullable|string|max:255',
            'second_drug_adverse'           => 'nullable|string|in:None,Minor,Major,Serious,Unknown',

            'third_drug'                    => 'nullable|in:Yes,No',
            'third_purpose_administration'  => 'nullable|string|in:Neoadjuvant,Adjuvant,Palliative',
            'third_drug_type'               => 'nullable|array',
            'third_drug_type.*'             => 'nullable|string|max:255',
            'third_drug_regimen'            => 'nullable|string|max:255',
            'third_drug_response'           => 'nullable|string|max:255',
            'third_drug_adverse'            => 'nullable|string|in:None,Minor,Major,Serious,Unknown',

            'fourth_drug'                   => 'nullable|in:Yes,No',
            'fourth_purpose_administration' => 'nullable|string|in:Neoadjuvant,Adjuvant,Palliative',
            'fourth_drug_type'              => 'nullable|array',
            'fourth_drug_type.*'            => 'nullable|string|max:255',
            'fourth_drug_regimen'           => 'nullable|string|max:255',
            'fourth_drug_response'          => 'nullable|string|max:255',
            'fourth_drug_adverse'           => 'nullable|string|in:None,Minor,Major,Serious,Unknown',
        ]);

        $validatedSurgeryDrug['code'] = $code;

        $validatedRadioOthers = $request->validate([
            'first_radio'              => 'nullable|in:Yes,No',
            'first_radio_type'         => 'nullable|array',
            'first_radio_type.*'       => 'nullable|string|max:255',
            'first_radio_type_other'   => 'nullable|string|max:255',
            'first_sequence'           => 'nullable|string|in:Concurrent ChemoRT,Sequential',
            'first_treatment_goal'     => 'nullable|string|in:Definitive,Palliative',
            'first_radio_adverse'      => 'nullable|string|in:None,Minor,Major,Serious,Unknown',

            'second_radio'             => 'nullable|in:Yes,No',
            'second_radio_type'        => 'nullable|array',
            'second_radio_type.*'      => 'nullable|string|max:255',
            'second_radio_type_other'  => 'nullable|string|max:255',
            'second_sequence'          => 'nullable|string|in:Concurrent ChemoRT,Sequential',
            'second_treatment_goal'    => 'nullable|string|in:Definitive,Palliative',
            'second_radio_adverse'     => 'nullable|string|in:None,Minor,Major,Serious,Unknown',

            'third_radio'              => 'nullable|in:Yes,No',
            'third_radio_type'         => 'nullable|array',
            'third_radio_type.*'       => 'nullable|string|max:255',
            'third_radio_type_other'   => 'nullable|string|max:255',
            'third_sequence'           => 'nullable|string|in:Concurrent ChemoRT,Sequential',
            'third_treatment_goal'     => 'nullable|string|in:Definitive,Palliative',
            'third_radio_adverse'      => 'nullable|string|in:None,Minor,Major,Serious,Unknown',

            'fourth_radio'             => 'nullable|in:Yes,No',
            'fourth_radio_type'        => 'nullable|array',
            'fourth_radio_type.*'      => 'nullable|string|max:255',
            'fourth_radio_type_other'  => 'nullable|string|max:255',
            'fourth_sequence'          => 'nullable|string|in:Concurrent ChemoRT,Sequential',
            'fourth_treatment_goal'    => 'nullable|string|in:Definitive,Palliative',
            'fourth_radio_adverse'     => 'nullable|string|in:None,Minor,Major,Serious,Unknown',

            'first_theranostics'                => 'nullable|in:Yes,No',
            'first_thera_type'                  => 'nullable|array',
            'first_thera_type.*'                => 'nullable|string|max:255',
            'first_theranostics_other_specify'  => 'nullable|string|max:255',
            'first_thera_goal'                  => 'nullable|string|in:Definitive,Palliative',
            'first_thera_adverse'               => 'nullable|string|in:None,Minor,Major,Serious,Unknown',

            'second_theranostics'               => 'nullable|in:Yes,No',
            'second_thera_type'                 => 'nullable|array',
            'second_thera_type.*'               => 'nullable|string|max:255',
            'second_theranostics_other_specify' => 'nullable|string|max:255',
            'second_thera_goal'                 => 'nullable|string|in:Definitive,Palliative',
            'second_thera_adverse'              => 'nullable|string|in:None,Minor,Major,Serious,Unknown',

            'third_theranostics'                => 'nullable|in:Yes,No',
            'third_thera_type'                  => 'nullable|array',
            'third_thera_type.*'                => 'nullable|string|max:255',
            'third_theranostics_other_specify'  => 'nullable|string|max:255',
            'third_thera_goal'                  => 'nullable|string|in:Definitive,Palliative',
            'third_thera_adverse'               => 'nullable|string|in:None,Minor,Major,Serious,Unknown',

            'fourth_theranostics'               => 'nullable|in:Yes,No',
            'fourth_thera_type'                 => 'nullable|array',
            'fourth_thera_type.*'               => 'nullable|string|max:255',
            'fourth_theranostics_other_specify' => 'nullable|string|max:255',
            'fourth_thera_goal'                 => 'nullable|string|in:Definitive,Palliative',
            'fourth_thera_adverse'              => 'nullable|string|in:None,Minor,Major,Serious,Unknown',

            'other_cancer'              => 'nullable|in:Yes,No',
            'other_cancer_type'         => 'nullable|array',
            'other_cancer_type.*'       => 'nullable|string|max:255',
            'cancer_type_other_specify' => 'nullable|string|max:255',

            'remarks'                   => 'nullable|string|max:1000',
        ]);
        $validatedRadioOthers['code'] = $code;

        $table1 = F3cancertreatmenthistory::updateOrCreate(
            ['code' => $code],
            $validatedSurgeryDrug
        );

        $table2 = F3treatmenthistory2::updateOrCreate(
            ['code' => $code],
            $validatedRadioOthers
        );

        return to_route('form3.page4',[
            'success' => 'Data saved successfully.'
        ]);

        return response()->json([
            'surgery_drug'      => $table1,
            'radio_thera_other' => $table2
        ]);
    }

    public function financial_support(Request $request)
    {
        $validated = $request->validate([
            'financial_support'   => 'required|in:Yes,No',
            'financial_type'      => 'nullable|array',
            'financial_other'     => 'nullable|string|max:255',
            'cspmap_meds'         => 'nullable|array',
            'cspmap_other'        => 'nullable|string|max:255',
            'other_meds'          => 'nullable|array',
            'other_med_other'     => 'nullable|string|max:255',
        ]);
        $validated['code'] = session('code');
        $validated['status'] = 1;
        F3financialsupport::updateOrCreate(
            ['code' => $validated['code']],
            $validated
        );

        $user = F3patientsurveillanceform::find($validated['code']); 
        $data = DB::table('demographicprofiles')
                ->where('hospitalID', $user->hospitalID)
                ->where('status', 1)
                ->first();

        return redirect('admin/forms/'.$data->id)->with('success', 'Form 2 was saved successfully!');
    }


}
 