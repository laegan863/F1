@extends('index')
@section("title", "Financial Support Mechanism")
@section("nav_title", "FINANCIAL SUPPORT MECHANISM")
@section("content")
    <form id="form" method="POST" action="{{ route('store.financial-support') }}" class="p-2">
        @csrf

        <!-- ================= FINANCIAL SUPPORT ================= -->
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="fw-bold">Financial Support Mechanism</h5>

                <label class="form-label">Did patient avail any financial support mechanism?</label>
                <div class="form-check form-check-inline">
                    <input type="radio" name="financial_support" value="Yes" 
                           class="form-check-input rounded-circle"
                           onclick="toggleSection('financialDetails')"
                           {{ old('financial_support') == 'Yes' ? 'checked' : '' }}>
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="financial_support" value="No" 
                           class="form-check-input rounded-circle"
                           onclick="toggleSection('financialDetails')"
                           {{ old('financial_support','No') == 'No' ? 'checked' : '' }}>
                    <label class="form-check-label">No</label>
                </div>
                @error('financial_support') <small class="text-danger">{{ $message }}</small> @enderror

                <!-- Financial Mechanism Options -->
                <div id="financialDetails" class="d-none mt-3">
                    <label class="form-label">If yes, specify:</label>
                    <div class="row">
                        @foreach([
                            'Discounts under Law (e.g. Senior Citizen, PWD)',
                            'PhilHealth',
                            'Health Maintenance Organization (HMO)',
                            'Philippine Charity Sweepstakes Office (PCSO)',
                            'Assistance to Individuals in Crisis Situations (AICS)',
                            'Cancer Assistance Fund (CAF)',
                            'Medical Assistance for Indigent & Financially-Incapacitated Patients (MAIP/DOH)',
                            'Hospital Assistance Funds',
                            'Cancer and Supportive-Palliative Medicines Access Program (CSPMAP)',
                            'Philippine Amusement and Gaming Corporation (PAGCOR)',
                            'Non-Government Org./Civil Society Org.',
                            'Clinical Trial',
                            'Charitable Institutions',
                            'Private Sector Assistance Program',
                            'None',
                            'Others, specify:'
                        ] as $label)
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="checkbox" name="financial_type[]" value="{{ $label }}"
                                           class="form-check-input rounded-circle"
                                           onchange="toggleFinancialOther('{{ $label }}')"
                                           {{ in_array($label, old('financial_type', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label">{{ $label }}</label>
                                </div>
                                @if($label === 'Others, specify:')
                                    <input type="text" name="financial_other" id="financialOther"
                                           class="form-control mt-1"
                                           placeholder="Specify"
                                           value="{{ old('financial_other') }}"
                                           {{ in_array('Others, specify:', old('financial_type', [])) ? '' : 'disabled' }}>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- ================= CSPMAP MEDICINES ================= -->
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="fw-bold">CSPMAP Medicines</h5>
                <p class="small">If CSPMAP is checked, select the medicines availed under the CSPMAP program:</p>
                <div class="row">
                    @foreach([
                        'Asparaginase 10,000 IU vial','Bicalutamide 50 mg','Bleomycin (as Sulfate) 15 mg Vial',
                        'Calcium Folinate (Leucovorin Calcium) 50 mg vial','Capecitabine 500 mg Tablet',
                        'Carboplatin 150 mg vial','Carboplatin 450 mg vial','Cisplatin 1 mg/mL, 10 mL vial',
                        'Cisplatin 1 mg/mL, 50 mL vial','Cyclophosphamide 500 mg powder vial',
                        'Cytarabine 100 mg/mL 1 mL vial','Cytarabine 100 mg/mL 5 mL vial',
                        'Dacarbazine 200 mg vial','Dactinomycin (Actinomycin D) 500 mcg powder vial',
                        'Diazepam 5mg/mL, 2 mL amp','Diphenhydramine (Hydrochloride) 50 mg/mL, 1 mL',
                        'Docetaxel 20 mg/mL vial','Docetaxel 80 mg/mL 2 mL vial',
                        'Doxorubicin 10 mg vial','Doxorubicin 50 mg vial','Epirubicin 50 mg vial',
                        'Etoposide 20 mg/mL 5 mL amp','Fentanyl Citrate 50 mcg/mL, 2 mL amp',
                        'Filgrastim (G-CSF) 300 mcg/mL 0.5 mL PFS','Fluorouracil 50 mg/mL 10 mL vial',
                        'Gemcitabine 1 g vial','Gemcitabine 200 mg vial','Goserelin 3.6 mg PFS',
                        'Haloperidol 5 mg/mL 1 mL amp','Hydroxyurea 500 mg capsule','Hyoscine 20 mg/mL 1 mL amp',
                        'Idarubicin 5 mg vial','Ifosfamide 1 g vial','Imatinib 400 mg tablet',
                        'Irinotecan 40 mg/2 mL vial','Irinotecan 100 mg/5 mL vial',
                        'Letrozole 2.5 mg tablet','Leuprolide 3.75 mg vial',
                        'Mercaptopurine 50 mg tablet','Mesna 100 mg/mL 4 mL amp',
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
                    ] as $label)
                        <div class="col-md-6">
                            <div class="form-check">
                                <input type="checkbox" name="cspmap_meds[]" value="{{ $label }}"
                                       class="form-check-input rounded-circle"
                                       onchange="toggleCspmapOther('{{ $label }}')"
                                       {{ in_array($label, old('cspmap_meds', [])) ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $label }}</label>
                            </div>
                            @if($label === 'Others, specify:')
                                <input type="text" name="cspmap_other" id="cspmapOther"
                                       class="form-control mt-1"
                                       placeholder="Specify"
                                       value="{{ old('cspmap_other') }}"
                                       {{ in_array('Others, specify:', old('cspmap_meds', [])) ? '' : 'disabled' }}>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- ================= OTHER MEDICINES ================= -->
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="fw-bold">Other Medicines Availed</h5>
                <div class="row">
                    @foreach([
                        'All-trans Retinoic Acid (ATRA)','Arsenic','Atezolizumab','Bevacizumab','Blinatumomab',
                        'Bortezomib','Dasatinib','Ivosidenib','Lenvatinib','Osimertinib',
                        'Pegylated Asparaginase','Pembrolizumab','Procarbazine','Ruxolitinib','Others, specify:'
                    ] as $label)
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="other_meds[]" value="{{ $label }}"
                                       class="form-check-input rounded-circle"
                                       onchange="toggleOtherMed('{{ $label }}')"
                                       {{ in_array($label, old('other_meds', [])) ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $label }}</label>
                            </div>
                            @if($label === 'Others, specify:')
                                <input type="text" name="other_med_other" id="otherMedOther"
                                       class="form-control mt-1"
                                       placeholder="Specify"
                                       value="{{ old('other_med_other') }}"
                                       {{ in_array('Others, specify:', old('other_meds', [])) ? '' : 'disabled' }}>
                            @endif
                        </div>
                    @endforeach
                </div>
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

    // Auto-run on page load to restore states
    window.onload = function() {
        if (document.querySelector('input[name="financial_support"][value="Yes"]').checked) {
            toggleSection('financialDetails');
        }
        toggleFinancialOther('Others, specify:');
        toggleCspmapOther('Others, specify:');
        toggleOtherMed('Others, specify:');
    }
</script>
@endsection
