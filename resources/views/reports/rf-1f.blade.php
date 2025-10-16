@extends('reports.app')
@section('title', 'REPORTING FORM 1F: Status at First Encounter at Health Facility')
@section('content')
    <!-- STATUS OF THE CANCER CASE -->
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
            <tr>
                <td class="border border-gray-400 px-2">1 Newly diagnosed</td>
                <td class="border border-gray-400 text-center">0</td>
                <td class="border border-gray-400 text-center">0</td>
                <td class="border border-gray-400 text-center">0</td>
            </tr>
            <tr>
                <td class="border border-gray-400 px-2">2 Old case, not treated</td>
                <td class="border border-gray-400 text-center">0</td>
                <td class="border border-gray-400 text-center">0</td>
                <td class="border border-gray-400 text-center">0</td>
            </tr>
            <tr>
                <td class="border border-gray-400 px-2">3 Old case, completed 1st treatment, now</td>
                <td class="border border-gray-400 text-center">0</td>
                <td class="border border-gray-400 text-center">0</td>
                <td class="border border-gray-400 text-center">0</td>
            </tr>
            <tr>
                <td class="border border-gray-400 px-2">4 Old case, incomplete treatment, now</td>
                <td class="border border-gray-400 text-center">0</td>
                <td class="border border-gray-400 text-center">0</td>
                <td class="border border-gray-400 text-center">0</td>
            </tr>
            <tr>
                <td class="border border-gray-400 px-2">5 Old case, unknown treatment</td>
                <td class="border border-gray-400 text-center">0</td>
                <td class="border border-gray-400 text-center">0</td>
                <td class="border border-gray-400 text-center">0</td>
            </tr>
            <tr class="bg-gray-200 font-bold">
                <td class="border border-gray-400 px-2">TOTAL</td>
                <td class="border border-gray-400 text-center">0</td>
                <td class="border border-gray-400 text-center">0</td>
                <td class="border border-gray-400 text-center">0</td>
            </tr>
        </tbody>
    </table>

@endsection