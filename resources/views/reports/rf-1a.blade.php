@extends('reports.app')
@section('title', 'Reporting Form 1A: New Cancer Cases by Primary Sites, Sex and Initial Clinical Staging')
@section('content')
@php
    $cancerSites = [
        "Adrenal",
        "Anus",
        "Biliary Tract",
        "Blood - Acute Lymphocytic Leukemia",
        "Blood - Acute Myelogenous Leukemia",
        "Blood - Chronic Lymphocytic Leukemia",
        "Blood - Chronic Myelogenous Leukemia",
        "Blood - Myelodysplastic Syndromes",
        "Blood - Plasma Cell Disorders",
        "Bone",
        "Brain - CNS",
        "Breast",
        "Colon",
        "Corpus Uteri",
        "Esophagus",
        "Eyes and Orbit",
        "Gallbladder",
        "Gastroesophageal Junction",
        "Hodgkin Lymphoma",
        "Hypopharynx",
        "Kaposi Sarcoma",
        "Kidney",
        "Larynx",
        "Leukemia",
        "Lip/Oral Cavity",
        "Liver",
        "Lung",
        "Melanoma of Skin",
        "Mesothelioma",
        "Multiple Myeloma",
        "Nasopharynx",
        "Non-Hodgkin Lymphoma",
        "Oral Cavity",
        "Oropharynx",
        "Ovary",
        "Pancreas",
        "Paranasal Sinus",
        "Peritoneal",
        "Prostate",
        "Rectum",
        "Renal Pelvis/Ureters",
        "Salivary Glands",
        "Skin",
        "Small Bowel",
        "Soft Tissue Sarcoma",
        "Spinal Cord",
        "Stomach",
        "Testis",
        "Thymus",
        "Thyroid",
        "Unknown Primary (Occult Primary)",
        "Urinary Bladder",
        "Uterine Cervix",
        "Vagina",
        "Vulva",
        "Others"
    ];

use App\Models\Demographicprofile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
@endphp
@if(Request::Segment(2) === 'generate-report')
    @php

        $rawData = Demographicprofile::join('cancerdiagnoses', 'demographicprofiles.id', '=', 'cancerdiagnoses.code')
            ->select(
                DB::raw('REPLACE(REPLACE(REPLACE(cancerdiagnoses.cancer_sites, "[", ""), "]", ""), "\"", "") as cancer_site'),
                'cancerdiagnoses.clinical_stage',
                'demographicprofiles.sex',
                DB::raw('COUNT(*) as total_cases')
            )
            ->whereBetween(DB::raw('YEAR(demographicprofiles.created_at)'), [
                Request::query('year_from'),
                Request::query('year_to')
            ])->whereBetween(DB::raw('MONTH(demographicprofiles.created_at)'), [
                Request::query('month_from'),
                Request::query('month_to')
            ])
            ->groupBy('cancerdiagnoses.cancer_sites', 'cancerdiagnoses.clinical_stage', 'demographicprofiles.sex')
            ->get();

        $data = [];

        foreach ($rawData as $item) {
            $site = $item->cancer_site ?: 'Unknown Site';
            $stage = $item->clinical_stage ?: 'Unstaged';
            $sex = strtoupper($item->sex);

            if (!isset($data[$site])) {
                $data[$site] = [];
            }

            if (!isset($data[$site][$stage])) {
                $data[$site][$stage] = ['MALE' => 0, 'FEMALE' => 0];
            }

            $data[$site][$stage][$sex] = (int) $item->total_cases;
        }
    @endphp
