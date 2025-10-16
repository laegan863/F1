@extends('reports.app')
@section('title', 'REPORTING FORM 2B: Cancer Diagnosis Outcome')
@section('content')
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
                'Death (Treatment related)',
                'Death (Other Cause/Non-Cancer)',
                'Ongoing Evaluation',
                'Ongoing Treatment',
                'Completed Treatment',
                'Undetermined'
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

@endsection