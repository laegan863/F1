@extends('index')
@section("title", "Treatment Plan and Diagnosis")
@section("nav_title", "TREATMENT PLAN AND DIAGNOSIS FORM")
@section("content")
<form id="form" method="POST" action="{{ route('submit-treatment-data') }}">
    @csrf
    <div class="card-body p-4">

        {{-- Q56: Date of Diagnosis --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Date of Diagnosis</label>
            <input type="date" class="form-control" name="date_of_diagnosis" value="{{ old('date_of_diagnosis') }}">
        </div>

        {{-- Q57: Multidisciplinary Cancer Team --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Multidisciplinary Cancer Team Approach Practiced?</label><br>
            @foreach(['Yes','No'] as $opt)
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input rounded-circle" name="team_approach" value="{{ $opt }}"
                           {{ old('team_approach') == $opt ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $opt }}</label>
                </div>
            @endforeach
        </div>
        <div id="team_disciplines" class="{{ old('team_approach') == 'Yes' ? '' : 'd-none' }}">
            <label class="form-label fw-bold">If yes, specify all disciplines involved:</label>
            @php
                $disciplines = [
                    "Surgery","Medical Oncology","Pediatric Oncology","Hematology Oncology",
                    "Radiation Oncology","Gynecologic Oncology","Nuclear Medicine","Pathology",
                    "Supportive and Palliative","Complementary and Alternative","Others"
                ];
            @endphp
            <div class="row">
                @foreach($disciplines as $i => $d)
                <div class="col-md-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="disciplines[]" value="{{ $d }}"
                               id="disc{{ $i }}" {{ in_array($d, old('disciplines', [])) ? 'checked' : '' }}>
                        <label for="disc{{ $i }}" class="form-check-label">{{ $d }}</label>
                    </div>
                </div>
                @endforeach
                <div class="col-md-12 mt-2">
                    <input type="text" class="form-control" name="discipline_other" placeholder="Others, specify"
                           value="{{ old('discipline_other') }}">
                </div>
            </div>
        </div>

        {{-- Q58: Surgery --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Surgery</label><br>
            @foreach(['Yes','No'] as $opt)
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input rounded-circle" name="surgery" value="{{ $opt }}"
                           {{ old('surgery') == $opt ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $opt }}</label>
                </div>
            @endforeach
        </div>
        <div id="surgery_details" class="{{ old('surgery') == 'Yes' ? '' : 'd-none' }}">
            <label class="form-label fw-bold">If yes, specify the goal:</label><br>
            @foreach(['Diagnostic','Curative','Palliative'] as $goal)
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" name="surgery_goal[]" value="{{ $goal }}"
                           {{ in_array($goal, old('surgery_goal', [])) ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $goal }}</label>
                </div>
            @endforeach
        </div>

        {{-- Q59: Anti-cancer Drug --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Anti-cancer Drug</label><br>
            @foreach(['Yes','No'] as $opt)
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input rounded-circle" name="anticancer_drug" value="{{ $opt }}"
                           {{ old('anticancer_drug') == $opt ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $opt }}</label>
                </div>
            @endforeach
        </div>
        <div id="anticancer_details" class="{{ old('anticancer_drug') == 'Yes' ? '' : 'd-none' }}">

            <label class="form-label fw-bold">Purpose of Drug Administration</label><br>
            @foreach(['Neoadjuvant','Adjuvant','Palliative'] as $purpose)
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" name="drug_purpose[]" value="{{ $purpose }}"
                           {{ in_array($purpose, old('drug_purpose', [])) ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $purpose }}</label>
                </div>
            @endforeach

            <div class="mt-3">
                <label class="form-label fw-bold">Drug Types</label><br>
                @php
                    $standardTypes = ['Cytotoxic','Hormonal','Immunologic','Targeted'];
                    $oldTypes = old('drug_types', []);
                    $otherType = collect($oldTypes)->diff($standardTypes)->first();
                @endphp

                @foreach($standardTypes as $type)
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" name="drug_types[]" value="{{ $type }}"
                            {{ in_array($type, $oldTypes) ? 'checked' : '' }}>
                        <label class="form-check-label">{{ $type }}</label>
                    </div>
                @endforeach

                <div class="form-check form-check-inline">
                    <div class="d-flex align-items-center gap-2">
                        <label class="form-check-label">Others</label>
                        <input type="text" class="form-control" name="drug_types[]"
                            value="{{ $otherType ?? '' }}" placeholder="Specify">
                    </div>
                </div>
            </div>

        </div>

        {{-- Q60–Q63: First to Third Line & Other Anti-Cancer Drugs --}}
        @foreach(['First','Second','Third','Other Subsequent'] as $line)
        <div class="mb-3">
            <label class="fw-bold">{{ $line }} Line Anti-Cancer Drug</label><br>
            @foreach(['Yes','No'] as $opt)
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input rounded-circle" name="{{ strtolower(str_replace(' ','_',$line)) }}_line_drug" value="{{ $opt }}"
                           {{ old(strtolower(str_replace(' ','_',$line)).'_line_drug') == $opt ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $opt }}</label>
                </div>
            @endforeach
        </div>
        <div id="{{ strtolower(str_replace(' ','_',$line)) }}_line_details" class="mb-3 {{ old(strtolower(str_replace(' ','_',$line)).'_line_drug') == 'Yes' ? '' : 'd-none' }}">

            @if(strtolower(str_replace(' ','_',$line)) == "other_subsequent")
                <label class="form-label">If yes, indicate line</label>
            <input type="text" class="form-control mb-2" name="indicate_line"
                   value="{{ old('indicate_line') }}">
            @endif

            <label class="form-label">Drug’s Regimen</label>
            <input type="text" class="form-control mb-2" name="{{ strtolower(str_replace(' ','_',$line)) }}_drug_regimen"
                   value="{{ old(strtolower(str_replace(' ','_',$line)).'_drug_regimen') }}">

            <label class="form-label">Intended no. of Cycles</label>
            <input type="number" class="form-control mb-2" name="{{ strtolower(str_replace(' ','_',$line)) }}_cycles"
                   value="{{ old(strtolower(str_replace(' ','_',$line)).'_cycles') }}">

            <label class="form-label">Treatment Goal</label><br>
            @foreach(['Curative','Control','Palliative'] as $goal)
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="{{ strtolower(str_replace(' ','_',$line)) }}_treatment_goal" value="{{ $goal }}"
                           {{ old(strtolower(str_replace(' ','_',$line)).'_treatment_goal') == $goal ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $goal }}</label>
                </div>
            @endforeach

            <br><label class="form-label">Time of Administration</label><br>
            @foreach(['Pre-operative','Post-operative','Both'] as $time)
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="{{ strtolower(str_replace(' ','_',$line)) }}_time" value="{{ $time }}"
                           {{ old(strtolower(str_replace(' ','_',$line)).'_time') == $time ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $time }}</label>
                </div>
            @endforeach
        </div>
        @endforeach

        {{-- Q64: Radiotherapy --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Radiotherapy</label><br>
            @foreach(['Yes','No'] as $opt)
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input rounded-circle" name="radiotherapy" value="{{ $opt }}"
                           {{ old('radiotherapy') == $opt ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $opt }}</label>
                </div>
            @endforeach
        </div>
        <div id="radiotherapy_details" class="{{ old('radiotherapy') == 'Yes' ? '' : 'd-none' }}">
            <label class="form-label">If yes, indicate type:</label>
            @php
                $radio_types = ["2D conventional","3DCRT","Brachytherapy","Electron Therapy","IMRT/VMAT/Helical",
                                "IORT","Heavy Particles","Proton Therapy","Stereotactic Radiosurgery / Radiotherapy"];
            @endphp
            <div class="row">
                @foreach($radio_types as $i => $rt)
                <div class="col-md-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="radiotherapy_types[]" value="{{ $rt }}"
                               id="rt{{ $i }}" {{ in_array($rt, old('radiotherapy_types', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="rt{{ $i }}">{{ $rt }}</label>
                    </div>
                </div>
                @endforeach
                <div class="col-md-4">
                    <div class="my-1">
                        <label class="form-check-label" for="others">Others</label>
                        <input type="text" class="form-control" name="radiotherapy_types_others" value="{{ old('radiotherapy_types_others') }}">
                    </div>
                </div>
            </div>

            <label class="form-label mt-2">Specify Sequence</label><br>
            @foreach(['Concurrent ChemoRT','Sequential'] as $seq)
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="radiotherapy_sequence" value="{{ $seq }}"
                           {{ old('radiotherapy_sequence') == $seq ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $seq }}</label>
                </div>
            @endforeach

            <br><label class="form-label mt-2">Specify Treatment Goal</label><br>
            @foreach(['Definitive','Palliative','Adjuvant','Neoadjuvant'] as $goal)
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="radiotherapy_goal" value="{{ $goal }}"
                           {{ old('radiotherapy_goal') == $goal ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $goal }}</label>
                </div>
            @endforeach
        </div>

        {{-- Q65: Theranostics --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Theranostics</label><br>
            @foreach(['Yes','No'] as $opt)
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input rounded-circle" name="theranostics" value="{{ $opt }}"
                           {{ old('theranostics') == $opt ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $opt }}</label>
                </div>
            @endforeach
        </div>
        <div id="theranostics_details" class="{{ old('theranostics') == 'Yes' ? '' : 'd-none' }}">
            <label class="form-label">If yes, indicate type:</label>
            @php
                $thera_types = ["RAI","PRRT","PRLT","SIRT"];
            @endphp
            <div class="row">
                @foreach($thera_types as $i => $th)
                <div class="col-md-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="theranostics_types[]" value="{{ $th }}"
                               id="th{{ $i }}" {{ in_array($th, old('theranostics_types', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="th{{ $i }}">{{ $th }}</label>
                    </div>
                </div>
                @endforeach
                <div class="col-md-6">
                    <div class="my-2 d-flex gap-2 align-items-center">
                        <label class="form-check-label">Others</label>
                        <input type="text" class="form-control" value="{{ old('theranostics_types_others') }}" name="theranostics_types_others" placeholder="Please specify" value="">
                    </div>
                </div>
            </div>

            <br><label class="form-label mt-2">If yes, specify the Goal</label><br>
            @foreach(['Definitive','Palliative'] as $goal)
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="theranostics_goal" value="{{ $goal }}"
                           {{ old('theranostics_goal') == $goal ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $goal }}</label>
                </div>
            @endforeach
        </div>

        {{-- Q66–68: Other Cancer Directed Therapies --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Other Cancer Directed Therapies</label><br>
            @foreach(['Yes','No'] as $opt)
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input rounded-circle" name="other_therapies" value="{{ $opt }}"
                           {{ old('other_therapies') == $opt ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $opt }}</label>
                </div>
            @endforeach
        </div>
        <div id="other_therapies_details" class="{{ old('other_therapies') == 'Yes' ? '' : 'd-none' }}">
            <label class="form-label">If yes, specify:</label>
            @php
                $other_therapies = [
                    "Blood Transfusion","Cryoablation","Transplant","Radiofrequency ablation",
                    "Transarterial chemoembolization","Transplant","Others"
                ];
            @endphp
            <div class="row">
                @foreach($other_therapies as $i => $oth)
                <div class="col-md-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="other_therapies_types[]" value="{{ $oth }}"
                               id="oth{{ $i }}" {{ in_array($oth, old('other_therapies_types', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="oth{{ $i }}">{{ $oth }}</label>
                    </div>
                </div>
                @endforeach
                <div class="col-md-12 mt-2">
                    <input type="text" class="form-control" name="other_therapies_other" placeholder="Others, specify"
                           value="{{ old('other_therapies_other') }}">
                </div>
            </div>
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
    // Toggle sections
    function toggleSection(radioName, targetId, expectedValue = "Yes") {
        document.querySelectorAll(`input[name="${radioName}"]`).forEach(el => {
            el.addEventListener('change', function () {
                document.getElementById(targetId).classList.toggle('d-none', this.value !== expectedValue);
            });
        });
    }
    toggleSection('team_approach', 'team_disciplines');
    toggleSection('surgery', 'surgery_details');
    toggleSection('anticancer_drug', 'anticancer_details');
    toggleSection('first_line_drug', 'first_line_details');
    toggleSection('second_line_drug', 'second_line_details');
    toggleSection('third_line_drug', 'third_line_details');
    toggleSection('other_subsequent_line_drug', 'other_subsequent_line_details');
    toggleSection('radiotherapy', 'radiotherapy_details');
    toggleSection('theranostics', 'theranostics_details');
    toggleSection('other_therapies', 'other_therapies_details');
</script>
@endsection
