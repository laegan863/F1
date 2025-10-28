@extends('reports.app')
@section('title', 'REPORTING FORM 1D: Risk Factor Profile of New Cancer Cases by Sex')
@section('content')
@php
    use App\Models\Demographicprofile;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Request;
    
    if (Request::segment(2) === 'generate-report') {
        $rawData = Demographicprofile::with(['riskfactors', 'cancerdiagnoses', 'treatments'])
            ->whereBetween(DB::raw('YEAR(created_at)'), [Request::query('year_from'), Request::query('year_to')])
            ->whereBetween(DB::raw('MONTH(created_at)'), [Request::query('month_from'), Request::query('month_to')])
            ->get();
    } else {
        $rawData = $data;
    }

    $tobaccoUse = [
        'Current Smoker' => ['Male' => 0, 'Female' => 0],
        'Previous Smoker' => ['Male' => 0, 'Female' => 0],
        'Non-smoker' => ['Male' => 0, 'Female' => 0],
    ];

    $secondHandSmoke = [
        'Yes' => ['Male' => 0, 'Female' => 0],
        'No' => ['Male' => 0, 'Female' => 0],
    ];

    $alcoholUse = [
        'With current harmful use of alcohol' => ['Male' => 0, 'Female' => 0],
        'With previous harmful use of alcohol' => ['Male' => 0, 'Female' => 0],
        'No history of harmful use of alcohol' => ['Male' => 0, 'Female' => 0],
    ];

    $physicalActivity = [
        'Usually Inactive' => ['Male' => 0, 'Female' => 0],
        'Moderately Active' => ['Male' => 0, 'Female' => 0],
        'Very Active' => ['Male' => 0, 'Female' => 0],
    ];

    $healthyDiet = [
        'fatmeat' => ['high' => ['Male' => 0, 'Female' => 0], 'moderate' => ['Male' => 0, 'Female' => 0], 'low' => ['Male' => 0, 'Female' => 0]],
        'vegetables' => ['high' => ['Male' => 0, 'Female' => 0], 'moderate' => ['Male' => 0, 'Female' => 0], 'low' => ['Male' => 0, 'Female' => 0]],
        'sodium_salt' => ['high' => ['Male' => 0, 'Female' => 0], 'moderate' => ['Male' => 0, 'Female' => 0], 'low' => ['Male' => 0, 'Female' => 0]],
        'sugar' => ['high' => ['Male' => 0, 'Female' => 0], 'moderate' => ['Male' => 0, 'Female' => 0], 'low' => ['Male' => 0, 'Female' => 0]],
    ];

    $occupationalExposure = [
        'Cement Dust' => ['Male' => 0, 'Female' => 0],
        'Cotton' => ['Male' => 0, 'Female' => 0],
        'Chemical Fumes' => ['Male' => 0, 'Female' => 0],
        'Grains' => ['Male' => 0, 'Female' => 0],
        'Metal' => ['Male' => 0, 'Female' => 0],
        'Paper' => ['Male' => 0, 'Female' => 0],
        'Radiation' => ['Male' => 0, 'Female' => 0],
        'Silica' => ['Male' => 0, 'Female' => 0],
        'Smoke' => ['Male' => 0, 'Female' => 0],
        'None' => ['Male' => 0, 'Female' => 0],
        'Others' => ['Male' => 0, 'Female' => 0],
    ];

    $airPollution = [
        'Yes' => ['Male' => 0, 'Female' => 0],
        'No' => ['Male' => 0, 'Female' => 0],
    ];

    $sample = [];
    foreach ($rawData as $profile) {

        $gender = strtolower($profile->sex ?? 'unknown');
        $genderLabel = ($gender === 'male' || $gender === 'm') ? 'Male' : 'Female';

        if (isset($profile->riskfactors) && is_object($profile->riskfactors)) {
            $rf = $profile->riskfactors;

            if(isset($profile->riskfactors->healtydiet)){
                foreach ($profile->riskfactors->healtydiet as $dietType => $level) {
                    $level = strtolower($level);
                    if (isset($healthyDiet[$dietType][$level])) {
                        $healthyDiet[$dietType][$level][$genderLabel]++;
                    }
                }
            }

            if (isset($rf->tobacco_use) && isset($tobaccoUse[$rf->tobacco_use])) {
                $tobaccoUse[$rf->tobacco_use][$genderLabel]++;
            }

            if (isset($rf->second_hand_smoke)) {
                $key = ucfirst(strtolower($rf->second_hand_smoke));
                if (isset($secondHandSmoke[$key])) $secondHandSmoke[$key][$genderLabel]++;
            }

            if (isset($rf->alcohol_use) && isset($alcoholUse[$rf->alcohol_use])) {
                $alcoholUse[$rf->alcohol_use][$genderLabel]++;
            }

            if (isset($rf->physical_activity) && isset($physicalActivity[$rf->physical_activity])) {
                $physicalActivity[$rf->physical_activity][$genderLabel]++;
            }

            if (isset($rf->occupational_exposure) && strtolower($rf->occupational_exposure) === 'yes') {
                if (isset($rf->occupation_specify) && is_array($rf->occupation_specify)) {
                    foreach ($rf->occupation_specify as $occupation) {
                        if (isset($occupationalExposure[$occupation])) {
                            $occupationalExposure[$occupation][$genderLabel]++;
                        } else {
                            $occupationalExposure['Others'][$genderLabel]++;
                        }
                    }
                }
            } else {
                $occupationalExposure['None'][$genderLabel]++;
            }

            if (isset($rf->air_pollution)) {
                $key = ucfirst(strtolower($rf->air_pollution));
                if (isset($airPollution[$key])) $airPollution[$key][$genderLabel]++;
            }
        }
    }

    function calculateTotals($data) {
        $result = [];
        foreach ($data as $key => $value) {
            $result[$key] = [
                'Male' => $value['Male'],
                'Female' => $value['Female'],
                'Total' => $value['Male'] + $value['Female']
            ];
        }
        return $result;
    }

    $tobaccoUse = calculateTotals($tobaccoUse);
    $secondHandSmoke = calculateTotals($secondHandSmoke);
    $alcoholUse = calculateTotals($alcoholUse);
    $physicalActivity = calculateTotals($physicalActivity);
    $occupationalExposure = calculateTotals($occupationalExposure);
    $airPollution = calculateTotals($airPollution);

    // Compute totals for each healthy diet type
    foreach ($healthyDiet as $dietKey => $levels) {
        foreach ($levels as $level => $genders) {
            $healthyDiet[$dietKey][$level]['Total'] = $genders['Male'] + $genders['Female'];
        }
    }
