@extends('reports.app')
@section('title', 'REPORTING FORM 0A: Frequency of Financial Support Mechanism Availed by Cancer Patients')
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

    // Initialize frequency counter for all financial support types
    $financialSupportFrequency = [
        'Discounts under Law (e.g. Senior Citizen, PWD)' => 0,
        'PhilHealth' => 0,
        'Health Maintenance Organization (HMO)' => 0,
        'Philippine Charity Sweepstakes Office (PCSO)' => 0,
        'Assistance to Individuals in Crisis Situations (AICS)' => 0,
        'Cancer Assistance Fund (CAF)' => 0,
        'Medical Assistance for Indigent and Financially-Incapacitated Patients (MAIFIP)' => 0,
        'Hospital Assistance Funds' => 0,
        'Cancer and Supportive-Palliative Medicines Access Program (CSPMAP)' => 0,
        'Philippine Amusement and Gaming Corporation (PAGCOR)' => 0,
        'Non-Government Org. / Civil Society Org.' => 0,
        'Clinical Trial' => 0,
        'Charitable Institutions' => 0,
        'Private Sector Assistance Program' => 0,
        'None' => 0,
        'Others' => 0,
    ];

    // Process data from F2, F3, and F4 forms
    foreach ($rawData as $dataCollection) {
        if ($dataCollection) {
            foreach ($dataCollection as $record) {
                // Check if financial_type exists and is an array
                if (isset($record->financial_type) && is_array($record->financial_type)) {
                    foreach ($record->financial_type as $financialType) {
                        // Count each financial support type
                        if (array_key_exists($financialType, $financialSupportFrequency)) {
                            $financialSupportFrequency[$financialType]++;
                        } elseif ($record->financial_other) {
                            // If it's not in the predefined list, count it as "Others"
                            $financialSupportFrequency['Others']++;
                        }
                    }
                }
                
                // Check if they selected "None" or have no financial support
                // if (isset($record->financial_support)) {
                //     $financialSupportFrequency['None']++;
                // } elseif (empty($record->financial_type)) {
                //     $financialSupportFrequency['None']++;
                // }
            }
        }
    }

@endphp
    <!-- FINANCIAL SUPPORT MECHANISM AVAILED -->
    <table class="w-full text-xs border border-gray-400 mt-6">
        <thead>
            <tr class="bg-gray-600 text-white font-bold">
                <th colspan="2" class="border border-gray-400 text-center py-1">FINANCIAL SUPPORT MECHANISM AVAILED</th>
            </tr>
            <tr class="bg-gray-300 font-bold">
                <th class="border border-gray-400 text-left px-2">CLASSIFICATIONS</th>
                <th class="border border-gray-400 text-center">FREQUENCY OF AVAILMENT</th>
            </tr>
        </thead>
        <tbody>
            @foreach ([
                'Discounts under Law (e.g. Senior Citizen, PWD)',
                'PhilHealth',
                'Health Maintenance Organization (HMO)',
                'Philippine Charity Sweepstakes Office (PCSO)',
                'Assistance to Individuals in Crisis Situations (AICS)',
                'Cancer Assistance Fund (CAF)',
                'Medical Assistance for Indigent and Financially-Incapacitated Patients (MAIFIP)',
                'Hospital Assistance Funds',
                'Cancer and Supportive-Palliative Medicines Access Program (CSPMAP)',
                'Philippine Amusement and Gaming Corporation (PAGCOR)',
                'Non-Government Org. / Civil Society Org.',
                'Clinical Trial',
                'Charitable Institutions',
                'Private Sector Assistance Program',
                'None',
                'Others'
            ] as $index => $item)
            <tr>
                <td class="border border-gray-400 px-2">{{ $index + 1 }}. {{ $item }}</td>
                <td class="border border-gray-400 text-center">{{ $financialSupportFrequency[$item] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection