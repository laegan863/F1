@extends('reports.app')
@section('title', 'REPORTING FORM 1C: Medical History')
@section('content')
@php
    $cancerSites = [
        "Adrenal",
        "Anus",
        "Biliary Tract",
        "Blood - Acute Lymphocytic Leukemia",
        "Blood - Acute Myelogenous Leukemia",
        "Blood - Chronic Lymphocytic Leukemia",
        "Blood - Chronic Myelogenous Leukemia",
        "Blood - Myelodysplastic Syndromes",
        "Blood - Plasma Cell Disorders",
        "Bone",
        "Brain - CNS",
        "Breast",
        "Colon",
        "Corpus Uteri",
        "Esophagus",
        "Eyes and Orbit",
        "Gallbladder",
        "Gastroesophageal Junction",
        "Hodgkin Lymphoma",
        "Hypopharynx",
        "Kaposi Sarcoma",
        "Kidney",
        "Larynx",
        "Leukemia",
        "Lip/Oral Cavity",
        "Liver",
        "Lung",
        "Melanoma of Skin",
        "Mesothelioma",
        "Multiple Myeloma",
        "Nasopharynx",
        "Non-Hodgkin Lymphoma",
        "Oral Cavity",
        "Oropharynx",
        "Ovary",
        "Pancreas",
        "Paranasal Sinus",
        "Peritoneal",
        "Prostate",
        "Rectum",
        "Renal Pelvis/Ureters",
        "Salivary Glands",
        "Skin",
        "Small Bowel",
        "Soft Tissue Sarcoma",
        "Spinal Cord",
        "Stomach",
        "Testis",
        "Thymus",
        "Thyroid",
        "Unknown Primary (Occult Primary)",
        "Urinary Bladder",
        "Uterine Cervix",
        "Vagina",
        "Vulva",
        "Others"
    ];
