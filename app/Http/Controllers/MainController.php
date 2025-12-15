<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\Demographicprofile;
use App\Models\Riskfactor;
use App\Models\Cancerdiagnose;
use App\Models\Treatment;
use App\Traits\LogsActivity;

class MainController extends Controller
{
    use LogsActivity;

    public function hospital_number(Request $request)
    {
        $hospitalID = str_pad(string: $request->HospitalID, length: 10, pad_string: "0", pad_type: STR_PAD_LEFT);

        $exists = Demographicprofile::where("hospitalID", $hospitalID)
                ->where('status', 1)
                ->exists();

        if($exists) {
            return back()->with("error", "This Person is already exists in the Database!");
        }

        $data = DB::connection('sqlsrv')->table('Patient')
                ->where('HospitalID', $hospitalID)
                ->first();

        // return response()->json([
        //     'data' => $data,
        //     'hospitalID' => $hospitalID
        // ]);

        if(!empty($data)) {
            Session::put('patient', $data);
            return to_route("demographic-profile")->with('success','User exists in the database!');
        } else {
            Session::put("hospitalID", $hospitalID);
            return to_route('demographic-profile')->with('error','User Does not exists in the database');
        }
    }

    public function convert_code_to_name($province_code, $city_code, $barangay_code)
    {
        $data = [];

        $province = Http::get('https://psgc.gitlab.io/api/provinces/');
        if ($province->successful()) {
            $provinces = $province->json();
            $provinceList = collect($provinces)->pluck('name', 'code')->toArray();
            $data['province'] = $provinceList[$province_code] ?? 'Unknown';
        }

        $city = Http::get("https://psgc.gitlab.io/api/provinces/{$province_code}/cities-municipalities/");
        if ($city->successful()) {
            $cities = $city->json();
            $cityList = collect($cities)->pluck('name', 'code')->toArray();
            $data['city'] = $cityList[$city_code] ?? 'Unknown';
        }

        $brgy = Http::get("https://psgc.gitlab.io/api/cities-municipalities/{$city_code}/barangays/");
        if ($brgy->successful()) {
            $brgys = $brgy->json();
            $brgyList = collect($brgys)->pluck('name', 'code')->toArray();
            $data['barangay'] = $brgyList[$barangay_code] ?? 'Unknown';
        }

        return $data;
    }

