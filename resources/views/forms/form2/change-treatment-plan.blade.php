@extends('index')
@section("title", "Change in Treatment Plan")
@section("nav_title", "CHANGE IN TREATMENT PLAN")
@section("content")
    <form id="form" method="POST" action="{{ route('form2.store.change-treatment-plan') }}" class="card">
        @csrf
        <div class="card-body">
            <!-- Surgery -->
            <h5 class="fw-bold mt-3">Surgery</h5>
            <div class="mb-2">
                <div class="form-check d-inline-block me-3">
                    <input type="radio" name="surgery_plan" value="Yes"
                           class="form-check-input rounded-circle"
                           onclick="toggleSection('surgeryDetails')"
                           {{ old('surgery_plan') == 'Yes' ? 'checked' : '' }}>
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check d-inline-block">
                    <input type="radio" name="surgery_plan" value="No"
                           class="form-check-input rounded-circle"
                           onclick="toggleSection('surgeryDetails')"
                           {{ old('surgery_plan','No') == 'No' ? 'checked' : '' }}>
                    <label class="form-check-label">No</label>
                </div>
            </div>
            <div id="surgeryDetails" class="{{ old('surgery_plan') == 'Yes' ? '' : 'd-none' }} mb-3">
                <div class="my-2">
                    <label class="form-label">Treatment Plan</label>
                    <input type="text" name="treatment_plan" class="form-control" value="{{ old('treatment_plan') }}">
                </div>
                <div class="my-2">
                    <label class="form-label">Reason</label>
                    <textarea name="surgery_reason" class="form-control" rows="2">{{ old('surgery_reason') }}</textarea>
                </div>
            </div>

            <!-- Anti-Cancer Drug Therapy -->
            <h5 class="fw-bold mt-3">Anti-Cancer Drug Therapy</h5>
            <div class="mb-2">
                <div class="form-check d-inline-block me-3">
                    <input type="radio" name="anti_cancer_change" value="Yes"
                           class="form-check-input rounded-circle"
                           onclick="toggleSection('antiCancerDetails')"
                           {{ old('anti_cancer_change') == 'Yes' ? 'checked' : '' }}>
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check d-inline-block">
                    <input type="radio" name="anti_cancer_change" value="No"
                           class="form-check-input rounded-circle"
                           onclick="toggleSection('antiCancerDetails')"
                           {{ old('anti_cancer_change','No') == 'No' ? 'checked' : '' }}>
                    <label class="form-check-label">No</label>
                </div>
            </div>

            <div id="antiCancerDetails" class="{{ old('anti_cancer_change') == 'Yes' ? '' : 'd-none' }}">
                @foreach([
                    'new'=>'New Regimen',
                    'same'=>'Same Regimen, Change Dose',
                    'deferred'=>'Deferred Drug'
                ] as $prefix => $label)
                    <div class="mt-3">
                        <label class="form-label">{{ $label }}</label>
                        <div class="form-check d-inline-block me-3">
                            <input type="radio" name="{{ $prefix }}_regimen" value="Yes"
                                   class="form-check-input rounded-circle"
                                   onclick="toggleSection('{{ $prefix }}RegimenDetails')"
                                   {{ old($prefix.'_regimen') == 'Yes' ? 'checked' : '' }}>
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check d-inline-block">
                            <input type="radio" name="{{ $prefix }}_regimen" value="No"
                                   class="form-check-input rounded-circle"
                                   onclick="toggleSection('{{ $prefix }}RegimenDetails')"
                                   {{ old($prefix.'_regimen','No') == 'No' ? 'checked' : '' }}>
                            <label class="form-check-label">No</label>
                        </div>
                    </div>

                    <div id="{{ $prefix }}RegimenDetails" class="{{ old($prefix.'_regimen') == 'Yes' ? '' : 'd-none' }}">
                        @foreach(['Cytotoxic','Hormonal','Immunologic','Targeted','Others'] as $drug)
                            <div class="mb-2">
                                <div class="form-check">
                                    <input type="checkbox" name="{{ $prefix }}_drug_type[]" value="{{ $drug }}"
                                           class="form-check-input rounded-circle"
                                           onchange="toggleDrugInputs('{{ $prefix }}','{{ $drug }}')"
                                           {{ in_array($drug, old($prefix.'_drug_type', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label">{{ $drug }}</label>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-6">
                                        <input type="text" name="{{ $prefix }}_drug_regimen[{{ $drug }}]"
                                               id="{{ $prefix }}DrugRegimen{{ $drug }}"
                                               class="form-control"
                                               placeholder="Drug Regimen"
                                               value="{{ old($prefix.'_drug_regimen.'.$drug) }}"
                                               {{ in_array($drug, old($prefix.'_drug_type', [])) ? '' : 'disabled' }}>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="{{ $prefix }}_chemo_cycle[{{ $drug }}]"
                                               id="{{ $prefix }}ChemoCycle{{ $drug }}"
                                               class="form-control"
                                               placeholder="Intended Chemo Cycle No."
                                               value="{{ old($prefix.'_chemo_cycle.'.$drug) }}"
                                               {{ in_array($drug, old($prefix.'_drug_type', [])) ? '' : 'disabled' }}>
                                    </div>
                                </div>
                                @if($drug === 'Others')
                                    <input type="text" name="{{ $prefix }}_drug_other"
                                           id="{{ $prefix }}DrugOther"
                                           class="form-control mt-1"
                                           placeholder="Specify others"
                                           value="{{ old($prefix.'_drug_other') }}"
                                           {{ in_array('Others', old($prefix.'_drug_type', [])) ? '' : 'disabled' }}>
                                @endif
                            </div>
                        @endforeach

                        <label class="form-label mt-2">Next Chemotherapy Cycle Date</label>
                        <input type="date" name="{{ $prefix }}_next_cycle" class="form-control"
                               value="{{ old($prefix.'_next_cycle') }}">

                        @if($prefix == 'deferred')
                            <label class="form-label mt-2">Reason</label>
                            <textarea name="{{ $prefix }}_reason" class="form-control">{{ old($prefix.'_reason') }}</textarea>
                        @endif
                    </div>
                @endforeach
            </div>

            <!-- Radiotherapy -->
            <h5 class="fw-bold mt-3">Radiotherapy</h5>
            <div class="mb-2">
                <div class="form-check d-inline-block me-3">
                    <input type="radio" name="radio_change" value="Yes"
                           class="form-check-input rounded-circle"
                           onclick="toggleSection('radioDetails')"
                           {{ old('radio_change') == 'Yes' ? 'checked' : '' }}>
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check d-inline-block">
                    <input type="radio" name="radio_change" value="No"
                           class="form-check-input rounded-circle"
                           onclick="toggleSection('radioDetails')"
                           {{ old('radio_change','No') == 'No' ? 'checked' : '' }}>
                    <label class="form-check-label">No</label>
                </div>
            </div>

            <div id="radioDetails" class="{{ old('radio_change') == 'Yes' ? '' : 'd-none' }}">
                <label class="form-label">What change in treatment plan?</label>
                <textarea name="radio_treatment_plan" class="form-control">{{ old('radio_treatment_plan') }}</textarea>
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Date Start</label>
                        <input type="date" name="radio_date_start" class="form-control" value="{{ old('radio_date_start') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Date Ended</label>
                        <input type="date" name="radio_date_end" class="form-control" value="{{ old('radio_date_end') }}">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="form-label">Total Planned Dose (cGy)</label>
                        <input type="text" name="radio_total_dose" class="form-control" value="{{ old('radio_total_dose') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Dose per Fraction (cGy)</label>
                        <input type="text" name="radio_dose_fraction" class="form-control" value="{{ old('radio_dose_fraction') }}">
                    </div>
                </div>
                <label class="form-label mt-2">Total Planned Fractions</label>
                <input type="text" name="radio_total_fractions" class="form-control" value="{{ old('radio_total_fractions') }}">

                <label class="form-label mt-2">Specific type of radiotherapy</label>
                @foreach([
                    '2D conventional','3DCRT','Brachytherapy','Electron Therapy','IMRT/IMAT/Helical',
                    'IORT','Heavy Particles','Proton Therapy','Stereotactic Radiosurgery','Others'
                ] as $type)
                    <div class="form-check">
                        <input type="checkbox" name="radio_type[]" value="{{ $type }}"
                               class="form-check-input rounded-circle"
                               {{ in_array($type, old('radio_type', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">{{ $type }}</label>
                    </div>
                    @if($type === 'Others')
                        <input type="text" name="radio_type_other" class="form-control mt-1" placeholder="Specify"
                               value="{{ old('radio_type_other') }}">
                    @endif
                @endforeach
                <label class="form-label">Reason</label>
                <textarea name="radio_reason" class="form-control mb-2">{{ old('radio_reason') }}</textarea>
            </div>

            <!-- Theranostics -->
            <h5 class="fw-bold mt-3">Theranostics</h5>
            <div class="mb-2">
                <div class="form-check d-inline-block me-3">
                    <input type="radio" name="thera_change" value="Yes"
                           class="form-check-input rounded-circle"
                           onclick="toggleSection('theraDetails')"
                           {{ old('thera_change') == 'Yes' ? 'checked' : '' }}>
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check d-inline-block">
                    <input type="radio" name="thera_change" value="No"
                           class="form-check-input rounded-circle"
                           onclick="toggleSection('theraDetails')"
                           {{ old('thera_change','No') == 'No' ? 'checked' : '' }}>
                    <label class="form-check-label">No</label>
                </div>
            </div>

            <div id="theraDetails" class="{{ old('thera_change') == 'Yes' ? '' : 'd-none' }}">
                <label class="form-label">What change in treatment plan?</label>
                <textarea name="thera_treatment_plan" class="form-control">{{ old('thera_treatment_plan') }}</textarea>

                <label class="form-label mt-2">If yes, indicate type:</label>
                @foreach(['Radioactive Iodine Therapy (RAI)','PRRT','PRLT','SIRT','Others'] as $type)
                    <div class="form-check">
                        <input type="checkbox" name="thera_type[]" value="{{ $type }}"
                               class="form-check-input rounded-circle"
                               onchange="toggleTheraOther('{{ $type }}')"
                               {{ in_array($type, old('thera_type', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">{{ $type }}</label>
                    </div>
                    @if($type === 'Others')
                        <input type="text" name="thera_type_other" id="theraOther"
                               class="form-control mt-1" placeholder="Specify"
                               value="{{ old('thera_type_other') }}"
                               {{ in_array('Others', old('thera_type', [])) ? '' : 'disabled' }}>
                    @endif
                @endforeach

                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="form-label">Total Planned Fractions</label>
                        <input type="text" name="thera_total_planned_dose" class="form-control"
                               value="{{ old('thera_total_planned_dose') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Total Planned Fractions</label>
                        <input type="text" name="thera_total_fractions" class="form-control"
                               value="{{ old('thera_total_fractions') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Dose per Fractions</label>
                        <input type="text" name="thera_dose_fraction" class="form-control"
                               value="{{ old('thera_dose_fraction') }}">
                    </div>
                </div>
                <label class="form-label">Reason</label>
                <textarea name="thera_reason" class="form-control">{{ old('thera_reason') }}</textarea>
            </div>

            <!-- Palliative Care -->
            <h5 class="fw-bold mt-3">Supportive Palliative Care Only</h5>
            <div class="mb-2">
                <div class="form-check d-inline-block me-3">
                    <input type="radio" name="palliative" value="Yes"
                           class="form-check-input rounded-circle"
                           onclick="toggleSection('palliativeDetails')"
                           {{ old('palliative') == 'Yes' ? 'checked' : '' }}>
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check d-inline-block">
                    <input type="radio" name="palliative" value="No"
                           class="form-check-input rounded-circle"
                           onclick="toggleSection('palliativeDetails')"
                           {{ old('palliative','No') == 'No' ? 'checked' : '' }}>
                    <label class="form-check-label">No</label>
                </div>
            </div>

            <!-- Other Cancer Directed Therapies -->
            <h5 class="fw-bold mt-3">Other Cancer Directed Therapies</h5>
            <div class="mb-2">
                <div class="form-check d-inline-block me-3">
                    <input type="radio" name="other_cancer" value="Yes"
                           class="form-check-input rounded-circle"
                           onclick="toggleSection('otherCancerDetails')"
                           {{ old('other_cancer') == 'Yes' ? 'checked' : '' }}>
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check d-inline-block">
                    <input type="radio" name="other_cancer" value="No"
                           class="form-check-input rounded-circle"
                           onclick="toggleSection('otherCancerDetails')"
                           {{ old('other_cancer','No') == 'No' ? 'checked' : '' }}>
                    <label class="form-check-label">No</label>
                </div>
            </div>
            <div id="otherCancerDetails" class="{{ old('other_cancer') == 'Yes' ? '' : 'd-none' }}">
                @foreach(['Blood Transfusion','Cryoablation','Embolization','Radiofrequency ablation',
                          'Transarterial chemoembolization','Transplant','Others'] as $therapy)
                    <div class="form-check">
                        <input type="checkbox" name="other_cancer_type[]" value="{{ $therapy }}"
                               class="form-check-input rounded-circle"
                               onchange="toggleOtherCancer('{{ $therapy }}')"
                               {{ in_array($therapy, old('other_cancer_type', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">{{ $therapy }}</label>
                    </div>
                    @if($therapy === 'Others')
                        <input type="text" name="other_cancer_other" id="otherCancerOther"
                               class="form-control mt-1" placeholder="Specify"
                               value="{{ old('other_cancer_other') }}"
                               {{ in_array('Others', old('other_cancer_type', [])) ? '' : 'disabled' }}>
                    @endif
                @endforeach

                <div class="mb-3">
                    <label class="form-label mt-2">What change in treatment plan?</label>
                    <input type="text" name="other_cancer_treatment_plan" value="{{ old('other_cancer_treatment_plan') }}" class="form-control">
                </div>

                <label class="form-label mt-2">What change in treatment plan?</label>
                <textarea name="other_cancer_reason" class="form-control">{{ old('other_cancer_reason') }}</textarea>
            </div>

            <!-- Remarks -->
            <h5 class="fw-bold mt-3">Remarks</h5>
            <textarea name="remarks" class="form-control">{{ old('remarks') }}</textarea>

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
            const yesSelected = event.target.value === 'Yes';
            section.classList.toggle('d-none', !yesSelected);
        }
    }
    function toggleDrugInputs(prefix, key) {
        let checked = document.querySelector(`input[name="${prefix}_drug_type[]"][value="${key}"]`).checked;
        document.getElementById(prefix + 'DrugRegimen' + key).disabled = !checked;
        document.getElementById(prefix + 'ChemoCycle' + key).disabled = !checked;
        if (key === 'Others') {
            document.getElementById(prefix + 'DrugOther').disabled = !checked;
        }
    }
    function toggleTheraOther(k) {
        if (k === 'Others') {
            const checked = document.querySelector('input[name="thera_type[]"][value="Others"]').checked;
            document.getElementById('theraOther').disabled = !checked;
        }
    }
    function toggleOtherCancer(k) {
        if (k === 'Others') {
            const checked = document.querySelector('input[name="other_cancer_type[]"][value="Others"]').checked;
            document.getElementById('otherCancerOther').disabled = !checked;
        }
    }
</script>
@endsection