@endphp
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
        $rawData = $data ?? [];
    }

    // Initialize infections array first (needed before processing)
    $infections = [
        "Hepatitis B (Hep B)",
        "Hepatitis C (Hep C)",
        "Hepatitis D (Hep D)",
        "Hepatitis E (Hep E)",
        "Human Papillomavirus (HPV)",
        "Human Immunodeficiency Virus (HIV)",
        "Epstein–Barr Virus (EBV)",
        "Kaposi Sarcoma Herpesvirus (KSHV or HHV-8)",
        "Human T-lymphotropic Virus Type 1 (HTLV-1)",
        "Merkel Cell Polyomavirus (MCPV)",
        "Helicobacter Pylori (H Pylori)",
        "Chlamydia Trachomatis",
        "Schistosoma Hematobium",
        "Opisthorchis Viverrini",
        "Clonorchis Sinesis",
        "None",
        "Unknown",
        "Others",
    ];

    $comorbidities = [
        "Cardiovascular disease",
        "Chronic respiratory disease",
        "Chronic kidney disease",
        "Diabetes mellitus",
        "Hypertension",
        "Immunosuppression / Immunodeficiency",
        "Liver disease",
        "Obesity",
        "Tuberculosis",
        "None",
        "Unknown",
        "Others",
    ];

    // Initialize counters for all categories
    $familyHistoryCount = ['Yes' => 0, 'No' => 0, 'Unknown' => 0, 'No Known Genetic Disposition to Cancer' => 0];
    $familyHistorySitesCount = array_fill_keys($cancerSites, 0);
    $infectionsCountByGender = [];
    foreach ($infections as $infection) {
        $infectionsCountByGender[$infection] = ['Male' => 0, 'Female' => 0, 'Total' => 0];
    }
    $cancerHistoryCount = [];
    foreach ($cancerSites as $site) {
        $cancerHistoryCount[$site] = ['Male' => 0, 'Female' => 0, 'Total' => 0];
    }
    $comorbiditiesCount = [];
    foreach ($comorbidities as $comorbidity) {
        $comorbiditiesCount[$comorbidity] = ['Male' => 0, 'Female' => 0, 'Total' => 0];
    }

    // Process raw data and populate counts
    foreach ($rawData as $profile) {
        $gender = strtolower($profile->sex ?? 'unknown');
        $genderLabel = ($gender === 'male' || $gender === 'm') ? 'Male' : 'Female';

        // Process risk factors
        if (isset($profile->riskfactors) && is_object($profile->riskfactors)) {
            $riskFactor = $profile->riskfactors;
            
            // Family History
            if (isset($riskFactor->family_history)) {
                $familyHistory = ucfirst($riskFactor->family_history);
                if ($familyHistory === 'Yes') {
                    $familyHistoryCount['Yes']++;
                } elseif ($familyHistory === 'No') {
                    $familyHistoryCount['No']++;
                } elseif ($familyHistory === 'Unknown') {
                    $familyHistoryCount['Unknown']++;
                }
            }

            // Cancer Sites in Family History
            if (isset($riskFactor->cancer_sites) && is_array($riskFactor->cancer_sites)) {
                foreach ($riskFactor->cancer_sites as $site) {
                    if (in_array($site, $cancerSites)) {
                        $familyHistorySitesCount[$site]++;
                    }
                }
            }

            // Infections
            if (isset($riskFactor->infections) && is_array($riskFactor->infections)) {
                foreach ($riskFactor->infections as $infection) {
                    // Match "Hepatitis B" to "Hepatitis B (Hep B)"
                    foreach ($infections as $infectionKey) {
                        if (strpos($infectionKey, $infection) !== false || strpos($infection, $infectionKey) !== false) {
                            $infectionsCountByGender[$infectionKey]['Male'] += ($genderLabel === 'Male') ? 1 : 0;
                            $infectionsCountByGender[$infectionKey]['Female'] += ($genderLabel === 'Female') ? 1 : 0;
                            $infectionsCountByGender[$infectionKey]['Total']++;
                            break;
                        }
                    }
                }
            }

            // Comorbidities
            if (isset($riskFactor->comorbidities) && is_array($riskFactor->comorbidities)) {
                foreach ($riskFactor->comorbidities as $comorbidity) {
                    if (in_array($comorbidity, $comorbidities)) {
                        $comorbiditiesCount[$comorbidity]['Male'] += ($genderLabel === 'Male') ? 1 : 0;
                        $comorbiditiesCount[$comorbidity]['Female'] += ($genderLabel === 'Female') ? 1 : 0;
                        $comorbiditiesCount[$comorbidity]['Total']++;
                    }
                }
            }
        }

        // Cancer History Sites
        if (isset($profile->cancerdiagnoses) && is_object($profile->cancerdiagnoses)) {
            $cancerDiagnosis = $profile->cancerdiagnoses;
            if (isset($cancerDiagnosis->cancer_sites) && is_array($cancerDiagnosis->cancer_sites)) {
                foreach ($cancerDiagnosis->cancer_sites as $site) {
                    if (in_array($site, $cancerSites)) {
                        $cancerHistoryCount[$site]['Male'] += ($genderLabel === 'Male') ? 1 : 0;
                        $cancerHistoryCount[$site]['Female'] += ($genderLabel === 'Female') ? 1 : 0;
                        $cancerHistoryCount[$site]['Total']++;
                    }
                }
            }
        }
    }

    // Calculate section totals
    $infectionsMale = array_sum(array_column($infectionsCountByGender, 'Male'));
    $infectionsFemale = array_sum(array_column($infectionsCountByGender, 'Female'));
    $infectionsTotal = $infectionsMale + $infectionsFemale;

    $cancerHistoryMale = array_sum(array_column($cancerHistoryCount, 'Male'));
    $cancerHistoryFemale = array_sum(array_column($cancerHistoryCount, 'Female'));
    $cancerHistoryTotal = $cancerHistoryMale + $cancerHistoryFemale;

    $comorbiditiesMale = array_sum(array_column($comorbiditiesCount, 'Male'));
    $comorbiditiesFemale = array_sum(array_column($comorbiditiesCount, 'Female'));
    $comorbiditiesTotal = $comorbiditiesMale + $comorbiditiesFemale;

    // Calculate grand total
    $totalMale = $infectionsMale + $cancerHistoryMale + $comorbiditiesMale;
    $totalFemale = $infectionsFemale + $cancerHistoryFemale + $comorbiditiesFemale;
    $grandTotal = $totalMale + $totalFemale;
