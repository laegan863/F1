@extends('index')
@section("title", "Cancer Treatment Profile")
@section("nav_title", "PATIENT ECOG STATUS, SURGERY, & ANTI-CANCER DRUG THERAPY")
@section("content")
    <form id="form" method="POST" action="{{ route('store.patient-eco-status') }}" class="card">
        @csrf

        <div class="card-body">
            <!-- Patient ECOG Status -->
            <h5 class="fw-bold mt-3">PATIENT ECOG STATUS</h5>
            <div class="mb-3">
                <label class="form-label fw-bold">Eastern Cooperative Oncology Group (ECOG)</label>
                <div class="d-flex flex-wrap gap-3">
                    @foreach(['Yes','No','Not Applicable'] as $opt)
                        <div class="form-check">
                            <input type="radio" name="ecog_status" value="{{ $opt }}" 
                                   class="form-check-input rounded-circle"
                                   onclick="toggleECOG()"
                                   {{ old('ecog_status','No') == $opt ? 'checked' : '' }}>
                            <label class="form-check-label">{{ $opt }}</label>
                        </div>
                    @endforeach
                </div>

                <!-- ECOG Grade -->
                <div id="ecogGradeSection" class="mt-2 {{ old('ecog_status')=='Yes' ? '' : 'd-none' }}">
                    <label class="form-label">If Yes, specify ECOG Grade</label>
                    <div class="d-flex flex-wrap gap-3">
                        @foreach(['0','1','2','3','4','5'] as $grade)
                            <div class="form-check">
                                <input type="radio" name="ecog_grade" value="Grade {{ $grade }}"
                                    class="form-check-input rounded-circle"
                                    {{ old('ecog_grade') == "Grade $grade" ? 'checked' : '' }}>
                                <label class="form-check-label">Grade {{ $grade }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Other Functional Assessment -->
            <div class="mb-3">
                <label class="form-label fw-bold">Other Functional Assessment (optional)</label>
                <input type="text" name="other_functional_assessment" class="form-control" 
                       value="{{ old('other_functional_assessment') }}">
            </div>

            <!-- Surgery -->
            <h5 class="fw-bold mt-3">SURGERY</h5>
            <div class="mb-3">
                <label class="form-label fw-bold">Surgery Done?</label>
                <div class="d-flex flex-wrap gap-3">
                    @foreach(['Yes','No'] as $opt)
                        <div class="form-check">
                            <input type="radio" name="surgery_done" value="{{ $opt }}" 
                                   class="form-check-input rounded-circle"
                                   onclick="toggleSurgery()"
                                   {{ old('surgery_done','No') == $opt ? 'checked' : '' }}>
                            <label class="form-check-label">{{ $opt }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Surgery Details -->
            <div id="surgeryDetails" class="{{ old('surgery_done')=='Yes' ? '' : 'd-none' }}">
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label class="form-label">Surgery Type (RVS Code)</label>
                        <input type="text" name="surgery_rvs" class="form-control" value="{{ old('surgery_rvs') }}">
                    </div>
                    <div class="col-md-5">
                        <label class="form-label">Surgery Description</label>
                        <input type="text" name="surgery_description" class="form-control" value="{{ old('surgery_description') }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Surgery Date</label>
                        <input type="date" name="surgery_date" class="form-control" value="{{ old('surgery_date') }}">
                    </div>
                </div>

                <label class="form-label">Goal (multiple)</label>
                <div class="d-flex flex-wrap gap-3">
                    @foreach(['Diagnostic','Curative','Palliative'] as $goal)
                        <div class="form-check">
                            <input type="checkbox" name="surgery_goal[]" value="{{ $goal }}" 
                                   class="form-check-input rounded-circle"
                                   {{ in_array($goal, old('surgery_goal',[])) ? 'checked' : '' }}>
                            <label class="form-check-label">{{ $goal }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Anti-Cancer Drug Therapy -->
            <h5 class="fw-bold mt-3">ANTI-CANCER DRUG THERAPY</h5>
            <div class="mb-3">
                <label class="form-label fw-bold">Ongoing Anti-cancer Drug Therapy?</label>
                <div class="d-flex flex-wrap gap-3">
                    @foreach(['Yes','No'] as $opt)
                        <div class="form-check">
                            <input type="radio" name="ongoing_drug_therapy" value="{{ $opt }}" 
                                   class="form-check-input rounded-circle"
                                   onclick="toggleDrugTherapy()"
                                   {{ old('ongoing_drug_therapy','No') == $opt ? 'checked' : '' }}>
                            <label class="form-check-label">{{ $opt }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Drug Therapy Details -->
            <div id="drugTherapyDetails" class="{{ old('ongoing_drug_therapy')=='Yes' ? '' : 'd-none' }}">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Date Start</label>
                        <input type="date" name="therapy_date_start" class="form-control" value="{{ old('therapy_date_start') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Purpose</label>
                        <div class="d-flex flex-wrap gap-3">
                            @foreach(['Neoadjuvant','Adjuvant','Palliative'] as $purpose)
                                <div class="form-check">
                                    <input type="radio" name="drug_purpose" value="{{ $purpose }}" 
                                           class="form-check-input rounded-circle"
                                           {{ old('drug_purpose')==$purpose ? 'checked' : '' }}>
                                    <label class="form-check-label">{{ $purpose }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <label class="form-label">Drug Type/s (multiple)</label>
                <div class="row">
                    @foreach(['Cytotoxic','Hormonal','Immunologic','Targeted','Others'] as $i=>$label)
                        <div class="col-md-6 mb-4">
                            <div class="form-check">
                                <input type="checkbox" name="drug_types[]" value="{{ $label }}" 
                                       class="form-check-input rounded-circle"
                                       id="drugType{{ $i }}" onchange="toggleDrugFields({{ $i }})"
                                       {{ in_array($label, old('drug_types',[])) ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $label }}</label>
                            </div>
                            <div class="mt-2">
                                <label class="form-label small">Drug Regimen</label>
                                <input type="text" name="drug_regimen[{{ $label }}]" class="form-control"
                                    id="drugRegimen{{ $i }}" 
                                    value="{{ old('drug_regimen.'.$label) }}"
                                    {{ in_array($label, old('drug_types',[])) ? '' : 'disabled' }}>
                                <label class="form-label small mt-2">Chemo Cycle No.</label>
                                <input type="text" name="chemo_cycle[{{ $label }}]" class="form-control"
                                    id="chemoCycle{{ $i }}" 
                                    value="{{ old('chemo_cycle.'.$label) }}"
                                    {{ in_array($label, old('drug_types',[])) ? '' : 'disabled' }}>
                            </div>
                            @if($label == 'Others')
                                <input type="text" name="drug_type_other" class="form-control mt-2"
                                    id="drugOther{{ $i }}" placeholder="Specify others"
                                    value="{{ old('drug_type_other') }}"
                                    {{ in_array('Others', old('drug_types',[])) ? '' : 'disabled' }}>
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <label class="form-label">Remarks</label>
                    <input type="date" name="surgery_date" class="form-control" value="{{ old('surgery_date') }}">
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

@section("script")
<script>
    function toggleECOG() {
        let yes = document.querySelector('input[name="ecog_status"][value="Yes"]').checked;
        document.getElementById('ecogGradeSection').classList.toggle('d-none', !yes);
    }
    function toggleSurgery() {
        let yes = document.querySelector('input[name="surgery_done"][value="Yes"]').checked;
        document.getElementById('surgeryDetails').classList.toggle('d-none', !yes);
    }
    function toggleDrugTherapy() {
        let yes = document.querySelector('input[name="ongoing_drug_therapy"][value="Yes"]').checked;
        document.getElementById('drugTherapyDetails').classList.toggle('d-none', !yes);
    }
    function toggleDrugFields(key) {
        let checked = document.getElementById('drugType'+key).checked;
        document.getElementById('drugRegimen'+key).disabled = !checked;
        document.getElementById('chemoCycle'+key).disabled = !checked;
        if(document.getElementById('drugOther'+key)){
            document.getElementById('drugOther'+key).disabled = !checked;
        }
    }
    // Init on load
    window.onload = function() {
        toggleECOG(); toggleSurgery(); toggleDrugTherapy();
        [0,1,2,3,4].forEach(k => toggleDrugFields(k));
    };
</script>
@endsection
