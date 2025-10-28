@extends('index')
@section("title", "Demographics Profile")
@section("nav_title", "SUPPORTIVE/PALLIATIVE CARE FORM")
@section("content")
@php
    $data = App\Models\Demographicprofile::with(['cancerdiagnoses'])
    ->where("hospitalID", request()->query('hospitalID'))
    ->where('status', 1)
    ->first();
@endphp
<style>
    .section-label {
      background-color: #d9d9d9;
      font-weight: bold;
      padding: 6px 10px;
      border-radius: 4px;
      margin-bottom: 10px;
    }
    .form-check-label {
      font-weight: 500;
    }
    .form-section {
      border: 1px solid #ccc;
      border-radius: 6px;
      padding: 15px;
      margin-bottom: 20px;
    }
    .hidden {
      display: none !important;
    }
</style>
    <form id="form" method="POST" action="{{ route('store.palliative-form', ['hospitalID' => request()->query('hospitalID') ]) }}">
        @csrf
        <div class="card rounded-0">
            <div class="card-body rounded-0">
                <!-- Date -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Date <small class="text-danger">*</small></label>
                    <input type="date" name="date" class="form-control" value="{{ old('date', \Carbon\Carbon::now()->format('Y-m-d')) }}">
                </div>
                <!-- Name of Patient -->
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label fw-bold">First Name <small class="text-danger">*</small></label>
                            <input type="text" name="name[firstname]" class="form-control" value="{{ $data->name['firstname'] }}">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label fw-bold">Middle Name</label>
                            <input type="text" name="name[middlename]" class="form-control" value="{{ $data->name['middlename'] }}">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label fw-bold">Last Name <small class="text-danger">*</small></label>
                            <input type="text" name="name[lastname]" class="form-control" value="{{ $data->name['lastname'] }}">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label fw-bold">Suffix</label>
                            <input type="text" name="name[suffix]" class="form-control" value="{{ $data->name['suffix'] }}">
                        </div>
                    </div>

                </div>
                <div class="my-3">
                    <div class="form-section">
                        <div class="section-label">Reason for Supportive-Palliative Care Consult <small class="text-danger">*</small></div>

                        <div class="row g-2">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input rounded-circle" type="checkbox" name="reason[]" id="curative" value="Palliative Care with Curative Intent" {{ in_array('Palliative Care with Curative Intent', old('reason', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="curative">1. Palliative Care with Curative Intent</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input rounded-circle" type="checkbox" name="reason[]" id="active" value="Palliative Care with Active Oncologic Management" {{ in_array('Palliative Care with Active Oncologic Management', old('reason', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="active">2. Palliative Care with Active Oncologic Management</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input rounded-circle" type="checkbox" name="reason[]" id="supportive" value="Supportive Care" {{ in_array('Supportive Care', old('reason', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="supportive">3. Supportive Care</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input rounded-circle" type="checkbox" name="reason[]" id="hospice" value="Hospice Care" {{ in_array('Hospice Care', old('reason', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="hospice">4. Hospice Care</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input rounded-circle" type="checkbox" name="reason[]" id="endoflife" value="End of Life Care" {{ in_array('End of Life Care', old('reason', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="endoflife">5. End of Life Care</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input rounded-circle" type="checkbox" name="reason[]" id="survivorship" value="Survivorship Care" {{ in_array('Survivorship Care', old('reason', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="survivorship">6. Survivorship Care</label>
                                </div>

                                <!-- Other checkbox + dynamic text field -->
                                <div class="form-check d-flex align-items-center flex-wrap">
                                    <input class="form-check-input me-2 rounded-circle" type="checkbox" name="reason[]" id="others" value="Others" {{ in_array('Others', old('reason', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label me-2" for="others">7. Others, specify:</label>
                                    <input type="text" name="reason_others" id="othersInput" class="form-control form-control-sm w-auto {{ in_array('Others', old('reason', [])) ? '' : 'hidden' }}" placeholder="Specify here" value="{{ old('reason_others') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="section-label">Palliative Care Setting <small class="text-danger">*</small></div>

                        <div class="d-flex flex-wrap gap-3">
                            <div class="form-check">
                                <input class="form-check-input rounded-circle" type="checkbox" name="setting[]" id="home" value="Home" {{ in_array('Home', old('setting', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="home">1. Home</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input rounded-circle" type="checkbox" name="setting[]" id="hospital" value="Hospital" {{ in_array('Hospital', old('setting', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="hospital">2. Hospital</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input rounded-circle" type="checkbox" name="setting[]" id="community" value="Community-based" {{ in_array('Community-based', old('setting', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="community">3. Community-based</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============= JAVASCRIPT ============= -->
                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const othersCheckbox = document.getElementById('others');
                    const othersInput = document.getElementById('othersInput');

                    othersCheckbox.addEventListener('change', function() {
                        if (this.checked) {
                            othersInput.classList.remove('hidden');
                            othersInput.focus();
                        } else {
                            othersInput.classList.add('hidden');
                            othersInput.value = '';
                        }
                    });
                });
                </script>

                <div class="mb-3">
                    <label class="form-label fw-bold">Primary Cancer Site <small class="text-danger">*</small></label>
                    <div class="row">
                        <div class="col-md-4">
                            @foreach([
                                '1' => 'Adrenal',
                                '2' => 'Anus',
                                '3' => 'Biliary Tract',
                                '4' => 'Blood - Acute Lymphocytic Leukemia',
                                '5' => 'Blood - Acute Myelogenous Leukemia',
                                '6' => 'Blood - Chronic Lymphocytic Leukemia',
                                '7' => 'Blood - Chronic Myelogenous Leukemia',
                                '8' => 'Blood - Myelodysplastic Syndromes',
                                '9' => 'Blood - Plasma Cell Disorders',
                                '10' => 'Bone',
                                '11' => 'Brain (CNS)',
                                '12' => 'Breast',
                                '13' => 'Cervix',
                                '14' => 'Colon',
                                '15' => 'Esophagus',
                                '16' => 'Eyes and Orbit',
                                '17' => 'Gallbladder',
                                '18' => 'Gastroesophageal Junction',
                                '19' => 'Hodgkin Lymphoma',
                                '20' => 'Hypopharynx'
                            ] as $key => $label)
                                <div class="form-check">
                                    <input type="checkbox" name="primary_cancer_site[]" value="{{ $label }}"
                                        class="form-check-input rounded-circle" {{ in_array($label, $data->cancerdiagnoses['cancer_sites'] ?? []) ? 'checked' : '' }}>
                                    <label class="form-check-label">{{ $label }}</label>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-4">
                            @foreach([
                                '21' => 'Kaposi Sarcoma',
                                '22' => 'Kidney',
                                '23' => 'Larynx',
                                '24' => 'Leukemia',
                                '25' => 'Lip/Oral Cavity',
                                '26' => 'Liver',
                                '27' => 'Lung',
                                '28' => 'Melanoma of Skin',
                                '29' => 'Mesothelioma',
                                '30' => 'Multiple Myeloma',
                                '31' => 'Nasopharynx',
                                '32' => 'Non-Hodgkin Lymphoma',
                                '33' => 'Oral Cavity',
                                '34' => 'Oropharynx',
                                '35' => 'Ovary',
                                '36' => 'Pancreas',
                                '37' => 'Paranasal Sinus',
                                '38' => 'Peritoneal',
                                '39' => 'Prostate',
                                '40' => 'Rectum'
                            ] as $key => $label)
                                <div class="form-check">
                                    <input type="checkbox" name="primary_cancer_site[]" value="{{ $label }}"
                                        class="form-check-input rounded-circle" {{ in_array($label, $data->cancerdiagnoses['cancer_sites'] ?? []) ? 'checked' : '' }}>
                                    <label class="form-check-label">{{ $label }}</label>
                                </div>
                            @endforeach
                        </div>

                        <div class="col-md-4">
                            @foreach([
                                '41' => 'Renal Pelvis/Ureters',
                                '42' => 'Salivary Glands',
                                '43' => 'Skin',
                                '44' => 'Small Bowel',
                                '45' => 'Soft Tissue Sarcoma',
                                '46' => 'Spinal Cord',
                                '47' => 'Stomach',
                                '48' => 'Testis',
                                '49' => 'Thymus',
                                '50' => 'Thyroid',
                                '51' => 'Unknown Primary (Occult Primary)',
                                '52' => 'Urinary Bladder',
                                '53' => 'Uterus',
                                '54' => 'Vagina',
                                '55' => 'Vulva'
                            ] as $key => $label)
                                <div class="form-check">
                                    <input type="checkbox" name="primary_cancer_site[]" value="{{ $key }}"
                                        class="form-check-input rounded-circle" {{ in_array($label, $data->cancerdiagnoses['cancer_sites'] ?? []) ? 'checked' : '' }}>
                                    <label class="form-check-label">{{ $label }}</label>
                                </div>
                            @endforeach
                            <input type="text" name="primary_cancer_site_other" value="{{ $data->cancerdiagnoses['cancer_site_other'] }}" class="form-control mt-1" placeholder="Please Specify:">
                        </div>
                    </div>
                </div>

                <!-- Laterality -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Laterality <small class="text-danger">*</small></label>
                    <div class="d-flex flex-wrap gap-3">
                        @foreach([
                            '1' => 'Left',
                            '2' => 'Right',
                            '3' => 'Bilateral',
                            '4' => 'Not applicable',
                            '5' => 'Unknown'
                        ] as $key => $label)
                            <div class="form-check">
                                <input type="radio" name="laterality" value="{{ $label }}"
                                    class="form-check-input rounded-circle" {{ $data->cancerdiagnoses['laterality'] == $label ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $label }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Histologic Diagnosis -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Histologic Diagnosis <small class="text-danger">*</small></label>
                    <input type="text" name="histologic_diagnosis" class="form-control" value="{{ $data->cancerdiagnoses['histologic_diagnosis'] }}">
                </div>

                <!-- ICD-10 -->
                <div class="mb-3">
                    <label class="form-label fw-bold">ICD-10 <small class="text-danger">*</small></label>
                    <input type="text" name="icd10" class="form-control" value="{{ $data->cancerdiagnoses['icd_10'] }}">
                </div>
                        <!-- Group Clinical Stage -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Group Clinical Stage <small class="text-danger">(Optional)</small></label>
                    <div class="d-flex flex-wrap gap-3">
                        @foreach([
                            '1' => 'Stage 0',
                            '2' => 'Stage I',
                            '3' => 'Stage II',
                            '4' => 'Stage III',
                            '5' => 'Stage IV',
                            '6' => 'Unknown'
                        ] as $key => $label)
                            <div class="form-check">
                                <input type="radio" name="clinical_stage" value="{{ $label }}"
                                    class="form-check-input rounded-circle rounded-circle" {{ $data->cancerdiagnoses['clinical_stage'] == $label ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $label }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- TNM -->
                @php
                    $tumors = [
                        't' => 'T (Tumor)',
                        'n' => 'N (Nodes)',
                        'm' => 'M (Metastasis)',
                        's' => 'S (Staging)'
                    ];
                @endphp
                <div class="row">
                    @foreach ($tumors as $tumor => $t_value )
                        <div class="col-md-3">
                            <label class="form-label fw-bold">{{ $t_value }}<small class="text-danger">(Optional)</small></label>
                            <input type="text" name="stage[{{ $tumor }} _stage]" class="form-control" value="{{ $data->cancerdiagnoses[$tumor.'_stage'] }}">
                        </div>
                    @endforeach
                </div>

                <!-- Other Staging Used -->
                <div class="mb-3 mt-3">
                    <label class="form-label fw-bold">Other Staging Used <small class="text-danger">(Optional)</small></label>
                    <div class="row">
                        <div class="col-md-6">
                            @foreach([
                                '1' => 'FIGO Staging System (International Federation of Gynecology and Obstetrics)',
                                '2' => 'Ann Arbor Staging System',
                                '3' => 'Breslow Thickness and Clark Level (for Skin Cancer)',
                                '4' => 'Durie-Salmon Staging System',
                                '5' => 'Biomarker/Hormone Receptor Status'
                            ] as $key => $label)
                                <div class="form-check">
                                    <input type="checkbox" name="other_staging[]" value="{{ $label }}"
                                        class="form-check-input rounded-circle" {{ isset($data->cancerdiagnoses['other_staging']) && in_array($label, $data->cancerdiagnoses['other_staging']) ? 'checked' : '' }}>
                                    <label class="form-check-label">{{ $label }}</label>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-6">
                            @foreach([
                                '6' => 'The Child-Pugh Score (for Liver Cancer)',
                                '7' => 'Enneking Classification',
                                '8' => 'Musculoskeletal Tumor Society (MSTS) classification',
                                '9' => 'Nottingham Grading System',
                                '10' => 'Not Applicable'
                            ] as $key => $label)
                                <div class="form-check">
                                    <input type="checkbox" name="other_staging[]" value="{{ $label }}"
                                        class="form-check-input rounded-circle" {{ isset($data->cancerdiagnoses['other_staging']) && in_array($label, $data->cancerdiagnoses['other_staging']) ? 'checked' : '' }}>
                                    <label class="form-check-label">{{ $label }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Other Remarks -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Other Remarks <small class="text-danger">*</small></label>
                    <textarea name="other_remarks" class="form-control" rows="2">{{ old('other_remarks', $data->cancerdiagnoses['other_remarks']) }}</textarea>
                </div>

            </div>
        </div>
        <!-- Submit -->
        <div class="card-footer text-end">
            <button type="reset" class="btn btn-secondary rounded-0">Reset</button>
            <button type="button" onclick="handleSubmit()" class="btn btn-primary rounded-0">Submit</button>
        </div>
    </form>
@endsection
@section("script")
@endsection