@endphp
    <div class="text-xs">
        <table class="w-full border border-gray-400">
            <tbody>
                <tr class="bg-gray-400 text-white font-bold">
                    <td class="border border-black text-left" colspan="1">FAMILY HISTORY OF CANCER</td>
                    <td class="border border-black text-center" colspan="3">TOTAL</td>
                </tr>
                @foreach (['Yes', 'No', 'Unknown', 'No Known Genetic Disposition to Cancer'] as $item)
                    <tr class="text-center">
                        <td class="border border-black text-left" colspan="1">{{ $loop->iteration }} {{ $item }}</td>
                        <td class="border border-black" colspan="3">{{ $familyHistoryCount[$item] ?? 0 }}</td>
                    </tr>
                @endforeach 
                <tr class="bg-gray-400 text-white font-bold">
                    <td class="border border-black" colspan="1">FAMILY HISTORY OF CANCER - SITES</td>
                    <td class="border border-black text-center" colspan="3">TOTAL</td>
                </tr>
                @foreach ($cancerSites as $cancer)
                    <tr class="text-center">
                        <td class="border border-black text-left" colspan="1">{{ $loop->iteration }} {{ $cancer }}</td>
                        <td class="border border-black" colspan="3">{{ $familyHistorySitesCount[$cancer] ?? 0 }}</td>
                    </tr>
                @endforeach 
                <tr class="bg-gray-400 text-white font-bold">
                    <td class="border border-black" colspan="1" width="33.3%">INFECTIONS</td>
                    <td class="border border-black" colspan="1">MALE</td>
                    <td class="border border-black" colspan="1">FEMALE</td>
                    <td class="border border-black" colspan="1">TOTAL</td>
                </tr>
                @foreach ($infections as $infection)
                    <tr class="text-center">
                        <td class="border border-black text-left" colspan="1">{{ $loop->iteration }} {{ $infection }}</td>
                        <td class="border border-black" colspan="1">{{ $infectionsCountByGender[$infection]['Male'] ?? 0 }}</td>
                        <td class="border border-black" colspan="1">{{ $infectionsCountByGender[$infection]['Female'] ?? 0 }}</td>
                        <td class="border border-black" colspan="1">{{ $infectionsCountByGender[$infection]['Total'] ?? 0 }}</td>
                    </tr>
                @endforeach
                <tr class="bg-gray-300 font-bold text-center">
                    <td class="border border-black text-left px-2" colspan="1">TOTAL</td>
                    <td class="border border-black " colspan="1">{{ $infectionsMale }}</td>
                    <td class="border border-black" colspan="1">{{ $infectionsFemale }}</td>
                    <td class="border border-black" colspan="1">{{ $infectionsTotal }}</td>
                </tr>
                <tr class="bg-gray-400 text-white font-bold">
                    <td class="border border-black" colspan="1" width="33.3%">CANCER HISTORY</td>
                    <td class="border border-black" colspan="1">MALE</td>
                    <td class="border border-black" colspan="1">FEMALE</td>
                    <td class="border border-black" colspan="1">TOTAL</td>
                </tr>
                @foreach ($cancerSites as $cancers)
                    <tr class="text-center">
                        <td class="border border-black text-left" colspan="1">{{ $loop->iteration }} {{ $cancers }}</td>
                        <td class="border border-black" colspan="1">{{ $cancerHistoryCount[$cancers]['Male'] ?? 0 }}</td>
                        <td class="border border-black" colspan="1">{{ $cancerHistoryCount[$cancers]['Female'] ?? 0 }}</td>
                        <td class="border border-black" colspan="1">{{ $cancerHistoryCount[$cancers]['Total'] ?? 0 }}</td>
                    </tr>
                @endforeach 
                <tr class="bg-gray-300 font-bold text-center">
                    <td class="border border-black text-left px-2" colspan="1">TOTAL</td>
                    <td class="border border-black" colspan="1">{{ $cancerHistoryMale }}</td>
                    <td class="border border-black" colspan="1">{{ $cancerHistoryFemale }}</td>
                    <td class="border border-black" colspan="1">{{ $cancerHistoryTotal }}</td>
                </tr>
                <tr class="bg-gray-400 text-white font-bold text-center">
                    <td class="border border-black text-left" colspan="1" width="33.3%">COMORBIDITIES</td>
                    <td class="border border-black" colspan="1">MALE</td>
                    <td class="border border-black" colspan="1">FEMALE</td>
                    <td class="border border-black" colspan="1">TOTAL</td>
                </tr>
                @foreach ($comorbidities as $comorbidity)
                    <tr class="text-center">
                        <td class="border border-black text-left" colspan="1">{{ $loop->iteration }} {{ $comorbidity }}</td>
                        <td class="border border-black" colspan="1">{{ $comorbiditiesCount[$comorbidity]['Male'] ?? 0 }}</td>
                        <td class="border border-black" colspan="1">{{ $comorbiditiesCount[$comorbidity]['Female'] ?? 0 }}</td>
                        <td class="border border-black" colspan="1">{{ $comorbiditiesCount[$comorbidity]['Total'] ?? 0 }}</td>
                    </tr>
                @endforeach
                <tr class="bg-gray-300 font-bold text-center">
                    <td class="border border-black text-left px-2" colspan="1">TOTAL</td>
                    <td class="border border-black" colspan="1">{{ $comorbiditiesMale }}</td>
                    <td class="border border-black" colspan="1">{{ $comorbiditiesFemale }}</td>
                    <td class="border border-black" colspan="1">{{ $comorbiditiesTotal }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection