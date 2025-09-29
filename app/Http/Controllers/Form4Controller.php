<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\F4palliativeform;
use App\Models\F4esas;

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

        $data = F4palliativeform::updateOrCreate(
            ['hospitalID' => $hospitalID],
            $validate
        );

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
            'touching' => 'nullable|string|max:255',
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
            // any other free-text fallback
            'other_notes' => 'nullable|string|max:2000',
        ]);

        return response()->json([
            'status' => 'success',
            'data' => $validated,
        ]);
    }
}
