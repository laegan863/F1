@extends('reports.app')
@section('title', 'REPORTING FORM 3A: Frequency of Supportive-Palliative Care Consult of all Patients')
@section('content')
@php
    use App\Models\F4palliativeform;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Request;

    if (Request::segment(2) === 'generate-report') {
        $rawData = F4palliativeform::whereBetween(DB::raw('YEAR(created_at)'), [Request::query('year_from'), Request::query('year_to')])
            ->whereBetween(DB::raw('MONTH(created_at)'), [Request::query('month_from'), Request::query('month_to')])
            ->get();
    } else {
        $rawData = $data;
    }

    // echo json_encode($rawData);

    // Initialize frequency counters for reasons for palliative care consult
    $reasonFrequency = [
        'Palliative Care with Curative Intent' => 0,
        'Palliative Care with Active Oncologic Management' => 0,
        'Supportive Care' => 0,
        'Hospice Care' => 0,
        'End of Life Care' => 0,
        'Survivorship Care' => 0,
        'Others' => 0,
    ];

    // Initialize frequency counters for palliative care settings
    $settingFrequency = [
        'Home' => 0,
        'Hospital' => 0,
        'Community-based' => 0,
    ];

    $totalReasons = 0;
    $totalSettings = 0;

    // Process the data
    foreach ($rawData as $record) {
        // Count reasons for palliative care consult
        if (isset($record->reason) && is_array($record->reason)) {
            foreach ($record->reason as $reason) {
                if (array_key_exists($reason, $reasonFrequency)) {
                    $reasonFrequency[$reason]++;
                    $totalReasons++;
                } else {
                    // If it's not in the predefined list, count it as "Others"
                    $reasonFrequency['Others']++;
                    $totalReasons++;
                }
            }
        }

        // Count palliative care settings
        if (isset($record->setting) && is_array($record->setting)) {
            foreach ($record->setting as $setting) {
                if (array_key_exists($setting, $settingFrequency)) {
                    $settingFrequency[$setting]++;
                    $totalSettings++;
                }
            }
        }
    }

@endphp
    <!-- REASON FOR SUPPORTIVE-PALLIATIVE CARE CONSULT -->
    <table class="w-full text-xs border border-gray-400 mt-6">
        <thead>
            <tr class="bg-gray-600 text-white font-bold">
                <th colspan="2" class="border border-gray-400 text-center py-1">REASON FOR SUPPORTIVE-PALLIATIVE CARE CONSULT</th>
            </tr>
            <tr class="bg-gray-300 font-bold">
                <th class="border border-gray-400 text-left px-2">CLASSIFICATIONS</th>
                <th class="border border-gray-400 text-center">FREQUENCY OF CONSULTS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ([
                'Palliative Care with Curative Intent',
                'Palliative Care with Active Oncologic Management',
                'Supportive Care',
                'Hospice Care',
                'End of Life Care',
                'Survivorship Care',
                'Others'
            ] as $index => $item)
            <tr>
                <td class="border border-gray-400 px-2">{{ $index + 1 }}. {{ $item }}</td>
                <td class="border border-gray-400 text-center">{{ $reasonFrequency[$item] }}</td>
            </tr>
            @endforeach
            <tr class="bg-gray-200 font-bold">
                <td class="border border-gray-400 px-2">TOTAL</td>
                <td class="border border-gray-400 text-center">{{ $totalReasons }}</td>
            </tr>
        </tbody>
    </table>

    <!-- PALLIATIVE CARE SETTING -->
    <table class="w-full text-xs border border-gray-400 mt-6">
        <thead>
            <tr class="bg-gray-600 text-white font-bold">
                <th colspan="2" class="border border-gray-400 text-center py-1">PALLIATIVE CARE SETTING</th>
            </tr>
            <tr class="bg-gray-300 font-bold">
                <th class="border border-gray-400 text-left px-2">CLASSIFICATIONS</th>
                <th class="border border-gray-400 text-center">TOTAL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ([
                'Home',
                'Hospital',
                'Community-based'
            ] as $index => $item)
            <tr>
                <td class="border border-gray-400 px-2">{{ $index + 1 }}. {{ $item }}</td>
                <td class="border border-gray-400 text-center">{{ $settingFrequency[$item] }}</td>
            </tr>
            @endforeach
            <tr class="bg-gray-200 font-bold">
                <td class="border border-gray-400 px-2">TOTAL</td>
                <td class="border border-gray-400 text-center">{{ $totalSettings }}</td>
            </tr>
        </tbody>
    </table>

@endsection