    public function submit_demograpic_profile(Request $request)
    {
        $validate = $request->validate([
            'patient_first_encounter' => 'required|date',
            "patient_health_facility_id" => "required|string|min:10",
            "philhealth_id"   => "required|string|min:13",
            "name.firstname"   => "required|string",
            "name.middlename"  => "nullable|string",
            "name.lastname"    => "required|string",
            "name.suffix"      => "required|string",
            "married_maiden_name" => "nullable|string",
            "date_of_birth" => "required|date",
            "sex" => "required|in:male,female",
            "civil_status" => "required",
            "nationality" => "required",
            "permanent.province" => "required",
            "permanent.city" => "required",
            "permanent.barangay" => "required",
            // "permanent.sitio" => "required",
            "current.province" => $request->same_as_address == "on" ? "nullable" : "required",
            "current.city" => $request->same_as_address == "on" ? "nullable" : "required",
            "current.barangay" => $request->same_as_address == "on" ? "nullable" : "required",
            // "current.sitio" => $request->same_as_address == "on" ? "nullable" : "required",
            "same_as_address" => "nullable",
            "mobile_number" => "required",
            "email_address" => "required",
            "relative.province" => "required",
            "relative.city" => "required",
            "relative.barangay" => "required",
            // "relative.sitio" => "required",
            "relative_phone_number" => "required",
            "relative_email" => "nullable|email",
            "highest_education" => "required",
            "occupation" => "required",
            "number_of_years_in_occupation" => "required"

        ],[
            'philhealth_facilty_id_number.min' => 'The philhealth facilty id number field must be 12 numbers.',
            "name.firstname.required" => "The first name field is required!",
            "name.middlename.required"   => "The middle name field is required.",
            "name.lastname.required"  => "The lastname field is required.",
            "name.suffix.required" => "The suffix field is required.",
            "permanent.province.required" => "The permanent province field is required",
            "permanent.city.required" => "The permanent city field is required",
            "permanent.barangay.required" => "The permanent barangay field is required",
            // "permanent.sitio.required" => "The permanent sitio field is required",
            "current.province.required" => "The current province field is required",
            "current.city.required" => "The current city field is required",
            "current.barangay.required" => "The current barangay field is required",
            // "current.sitio.required" => "The current sitio field is required",
            "relative.province.required" => "The relative province field is required",
            "relative.city.required" => "The relative city field is required",
            "relative.barangay.required" => "The relative barangay field is required",
            // "relative.sitio.required" => "The relative sitio field is required",
        ]);

        // $exists = DB::table('demographicprofiles')
        //     ->where('name->firstname', $request->input('name.firstname'))
        //     ->where('name->middlename', $request->input('name.middlename'))
        //     ->where('name->lastname', $request->input('name.lastname'))
        //     ->where('status', 1)
        //     ->exists();

        // if ($exists) {
        //     return back()->withErrors([
        //         'name' => "This user is already exists!"
        //     ])->withInput();
        // }

        if(!empty($validate["same_as_address"])){

            // $response = $this->convert_code_to_name(
            //     province_code: $request->permanent['province'],
            //     city_code: $request->permanent['city'],
            //     barangay_code: $request->permanent['barangay']
            // );

            // $validate["permanent"] = $response;
            $validate["current"] = $validate['permanent'];

        }else{

            // $current = $this->convert_code_to_name(
            //     province_code: $request->current['province'],
            //     city_code: $request->current['city'],
            //     barangay_code: $request->current['barangay']
            // );

            // $permanent = $this->convert_code_to_name(
            //     province_code: $request->permanent['province'],
            //     city_code: $request->permanent['city'],
            //     barangay_code: $request->permanent['barangay']
            // );

            // $validate["current"] = $current;
            // $validate["permanent"] = $permanent;
            $validate["same_as_address"] = "off";
        }

        // $relative = $this->convert_code_to_name(
        //     province_code: $request->relative['province'],
        //     city_code: $request->relative['city'],
        //     barangay_code: $request->relative['barangay']
        // );

        // $validate["relative"] = $relative;
        $validate["hospitalID"] = Session::has('patient') ? Session::get("patient")->HospitalID : Session::get("hospitalID");

        $data = Demographicprofile::updateOrCreate(['hospitalID' => $validate["hospitalID"]], $validate);

        // Log activity
        $action = $data->wasRecentlyCreated ? 'create' : 'update';
        $description = $action === 'create' 
            ? "Created demographic profile for Hospital ID: {$validate['hospitalID']}"
            : "Updated demographic profile for Hospital ID: {$validate['hospitalID']}";
        $this->logActivity($action, $description, $data);

        Session::put(key: 'code', value: $data->id);
        return to_route(route: 'risk-factor')->with('success', 'Data has been successfully saved, Please take the next step!');

    }

