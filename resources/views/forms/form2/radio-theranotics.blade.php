@extends('index')
@section("title", "Radiotherapy & Theranostics")
@section("nav_title", "RADIOTHERAPY & THERANOSTICS")
@section("content")
    <form id="form" method="POST" action="{{ route('store.radiotheraphy') }}" class="card">
        @csrf

        <div class="card-body">
            <!-- Radiotherapy -->
            <h5 class="fw-bold mt-3">RADIOTHERAPY</h5>
            <div class="mb-3">
                <label class="form-label fw-bold">Ongoing Radiotherapy?</label>
                <div class="d-flex flex-wrap gap-3">
                    <div class="form-check">
                        <input type="radio" name="radiotherapy" value="Yes" class="form-check-input rounded-circle" onclick="toggleRadiotherapy()">
                        <label class="form-check-label">Yes</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="radiotherapy" value="No" class="form-check-input rounded-circle" onclick="toggleRadiotherapy()" checked>
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
                                'Adrenal','Anus','Biliary Tract','Blood - Acute Lymphocytic Leukemia',
                                'Blood - Acute Myelogenous Leukemia','Blood - Chronic Lymphocytic Leukemia',
                                'Blood - Chronic Myelogenous Leukemia','Blood - Myelodysplastic Syndromes',
                                'Blood - Plasma Cell Disorders','Bone','Brain (CNS)','Breast','Cervix',
                                'Colon','Esophagus','Eyes and Orbit','Gallbladder',
                                'Gastroesophageal Junction','Hodgkin Lymphoma','Hypopharynx'
                            ] as $label)
                                <div class="form-check">
                                    <input type="checkbox" name="radio_body_site[]" value="{{ $label }}" class="form-check-input rounded-circle">
                                    <label class="form-check-label">{{ $label }}</label>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-4">
                            @foreach([
                                'Kaposi Sarcoma','Kidney','Larynx','Leukemia','Lip/Oral Cavity',
                                'Liver','Lung','Melanoma of Skin','Mesothelioma','Multiple Myeloma',
                                'Nasopharynx','Non-Hodgkin Lymphoma','Oral Cavity','Oropharynx',
                                'Ovary','Pancreas','Paranasal Sinus','Peritoneal','Prostate','Rectum'
                            ] as $label)
                                <div class="form-check">
                                    <input type="checkbox" name="radio_body_site[]" value="{{ $label }}" class="form-check-input rounded-circle">
                                    <label class="form-check-label">{{ $label }}</label>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-4">
                            @foreach([
                                'Renal Pelvis/Ureters','Salivary Glands','Skin','Small Bowel',
                                'Soft Tissue Sarcoma','Spinal Cord','Stomach','Testis','Thymus',
                                'Thyroid','Unknown Primary (Occult Primary)','Urinary Bladder','Uterus',
                                'Vagina','Vulva','Others'
                            ] as $label)
                                <div class="form-check">
                                    <input type="checkbox" name="radio_body_site[]" value="{{ $label }}" class="form-check-input rounded-circle"
                                           onchange="if(this.value==='Others'){document.getElementById('radioBodyOther').disabled=!this.checked}">
                                    <label class="form-check-label">{{ $label }}</label>
                                </div>
                                @if($label == 'Others')
                                    <input type="text" name="radio_body_site_other" id="radioBodyOther" class="form-control mt-1" placeholder="Specify" disabled>
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
                            '2D conventional','3DCRT','Brachytherapy','Electron Therapy','IMRT/IMAT/Helical',
                            'IORT','Heavy Particles','Proton Therapy','Stereotactic Radiosurgery / Radiotherapy','Others'
                        ] as $label)
                            <div class="col-md-6 mb-1">
                                <div class="form-check">
                                    <input type="checkbox" name="radio_type[]" value="{{ $label }}" class="form-check-input rounded-circle"
                                           onchange="if(this.value==='Others'){document.getElementById('radioTypeOther').disabled=!this.checked}">
                                    <label class="form-check-label">{{ $label }}</label>
                                </div>
                                @if($label == 'Others')
                                    <input type="text" name="radio_type_other" id="radioTypeOther" class="form-control mt-1" placeholder="Specify" disabled>
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
                            <input type="radio" name="radio_goal" value="Curative" class="form-check-input rounded-circle">
                            <label class="form-check-label">Curative</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="radio_goal" value="Palliative" class="form-check-input rounded-circle">
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
                        <input type="radio" name="theranostics" value="Yes" class="form-check-input rounded-circle" onclick="toggleTheranostics()">
                        <label class="form-check-label">Yes</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="theranostics" value="No" class="form-check-input rounded-circle" onclick="toggleTheranostics()" checked>
                        <label class="form-check-label">No</label>
                    </div>
                </div>
            </div>

            <div id="theranosticsDetails" class="d-none">
                <div class="mb-3">
                    <label class="form-label">If yes, indicate type:</label>
                    @foreach([
                        'Radioactive Iodine Therapy (RAI)',
                        'Peptide Receptor Radionuclide Therapy (PRRT)',
                        'PSMA Radioligand Therapy (PRLT)',
                        'Selective Internal Radiation Therapy (SIRT)',
                        'Others'
                    ] as $label)
                        <div class="form-check">
                            <input type="checkbox" name="theranostics_type[]" value="{{ $label }}" class="form-check-input rounded-circle"
                                   onchange="if(this.value==='Others'){document.getElementById('theranosticsOther').disabled=!this.checked}">
                            <label class="form-check-label">{{ $label }}</label>
                        </div>
                        @if($label == 'Others')
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
                            <input type="radio" name="thera_goal" value="Definitive" class="form-check-input rounded-circle">
                            <label class="form-check-label">Definitive</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="thera_goal" value="Palliative" class="form-check-input rounded-circle">
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
        let yes = document.querySelector('input[name="radiotherapy"][value="Yes"]').checked;
        document.getElementById('radiotherapyDetails').classList.toggle('d-none', !yes);
    }

    function toggleTheranostics() {
        let yes = document.querySelector('input[name="theranostics"][value="Yes"]').checked;
        document.getElementById('theranosticsDetails').classList.toggle('d-none', !yes);
    }
</script>
@endsection
