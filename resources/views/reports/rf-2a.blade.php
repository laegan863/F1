@extends('reports.app')
@section('title', 'REPORTING FORM 2A: First Course of Treatment Given to Cancer Patients at the Health Facility of Consult')
@section('content')
@php
    use App\Models\F2followup;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Request;
    
    if (Request::segment(2) === 'generate-report') {
        $rawData = F2followup::with([
            'f2othercancertherapies',
            'f2patientstatuses', 
            'f2radiotheraphies',
            'f2cancerdiagnoseoutcomes',
            'f2changetreatmentplans'
        ])
            ->whereBetween(DB::raw('YEAR(created_at)'), [Request::query('year_from'), Request::query('year_to')])
            ->whereBetween(DB::raw('MONTH(created_at)'), [Request::query('month_from'), Request::query('month_to')])
            ->get();
    } else {
        $rawData = $data;
    }

    // Initialize counters
    $counts = [
        'surgery' => 0,
        'cytotoxic' => 0,
        'hormonal' => 0,
        'immunotherapy' => 0,
        'targeted' => 0,
        'radio_2d' => 0,
        'radio_3dcrt' => 0,
        'radio_brachytherapy' => 0,
        'radio_imrt' => 0,
        'radio_iort' => 0,
        'radio_heavy' => 0,
        'radio_proton' => 0,
        'radio_stereotactic' => 0,
        'theranostics' => 0,
        'blood_transfusion' => 0,
        'cryoablation' => 0,
        'embolization' => 0,
        'radiofrequency' => 0,
        'transarterial' => 0,
        'transplant' => 0,
        'non_receipt' => 0,
    ];

    // Process each followup record
    foreach ($rawData as $followup) {
        // Check Surgery
        if ($followup->f2changetreatmentplans && $followup->f2changetreatmentplans->surgery_plan) {
            $counts['surgery']++;
        }

        // Check Anti-Cancer Drug Therapy
        if ($followup->f2changetreatmentplans) {
            $drugTypes = array_merge(
                is_array($followup->f2changetreatmentplans->new_drug_type) ? $followup->f2changetreatmentplans->new_drug_type : [],
                is_array($followup->f2changetreatmentplans->same_drug_type) ? $followup->f2changetreatmentplans->same_drug_type : [],
                is_array($followup->f2changetreatmentplans->deferred_drug_type) ? $followup->f2changetreatmentplans->deferred_drug_type : []
            );
            
            if (in_array('Cytotoxic', $drugTypes)) $counts['cytotoxic']++;
            if (in_array('Hormonal', $drugTypes)) $counts['hormonal']++;
            if (in_array('Immunotherapy', $drugTypes)) $counts['immunotherapy']++;
            if (in_array('Targeted therapy', $drugTypes)) $counts['targeted']++;
        }

        // Check Radiotherapy
        if ($followup->f2radiotheraphies && $followup->f2radiotheraphies->radiotherapy) {
            $radioTypes = is_array($followup->f2radiotheraphies->radio_type) ? $followup->f2radiotheraphies->radio_type : [];
            
            if (in_array('2D Conventional', $radioTypes)) $counts['radio_2d']++;
            if (in_array('3DCRT', $radioTypes)) $counts['radio_3dcrt']++;
            if (in_array('Brachytherapy', $radioTypes)) $counts['radio_brachytherapy']++;
            if (in_array('IMRT/VMAT/Helical', $radioTypes)) $counts['radio_imrt']++;
            if (in_array('IORT', $radioTypes)) $counts['radio_iort']++;
            if (in_array('Heavy Particles', $radioTypes)) $counts['radio_heavy']++;
            if (in_array('Proton Therapy', $radioTypes)) $counts['radio_proton']++;
            if (in_array('Stereotactic Radiosurgery / Stereotactic Radiotherapy', $radioTypes)) $counts['radio_stereotactic']++;
        }

        // Check Theranostics
        if ($followup->f2radiotheraphies && $followup->f2radiotheraphies->theranostics) {
            $counts['theranostics']++;
        }

        // Check Other Cancer Directed Therapies
        if ($followup->f2othercancertherapies && $followup->f2othercancertherapies->other_cancer_therapies) {
            $therapies = is_array($followup->f2othercancertherapies->cancer_therapies) ? $followup->f2othercancertherapies->cancer_therapies : [];
            
            if (in_array('Blood Transfusion', $therapies)) $counts['blood_transfusion']++;
            if (in_array('Cryoablation', $therapies)) $counts['cryoablation']++;
            if (in_array('Embolization', $therapies)) $counts['embolization']++;
            if (in_array('Radiofrequency ablation', $therapies)) $counts['radiofrequency']++;
            if (in_array('Transarterial chemoembolization', $therapies)) $counts['transarterial']++;
            if (in_array('Transplant', $therapies)) $counts['transplant']++;
        }

        // Check Non-receipt of Treatment
        if ($followup->f2patientstatuses && $followup->f2patientstatuses->treatment_status == 'No Treatment') {
            $counts['non_receipt']++;
        }
    }

    // Calculate totals
    $antiCancerTotal = $counts['cytotoxic'] + $counts['hormonal'] + $counts['immunotherapy'] + $counts['targeted'];
    $radiotherapyTotal = $counts['radio_2d'] + $counts['radio_3dcrt'] + $counts['radio_brachytherapy'] + 
                         $counts['radio_imrt'] + $counts['radio_iort'] + $counts['radio_heavy'] + 
                         $counts['radio_proton'] + $counts['radio_stereotactic'];
    $otherTherapiesTotal = $counts['blood_transfusion'] + $counts['cryoablation'] + $counts['embolization'] + 
                           $counts['radiofrequency'] + $counts['transarterial'] + $counts['transplant'];
    $grandTotal = $counts['surgery'] + $antiCancerTotal + $radiotherapyTotal + $counts['theranostics'] + 
                  $otherTherapiesTotal + $counts['non_receipt'];
