@extends('reports.app')
@section('title', 'REPORTING FORM 3A: Frequency of Supportive-Palliative Care Consult of all Patients')
@section('content')
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
                <td class="border border-gray-400 px-2">{{ $index + 1 }} {{ $item }}</td>
                <td class="border border-gray-400 text-center">0</td>
            </tr>
            @endforeach
            <tr class="bg-gray-200 font-bold">
                <td class="border border-gray-400 px-2">TOTAL</td>
                <td class="border border-gray-400 text-center">0</td>
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
                <td class="border border-gray-400 px-2">{{ $index + 1 }} {{ $item }}</td>
                <td class="border border-gray-400 text-center">0</td>
            </tr>
            @endforeach
            <tr class="bg-gray-200 font-bold">
                <td class="border border-gray-400 px-2">TOTAL</td>
                <td class="border border-gray-400 text-center">0</td>
            </tr>
        </tbody>
    </table>

@endsection