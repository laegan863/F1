@extends('reports.app')
@section('title', 'REPORTING FORM 0B: Medicines Availed by Cancer Patients Enrolled in CSPMAP')
@section('content')
@php
    use App\Models\F2cancerdiagnoseoutcome;
    use App\Models\F3financialsupport;
    use App\Models\F4financialsupportmechanism;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Request;
      
    $rawData = [];

    if (Request::segment(2) === 'generate-report') {
        $rawData[] = F3financialsupport::whereBetween(DB::raw('YEAR(created_at)'), [Request::query('year_from'), Request::query('year_to')])
            ->whereBetween(DB::raw('MONTH(created_at)'), [Request::query('month_from'), Request::query('month_to')])
            ->get();
        $rawData[] = F4financialsupportmechanism::whereBetween(DB::raw('YEAR(created_at)'), [Request::query('year_from'), Request::query('year_to')])
            ->whereBetween(DB::raw('MONTH(created_at)'), [Request::query('month_from'), Request::query('month_to')])
            ->get();
        $rawData[] = F2cancerdiagnoseoutcome::whereBetween(DB::raw('YEAR(created_at)'), [Request::query('year_from'), Request::query('year_to')])
            ->whereBetween(DB::raw('MONTH(created_at)'), [Request::query('month_from'), Request::query('month_to')])
            ->get();
    } else {
        $rawData = $data;
    }

    // echo json_encode($rawData);

    // Initialize frequency counter for all CSPMAP medicines
    $cspmapMedsFrequency = [
        'Asparaginase 10,000 IU vial' => 0,
        'Bicalutamide 50 mg' => 0,
        'Bleomycin (as Sulfate) 15 mg Vial' => 0,
        'Calcium Folinate (Leucovorin Calcium) 50 mg vial' => 0,
        'Capecitabine 500 mg Tablet' => 0,
        'Carboplatin 150 mg vial' => 0,
        'Carboplatin 450 mg vial' => 0,
        'Cisplatin 1 mg/mL, 10 mL vial' => 0,
        'Cisplatin 1 mg/mL, 50 mL vial' => 0,
        'Cyclophosphamide 500 mg powder vial' => 0,
        'Cytarabine 100 mg/mL 1 mL vial' => 0,
        'Cytarabine 100 mg/mL 5 mL vial' => 0,
        'Dacarbazine 200 mg vial' => 0,
        'Dactinomycin (Actinomycin D) 500 mcg powder vial' => 0,
        'Diazepam 5 mg/mL, 2 mL amp' => 0,
        'Diphenhydramine (as Hydrochloride) 50 mg/mL, 1 mL Amp' => 0,
        'Docetaxel 20 mg/mL, 1 mL vial' => 0,
        'Docetaxel 40 mg/mL, 2 mL vial' => 0,
        'Doxorubicin 10 mg vial' => 0,
        'Doxorubicin 50 mg vial' => 0,
        'Epirubicin 50 mg vial' => 0,
        'Etoposide 20 mg/mL, 5 mL amp/vial' => 0,
        'Fentanyl Citrate 50 mcg/mL, 2 mL amp' => 0,
        'Filgrastim (G-CSF) 300 mcg/0.5 mL Pre-filled syringe (PFS)' => 0,
        'Fluorouracil 50 mg/mL, 10 mL vial' => 0,
        'Gemcitabine 1 g vial' => 0,
        'Gemcitabine 200 mg vial' => 0,
        'Goserelin 3.6 mg depot solution Pre-filled syringe (PFS)' => 0,
        'Haloperidol 5 mg/mL, 1 mL amp' => 0,
        'Hydroxyurea 500 mg capsule' => 0,
        'Hyoscine (as N-butyl bromide) 20 mg/mL, 1 mL amp' => 0,
        'Idarubicin 5 mg vial' => 0,
        'Ifosfamide 1 g vial' => 0,
        'Imatinib 400 mg tablet' => 0,
        'Imatinib Mesilate 100 mg tablet' => 0,
        'Irinotecan 40 mg/2 mL vial concentrate vial' => 0,
        'Letrozole 2.5 mg Tablet' => 0,
        'Leuprolene Acetate 3.75 mg vial (PFS)' => 0,
        'Mercaptopurine 50 mg tablet' => 0,
        'Mesna 100 mg/mL, 4 mL Amp' => 0,
        'Methotrexate 2.5 mg tablet' => 0,
        'Methotrexate 25 mg/mL, 2 mL vial' => 0,
        'Metoclopramide 5 mg/mL, 2 mL Ampule' => 0,
        'Morphine (as Sulfate) 10 mg tablet' => 0,
        'Morphine (as Sulfate) 10 mg/mL, 1 mL Ampule' => 0,
        'Morphine (as Sulfate) 30 mg tablet' => 0,
        'Omeprazole 40 mg powder vial + 10 mL solvent Ampule' => 0,
        'Ondansetron (as Hydrochloride) 2 mg/mL, 2 mL ampule' => 0,
        'Ondansetron (as Hydrochloride) 2 mg/mL, 4 mL ampule' => 0,
        'Oxaliplatin 5 mg/mL concentration solution, 10 mL Vial' => 0,
        'Paclitaxel 6 mg/mL, 16.7 mL Vial' => 0,
        'Paclitaxel 6 mg/mL, 25 mL Vial' => 0,
        'Ranitidine (as Hydrochloride) 25 mg/mL, 2 mL ampule/vial' => 0,
        'Rituximab 10 mg/mL, 10 mL Vial' => 0,
        'Rituximab 10 mg/mL, 50 mL Vial' => 0,
        'Tamoxifen 20 mg tablet' => 0,
        'Trastuzumab 150 mg Lyophilized Powder' => 0,
        'Trastuzumab 600 mg/5 mL (120mg/mL) 5mL Vial' => 0,
        'Vinblastine Sulfate 1 mg/mL, 10 mL Vial' => 0,
        'Vincristine (as Sulfate) 1 mg/mL Vial' => 0,
        'Vincristine (as sulfate) 1 mg/mL, 2 mL Vial' => 0,
        'Others' => 0,
    ];

    // Helper function to normalize medicine names for matching
    function normalizeMedicineName($name) {
        // Convert to lowercase and remove extra spaces
        $normalized = strtolower(trim($name));
        // Replace common variations
        $normalized = str_replace(['vial', 'tablet', 'ampule', 'amp', 'capsule', 'mg/ml', 'mg', 'ml', 'iu', 'mcg', 'g'], '', $normalized);
        $normalized = preg_replace('/\s+/', ' ', $normalized);
        return trim($normalized);
    }

    // Create a mapping of normalized names to original keys
    $normalizedMapping = [];
    foreach (array_keys($cspmapMedsFrequency) as $medName) {
        $normalizedMapping[normalizeMedicineName($medName)] = $medName;
    }

    // Process data from F2, F3, and F4 forms
    foreach ($rawData as $dataCollection) {
        if ($dataCollection) {
            foreach ($dataCollection as $record) {
                // Check if cspmap_meds exists and is an array
                if (isset($record->cspmap_meds) && is_array($record->cspmap_meds)) {
                    foreach ($record->cspmap_meds as $medicine) {
                        $matched = false;
                        $normalizedInput = normalizeMedicineName($medicine);
                        
                        // Try to match with normalized names
                        if (isset($normalizedMapping[$normalizedInput])) {
                            $cspmapMedsFrequency[$normalizedMapping[$normalizedInput]]++;
                            $matched = true;
                        } else {
                            // Try partial matching for common variations
                            foreach ($normalizedMapping as $normalizedKey => $originalKey) {
                                if (strpos($normalizedKey, $normalizedInput) !== false || 
                                    strpos($normalizedInput, $normalizedKey) !== false) {
                                    $cspmapMedsFrequency[$originalKey]++;
                                    $matched = true;
                                    break;
                                }
                            }
                        }
                        
                        // If no match found, count as "Others"
                        if (!$matched && $record->cspmap_other) {
                            $cspmapMedsFrequency['Others']++;
                        }
                    }
                }
            }
        }
    }

