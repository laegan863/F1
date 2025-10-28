<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;
use App\Models\Demographicprofile;
use App\Models\F2followup;
use App\Models\F4palliativeform;
use App\Models\F4financialsupportmechanism;
use App\Models\F3financialsupport;
use App\Models\F2cancerdiagnoseoutcome;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function fr1a(Request $request)
    {
        $rawData = Demographicprofile::join('cancerdiagnoses', 'demographicprofiles.id', '=', 'cancerdiagnoses.code')
            ->select(
                DB::raw('REPLACE(REPLACE(REPLACE(cancerdiagnoses.cancer_sites, "[", ""), "]", ""), "\"", "") as cancer_site'),
                'cancerdiagnoses.clinical_stage',
                'demographicprofiles.sex',
                DB::raw('COUNT(*) as total_cases')
            )
            ->whereBetween(DB::raw('YEAR(demographicprofiles.created_at)'), [
                $request->input('year_from'),
                $request->input('year_to')
            ])->whereBetween(DB::raw('MONTH(demographicprofiles.created_at)'), [
                $request->input('month_from'),
                $request->input('month_to')
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

        return $data;
    }

    public function form1(Request $request)
    {
        $rawData = Demographicprofile::with(['riskfactors', 'cancerdiagnoses', 'treatments'])
            ->whereBetween(DB::raw('YEAR(demographicprofiles.created_at)'), [
                $request->input('year_from'),
                $request->input('year_to')
            ])->whereBetween(DB::raw('MONTH(demographicprofiles.created_at)'), [
                $request->input('month_from'),
                $request->input('month_to')
            ])->get();

        return $rawData;
    }

    public function form2(Request $request)
    {
        $rawData = F2followup::with([
            'f2othercancertherapies',
            'f2patientstatuses', 
            'f2radiotheraphies',
            'f2cancerdiagnoseoutcomes',
            'f2changetreatmentplans'
        ])
            ->whereBetween(DB::raw('YEAR(created_at)'), [$request->input('year_from'), $request->input('year_to')])
            ->whereBetween(DB::raw('MONTH(created_at)'), [$request->input('month_from'), $request->input('month_to')])
            ->get();

        return $rawData;
    }

    public function form3(Request $request)
    {
        $rawData = F4palliativeform::whereBetween(DB::raw('YEAR(created_at)'), [$request->input('year_from'), $request->input('year_to')])
            ->whereBetween(DB::raw('MONTH(created_at)'), [$request->input('month_from'), $request->input('month_to')])
            ->get();

        return $rawData;
    }


    public function form0(Request $request)
    {
        $rawData = [];
        $rawData[] = F3financialsupport::whereBetween(DB::raw('YEAR(created_at)'), [$request->input('year_from'), $request->input('year_to')])
            ->whereBetween(DB::raw('MONTH(created_at)'), [$request->input('month_from'), $request->input('month_to')])
            ->get();
        $rawData[] = F4financialsupportmechanism::whereBetween(DB::raw('YEAR(created_at)'), [$request->input('year_from'), $request->input('year_to')])
            ->whereBetween(DB::raw('MONTH(created_at)'), [$request->input('month_from'), $request->input('month_to')])
            ->get();
        $rawData[] = F2cancerdiagnoseoutcome::whereBetween(DB::raw('YEAR(created_at)'), [$request->input('year_from'), $request->input('year_to')])
            ->whereBetween(DB::raw('MONTH(created_at)'), [$request->input('month_from'), $request->input('month_to')])
            ->get();
        return $rawData;
    }

    public function generate_pdf(Request $request)
    {
        $code = strtolower($request->input('code'));
        $data = [];

        switch ($code) {
            case 'rf-1a':
                $data = $this->fr1a($request);
                break;
            case 'rf-1b':
                $data = $this->form1($request);
                break;
            case 'rf-1c':
                $data = $this->form1($request);
                break;
            case 'rf-1d':
                $data = $this->form1($request);
                break;
            case 'rf-1e':
                $data = $this->form1($request);
                break;
            case 'rf-1f':
                $data = $this->form1($request);
                break;
            case 'rf-2a':
                $data = $this->form2($request);
                break;
            case 'rf-2b':
                $data = $this->form2($request);
                break;
            case 'rf-2c':
                $data = $this->form2($request);
                break;
            case 'rf-3a':
                $data = $this->form3($request);
                break;
            case 'rf-0a':
                $data = $this->form0($request);
                break;
            case 'rf-0b':
                $data = $this->form0($request);
                break;
            
            default:
                return response()->json([
                    'error' => 'Invalid report code',
                    'code' => $request->input('code')
                ], 400);
        }

        $pdf = Pdf::view('reports.'.$code, [
            'data' => $data
        ])->margins(5, 5, 5, 5)
            ->format('A4')
            ->orientation('landscape');

        return $pdf->download($request->input('code').'-'.Carbon::now()->format('Y-m-d H:i:s') . '-report.pdf');
    }
}