    public function submit_riskfactor_data(Request $request){

        // $data = $request->except(['_token']);

        $validate = $request->validate([
            'tobacco_use' => 'required',
            'second_hand_smoke' => 'required',
            'alcohol_use' => 'required',
            'physical_activity' => 'required',
            'healtydiet.fatmeat' => 'required',
            'healtydiet.vegetables' => 'required',
            'healtydiet.sodium_salt' => 'required',
            'healtydiet.sugar' => 'required',
            'occupational_exposure' => 'required',
            'occupation_specify' =>  $request->occupational_exposure == 'yes' ? 'required|array' : 'nullable',
            'occupation_specify_others' => 'nullable',
            'air_pollution' => 'required',
            'family_history' => 'required',
            'cancer_sites' => $request->family_history == "yes" ? 'required' : 'nullable',
            'cancer_sites_other' => 'nullable',
            'cancer_sites_other_value' => 'nullable',
            'infections' => 'required|array',
            'infections_others' => 'nullable',
            'infections_other_content' => 'nullable',
            'comorbidities' => 'required|array',
            'comorbidities_others' => 'nullable',
            'comorbidities_others_content' => 'nullable',
            'has_cancer' => 'required',
            'patient_diagnosed_w_cancer' => $request->has_cancer == "yes" ? "required|array" : "nullable",
            'other_significant_medical_history' => 'nullable',
            'sexual_orientation' => 'nullable',
            'sexual_orientation_other' => 'nullable',
            'sexual_partners' => 'required',
            'age_first_intercourse' => 'required',
            'contraceptives_use' => 'required',
            'contraceptive_types' => $request->contraceptives_use == "Yes" ? "required" : "nullable",
            'contraceptive_types_other' => 'nullable',
            'cancer_screening' => 'required|array',
            'cancer_screening_other' => 'nullable',
            'vaccine_hpv' => 'required',
            'vaccine_hepb' => 'required',
            'other_vaccines' => 'nullable'
        ],[
            'alcohol_use.required' => 'The Harmful use of alcohol field is required.',
            'healtydiet.fatmeat.required' => 'The fat-meat field is required',
            'healtydiet.vegetables.required' => 'The vegetables field is required',
            'healtydiet.sodium_salt.required' => 'The sodium salt field is required',
            'healtydiet.sugar.required' => 'The sugar field is required',
            'patient_diagnosed_w_cancer.required' => 'Please select the cancer site where the patient has been diagnosed.',
            'cancer_sites.required' => 'Please select a family history of cancer site/s',
            'occupation' => 'Please specify the Occupational Exposure',
            "contraceptive_types.required" => "Please the specific type the use of contraceptives",
        ]);

        $validate["code"] = Session::get(key: 'code');
        unset($validate["_token"]);

        try {

            Riskfactor::updateOrCreate(['code' => $validate['code']], $validate);

            return to_route(route: 'cancer-diagnose')->with('success', 'Data has been successfully saved, Please take the next step!');

        } catch (\Throwable $th) {
            return response()->json([
                'error' => $th->getMessage()
            ]);
        }
    }

    public function submit_cancer_diagnose_data(Request $request)
    {
        $validate = $request->validate([
            'multiple_sites'       => 'required',
            'primary_site_number'  => $request->multiple_sites == "yes" ? "required" : 'nullable|integer|min:1',
            'cancer_sites'         => 'nullable|array',
            'cancer_site_other'    => 'nullable|string|max:255',
            'laterality'           => 'required|in:Left,Right,Bilateral,Not Applicable',
            'histologic_diagnosis' => 'required|string|max:255',
            'icd_10'               => 'required|string|max:20',
            'clinical_stage' => 'nullable',
            't_stage' => 'nullable',
            'n_stage' => 'nullable',
            'm_stage' => 'nullable',
            's_stage' => 'nullable',
            'other_staging' => 'nullable|array',
            'other_remarks' => 'nullable',
            'cancer_status' => 'required'
        ],[
            'multiple_sites.required' => 'The active Primary Cancer Site(s) field is required',
        ]);

        $validate["code"] = Session::get(key: 'code');
        if($validate["multiple_sites"] == "no"){
            $validate["primary_site_number"] = 1;
        }

        Cancerdiagnose::createOrUpdate(['code' => $validate['code']], $validate);

        // $exist = Cancerdiagnose::where('code', $validate['code'])->exists();

        // if($exist){
        //     Cancerdiagnose::where(column: 'code', operator: $validate["code"])->update($validate);
        // }else{
        //     Cancerdiagnose::create($validate);
        // }

        return to_route(route: 'treatment-diagnose')->with('success', 'Data has been successfully saved, Please take the next step!');

        // return response()->json([
        //     'data' => $validated
        // ]);
    }

