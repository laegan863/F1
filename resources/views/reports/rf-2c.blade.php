@extends('reports.app')
@section('title', 'REPORTING FORM 2C: Patient Treatment Status')
@section('content')
@php
    use App\Models\F2followup;
    use App\Models\Demographicprofile;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Request;

    if (Request::segment(2) === 'generate-report') {
        $rawData = F2followup::with([
            'f2othercancertherapies'
        ])->whereBetween(DB::raw('YEAR(created_at)'), [Request::query('year_from'), Request::query('year_to')])
            ->whereBetween(DB::raw('MONTH(created_at)'), [Request::query('month_from'), Request::query('month_to')])
            ->get();
    } else {
        $rawData = $data;
    }

    // echo json_encode($rawData);

    $treatmentStatusData = [
        'Ongoing' => ['male' => 0, 'female' => 0, 'total' => 0],
        'Completed' => ['male' => 0, 'female' => 0, 'total' => 0],
        'Stopped/Interrupted' => ['male' => 0, 'female' => 0, 'total' => 0],
        'Undetermined' => ['male' => 0, 'female' => 0, 'total' => 0],
        'Not Initiated' => ['male' => 0, 'female' => 0, 'total' => 0],
    ];

    $totalMale = 0;
    $totalFemale = 0;
    $totalOverall = 0;

    foreach ($rawData as $record) {
        if ($record->f2othercancertherapies && $record->f2othercancertherapies->treatment_status) {
            $treatmentStatus = $record->f2othercancertherapies->treatment_status;
            
            $demographic = Demographicprofile::where('hospitalID', $record->hospitalID)->first();
            $sex = $demographic ? strtolower($demographic->sex) : null;
            
            if (array_key_exists($treatmentStatus, $treatmentStatusData)) {
                if ($sex === 'male') {
                    $treatmentStatusData[$treatmentStatus]['male']++;
                    $treatmentStatusData[$treatmentStatus]['total']++;
                    $totalMale++;
                } elseif ($sex === 'female') {
                    $treatmentStatusData[$treatmentStatus]['female']++;
                    $treatmentStatusData[$treatmentStatus]['total']++;
                    $totalFemale++;
                }
                $totalOverall++;
            }
        }
    }
    
@endphp
    <table class="w-full text-xs border border-gray-400 mt-6">
        <thead>
            <tr class="bg-gray-600 text-white font-bold">
                <th colspan="4" class="border border-gray-400 text-center py-1">TREATMENT STATUS</th>
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
                'Ongoing',
                'Completed',
                'Stopped/Interrupted',
                'Undetermined',
                'Not Initiated'
            ] as $index => $item)
            <tr>
                <td class="border border-gray-400 px-2">{{ $index + 1 }}. {{ $item }}</td>
                <td class="border border-gray-400 text-center">{{ $treatmentStatusData[$item]['male'] }}</td>
                <td class="border border-gray-400 text-center">{{ $treatmentStatusData[$item]['female'] }}</td>
                <td class="border border-gray-400 text-center">{{ $treatmentStatusData[$item]['total'] }}</td>
            </tr>
            @endforeach
            <tr class="bg-gray-200 font-bold">
                <td class="border border-gray-400 px-2">TOTAL</td>
                <td class="border border-gray-400 text-center">{{ $totalMale }}</td>
                <td class="border border-gray-400 text-center">{{ $totalFemale }}</td>
                <td class="border border-gray-400 text-center">{{ $totalOverall }}</td>
            </tr>
        </tbody>
    </table>
@endsection