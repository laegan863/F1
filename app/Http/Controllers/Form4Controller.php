<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\F4esas;
use App\Models\F4palliativeform;
use App\Models\F4painassessment;
use App\Models\F4palliativecare;
use App\Models\F4cancerdiagnoseoutcome;
use App\Models\F4financialsupportmechanism;

class Form4Controller extends Controller
{
    public function palliative_form(Request $request, $hospitalID)
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

        $data = F4palliativeform::updateOrCreate($validate);

        Session::put([
            'code' => $data->id
        ]);
        
        return to_route('form4.page2');
    }

    public function esas(Request $request)
    {
        $code = session('code');

        $validated = $request->validate([
            'gcs_score'            => 'nullable|integer|min:0|max:15',
            'esasr_score'          => 'nullable|integer|min:0|max:10',
            'pain'                 => 'nullable|integer|min:0|max:10',
            'tiredness'            => 'nullable|integer|min:0|max:10',
            'drowsiness'           => 'nullable|integer|min:0|max:10',
            'nausea'               => 'nullable|integer|min:0|max:10',
            'appetite'             => 'nullable|integer|min:0|max:10',
            'breath'               => 'nullable|integer|min:0|max:10',
            'depression'           => 'nullable|integer|min:0|max:10',
            'anxiety'              => 'nullable|integer|min:0|max:10',
            'wellbeing'            => 'nullable|integer|min:0|max:10',
            'other_problem'        => 'nullable|string|max:255',
            'other_problem_score'  => 'nullable|integer|min:0|max:10',
        ]);

        $validated['code'] = $code;
        
        F4esas::updateOrCreate(['code' => $code], $validated);

        return to_route('form4.page3')
                ->with('success', 'A. ESAS-r (Edmonton Symptom Assessment System Revised) Saved Successfully!');
    }

    public function pain_assessment(Request $request)
    {
        $validated = $request->validate([
            'assessment_date' => 'nullable|date',
            'is_pain' => 'nullable|in:Yes,No',
            'pain_score' => 'nullable|integer|min:0|max:10',
            'provocation' => 'nullable|string|max:255',
            'provocation_quality' => 'nullable|array',
            'provocation_quality.*' => 'string|max:100',
            'provocation_region' => 'nullable|string|max:1000',
            'provocation_remarks' => 'nullable|string|max:255',
            'severity' => 'nullable|integer|min:1|max:10',
            'timing' => 'nullable|string|max:1000',
            'findings' => 'nullable|string|max:1000',
            'verbal_vocal' => 'nullable|array',
            'verbal_vocal.*' => 'string|max:255',
            'body_movement' => 'nullable|array',
            'body_movement.*' => 'string|max:255',
            'facial' => 'nullable|array',
            'facial.*' => 'string|max:255',
            'touching' => 'nullable|array|max:255',
            'associated_signs' => 'nullable|string|max:255',
            'signs' => 'nullable|array',
            'signs.*' => 'string|max:255',
            'paracetamol' => 'nullable|in:Yes,No',
            'paracetamol_pain_controlled' => 'nullable|in:Yes,No',
            'paracetamol_date' => 'nullable|date',
            'nsaids' => 'nullable|in:Yes,No',
            'nsaids_pain_controlled' => 'nullable|in:Yes,No',
            'nsaids_date' => 'nullable|date',
            'tramadol' => 'nullable|in:Yes,No',
            'tramadol_pain_controlled' => 'nullable|in:Yes,No',
            'tramadol_date' => 'nullable|date',
            'opioid' => 'nullable|in:Yes,No',
            'opioid_pain_controlled' => 'nullable|in:Yes,No',
            'opioid_date' => 'nullable|date',
            'other_drugs' => 'nullable|in:Yes,No',
            'other_drugs_specify_name' => 'nullable|string|max:255',
            'other_drugs_pain_controlled' => 'nullable|in:Yes,No',
            'other_drugs_date' => 'nullable|date',
            'non_pharma' => 'nullable|in:Yes,No',
            'non_pharma_specify_name' => 'nullable|string|max:255',
            'non_pharma_pain_controlled' => 'nullable|in:Yes,No',
            'non_pharma_date' => 'nullable|date',
            'other_notes' => 'nullable|string|max:2000',
        ]);
        $code = session('code');
        $validated['code'] = $code;
        F4painassessment::updateOrCreate(['code' => $code], $validated);

        return to_route('form4.page4')->with('success', 'Pain Assessment Data Saved Successfully!');

        return response()->json([
            'status' => 'success',
            'data' => $validated,
        ]);
    }

    public function palliative_care(Request $request)
    {
        $validated = $request->validate([
            'nutritional_care'     => 'nullable|in:Yes,No',
            'nutritional_place'    => 'nullable|in:Home,Hospital,Community-based',
            'nutritional_improved' => 'nullable|in:Yes,No,Not assessed',

            'nursing_care'     => 'nullable|in:Yes,No',
            'nursing_place'    => 'nullable|in:Home,Hospital,Community-based',
            'nursing_improved' => 'nullable|in:Yes,No,Not assessed',

            'rehabilitation_care'     => 'nullable|in:Yes,No',
            'rehabilitation_place'    => 'nullable|in:Home,Hospital,Community-based',
            'rehabilitation_improved' => 'nullable|in:Yes,No,Not assessed',

            'psychosocial_care'     => 'nullable|in:Yes,No',
            'psychosocial_place'    => 'nullable|in:Home,Hospital,Community-based',
            'psychosocial_improved' => 'nullable|in:Yes,No,Not assessed',

            'spiritual_care'     => 'nullable|in:Yes,No',
            'spiritual_place'    => 'nullable|in:Home,Hospital,Community-based',
            'spiritual_improved' => 'nullable|in:Yes,No,Not assessed',

            'others_care'     => 'nullable|in:Yes,No',
            'others_specify'  => 'nullable|string|max:255',
            'others_place'    => 'nullable|in:Home,Hospital,Community-based',
            'others_improved' => 'nullable|in:Yes,No,Not assessed',
        ]);

        $validated['code'] = session('code');

        F4palliativecare::updateOrCreate(
            ['code' => $validated['code']], 
            $validated
        );

        return to_route('form4.page5')->with('success', 'Palliative Care Intervention Data Saved Successfully!');

        return response()->json([
            'success' => true,
            'data' => $validated
        ]);
    }

    public function cancer_diagnose_outcome(Request $request)
    {
        $validated = $request->validate([
            'diagnosis_outcome'      => 'required|array',
            'diagnosis_outcome.*'    => 'string|max:255',
            'diagnosis_outcome_date' => 'nullable|date',
            'immediate_cause'        => 'nullable|string|max:255',
            'antecedent_cause'       => 'nullable|string|max:255',
            'underlying_cause'       => 'nullable|string|max:255',
            'other_condition'        => 'nullable|string|max:255',
        ]);
        $validated['code'] = session('code');

        F4cancerdiagnoseoutcome::updateOrCreate(['code' => $validated['code']], $validated);
        return to_route('form4.page6')->with('success', 'Cancer Diagnosis Outcome Data Saved Successfully!');
    }

    public function financial_support_mechanism(Request $request)
    {
        $validated = $request->validate([
            'financial_support' => 'required|in:Yes,No',
            'financial_type'    => 'nullable|array',
            'financial_type.*'  => 'nullable|string|max:255',
            'financial_other'   => 'nullable|string|max:255',
            'cspmap_meds'       => 'nullable|array',
            'cspmap_meds.*'     => 'nullable|string|max:255',
            'cspmap_other'      => 'nullable|string|max:255',
            'other_meds'        => 'nullable|array',
            'other_meds.*'      => 'nullable|string|max:255',
            'other_med_other'   => 'nullable|string|max:255',
        ]);

        $validated['code'] = session('code');

        F4financialsupportmechanism::updateOrCreate(
            ['code' => $validated['code']],
            $validated
        );

        $user = F4palliativeform::find($validated['code']);
        $user->status = 1;
        $user->save();

        $data = DB::table('demographicprofiles')
                ->where('hospitalID', $user->hospitalID)
                ->where('status', 1)
                ->first();

        return redirect('admin/forms/'.$data->id)->with('success', 'Form 4 was saved successfully!');

    }

}
