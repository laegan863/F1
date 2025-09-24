@extends('index')
@section("title", "Cancer Treatment History")
@section("nav_title", "CANCER TREATMENT HISTORY")
@section("content")
    <form id="form" method="POST" action="" class="p-2">
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
                        <label class="form-label">{{ $label }}</label>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_surgery" value="1" class="form-check-input rounded-circle" onclick="toggleSection('{{ $key }}SurgeryDetails')">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_surgery" value="2" class="form-check-input rounded-circle" onclick="toggleSection('{{ $key }}SurgeryDetails')" checked>
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
                                @foreach(['1'=>'Diagnostic','2'=>'Curative','3'=>'Palliative','5'=>'Unknown'] as $val=>$goal)
                                    <div class="form-check">
                                        <input type="checkbox" name="{{ $key }}_goal[]" value="{{ $val }}" class="form-check-input rounded-circle">
                                        <label class="form-check-label">{{ $goal }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <label class="form-label mt-2">Is there medically confirmed adverse event?</label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach(['0'=>'None','2'=>'Minor','3'=>'Major','4'=>'Serious','5'=>'Unknown'] as $val=>$event)
                                    <div class="form-check">
                                        <input type="radio" name="{{ $key }}_adverse_event" value="{{ $val }}" class="form-check-input rounded-circle">
                                        <label class="form-check-label">{{ $event }}</label>
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
                        <label class="form-label">{{ $label }} Anti-Cancer Drug</label>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_drug" value="1" class="form-check-input rounded-circle" onclick="toggleSection('{{ $key }}DrugDetails')">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_drug" value="2" class="form-check-input rounded-circle" onclick="toggleSection('{{ $key }}DrugDetails')" checked>
                            <label class="form-check-label">No</label>
                        </div>

                        <div id="{{ $key }}DrugDetails" class="d-none mt-2">
                            <label class="form-label">Purpose of Drug Administration</label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach(['1'=>'Neoadjuvant','2'=>'Adjuvant','3'=>'Palliative'] as $val=>$purpose)
                                    <div class="form-check">
                                        <input type="radio" name="{{ $key }}_purpose" value="{{ $val }}" class="form-check-input rounded-circle">
                                        <label class="form-check-label">{{ $purpose }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <label class="form-label mt-2">Drug Type/s (can be multiple)</label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach(['1'=>'Cytotoxic','2'=>'Hormonal','3'=>'Immunologic','4'=>'Targeted'] as $val=>$type)
                                    <div class="form-check">
                                        <input type="checkbox" name="{{ $key }}_drug_type[]" value="{{ $val }}" class="form-check-input rounded-circle">
                                        <label class="form-check-label">{{ $type }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <label class="form-label mt-2">Drug Regimen</label>
                            <input type="text" name="{{ $key }}_drug_regimen" class="form-control">

                            <label class="form-label mt-2">Drug Response</label>
                            <input type="text" name="{{ $key }}_drug_response" class="form-control">

                            <label class="form-label mt-2">	Is there medically confirmed adversed event?</label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach(['0'=>'None','1'=>'Minor','3'=>'Major','4'=>'Serious','5'=>'Unknown'] as $val=>$resp)
                                    <div class="form-check">
                                        <input type="radio" name="{{ $key }}_drug_response" value="{{ $val }}" class="form-check-input rounded-circle">
                                        <label class="form-check-label">{{ $resp }}</label>
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
                        <label class="form-label">{{ $label }} Radiotherapy</label>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_radio" value="1" class="form-check-input rounded-circle" onclick="toggleSection('{{ $key }}RadioDetails')">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_radio" value="2" class="form-check-input rounded-circle" onclick="toggleSection('{{ $key }}RadioDetails')" checked>
                            <label class="form-check-label">No</label>
                        </div>

                        <div id="{{ $key }}RadioDetails" class="d-none mt-2">
                            <label class="form-label">If yes, indicate type</label>
                            <div class="row">
                                @foreach([
                                    1=>'2D conventional',2=>'3DCRT',3=>'IMRT/VMAT',4=>'IORT',
                                    5=>'Electron Therapy',6=>'Brachytherapy',7=>'SRS/SRT',
                                    8=>'Proton Therapy'
                                ] as $val=>$type)
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input type="checkbox" name="{{ $key }}_radio_type[]" value="{{ $val }}" class="form-check-input rounded-circle">
                                            <label class="form-check-label">{{ $type }}</label>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input type="text" name="radio_type_other" value="" placeholder="Please Specify Others" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <label class="form-label mt-2">Specify Sequence:</label>
                            <div class="d-flex flex-wrap gap-3">
                                <div class="form-check">
                                    <input type="radio" name="{{ $key }}_sequence" value="1" class="form-check-input rounded-circle">
                                    <label class="form-check-label">Concurrent ChemoRT</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="{{ $key }}_sequence" value="2" class="form-check-input rounded-circle">
                                    <label class="form-check-label">Sequential</label>
                                </div>
                            </div>

                            <label class="form-label mt-2">Specify Treatment Goal:</label>
                            <div class="d-flex flex-wrap gap-3">
                                <div class="form-check"><input type="radio" name="{{ $key }}treatment_goal" value="1" class="form-check-input rounded-circle"><label class="form-check-label">Definitive</label></div>
                                <div class="form-check"><input type="radio" name="{{ $key }}treatment_goal" value="2" class="form-check-input rounded-circle"><label class="form-check-label">Palliative</label></div>
                            </div>

                            <label class="form-label mt-2">Is there medically confirmed adversed event?</label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach(['0'=>'None','2'=>'Minor','3'=>'Major','4'=>'Serious','5'=>'Unknown'] as $val=>$event)
                                    <div class="form-check">
                                        <input type="radio" name="{{ $key }}_radio_adverse" value="{{ $val }}" class="form-check-input rounded-circle">
                                        <label class="form-check-label">{{ $event }}</label>
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
                        <label class="form-label">{{ $label }} Theranostics</label>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_thera" value="1" class="form-check-input rounded-circle" onclick="toggleSection('{{ $key }}TheraDetails')">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_thera" value="2" class="form-check-input rounded-circle" onclick="toggleSection('{{ $key }}TheraDetails')" checked>
                            <label class="form-check-label">No</label>
                        </div>

                        <div id="{{ $key }}TheraDetails" class="d-none mt-2">
                            <label class="form-label">If yes, indicate type</label>
                            <div class="row">
                                @foreach([
                                    1=>'Radioactive Iodine Therapy (RAI)',2=>'Peptide Receptor Radionuclide Therapy (PRRT)',
                                    3=>'PSMA Radioligand Therapy (PRLT)', 4=>'Selective Internal Radiaton Therapy (SIRT)'
                                ] as $val=>$type)
                                    <div class="col-md-4 my-2">
                                        <div class="form-check">
                                            <input type="checkbox" name="{{ $key }}_thera_type[]" value="{{ $val }}" class="form-check-input rounded-circle">
                                            <label class="form-check-label">{{ $type }}</label>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-md-8 my-2">
                                    <div class="form-check">
                                        <input type="text" placeholder="Please Specify Others" name="theranostics_other_specify" value="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <label class="form-label mt-2">Specify the goal</label>
                            <div class="d-flex flex-wrap gap-3">
                                <div class="form-check"><input type="radio" name="{{ $key }}_thera_goal" value="1" class="form-check-input rounded-circle"><label class="form-check-label">Definitive</label></div>
                                <div class="form-check"><input type="radio" name="{{ $key }}_thera_goal" value="2" class="form-check-input rounded-circle"><label class="form-check-label">Palliative</label></div>
                            </div>

                            <label class="form-label mt-2">Is there medically confirmed adverse event?</label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach(['0'=>'None','2'=>'Minor','3'=>'Major','4'=>'Serious','5'=>'Unknown'] as $val=>$event)
                                    <div class="form-check">
                                        <input type="radio" name="{{ $key }}_thera_adverse" value="{{ $val }}" class="form-check-input rounded-circle">
                                        <label class="form-check-label">{{ $event }}</label>
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
                    <input type="radio" name="other_cancer" value="1" class="form-check-input rounded-circle" onclick="toggleSection('otherCancerDetails')">
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="other_cancer" value="2" class="form-check-input rounded-circle" onclick="toggleSection('otherCancerDetails')" checked>
                    <label class="form-check-label">No</label>
                </div>

                <div id="otherCancerDetails" class="d-none mt-2">
                    @foreach([
                        1=>'Blood Transfusion',2=>'Cryoablation',3=>'Embolization',4=>'Radiofrequency ablation',
                        5=>'Transarterial chemoembolization',6=>'Transplant'
                    ] as $val=>$therapy)
                        <div class="form-check">
                            <input type="checkbox" name="other_cancer_type[]" value="{{ $val }}" class="form-check-input rounded-circle">
                            <label class="form-check-label">{{ $therapy }}</label>
                        </div>
                    @endforeach
                    <div class="form-check">
                        <input type="text" name="cancer_type_other_specify" value="" placeholder="Please Specify Others" class="form-control">
                    </div>
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
            const yesSelected = event.target.value === '1';
            section.classList.toggle('d-none', !yesSelected);
        }
    }
</script>
@endsection
