@extends('admin.app')

@section('content')
<div class="wrapper wrapper-content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="ibox">
                <div class="ibox-title bg-primary">
                    <h5>
                        <i class="fa fa-file-text-o"></i>  Generate Report
                    </h5>
                </div>
                @php
                    use Carbon\Carbon;
                @endphp
                <div class="ibox-content">
                    <form action="{{ route('generate-report') }}" method="GET">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-md-12 mb-1">
                                <label for="" class="form-label fw-bold">Report Type</label>
                                <input type="" name="code" class="form-control mb-3" value="{{ Request::query('code') }}">
                            </div>
                            <div class="col-md-6">
                                <label for="year_from" class="form-label fw-bold">Year From</label>
                                <select name="year_from" id="year_from" class="form-control" required>
                                    <option value="">-- Select Year --</option>
                                    @for ($y = Carbon::now()->format('Y'); $y >= 2000; $y--)
                                        <option value="{{ $y }}">{{ $y }}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="year_to" class="form-label fw-bold">Year To</label>
                                <select name="year_to" id="year_to" class="form-control" required>
                                    <option value="">-- Select Year --</option>
                                    @for ($y = date('Y'); $y >= 2000; $y--)
                                        <option value="{{ $y }}">{{ $y }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="month_from" class="form-label fw-bold">Month From</label>
                                <select name="month_from" id="month_from" class="form-control" required>
                                    <option value="">-- Select Month --</option>
                                    @foreach ([
                                        '01' => 'January', '02' => 'February', '03' => 'March',
                                        '04' => 'April', '05' => 'May', '06' => 'June',
                                        '07' => 'July', '08' => 'August', '09' => 'September',
                                        '10' => 'October', '11' => 'November', '12' => 'December'
                                    ] as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="month_to" class="form-label fw-bold">Month To</label>
                                <select name="month_to" id="month_to" class="form-control" required>
                                    <option value="">-- Select Month --</option>
                                    @foreach ([
                                        '01' => 'January', '02' => 'February', '03' => 'March',
                                        '04' => 'April', '05' => 'May', '06' => 'June',
                                        '07' => 'July', '08' => 'August', '09' => 'September',
                                        '10' => 'October', '11' => 'November', '12' => 'December'
                                    ] as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="text-right mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-file-text-o"></i> Generate Report
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