@endphp

<table class="w-full text-xs border border-gray-500 mt-6">
    <thead>
        <tr class="bg-gray-600 text-white font-bold">
            <th colspan="3" class="border border-gray-500 text-center py-1">CANCER TREATMENT</th>
        </tr>
        <tr class="bg-gray-300 font-bold">
            <th class="border border-gray-500 text-left px-2">CLASSIFICATIONS</th>
            <th class="border border-gray-500 text-center">NO. OF PATIENTS</th>
            <th class="border border-gray-500 text-center">TOTAL</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td class="border border-gray-500 px-2">1 Surgery</td>
            <td class="border border-gray-500 text-center">{{ $counts['surgery'] }}</td>
            <td class="border border-gray-500 text-center">{{ $counts['surgery'] }}</td>
        </tr>

        <tr>
            <td class="border border-gray-500 px-2">2 Anti-Cancer Drug Therapy: Cytotoxic</td>
            <td class="border border-gray-500 text-center">{{ $counts['cytotoxic'] }}</td>
            <td class="border border-gray-500 text-center align-middle" rowspan="4">{{ $antiCancerTotal }}</td>
        </tr>
        <tr>
            <td class="border border-gray-500 px-2">3 Anti-Cancer Drug Therapy: Hormonal</td>
            <td class="border border-gray-500 text-center">{{ $counts['hormonal'] }}</td>
        </tr>
        <tr>
            <td class="border border-gray-500 px-2">4 Anti-Cancer Drug Therapy: Immunotherapy</td>
            <td class="border border-gray-500 text-center">{{ $counts['immunotherapy'] }}</td>
        </tr>
        <tr>
            <td class="border border-gray-500 px-2">5 Anti-Cancer Drug Therapy: Targeted therapy</td>
            <td class="border border-gray-500 text-center">{{ $counts['targeted'] }}</td>
        </tr>

        {{-- 6–13. Radiotherapy --}}
        <tr>
            <td class="border border-gray-500 px-2">6 Radiotherapy: 2D Conventional</td>
            <td class="border border-gray-500 text-center">{{ $counts['radio_2d'] }}</td>
            <td class="border border-gray-500 text-center align-middle" rowspan="8">{{ $radiotherapyTotal }}</td>
        </tr>
        <tr><td class="border border-gray-500 px-2">7 Radiotherapy: 3DCRT</td><td class="border border-gray-500 text-center">{{ $counts['radio_3dcrt'] }}</td></tr>
        <tr><td class="border border-gray-500 px-2">8 Radiotherapy: Brachytherapy</td><td class="border border-gray-500 text-center">{{ $counts['radio_brachytherapy'] }}</td></tr>
        <tr><td class="border border-gray-500 px-2">9 Radiotherapy: IMRT/VMAT/Helical</td><td class="border border-gray-500 text-center">{{ $counts['radio_imrt'] }}</td></tr>
        <tr><td class="border border-gray-500 px-2">10 Radiotherapy: IORT</td><td class="border border-gray-500 text-center">{{ $counts['radio_iort'] }}</td></tr>
        <tr><td class="border border-gray-500 px-2">11 Radiotherapy: Heavy Particles</td><td class="border border-gray-500 text-center">{{ $counts['radio_heavy'] }}</td></tr>
        <tr><td class="border border-gray-500 px-2">12 Radiotherapy: Proton Therapy</td><td class="border border-gray-500 text-center">{{ $counts['radio_proton'] }}</td></tr>
        <tr><td class="border border-gray-500 px-2">13 Radiotherapy: Stereotactic Radiosurgery / Stereotactic Radiotherapy</td><td class="border border-gray-500 text-center">{{ $counts['radio_stereotactic'] }}</td></tr>
        <tr>
            <td class="border border-gray-500 px-2">14 Theranostics</td>
            <td class="border border-gray-500 text-center">{{ $counts['theranostics'] }}</td>
            <td class="border border-gray-500 text-center">{{ $counts['theranostics'] }}</td>
        </tr>
        <tr>
            <td class="border border-gray-500 px-2">15 Other Cancer Directed Therapies: Blood Transfusion</td>
            <td class="border border-gray-500 text-center">{{ $counts['blood_transfusion'] }}</td>
            <td class="border border-gray-500 text-center align-middle" rowspan="6">{{ $otherTherapiesTotal }}</td>
        </tr>
        <tr><td class="border border-gray-500 px-2">16 Other Cancer Directed Therapies: Cryoablation</td><td class="border border-gray-500 text-center">{{ $counts['cryoablation'] }}</td></tr>
        <tr><td class="border border-gray-500 px-2">17 Other Cancer Directed Therapies: Embolization</td><td class="border border-gray-500 text-center">{{ $counts['embolization'] }}</td></tr>
        <tr><td class="border border-gray-500 px-2">18 Other Cancer Directed Therapies: Radiofrequency ablation</td><td class="border border-gray-500 text-center">{{ $counts['radiofrequency'] }}</td></tr>
        <tr><td class="border border-gray-500 px-2">19 Other Cancer Directed Therapies: Transarterial chemoembolization</td><td class="border border-gray-500 text-center">{{ $counts['transarterial'] }}</td></tr>
        <tr><td class="border border-gray-500 px-2">20 Other Cancer Directed Therapies: Transplant</td><td class="border border-gray-500 text-center">{{ $counts['transplant'] }}</td></tr>

        <tr>
            <td class="border border-gray-500 px-2">21 Non-receipt of Treatment</td>
            <td class="border border-gray-500 text-center">{{ $counts['non_receipt'] }}</td>
            <td class="border border-gray-500 text-center">{{ $counts['non_receipt'] }}</td>
        </tr>

        <tr class="bg-gray-300 font-bold">
            <td class="border border-gray-500 px-2 text-left">TOTAL</td>
            <td class="border border-gray-500 text-center">{{ $grandTotal }}</td>
            <td class="border border-gray-500 text-center">{{ $grandTotal }}</td>
        </tr>
    </tbody>
</table>
@endsection