@endphp
    <!-- CSPMAP MEDICINE -->
    <table class="w-full text-xs border border-gray-400 mt-6">
        <thead>
            <tr class="bg-gray-600 text-white font-bold">
                <th colspan="2" class="border border-gray-400 text-center py-1">CSPMAP MEDICINE</th>
            </tr>
            <tr class="bg-gray-300 font-bold">
                <th class="border border-gray-400 text-left px-2">CLASSIFICATIONS</th>
                <th class="border border-gray-400 text-center">FREQUENCY OF AVAILMENT</th>
            </tr>
        </thead>
        <tbody>
            @foreach ([
                'Asparaginase 10,000 IU vial',
                'Bicalutamide 50 mg',
                'Bleomycin (as Sulfate) 15 mg Vial',
                'Calcium Folinate (Leucovorin Calcium) 50 mg vial',
                'Capecitabine 500 mg Tablet',
                'Carboplatin 150 mg vial',
                'Carboplatin 450 mg vial',
                'Cisplatin 1 mg/mL, 10 mL vial',
                'Cisplatin 1 mg/mL, 50 mL vial',
                'Cyclophosphamide 500 mg powder vial',
                'Cytarabine 100 mg/mL 1 mL vial',
                'Cytarabine 100 mg/mL 5 mL vial',
                'Dacarbazine 200 mg vial',
                'Dactinomycin (Actinomycin D) 500 mcg powder vial',
                'Diazepam 5 mg/mL, 2 mL amp',
                'Diphenhydramine (as Hydrochloride) 50 mg/mL, 1 mL Amp',
                'Docetaxel 20 mg/mL, 1 mL vial',
                'Docetaxel 40 mg/mL, 2 mL vial',
                'Doxorubicin 10 mg vial',
                'Doxorubicin 50 mg vial',
                'Epirubicin 50 mg vial',
                'Etoposide 20 mg/mL, 5 mL amp/vial',
                'Fentanyl Citrate 50 mcg/mL, 2 mL amp',
                'Filgrastim (G-CSF) 300 mcg/0.5 mL Pre-filled syringe (PFS)',
                'Fluorouracil 50 mg/mL, 10 mL vial',
                'Gemcitabine 1 g vial',
                'Gemcitabine 200 mg vial',
                'Goserelin 3.6 mg depot solution Pre-filled syringe (PFS)',
                'Haloperidol 5 mg/mL, 1 mL amp',
                'Hydroxyurea 500 mg capsule',
                'Hyoscine (as N-butyl bromide) 20 mg/mL, 1 mL amp',
                'Idarubicin 5 mg vial',
                'Ifosfamide 1 g vial',
                'Imatinib 400 mg tablet',
                'Imatinib Mesilate 100 mg tablet',
                'Irinotecan 40 mg/2 mL vial concentrate vial',
                'Letrozole 2.5 mg Tablet',
                'Leuprolene Acetate 3.75 mg vial (PFS)',
                'Mercaptopurine 50 mg tablet',
                'Mesna 100 mg/mL, 4 mL Amp',
                'Methotrexate 2.5 mg tablet',
                'Methotrexate 25 mg/mL, 2 mL vial',
                'Metoclopramide 5 mg/mL, 2 mL Ampule',
                'Morphine (as Sulfate) 10 mg tablet',
                'Morphine (as Sulfate) 10 mg/mL, 1 mL Ampule',
                'Morphine (as Sulfate) 30 mg tablet',
                'Omeprazole 40 mg powder vial + 10 mL solvent Ampule',
                'Ondansetron (as Hydrochloride) 2 mg/mL, 2 mL ampule',
                'Ondansetron (as Hydrochloride) 2 mg/mL, 4 mL ampule',
                'Oxaliplatin 5 mg/mL concentration solution, 10 mL Vial',
                'Paclitaxel 6 mg/mL, 16.7 mL Vial',
                'Paclitaxel 6 mg/mL, 25 mL Vial',
                'Ranitidine (as Hydrochloride) 25 mg/mL, 2 mL ampule/vial',
                'Rituximab 10 mg/mL, 10 mL Vial',
                'Rituximab 10 mg/mL, 50 mL Vial',
                'Tamoxifen 20 mg tablet',
                'Trastuzumab 150 mg Lyophilized Powder',
                'Trastuzumab 600 mg/5 mL (120mg/mL) 5mL Vial',
                'Vinblastine Sulfate 1 mg/mL, 10 mL Vial',
                'Vincristine (as Sulfate) 1 mg/mL Vial',
                'Vincristine (as sulfate) 1 mg/mL, 2 mL Vial',
                'Others'
            ] as $index => $item)
            <tr>
                <td class="border border-gray-400 px-2">{{ $index + 1 }}. {{ $item }}</td>
                <td class="border border-gray-400 text-center">{{ $cspmapMedsFrequency[$item] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection