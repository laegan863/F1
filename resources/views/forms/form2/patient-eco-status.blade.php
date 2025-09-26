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
                    <div class="form-check">
                        <input type="radio" name="ecog_status" value="Yes" class="form-check-input rounded-circle"
                            onclick="toggleECOG()" {{ old('ecog_status') == "Yes" ? 'checked' : '' }}>
                        <label class="form-check-label">Yes</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="ecog_status" value="No" class="form-check-input rounded-circle"
                            onclick="toggleECOG()" {{ old('ecog_status', 'No') == "No" ? 'checked' : '' }}>
                        <label class="form-check-label">No</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="ecog_status" value="Not Applicable" class="form-check-input rounded-circle"
                            onclick="toggleECOG()" {{ old('ecog_status') == "Not Applicable" ? 'checked' : '' }}>
                        <label class="form-check-label">Not Applicable</label>
                    </div>
                </div>

                <!-- ECOG Grade - show only if Yes -->
                <div id="ecogGradeSection" class="mt-2 d-none">
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
                <label class="form-label fw-bold">Specify Details of Other Functional Assessment Used <span class="text-muted">(optional)</span></label>
                <input type="text" name="other_functional_assessment" class="form-control" value="{{ old('other_functional_assessment') }}">
            </div>

            <!-- Surgery -->
            <h5 class="fw-bold mt-3">SURGERY</h5>
            <div class="mb-3">
                <label class="form-label fw-bold">Surgery Done?</label>
                <div class="d-flex flex-wrap gap-3">
                    <div class="form-check">
                        <input type="radio" name="surgery_done" value="Yes" class="form-check-input rounded-circle"
                            onclick="toggleSurgery()" {{ old('surgery_done') == "Yes" ? 'checked' : '' }}>
                        <label class="form-check-label">Yes</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="surgery_done" value="No" class="form-check-input rounded-circle"
                            onclick="toggleSurgery()" {{ old('surgery_done', 'No') == "No" ? 'checked' : '' }}>
                        <label class="form-check-label">No</label>
                    </div>
                </div>
            </div>

            <!-- Surgery Details - show only if Yes -->
            <div id="surgeryDetails" class="d-none">
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label class="form-label">What surgery type (RVS Code)</label>
                        <input type="text" name="surgery_rvs" class="form-control" value="{{ old('surgery_rvs') }}">
                    </div>
                    <div class="col-md-5">
                        <label class="form-label">What surgery type (description)</label>
                        <input type="text" name="surgery_description" class="form-control" value="{{ old('surgery_description') }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Surgery Date</label>
                        <input type="date" name="surgery_date" class="form-control" value="{{ old('surgery_date') }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Goal <span class="text-muted">(can be multiple)</span></label>
                    <div class="d-flex flex-wrap gap-3">
                        <div class="form-check">
                            <input type="checkbox" name="surgery_goal[]" value="Diagnostic" class="form-check-input rounded-circle">
                            <label class="form-check-label">Diagnostic</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="surgery_goal[]" value="Curative" class="form-check-input rounded-circle">
                            <label class="form-check-label">Curative</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="surgery_goal[]" value="Palliative" class="form-check-input rounded-circle">
                            <label class="form-check-label">Palliative</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Anti-Cancer Drug Therapy -->
            <h5 class="fw-bold mt-3">ANTI-CANCER DRUG THERAPY</h5>
            <div class="mb-3">
                <label class="form-label fw-bold">Ongoing Anti-cancer Drug Therapy?</label>
                <div class="d-flex flex-wrap gap-3">
                    <div class="form-check">
                        <input type="radio" name="ongoing_drug_therapy" value="Yes" class="form-check-input rounded-circle"
                            onclick="toggleDrugTherapy()" {{ old('ongoing_drug_therapy') == "Yes" ? 'checked' : '' }}>
                        <label class="form-check-label">Yes</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="ongoing_drug_therapy" value="No" class="form-check-input rounded-circle"
                            onclick="toggleDrugTherapy()" {{ old('ongoing_drug_therapy', 'No') == "No" ? 'checked' : '' }}>
                        <label class="form-check-label">No</label>
                    </div>
                </div>
            </div>

            <!-- Drug Therapy Details - show only if Yes -->
            <div id="drugTherapyDetails" class="d-none">
                <div class="row mb-3 align-items-center">
                    <div class="col-md-6">
                        <label class="form-label">Date Start</label>
                        <input type="date" name="therapy_date_start" class="form-control" value="{{ old('therapy_date_start') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Purpose of Drug Administration</label>
                        <div class="d-flex flex-wrap gap-3">
                            <div class="form-check">
                                <input type="radio" name="drug_purpose" value="Neoadjuvant" class="form-check-input rounded-circle">
                                <label class="form-check-label">Neoadjuvant</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="drug_purpose" value="Adjuvant" class="form-check-input rounded-circle">
                                <label class="form-check-label">Adjuvant</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="drug_purpose" value="Palliative" class="form-check-input rounded-circle">
                                <label class="form-check-label">Palliative</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Drug Types -->
                <div class="mb-3">
                    <label class="form-label">Drug Type/s <span class="text-muted">(can be multiple)</span></label>
                    <div class="row">
                        @foreach([
                            'Cytotoxic',
                            'Hormonal',
                            'Immunologic',
                            'Targeted',
                            'Others'
                        ] as $key => $label)
                            <div class="col-md-6 mb-4">
                                <div class="form-check">
                                    <input type="checkbox" name="drug_types[]" value="{{ $label }}" class="form-check-input rounded-circle"
                                        id="drugType{{ $key }}" onchange="toggleDrugFields({{ $key }})">
                                    <label class="form-check-label">{{ $label }}</label>
                                </div>
                                <div class="mt-2">
                                    <label class="form-label small">Drug Regimen</label>
                                    <input type="text" name="drug_regimen[{{ $label }}]" class="form-control"
                                        id="drugRegimen{{ $key }}" disabled>

                                    <label class="form-label small mt-2">Chemo Cycle No.</label>
                                    <input type="text" name="chemo_cycle[{{ $label }}]" class="form-control"
                                        id="chemoCycle{{ $key }}" disabled>
                                </div>
                                @if($label == 'Others')
                                    <input type="text" name="drug_type_other" class="form-control mt-2"
                                        id="drugOther{{ $key }}" placeholder="Specify others" disabled>
                                @endif
                            </div>
                        @endforeach
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

    // Run on page load (restore state if old values exist)
    window.onload = function() {
        toggleECOG();
        toggleSurgery();
        toggleDrugTherapy();
        [0,1,2,3,4].forEach(k => toggleDrugFields(k));
    };

    function toggleDrugFields(key) {
        let checked = document.getElementById('drugType' + key).checked;
        document.getElementById('drugRegimen' + key).disabled = !checked;
        document.getElementById('chemoCycle' + key).disabled = !checked;
        if (document.getElementById('drugOther' + key)) {
            document.getElementById('drugOther' + key).disabled = !checked;
        }
    }
</script>
@endsection
