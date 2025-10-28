@extends('reports.app')
@section('title', 'REPORTING FORM 1F: Status at First Encounter at Health Facility')
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
    // echo json_encode($rawData);
    $cancer_status_counts = [
        'Newly diagnosed' => ['male' => 0, 'female' => 0],
        'Old case, not treated' => ['male' => 0, 'female' => 0],
        'Old case, completed 1st treatment, now' => ['male' => 0, 'female' => 0],
        'Old case, incomplete treatment, now' => ['male' => 0, 'female' => 0],
        'Old case, unknown treatment' => ['male' => 0, 'female' => 0],
    ];

    foreach ($rawData as $record) {
        $sex = strtolower($record->sex ?? '');
        if ($sex !== 'male' && $sex !== 'female') continue;

        if ($record->cancerdiagnoses && $record->cancerdiagnoses->cancer_status) {
            if (isset($cancer_status_counts[$record->cancerdiagnoses->cancer_status])) {
                $cancer_status_counts[$record->cancerdiagnoses->cancer_status][$sex]++;
            }
        }
    }
@endphp
    <table class="w-full text-xs border border-gray-400 mt-6">
        <thead>
            <tr class="bg-gray-600 text-white font-bold">
                <th colspan="4" class="border border-gray-400 text-center py-1">STATUS OF THE CANCER CASE</th>
            </tr>
            <tr class="bg-gray-300 font-bold">
                <th class="border border-gray-400 text-left px-2">CLASSIFICATIONS</th>
                <th class="border border-gray-400 text-center">MALE</th>
                <th class="border border-gray-400 text-center">FEMALE</th>
                <th class="border border-gray-400 text-center">TOTAL</th>
            </tr>
        </thead>
        <tbody>
            @php
                $status_list = [
                    'Newly diagnosed',
                    'Old case, not treated',
                    'Old case, completed 1st treatment, now',
                    'Old case, incomplete treatment, now',
                    'Old case, unknown treatment'
                ];
                $total_male = 0;
                $total_female = 0;
            @endphp
            @foreach ($status_list as $index => $status)
            @php
                $male = $cancer_status_counts[$status]['male'];
                $female = $cancer_status_counts[$status]['female'];
                $total = $male + $female;
                $total_male += $male;
                $total_female += $female;
            @endphp
            <tr>
                <td class="border border-gray-400 px-2">{{ $index + 1 }} {{ $status }}</td>
                <td class="border border-gray-400 text-center">{{ $male }}</td>
                <td class="border border-gray-400 text-center">{{ $female }}</td>
                <td class="border border-gray-400 text-center">{{ $total }}</td>
            </tr>
            @endforeach
            <tr class="bg-gray-200 font-bold">
                <td class="border border-gray-400 px-2">TOTAL</td>
                <td class="border border-gray-400 text-center">{{ $total_male }}</td>
                <td class="border border-gray-400 text-center">{{ $total_female }}</td>
                <td class="border border-gray-400 text-center">{{ $total_male + $total_female }}</td>
            </tr>
        </tbody>
    </table>

@endsection