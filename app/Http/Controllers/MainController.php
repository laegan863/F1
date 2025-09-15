<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\Demographicprofile;
use App\Models\Riskfactor;
use App\Models\Cancerdiagnose;

class MainController extends Controller
{
    public function convert_code_to_name($province_code, $city_code, $barangay_code)
    {
        $data = [];

        $province = Http::get('https://psgc.gitlab.io/api/provinces/');
        if ($province->successful()) {
            $provinces = $province->json();
            $provinceList = collect($provinces)->pluck('name', 'code')->toArray();
            $data['permanent']['province'] = $provinceList[$province_code] ?? 'Unknown';
        }

        $city = Http::get("https://psgc.gitlab.io/api/provinces/{$province_code}/cities-municipalities/");
        if ($city->successful()) {
            $cities = $city->json();
            $cityList = collect($cities)->pluck('name', 'code')->toArray();
            $data['permanent']['city'] = $cityList[$city_code] ?? 'Unknown';
        }

        $brgy = Http::get("https://psgc.gitlab.io/api/cities-municipalities/{$city_code}/barangays/");
        if ($brgy->successful()) {
            $brgys = $brgy->json();
            $brgyList = collect($brgys)->pluck('name', 'code')->toArray();
            $data['permanent']['barangay'] = $brgyList[$barangay_code] ?? 'Unknown';
        }

        return $data;
    }

    public function submit_demograpic_profile(Request $request)
    {
        $validate = $request->validate([
            "name.firstname"   => "required|string",
            "name.middlename"  => "required|string",
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
            "permanent.sitio" => "required",
            "current.province" => $request->same_as_address == "on" ? "nullable" : "required",
            "current.city" => $request->same_as_address == "on" ? "nullable" : "required",
            "current.barangay" => $request->same_as_address == "on" ? "nullable" : "required",
            "current.sitio" => $request->same_as_address == "on" ? "nullable" : "required",
            "same_as_address" => "nullable",
            "mobile_number" => "required",
            "email_address" => "required",
            "relative.province" => "required",
            "relative.city" => "required",
            "relative.barangay" => "required",
            "relative.sitio" => "required",
            "relative_phone_number" => "required",
            "relative_email" => "required",
            "highest_education" => "required",
            "occupation" => "required",
            "number_of_years_in_occupation" => "required"

        ],[
            "name.firstname.required" => "The first name field is required!",
            "name.middlename.required"   => "The middle name field is required.",
            "name.lastname.required"  => "The lastname field is required.",
            "name.suffix.required" => "The suffix field is required.",
            "permanent.province.required" => "The permanent province field is required",
            "permanent.city.required" => "The permanent city field is required",
            "permanent.barangay.required" => "The permanent barangay field is required",
            "permanent.sitio.required" => "The permanent sitio field is required",
            "current.province.required" => "The current province field is required",
            "current.city.required" => "The current city field is required",
            "current.barangay.required" => "The current barangay field is required",
            "current.sitio.required" => "The current sitio field is required",
            "relative.province.required" => "The relative province field is required",
            "relative.city.required" => "The relative city field is required",
            "relative.barangay.required" => "The relative barangay field is required",
            "relative.sitio.required" => "The relative sitio field is required",
        ]);

        $exists = DB::table('demographicprofiles')
            ->where('name->firstname', $request->input('name.firstname'))
            ->where('name->middlename', $request->input('name.middlename'))
            ->where('name->lastname', $request->input('name.lastname'))
            ->exists();

        if ($exists) {
            return back()->withErrors([
                'name' => "This user is already exists!"
            ])->withInput();
        }

        if(!empty($validate["same_as_address"])){

            $response = $this->convert_code_to_name(
                province_code: $request->permanent['province'],
                city_code: $request->permanent['city'],
                barangay_code: $request->permanent['barangay']
            );

            $validate["permanent"] = $response;
            $validate["current"] = $response;

        }else{

            $current = $this->convert_code_to_name(
                province_code: $request->current['province'],
                city_code: $request->current['city'],
                barangay_code: $request->current['barangay']
            );

            $permanent = $this->convert_code_to_name(
                province_code: $request->permanent['province'],
                city_code: $request->permanent['city'],
                barangay_code: $request->permanent['barangay']
            );

            $validate["current"] = $current;
            $validate["permanent"] = $permanent;
            $validate["same_as_address"] = "off";
        }

        $relative = $this->convert_code_to_name(
            province_code: $request->relative['province'],
            city_code: $request->relative['city'],
            barangay_code: $request->relative['barangay']
        );

        $validate["relative"] = $relative;
        $validate["code"] = str::random(15);

        Demographicprofile::create($validate);

        // return back()->withInput();

        return response()->json([
            'data' => $validate,
            "user" => $exists
        ]);
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

        $validate["code"] = str::random(10);
        unset($validate["_token"]);

        try {

            Riskfactor::create($validate);

        } catch (\Throwable $th) {
            return response()->json([
                'error' => $th->getMessage()
            ]);
        }

        return response()->json([
            'data' => $validate
        ]);
    }

    public function submit_cancer_diagnose_data(Request $request)
    {
        $validated = $request->validate([
            'multiple_sites'       => 'required',
            'primary_site_number'  => $request->multiple_sites == "yes" ? "required" : 'nullable|integer|min:1',
            'cancer_sites'         => 'nullable|array',
            'cancer_site_other'    => 'nullable|string|max:255',
            'laterality'           => 'required|in:Left,Right,Bilateral,Not Applicable',
            'histologic_diagnosis' => 'required|string|max:255',
            'icd_10'               => 'required|string|max:20',
            'cancer_status' => 'required',
            'clinical_stage' => 'nullable',
            't_stage' => 'nullable',
            'n_stage' => 'nullable',
            'm_stage' => 'nullable',
            's_stage' => 'nullable',
            'other_staging' => 'nullable|array',

        ],[
            'multiple_sites.required' => 'The active Primary Cancer Site(s) field is required',
        ]);

        $validated["code"] = str::random(10);

        Cancerdiagnose::create($validated);

        return response()->json([
            'data' => $validated
        ]);
    }
}
