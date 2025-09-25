<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\F2followup;

class Form2Controller extends Controller
{
    public function submit_follow_up(Request $request, $hospitalID)
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
            'other_remarks' => 'required'
        ]);
        
        $validate['hospitalID'] = $hospitalID;
        F2followup::create($validate);
        
        return response()->json([
            'data' => $validate
        ]);

    }
}
 