@endphp

<div class="text-xs">
    <table class="w-full text-xs border border-gray-400 mt-6">
        <thead>
            <tr class="bg-gray-500 text-white font-bold">
                <th colspan="4" class="border border-gray-400 p-1 text-center">TOBACCO USE</th>
            </tr>
            <tr class="bg-gray-300 font-bold">
                <th class="border border-gray-400 p-1 text-left">CLASSIFICATIONS</th>
                <th class="border border-gray-400 p-1">MALE</th>
                <th class="border border-gray-400 p-1">FEMALE</th>
                <th class="border border-gray-400 p-1">TOTAL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-400 p-1">1 Current Smoker</td>
                <td class="border border-gray-400 p-1 text-center">{{ $tobaccoUse['Current Smoker']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $tobaccoUse['Current Smoker']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $tobaccoUse['Current Smoker']['Total'] ?? 0 }}</td>
            </tr>
            <tr>
                <td class="border border-gray-400 p-1">2 Previous Smoker</td>
                <td class="border border-gray-400 p-1 text-center">{{ $tobaccoUse['Previous Smoker']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $tobaccoUse['Previous Smoker']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $tobaccoUse['Previous Smoker']['Total'] ?? 0 }}</td>
            </tr>
            <tr>
                <td class="border border-gray-400 p-1">3 Non-smoker</td>
                <td class="border border-gray-400 p-1 text-center">{{ $tobaccoUse['Non-smoker']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $tobaccoUse['Non-smoker']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $tobaccoUse['Non-smoker']['Total'] ?? 0 }}</td>
            </tr>
            <tr class="bg-gray-200 font-bold">
                <td class="border border-gray-400 p-1 text-left">TOTAL</td>
                <td class="border border-gray-400 p-1 text-center">{{ array_sum(array_column($tobaccoUse, 'Male')) }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ array_sum(array_column($tobaccoUse, 'Female')) }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ array_sum(array_column($tobaccoUse, 'Total')) }}</td>
            </tr>
        </tbody>
    </table>

    <!-- SECOND-HAND SMOKE EXPOSURE -->
    <table class="w-full text-xs border border-gray-400 mt-6">
        <thead>
            <tr class="bg-gray-500 text-white font-bold">
                <th colspan="4" class="border border-gray-400 p-1 text-center">SECOND-HAND SMOKE EXPOSURE</th>
            </tr>
            <tr class="bg-gray-300 font-bold">
                <th class="border border-gray-400 p-1 text-left">CLASSIFICATIONS</th>
                <th class="border border-gray-400 p-1">MALE</th>
                <th class="border border-gray-400 p-1">FEMALE</th>
                <th class="border border-gray-400 p-1">TOTAL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-400 p-1">1 Yes</td>
                <td class="border border-gray-400 p-1 text-center">{{ $secondHandSmoke['Yes']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $secondHandSmoke['Yes']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $secondHandSmoke['Yes']['Total'] ?? 0 }}</td>
            </tr>
            <tr>
                <td class="border border-gray-400 p-1">2 No</td>
                <td class="border border-gray-400 p-1 text-center">{{ $secondHandSmoke['No']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $secondHandSmoke['No']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $secondHandSmoke['No']['Total'] ?? 0 }}</td>
            </tr>
            <tr class="bg-gray-200 font-bold">
                <td class="border border-gray-400 p-1 text-left">TOTAL</td>
                <td class="border border-gray-400 p-1 text-center">{{ array_sum(array_column($secondHandSmoke, 'Male')) }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ array_sum(array_column($secondHandSmoke, 'Female')) }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ array_sum(array_column($secondHandSmoke, 'Total')) }}</td>
            </tr>
        </tbody>
    </table>

    <!-- HARMFUL USE OF ALCOHOL -->
    <table class="w-full text-xs border border-gray-400 mt-6">
        <thead>
            <tr class="bg-gray-500 text-white font-bold">
                <th colspan="4" class="border border-gray-400 p-1 text-center">HARMFUL USE OF ALCOHOL</th>
            </tr>
            <tr class="bg-gray-300 font-bold">
                <th class="border border-gray-400 p-1 text-left">CLASSIFICATIONS</th>
                <th class="border border-gray-400 p-1">MALE</th>
                <th class="border border-gray-400 p-1">FEMALE</th>
                <th class="border border-gray-400 p-1">TOTAL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-400 p-1">1 With current harmful use of alcohol</td>
                <td class="border border-gray-400 p-1 text-center">{{ $alcoholUse['With current harmful use of alcohol']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $alcoholUse['With current harmful use of alcohol']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $alcoholUse['With current harmful use of alcohol']['Total'] ?? 0 }}</td>
            </tr>
            <tr>
                <td class="border border-gray-400 p-1">2 With previous harmful use of alcohol</td>
                <td class="border border-gray-400 p-1 text-center">{{ $alcoholUse['With previous harmful use of alcohol']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $alcoholUse['With previous harmful use of alcohol']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $alcoholUse['With previous harmful use of alcohol']['Total'] ?? 0 }}</td>
            </tr>
            <tr>
                <td class="border border-gray-400 p-1">3 No history of harmful use of alcohol</td>
                <td class="border border-gray-400 p-1 text-center">{{ $alcoholUse['No history of harmful use of alcohol']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $alcoholUse['No history of harmful use of alcohol']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $alcoholUse['No history of harmful use of alcohol']['Total'] ?? 0 }}</td>
            </tr>
            <tr class="bg-gray-200 font-bold">
                <td class="border border-gray-400 p-1 text-left">TOTAL</td>
                <td class="border border-gray-400 p-1 text-center">{{ array_sum(array_column($alcoholUse, 'Male')) }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ array_sum(array_column($alcoholUse, 'Female')) }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ array_sum(array_column($alcoholUse, 'Total')) }}</td>
            </tr>
        </tbody>
    </table>

    <!-- PHYSICAL ACTIVITY -->
    <table class="w-full text-xs border border-gray-400 mt-6">
        <thead>
            <tr class="bg-gray-500 text-white font-bold">
                <th colspan="4" class="border border-gray-400 p-1 text-center">PHYSICAL ACTIVITY</th>
            </tr>
            <tr class="bg-gray-300 font-bold">
                <th class="border border-gray-400 p-1 text-left">CLASSIFICATIONS</th>
                <th class="border border-gray-400 p-1">MALE</th>
                <th class="border border-gray-400 p-1">FEMALE</th>
                <th class="border border-gray-400 p-1">TOTAL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-400 p-1">1 Usually Inactive</td>
                <td class="border border-gray-400 p-1 text-center">{{ $physicalActivity['Usually Inactive']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $physicalActivity['Usually Inactive']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $physicalActivity['Usually Inactive']['Total'] ?? 0 }}</td>
            </tr>
            <tr>
                <td class="border border-gray-400 p-1">2 Moderately Active</td>
                <td class="border border-gray-400 p-1 text-center">{{ $physicalActivity['Moderately Active']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $physicalActivity['Moderately Active']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $physicalActivity['Moderately Active']['Total'] ?? 0 }}</td>
            </tr>
            <tr>
                <td class="border border-gray-400 p-1">3 Very Active</td>
                <td class="border border-gray-400 p-1 text-center">{{ $physicalActivity['Very Active']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $physicalActivity['Very Active']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ $physicalActivity['Very Active']['Total'] ?? 0 }}</td>
            </tr>
            <tr class="bg-gray-200 font-bold">
                <td class="border border-gray-400 p-1 text-left">TOTAL</td>
                <td class="border border-gray-400 p-1 text-center">{{ array_sum(array_column($physicalActivity, 'Male')) }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ array_sum(array_column($physicalActivity, 'Female')) }}</td>
                <td class="border border-gray-400 p-1 text-center">{{ array_sum(array_column($physicalActivity, 'Total')) }}</td>
            </tr>
        </tbody>
    </table>
    <!-- HEALTHY DIET -->
    <table class="w-full text-xs border border-gray-400 mt-6">
        <thead>
            <tr class="bg-gray-600 text-white font-bold">
                <th colspan="13" class="border border-gray-400 text-center py-1">HEALTHY DIET</th>
            </tr>
            <tr class="bg-gray-300 font-bold">
                <th rowspan="2" class="border border-gray-400 text-left px-2 align-middle">CLASSIFICATIONS</th>
                <th colspan="3" class="border border-gray-400 text-center">HIGH</th>
                <th colspan="3" class="border border-gray-400 text-center">MODERATE</th>
                <th colspan="3" class="border border-gray-400 text-center">LOW</th>
                <th rowspan="2" class="border border-gray-400 text-center align-middle">TOTAL</th>
            </tr>
            <tr class="bg-gray-200 font-bold">
                <th class="border border-gray-400 p-1">MALE</th>
                <th class="border border-gray-400 p-1">FEMALE</th>
                <th class="border border-gray-400 p-1">TOTAL</th>
                <th class="border border-gray-400 p-1">MALE</th>
                <th class="border border-gray-400 p-1">FEMALE</th>
                <th class="border border-gray-400 p-1">TOTAL</th>
                <th class="border border-gray-400 p-1">MALE</th>
                <th class="border border-gray-400 p-1">FEMALE</th>
                <th class="border border-gray-400 p-1">TOTAL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-400 px-2">1 Fat-meat</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['fatmeat']['high']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['fatmeat']['high']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['fatmeat']['high']['Total'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['fatmeat']['moderate']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['fatmeat']['moderate']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['fatmeat']['moderate']['Total'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['fatmeat']['low']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['fatmeat']['low']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['fatmeat']['low']['Total'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ ($healthyDiet['fatmeat']['high']['Total'] ?? 0) + ($healthyDiet['fatmeat']['moderate']['Total'] ?? 0) + ($healthyDiet['fatmeat']['low']['Total'] ?? 0) }}</td>
            </tr>
            <tr>
                <td class="border border-gray-400 px-2">2 Vegetables</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['vegetables']['high']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['vegetables']['high']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['vegetables']['high']['Total'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['vegetables']['moderate']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['vegetables']['moderate']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['vegetables']['moderate']['Total'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['vegetables']['low']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['vegetables']['low']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['vegetables']['low']['Total'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ ($healthyDiet['vegetables']['high']['Total'] ?? 0) + ($healthyDiet['vegetables']['moderate']['Total'] ?? 0) + ($healthyDiet['vegetables']['low']['Total'] ?? 0) }}</td>
            </tr>
            <tr>
                <td class="border border-gray-400 px-2">3 Sodium/Salt</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['sodium_salt']['high']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['sodium_salt']['high']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['sodium_salt']['high']['Total'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['sodium_salt']['moderate']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['sodium_salt']['moderate']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['sodium_salt']['moderate']['Total'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['sodium_salt']['low']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['sodium_salt']['low']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['sodium_salt']['low']['Total'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ ($healthyDiet['sodium_salt']['high']['Total'] ?? 0) + ($healthyDiet['sodium_salt']['moderate']['Total'] ?? 0) + ($healthyDiet['sodium_salt']['low']['Total'] ?? 0) }}</td>
            </tr>
            <tr>
                <td class="border border-gray-400 px-2">4 Sugar</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['sugar']['high']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['sugar']['high']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['sugar']['high']['Total'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['sugar']['moderate']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['sugar']['moderate']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['sugar']['moderate']['Total'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['sugar']['low']['Male'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['sugar']['low']['Female'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ $healthyDiet['sugar']['low']['Total'] ?? 0 }}</td>
                <td class="border border-gray-400 text-center">{{ ($healthyDiet['sugar']['high']['Total'] ?? 0) + ($healthyDiet['sugar']['moderate']['Total'] ?? 0) + ($healthyDiet['sugar']['low']['Total'] ?? 0) }}</td>
            </tr>
            @php
                // Calculate column totals for Healthy Diet
                $highMale = ($healthyDiet['fatmeat']['high']['Male'] ?? 0) + ($healthyDiet['vegetables']['high']['Male'] ?? 0) + ($healthyDiet['sodium_salt']['high']['Male'] ?? 0) + ($healthyDiet['sugar']['high']['Male'] ?? 0);
                $highFemale = ($healthyDiet['fatmeat']['high']['Female'] ?? 0) + ($healthyDiet['vegetables']['high']['Female'] ?? 0) + ($healthyDiet['sodium_salt']['high']['Female'] ?? 0) + ($healthyDiet['sugar']['high']['Female'] ?? 0);
                $highTotal = ($healthyDiet['fatmeat']['high']['Total'] ?? 0) + ($healthyDiet['vegetables']['high']['Total'] ?? 0) + ($healthyDiet['sodium_salt']['high']['Total'] ?? 0) + ($healthyDiet['sugar']['high']['Total'] ?? 0);
                
                $moderateMale = ($healthyDiet['fatmeat']['moderate']['Male'] ?? 0) + ($healthyDiet['vegetables']['moderate']['Male'] ?? 0) + ($healthyDiet['sodium_salt']['moderate']['Male'] ?? 0) + ($healthyDiet['sugar']['moderate']['Male'] ?? 0);
                $moderateFemale = ($healthyDiet['fatmeat']['moderate']['Female'] ?? 0) + ($healthyDiet['vegetables']['moderate']['Female'] ?? 0) + ($healthyDiet['sodium_salt']['moderate']['Female'] ?? 0) + ($healthyDiet['sugar']['moderate']['Female'] ?? 0);
                $moderateTotal = ($healthyDiet['fatmeat']['moderate']['Total'] ?? 0) + ($healthyDiet['vegetables']['moderate']['Total'] ?? 0) + ($healthyDiet['sodium_salt']['moderate']['Total'] ?? 0) + ($healthyDiet['sugar']['moderate']['Total'] ?? 0);
                
                $lowMale = ($healthyDiet['fatmeat']['low']['Male'] ?? 0) + ($healthyDiet['vegetables']['low']['Male'] ?? 0) + ($healthyDiet['sodium_salt']['low']['Male'] ?? 0) + ($healthyDiet['sugar']['low']['Male'] ?? 0);
                $lowFemale = ($healthyDiet['fatmeat']['low']['Female'] ?? 0) + ($healthyDiet['vegetables']['low']['Female'] ?? 0) + ($healthyDiet['sodium_salt']['low']['Female'] ?? 0) + ($healthyDiet['sugar']['low']['Female'] ?? 0);
                $lowTotal = ($healthyDiet['fatmeat']['low']['Total'] ?? 0) + ($healthyDiet['vegetables']['low']['Total'] ?? 0) + ($healthyDiet['sodium_salt']['low']['Total'] ?? 0) + ($healthyDiet['sugar']['low']['Total'] ?? 0);
                
                $dietGrandTotal = $highTotal + $moderateTotal + $lowTotal;
            @endphp
            <tr class="bg-gray-200 font-bold">
                <td class="border border-gray-400 px-2">TOTAL</td>
                <td class="border border-gray-400 text-center">{{ $highMale }}</td>
                <td class="border border-gray-400 text-center">{{ $highFemale }}</td>
                <td class="border border-gray-400 text-center">{{ $highTotal }}</td>
                <td class="border border-gray-400 text-center">{{ $moderateMale }}</td>
                <td class="border border-gray-400 text-center">{{ $moderateFemale }}</td>
                <td class="border border-gray-400 text-center">{{ $moderateTotal }}</td>
                <td class="border border-gray-400 text-center">{{ $lowMale }}</td>
                <td class="border border-gray-400 text-center">{{ $lowFemale }}</td>
                <td class="border border-gray-400 text-center">{{ $lowTotal }}</td>
                <td class="border border-gray-400 text-center">{{ $dietGrandTotal }}</td>
            </tr>
        </tbody>
    </table>

<!-- OCCUPATIONAL EXPOSURE -->
<table class="w-full text-xs border border-gray-400 mt-6">
    <thead>
        <tr class="bg-gray-600 text-white font-bold">
            <th colspan="4" class="border border-gray-400 text-center py-1">OCCUPATIONAL EXPOSURE</th>
        </tr>
        <tr class="bg-gray-300 font-bold">
            <th class="border border-gray-400 text-left px-2">CLASSIFICATIONS</th>
            <th class="border border-gray-400 text-center">MALE</th>
            <th class="border border-gray-400 text-center">FEMALE</th>
            <th class="border border-gray-400 text-center">TOTAL</th>
        </tr>
    </thead>
    <tbody>
        @foreach ([
            'Cement Dust','Cotton','Chemical Fumes','Grains','Metal',
            'Paper','Radiation','Silica','Smoke','None','Others'
        ] as $index => $item)
        <tr>
            <td class="border border-gray-400 px-2">{{ $index+1 }} {{ $item }}</td>
            <td class="border border-gray-400 text-center">{{ $occupationalExposure[$item]['Male'] ?? 0 }}</td>
            <td class="border border-gray-400 text-center">{{ $occupationalExposure[$item]['Female'] ?? 0 }}</td>
            <td class="border border-gray-400 text-center">{{ $occupationalExposure[$item]['Total'] ?? 0 }}</td>
        </tr>
        @endforeach
        <tr class="bg-gray-200 font-bold">
            <td class="border border-gray-400 px-2">TOTAL</td>
            <td class="border border-gray-400 text-center">{{ array_sum(array_column($occupationalExposure, 'Male')) }}</td>
            <td class="border border-gray-400 text-center">{{ array_sum(array_column($occupationalExposure, 'Female')) }}</td>
            <td class="border border-gray-400 text-center">{{ array_sum(array_column($occupationalExposure, 'Total')) }}</td>
        </tr>
    </tbody>
</table>

<!-- OUTDOOR AIR POLLUTION EXPOSURE -->
<table class="w-full text-xs border border-gray-400 mt-6">
    <thead>
        <tr class="bg-gray-600 text-white font-bold">
            <th colspan="4" class="border border-gray-400 text-center py-1">OUTDOOR AIR POLLUTION EXPOSURE</th>
        </tr>
        <tr class="bg-gray-300 font-bold">
            <th class="border border-gray-400 text-left px-2">CLASSIFICATIONS</th>
            <th class="border border-gray-400 text-center">MALE</th>
            <th class="border border-gray-400 text-center">FEMALE</th>
            <th class="border border-gray-400 text-center">TOTAL</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="border border-gray-400 px-2">1 Yes</td>
            <td class="border border-gray-400 text-center">{{ $airPollution['Yes']['Male'] ?? 0 }}</td>
            <td class="border border-gray-400 text-center">{{ $airPollution['Yes']['Female'] ?? 0 }}</td>
            <td class="border border-gray-400 text-center">{{ $airPollution['Yes']['Total'] ?? 0 }}</td>
        </tr>
        <tr>
            <td class="border border-gray-400 px-2">2 No</td>
            <td class="border border-gray-400 text-center">{{ $airPollution['No']['Male'] ?? 0 }}</td>
            <td class="border border-gray-400 text-center">{{ $airPollution['No']['Female'] ?? 0 }}</td>
            <td class="border border-gray-400 text-center">{{ $airPollution['No']['Total'] ?? 0 }}</td>
        </tr>
        <tr class="bg-gray-200 font-bold">
            <td class="border border-gray-400 px-2">TOTAL</td>
            <td class="border border-gray-400 text-center">{{ array_sum(array_column($airPollution, 'Male')) }}</td>
            <td class="border border-gray-400 text-center">{{ array_sum(array_column($airPollution, 'Female')) }}</td>
            <td class="border border-gray-400 text-center">{{ array_sum(array_column($airPollution, 'Total')) }}</td>
        </tr>
    </tbody>
</table>


</div>
@endsection