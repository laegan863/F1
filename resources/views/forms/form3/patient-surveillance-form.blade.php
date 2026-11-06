@extends('index')
@section("title", "Patient Surveillance Form")
@section("nav_title", "Patient Surveillance Form")
@section("content")

    <form id="form" method="POST" action="{{ $formAction }}">
        @csrf
        <div class="card-body">
            <div class="alert alert-light border small mb-4">
                <i class="fa fa-info-circle text-primary me-1"></i>
                Diagnosis details are pre-filled from the patient's Form 1 record. Update them if they changed.
            </div>
            @include('forms.partials.followup-patient')

            @include('forms.partials.followup-diagnosis')
        </div>
        @include('forms.partials.wizard-footer')
    </form>
@endsection
@section("script")

@endsection
