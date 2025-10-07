@extends('index')
@section("title", "Cancer Treatment History")
@section("nav_title", "CANCER TREATMENT HISTORY")
@section("content")
    <form id="form" method="POST" action="{{ route('store.treatment-history') }}" class="p-2">
        @csrf

        <!-- ================= SURGERY ================= -->
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="fw-bold">Surgery</h5>
                @foreach([
                    'first'=>'Surgery Done?',
                    'second'=>'Second Surgery',
                    'third'=>'Third Surgery',
                    'fourth'=>'Fourth Surgery'
                ] as $key=>$label)
                    <div class="border rounded p-3 mb-3">
                        <label class="form-label">{{ $label }}</label>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_surgery" value="Yes"
                                class="form-check-input rounded-circle"
                                onclick="toggleSection('{{ $key }}SurgeryDetails')"
                                {{ old($key.'_surgery') == 'Yes' ? 'checked' : '' }}>
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_surgery" value="No"
                                class="form-check-input rounded-circle"
                                onclick="toggleSection('{{ $key }}SurgeryDetails')"
                                {{ old($key.'_surgery','No') == 'No' ? 'checked' : '' }}>
                            <label class="form-check-label">No</label>
                        </div>

                        {{-- Surgery Details Section --}}
                        <div id="{{ $key }}SurgeryDetails"
                            class="{{ old($key.'_surgery') == 'Yes' ? '' : 'd-none' }} mt-2">
                            <label class="form-label">Surgery Date</label>
                            <input type="date" name="{{ $key }}_surgery_date"
                                class="form-control mb-2"
                                value="{{ old($key.'_surgery_date') }}">

                            <label class="form-label">What surgery type (RVS Code / Description)</label>
                            <input type="text" name="{{ $key }}_surgery_code"
                                class="form-control mb-2" placeholder="RVS Code"
                                value="{{ old($key.'_surgery_code') }}">
                            <input type="text" name="{{ $key }}_surgery_desc"
                                class="form-control mb-2" placeholder="Description"
                                value="{{ old($key.'_surgery_desc') }}">

                            <label class="form-label">Goal (can be multiple)</label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach(['Diagnostic','Curative','Palliative','Unknown'] as $val)
                                    <div class="form-check">
                                        <input type="checkbox" name="{{ $key }}_goal[]" value="{{ $val }}"
                                            class="form-check-input rounded-circle"
                                            {{ in_array($val, old($key.'_goal', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label">{{ $val }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <label class="form-label mt-2">Is there medically confirmed adverse event?</label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach(['None','Minor','Major','Serious','Unknown'] as $val)
                                    <div class="form-check">
                                        <input type="radio" name="{{ $key }}_adverse_event"
                                            value="{{ $val }}"
                                            class="form-check-input rounded-circle"
                                            {{ old($key.'_adverse_event') == $val ? 'checked' : '' }}>
                                        <label class="form-check-label">{{ $val }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <!-- ================= ANTI-CANCER DRUG ================= -->
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="fw-bold">Anti-Cancer Drug</h5>
                @foreach([
                    'first'=>'First Line',
                    'second'=>'Second Line',
                    'third'=>'Third Line',
                    'fourth'=>'Fourth Line'
                ] as $key=>$label)
                    <div class="border rounded p-3 mb-3">
                        <label class="form-label">{{ $key == "first" ? 'Anti-cancer Drug' : $label.' : Anti-Cancer Drug' }}</label>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_drug" value="Yes" class="form-check-input rounded-circle"
                                   onclick="toggleSection('{{ $key }}DrugDetails')"
                                   {{ old($key.'_drug') == 'Yes' ? 'checked' : '' }}>
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_drug" value="No" class="form-check-input rounded-circle"
                                   onclick="toggleSection('{{ $key }}DrugDetails')"
                                   {{ old($key.'_drug','No') == 'No' ? 'checked' : '' }}>
                            <label class="form-check-label">No</label>
                        </div>

                        <div id="{{ $key }}DrugDetails" class="d-none mt-2">
                            <label class="form-label">Purpose of Drug Administration</label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach(['Neoadjuvant','Adjuvant','Palliative'] as $val)
                                    <div class="form-check">
                                        <input type="radio" name="{{ $key }}_purpose_administration" value="{{ $val }}" class="form-check-input rounded-circle"
                                               {{ old($key.'_purpose_administration') == $val ? 'checked' : '' }}>
                                        <label class="form-check-label">{{ $val }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <label class="form-label mt-2">Drug Type/s (can be multiple)</label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach(['Cytotoxic','Hormonal','Immunologic','Targeted'] as $val)
                                    <div class="form-check">
                                        <input type="checkbox" name="{{ $key }}_drug_type[]" value="{{ $val }}" class="form-check-input rounded-circle"
                                               {{ in_array($val, old($key.'_drug_type', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label">{{ $val }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <label class="form-label mt-2">Drug Regimen</label>
                            <input type="text" name="{{ $key }}_drug_regimen" class="form-control" value="{{ old($key.'_drug_regimen') }}">

                            <label class="form-label mt-2">Drug Response</label>
                            <input type="text" name="{{ $key }}_drug_response" class="form-control" value="{{ old($key.'_drug_response') }}">

                            <label class="form-label mt-2">Is there medically confirmed adverse event?</label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach(['None','Minor','Major','Serious','Unknown'] as $val)
                                    <div class="form-check">
                                        <input type="radio" name="{{ $key }}_drug_adverse" value="{{ $val }}" class="form-check-input rounded-circle"
                                               {{ old($key.'_drug_adverse') == $val ? 'checked' : '' }}>
                                        <label class="form-check-label">{{ $val }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- ================= RADIOTHERAPY ================= -->
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="fw-bold">Radiotherapy</h5>
                @foreach([
                    'first'=>'First Course',
                    'second'=>'Second Course',
                    'third'=>'Third Course',
                    'fourth'=>'Fourth Course'
                ] as $key=>$label)
                    <div class="border rounded p-3 mb-3">
                        <label class="form-label">{{ $key == "first" ? 'Radiotherapy' : $label.': Radiotherapy' }}</label>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_radio" value="Yes" class="form-check-input rounded-circle"
                                   onclick="toggleSection('{{ $key }}RadioDetails')"
                                   {{ old($key.'_radio') == 'Yes' ? 'checked' : '' }}>
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_radio" value="No" class="form-check-input rounded-circle"
                                   onclick="toggleSection('{{ $key }}RadioDetails')"
                                   {{ old($key.'_radio','No') == 'No' ? 'checked' : '' }}>
                            <label class="form-check-label">No</label>
                        </div>

                        <div id="{{ $key }}RadioDetails" class="d-none mt-2">
                            <label class="form-label">If yes, indicate type</label>
                            <div class="row">
                                @foreach([
                                    '2D conventional','3DCRT','IMRT/VMAT','IORT',
                                    'Electron Therapy','Brachytherapy','SRS/SRT',
                                    'Proton Therapy'
                                ] as $val)
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input type="checkbox" name="{{ $key }}_radio_type[]" value="{{ $val }}" class="form-check-input rounded-circle"
                                                   {{ in_array($val, old($key.'_radio_type', [])) ? 'checked' : '' }}>
                                            <label class="form-check-label">{{ $val }}</label>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-md-4">
                                    <input type="text" name="{{ $key }}_radio_type_other" placeholder="Please Specify Others" class="form-control" value="{{ old($key.'_radio_type_other') }}">
                                </div>
                            </div>

                            <label class="form-label mt-2">Specify Sequence:</label>
                            <div class="d-flex flex-wrap gap-3">
                                <div class="form-check">
                                    <input type="radio" name="{{ $key }}_sequence" value="Concurrent ChemoRT" class="form-check-input rounded-circle"
                                           {{ old($key.'_sequence') == 'Concurrent ChemoRT' ? 'checked' : '' }}>
                                    <label class="form-check-label">Concurrent ChemoRT</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="{{ $key }}_sequence" value="Sequential" class="form-check-input rounded-circle"
                                           {{ old($key.'_sequence') == 'Sequential' ? 'checked' : '' }}>
                                    <label class="form-check-label">Sequential</label>
                                </div>
                            </div>

                            <label class="form-label mt-2">Specify Treatment Goal:</label>
                            <div class="d-flex flex-wrap gap-3">
                                <div class="form-check"><input type="radio" name="{{ $key }}_treatment_goal" value="Definitive" class="form-check-input rounded-circle" {{ old($key.'_treatment_goal') == 'Definitive' ? 'checked' : '' }}><label class="form-check-label">Definitive</label></div>
                                <div class="form-check"><input type="radio" name="{{ $key }}_treatment_goal" value="Palliative" class="form-check-input rounded-circle" {{ old($key.'_treatment_goal') == 'Palliative' ? 'checked' : '' }}><label class="form-check-label">Palliative</label></div>
                            </div>

                            <label class="form-label mt-2">Is there medically confirmed adverse event?</label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach(['None','Minor','Major','Serious','Unknown'] as $val)
                                    <div class="form-check">
                                        <input type="radio" name="{{ $key }}_radio_adverse" value="{{ $val }}" class="form-check-input rounded-circle"
                                               {{ old($key.'_radio_adverse') == $val ? 'checked' : '' }}>
                                        <label class="form-check-label">{{ $val }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- ================= THERANOSTICS ================= -->
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="fw-bold">Theranostics</h5>
                @foreach([
                    'first'=>'First Line',
                    'second'=>'Second Line',
                    'third'=>'Third Line',
                    'fourth'=>'Fourth Line'
                ] as $key=>$label)
                    <div class="border rounded p-3 mb-3">
                        <label class="form-label">{{ $key == "first" ? 'Theranostics' : $label.': Theranostics' }}</label>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_theranostics" value="Yes" class="form-check-input rounded-circle"
                                   onclick="toggleSection('{{ $key }}TheraDetails')"
                                   {{ old($key.'_theranostics') == 'Yes' ? 'checked' : '' }}>
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_theranostics" value="No" class="form-check-input rounded-circle"
                                   onclick="toggleSection('{{ $key }}TheraDetails')"
                                   {{ old($key.'_theranostics','No') == 'No' ? 'checked' : '' }}>
                            <label class="form-check-label">No</label>
                        </div>

                        <div id="{{ $key }}TheraDetails" class="d-none mt-2">
                            <label class="form-label">If yes, indicate type</label>
                            <div class="row">
                                @foreach([
                                    'Radioactive Iodine Therapy (RAI)','Peptide Receptor Radionuclide Therapy (PRRT)',
                                    'PSMA Radioligand Therapy (PRLT)', 'Selective Internal Radiation Therapy (SIRT)'
                                ] as $val)
                                    <div class="col-md-4 my-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="{{ $key }}_thera_type[]" value="{{ $val }}" class="form-check-input rounded-circle"
                                                   {{ in_array($val, old($key.'_thera_type', [])) ? 'checked' : '' }}>
                                            <label class="form-check-label">{{ $val }}</label>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-md-8 my-2">
                                    <input type="text" placeholder="Please Specify Others" name="{{ $key }}_theranostics_other_specify" class="form-control" value="{{ old($key.'_theranostics_other_specify') }}">
                                </div>
                            </div>

                            <label class="form-label mt-2">Specify the goal</label>
                            <div class="d-flex flex-wrap gap-3">
                                <div class="form-check"><input type="radio" name="{{ $key }}_thera_goal" value="Definitive" class="form-check-input rounded-circle" {{ old($key.'_thera_goal') == 'Definitive' ? 'checked' : '' }}><label class="form-check-label">Definitive</label></div>
                                <div class="form-check"><input type="radio" name="{{ $key }}_thera_goal" value="Palliative" class="form-check-input rounded-circle" {{ old($key.'_thera_goal') == 'Palliative' ? 'checked' : '' }}><label class="form-check-label">Palliative</label></div>
                            </div>

                            <label class="form-label mt-2">Is there medically confirmed adverse event?</label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach(['None','Minor','Major','Serious','Unknown'] as $val)
                                    <div class="form-check">
                                        <input type="radio" name="{{ $key }}_thera_adverse" value="{{ $val }}" class="form-check-input rounded-circle"
                                               {{ old($key.'_thera_adverse') == $val ? 'checked' : '' }}>
                                        <label class="form-check-label">{{ $val }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- ================= OTHER CANCER DIRECTED THERAPIES ================= -->
        <!-- ================= OTHER CANCER DIRECTED THERAPIES ================= -->
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="fw-bold">Other Cancer Directed Therapies</h5>

                <div class="form-check form-check-inline">
                    <input type="radio" name="other_cancer" value="Yes" class="form-check-input rounded-circle"
                        onclick="toggleSection('OtherCancerDetails')"
                        {{ old('other_cancer') == 'Yes' ? 'checked' : '' }}>
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="other_cancer" value="No" class="form-check-input rounded-circle"
                        onclick="toggleSection('OtherCancerDetails')"
                        {{ old('other_cancer','No') == 'No' ? 'checked' : '' }}>
                    <label class="form-check-label">No</label>
                </div>

                <div id="OtherCancerDetails" class="{{ old('other_cancer') == 'Yes' ? '' : 'd-none' }} mt-2">
                    @foreach([
                        'Blood Transfusion','Cryoablation','Embolization','Radiofrequency ablation',
                        'Transarterial chemoembolization','Transplant'
                    ] as $val)
                        <div class="form-check">
                            <input type="checkbox" name="other_cancer_type[]" value="{{ $val }}" class="form-check-input rounded-circle"
                                {{ in_array($val, old('other_cancer_type', [])) ? 'checked' : '' }}>
                            <label class="form-check-label">{{ $val }}</label>
                        </div>
                    @endforeach
                    <input type="text" name="cancer_type_other_specify" placeholder="Please Specify Others"
                        class="form-control mt-2" value="{{ old('cancer_type_other_specify') }}">
                </div>
            </div>
        </div>


        <!-- ================= REMARKS ================= -->
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="fw-bold">Remarks</h5>
                <textarea name="remarks" class="form-control">{{ old('remarks') }}</textarea>
            </div>
        </div>

        <!-- ================= SUBMIT ================= -->
        <div class="card-footer text-end mt-3">
            <button type="reset" class="btn btn-secondary rounded-0">Reset</button>
            <button type="button" onclick="handleSubmit()" class="btn btn-primary rounded-0">Submit</button>
        </div>

    </form>
@endsection

@section("script")
<script>
function toggleSection(id) {
    const div = document.getElementById(id);
    if (!div) return;

    // Normalize ID (capitalize-insensitive matching)
    const match = id.match(/^(first|second|third|fourth)?(Surgery|Drug|Radio|Thera|OtherCancer)Details$/i);
    if (!match) return;

    const prefix = match[1] || '';
    const type = match[2].toLowerCase();

    let inputName = '';
    switch (type) {
        case 'surgery': inputName = `${prefix}_surgery`; break;
        case 'drug': inputName = `${prefix}_drug`; break;
        case 'radio': inputName = `${prefix}_radio`; break;
        case 'thera': inputName = `${prefix}_theranostics`; break;
        case 'othercancer': inputName = `other_cancer`; break;
    }

    const yesRadio = document.querySelector(`input[name="${inputName}"][value="Yes"]`);
    const noRadio = document.querySelector(`input[name="${inputName}"][value="No"]`);

    if (yesRadio && yesRadio.checked) {
        div.classList.remove('d-none');
    } else if (noRadio && noRadio.checked) {
        div.classList.add('d-none');
    }
}

// Re-run toggles on page load for old() values
window.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('div[id$="Details"]').forEach(div => toggleSection(div.id));
});
</script>
@endsection


