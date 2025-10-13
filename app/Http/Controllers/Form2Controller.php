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
use App\Models\F2changetreatmentplan;

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

        return to_route('form2.fifthpage')
                ->with('success', 'Patient ECOG status saved successfully.');
    }

    public function change_treatment_plan(Request $request)
    {
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
            'radio_date_end'     => 'nullable|date',
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

            // Remarks
            'remarks'            => 'required|string',
        ]);

        if ($validated['surgery_plan'] === "No") {
            $validated['treatment_plan'] = null;
            $validated['surgery_reason'] = null;
        }

        if ($validated['anti_cancer_change'] === "No") {
            $validated['new_regimen'] = null;
            $validated['same_regimen'] = null;
            $validated['deferred_regimen'] = null;
            $validated['new_drug_type'] = null;
            $validated['same_drug_type'] = null;
            $validated['deferred_drug_type'] = null;
            $validated['new_drug_regimen'] = null;
            $validated['same_drug_regimen'] = null;
            $validated['deferred_drug_regimen'] = null;
            $validated['new_chemo_cycle'] = null;
            $validated['same_chemo_cycle'] = null;
            $validated['deferred_chemo_cycle'] = null;
            $validated['new_drug_other'] = null;
            $validated['same_drug_other'] = null;
            $validated['deferred_drug_other'] = null;
            $validated['new_next_cycle'] = null;
            $validated['same_next_cycle'] = null;
            $validated['deferred_next_cycle'] = null;
            $validated['deferred_reason'] = null;
        }

        if ($validated['radio_change'] === "No") {
            $validated['radio_reason'] = null;
            $validated['radio_treatment_plan'] = null;
            $validated['radio_date_start'] = null;
            $validated['radio_date_end'] = null;
            $validated['radio_total_dose'] = null;
            $validated['radio_dose_fraction'] = null;
            $validated['radio_total_fractions'] = null;
            $validated['radio_type'] = null;
            $validated['radio_type_other'] = null;
        }

        if ($validated['thera_change'] === "No") {
            $validated['thera_reason'] = null;
            $validated['thera_type'] = null;
            $validated['thera_type_other'] = null;
            $validated['thera_total_fractions'] = null;
            $validated['thera_dose_fraction'] = null;
            $validated['thera_treatment_plan'] = null;
            $validated['thera_total_planned_dose'] = null;
        }

        if ($validated['other_cancer'] === "No") {
            $validated['other_cancer_type'] = null;
            $validated['other_cancer_other'] = null;
            $validated['other_cancer_reason'] = null;
            $validated['other_cancer_treatment_plan'] = null;
        }

        
        $validated['code'] = session('code');

        F2changetreatmentplan::updateOrCreate(['code' => $validated['code']], $validated);

        return to_route('form2.sixpage')->with('success', 'Change in treatment plan data, Saved successfully!');

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

        // $validated['code'] = 10;
        $validated['code'] = session('code');
        if($validated['financial_support'] == "No"){
            $validated['financial_type'] = null;
        }

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

        Session::forget(['code']);
        
        return redirect('admin/forms/'.$data->id);

        
    }

}
 