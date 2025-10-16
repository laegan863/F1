@extends('admin.app')

@section('content')
<div class="wrapper wrapper-content">
    <div class="row justify-content-center">

        @php
            $reports = [
                ['code' => 'RF-1A', 'route' => 'rf-1a', 'desc' => 'New Cancer Cases by Primary Sites, Sex and Initial Clinical Staging'],
                ['code' => 'RF-1B', 'route' => 'rf-1b', 'desc' => 'Sociodemographic Characteristics'],
                ['code' => 'RF-1C', 'route' => 'rf-1c', 'desc' => 'Medical History'],
                ['code' => 'RF-1D', 'route' => 'rf-1d', 'desc' => 'Risk Factor Profile of New Cancer Cases by Sex'],
                ['code' => 'RF-1E', 'route' => 'rf-1e', 'desc' => 'Cancer Screening and Vaccination History'],
                ['code' => 'RF-1F', 'route' => 'rf-1f', 'desc' => 'Status at First Encounter at Health Facility'],
                ['code' => 'RF-2A', 'route' => 'rf-2a', 'desc' => 'First Course of Treatment Given to Cancer Patients at the Health Facility of Consult'],
                ['code' => 'RF-2B', 'route' => 'rf-2b', 'desc' => 'Cancer Diagnosis Outcome'],
                ['code' => 'RF-2C', 'route' => 'rf-2c', 'desc' => 'Patient Treatment Status'],
                ['code' => 'RF-3A', 'route' => 'rf-3a', 'desc' => 'Frequency of Supportive-Palliative Care Consult of all Patients'],
                ['code' => 'RF-0A', 'route' => 'rf-0a', 'desc' => 'Frequency of Financial Support Mechanism Availed by Cancer Patients'],
                ['code' => 'RF-0B', 'route' => 'rf-0b', 'desc' => 'Medicines Availed by Cancer Patients Enrolled in CSPMAP'],
            ];
        @endphp

        @foreach ($reports as $report)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">
                        <i class="fa fa-file-text-o"></i> {{ $report['code'] }}
                    </h5>
                    <p class="card-text text-muted small">{{ $report['desc'] }}</p>
                </div>
                <div class="card-footer bg-transparent border-0 text-end">
                    <a href="{{ route('select-date-report', [ 'code' => $report['code'] ]) }}" class="btn btn-sm btn-primary">
                        <i class="fa fa-file-text"></i> View Report
                    </a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
