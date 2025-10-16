@extends('reports.app')
@section('title', 'REPORTING FORM 2A: First Course of Treatment Given to Cancer Patients at the Health Facility of Consult')
@section('content')
    <!-- CANCER TREATMENT -->
    <table class="w-full text-xs border border-gray-400 mt-6">
        <thead>
            <tr class="bg-gray-600 text-white font-bold">
                <th colspan="3" class="border border-gray-400 text-center py-1">CANCER TREATMENT</th>
            </tr>
            <tr class="bg-gray-300 font-bold">
                <th class="border border-gray-400 text-left px-2">CLASSIFICATIONS</th>
                <th class="border border-gray-400 text-center">NO. OF PATIENTS</th>
                <th class="border border-gray-400 text-center">TOTAL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ([
                'Surgery',
                'Anti-Cancer Drug Therapy: Cytotoxic',
                'Anti-Cancer Drug Therapy: Hormonal',
                'Anti-Cancer Drug Therapy: Immunotherapy',
                'Anti-Cancer Drug Therapy: Targeted therapy',
                'Radiotherapy: 2D Conventional',
                'Radiotherapy: 3DCRT',
                'Radiotherapy: Brachytherapy',
                'Radiotherapy: IMRT/VMAT/Helical',
                'Radiotherapy: IORT',
                'Radiotherapy: Heavy Particles',
                'Radiotherapy: Proton Therapy',
                'Radiotherapy: Stereotactic Radiosurgery / Stereotactic Radiotherapy',
                'Theranostics',
                'Other Cancer Directed Therapies: Blood Transfusion',
                'Other Cancer Directed Therapies: Cryoablation',
                'Other Cancer Directed Therapies: Embolization',
                'Other Cancer Directed Therapies: Radiofrequency ablation',
                'Other Cancer Directed Therapies: Transarterial chemoembolization',
                'Other Cancer Directed Therapies: Transplant',
                'Non-receipt of Treatment'
            ] as $index => $item)
            <tr>
                <td class="border border-gray-400 px-2">{{ $index + 1 }} {{ $item }}</td>
                <td class="border border-gray-400 text-center">0</td>
                <td class="border border-gray-400 text-center">0</td>
            </tr>
            @endforeach
            <tr class="bg-gray-200 font-bold">
                <td class="border border-gray-400 px-2">TOTAL</td>
                <td class="border border-gray-400 text-center">0</td>
                <td class="border border-gray-400 text-center">0</td>
            </tr>
        </tbody>
    </table>
@endsection