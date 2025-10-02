@extends('index')
@section("title", "Change in Treatment Plan")
@section("nav_title", "CHANGE IN TREATMENT PLAN")
@section("content")
    <form id="form" method="POST" action="" class="card">
        @csrf
        <div class="card-body">
            <!-- Surgery -->
            <h5 class="fw-bold mt-3">Surgery</h5>
            <div class="mb-2">
                <div class="form-check d-inline-block me-3">
                    <input type="radio" name="surgery_plan" value="1" class="form-check-input rounded-circle" onclick="toggleSection('surgeryDetails')">
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check d-inline-block">
                    <input type="radio" name="surgery_plan" value="2" class="form-check-input rounded-circle" onclick="toggleSection('surgeryDetails')" checked>
                    <label class="form-check-label">No</label>
                </div>
            </div>
            <div id="surgeryDetails" class="d-none mb-3">
                <div class="my-2">
                    <label class="form-label">Treatment Plan</label>
                    <input type="text" name="treatment_plan" class="form-control">
                </div>
                <div class="my-2">
                    <label class="form-label">Reason</label>
                    <textarea name="surgery_reason" class="form-control" rows="2"></textarea>
                </div>
            </div>

            <!-- Anti-Cancer Drug Therapy -->
            <h5 class="fw-bold mt-3">Anti-Cancer Drug Therapy</h5>
            <div class="mb-2">
                <div class="form-check d-inline-block me-3">
                    <input type="radio" name="anti_cancer_change" value="1" class="form-check-input rounded-circle" onclick="toggleSection('antiCancerDetails')">
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check d-inline-block">
                    <input type="radio" name="anti_cancer_change" value="2" class="form-check-input rounded-circle" onclick="toggleSection('antiCancerDetails')" checked>
                    <label class="form-check-label">No</label>
                </div>
            </div>

            <div id="antiCancerDetails" class="d-none">

                @foreach([
                    'new'=>'New Regimen',
                    'same'=>'Same Regimen, Change Dose',
                    'deferred'=>'Deferred Drug'
                ] as $prefix => $label)
                    <div class="mt-3">
                        <label class="form-label">{{ $label }}</label>
                        <div class="form-check d-inline-block me-3">
                            <input type="radio" name="{{ $prefix }}_regimen" value="1" class="form-check-input rounded-circle" onclick="toggleSection('{{ $prefix }}RegimenDetails')">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check d-inline-block">
                            <input type="radio" name="{{ $prefix }}_regimen" value="2" class="form-check-input rounded-circle" onclick="toggleSection('{{ $prefix }}RegimenDetails')" checked>
                            <label class="form-check-label">No</label>
                        </div>
                    </div>

                    <div id="{{ $prefix }}RegimenDetails" class="d-none">
                        @foreach([
                            1=>'Cytotoxic',2=>'Hormonal',3=>'Immunologic',4=>'Targeted',5=>'Others, specify:'
                        ] as $k=>$drug)
                            <div class="mb-2">
                                <div class="form-check">
                                    <input type="checkbox" name="{{ $prefix }}_drug_type[]" value="{{ $k }}" class="form-check-input rounded-circle"
                                        onchange="toggleDrugInputs('{{ $prefix }}', {{ $k }})">
                                    <label class="form-check-label">{{ $drug }}</label>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-6">
                                        <input type="text" name="{{ $prefix }}_drug_regimen[{{ $k }}]" id="{{ $prefix }}DrugRegimen{{ $k }}"
                                            class="form-control" placeholder="Drug Regimen" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="{{ $prefix }}_chemo_cycle[{{ $k }}]" id="{{ $prefix }}ChemoCycle{{ $k }}"
                                            class="form-control" placeholder="Intended Chemo Cycle No." disabled>
                                    </div>
                                </div>
                                @if($k == 5)
                                    <input type="text" name="{{ $prefix }}_drug_other" id="{{ $prefix }}DrugOther"
                                        class="form-control mt-1" placeholder="Specify others" disabled>
                                @endif
                            </div>
                        @endforeach

                        <label class="form-label mt-2">Next Chemotherapy Cycle Date</label>
                        <input type="date" name="{{ $prefix }}_next_cycle" class="form-control">

                        @if($prefix == 'deferred')
                            <label class="form-label mt-2">Reason</label>
                            <textarea name="{{ $prefix }}_reason" class="form-control"></textarea>
                        @endif
                    </div>
                @endforeach
            </div>

            <!-- Radiotherapy -->
            <h5 class="fw-bold mt-3">Radiotherapy</h5>
            <div class="mb-2">
                <div class="form-check d-inline-block me-3">
                    <input type="radio" name="radio_change" value="1" class="form-check-input rounded-circle" onclick="toggleSection('radioDetails')">
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check d-inline-block">
                    <input type="radio" name="radio_change" value="2" class="form-check-input rounded-circle" onclick="toggleSection('radioDetails')" checked>
                    <label class="form-check-label">No</label>
                </div>
            </div>

            <div id="radioDetails" class="d-none">
                <label class="form-label">Reason</label>
                <textarea name="radio_reason" class="form-control mb-2"></textarea>
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Date Start</label>
                        <input type="date" name="radio_date_start" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Date Ended</label>
                        <input type="date" name="radio_date_end" class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="form-label">Total Planned Dose (cGy)</label>
                        <input type="text" name="radio_total_dose" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Dose per Fraction (cGy)</label>
                        <input type="text" name="radio_dose_fraction" class="form-control">
                    </div>
                </div>
                <label class="form-label mt-2">Total Planned Fractions</label>
                <input type="text" name="radio_total_fractions" class="form-control">

                <label class="form-label mt-2">Specific type of radiotherapy</label>
                @foreach([
                    1=>'2D conventional',2=>'3DCRT',3=>'Brachytherapy',4=>'Electron Therapy',
                    5=>'IMRT/IMAT/Helical',6=>'IORT',7=>'Heavy Particles',8=>'Proton Therapy',
                    9=>'Stereotactic Radiosurgery',10=>'Others, specify:'
                ] as $k=>$type)
                    <div class="form-check">
                        <input type="checkbox" name="radio_type[]" value="{{ $k }}" class="form-check-input rounded-circle">
                        <label class="form-check-label">{{ $type }}</label>
                    </div>
                    @if($k == 10)
                        <input type="text" name="radio_type_other" class="form-control mt-1" placeholder="Specify">
                    @endif
                @endforeach
            </div>

            <!-- Theranostics -->
            <h5 class="fw-bold mt-3">Theranostics</h5>
            <div class="mb-2">
                <div class="form-check d-inline-block me-3">
                    <input type="radio" name="thera_change" value="1" class="form-check-input rounded-circle" onclick="toggleSection('theraDetails')">
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check d-inline-block">
                    <input type="radio" name="thera_change" value="2" class="form-check-input rounded-circle" onclick="toggleSection('theraDetails')" checked>
                    <label class="form-check-label">No</label>
                </div>
            </div>

            <div id="theraDetails" class="d-none">
                <label class="form-label">What change in treatment plan?</label>
                <textarea name="thera_reason" class="form-control"></textarea>

                <label class="form-label mt-2">If yes, indicate type:</label>
                @foreach([
                    1=>'Radioactive Iodine Therapy (RAI)',2=>'PRRT',3=>'PRLT',4=>'SIRT',5=>'Others, specify:'
                ] as $k=>$type)
                    <div class="form-check">
                        <input type="checkbox" name="thera_type[]" value="{{ $k }}" class="form-check-input rounded-circle" onchange="toggleTheraOther({{ $k }})">
                        <label class="form-check-label">{{ $type }}</label>
                    </div>
                    @if($k == 5)
                        <input type="text" name="thera_type_other" id="theraOther" class="form-control mt-1" placeholder="Specify" disabled>
                    @endif
                @endforeach

                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="form-label">Total Planned Fractions</label>
                        <input type="text" name="thera_total_fractions" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Dose per Fractions</label>
                        <input type="text" name="thera_dose_fraction" class="form-control">
                    </div>
                </div>
            </div>

            <!-- Palliative Care -->
            <h5 class="fw-bold mt-3">Supportive Palliative Care Only</h5>
            <div class="mb-2">
                <div class="form-check d-inline-block me-3">
                    <input type="radio" name="palliative" value="1" class="form-check-input rounded-circle" onclick="toggleSection('palliativeDetails')">
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check d-inline-block">
                    <input type="radio" name="palliative" value="2" class="form-check-input rounded-circle" onclick="toggleSection('palliativeDetails')" checked>
                    <label class="form-check-label">No</label>
                </div>
            </div>
            <div id="palliativeDetails" class="d-none">
                <label class="form-label">Reason</label>
                <textarea name="palliative_reason" class="form-control"></textarea>
            </div>

            <!-- Other Cancer Directed Therapies -->
            <h5 class="fw-bold mt-3">Other Cancer Directed Therapies</h5>
            <div class="mb-2">
                <div class="form-check d-inline-block me-3">
                    <input type="radio" name="other_cancer" value="1" class="form-check-input rounded-circle" onclick="toggleSection('otherCancerDetails')">
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check d-inline-block">
                    <input type="radio" name="other_cancer" value="2" class="form-check-input rounded-circle" onclick="toggleSection('otherCancerDetails')" checked>
                    <label class="form-check-label">No</label>
                </div>
            </div>
            <div id="otherCancerDetails" class="d-none">
                @foreach([
                    1=>'Blood Transfusion',2=>'Cryoablation',3=>'Embolization',4=>'Radiofrequency ablation',
                    5=>'Transarterial chemoembolization',6=>'Transplant',7=>'Others, specify:'
                ] as $k=>$therapy)
                    <div class="form-check">
                        <input type="checkbox" name="other_cancer_type[]" value="{{ $k }}" class="form-check-input rounded-circle" onchange="toggleOtherCancer({{ $k }})">
                        <label class="form-check-label">{{ $therapy }}</label>
                    </div>
                    @if($k == 7)
                        <input type="text" name="other_cancer_other" id="otherCancerOther" class="form-control mt-1" placeholder="Specify" disabled>
                    @endif
                @endforeach

                <label class="form-label mt-2">What change in treatment plan?</label>
                <textarea name="other_cancer_reason" class="form-control"></textarea>
            </div>

            <!-- Remarks -->
            <h5 class="fw-bold mt-3">Remarks</h5>
            <textarea name="remarks" class="form-control"></textarea>

        </div>
        <!-- Submit -->
        <div class="card-footer text-end mt-3">
            <button type="reset" class="btn btn-secondary rounded-0">Reset</button>
            <button type="submit" class="btn btn-primary rounded-0">Submit</button>
        </div>
    </form>
@endsection

@section("script")
<script>
    function toggleSection(id) {
        const section = document.getElementById(id);
        if (section) {
            const yesSelected = event.target.value === '1';
            section.classList.toggle('d-none', !yesSelected);
        }
    }

    function toggleDrugInputs(prefix, key) {
        let checked = document.querySelector(`input[name="${prefix}_drug_type[]"][value="${key}"]`).checked;
        document.getElementById(prefix + 'DrugRegimen' + key).disabled = !checked;
        document.getElementById(prefix + 'ChemoCycle' + key).disabled = !checked;
        if (key === 5) {
            document.getElementById(prefix + 'DrugOther').disabled = !checked;
        }
    }

    function toggleTheraOther(k) {
        if (k === 5) {
            const checked = document.querySelector('input[name="thera_type[]"][value="5"]').checked;
            document.getElementById('theraOther').disabled = !checked;
        }
    }

    function toggleOtherCancer(k) {
        if (k === 7) {
            const checked = document.querySelector('input[name="other_cancer_type[]"][value="7"]').checked;
            document.getElementById('otherCancerOther').disabled = !checked;
        }
    }
</script>
@endsection
