<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCC Form 1A</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @media print {
            @page {
                size: A4 portrait;
                margin: 10mm;
            }
            /* Hide buttons on print */
            .no-print {
                display: none !important;
            }
            body {
                font-size: 10px;
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
            table, th, td {
                border: 1px solid #000 !important;
                border-collapse: collapse !important;
            }
            th {
                background-color: #7f7f7f !important;
                color: white !important;
            }
        }
    </style>
</head>
<body class="p-6 bg-white text-xs max-w-[1100px] mx-auto">

    <!-- HEADER -->
    <div class="text-center mb-4">
        <p class="font-bold uppercase">Republic of the Philippines</p>
        <p class="font-bold uppercase">Department of Health</p>
        <p class="font-bold uppercase mt-1">Philippine Cancer Center</p>
        <p class="font-bold uppercase mt-1">PCC Hospital-Based Cancer Registry Reporting Forms</p>
        <p class="italic text-[10px]">(Cancer Treatment Facility - Based)</p>
    </div>
    <div class="w-full bg-black text-white text-left font-bold py-2 text-sm uppercase ps-2">
        Reporting Form 1A: New Cancer Cases by Primary Sites, Sex and Initial Clinical Staging
    </div>
    <table class="w-full border border-black text-xs">
        <tr>
        <td class="border border-black px-2 py-1 w-1/4 font-medium">Reporting Period</td>
        <td class="border border-black px-2 py-1 text-gray-400 text-center">YYYY-MM</td>
        <td class="border border-black px-2 py-1 text-center font-medium w-10">to</td>
        <td class="border border-black px-2 py-1 text-gray-400 text-center">YYYY-MM</td>
        <td class="border border-black px-2 py-1 w-1/4 font-medium">Date Report Submitted</td>
        <td class="border border-black px-2 py-1 text-gray-400 text-center">YYYY-MM-DD</td>
        </tr>

        <tr>
        <td class="border border-black px-2 py-1 font-medium">Health Facility Name</td>
        <td colspan="5" class="border border-black px-2 py-1"></td>
        </tr>

        <tr>
        <td class="border border-black px-2 py-1 font-medium">Health Facility Address</td>
        <td class="border border-black px-2 py-1 text-gray-400 text-center">Region</td>
        <td class="border border-black px-2 py-1 text-gray-400 text-center">Province</td>
        <td class="border border-black px-2 py-1 text-gray-400 text-center">City/Municipality</td>
        <td colspan="2" class="border border-black px-2 py-1 text-gray-400 text-center">Barangay</td>
        </tr>

        <tr>
        <td class="border border-black px-2 py-1 font-medium">Health Facility Contact No.</td>
        <td colspan="3" class="border border-black px-2 py-1"></td>
        <td class="border border-black px-2 py-1 font-medium">PhilHealth Accreditation No. (PAN)</td>
        <td class="border border-black px-2 py-1"></td>
        </tr>
    </table>

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

    @endphp
    <div class="overflow-x-auto">
        <table class="min-w-full border border-black text-center">
            <thead>
                <tr class="bg-[#7f7f7f] text-white font-bold">
                    <th rowspan="2" class="border px-2 py-1 w-56 bg-[#7f7f7f]">Primary Cancer Sites</th>
                    <th colspan="3" class="border px-2 py-1">Stage 0</th>
                    <th colspan="3" class="border px-2 py-1">Stage I</th>
                    <th colspan="3" class="border px-2 py-1">Stage II</th>
                    <th colspan="3" class="border px-2 py-1">Stage III</th>
                    <th colspan="3" class="border px-2 py-1">Stage IV</th>
                    <th colspan="3" class="border px-2 py-1">Unknown</th>
                    <th rowspan="3" class="border px-2 py-1">Total</th>
                </tr>
                <tr class="bg-[#d6d5d2] text-black font-bold">
                    <th class="border px-2 py-1">Male</th>
                    <th class="border px-2 py-1">Female</th>
                    <th class="border px-2 py-1">Total</th>
                    <th class="border px-2 py-1">Male</th>
                    <th class="border px-2 py-1">Female</th>
                    <th class="border px-2 py-1">Total</th>
                    <th class="border px-2 py-1">Male</th>
                    <th class="border px-2 py-1">Female</th>
                    <th class="border px-2 py-1">Total</th>
                    <th class="border px-2 py-1">Male</th>
                    <th class="border px-2 py-1">Female</th>
                    <th class="border px-2 py-1">Total</th>
                    <th class="border px-2 py-1">Male</th>
                    <th class="border px-2 py-1">Female</th>
                    <th class="border px-2 py-1">Total</th>
                    <th class="border px-2 py-1">Male</th>
                    <th class="border px-2 py-1">Female</th>
                    <th class="border px-2 py-1">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cancerSites as $site)
                <tr>
                    <td class="border px-2 text-left">{{ $loop->iteration }}. {{ $site }}</td>
                    <td class="border">0</td>
                    <td class="border">0</td>
                    <td class="border">0</td>
                    <td class="border">0</td>
                    <td class="border">0</td>
                    <td class="border">0</td>
                    <td class="border">0</td>
                    <td class="border">0</td>
                    <td class="border">0</td>
                    <td class="border">0</td>
                    <td class="border">0</td>
                    <td class="border">0</td>
                    <td class="border">0</td>
                    <td class="border">0</td>
                    <td class="border">0</td>
                    <td class="border">0</td>
                    <td class="border">0</td>
                    <td class="border">0</td>
                    <td class="border">0</td>
                </tr>
                @endforeach
                <tr class="bg-gray-400 text-black font-bold text-center">
                    <td class="border border-black px-2 py-1 text-center text-white">TOTAL</td>
                    <!-- Repeat these for the totals columns -->
                    <td class="border border-black px-2 py-1">0</td>
                    <td class="border border-black px-2 py-1">0</td>
                    <td class="border border-black px-2 py-1">0</td>
                    <td class="border border-black px-2 py-1">0</td>
                    <td class="border border-black px-2 py-1">0</td>
                    <td class="border border-black px-2 py-1">0</td>
                    <td class="border border-black px-2 py-1">0</td>
                    <td class="border border-black px-2 py-1">0</td>
                    <td class="border border-black px-2 py-1">0</td>
                    <td class="border border-black px-2 py-1">0</td>
                    <td class="border border-black px-2 py-1">0</td>
                    <td class="border border-black px-2 py-1">0</td>
                    <td class="border border-black px-2 py-1">0</td>
                    <td class="border border-black px-2 py-1">0</td>
                    <td class="border border-black px-2 py-1">0</td>
                    <td class="border border-black px-2 py-1">0</td>
                    <td class="border border-black px-2 py-1">0</td>
                    <td class="border border-black px-2 py-1">0</td>
                    <td class="border border-black px-2 py-1">0</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="w-full mt-6 grid grid-cols-2 gap-4">

        <!-- Prepared By -->
        <div class="text-left">
            <p class="font-medium text-sm">Prepared by:</p>
            <div class="pt-10 border-b border-black w-2/3 mx-0 text-center"></div>
            <p class="text-gray-500 italic mt-1 text-xs w-2/3">Position</p>
        </div>

        <!-- Noted By -->
        <div class="text-left">
            <p class="font-medium text-sm">Noted by:</p>
            <div class="pt-10 border-b border-black w-2/3 mx-0 text-center"></div>
            <p class="text-gray-500 italic mt-1 text-xs w-2/3">Cancer Coordinator / Cancer Center Head</p>
        </div>

    </div>
</body>
</html>
