@extends('reports.app')
@section('title', 'REPORTING FORM 0A: Frequency of Financial Support Mechanism Availed by Cancer Patients')
@section('content')
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
                <td class="border border-gray-400 px-2">{{ $index + 1 }} {{ $item }}</td>
                <td class="border border-gray-400 text-center">0</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection