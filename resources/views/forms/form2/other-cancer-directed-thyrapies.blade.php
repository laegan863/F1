@extends('index')
@section("title", "Other Therapies & Treatment Outcomes")
@section("nav_title", "OTHER THERAPIES & TREATMENT OUTCOMES")
@section("content")
    <form id="form" method="POST" action="{{ route('store.other-theraphy') }}" class="card">
        @csrf
        <div class="card-body">
            <!-- Other Cancer-Directed Therapies -->
            <h5 class="fw-bold mt-3">OTHER CANCER-DIRECTED THERAPIES</h5>
            <div class="mb-3">
                <label class="form-label fw-bold">Other Cancer Directed Therapies <small class="text-danger">*</small></label>
                <div class="d-flex gap-3">
                    <div class="form-check">
                        <input type="radio" name="other_cancer_therapies" value="Yes"
                               class="form-check-input rounded-circle"
                               onclick="toggleCancerTherapies()"
                               {{ old('other_cancer_therapies') == 'Yes' ? 'checked' : '' }}>
                        <label class="form-check-label">Yes</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="other_cancer_therapies" value="No"
                               class="form-check-input rounded-circle"
                               onclick="toggleCancerTherapies()"
                               {{ old('other_cancer_therapies','No') == 'No' ? 'checked' : '' }}>
                        <label class="form-check-label">No</label>
                    </div>
                </div>
            </div>

            <!-- Cancer Therapies Details -->
            <div id="cancerTherapiesDetails" class="{{ old('other_cancer_therapies') == 'Yes' ? '' : 'd-none' }} mb-3">
                <label class="form-label">If yes, specify other cancer-directed therapies: <small class="text-danger">*</small></label>
                <div class="row">
                    <div class="col-md-6">
                        @foreach(['Blood Transfusion','Cryoablation','Embolization','Radiofrequency ablation'] as $label)
                            <div class="form-check">
                                <input type="checkbox" name="cancer_therapies[]" value="{{ $label }}"
                                       class="form-check-input rounded-circle"
                                       {{ in_array($label, old('cancer_therapies', [])) ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $label }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        @foreach(['Transarterial chemoembolization','Transplant','Others, specify:'] as $label)
                            <div class="form-check">
                                <input type="checkbox" name="cancer_therapies[]" value="{{ $label }}"
                                       class="form-check-input rounded-circle"
                                       onchange="toggleTherapyOther('{{ $label }}')"
                                       {{ in_array($label, old('cancer_therapies', [])) ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $label }}</label>
                            </div>
                            @if($label === 'Others, specify:')
                                <input type="text" name="cancer_therapies_other" id="therapyOther"
                                       class="form-control mt-1" placeholder="Specify"
                                       value="{{ old('cancer_therapies_other') }}"
                                       {{ in_array('Others, specify:', old('cancer_therapies', [])) ? '' : 'disabled' }}>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Medical Evaluation / Treatment Outcomes -->
            <h5 class="fw-bold mt-3">MEDICAL EVALUATION / TREATMENT OUTCOMES</h5>

            <!-- Pre-operative Scenario -->
            <div class="mb-3">
                <label class="form-label fw-bold">Pre-operative Scenario <small class="text-danger">*</small></label>
                <div class="d-flex flex-wrap gap-3">
                    @foreach(['No evidence of disease','Progressive Disease','Not Applicable'] as $label)
                        <div class="form-check">
                            <input type="radio" name="pre_op_scenario" value="{{ $label }}"
                                   class="form-check-input rounded-circle"
                                   {{ old('pre_op_scenario') == $label ? 'checked' : '' }}>
                            <label class="form-check-label">{{ $label }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Post-operative Scenario -->
            <div class="mb-3">
                <label class="form-label fw-bold">Post-operative Scenario <small class="text-danger">*</small></label>
                <div class="d-flex flex-wrap gap-3">
                    @foreach(['R0','R1','R2','R3','Unknown','Not Applicable'] as $label)
                        <div class="form-check">
                            <input type="radio" name="post_op_scenario" value="{{ $label }}"
                                   class="form-check-input rounded-circle"
                                   {{ old('post_op_scenario') == $label ? 'checked' : '' }}>
                            <label class="form-check-label">{{ $label }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Patient Treatment Status -->
            <div class="mb-3">
                <label class="form-label fw-bold">Patient Treatment Status <small class="text-danger">*</small></label>
                <div class="d-flex flex-wrap gap-3">
                    @foreach(['Ongoing','Completed','Stopped/Interrupted','Undetermined','Not Initiated'] as $label)
                        <div class="form-check">
                            <input type="radio" name="treatment_status" value="{{ $label }}"
                                   class="form-check-input rounded-circle"
                                   {{ old('treatment_status') == $label ? 'checked' : '' }}>
                            <label class="form-check-label">{{ $label }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Submit -->
        <div class="card-footer text-end">
            <button type="reset" class="btn btn-secondary rounded-0">Reset</button>
            <button type="button" onclick="handleSubmit()" class="btn btn-primary rounded-0">Submit</button>
        </div>
    </form>
@endsection

@section("script")
<script>
    function toggleCancerTherapies() {
        let yes = document.querySelector('input[name="other_cancer_therapies"][value="Yes"]').checked;
        document.getElementById('cancerTherapiesDetails').classList.toggle('d-none', !yes);
    }
    function toggleTherapyOther(label) {
        if (label === 'Others, specify:') {
            let checked = document.querySelector('input[name="cancer_therapies[]"][value="Others, specify:"]').checked;
            document.getElementById('therapyOther').disabled = !checked;
        }
    }
    // Initialize on page load
    window.onload = function() {
        toggleCancerTherapies();
        toggleTherapyOther('Others, specify:');
    }
</script>
@endsection
