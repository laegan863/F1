@extends('index')
@section("title", "ESAS-r Assessment")
@section("nav_title", "A. ESAS-r (Edmonton Symptom Assessment System Revised)")
@section("content")
    <form id="form" method="POST" action="{{ route('store.esas') }}" class="p-2">
        @csrf

        <!-- GCS & ESAS-r Score -->
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">GCS Score of the Patient</label>
                        <input type="number" name="gcs_score" class="form-control" min="0" max="15">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">ESAS-r Score of the Patient <small>(Only if GCS Score ≥ 8)</small></label>
                        <input type="number" name="esasr_score" class="form-control" min="0" max="100">
                    </div>
                </div>
            </div>
        </div>

        <!-- Symptom Scales -->
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="fw-bold">Please circle the number that best describes how the patient feels NOW:</h5>

                @foreach([
                    'pain'=>'No Pain|Worst Possible Pain',
                    'tiredness'=>'No Tiredness|Worst Possible Tiredness',
                    'drowsiness'=>'No Drowsiness|Worst Possible Drowsiness',
                    'nausea'=>'No Nausea|Worst Possible Nausea',
                    'appetite'=>'No Lack of Appetite|Worst Possible Lack of Appetite',
                    'breath'=>'No Shortness of Breath|Worst Possible Shortness of Breath',
                    'depression'=>'No Depression|Worst Possible Depression',
                    'anxiety'=>'No Anxiety|Worst Possible Anxiety',
                    'wellbeing'=>'Best Wellbeing|Worst Possible Wellbeing'
                ] as $key=>$labels)
                    @php
                        [$left,$right] = explode('|',$labels);
                    @endphp
                    <div class="mb-3">
                        <label class="form-label fw-bold text-uppercase">{{ ucfirst($key) }}</label>
                        <div class="d-flex">
                            <span class="me-2">{{ $left }}</span>
                            <div class="d-flex flex-wrap">
                                @for($i=0;$i<=10;$i++)
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="{{ $key }}" value="{{ $i }}" class="form-check-input rounded-circle" {{ $i == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label">{{ $i }}</label>
                                    </div>
                                @endfor
                            </div>
                            <span class="ms-2">{{ $right }}</span>
                        </div>
                    </div>
                @endforeach

                <!-- Other Problem -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Other Problem</label>
                    <input type="text" name="other_problem" class="form-control mb-2" placeholder="Describe problem">
                    <div class="d-flex align-items-center">
                        <span class="me-2">
                            <input type="text" name="" id="" placeholder="title" class="form-control">
                        </span>
                        <div class="d-flex flex-wrap">
                            @for($i=0;$i<=10;$i++)
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="other_problem_score" value="{{ $i }}" class="form-check-input rounded-circle">
                                    <label class="form-check-label">{{ $i }}</label>
                                </div>
                            @endfor
                        </div>
                        <span class="ms-2">
                            <input type="text" name="" id="" placeholder="title" class="form-control">
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit -->
        <div class="card-footer text-end">
            <button type="reset" class="btn btn-secondary rounded-0">Reset</button>
            <button type="submit" class="btn btn-primary rounded-0">Submit</button>
        </div>
    </form>
@endsection
