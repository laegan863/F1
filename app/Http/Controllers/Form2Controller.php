<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\F2followup;
use App\Models\F2patientstatus;
use App\Models\F2radiotheraphy;
use App\Models\F2othercancertherapy;
use App\Models\F2cancerdiagnoseoutcome;

class Form2Controller extends Controller
{

    public function form2($id){
        
        $data = F2followup::with(['f2othercancertherapies', 'f2patientstatuses', 'f2radiotheraphies'])->where('id', $id)->first();
        
        return response()->json([
            'data' => $data
        ]);
    }
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
            'other_remarks' => 'nullable'
        ]);

        $validate['hospitalID'] = $hospitalID;
        $validate['other_remarks'] = isset($validate['other_remarks']) ? $validate['other_remarks'] : "N/A";

        $data = F2followup::create($validate);

        Session::put([
            'code' => $data->id
        ]);
        
        return to_route('form2-secondpage')->with('success', 'PATIENT FOLLOW-UP FORM Data successfully Saved!');

    }

    public function store_patient_eco_status(Request $request)
    {
        $validated = $request->validate([
            'ecog_status'                 => 'required|in:Yes,No',
            'ecog_grade'                  => 'nullable|string|max:255',
            'other_functional_assessment' => 'nullable|string|max:255',
            'surgery_done'                => 'required|in:Yes,No',
            'surgery_rvs'                 => 'nullable|string|max:255',
            'surgery_description'         => 'nullable|string|max:255',
            'surgery_date'                => 'nullable|date',
            'surgery_goal'                => 'nullable|array',
            'ongoing_drug_therapy'        => 'required|in:Yes,No',
            'therapy_date_start'          => 'nullable|date',
            'drug_purpose'                => 'nullable|string|max:255',
            'drug_types'                  => 'nullable|array',
            'drug_regimen'                => 'nullable|array',
            'chemo_cycle'                 => 'nullable|array',
            'drug_type_other'             => 'nullable|string|max:255',
        ]);

        $data = [
            'ecog_status' => [
                'ecog_grade',
                'other_functional_assessment'
            ], 
            'surgery_done' => [
                'surgery_rvs',
                'surgery_description',
                'surgery_date',
                'surgery_goal'
            ], 
            'ongoing_drug_therapy' => [
                'therapy_date_start',
                'drug_purpose',
                'drug_types',
                'drug_regimen',
                'chemo_cycle',
                'drug_type_other'
            ]
        ];

        foreach($data as $key => $value){
            if($validated[$key] == "No"){
                foreach($value as $newValue){
                    $NewValidate[$newValue] = null;
                }
            }
        }

        $validated['code'] = Session::get('code');

        F2patientstatus::updateOrCreate(['code' => $validated['code']], $validated);

        return redirect()
            ->route('form2-thirdpage')
            ->with('success', 'Patient ECOG status saved successfully.');
    }

    public function store_radiotheraphy(Request $request)
    {
        $validated = $request->validate([
            'radiotherapy'            => 'required|in:Yes,No',
            'radio_date_start'        => 'nullable|date',
            'radio_date_end'          => 'nullable|date|after_or_equal:radio_date_start',
            'radio_total_dose'        => 'nullable|string|max:255',
            'radio_dose_fraction'     => 'nullable|string|max:255',
            'radio_total_fractions'   => 'nullable|string|max:255',
            'radio_total_days'        => 'nullable|string|max:255',
            'radio_body_site'         => 'nullable|array',
            'radio_body_site.*'       => 'nullable|string|max:255',
            'radio_body_site_other'   => 'nullable|string|max:255',
            'radio_type'              => 'nullable|array',
            'radio_type.*'            => 'nullable|string|max:255',
            'radio_type_other'        => 'nullable|string|max:255',
            'radio_goal'              => 'nullable|in:Curative,Palliative',

            'theranostics'            => 'required|in:Yes,No',
            'theranostics_type'       => 'nullable|array',
            'theranostics_type.*'     => 'nullable|string|max:255',
            'theranostics_type_other' => 'nullable|string|max:255',
            'thera_total_planned'     => 'nullable|string|max:255',
            'thera_total_received'    => 'nullable|string|max:255',
            'thera_sequences'         => 'nullable|string|max:255',
            'thera_goal'              => 'nullable|in:Definitive,Palliative',
        ]);

        $groups = [
            'radiotherapy' => [
                'radio_date_start',
                'radio_date_end',
                'radio_total_dose',
                'radio_dose_fraction',
                'radio_total_fractions',
                'radio_total_days',
                'radio_body_site',
                'radio_body_site_other',
                'radio_type',
                'radio_type_other',
                'radio_goal',
            ],
            'theranostics' => [
                'theranostics_type',
                'theranostics_type_other',
                'thera_total_planned',
                'thera_total_received',
                'thera_sequences',
                'thera_goal',
            ],
        ];

        foreach ($groups as $parent => $fields) {
            if (($validated[$parent] ?? null) === "No") {
                foreach ($fields as $field) {
                    $validated[$field] = null;
                }
            }
        }

        $validated['code'] = Session::get('code');

        F2radiotheraphy::updateOrCreate(
            ['code' => $validated['code']],
            $validated
        );

        return redirect()
            ->route('form2.fourthpage')
            ->with('success', 'Patient ECOG status saved successfully.');
    }

    public function store_other_theraphy(Request $request)
    {
        $validated = $request->validate([
            'other_cancer_therapies'   => 'required|in:Yes,No',
            'cancer_therapies'         => 'nullable|array',
            'cancer_therapies_other'   => 'nullable|string|max:255',

            'pre_op_scenario'          => 'required|string',
            'post_op_scenario'         => 'required|string',
            'treatment_status'         => 'required|string',
        ]);

        if ($validated["other_cancer_therapies"] === "No") {
            $validated["cancer_therapies"] = null;
            $validated["cancer_therapies_other"] = null;
        }

        $validated["code"] = Session::get("code");

        F2othercancertherapy::updateOrCreate(
            ['code' => $validated["code"]],
            $validated
        );

        return to_route('form2.sixpage')
                ->with('success', 'Patient ECOG status saved successfully.');
    }

    public function store_cancer_diagnose(Request $request)
    {
        $validated = $request->validate([
            'diagnosis_outcome'       => 'nullable|array',
            'diagnosis_outcome.*'     => 'string|max:255',
            'diagnosis_outcome_date'  => 'nullable|date',

            'cause_immediate'   => 'nullable|string|max:255',
            'cause_antecedent'  => 'nullable|string|max:255',
            'cause_underlying'  => 'nullable|string|max:255',
            'cause_other'       => 'nullable|string|max:255',

            'financial_support' => 'required|in:Yes,No',
            'financial_type'    => 'nullable|array',
            'financial_type.*'  => 'string|max:255',
            'financial_other'   => 'nullable|string|max:255',

            'cspmap_meds'       => 'nullable|array',
            'cspmap_meds.*'     => 'string|max:255',
            'cspmap_other'      => 'nullable|string|max:255',

            'other_meds'        => 'nullable|array',
            'other_meds.*'      => 'string|max:255',
            'other_med_other'   => 'nullable|string|max:255',
        ]);

        $validated['code'] = session()->get('code');

        F2cancerdiagnoseoutcome::updateOrCreate(
            ['code' => $validated['code']],
            $validated
        );

        $user = F2followup::findOrFail($validated['code']);
        $user->status = 1;
        $user->save();

        $data = DB::table('demographicprofiles')
                ->where('hospitalID', $user->hospitalID)
                ->where('status', 1)
                ->first();
        
        return redirect('admin/forms/'.$data->id);

        
    }


}
 