<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCC Form 1A</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <style>
        @media print {
            @page {
                size: A4 landscape;
                margin: 5mm;
            }
            .no-print {
                display: none !important;
            }
            body {
                font-size: 8px;
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
<body class="bg-white text-xs w-full p-3">
    @if(Request::Segment(2) == 'generate-report')
        <a href="{{ route('generate-pdf' , [ 'code' => Request::query('code'), 'year_from' => Request::query('year_from'), 'month_from' => Request::query('month_from'), 'year_to' => Request::query('year_to'), 'month_to' => Request::query('month_to') ]) }}" class="bg-green-600 p-5 text-white text-lg font-bold rounded-lg float-end"> <i class="fa fa-file-pdf"></i>  Convert to pdf</a>
    @endif
    <div class="text-center mb-4">
        <p class="font-bold uppercase">Republic of the Philippines</p>
        <p class="font-bold uppercase">Department of Health</p>
        <p class="font-bold uppercase mt-1">Philippine Cancer Center</p>
        <p class="font-bold uppercase mt-1">PCC Hospital-Based Cancer Registry Reporting Forms</p>
        <p class="italic text-[10px]">(Cancer Treatment Facility - Based)</p>
    </div>
    <div class="w-full bg-black text-white text-left font-bold py-2 text-sm uppercase ps-2">
        @yield('title')
    </div>
    <table class="w-full border border-black text-xs">
        <tr>
        <td class="border border-black px-2 py-1 w-1/4 font-medium">Reporting Period</td>
        <td class="border border-black px-2 py-1 text-center">{{ Request::query('year_from') }} - {{ Request::query('month_from') }}</td>
        <td class="border border-black px-2 py-1 text-center font-medium w-10">to</td>
        <td class="border border-black px-2 py-1 text-center">{{ Request::query('year_to') }} - {{ Request::query('month_to') }}</td>
        <td class="border border-black px-2 py-1 w-1/4 font-medium">Date Report Submitted</td>
        <td class="border border-black px-2 py-1 text-center">{{ \Carbon\Carbon::now()->format('Y-m-d') }}</td>
        </tr>

        <tr>
        <td class="border border-black px-2 py-1 font-medium">Health Facility Name</td>
        <td colspan="5" class="border border-black px-2 py-1">CORAZON LOCSIN MONTELIBANO MEMORIAL REGIONAL HOSPITAL</td>
        </tr>

        <tr>
        <td class="border border-black px-2 py-1 font-medium">Health Facility Address</td>
        <td class="border border-black px-2 py-1 text-center">NIR</td>
        <td class="border border-black px-2 py-1 text-center" colspan="2">NEGROS OCCIDENTAL</td>
        <td class="border border-black px-2 py-1 text-center">BACOLOD CITY</td>
        <td colspan="1" class="border border-black px-2 py-1 text-center">BRGY. 18</td>
        </tr>

        <tr>
        <td class="border border-black px-2 py-1 font-medium">Health Facility Contact No.</td>
        <td colspan="3" class="border border-black px-2 py-1 text-center">703 1350</td>
        <td class="border border-black px-2 py-1 font-medium">PhilHealth Accreditation No. (PAN)</td>
        <td class="border border-black px-2 py-1"></td>
        </tr>
    </table>
    @yield('content')
    <div class="w-full mt-6 grid grid-cols-2 gap-4">
        <div class="text-left">
            <p class="font-medium text-sm">Prepared by:</p>
            <div class="pt-4 border-b border-black w-2/3 mx-0 text-[16px] text-center">
                {{ ucwords(Request::query('prepared_by')) ?? '' }}
            </div>
            <p class="text-gray-500 italic mt-1 text-xs w-2/3">Position</p>
        </div>
        <div class="text-left">
            <p class="font-medium text-sm">Noted by:</p>
            <div class="pt-4 border-b border-black w-2/3 mx-0 text-[16px] text-center">
                {{ ucwords(Request::query('noted_by')) ?? '' }}
            </div>
            <p class="text-gray-500 italic mt-1 text-xs w-2/3">Cancer Coordinator / Cancer Center Head</p>
        </div>
    </div>
</body>
</html>