    public function submit_treatment_data(Request $request)
    {
        $validate = $request->validate([
            'date_of_diagnosis' => 'required|date',
            'team_approach' => 'required|in:Yes,No',
            'disciplines' => $request->team_approach == "Yes" ? "required|array" : "nullable",
            'discipline_other' => "nullable",

            'surgery' => 'required|in:Yes,No',
            'surgery_goal' => $request->surgery == "Yes" ? "required" : "nullable",

            'anticancer_drug' => 'required|in:Yes,No',
            'drug_purpose' => $request->anticancer_drug == "Yes" ? "required|array" : "nullable",
            'drug_types' => $request->anticancer_drug == "Yes" ? "required|array" : "nullable",
            'drug_types_others' => 'nullable',

            'first_line_drug' => 'required|in:Yes,No',
            "first_drug_regimen" => $request->first_line_drug == "Yes" ? "required" : "nullable",
            "first_cycles" => $request->first_line_drug == "Yes" ? "required" : "nullable",
            "first_treatment_goal" => $request->first_line_drug == "Yes" ? "required" : "nullable",
            "first_time" => $request->first_line_drug == "Yes" ? "required" : "nullable",

            'second_line_drug' => 'required|in:Yes,No',
            "second_drug_regimen" => $request->second_line_drug == "Yes" ? "required" : "nullable",
            "second_cycles" => $request->second_line_drug == "Yes" ? "required" : "nullable",
            "second_treatment_goal" => $request->second_line_drug == "Yes" ? "required" : "nullable",
            "second_time" => $request->second_line_drug == "Yes" ? "required" : "nullable",

            'third_line_drug' => 'required|in:Yes,No',
            "third_drug_regimen" => $request->third_line_drug == "Yes" ? "required" : "nullable",
            "third_cycles" => $request->third_line_drug == "Yes" ? "required" : "nullable",
            "third_treatment_goal" => $request->third_line_drug == "Yes" ? "required" : "nullable",
            "third_time" => $request->third_line_drug == "Yes" ? "required" : "nullable",

            'other_subsequent_line_drug' => 'required|in:Yes,No',
            'indicate_line' => $request->other_subsequent_line_drug == "Yes" ? "required" : "nullable",
            "other_subsequent_drug_regimen" => $request->other_subsequent_line_drug == "Yes" ? "required" : "nullable",
            "other_subsequent_cycles" => $request->other_subsequent_line_drug == "Yes" ? "required" : "nullable",
            "other_subsequent_treatment_goal" => $request->other_subsequent_line_drug == "Yes" ? "required" : "nullable",
            "other_subsequent_time" => $request->other_subsequent_line_drug == "Yes" ? "required" : "nullable",

            'radiotherapy' => 'required|in:Yes,No',
            'radiotherapy_types' => $request->other_subsequent_line_drug == "Yes" ? "required|array" : "nullable",
            'radiotherapy_types_others' => 'nullable',
            'radiotherapy_sequence' => $request->other_subsequent_line_drug == "Yes" ? "required" : "nullable",
            'radiotherapy_goal' => $request->other_subsequent_line_drug == "Yes" ? "required" : "nullable",

            'theranostics' => 'required|in:Yes,No',
            'theranostics_types' => $request->theranostics == "Yes" ? "required|array" : "nullable",
            'theranostics_types_others' => "nullable",
            'theranostics_goal' => $request->theranostics == "Yes" ? "required" : "nullable",

            'other_therapies' => 'required|in:Yes,No',
            'other_therapies_types' => $request->other_therapies == "Yes" ? "required|array" : "nullable",
            'other_therapies_other' => "nullable",

        ],[
            'team_approach.required' => 'The Multidisciplinary Cancer Team Approach Practiced',
            'other_therapies.required' => 'The Other Cancer Directed Therapies is required',
            'disciplines.required' => 'Please specify all disciplines involved',
            'surgery_goal.required' => 'Please specify the goal in Surgery',
            'drug_purpose.required' => 'Please specify the Purpose of Drug Administration',
        ]);

        $validate["code"] = Session::get(key: 'code');

        $nullables = [
            'team_approach' => ['disciplines','discipline_other'],
            'surgery' => ['surgery_goal'],
            'anticancer_drug' => ['drug_purpose','drug_types'],
            'first_line_drug' => ['first_drug_regimen','first_cycles','first_treatment_goal','first_time'],
            'second_line_drug' => ['second_drug_regimen','second_cycles','second_treatment_goal','second_time'],
            'third_line_drug' => ['third_drug_regimen','third_cycles','third_treatment_goal','third_time'],
            'other_subsequent_line_drug' => ['indicate_line','other_subsequent_drug_regimen','other_subsequent_cycles','other_subsequent_treatment_goal','other_subsequent_time'],
            'radiotherapy' => ['radiotherapy_types','radiotherapy_types_others','radiotherapy_sequence','radiotherapy_goal'],
            'theranostics' => ['theranostics_types','theranostics_types_others','theranostics_goal'],
            'other_therapies' => ['other_therapies_types','other_therapies_other'],
        ];

        foreach ($nullables as $condition => $fields) {
            if ($validate[$condition] === "No") {
                foreach ($fields as $field) {
                    $validate[$field] = null;
                }
            }
        }

        Treatment::createOrUpdate(['code' => $validate['code']], $validate);

        // $exist = Treatment::where('code', $validate['code'])->exists();

        // if($exist){
        //     Treatment::where(column: 'code', operator: $validate["code"])->update($validate);
        // }else{
        //     Treatment::create($validate);
        // }

        Demographicprofile::find($validate["code"])->update([
            'status' => 1
        ]);

        Session::forget(['code', 'hospitalID']);

        return to_route('admin.records')->with('success', 'Data has been successfully saved!');

    }

