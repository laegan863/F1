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
                    'first'=>'First Surgery',
                    'second'=>'Second Surgery',
                    'third'=>'Third Surgery',
                    'fourth'=>'Fourth Surgery'
                ] as $key=>$label)
                    <div class="border rounded p-3 mb-3">
                        <label class="form-label">{{ $key == 'first' ? 'Surgery Done?' : $label }}</label>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_surgery" value="Yes" class="form-check-input rounded-circle" onclick="toggleSection('{{ $key }}SurgeryDetails')">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_surgery" value="No" class="form-check-input rounded-circle" onclick="toggleSection('{{ $key }}SurgeryDetails')" checked>
                            <label class="form-check-label">No</label>
                        </div>

                        <div id="{{ $key }}SurgeryDetails" class="d-none mt-2">
                            <label class="form-label">Surgery Date</label>
                            <input type="date" name="{{ $key }}_surgery_date" class="form-control mb-2">

                            <label class="form-label">What surgery type (RVS Code / Description)</label>
                            <input type="text" name="{{ $key }}_surgery_code" class="form-control mb-2" placeholder="RVS Code">
                            <input type="text" name="{{ $key }}_surgery_desc" class="form-control mb-2" placeholder="Description">

                            <label class="form-label">Goal (can be multiple)</label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach(['Diagnostic','Curative','Palliative','Unknown'] as $val)
                                    <div class="form-check">
                                        <input type="checkbox" name="{{ $key }}_goal[]" value="{{ $val }}" class="form-check-input rounded-circle">
                                        <label class="form-check-label">{{ $val }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <label class="form-label mt-2">Is there medically confirmed adverse event?</label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach(['None','Minor','Major','Serious','Unknown'] as $val)
                                    <div class="form-check">
                                        <input type="radio" name="{{ $key }}_adverse_event" value="{{ $val }}" class="form-check-input rounded-circle">
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
                            <input type="radio" name="{{ $key }}_drug" value="Yes" class="form-check-input rounded-circle" onclick="toggleSection('{{ $key }}DrugDetails')">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_drug" value="No" class="form-check-input rounded-circle" onclick="toggleSection('{{ $key }}DrugDetails')" checked>
                            <label class="form-check-label">No</label>
                        </div>

                        <div id="{{ $key }}DrugDetails" class="d-none mt-2">
                            <label class="form-label">Purpose of Drug Administration</label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach(['Neoadjuvant','Adjuvant','Palliative'] as $val)
                                    <div class="form-check">
                                        <input type="radio" name="{{ $key }}_purpose_administration" value="{{ $val }}" class="form-check-input rounded-circle">
                                        <label class="form-check-label">{{ $val }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <label class="form-label mt-2">Drug Type/s (can be multiple)</label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach(['Cytotoxic','Hormonal','Immunologic','Targeted'] as $val)
                                    <div class="form-check">
                                        <input type="checkbox" name="{{ $key }}_drug_type[]" value="{{ $val }}" class="form-check-input rounded-circle">
                                        <label class="form-check-label">{{ $val }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <label class="form-label mt-2">Drug Regimen</label>
                            <input type="text" name="{{ $key }}_drug_regimen" class="form-control">

                            <label class="form-label mt-2">Drug Response</label>
                            <input type="text" name="{{ $key }}_drug_response" class="form-control">

                            <label class="form-label mt-2">Is there medically confirmed adverse event?</label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach(['None','Minor','Major','Serious','Unknown'] as $val)
                                    <div class="form-check">
                                        <input type="radio" name="{{ $key }}_drug_adverse" value="{{ $val }}" class="form-check-input rounded-circle">
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
                            <input type="radio" name="{{ $key }}_radio" value="Yes" class="form-check-input rounded-circle" onclick="toggleSection('{{ $key }}RadioDetails')">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_radio" value="No" class="form-check-input rounded-circle" onclick="toggleSection('{{ $key }}RadioDetails')" checked>
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
                                            <input type="checkbox" name="{{ $key }}_radio_type[]" value="{{ $val }}" class="form-check-input rounded-circle">
                                            <label class="form-check-label">{{ $val }}</label>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-md-4">
                                    <input type="text" name="radio_type_other" placeholder="Please Specify Others" class="form-control">
                                </div>
                            </div>

                            <label class="form-label mt-2">Specify Sequence:</label>
                            <div class="d-flex flex-wrap gap-3">
                                <div class="form-check">
                                    <input type="radio" name="{{ $key }}_sequence" value="Concurrent ChemoRT" class="form-check-input rounded-circle">
                                    <label class="form-check-label">Concurrent ChemoRT</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="{{ $key }}_sequence" value="Sequential" class="form-check-input rounded-circle">
                                    <label class="form-check-label">Sequential</label>
                                </div>
                            </div>

                            <label class="form-label mt-2">Specify Treatment Goal:</label>
                            <div class="d-flex flex-wrap gap-3">
                                <div class="form-check"><input type="radio" name="{{ $key }}_treatment_goal" value="Definitive" class="form-check-input rounded-circle"><label class="form-check-label">Definitive</label></div>
                                <div class="form-check"><input type="radio" name="{{ $key }}_treatment_goal" value="Palliative" class="form-check-input rounded-circle"><label class="form-check-label">Palliative</label></div>
                            </div>

                            <label class="form-label mt-2">Is there medically confirmed adverse event?</label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach(['None','Minor','Major','Serious','Unknown'] as $val)
                                    <div class="form-check">
                                        <input type="radio" name="{{ $key }}_radio_adverse" value="{{ $val }}" class="form-check-input rounded-circle">
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
                            <input type="radio" name="{{ $key }}_theranostics" value="Yes" class="form-check-input rounded-circle" onclick="toggleSection('{{ $key }}TheraDetails')">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_theranostics" value="No" class="form-check-input rounded-circle" onclick="toggleSection('{{ $key }}TheraDetails')" checked>
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
                                            <input type="checkbox" name="{{ $key }}_thera_type[]" value="{{ $val }}" class="form-check-input rounded-circle">
                                            <label class="form-check-label">{{ $val }}</label>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-md-8 my-2">
                                    <input type="text" placeholder="Please Specify Others" name="theranostics_other_specify" class="form-control">
                                </div>
                            </div>

                            <label class="form-label mt-2">Specify the goal</label>
                            <div class="d-flex flex-wrap gap-3">
                                <div class="form-check"><input type="radio" name="{{ $key }}_thera_goal" value="Definitive" class="form-check-input rounded-circle"><label class="form-check-label">Definitive</label></div>
                                <div class="form-check"><input type="radio" name="{{ $key }}_thera_goal" value="Palliative" class="form-check-input rounded-circle"><label class="form-check-label">Palliative</label></div>
                            </div>

                            <label class="form-label mt-2">Is there medically confirmed adverse event?</label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach(['None','Minor','Major','Serious','Unknown'] as $val)
                                    <div class="form-check">
                                        <input type="radio" name="{{ $key }}_thera_adverse" value="{{ $val }}" class="form-check-input rounded-circle">
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
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="fw-bold">Other Cancer Directed Therapies</h5>
                <div class="form-check form-check-inline">
                    <input type="radio" name="other_cancer" value="Yes" class="form-check-input rounded-circle" onclick="toggleSection('otherCancerDetails')">
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="other_cancer" value="No" class="form-check-input rounded-circle" onclick="toggleSection('otherCancerDetails')" checked>
                    <label class="form-check-label">No</label>
                </div>

                <div id="otherCancerDetails" class="d-none mt-2">
                    @foreach([
                        'Blood Transfusion','Cryoablation','Embolization','Radiofrequency ablation',
                        'Transarterial chemoembolization','Transplant'
                    ] as $val)
                        <div class="form-check">
                            <input type="checkbox" name="other_cancer_type[]" value="{{ $val }}" class="form-check-input rounded-circle">
                            <label class="form-check-label">{{ $val }}</label>
                        </div>
                    @endforeach
                    <input type="text" name="cancer_type_other_specify" placeholder="Please Specify Others" class="form-control">
                </div>
            </div>
        </div>

        <!-- ================= REMARKS ================= -->
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="fw-bold">Remarks</h5>
                <textarea name="remarks" class="form-control"></textarea>
            </div>
        </div>

        <!-- ================= SUBMIT ================= -->
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
</script>
@endsection
