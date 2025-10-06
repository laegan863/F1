@extends('index')
@section("title", "Demographics Profile")
@section("nav_title", "PATIENT SURVEILLANCE FORM")
@section("content")
@php
    $data = App\Models\Demographicprofile::with(['cancerdiagnoses'])
        ->where("hospitalID", request()->query('hospitalID'))
        ->where('status', 1)
        ->first();
@endphp

<form id="form" method="POST" action="{{ route('store.f3patientsurveillanceforms', ['hospitalID' => request()->query('hospitalID')]) }}">
    @csrf
    <div class="card rounded-0">
        <div class="card-body rounded-0">

            <!-- Date -->
            <div class="mb-3">
                <label class="form-label fw-bold">Date</label>
                <input type="date" name="date" class="form-control"
                       value="{{ old('date', \Carbon\Carbon::now()->format('Y-m-d')) }}">
            </div>

            <!-- Name of Patient -->
            <div class="mb-3">
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label fw-bold">First Name</label>
                        <input type="text" name="name[firstname]" class="form-control"
                               value="{{ old('name.firstname', $data->name['firstname'] ?? '') }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Middle Name</label>
                        <input type="text" name="name[middlename]" class="form-control"
                               value="{{ old('name.middlename', $data->name['middlename'] ?? '') }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Last Name</label>
                        <input type="text" name="name[lastname]" class="form-control"
                               value="{{ old('name.lastname', $data->name['lastname'] ?? '') }}">
                    </div>
                </div>
            </div>

            <!-- Primary Cancer Site -->
            <div class="mb-3">
                <label class="form-label fw-bold">Primary Cancer Site</label>
                <div class="row">
                    <div class="col-md-4">
                        @foreach([
                            'Adrenal','Anus','Biliary Tract','Blood - Acute Lymphocytic Leukemia',
                            'Blood - Acute Myelogenous Leukemia','Blood - Chronic Lymphocytic Leukemia',
                            'Blood - Chronic Myelogenous Leukemia','Blood - Myelodysplastic Syndromes',
                            'Blood - Plasma Cell Disorders','Bone','Brain (CNS)','Breast','Cervix',
                            'Colon','Esophagus','Eyes and Orbit','Gallbladder','Gastroesophageal Junction',
                            'Hodgkin Lymphoma','Hypopharynx'
                        ] as $label)
                            <div class="form-check">
                                <input type="checkbox" name="primary_cancer_site[]" value="{{ $label }}"
                                    class="form-check-input rounded-circle"
                                    {{ in_array($label, $data->cancerdiagnoses['cancer_sites'] ?? []) ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $label }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-4">
                        @foreach([
                            'Kaposi Sarcoma','Kidney','Larynx','Leukemia','Lip/Oral Cavity','Liver',
                            'Lung','Melanoma of Skin','Mesothelioma','Multiple Myeloma','Nasopharynx',
                            'Non-Hodgkin Lymphoma','Oral Cavity','Oropharynx','Ovary','Pancreas',
                            'Paranasal Sinus','Peritoneal','Prostate','Rectum'
                        ] as $label)
                            <div class="form-check">
                                <input type="checkbox" name="primary_cancer_site[]" value="{{ $label }}"
                                    class="form-check-input rounded-circle"
                                    {{ in_array($label, $data->cancerdiagnoses['cancer_sites'] ?? []) ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $label }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-4">
                        @foreach([
                            'Renal Pelvis/Ureters','Salivary Glands','Skin','Small Bowel',
                            'Soft Tissue Sarcoma','Spinal Cord','Stomach','Testis','Thymus',
                            'Thyroid','Unknown Primary (Occult Primary)','Urinary Bladder',
                            'Uterus','Vagina','Vulva'
                        ] as $label)
                            <div class="form-check">
                                <input type="checkbox" name="primary_cancer_site[]" value="{{ $label }}"
                                    class="form-check-input rounded-circle"
                                    {{ in_array($label, $data->cancerdiagnoses['cancer_sites'] ?? []) ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $label }}</label>
                            </div>
                        @endforeach
                        <input type="text" name="primary_cancer_site_other"
                               value="{{ old('primary_cancer_site_other', $data->cancerdiagnoses['cancer_site_other'] ?? '') }}"
                               class="form-control mt-1" placeholder="Please Specify:">
                    </div>
                </div>
            </div>

            <!-- Laterality -->
            <div class="mb-3">
                <label class="form-label fw-bold">Laterality</label>
                <div class="d-flex flex-wrap gap-3">
                    @foreach(['Left','Right','Bilateral','Not applicable','Unknown'] as $label)
                        <div class="form-check">
                            <input type="radio" name="laterality" value="{{ $label }}"
                                class="form-check-input rounded-circle"
                                {{ old('laterality', $data->cancerdiagnoses['laterality'] ?? '') == $label ? 'checked' : '' }}>
                            <label class="form-check-label">{{ $label }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Histologic Diagnosis -->
            <div class="mb-3">
                <label class="form-label fw-bold">Histologic Diagnosis</label>
                <input type="text" name="histologic_diagnosis" class="form-control"
                       value="{{ old('histologic_diagnosis', $data->cancerdiagnoses['histologic_diagnosis'] ?? '') }}">
            </div>

            <!-- ICD-10 -->
            <div class="mb-3">
                <label class="form-label fw-bold">ICD-10</label>
                <input type="text" name="icd10" class="form-control"
                       value="{{ old('icd10', $data->cancerdiagnoses['icd_10'] ?? '') }}">
            </div>

            <!-- Group Clinical Stage -->
            <div class="mb-3">
                <label class="form-label fw-bold">Group Clinical Stage <span class="text-muted">(Optional)</span></label>
                <div class="d-flex flex-wrap gap-3">
                    @foreach(['Stage 0','Stage I','Stage II','Stage III','Stage IV','Unknown'] as $label)
                        <div class="form-check">
                            <input type="radio" name="clinical_stage" value="{{ $label }}"
                                class="form-check-input rounded-circle"
                                {{ old('clinical_stage', $data->cancerdiagnoses['clinical_stage'] ?? '') == $label ? 'checked' : '' }}>
                            <label class="form-check-label">{{ $label }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- TNM -->
            @php
                $tumors = ['t' => 'T (Tumor)','n' => 'N (Nodes)','m' => 'M (Metastasis)','s' => 'S (Staging)'];
            @endphp
            <div class="row">
                @foreach ($tumors as $tumor => $label)
                    <div class="col-md-3">
                        <label class="form-label fw-bold">{{ $label }} <span class="text-muted">(Optional)</span></label>
                        <input type="text" name="stage[{{ $tumor }}_stage]" class="form-control"
                               value="{{ old('stage.'.$tumor.'_stage', $data->cancerdiagnoses[$tumor.'_stage'] ?? '') }}">
                    </div>
                @endforeach
            </div>

            <!-- Other Staging Used -->
            <div class="mb-3 mt-3">
                <label class="form-label fw-bold">Other Staging Used <span class="text-muted">(Optional)</span></label>
                <div class="row">
                    <div class="col-md-6">
                        @foreach([
                            'FIGO Staging System (International Federation of Gynecology and Obstetrics)',
                            'Ann Arbor Staging System',
                            'Breslow Thickness and Clark Level (for Skin Cancer)',
                            'Durie-Salmon Staging System',
                            'Biomarker/Hormone Receptor Status'
                        ] as $label)
                            <div class="form-check">
                                <input type="checkbox" name="other_staging[]" value="{{ $label }}"
                                    class="form-check-input rounded-circle"
                                    {{ in_array($label, old('other_staging', $data->cancerdiagnoses['other_staging'] ?? [])) ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $label }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        @foreach([
                            'The Child-Pugh Score (for Liver Cancer)',
                            'Enneking Classification',
                            'Musculoskeletal Tumor Society (MSTS) classification',
                            'Nottingham Grading System',
                            'Not Applicable'
                        ] as $label)
                            <div class="form-check">
                                <input type="checkbox" name="other_staging[]" value="{{ $label }}"
                                    class="form-check-input rounded-circle"
                                    {{ in_array($label, old('other_staging', $data->cancerdiagnoses['other_staging'] ?? [])) ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $label }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Other Remarks -->
            <div class="mb-3">
                <label class="form-label fw-bold">Other Remarks</label>
                <textarea name="other_remarks" class="form-control" rows="2">{{ old('other_remarks', $data->cancerdiagnoses['other_remarks'] ?? '') }}</textarea>
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
@endsection
