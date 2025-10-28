@extends('reports.app')
@section('title', 'REPORTING FORM 1E: Cancer Screening and Vaccination History')
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

    // Initialize cancer screening counts
    $cancer_screening_counts = [
        'Clinical Breast Examination' => ['male' => 0, 'female' => 0],
        'Breast Ultrasound' => ['male' => 0, 'female' => 0],
        'Mammography' => ['male' => 0, 'female' => 0],
        'Visual Inspection with Acetic Acid (VIA)' => ['male' => 0, 'female' => 0],
        'Cytology/Pap Smear' => ['male' => 0, 'female' => 0],
        'HPV Testing' => ['male' => 0, 'female' => 0],
        'Fecal Occult Blood Test (FOBT)' => ['male' => 0, 'female' => 0],
        'Stool Fecal Immunochemical Test (FIT)' => ['male' => 0, 'female' => 0],
        'Colonoscopy' => ['male' => 0, 'female' => 0],
        'Low-dose chest CT Scan' => ['male' => 0, 'female' => 0],
        'No cancer screening received' => ['male' => 0, 'female' => 0],
        'Unknown' => ['male' => 0, 'female' => 0],
        'Others' => ['male' => 0, 'female' => 0],
    ];

    // Initialize vaccination counts
    $vaccination_counts = [
        'Yes, fully vaccinated' => [
            'hpv' => ['male' => 0, 'female' => 0],
            'hepb' => ['male' => 0, 'female' => 0],
            'others' => ['male' => 0, 'female' => 0],
        ],
        'Yes, partially vaccinated' => [
            'hpv' => ['male' => 0, 'female' => 0],
            'hepb' => ['male' => 0, 'female' => 0],
            'others' => ['male' => 0, 'female' => 0],
        ],
        'No' => [
            'hpv' => ['male' => 0, 'female' => 0],
            'hepb' => ['male' => 0, 'female' => 0],
            'others' => ['male' => 0, 'female' => 0],
        ],
        'Unknown' => [
            'hpv' => ['male' => 0, 'female' => 0],
            'hepb' => ['male' => 0, 'female' => 0],
            'others' => ['male' => 0, 'female' => 0],
        ],
    ];

    foreach ($rawData as $record) {
        if ($record->riskfactors && $record->riskfactors->cancer_screening) {
            $sex = strtolower($record->sex ?? '');
            $screenings = is_array($record->riskfactors->cancer_screening) 
                ? $record->riskfactors->cancer_screening 
                : [$record->riskfactors->cancer_screening];
            
            foreach ($screenings as $screening) {
                if (isset($cancer_screening_counts[$screening])) {
                    if ($sex === 'male' || $sex === 'female') {
                        $cancer_screening_counts[$screening][$sex]++;
                    }
                }
            }
        }
    }

    // Process vaccination data
    foreach ($rawData as $record) {
        if ($record->riskfactors) {
            $sex = strtolower($record->sex ?? '');
            if ($sex !== 'male' && $sex !== 'female') continue;

            // HPV Vaccine
            if ($record->riskfactors->vaccine_hpv && isset($vaccination_counts[$record->riskfactors->vaccine_hpv])) {
                $vaccination_counts[$record->riskfactors->vaccine_hpv]['hpv'][$sex]++;
            }

            // Hepatitis B Vaccine
            if ($record->riskfactors->vaccine_hepb && isset($vaccination_counts[$record->riskfactors->vaccine_hepb])) {
                $vaccination_counts[$record->riskfactors->vaccine_hepb]['hepb'][$sex]++;
            }

            // Other Vaccines
            if ($record->riskfactors->other_vaccines && isset($vaccination_counts[$record->riskfactors->other_vaccines])) {
                $vaccination_counts[$record->riskfactors->other_vaccines]['others'][$sex]++;
            }
        }
    }