    public function result($id){

        $data = Demographicprofile::with(['riskfactors', 'cancerdiagnoses', 'treatments'])->find($id);

        $data['date_of_birth'] = str_replace(search: "-", replace: "", subject: $data->date_of_birth);
        $data['date_of_birth'] = str_split($data['date_of_birth']);
        $data['philhealth_id'] = str_split($data['philhealth_id']);

        $data['patient_first_encounter'] = str_replace(search: "-", replace: "", subject: $data->patient_first_encounter);
        $data['patient_first_encounter'] = str_split($data['patient_first_encounter']);

        return view(view: 'forms.form', data: [
            'data' => $data,
        ]);

    }

    public function edit_demographic_profile($hospitalID)
    {
        // Fetch the demographic profile data by hospitalID
        $demographic = Demographicprofile::where('hospitalID', $hospitalID)->firstOrFail();

        // Return the update view with the data
        return view('forms.update.form1.demographic', [
            'data' => $demographic,
            'demographic' => $demographic
        ]);
    }

    public function update_demographic_profile(Request $request, $hospitalID)
    {
        $validate = $request->validate([
            'patient_first_encounter' => 'required|date',
            "patient_health_facility_id" => "required|string|min:10",
            "philhealth_id"   => "required|string|min:13",
            "name.firstname"   => "required|string",
            "name.middlename"  => "nullable|string",
            "name.lastname"    => "required|string",
            "name.suffix"      => "required|string",
            "married_maiden_name" => "nullable|string",
            "date_of_birth" => "required|date",
            "sex" => "required|in:male,female",
            "civil_status" => "required",
            "nationality" => "required",
            "permanent.province" => "required",
            "permanent.city" => "required",
            "permanent.barangay" => "required",
            "current.province" => $request->same_as_address == "on" ? "nullable" : "required",
            "current.city" => $request->same_as_address == "on" ? "nullable" : "required",
            "current.barangay" => $request->same_as_address == "on" ? "nullable" : "required",
            "same_as_address" => "nullable",
            "mobile_number" => "required",
            "email_address" => "required",
            "relative.province" => "required",
            "relative.city" => "required",
            "relative.barangay" => "required",
            "relative_phone_number" => "required",
            "relative_email" => "nullable|email",
            "highest_education" => "required",
            "occupation" => "required",
            "number_of_years_in_occupation" => "required"

        ],[
            'philhealth_facilty_id_number.min' => 'The philhealth facilty id number field must be 12 numbers.',
            "name.firstname.required" => "The first name field is required!",
            "name.middlename.required"   => "The middle name field is required.",
            "name.lastname.required"  => "The lastname field is required.",
            "name.suffix.required" => "The suffix field is required.",
            "permanent.province.required" => "The permanent province field is required",
            "permanent.city.required" => "The permanent city field is required",
            "permanent.barangay.required" => "The permanent barangay field is required",
            "current.province.required" => "The current province field is required",
            "current.city.required" => "The current city field is required",
            "current.barangay.required" => "The current barangay field is required",
            "relative.province.required" => "The relative province field is required",
            "relative.city.required" => "The relative city field is required",
            "relative.barangay.required" => "The relative barangay field is required",
        ]);

        // Handle same as permanent address logic
        if(!empty($validate["same_as_address"])){
            $validate["current"] = $validate["permanent"];
        }else{
            $validate["same_as_address"] = "off";
        }

        // Update the demographic profile
        $demographic = Demographicprofile::where('hospitalID', $hospitalID)->firstOrFail();
        $demographic->update($validate);

        return redirect()->route('view.forms', ['id' => $demographic->id])
            ->with('success', 'Demographic profile has been successfully updated!');
    }
}
