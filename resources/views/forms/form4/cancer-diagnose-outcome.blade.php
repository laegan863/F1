@extends('index')
@section("title", "Cancer Diagnosis Outcome")
@section("nav_title", "Cancer Diagnosis Outcome")
@section("content")
    <form id="form" method="POST" action="{{ route('store.cancer-diagnose-outcome')}}" class="p-3">
        @csrf

        <!-- Diagnosis Outcome -->
        <div class="mb-3">
            <label class="fw-bold">Diagnosis Outcome</label>
            <div class="row">
                @foreach([
                    'Stable Disease',
                    'Complete Remission',
                    'Partial Response',
                    'Disease Progression',
                    'Recurrent Disease',
                    'Death (Cancer related)',
                    'Death (treatment related)',
                    'Death (other Cause/Non-Cancer Related)',
                    'Ongoing evaluation',
                    'Ongoing treatment',
                    'Completed treatment',
                    'Undetermined'
                ] as $label)
                    <div class="col-md-6">
                        <div class="form-check">
                            <input 
                                type="checkbox" 
                                name="diagnosis_outcome[]" 
                                value="{{ $label }}" 
                                class="form-check-input rounded-circle" 
                                id="outcome{{ Str::slug($label, '_') }}"
                                {{ in_array($label, old('diagnosis_outcome', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="outcome{{ Str::slug($label, '_') }}">{{ $label }}</label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Date of Diagnosis Outcome -->
        <div class="mb-3">
            <label class="fw-bold">Date of Diagnosis Outcome</label>
            <input 
                type="date" 
                name="diagnosis_outcome_date" 
                class="form-control w-50" 
                value="{{ old('diagnosis_outcome_date') }}">
        </div>

        <!-- Cause of Death -->
        <div class="mb-3">
            <label class="fw-bold">Cause of Death</label>
            <div class="mb-2">
                <label class="form-label">Immediate Cause</label>
                <input type="text" name="immediate_cause" class="form-control" value="{{ old('immediate_cause') }}">
            </div>
            <div class="mb-2">
                <label class="form-label">Antecedent Cause</label>
                <input type="text" name="antecedent_cause" class="form-control" value="{{ old('antecedent_cause') }}">
            </div>
            <div class="mb-2">
                <label class="form-label">Underlying Cause</label>
                <input type="text" name="underlying_cause" class="form-control" value="{{ old('underlying_cause') }}">
            </div>
            <div class="mb-2">
                <label class="form-label">Other significant condition directly leading to death</label>
                <input type="text" name="other_condition" class="form-control" value="{{ old('other_condition') }}">
            </div>
        </div>

        <div class="text-end">
            <button type="reset" class="btn btn-secondary rounded-0">Reset</button>
            <button type="button" onclick="handleSubmit()" class="btn btn-primary rounded-0">Submit</button>
        </div>

    </form>
@endsection
