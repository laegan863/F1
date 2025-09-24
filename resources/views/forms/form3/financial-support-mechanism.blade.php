@extends('index')
@section("title", "Financial Support Mechanism")
@section("nav_title", "FINANCIAL SUPPORT MECHANISM")
@section("content")
    <form id="form" method="POST" action="" class="p-2">
        @csrf

        <!-- ================= FINANCIAL SUPPORT ================= -->
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="fw-bold">Financial Support Mechanism</h5>

                <label class="form-label">Did patient avail any financial support mechanism?</label>
                <div class="form-check form-check-inline">
                    <input type="radio" name="financial_support" value="1" class="form-check-input rounded-circle" onclick="toggleSection('financialDetails')">
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="financial_support" value="2" class="form-check-input rounded-circle" onclick="toggleSection('financialDetails')" checked>
                    <label class="form-check-label">No</label>
                </div>

                <!-- Financial Mechanism Options -->
                <div id="financialDetails" class="d-none mt-3">
                    <label class="form-label">If yes, specify:</label>
                    <div class="row">
                        @foreach([
                            1=>'Discounts under Law (e.g. Senior Citizen, PWD)',
                            2=>'PhilHealth',
                            3=>'Health Maintenance Organization (HMO)',
                            4=>'Philippine Charity Sweepstakes Office (PCSO)',
                            5=>'Assistance to Individuals in Crisis Situations (AICS)',
                            6=>'Cancer Assistance Fund (CAF)',
                            7=>'Medical Assistance for Indigent & Financially-Incapacitated Patients (MAIP/DOH)',
                            8=>'Hospital Assistance Funds',
                            9=>'Cancer and Supportive-Palliative Medicines Access Program (CSPMAP)',
                            10=>'Philippine Amusement and Gaming Corporation (PAGCOR)',
                            11=>'Non-Government Org./Civil Society Org.',
                            12=>'Clinical Trial',
                            13=>'Charitable Institutions',
                            14=>'Private Sector Assistance Program',
                            15=>'None',
                            16=>'Others, specify:'
                        ] as $k=>$label)
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="checkbox" name="financial_type[]" value="{{ $k }}" class="form-check-input rounded-circle" onchange="toggleFinancialOther({{ $k }})">
                                    <label class="form-check-label">{{ $label }}</label>
                                </div>
                                @if($k == 16)
                                    <input type="text" name="financial_other" id="financialOther" class="form-control mt-1" placeholder="Specify" disabled>
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
                        1=>'Asparaginase 10,000 IU vial',2=>'Bicalutamide 50 mg',3=>'Bleomycin (as Sulfate) 15 mg Vial',
                        4=>'Calcium Folinate (Leucovorin Calcium) 50 mg vial',5=>'Capecitabine 500 mg Tablet',
                        6=>'Carboplatin 150 mg vial',7=>'Carboplatin 450 mg vial',8=>'Cisplatin 1 mg/mL, 10 mL vial',
                        9=>'Cisplatin 1 mg/mL, 50 mL vial',10=>'Cyclophosphamide 500 mg powder vial',
                        11=>'Cytarabine 100 mg/mL 1 mL vial',12=>'Cytarabine 100 mg/mL 5 mL vial',
                        13=>'Dacarbazine 200 mg vial',14=>'Dactinomycin (Actinomycin D) 500 mcg powder vial',
                        15=>'Diazepam 5mg/mL, 2 mL amp',16=>'Diphenhydramine (Hydrochloride) 50 mg/mL, 1 mL',
                        17=>'Docetaxel 20 mg/mL vial',18=>'Docetaxel 80 mg/mL 2 mL vial',
                        19=>'Doxorubicin 10 mg vial',20=>'Doxorubicin 50 mg vial',21=>'Epirubicin 50 mg vial',
                        22=>'Etoposide 20 mg/mL 5 mL amp',23=>'Fentanyl Citrate 50 mcg/mL, 2 mL amp',
                        24=>'Filgrastim (G-CSF) 300 mcg/mL 0.5 mL PFS',25=>'Fluorouracil 50 mg/mL 10 mL vial',
                        26=>'Gemcitabine 1 g vial',27=>'Gemcitabine 200 mg vial',28=>'Goserelin 3.6 mg PFS',
                        29=>'Haloperidol 5 mg/mL 1 mL amp',30=>'Hydroxyurea 500 mg capsule',31=>'Hyoscine 20 mg/mL 1 mL amp',
                        32=>'Idarubicin 5 mg vial',33=>'Ifosfamide 1 g vial',34=>'Imatinib 400 mg tablet',
                        35=>'Irinotecan 40 mg/2 mL vial',36=>'Irinotecan 100 mg/5 mL vial',
                        37=>'Letrozole 2.5 mg tablet',38=>'Leuprolide 3.75 mg vial',
                        39=>'Mercaptopurine 50 mg tablet',40=>'Mesna 100 mg/mL 4 mL amp',
                        41=>'Methotrexate 2.5 mg tablet',42=>'Methotrexate 25 mg/mL 2 mL amp',
                        43=>'Metoclopramide 5 mg/mL 2 mL amp',44=>'Morphine 10 mg/mL 1 mL amp',
                        45=>'Morphine 30 mg/mL 1 mL amp',46=>'Morphine oral solution 10 mg/5 mL',
                        47=>'Omeprazole 40 mg vial + solvent',48=>'Ondansetron 2 mg/mL 2 mL amp',
                        49=>'Ondansetron 2 mg/mL 4 mL amp',50=>'Oxaliplatin 5 mg/mL solution',
                        51=>'Paclitaxel 6 mg/mL 17 mL vial',52=>'Paclitaxel 6 mg/mL 25 mL vial',
                        53=>'Paclitaxel 30 mg/5 mL vial',54=>'Rituximab 10 mg/mL 10 mL vial',
                        55=>'Tamoxifen 20 mg tablet',56=>'Trastuzumab 150 mg vial',57=>'Trastuzumab 600 mg/5 mL vial',
                        58=>'Vinblastine 1 mg/mL 10 mL vial',59=>'Vincristine 1 mg/mL 1 mL vial',
                        60=>'Vincristine 1 mg/mL 2 mL vial',61=>'None',62=>'Others, specify:'
                    ] as $k=>$label)
                        <div class="col-md-6">
                            <div class="form-check">
                                <input type="checkbox" name="cspmap_meds[]" value="{{ $k }}" class="form-check-input rounded-circle" onchange="toggleCspmapOther({{ $k }})">
                                <label class="form-check-label">{{ $label }}</label>
                            </div>
                            @if($k == 62)
                                <input type="text" name="cspmap_other" id="cspmapOther" class="form-control mt-1" placeholder="Specify" disabled>
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
                        1=>'All-trans Retinoic Acid (ATRA)',2=>'Arsenic',3=>'Atezolizumab',4=>'Bevacizumab',5=>'Blinatumomab',
                        6=>'Bortezomib',7=>'Dasatinib',8=>'Ivosidenib',9=>'Lenvatinib',10=>'Osimertinib',
                        11=>'Pegylated Asparaginase',12=>'Pembrolizumab',13=>'Procarbazine',14=>'Ruxolitinib',15=>'Others, specify:'
                    ] as $k=>$label)
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="other_meds[]" value="{{ $k }}" class="form-check-input rounded-circle" onchange="toggleOtherMed({{ $k }})">
                                <label class="form-check-label">{{ $label }}</label>
                            </div>
                            @if($k == 15)
                                <input type="text" name="other_med_other" id="otherMedOther" class="form-control mt-1" placeholder="Specify" disabled>
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
            const yesSelected = event.target.value === '1';
            section.classList.toggle('d-none', !yesSelected);
        }
    }
    function toggleFinancialOther(k) {
        if (k === 16) {
            const checked = document.querySelector('input[name="financial_type[]"][value="16"]').checked;
            document.getElementById('financialOther').disabled = !checked;
        }
    }
    function toggleCspmapOther(k) {
        if (k === 62) {
            const checked = document.querySelector('input[name="cspmap_meds[]"][value="62"]').checked;
            document.getElementById('cspmapOther').disabled = !checked;
        }
    }
    function toggleOtherMed(k) {
        if (k === 15) {
            const checked = document.querySelector('input[name="other_meds[]"][value="15"]').checked;
            document.getElementById('otherMedOther').disabled = !checked;
        }
    }
</script>
@endsection