@endif
    <div class="overflow-x-auto">
        <table class="w-full border border-black text-center" style="table-layout: fixed;">
            <thead>
                <tr class="bg-[#7f7f7f] text-white font-bold">
                    <th rowspan="2" class="border px-1 py-0.5 bg-[#7f7f7f]" style="width: 200px;">Primary Cancer Sites</th>
                    <th colspan="3" class="border px-1 py-0.5">Stage 0</th>
                    <th colspan="3" class="border px-1 py-0.5">Stage I</th>
                    <th colspan="3" class="border px-1 py-0.5">Stage II</th>
                    <th colspan="3" class="border px-1 py-0.5">Stage III</th>
                    <th colspan="3" class="border px-1 py-0.5">Stage IV</th>
                    <th colspan="3" class="border px-1 py-0.5">Unknown</th>
                    <th rowspan="3" class="border px-1 py-0.5" style="width: 40px;">Total</th>
                </tr>
                <tr class="bg-[#d6d5d2] text-black font-bold">
                    <th class="border px-1 py-0.5" style="width: 30px;">Male</th>
                    <th class="border px-1 py-0.5" style="width: 30px;">Female</th>
                    <th class="border px-1 py-0.5" style="width: 30px;">Total</th>
                    <th class="border px-1 py-0.5" style="width: 30px;">Male</th>
                    <th class="border px-1 py-0.5" style="width: 30px;">Female</th>
                    <th class="border px-1 py-0.5" style="width: 30px;">Total</th>
                    <th class="border px-1 py-0.5" style="width: 30px;">Male</th>
                    <th class="border px-1 py-0.5" style="width: 30px;">Female</th>
                    <th class="border px-1 py-0.5" style="width: 30px;">Total</th>
                    <th class="border px-1 py-0.5" style="width: 30px;">Male</th>
                    <th class="border px-1 py-0.5" style="width: 30px;">Female</th>
                    <th class="border px-1 py-0.5" style="width: 30px;">Total</th>
                    <th class="border px-1 py-0.5" style="width: 30px;">Male</th>
                    <th class="border px-1 py-0.5" style="width: 30px;">Female</th>
                    <th class="border px-1 py-0.5" style="width: 30px;">Total</th>
                    <th class="border px-1 py-0.5" style="width: 30px;">Male</th>
                    <th class="border px-1 py-0.5" style="width: 30px;">Female</th>
                    <th class="border px-1 py-0.5" style="width: 30px;">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cancerSites as $site)
                    @php
                        $siteData = $data[$site] ?? [];
                        $stages = ['Stage 0', 'Stage I', 'Stage II', 'Stage III', 'Stage IV', 'Unknown'];
                        $totalMale = 0;
                        $totalFemale = 0;
                    @endphp

                    <tr style="height: 18px;">
                        <td class="border px-1 text-left" style="width: 200px;">{{ $loop->iteration }}. {{ $site }}</td>

                        @foreach ($stages as $stage)
                            @php
                                $male = $siteData[$stage]['MALE'] ?? 0;
                                $female = $siteData[$stage]['FEMALE'] ?? 0;
                                $stageTotal = $male + $female;

                                $totalMale += $male;
                                $totalFemale += $female;
                            @endphp
                            <td class="border text-center" style="width: 30px;">{{ $male }}</td>
                            <td class="border text-center" style="width: 30px;">{{ $female }}</td>
                            <td class="border text-center" style="width: 30px;">{{ $stageTotal }}</td>
                        @endforeach
                        <td class="border text-center font-bold" style="width: 40px;">{{ $totalMale + $totalFemale }}</td>
                    </tr>
                @endforeach
                @php
                    $grandTotals = [];
                    $stages = ['Stage 0', 'Stage I', 'Stage II', 'Stage III', 'Stage IV', 'Unknown'];

                    foreach ($stages as $stage) {
                        $grandTotals[$stage] = ['MALE' => 0, 'FEMALE' => 0];
                    }
                    foreach ($data as $siteName => $stagesData) {
                        foreach ($stagesData as $stage => $counts) {
                            if (isset($grandTotals[$stage])) {
                                $grandTotals[$stage]['MALE'] += $counts['MALE'] ?? 0;
                                $grandTotals[$stage]['FEMALE'] += $counts['FEMALE'] ?? 0;
                            }
                        }
                    }
                @endphp

                <tr class="bg-gray-400 text-black font-bold text-center">
                    <td class="border border-black px-2 py-1 text-white bg-[#7f7f7f]">TOTAL</td>

                    @php
                        $grandTotalAll = 0;
                    @endphp

                    @foreach ($stages as $stage)
                        @php
                            $male = $grandTotals[$stage]['MALE'] ?? 0;
                            $female = $grandTotals[$stage]['FEMALE'] ?? 0;
                            $total = $male + $female;
                            $grandTotalAll += $total;
                        @endphp
                        <td class="border border-black px-2 py-1">{{ $male }}</td>
                        <td class="border border-black px-2 py-1">{{ $female }}</td>
                        <td class="border border-black px-2 py-1">{{ $total }}</td>
                    @endforeach

                    <td class="border border-black px-2 py-1 font-bold bg-[#d6d5d2]">{{ $grandTotalAll }}</td>
                </tr>
                </tbody>

        </table>
    </div>
@endsection