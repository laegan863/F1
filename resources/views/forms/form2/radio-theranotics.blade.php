@extends('index')
@section("title", "Radiotherapy & Theranostics")
@section("nav_title", "RADIOTHERAPY & THERANOSTICS")
@section("content")
    <form id="form" method="POST" action="" class="card">
        @csrf

        <div class="card-body">
            <!-- Radiotherapy -->
            <h5 class="fw-bold mt-3">RADIOTHERAPY</h5>
            <div class="mb-3">
                <label class="form-label fw-bold">Ongoing Radiotherapy?</label>
                <div class="d-flex flex-wrap gap-3">
                    <div class="form-check">
                        <input type="radio" name="radiotherapy" value="1" class="form-check-input rounded-circle" onclick="toggleRadiotherapy()">
                        <label class="form-check-label">Yes</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="radiotherapy" value="2" class="form-check-input rounded-circle" onclick="toggleRadiotherapy()" checked>
                        <label class="form-check-label">No</label>
                    </div>
                </div>
            </div>

            <!-- Radiotherapy Details -->
            <div id="radiotherapyDetails" class="d-none">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Date Start</label>
                        <input type="date" name="radio_date_start" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Date Ended</label>
                        <input type="date" name="radio_date_end" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <label class="form-label">Total planned dose (cGy)</label>
                        <input type="text" name="radio_total_dose" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Dose per fraction</label>
                        <input type="text" name="radio_dose_fraction" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Total planned fractions</label>
                        <input type="text" name="radio_total_fractions" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Total number of days</label>
                        <input type="text" name="radio_total_days" class="form-control">
                    </div>
                </div>

                <!-- Body Site Target -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Specify body site target of radiotherapy:</label>
                    <div class="row">
                        <div class="col-md-4">
                            @foreach([
                                1=>'Adrenal',2=>'Anus',3=>'Biliary Tract',4=>'Blood - Acute Lymphocytic Leukemia',
                                5=>'Blood - Acute Myelogenous Leukemia',6=>'Blood - Chronic Lymphocytic Leukemia',
                                7=>'Blood - Chronic Myelogenous Leukemia',8=>'Blood - Myelodysplastic Syndromes',
                                9=>'Blood - Plasma Cell Disorders',10=>'Bone',11=>'Brain (CNS)',12=>'Breast',13=>'Cervix',
                                14=>'Colon',15=>'Esophagus',16=>'Eyes and Orbit',17=>'Gallbladder',
                                18=>'Gastroesophageal Junction',19=>'Hodgkin Lymphoma',20=>'Hypopharynx'
                            ] as $k=>$label)
                                <div class="form-check">
                                    <input type="checkbox" name="radio_body_site[]" value="{{ $k }}" class="form-check-input rounded-circle">
                                    <label class="form-check-label">{{ $label }}</label>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-4">
                            @foreach([
                                21=>'Kaposi Sarcoma',22=>'Kidney',23=>'Larynx',24=>'Leukemia',25=>'Lip/Oral Cavity',
                                26=>'Liver',27=>'Lung',28=>'Melanoma of Skin',29=>'Mesothelioma',30=>'Multiple Myeloma',
                                31=>'Nasopharynx',32=>'Non-Hodgkin Lymphoma',33=>'Oral Cavity',34=>'Oropharynx',
                                35=>'Ovary',36=>'Pancreas',37=>'Paranasal Sinus',38=>'Peritoneal',39=>'Prostate',40=>'Rectum'
                            ] as $k=>$label)
                                <div class="form-check">
                                    <input type="checkbox" name="radio_body_site[]" value="{{ $k }}" class="form-check-input rounded-circle">
                                    <label class="form-check-label">{{ $label }}</label>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-4">
                            @foreach([
                                41=>'Renal Pelvis/Ureters',42=>'Salivary Glands',43=>'Skin',44=>'Small Bowel',
                                45=>'Soft Tissue Sarcoma',46=>'Spinal Cord',47=>'Stomach',48=>'Testis',49=>'Thymus',
                                50=>'Thyroid',51=>'Unknown Primary (Occult Primary)',52=>'Urinary Bladder',53=>'Uterus',
                                54=>'Vagina',55=>'Vulva',56=>'Others, specify:'
                            ] as $k=>$label)
                                <div class="form-check">
                                    <input type="checkbox" name="radio_body_site[]" value="{{ $k }}" class="form-check-input rounded-circle">
                                    <label class="form-check-label">{{ $label }}</label>
                                </div>
                                @if($k == 56)
                                    <input type="text" name="radio_body_site_other" class="form-control mt-1" placeholder="Specify">
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Type of Radiotherapy -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Specific type of radiotherapy administered:</label>
                    <div class="row">
                        @foreach([
                            1=>'2D conventional',2=>'3DCRT',3=>'Brachytherapy',4=>'Electron Therapy',5=>'IMRT/IMAT/Helical',
                            6=>'IORT',7=>'Heavy Particles',8=>'Proton Therapy',9=>'Stereotactic Radiosurgery / Radiotherapy',10=>'Others, specify:'
                        ] as $k=>$label)
                            <div class="col-md-6 mb-1">
                                <div class="form-check">
                                    <input type="checkbox" name="radio_type[]" value="{{ $k }}" class="form-check-input rounded-circle">
                                    <label class="form-check-label">{{ $label }}</label>
                                </div>
                                @if($k == 10)
                                    <input type="text" name="radio_type_other" class="form-control mt-1" placeholder="Specify">
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Goal -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Specify goal of radiotherapy:</label>
                    <div class="d-flex gap-3">
                        <div class="form-check">
                            <input type="radio" name="radio_goal" value="1" class="form-check-input rounded-circle">
                            <label class="form-check-label">Curative</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="radio_goal" value="2" class="form-check-input rounded-circle">
                            <label class="form-check-label">Palliative</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Theranostics -->
            <h5 class="fw-bold mt-3">THERANOSTICS</h5>
            <div class="mb-3">
                <label class="form-label fw-bold">Theranostics?</label>
                <div class="d-flex flex-wrap gap-3">
                    <div class="form-check">
                        <input type="radio" name="theranostics" value="1" class="form-check-input rounded-circle" onclick="toggleTheranostics()">
                        <label class="form-check-label">Yes</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="theranostics" value="2" class="form-check-input rounded-circle" onclick="toggleTheranostics()" checked>
                        <label class="form-check-label">No</label>
                    </div>
                </div>
            </div>

            <div id="theranosticsDetails" class="d-none">
                <div class="mb-3">
                    <label class="form-label">If yes, indicate type:</label>
                    @foreach([
                        1=>'Radioactive Iodine Therapy (RAI)',2=>'Peptide Receptor Radionuclide Therapy (PRRT)',
                        3=>'PSMA Radioligand Therapy (PRLT)',4=>'Selective Internal Radiation Therapy (SIRT)',5=>'Others, specify:'
                    ] as $k=>$label)
                        <div class="form-check">
                            <input type="checkbox" name="theranostics_type[]" value="{{ $k }}" class="form-check-input rounded-circle" onchange="toggleTheranosticsOther({{ $k }})">
                            <label class="form-check-label">{{ $label }}</label>
                        </div>
                        @if($k == 5)
                            <input type="text" name="theranostics_type_other" id="theranosticsOther" class="form-control mt-1" placeholder="Specify" disabled>
                        @endif
                    @endforeach
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Total Planned dose</label>
                        <input type="text" name="thera_total_planned" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Total Dose received</label>
                        <input type="text" name="thera_total_received" class="form-control">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Number of sequence:</label>
                        <input type="text" name="thera_sequences" class="form-control">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">If yes, specify the goal:</label>
                    <div class="d-flex gap-3">
                        <div class="form-check">
                            <input type="radio" name="thera_goal" value="1" class="form-check-input rounded-circle">
                            <label class="form-check-label">Definitive</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="thera_goal" value="2" class="form-check-input rounded-circle">
                            <label class="form-check-label">Palliative</label>
                        </div>
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
    function toggleRadiotherapy() {
        let yes = document.querySelector('input[name="radiotherapy"][value="1"]').checked;
        document.getElementById('radiotherapyDetails').classList.toggle('d-none', !yes);
    }

    function toggleTheranostics() {
        let yes = document.querySelector('input[name="theranostics"][value="1"]').checked;
        document.getElementById('theranosticsDetails').classList.toggle('d-none', !yes);
    }

    function toggleTheranosticsOther(key) {
        if (key === 5) {
            let checked = document.querySelector('input[name="theranostics_type[]"][value="5"]').checked;
            document.getElementById('theranosticsOther').disabled = !checked;
        }
    }

    // Initialize on load
    window.onload = function() {
        toggleRadiotherapy();
        toggleTheranostics();
        toggleTheranosticsOther(5);
    }
</script>
@endsection
