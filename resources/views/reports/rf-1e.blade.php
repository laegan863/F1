@extends('reports.app')
@section('title', 'REPORTING FORM 1E: Cancer Screening and Vaccination History')
@section('content')
    <!-- CANCER SCREENING RECEIVED -->
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
        <tr>
        <td class="border border-gray-400 px-2">{{ $index + 1 }} {{ $item }}</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        </tr>
        @endforeach
        <tr class="bg-gray-200 font-bold">
        <td class="border border-gray-400 px-2">TOTAL</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
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
        <tr>
        <td class="border border-gray-400 px-2">1 Yes, fully vaccinated</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        </tr>
        <tr>
        <td class="border border-gray-400 px-2">2 Yes, partially vaccinated</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        </tr>
        <tr>
        <td class="border border-gray-400 px-2">3 No</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        </tr>
        <tr>
        <td class="border border-gray-400 px-2">4 Unknown</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        <td class="border border-gray-400 text-center">0</td>
        </tr>
        <tr class="bg-gray-200 font-bold">
        <td class="border border-gray-400 px-2">TOTAL</td>
        <td colspan="10" class="border border-gray-400 text-center">0</td>
        </tr>
    </tbody>
    </table>
@endsection