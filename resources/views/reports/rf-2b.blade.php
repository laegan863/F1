@extends('reports.app')
@section('title', 'REPORTING FORM 2B: Cancer Diagnosis Outcome')
@section('content')
@php
    use App\Models\F2followup;
    use App\Models\Demographicprofile;
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

    // echo json_encode($rawData);

    // Initialize counters for each diagnosis outcome
    $outcomes = [
        'Stable Disease' => ['male' => 0, 'female' => 0],
        'Complete Remission' => ['male' => 0, 'female' => 0],
        'Partial Response' => ['male' => 0, 'female' => 0],
        'Disease Progression' => ['male' => 0, 'female' => 0],
        'Recurrent Disease' => ['male' => 0, 'female' => 0],
        'Death (Cancer related)' => ['male' => 0, 'female' => 0],
        'Death (treatment related)' => ['male' => 0, 'female' => 0],
        'Death (Other Cause/Non-Cancer)' => ['male' => 0, 'female' => 0],
        'Ongoing Evaluation' => ['male' => 0, 'female' => 0],
        'Ongoing Treatment' => ['male' => 0, 'female' => 0],
        'Completed Treatment' => ['male' => 0, 'female' => 0],
        'Undetermined' => ['male' => 0, 'female' => 0],
    ];

    // Process each followup record
    foreach ($rawData as $followup) {
        // Get patient gender from Demographicprofile using hospitalID
        $demographic = Demographicprofile::where('hospitalID', $followup->hospitalID)->first();
        $gender = $demographic ? strtolower($demographic->sex) : null;

        // Check if there's a diagnosis outcome
        if ($followup->f2cancerdiagnoseoutcomes && $followup->f2cancerdiagnoseoutcomes->diagnosis_outcome) {
            $diagnosisOutcomes = is_array($followup->f2cancerdiagnoseoutcomes->diagnosis_outcome) 
                ? $followup->f2cancerdiagnoseoutcomes->diagnosis_outcome 
                : [$followup->f2cancerdiagnoseoutcomes->diagnosis_outcome];

            foreach ($diagnosisOutcomes as $outcome) {
                if (isset($outcomes[$outcome]) && $gender) {
                    $outcomes[$outcome][$gender]++;
                }
            }
        }
    }

    // Calculate totals
    $totalMale = 0;
    $totalFemale = 0;
    foreach ($outcomes as $outcome) {
        $totalMale += $outcome['male'];
        $totalFemale += $outcome['female'];
    }
    $grandTotal = $totalMale + $totalFemale;
@endphp
    <!-- CANCER DIAGNOSIS OUTCOME -->
    <table class="w-full text-xs border border-gray-400 mt-6">
        <thead>
            <tr class="bg-gray-600 text-white font-bold">
                <th colspan="4" class="border border-gray-400 text-center py-1">CANCER DIAGNOSIS OUTCOME</th>
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
                'Stable Disease',
                'Complete Remission',
                'Partial Response',
                'Disease Progression',
                'Recurrent Disease',
                'Death (Cancer related)',
                'Death (treatment related)',
                'Death (Other Cause/Non-Cancer)',
                'Ongoing Evaluation',
                'Ongoing Treatment',
                'Completed Treatment',
                'Undetermined'
            ] as $index => $item)
            <tr>
                <td class="border border-gray-400 px-2">{{ $index + 1 }} {{ $item }}</td>
                <td class="border border-gray-400 text-center">{{ $outcomes[$item]['male'] }}</td>
                <td class="border border-gray-400 text-center">{{ $outcomes[$item]['female'] }}</td>
                <td class="border border-gray-400 text-center">{{ $outcomes[$item]['male'] + $outcomes[$item]['female'] }}</td>
            </tr>
            @endforeach
            <tr class="bg-gray-200 font-bold">
                <td class="border border-gray-400 px-2">TOTAL</td>
                <td class="border border-gray-400 text-center">{{ $totalMale }}</td>
                <td class="border border-gray-400 text-center">{{ $totalFemale }}</td>
                <td class="border border-gray-400 text-center">{{ $grandTotal }}</td>
            </tr>
        </tbody>
    </table>

@endsection