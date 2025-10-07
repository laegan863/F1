@extends('index')
@section("title", "Cancer Diagnosis Outcome & Financial Support")
@section("nav_title", "CANCER DIAGNOSIS OUTCOME & FINANCIAL SUPPORT")
@section("content")
    <form id="form" method="POST" action="{{ route('store-cancer-diagnose-outcome') }}" class="card rounded-0">
        @csrf
        <div class="card-body">
            <!-- Cancer Diagnosis Outcome -->
            <h5 class="fw-bold mt-3">Cancer Diagnosis Outcome</h5>
            <div class="mb-3">
                <label class="form-label">Diagnosis Outcome</label>
                <div class="row">
                    @foreach([
                        'Stable Disease', 'Complete Remission', 'Partial Response',
                        'Disease Progression', 'Recurrent Disease', 'Death (Cancer related)',
                        'Death (treatment related)', 'Death (other cause/Non-Cancer related)',
                        'Ongoing evaluation', 'Ongoing treatment',
                        'Completed treatment', 'Undetermined'
                    ] as $label)
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="diagnosis_outcome[]" value="{{ $label }}"
                                       class="form-check-input rounded-circle"
                                       {{ in_array($label, old('diagnosis_outcome', [])) ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $label }}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Date of Diagnosis Outcome</label>
                <input type="date" name="diagnosis_outcome_date" class="form-control"
                       value="{{ old('diagnosis_outcome_date') }}">
            </div>

            <!-- Cause of Death -->
            <div class="mb-3">
                <label class="form-label">Cause of Death</label>
                <input type="text" name="cause_immediate" class="form-control mb-2" placeholder="Immediate Cause" value="{{ old('cause_immediate') }}">
                <input type="text" name="cause_antecedent" class="form-control mb-2" placeholder="Antecedent Cause" value="{{ old('cause_antecedent') }}">
                <input type="text" name="cause_underlying" class="form-control mb-2" placeholder="Underlying Cause" value="{{ old('cause_underlying') }}">
                <input type="text" name="cause_other" class="form-control mb-2" placeholder="Other significant condition leading to death" value="{{ old('cause_other') }}">
            </div>

            <!-- Financial Support Mechanism -->
            <h5 class="fw-bold mt-3">Financial Support Mechanism</h5>
            <div class="mb-2">
                <label class="form-label">Did patient avail any financial support mechanism?</label>
                <div class="form-check d-inline-block me-3">
                    <input type="radio" name="financial_support" value="Yes"
                           class="form-check-input rounded-circle"
                           onclick="toggleSection('financialDetails')"
                           {{ old('financial_support') == 'Yes' ? 'checked' : '' }}>
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check d-inline-block">
                    <input type="radio" name="financial_support" value="No"
                           class="form-check-input rounded-circle"
                           onclick="toggleSection('financialDetails')"
                           {{ old('financial_support','No') == 'No' ? 'checked' : '' }}>
                    <label class="form-check-label">No</label>
                </div>
            </div>

            <div id="financialDetails" class="{{ old('financial_support') == 'Yes' ? '' : 'd-none' }}">
                <label class="form-label">If yes, specify:</label>
                <div class="row">
                    @foreach([
                        'Discounts under Law (e.g. Senior Citizen, PWD)', 'PhilHealth', 'Health Maintenance Organization (HMO)',
                        'Philippine Charity Sweepstakes Office (PCSO)', 'Assistance to Individuals in Crisis Situations (AICS)', 
                        'Cancer Assistance Fund (CAF)',
                        'Medical Assistance for Indigent and Financially-Incapacitated Patients (MAIFIP)', 
                        'Hospital Assistance Funds', 'Cancer and Supportive-Palliative Medicines Access Program (CSPMAP)',
                        'Philippine Amusement and Gaming Corporation (PAGCOR)', 'Non-Government Org. / Civil Society Org.', 
                        'Clinical Trial', 'Charitable Institutions', 'Private Sector Assistance Program',
                        'None', 'Others'
                    ] as $support)
                        <div class="col-md-6">
                            <div class="form-check">
                                <input type="checkbox" name="financial_type[]" value="{{ $support }}"
                                       class="form-check-input rounded-circle"
                                       onchange="toggleFinancialOther('{{ $support }}')"
                                       {{ in_array($support, old('financial_type', [])) ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $support }}</label>
                            </div>
                            @if($support == 'Others')
                                <input type="text" name="financial_other" id="financialOther"
                                       class="form-control mt-1" placeholder="Specify"
                                       value="{{ old('financial_other') }}"
                                       {{ in_array('Others, specify:', old('financial_type', [])) ? '' : 'disabled' }}>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- CSPMAP Medicines -->
            <div class="mt-3">
                <label class="form-label">If CSPMAP is checked, select the medicines availed:</label>
                <div class="row">
                    @foreach([
                        'Asparaginase 10,000 IU vial','Bicalutamide 50 mg','Bleomycin (as Sulfate) 15 mg vial',
                        'Calcium Folinate 50 mg vial','Capecitabine 500 mg tablet','Carboplatin 150 mg vial',
                        'Carboplatin 450 mg vial','Cisplatin 1 mg/mL, 10 mL vial','Cisplatin 1 mg/mL, 50 mL vial',
                        'Cyclophosphamide 500 mg vial','Cytarabine 100 mg/mL 1 mL vial',
                        'Cytarabine 100 mg/mL 5 mL vial','Dacarbazine 200 mg vial','Dactinomycin 500 mcg vial',
                        'Diazepam 5mg/mL 2 mL amp','Diphenhydramine HCl 50 mg/mL 1 mL','Docetaxel 20 mg/mL vial',
                        'Docetaxel 80 mg/mL 2 mL vial','Doxorubicin 10 mg vial','Doxorubicin 50 mg vial',
                        'Epirubicin 50 mg vial','Etoposide 20 mg/mL 5 mL amp','Fentanyl Citrate 50 mcg/mL 2 mL amp',
                        'Filgrastim (G-CSF) 300 mcg/mL 0.5 mL PFS','Fluorouracil 50 mg/mL 10 mL vial',
                        'Gemcitabine 1 g vial','Gemcitabine 200 mg vial','Goserelin 3.6 mg PFS',
                        'Haloperidol 5 mg/mL 1 mL amp','Hydroxyurea 500 mg capsule','Hyoscine 20 mg/mL 1 mL amp',
                        'Idarubicin 5 mg vial','Ifosfamide 1 g vial','Imatinib 400 mg tablet',
                        'Irinotecan 40 mg/2 mL vial','Irinotecan 100 mg/5 mL vial','Letrozole 2.5 mg tablet',
                        'Leuprolide 3.75 mg vial','Mercaptopurine 50 mg tablet','Mesna 100 mg/mL 4 mL amp',
                        'Methotrexate 2.5 mg tablet','Methotrexate 25 mg/mL 2 mL amp',
                        'Metoclopramide 5 mg/mL 2 mL amp','Morphine 10 mg/mL 1 mL amp',
                        'Morphine 30 mg/mL 1 mL amp','Morphine oral solution 10 mg/5 mL',
                        'Omeprazole 40 mg vial + solvent','Ondansetron 2 mg/mL 2 mL amp',
                        'Ondansetron 2 mg/mL 4 mL amp','Oxaliplatin 5 mg/mL solution',
                        'Paclitaxel 6 mg/mL 17 mL vial','Paclitaxel 6 mg/mL 25 mL vial',
                        'Paclitaxel 30 mg/5 mL vial','Rituximab 10 mg/mL 10 mL vial',
                        'Tamoxifen 20 mg tablet','Trastuzumab 150 mg vial','Trastuzumab 600 mg/5 mL vial',
                        'Vinblastine 1 mg/mL 10 mL vial','Vincristine 1 mg/mL 1 mL vial',
                        'Vincristine 1 mg/mL 2 mL vial','None','Others, specify:'
                    ] as $med)
                        <div class="col-md-6">
                            <div class="form-check">
                                <input type="checkbox" name="cspmap_meds[]" value="{{ $med }}"
                                       class="form-check-input rounded-circle"
                                       onchange="toggleCspmapOther('{{ $med }}')"
                                       {{ in_array($med, old('cspmap_meds', [])) ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $med }}</label>
                            </div>
                            @if($med == 'Others, specify:')
                                <input type="text" name="cspmap_other" id="cspmapOther" class="form-control mt-1"
                                       placeholder="Specify" value="{{ old('cspmap_other') }}"
                                       {{ in_array('Others, specify:', old('cspmap_meds', [])) ? '' : 'disabled' }}>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Other Medicines Availed -->
            <div class="mt-3">
                <label class="form-label">Other Medicines Availed</label>
                <div class="row">
                    @foreach([
                        'All-trans Retinoic Acid (ATRA)','Arsenic','Atezolizumab','Bevacizumab','Blinatumomab',
                        'Bortezomib','Dasatinib','Ivosidenib','Lenvatinib','Osimertinib',
                        'Pegylated Asparaginase','Pembrolizumab','Procarbazine','Ruxolitinib',
                        'Others, specify:'
                    ] as $med)
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="other_meds[]" value="{{ $med }}"
                                       class="form-check-input rounded-circle"
                                       onchange="toggleOtherMed('{{ $med }}')"
                                       {{ in_array($med, old('other_meds', [])) ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $med }}</label>
                            </div>
                            @if($med == 'Others, specify:')
                                <input type="text" name="other_med_other" id="otherMedOther" class="form-control mt-1"
                                       placeholder="Specify" value="{{ old('other_med_other') }}"
                                       {{ in_array('Others, specify:', old('other_meds', [])) ? '' : 'disabled' }}>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Submit -->
        <div class="card-footer text-end mt-3">
            <button type="reset" class="btn btn-secondary rounded-0">Reset</button>
            <button type="button" onclick="handleSubmit()" class="btn btn-primary rounded-0">Submit</button>
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
    function toggleFinancialOther(val) {
        if (val === 'Others, specify:') {
            const checked = document.querySelector('input[name="financial_type[]"][value="Others, specify:"]').checked;
            document.getElementById('financialOther').disabled = !checked;
        }
    }
    function toggleCspmapOther(val) {
        if (val === 'Others, specify:') {
            const checked = document.querySelector('input[name="cspmap_meds[]"][value="Others, specify:"]').checked;
            document.getElementById('cspmapOther').disabled = !checked;
        }
    }
    function toggleOtherMed(val) {
        if (val === 'Others, specify:') {
            const checked = document.querySelector('input[name="other_meds[]"][value="Others, specify:"]').checked;
            document.getElementById('otherMedOther').disabled = !checked;
        }
    }
</script>
@endsection