@endphp
    <table class="w-full text-xs border border-gray-400 mt-6">
    <thead>
        <tr class="bg-gray-600 text-white font-bold">
        <th colspan="4" class="border border-gray-400 text-center py-1">CANCER SCREENING RECEIVED</th>
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
            $screening_total_male = 0;
            $screening_total_female = 0;
        @endphp
        @foreach ([
        'Clinical Breast Examination',
        'Breast Ultrasound',
        'Mammography',
        'Visual Inspection with Acetic Acid (VIA)',
        'Cytology/Pap Smear',
        'HPV Testing',
        'Fecal Occult Blood Test (FOBT)',
        'Stool Fecal Immunochemical Test (FIT)',
        'Colonoscopy',
        'Low-dose chest CT Scan',
        'No cancer screening received',
        'Unknown',
        'Others'
        ] as $index => $item)
        @php
            $male = $cancer_screening_counts[$item]['male'];
            $female = $cancer_screening_counts[$item]['female'];
            $total = $male + $female;
            $screening_total_male += $male;
            $screening_total_female += $female;
        @endphp
        <tr>
        <td class="border border-gray-400 px-2">{{ $index + 1 }} {{ $item }}</td>
        <td class="border border-gray-400 text-center">{{ $male }}</td>
        <td class="border border-gray-400 text-center">{{ $female }}</td>
        <td class="border border-gray-400 text-center">{{ $total }}</td>
        </tr>
        @endforeach
        <tr class="bg-gray-200 font-bold">
        <td class="border border-gray-400 px-2">TOTAL</td>
        <td class="border border-gray-400 text-center">{{ $screening_total_male }}</td>
        <td class="border border-gray-400 text-center">{{ $screening_total_female }}</td>
        <td class="border border-gray-400 text-center">{{ $screening_total_male + $screening_total_female }}</td>
        </tr>
    </tbody>
    </table>

    <!-- VACCINATION SECTION -->
    <table class="w-full text-xs border border-gray-400 mt-6">
    <thead>
        <tr class="bg-gray-600 text-white font-bold">
        <th colspan="13" class="border border-gray-400 text-center py-1">VACCINATION STATUS</th>
        </tr>
        <tr class="bg-gray-300 font-bold">
        <th rowspan="2" class="border border-gray-400 text-left px-2 align-middle">CLASSIFICATIONS</th>
        <th colspan="3" class="border border-gray-400 text-center">HUMAN PAPILLOMAVIRUS VACCINE (HPV)</th>
        <th colspan="3" class="border border-gray-400 text-center">HEPATITIS B VACCINE</th>
        <th colspan="3" class="border border-gray-400 text-center">OTHERS</th>
        <th rowspan="2" class="border border-gray-400 text-center align-middle">TOTAL</th>
        </tr>
        <tr class="bg-gray-200 font-bold">
        <th class="border border-gray-400 text-center">MALE</th>
        <th class="border border-gray-400 text-center">FEMALE</th>
        <th class="border border-gray-400 text-center">TOTAL</th>
        <th class="border border-gray-400 text-center">MALE</th>
        <th class="border border-gray-400 text-center">FEMALE</th>
        <th class="border border-gray-400 text-center">TOTAL</th>
        <th class="border border-gray-400 text-center">MALE</th>
        <th class="border border-gray-400 text-center">FEMALE</th>
        <th class="border border-gray-400 text-center">TOTAL</th>
        </tr>
    </thead>
    <tbody>
        @php
            $vax_statuses = [
                'Yes, fully vaccinated',
                'Yes, partially vaccinated',
                'No',
                'Unknown'
            ];
            $vax_total_hpv_male = 0;
            $vax_total_hpv_female = 0;
            $vax_total_hepb_male = 0;
            $vax_total_hepb_female = 0;
            $vax_total_others_male = 0;
            $vax_total_others_female = 0;
        @endphp
        @foreach ($vax_statuses as $index => $status)
        @php
            $hpv_male = $vaccination_counts[$status]['hpv']['male'];
            $hpv_female = $vaccination_counts[$status]['hpv']['female'];
            $hpv_total = $hpv_male + $hpv_female;
            
            $hepb_male = $vaccination_counts[$status]['hepb']['male'];
            $hepb_female = $vaccination_counts[$status]['hepb']['female'];
            $hepb_total = $hepb_male + $hepb_female;
            
            $others_male = $vaccination_counts[$status]['others']['male'];
            $others_female = $vaccination_counts[$status]['others']['female'];
            $others_total = $others_male + $others_female;
            
            $row_total = $hpv_total + $hepb_total + $others_total;
            
            $vax_total_hpv_male += $hpv_male;
            $vax_total_hpv_female += $hpv_female;
            $vax_total_hepb_male += $hepb_male;
            $vax_total_hepb_female += $hepb_female;
            $vax_total_others_male += $others_male;
            $vax_total_others_female += $others_female;
        @endphp
        <tr>
        <td class="border border-gray-400 px-2">{{ $index + 1 }} {{ $status }}</td>
        <td class="border border-gray-400 text-center">{{ $hpv_male }}</td>
        <td class="border border-gray-400 text-center">{{ $hpv_female }}</td>
        <td class="border border-gray-400 text-center">{{ $hpv_total }}</td>
        <td class="border border-gray-400 text-center">{{ $hepb_male }}</td>
        <td class="border border-gray-400 text-center">{{ $hepb_female }}</td>
        <td class="border border-gray-400 text-center">{{ $hepb_total }}</td>
        <td class="border border-gray-400 text-center">{{ $others_male }}</td>
        <td class="border border-gray-400 text-center">{{ $others_female }}</td>
        <td class="border border-gray-400 text-center">{{ $others_total }}</td>
        <td class="border border-gray-400 text-center">{{ $row_total }}</td>
        </tr>
        @endforeach
        @php
            $vax_total_hpv = $vax_total_hpv_male + $vax_total_hpv_female;
            $vax_total_hepb = $vax_total_hepb_male + $vax_total_hepb_female;
            $vax_total_others = $vax_total_others_male + $vax_total_others_female;
            $vax_grand_total = $vax_total_hpv + $vax_total_hepb + $vax_total_others;
        @endphp
        <tr class="bg-gray-200 font-bold">
        <td class="border border-gray-400 px-2">TOTAL</td>
        <td class="border border-gray-400 text-center">{{ $vax_total_hpv_male }}</td>
        <td class="border border-gray-400 text-center">{{ $vax_total_hpv_female }}</td>
        <td class="border border-gray-400 text-center">{{ $vax_total_hpv }}</td>
        <td class="border border-gray-400 text-center">{{ $vax_total_hepb_male }}</td>
        <td class="border border-gray-400 text-center">{{ $vax_total_hepb_female }}</td>
        <td class="border border-gray-400 text-center">{{ $vax_total_hepb }}</td>
        <td class="border border-gray-400 text-center">{{ $vax_total_others_male }}</td>
        <td class="border border-gray-400 text-center">{{ $vax_total_others_female }}</td>
        <td class="border border-gray-400 text-center">{{ $vax_total_others }}</td>
        <td class="border border-gray-400 text-center">{{ $vax_grand_total }}</td>
        </tr>
    </tbody>
    </table>
@endsection