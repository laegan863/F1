@extends('index')
@section("title", "Supportive / Palliative Care Form")
@section("nav_title", "Supportive / Palliative Care Form")
@section("content")
<style>
    .section-label {
      background-color: #d9d9d9;
      font-weight: bold;
      padding: 6px 10px;
      border-radius: 4px;
      margin-bottom: 10px;
    }
    .form-check-label {
      font-weight: 500;
    }
    .form-section {
      border: 1px solid #ccc;
      border-radius: 6px;
      padding: 15px;
      margin-bottom: 20px;
    }
    .hidden {
      display: none !important;
    }
</style>
    <form id="form" method="POST" action="{{ $formAction }}">
        @csrf
        <div class="card-body">
            <div class="alert alert-light border small mb-4">
                <i class="fa fa-info-circle text-primary me-1"></i>
                Diagnosis details are pre-filled from the patient's Form 1 record. Update them if they changed.
            </div>
            @include('forms.partials.followup-patient')
                <div class="my-3">
                    <div class="form-section">
                        <div class="section-label">Reason for Supportive-Palliative Care Consult <small class="text-danger">*</small></div>

                        <div class="row g-2">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input rounded-circle" type="checkbox" name="reason[]" id="curative" value="Palliative Care with Curative Intent" {{ in_array('Palliative Care with Curative Intent', old('reason', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="curative">1. Palliative Care with Curative Intent</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input rounded-circle" type="checkbox" name="reason[]" id="active" value="Palliative Care with Active Oncologic Management" {{ in_array('Palliative Care with Active Oncologic Management', old('reason', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="active">2. Palliative Care with Active Oncologic Management</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input rounded-circle" type="checkbox" name="reason[]" id="supportive" value="Supportive Care" {{ in_array('Supportive Care', old('reason', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="supportive">3. Supportive Care</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input rounded-circle" type="checkbox" name="reason[]" id="hospice" value="Hospice Care" {{ in_array('Hospice Care', old('reason', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="hospice">4. Hospice Care</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input rounded-circle" type="checkbox" name="reason[]" id="endoflife" value="End of Life Care" {{ in_array('End of Life Care', old('reason', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="endoflife">5. End of Life Care</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input rounded-circle" type="checkbox" name="reason[]" id="survivorship" value="Survivorship Care" {{ in_array('Survivorship Care', old('reason', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="survivorship">6. Survivorship Care</label>
                                </div>

                                <!-- Other checkbox + dynamic text field -->
                                <div class="form-check d-flex align-items-center flex-wrap">
                                    <input class="form-check-input me-2 rounded-circle" type="checkbox" name="reason[]" id="others" value="Others" {{ in_array('Others', old('reason', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label me-2" for="others">7. Others, specify:</label>
                                    <input type="text" name="reason_others" id="othersInput" class="form-control form-control-sm w-auto {{ in_array('Others', old('reason', [])) ? '' : 'hidden' }}" placeholder="Specify here" value="{{ old('reason_others') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="section-label">Palliative Care Setting <small class="text-danger">*</small></div>

                        <div class="d-flex flex-wrap gap-3">
                            <div class="form-check">
                                <input class="form-check-input rounded-circle" type="checkbox" name="setting[]" id="home" value="Home" {{ in_array('Home', old('setting', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="home">1. Home</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input rounded-circle" type="checkbox" name="setting[]" id="hospital" value="Hospital" {{ in_array('Hospital', old('setting', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="hospital">2. Hospital</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input rounded-circle" type="checkbox" name="setting[]" id="community" value="Community-based" {{ in_array('Community-based', old('setting', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="community">3. Community-based</label>
                            </div>
                        </div>
                    </div>
                </div>
            @include('forms.partials.followup-diagnosis')
        </div>
        @include('forms.partials.wizard-footer')
    </form>
@endsection
@section("script")
                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const othersCheckbox = document.getElementById('others');
                    const othersInput = document.getElementById('othersInput');

                    othersCheckbox.addEventListener('change', function() {
                        if (this.checked) {
                            othersInput.classList.remove('hidden');
                            othersInput.focus();
                        } else {
                            othersInput.classList.add('hidden');
                            othersInput.value = '';
                        }
                    });
                });
                </script>
@endsection
