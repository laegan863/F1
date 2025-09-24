@extends('index')
@section("title", "Cancer Diagnosis Outcome")
@section("nav_title", "Cancer Diagnosis Outcome")
@section("content")
    <form id="form" method="POST" action="" class="p-3">
        @csrf

        <!-- Diagnosis Outcome -->
        <div class="mb-3">
            <label class="fw-bold">Diagnosis Outcome</label>
            <div class="row">
                @foreach([
                    1 => 'Stable Disease',
                    2 => 'Complete Remission',
                    3 => 'Partial Response',
                    4 => 'Disease Progression',
                    5 => 'Recurrent Disease',
                    6 => 'Death (Cancer related)',
                    7 => 'Death (treatment related)',
                    8 => 'Death (other Cause/Non-Cancer Related)',
                    9 => 'Ongoing evaluation',
                    10 => 'Ongoing treatment',
                    11 => 'Completed treatment',
                    12 => 'Undetermined'
                ] as $val => $label)
                    <div class="col-md-6">
                        <div class="form-check">
                            <input type="checkbox" name="diagnosis_outcome[]" value="{{ $val }}" class="form-check-input" id="outcome{{ $val }}">
                            <label class="form-check-label" for="outcome{{ $val }}">{{ $val }} {{ $label }}</label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <!-- Date of Diagnosis Outcome -->
        <div class="mb-3">
            <label class="fw-bold">Date of Diagnosis Outcome</label>
            <input type="date" name="diagnosis_outcome_date" class="form-control w-50">
        </div>

        <!-- Cause of Death -->
        <div class="mb-3">
            <label class="fw-bold">Cause of Death</label>
            <div class="mb-2">
                <label class="form-label">Immediate Cause</label>
                <input type="text" name="immediate_cause" class="form-control">
            </div>
            <div class="mb-2">
                <label class="form-label">Antecedent Cause</label>
                <input type="text" name="antecedent_cause" class="form-control">
            </div>
            <div class="mb-2">
                <label class="form-label">Underlying Cause</label>
                <input type="text" name="underlying_cause" class="form-control">
            </div>
            <div class="mb-2">
                <label class="form-label">Other significant condition directly leading to death</label>
                <input type="text" name="other_condition" class="form-control">
            </div>
        </div>

        <div class="text-end">
            <button type="reset" class="btn btn-secondary rounded-0">Reset</button>
            <button type="submit" class="btn btn-primary rounded-0">Submit</button>
        </div>

    </form>
@endsection
