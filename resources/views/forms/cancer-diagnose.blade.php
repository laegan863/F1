@extends('index')
@section("title", "Cancer Diagnosis Profile")
@section("nav_title", "PROFILE OF CANCER DIAGNOSIS OF PATIENT FORM")
@section("content")
<form id="form" method="POST" action="{{ route('submit-cancer-diagnose-data') }}">
    @csrf
    <div class="card-body p-5">

        {{-- ================= Q43: More than 1 active Primary Cancer Sites ================= --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Are there more than 1 active Primary Cancer Site(s)?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input rounded-circle" type="radio"
                       name="multiple_sites" value="yes"
                       onclick="handleMultipleSite('yes')"
                       {{ old('multiple_sites') == 'yes' ? 'checked' : '' }}>
                <label class="form-check-label">Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input rounded-circle" type="radio"
                       name="multiple_sites" value="no"
                       onclick="handleMultipleSite('no')"
                       {{ old('multiple_sites', 'no') == 'no' ? 'checked' : '' }}>
                <label class="form-check-label">No</label>
            </div>
        </div>

        {{-- ================= Q44–45: Primary Cancer Site ================= --}}
        <div id="active_primary_cancer" class="{{ old('multiple_sites') == 'yes' ? '' : 'd-none' }}">
            <div class="mb-3">
                <label class="form-label fw-bold">Primary Cancer Site Number</label>
                <input type="number" class="form-control"
                       name="primary_site_number" min="1"
                       value="{{ old('primary_site_number') }}">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Primary Cancer Site</label>
                <div class="row">
                    @php
                        $sites = [
                            "Adrenal","Anus","Biliary Tract",
                            "Blood - Acute Lymphocytic Leukemia",
                            "Blood - Acute Myelogenous Leukemia",
                            "Blood - Chronic Lymphocytic Leukemia",
                            "Blood - Chronic Myelogenous Leukemia",
                            "Blood - Myelodysplastic Syndromes",
                            "Blood - Plasma Cell Disorders",
                            "Bone","Brain (CNS)","Breast","Cervix","Colon",
                            "Esophagus","Eyes and Orbit","Gallbladder",
                            "Gastroesophageal Junction","Hodgkin Lymphoma",
                            "Hypopharynx","Kaposi Sarcoma","Kidney","Larynx",
                            "Leukemia","Lip/Oral Cavity","Liver","Lung",
                            "Melanoma of Skin","Mesothelioma","Multiple Myeloma",
                            "Nasopharynx","Non-Hodgkin Lymphoma","Oral Cavity",
                            "Oropharynx","Ovary","Pancreas","Paranasal Sinus",
                            "Peritoneal","Prostate","Rectum","Renal Pelvis/Ureters",
                            "Salivary Glands","Skin","Small Bowel",
                            "Soft Tissue Sarcoma","Spinal Cord","Stomach","Testis",
                            "Thymus","Thyroid","Unknown Primary (Occult Primary)",
                            "Urinary Bladder","Uterus","Vagina","Vulva"
                        ];
                    @endphp
                    @foreach($sites as $index => $site)
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input rounded-circle" type="checkbox"
                                   name="cancer_sites[]" value="{{ $site }}"
                                   id="site{{ $index }}"
                                   {{ in_array($site, old('cancer_sites', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="site{{ $index }}">{{ $site }}</label>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-md-12 mt-2">
                        <label class="form-label">Others, specify:</label>
                        <input type="text" name="cancer_site_other"
                               class="form-control mt-1"
                               value="{{ old('cancer_site_other') }}">
                    </div>
                </div>
            </div>
        </div>

        {{-- ================= Q46: Laterality ================= --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Laterality</label><br>
            @foreach(['Left','Right','Bilateral','Not Applicable'] as $lat)
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input rounded-circle"
                           name="laterality" value="{{ $lat }}"
                           {{ old('laterality') == $lat ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $lat }}</label>
                </div>
            @endforeach
        </div>

        {{-- ================= Q47: ICD-10 ================= --}}
        <div class="mb-3">
            <label class="form-label fw-bold">ICD-10</label>
            <input type="text" class="form-control"
                   name="icd_10" placeholder="e.g. C50.0"
                   value="{{ old('icd_10') }}">
        </div>

        {{-- ================= Q48: Histologic Diagnosis ================= --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Histologic Diagnosis</label>
            <input type="text" class="form-control"
                   name="histologic_diagnosis" placeholder="Enter diagnosis"
                   value="{{ old('histologic_diagnosis') }}">
        </div>

        {{-- ================= Q49: Clinical Stage ================= --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Group Clinical Stage <small class="text-danger">(Optional)</small></label><br>
            @foreach(['Stage 0','Stage I','Stage II','Stage III','Stage IV','Unknown'] as $stage)
                <div class="form-check form-check-inline">
                    <input class="form-check-input rounded-circle" type="radio"
                           name="clinical_stage" value="{{ $stage }}"
                           {{ old('clinical_stage') == $stage ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $stage }}</label>
                </div>
            @endforeach
        </div>

        {{-- ================= Q50–53: TNM ================= --}}
        <div class="row mb-3">
            <div class="col-md-3">
                <label class="form-label fw-bold">T (Tumor) <small class="text-danger">optional</small></label>
                <input type="text" class="form-control" name="t_stage" value="{{ old('t_stage') }}">
            </div>
            <div class="col-md-3">
                <label class="form-label fw-bold">N (Nodes) <small class="text-danger">optional</small></label>
                <input type="text" class="form-control" name="n_stage" value="{{ old('n_stage') }}">
            </div>
            <div class="col-md-3">
                <label class="form-label fw-bold">M (Metastasis) <small class="text-danger">optional</small></label>
                <input type="text" class="form-control" name="m_stage" value="{{ old('m_stage') }}">
            </div>
            <div class="col-md-3">
                <label class="form-label fw-bold">S (Staging) <small class="text-danger">optional</small></label>
                <input type="text" class="form-control" name="s_stage" value="{{ old('s_stage') }}">
            </div>
        </div>

        {{-- ================= Q54: Other Staging Used ================= --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Other Staging Used <small class="text-danger">(Optional)</small></label>
            <div class="row">
                @php
                    $staging_systems = [
                        "FIGO Staging System (International Federation of Gynecology and Obstetrics)",
                        "Ann Arbor Staging System",
                        "Breslow Thickness and Clark Level (for Skin Cancer)",
                        "Durie-Salmon Staging System",
                        "Biomarker/Hormone Receptor Status",
                        "The Child-Pugh Score (for Liver Cancer)",
                        "Enneking Classification",
                        "Musculoskeletal Tumor Society (MSTS) classification",
                        "Nottingham Grading System",
                        "Not Applicable"
                    ];
                @endphp
                @foreach($staging_systems as $i => $system)
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input rounded-circle" type="checkbox"
                               name="other_staging[]" value="{{ $system }}"
                               id="staging{{ $i }}"
                               {{ in_array($system, old('other_staging', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="staging{{ $i }}">{{ $system }}</label>
                    </div>
                </div>
                @endforeach
                <div class="col-md-6">
                    <div class="form-check">
                        <input placeholder="Other Remarks" class="form-control" type="text" name="other_remarks" value="{{ old('other_remarks') }}">
                    </div>
                </div>
            </div>
        </div>

        {{-- ================= Q55: Current Status of the Cancer ================= --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Current Status of the Cancer</label><br>
            @php
                $statuses = [
                    "Newly diagnosed",
                    "Old case, not treated",
                    "Old case, completed 1st treatment, now recurrent",
                    "Old case, incomplete treatment, now progressive",
                    "Old case, unknown treatment"
                ];
            @endphp
            @foreach($statuses as $i => $status)
                <div class="form-check">
                    <input class="form-check-input rounded-circle" type="radio"
                           name="cancer_status" value="{{ $status }}"
                           id="status{{ $i }}"
                           {{ old('cancer_status') == $status ? 'checked' : '' }}>
                    <label class="form-check-label" for="status{{ $i }}">{{ $status }}</label>
                </div>
            @endforeach
        </div>

    </div>

    <div class="card-footer text-end">
        <button type="reset" class="btn btn-secondary rounded-0">Reset</button>
        <button type="button" onclick="handleSubmit()" class="btn btn-primary rounded-0">Submit</button>
    </div>
</form>
@endsection

@section('script')
<script>
    function handleMultipleSite(value) {
        let active_primary_cancer = document.getElementById('active_primary_cancer');
        if (value === "yes") {
            active_primary_cancer.classList.remove('d-none');
        } else {
            active_primary_cancer.classList.add('d-none');
        }
    }
</script>
@endsection
