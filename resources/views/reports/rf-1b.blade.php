@extends('reports.app')
@section('title', 'REPORTING FORM 1B: Sociodemographic Characteristics')

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
    }else{
        $rawData = $data ?? [];
    }

    $educationLevels = ['Elementary', 'Secondary', 'Tertiary', 'Adult School', 'No Education'];
    $educationData = [];

    foreach ($educationLevels as $level) {
        $maleCount = $rawData->where('highest_education', $level)->where('sex', 'male')->count();
        $femaleCount = $rawData->where('highest_education', $level)->where('sex', 'female')->count();
        $educationData[$level] = [
            'male' => $maleCount,
            'female' => $femaleCount,
            'total' => $maleCount + $femaleCount,
        ];
    }

    $educationTotalMale   = collect($educationData)->sum('male');
    $educationTotalFemale = collect($educationData)->sum('female');
    $educationTotalAll    = $educationTotalMale + $educationTotalFemale;

    $occupations = [
        'Managers',
        'Professionals',
        'Technicians And Associate Professionals',
        'Clerical Support Workers',
        'Service And Sales Workers',
        'Skilled Agricultural, Forestry And Fishery Workers',
        'Craft And Related Trades Workers',
        'Plant And Machine Operators And Assemblers',
        'Elementary Occupations',
        'Armed Forces Occupations',
        'Unemployed Retired',
        'N/A'
    ];

    $occupationData = [];
    foreach ($occupations as $occupation) {
        $maleCount = $rawData->where('occupation', $occupation)->where('sex', 'male')->count();
        $femaleCount = $rawData->where('occupation', $occupation)->where('sex', 'female')->count();
        $occupationData[$occupation] = [
            'male' => $maleCount,
            'female' => $femaleCount,
            'total' => $maleCount + $femaleCount,
        ];
    }

    $occupationTotalMale   = collect($occupationData)->sum('male');
    $occupationTotalFemale = collect($occupationData)->sum('female');
    $occupationTotalAll    = $occupationTotalMale + $occupationTotalFemale;


    $civilStatuses = ['Single', 'Married', 'Common-law/Live-in', 'Divorced/Separated/Annulled', 'Widowed'];
    $civilStatusData = [];

    foreach ($civilStatuses as $status) {
        $maleCount = $rawData->where('civil_status', ucfirst($status))->where('sex', 'male')->count();
        $femaleCount = $rawData->where('civil_status', ucfirst($status))->where('sex', 'female')->count();
        $civilStatusData[$status] = [
            'male' => $maleCount,
            'female' => $femaleCount,
            'total' => $maleCount + $femaleCount,
        ];
    }

    $civilStatusTotalMale   = collect($civilStatusData)->sum('male');
    $civilStatusTotalFemale = collect($civilStatusData)->sum('female');
    $civilStatusTotalAll    = $civilStatusTotalMale + $civilStatusTotalFemale;
@endphp

<div class="text-xs">
    <table class="w-full border border-gray-400 text-center">
        <thead class="bg-gray-300 font-bold">
            <tr class="bg-gray-200">
                <th class="border border-gray-400 w-1/2 text-left px-2">HIGHEST LEVEL OF EDUCATIONAL ATTAINMENT</th>
                <th class="border border-gray-400 w-1/6">MALE</th>
                <th class="border border-gray-400 w-1/6">FEMALE</th>
                <th class="border border-gray-400 w-1/6">TOTAL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($educationLevels as $index => $level)
            <tr>
                <td class="border border-gray-400 text-left px-2">{{ $index + 1 }} {{ $level }}</td>
                <td class="border border-gray-400">{{ $educationData[$level]['male'] }}</td>
                <td class="border border-gray-400">{{ $educationData[$level]['female'] }}</td>
                <td class="border border-gray-400">{{ $educationData[$level]['total'] }}</td>
            </tr>
            @endforeach
            <tr class="bg-gray-200 font-bold">
                <td class="border border-gray-400 text-left px-2">TOTAL</td>
                <td class="border border-gray-400">{{ $educationTotalMale }}</td>
                <td class="border border-gray-400">{{ $educationTotalFemale }}</td>
                <td class="border border-gray-400">{{ $educationTotalAll }}</td>
            </tr>
        </tbody>
    </table>

    {{-- OCCUPATION --}}
    <table class="w-full border border-gray-400 text-center mt-3">
        <thead class="bg-gray-300 font-bold">
            <tr class="bg-gray-200">
                <th class="border border-gray-400 text-left px-2">OCCUPATION</th>
                <th class="border border-gray-400">MALE</th>
                <th class="border border-gray-400">FEMALE</th>
                <th class="border border-gray-400">TOTAL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($occupations as $index => $occupation)
            <tr>
                <td class="border border-gray-400 text-left px-2">{{ $index + 1 }} {{ $occupation }}</td>
                <td class="border border-gray-400">{{ $occupationData[$occupation]['male'] }}</td>
                <td class="border border-gray-400">{{ $occupationData[$occupation]['female'] }}</td>
                <td class="border border-gray-400">{{ $occupationData[$occupation]['total'] }}</td>
            </tr>
            @endforeach
            <tr class="bg-gray-200 font-bold">
                <td class="border border-gray-400 text-left px-2">TOTAL</td>
                <td class="border border-gray-400">{{ $occupationTotalMale }}</td>
                <td class="border border-gray-400">{{ $occupationTotalFemale }}</td>
                <td class="border border-gray-400">{{ $occupationTotalAll }}</td>
            </tr>
        </tbody>
    </table>

    {{-- CIVIL STATUS --}}
    <table class="w-full border border-gray-400 text-center mt-3">
        <thead class="bg-gray-300 font-bold">
            <tr class="bg-gray-200">
                <th class="border border-gray-400 text-left px-2">CIVIL STATUS</th>
                <th class="border border-gray-400">MALE</th>
                <th class="border border-gray-400">FEMALE</th>
                <th class="border border-gray-400">TOTAL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($civilStatuses as $index => $status)
            <tr>
                <td class="border border-gray-400 text-left px-2">{{ $index + 1 }} {{ $status }}</td>
                <td class="border border-gray-400">{{ $civilStatusData[$status]['male'] }}</td>
                <td class="border border-gray-400">{{ $civilStatusData[$status]['female'] }}</td>
                <td class="border border-gray-400">{{ $civilStatusData[$status]['total'] }}</td>
            </tr>
            @endforeach
            <tr class="bg-gray-200 font-bold">
                <td class="border border-gray-400 text-left px-2">TOTAL</td>
                <td class="border border-gray-400">{{ $civilStatusTotalMale }}</td>
                <td class="border border-gray-400">{{ $civilStatusTotalFemale }}</td>
                <td class="border border-gray-400">{{ $civilStatusTotalAll }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
