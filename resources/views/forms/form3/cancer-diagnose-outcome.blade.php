@extends('index')
@section("title", "Cancer Diagnosis Outcome")
@section("nav_title", "CANCER DIAGNOSIS OUTCOME")
@section("content")
    <form id="form" method="POST" action="">
        @csrf

        <div class="card shadow-sm">
            <div class="card-body">

                <!-- Diagnosis Outcome -->
                <h5 class="fw-bold">Diagnosis Outcome</h5>
                <div class="mb-3">
                    <div class="row">
                        @foreach([
                            1=>'Stable Disease',
                            2=>'Complete Remission',
                            3=>'Partial Response',
                            4=>'Disease Progression',
                            5=>'Recurrent Disease',
                            6=>'Death (Cancer related)',
                            7=>'Death (treatment related)',
                            8=>'Death (other Cause/Non-Cancer Related)',
                            9=>'Ongoing evaluation',
                            10=>'Ongoing treatment',
                            11=>'Completed treatment',
                            12=>'Undetermined'
                        ] as $k=>$label)
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="checkbox" name="diagnosis_outcome[]" value="{{ $k }}" class="form-check-input">
                                    <label class="form-check-label">{{ $label }}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Date of Diagnosis Outcome -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Date of Diagnosis Outcome</label>
                    <input type="date" name="diagnosis_outcome_date" class="form-control">
                </div>

                <!-- Cause of Death -->
                <h5 class="fw-bold mt-3">Cause of Death</h5>
                <div class="mb-2">
                    <label class="form-label">Immediate Cause</label>
                    <input type="text" name="cause_immediate" class="form-control">
                </div>
                <div class="mb-2">
                    <label class="form-label">Antecedent Cause</label>
                    <input type="text" name="cause_antecedent" class="form-control">
                </div>
                <div class="mb-2">
                    <label class="form-label">Underlying Cause</label>
                    <input type="text" name="cause_underlying" class="form-control">
                </div>
                <div class="mb-2">
                    <label class="form-label">Other significant condition directly leading to death</label>
                    <input type="text" name="cause_other" class="form-control">
                </div>

            </div>

            <div class="card-footer text-end">
                <button type="reset" class="btn btn-secondary rounded-0">Reset</button>
                <button type="submit" class="btn btn-primary rounded-0">Submit</button>
            </div>
        </div>

    </form>
@endsection
