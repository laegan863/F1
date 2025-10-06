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
                    @foreach(['Yes','No'] as $opt)
                        <div class="form-check">
                            <input type="radio" name="radiotherapy" value="{{ $opt }}" 
                                class="form-check-input rounded-circle"
                                onclick="toggleRadiotherapy()"
                                {{ old('radiotherapy','No')==$opt ? 'checked' : '' }}>
                            <label class="form-check-label">{{ $opt }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Radiotherapy Details -->
            <div id="radiotherapyDetails" class="{{ old('radiotherapy')=='Yes' ? '' : 'd-none' }}">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Date Start</label>
                        <input type="date" name="radio_date_start" class="form-control" value="{{ old('radio_date_start') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Date Ended</label>
                        <input type="date" name="radio_date_end" class="form-control" value="{{ old('radio_date_end') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <label class="form-label">Total planned dose (cGy)</label>
                        <input type="text" name="radio_total_dose" class="form-control" value="{{ old('radio_total_dose') }}">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Dose per fraction</label>
                        <input type="text" name="radio_dose_fraction" class="form-control" value="{{ old('radio_dose_fraction') }}">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Total planned fractions</label>
                        <input type="text" name="radio_total_fractions" class="form-control" value="{{ old('radio_total_fractions') }}">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Total number of days</label>
                        <input type="text" name="radio_total_days" class="form-control" value="{{ old('radio_total_days') }}">
                    </div>
                </div>

                <!-- Body Site Target -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Body site target:</label>
                    <div class="row">
                        @php
                            $bodySites1 = ['Adrenal','Anus','Biliary Tract','Blood - Acute Lymphocytic Leukemia',
                                'Blood - Acute Myelogenous Leukemia','Blood - Chronic Lymphocytic Leukemia',
                                'Blood - Chronic Myelogenous Leukemia','Blood - Myelodysplastic Syndromes',
                                'Blood - Plasma Cell Disorders','Bone','Brain (CNS)','Breast','Cervix',
                                'Colon','Esophagus','Eyes and Orbit','Gallbladder',
                                'Gastroesophageal Junction','Hodgkin Lymphoma','Hypopharynx'];
                            $bodySites2 = ['Kaposi Sarcoma','Kidney','Larynx','Leukemia','Lip/Oral Cavity',
                                'Liver','Lung','Melanoma of Skin','Mesothelioma','Multiple Myeloma',
                                'Nasopharynx','Non-Hodgkin Lymphoma','Oral Cavity','Oropharynx',
                                'Ovary','Pancreas','Paranasal Sinus','Peritoneal','Prostate','Rectum'];
                            $bodySites3 = ['Renal Pelvis/Ureters','Salivary Glands','Skin','Small Bowel',
                                'Soft Tissue Sarcoma','Spinal Cord','Stomach','Testis','Thymus',
                                'Thyroid','Unknown Primary (Occult Primary)','Urinary Bladder','Uterus',
                                'Vagina','Vulva','Others'];
                        @endphp

                        @foreach([$bodySites1,$bodySites2,$bodySites3] as $idx => $sites)
                            <div class="col-md-4">
                                @foreach($sites as $label)
                                    <div class="form-check">
                                        <input type="checkbox" name="radio_body_site[]" value="{{ $label }}"
                                            class="form-check-input rounded-circle"
                                            {{ in_array($label, old('radio_body_site',[])) ? 'checked' : '' }}
                                            onchange="if(this.value==='Others'){document.getElementById('radioBodyOther').disabled=!this.checked}">
                                        <label class="form-check-label">{{ $label }}</label>
                                    </div>
                                    @if($label=='Others')
                                        <input type="text" name="radio_body_site_other" id="radioBodyOther" 
                                            class="form-control mt-1" placeholder="Specify"
                                            value="{{ old('radio_body_site_other') }}"
                                            {{ in_array('Others', old('radio_body_site',[])) ? '' : 'disabled' }}>
                                    @endif
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Type of Radiotherapy -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Type of radiotherapy:</label>
                    <div class="row">
                        @foreach(['2D conventional','3DCRT','Brachytherapy','Electron Therapy','IMRT/IMAT/Helical',
                                  'IORT','Heavy Particles','Proton Therapy','Stereotactic Radiosurgery / Radiotherapy','Others'] as $label)
                            <div class="col-md-6 mb-1">
                                <div class="form-check">
                                    <input type="checkbox" name="radio_type[]" value="{{ $label }}" 
                                        class="form-check-input rounded-circle"
                                        {{ in_array($label, old('radio_type',[])) ? 'checked' : '' }}
                                        onchange="if(this.value==='Others'){document.getElementById('radioTypeOther').disabled=!this.checked}">
                                    <label class="form-check-label">{{ $label }}</label>
                                </div>
                                @if($label=='Others')
                                    <input type="text" name="radio_type_other" id="radioTypeOther" 
                                        class="form-control mt-1" placeholder="Specify"
                                        value="{{ old('radio_type_other') }}"
                                        {{ in_array('Others', old('radio_type',[])) ? '' : 'disabled' }}>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Goal -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Goal of radiotherapy:</label>
                    <div class="d-flex gap-3">
                        @foreach(['Curative','Palliative'] as $opt)
                            <div class="form-check">
                                <input type="radio" name="radio_goal" value="{{ $opt }}" 
                                    class="form-check-input rounded-circle"
                                    {{ old('radio_goal')==$opt ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $opt }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Theranostics -->
            <h5 class="fw-bold mt-3">THERANOSTICS</h5>
            <div class="mb-3">
                <label class="form-label fw-bold">Theranostics?</label>
                <div class="d-flex flex-wrap gap-3">
                    @foreach(['Yes','No'] as $opt)
                        <div class="form-check">
                            <input type="radio" name="theranostics" value="{{ $opt }}" 
                                class="form-check-input rounded-circle"
                                onclick="toggleTheranostics()"
                                {{ old('theranostics','No')==$opt ? 'checked' : '' }}>
                            <label class="form-check-label">{{ $opt }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Theranostics Details -->
            <div id="theranosticsDetails" class="{{ old('theranostics')=='Yes' ? '' : 'd-none' }}">
                <div class="mb-3">
                    <label class="form-label">If yes, indicate type:</label>
                    @foreach(['Radioactive Iodine Therapy (RAI)','Peptide Receptor Radionuclide Therapy (PRRT)',
                              'PSMA Radioligand Therapy (PRLT)','Selective Internal Radiation Therapy (SIRT)','Others'] as $label)
                        <div class="form-check">
                            <input type="checkbox" name="theranostics_type[]" value="{{ $label }}" 
                                class="form-check-input rounded-circle"
                                {{ in_array($label, old('theranostics_type',[])) ? 'checked' : '' }}
                                onchange="if(this.value==='Others'){document.getElementById('theranosticsOther').disabled=!this.checked}">
                            <label class="form-check-label">{{ $label }}</label>
                        </div>
                        @if($label=='Others')
                            <input type="text" name="theranostics_type_other" id="theranosticsOther" 
                                class="form-control mt-1" placeholder="Specify"
                                value="{{ old('theranostics_type_other') }}"
                                {{ in_array('Others', old('theranostics_type',[])) ? '' : 'disabled' }}>
                        @endif
                    @endforeach
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Total Planned dose</label>
                        <input type="text" name="thera_total_planned" class="form-control" value="{{ old('thera_total_planned') }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Total Dose received</label>
                        <input type="text" name="thera_total_received" class="form-control" value="{{ old('thera_total_received') }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Number of sequences</label>
                        <input type="text" name="thera_sequences" class="form-control" value="{{ old('thera_sequences') }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Goal:</label>
                    <div class="d-flex gap-3">
                        @foreach(['Definitive','Palliative'] as $opt)
                            <div class="form-check">
                                <input type="radio" name="thera_goal" value="{{ $opt }}" 
                                    class="form-check-input rounded-circle"
                                    {{ old('thera_goal')==$opt ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $opt }}</label>
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
    function toggleRadiotherapy() {
        let yes = document.querySelector('input[name="radiotherapy"][value="Yes"]').checked;
        document.getElementById('radiotherapyDetails').classList.toggle('d-none', !yes);
    }
    function toggleTheranostics() {
        let yes = document.querySelector('input[name="theranostics"][value="Yes"]').checked;
        document.getElementById('theranosticsDetails').classList.toggle('d-none', !yes);
    }
    window.onload = function(){
        toggleRadiotherapy();
        toggleTheranostics();
    }
</script>
@endsection
