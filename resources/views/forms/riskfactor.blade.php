@extends('index')
@section("title", "Riskfactor Profile")
@section("nav_title", "RISKFACTOR PROFILE OF PATIENT")
@section("content")
    <form id="form" method="POST" action="{{ route("submit-riskfactor-data") }}">
        @csrf
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label fw-bold">Tobacco use</label><br>

                <div class="form-check form-check-inline">
                    <input id="current"
                        type="radio"
                        class="form-check-input rounded-circle"
                        name="tobacco_use"
                        value="Current Smoker"
                        {{ old('tobacco_use') == 'Current Smoker' ? 'checked' : '' }}>
                    <label for="current" class="form-check-label">Current Smoker</label>
                </div>

                <div class="form-check form-check-inline">
                    <input id="previous"
                        type="radio"
                        class="form-check-input rounded-circle"
                        name="tobacco_use"
                        value="Previous Smoker"
                        {{ old('tobacco_use') == 'Previous Smoker' ? 'checked' : '' }}>
                    <label for="previous" class="form-check-label">Previous Smoker</label>
                </div>

                <div class="form-check form-check-inline">
                    <input id="non"
                        type="radio"
                        class="form-check-input rounded-circle"
                        name="tobacco_use"
                        value="Non-smoker"
                        {{ old('tobacco_use') == 'Non-smoker' ? 'checked' : '' }}>
                    <label for="non" class="form-check-label">Non-smoker</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Second-Hand Smoke Exposure</label><br>
                <div class="form-check form-check-inline">
                    <input id="yes" type="radio" class="form-check-input rounded-circle"
                        name="second_hand_smoke" value="Yes"
                        {{ old('second_hand_smoke') == 'Yes' ? 'checked' : '' }}>
                    <label for="yes" class="form-check-label">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input id="no" type="radio" class="form-check-input rounded-circle"
                        name="second_hand_smoke" value="No"
                        {{ old('second_hand_smoke') == 'No' ? 'checked' : '' }}>
                    <label for="no" class="form-check-label">No</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Harmful use of Alcohol</label>
                <div class="form-check">
                    <input id="current_harmful" type="radio" class="form-check-input rounded-circle"
                        name="alcohol_use" value="With current harmful use of alcohol"
                        {{ old('alcohol_use') == 'With current harmful use of alcohol' ? 'checked' : '' }}>
                    <label for="current_harmful" class="form-check-label">With current harmful use of alcohol</label>
                </div>
                <div class="form-check">
                    <input id="previous_harmful" type="radio" class="form-check-input rounded-circle"
                        name="alcohol_use" value="With previous harmful use of alcohol"
                        {{ old('alcohol_use') == 'With previous harmful use of alcohol' ? 'checked' : '' }}>
                    <label for="previous_harmful" class="form-check-label">With previous harmful use of alcohol</label>
                </div>
                <div class="form-check">
                    <input id="no_history" type="radio" class="form-check-input rounded-circle"
                        name="alcohol_use" value="No history of harmful use of alcohol"
                        {{ old('alcohol_use') == 'No history of harmful use of alcohol' ? 'checked' : '' }}>
                    <label for="no_history" class="form-check-label">No history of harmful use of alcohol</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Physical Activity</label><br>
                <div class="form-check form-check-inline">
                    <input id="Inactive" type="radio" class="form-check-input rounded-circle"
                        name="physical_activity" value="Usually Inactive"
                        {{ old('physical_activity') == 'Usually Inactive' ? 'checked' : '' }}>
                    <label for="Inactive" class="form-check-label">Usually Inactive</label>
                </div>
                <div class="form-check form-check-inline">
                    <input id="Active" type="radio" class="form-check-input rounded-circle"
                        name="physical_activity" value="Moderately Active"
                        {{ old('physical_activity') == 'Moderately Active' ? 'checked' : '' }}>
                    <label for="Active" class="form-check-label">Moderately Active</label>
                </div>
                <div class="form-check form-check-inline">
                    <input id="Very_Active" type="radio" class="form-check-input rounded-circle"
                        name="physical_activity" value="Very Active"
                        {{ old('physical_activity') == 'Very Active' ? 'checked' : '' }}>
                    <label for="Very_Active" class="form-check-label">Very Active</label>
                </div>
            </div>


            <div class="mb-3">
                <label class="form-label fw-bold">Healthy Diet</label>
                <div class="row">
                    <div class="col-md-6">
                        <label>Fat-meat</label>
                        <select class="form-select" name="healtydiet[fatmeat]">
                            <option value="">Choose...</option>
                            <option value="high" {{ old('healtydiet.fatmeat') == 'high' ? 'selected' : '' }}>High</option>
                            <option value="moderate" {{ old('healtydiet.fatmeat') == 'moderate' ? 'selected' : '' }}>Moderate</option>
                            <option value="low" {{ old('healtydiet.fatmeat') == 'low' ? 'selected' : '' }}>Low</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label>Vegetables</label>
                        <select class="form-select" name="healtydiet[vegetables]">
                            <option value="">Choose...</option>
                            <option value="high" {{ old('healtydiet.vegetables') == 'high' ? 'selected' : '' }}>High</option>
                            <option value="moderate" {{ old('healtydiet.vegetables') == 'moderate' ? 'selected' : '' }}>Moderate</option>
                            <option value="low" {{ old('healtydiet.vegetables') == 'low' ? 'selected' : '' }}>Low</option>
                        </select>
                    </div>

                    <div class="col-md-6 mt-2">
                        <label>Sodium/Salt</label>
                        <select class="form-select" name="healtydiet[sodium_salt]">
                            <option value="">Choose...</option>
                            <option value="high" {{ old('healtydiet.sodium_salt') == 'high' ? 'selected' : '' }}>High</option>
                            <option value="moderate" {{ old('healtydiet.sodium_salt') == 'moderate' ? 'selected' : '' }}>Moderate</option>
                            <option value="low" {{ old('healtydiet.sodium_salt') == 'low' ? 'selected' : '' }}>Low</option>
                        </select>
                    </div>

                    <div class="col-md-6 mt-2">
                        <label>Sugar</label>
                        <select class="form-select" name="healtydiet[sugar]">
                            <option value="">Choose...</option>
                            <option value="high" {{ old('healtydiet.sugar') == 'high' ? 'selected' : '' }}>High</option>
                            <option value="moderate" {{ old('healtydiet.sugar') == 'moderate' ? 'selected' : '' }}>Moderate</option>
                            <option value="low" {{ old('healtydiet.sugar') == 'low' ? 'selected' : '' }}>Low</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Occupational Exposure</label><br>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input rounded-circle"
                        name="occupational_exposure" value="yes"
                        onclick="handleOccupationalExposure('yes')"
                        {{ old('occupational_exposure') == 'yes' ? 'checked' : '' }}>
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input rounded-circle"
                        name="occupational_exposure" value="no"
                        onclick="handleOccupationalExposure('no')"
                        {{ old('occupational_exposure', 'no') == 'no' ? 'checked' : '' }}>
                    <label class="form-check-label">No</label>
                </div>
                <div class="mt-2" id="occupational_exposure_yes">
                    @if(old('occupational_exposure'))
                        @include('forms.includes.exposure')
                    @endif
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Outdoor Air Pollution Exposure</label><br>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input rounded-circle"
                        name="air_pollution" value="yes"
                        {{ old('air_pollution', 'yes') == 'yes' ? 'checked' : '' }}>
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input rounded-circle"
                        name="air_pollution" value="no"
                        {{ old('air_pollution') == 'no' ? 'checked' : '' }}>
                    <label class="form-check-label">No</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Family History of Cancer (Up to 3rd degree of Consanguinity)</label><br>

                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input rounded-circle"
                        name="family_history" value="yes"
                        onclick="handleFamilyHistory('yes')"
                        {{ old('family_history') == 'yes' ? 'checked' : '' }}>
                    <label class="form-check-label">Yes</label>
                </div>

                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input rounded-circle"
                        name="family_history" value="no"
                        onclick="handleFamilyHistory('no')"
                        {{ old('family_history', 'no') == 'no' ? 'checked' : '' }}>
                    <label class="form-check-label">No</label>
                </div>

                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input rounded-circle"
                        name="family_history" value="unknown"
                        onclick="handleFamilyHistory('unknown')"
                        {{ old('family_history') == 'unknown' ? 'checked' : '' }}>
                    <label class="form-check-label">Unknown</label>
                </div>

                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input rounded-circle"
                        name="family_history" value="no_genetic"
                        onclick="handleFamilyHistory('no_genetic')"
                        {{ old('family_history') == 'no_genetic' ? 'checked' : '' }}>
                    <label class="form-check-label">No known genetic disposition to Cancer</label>
                </div>
                <div class="mt-3" id="family_history_yes">
                    @if(old('family_history') == "yes")
                        @include('forms.includes.family-history-cancer')
                    @endif
                </div>
            </div>
            <div class="mt-4">
                <h5 class="fw-bold">Medical History</h5>

                {{-- Infections --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">
                        Has the patient ever been diagnosed or tested positive for any of the following infections?
                    </label>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="infections[]" value="Hepatitis B"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('Hepatitis B', old('infections', [])) ? 'checked' : '' }}>
                                Hepatitis B (Hep B)
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="infections[]" value="Hepatitis C"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('Hepatitis C', old('infections', [])) ? 'checked' : '' }}>
                                Hepatitis C (Hep C)
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="infections[]" value="Hepatitis D"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('Hepatitis D', old('infections', [])) ? 'checked' : '' }}>
                                Hepatitis D (Hep D)
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="infections[]" value="Hepatitis E"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('Hepatitis E', old('infections', [])) ? 'checked' : '' }}>
                                Hepatitis E (Hep E)
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="infections[]" value="HPV"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('HPV', old('infections', [])) ? 'checked' : '' }}>
                                Human Papillomavirus (HPV)
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="infections[]" value="HIV"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('HIV', old('infections', [])) ? 'checked' : '' }}>
                                Human Immunodeficiency Virus (HIV)
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="infections[]" value="EBV"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('EBV', old('infections', [])) ? 'checked' : '' }}>
                                Epstein–Barr Virus (EBV)
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="infections[]" value="KSHV"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('KSHV', old('infections', [])) ? 'checked' : '' }}>
                                Kaposi Sarcoma Herpesvirus (KSHV or HHV-8)
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="infections[]" value="HTLV-1"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('HTLV-1', old('infections', [])) ? 'checked' : '' }}>
                                Human T-lymphotropic Virus Type 1 (HTLV-1)
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="infections[]" value="MCPV"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('MCPV', old('infections', [])) ? 'checked' : '' }}>
                                Merkel Cell Polyomavirus (MCPV)
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="infections[]" value="H Pylori"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('H Pylori', old('infections', [])) ? 'checked' : '' }}>
                                Helicobacter Pylori (H Pylori)
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="infections[]" value="Chlamydia"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('Chlamydia', old('infections', [])) ? 'checked' : '' }}>
                                Chlamydia Trachomatis
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="infections[]" value="Schistosoma"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('Schistosoma', old('infections', [])) ? 'checked' : '' }}>
                                Schistosoma Hematobium
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="infections[]" value="Opisthorchis"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('Opisthorchis', old('infections', [])) ? 'checked' : '' }}>
                                Opisthorchis Viverrini
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="infections[]" value="Clonorchis"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('Clonorchis', old('infections', [])) ? 'checked' : '' }}>
                                Clonorchis Sinensis
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="infections[]" value="None"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('None', old('infections', [])) ? 'checked' : '' }}>
                                None
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="infections[]" value="Unknown"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('Unknown', old('infections', [])) ? 'checked' : '' }}>
                                Unknown
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input rounded-circle"
                                    id="infections_others" value="yes" name="infections_others" onclick="handleInfectionsOthers()"
                                    {{ old('infections_others') == 'yes' ? 'checked' : ''}}>
                                <label class="form-check-label">Others, specify:</label>
                            </div>
                            <div id="infection_content">
                                @if(old('infections_others') == 'yes')
                                    <input type="text" class="form-control mt-1" name="infections_other_content" value="{{ old('infections_other_content') }}" placeholder="Specify if others">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Comorbidities --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">
                        Has the patient been diagnosed with any of the following comorbidities?
                    </label>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="comorbidities[]" value="Cardiovascular disease"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('Cardiovascular disease', old('comorbidities', [])) ? 'checked' : '' }}>
                                Cardiovascular disease
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="comorbidities[]" value="Chronic respiratory disease"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('Chronic respiratory disease', old('comorbidities', [])) ? 'checked' : '' }}>
                                Chronic respiratory disease
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="comorbidities[]" value="Chronic kidney disease"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('Chronic kidney disease', old('comorbidities', [])) ? 'checked' : '' }}>
                                Chronic kidney disease
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="comorbidities[]" value="Diabetes mellitus"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('Diabetes mellitus', old('comorbidities', [])) ? 'checked' : '' }}>
                                Diabetes mellitus
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="comorbidities[]" value="Hypertension"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('Hypertension', old('comorbidities', [])) ? 'checked' : '' }}>
                                Hypertension
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="comorbidities[]" value="Immunosuppression"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('Immunosuppression', old('comorbidities', [])) ? 'checked' : '' }}>
                                Immunosuppression/Immunodeficiency
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="comorbidities[]" value="Liver disease"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('Liver disease', old('comorbidities', [])) ? 'checked' : '' }}>
                                Liver disease
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="comorbidities[]" value="Obesity"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('Obesity', old('comorbidities', [])) ? 'checked' : '' }}>
                                Obesity
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="comorbidities[]" value="Tuberculosis"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('Tuberculosis', old('comorbidities', [])) ? 'checked' : '' }}>
                                Tuberculosis
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="comorbidities[]" value="None"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('None', old('comorbidities', [])) ? 'checked' : '' }}>
                                None
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="comorbidities[]" value="Unknown"
                                    class="form-check-input rounded-circle"
                                    {{ in_array('Unknown', old('comorbidities', [])) ? 'checked' : '' }}>
                                Unknown
                            </div>
                            <div class="form-check">
                                <input type="checkbox"
                                    class="form-check-input rounded-circle"
                                    id="patient_diagnose_others"
                                    onclick="handlePatientDiagnoseOthers()"
                                    name="comorbidities_others"
                                    value="yes"
                                    {{ old('comorbidities_others') == 'yes' ? 'checked' : ''}}>
                                <label class="form-check-label">Others, specify:</label>
                            </div>
                            <div id="patient_diagnose_content">
                                @if(old('comorbidities_others') == 'yes')
                                    <input type="text" class="form-control mt-1" value="{{ old('comorbidities_others_content') }}" name="comorbidities_others_content" placeholder="Specify if others">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
            <div class="fw-bold">Cancer</div>

            <div class="mb-3">
                <label class="form-label">Has the patient been diagnosed with cancer? {{ old('has_cancer') }}</label><br>
                <div class="form-check form-check-inline">
                    <input type="radio" name="has_cancer" value="yes" class="form-check-input rounded-circle" onclick="handleHasCancer('yes')" {{ old(key: 'has_cancer') == "yes" ? "checked" : "" }}>
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="has_cancer" value="no" class="form-check-input rounded-circle" onclick="handleHasCancer('no')" {{ old(key: 'has_cancer') != "yes" ? "checked" : "" }}>
                    <label class="form-check-label">No</label>
                </div>
            </div>

            <div id="has_cancer_content">
                @if(old('has_cancer') == "yes")
                    @include('forms.includes.cancer-sites')
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label">Other SignificantMedical History:</label><br>
                <input type="text" class="form-control" value="{{ old('other_significant_medical_history') }}" name="other_significant_medical_history" placeholder="">
            </div>
            <div class="mt-4">
            <h5 class="fw-bold">Sexual History</h5>

            <div class="mb-3">
                <label class="form-label">37. Sexual Orientation (optional)</label>
                <div class="row">
                    <div class="col-md-4 my-2">
                        <input type="radio" name="sexual_orientation" value="Heterosexual"
                            class="form-check-input rounded-circle"
                            onclick="handleSexualOrientationContent('no')"
                            {{ old('sexual_orientation') == 'Heterosexual' ? 'checked' : '' }}>
                        Heterosexual
                    </div>

                    <div class="col-md-4 my-2">
                        <input type="radio" name="sexual_orientation" value="Homosexual"
                            class="form-check-input rounded-circle"
                            onclick="handleSexualOrientationContent('no')"
                            {{ old('sexual_orientation') == 'Homosexual' ? 'checked' : '' }}>
                        Homosexual
                    </div>

                    <div class="col-md-4 my-2">
                        <input type="radio" name="sexual_orientation" value="Bisexual"
                            class="form-check-input rounded-circle"
                            onclick="handleSexualOrientationContent('no')"
                            {{ old('sexual_orientation') == 'Bisexual' ? 'checked' : '' }}>
                        Bisexual
                    </div>

                    <div class="col-md-4 my-2">
                        <input type="radio" name="sexual_orientation" value="Asexual"
                            class="form-check-input rounded-circle"
                            onclick="handleSexualOrientationContent('no')"
                            {{ old('sexual_orientation') == 'Asexual' ? 'checked' : '' }}>
                        Asexual
                    </div>

                    <div class="col-md-4 my-2">
                        <input type="radio" name="sexual_orientation" value="Pansexual"
                            class="form-check-input rounded-circle"
                            onclick="handleSexualOrientationContent('no')"
                            {{ old('sexual_orientation') == 'Pansexual' ? 'checked' : '' }}>
                        Pansexual
                    </div>

                    <div class="col-md-4 my-2 d-flex">
                        <div class="col-md-4 my-2">
                            <input type="radio" name="sexual_orientation" value="Other"
                                class="form-check-input rounded-circle"
                                onclick="handleSexualOrientationContent('yes')"
                                {{ old('sexual_orientation') == 'Other' ? 'checked' : '' }}>
                            Other
                        </div>
                        <div id="sexual_orientation_content">
                            @if(old('sexual_orientation') == 'Other')
                                <input type="text" name="sexual_orientation_other"
                                    class="form-control form-control-sm ms-2"
                                    value="{{ old('sexual_orientation_other') }}"
                                    placeholder="Please specify">
                            @endif
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">38. Number of Sexual Partner/s</label>
                    <input type="number" name="sexual_partners" value="{{ old('sexual_partners') }}" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">39. Age of First Sexual Intercourse</label>
                    <input type="number" name="age_first_intercourse" value="{{ old('age_first_intercourse') }}" class="form-control">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">40. Use of Contraceptives?</label><br>
                <div class="form-check form-check-inline">
                    <input
                        type="radio" name="contraceptives_use"
                        value="Yes" class="form-check-input rounded-circle"
                        onclick="handleContraceptives('yes')"
                        {{ old('contraceptives_use') == "Yes" ? "checked" : "" }}
                    > Yes
                </div>
                <div class="form-check form-check-inline">
                    <input
                        type="radio"
                        name="contraceptives_use"
                        value="No"
                        class="form-check-input rounded-circle"
                        onclick="handleContraceptives('no')"
                        {{ old("contraceptives_use") !=  "Yes" ? "checked" : "" }}
                    > No
                </div>

                <div class="mt-2" id="contraceptives_content">
                    @if(old("contraceptives_use") == "Yes")
                        @include("forms.includes.contraceptives")
                    @endif
                </div>
            </div>

            <h5 class="fw-bold mt-4">Cancer Screening and Vaccination History of Patient</h5>

            <div class="mb-3">
                <label class="form-label">41. Types of Cancer Screening Received</label>
                <div class="row">
                    <div class="col-md-4 my-1">
                        <input type="checkbox" name="cancer_screening[]" value="Clinical Breast Examination"
                            class="form-check-input rounded-circle"
                            {{ in_array('Clinical Breast Examination', old('cancer_screening', [])) ? 'checked' : '' }}>
                        Clinical Breast Examination
                    </div>

                    <div class="col-md-4 my-1">
                        <input type="checkbox" name="cancer_screening[]" value="Breast Ultrasound"
                            class="form-check-input rounded-circle"
                            {{ in_array('Breast Ultrasound', old('cancer_screening', [])) ? 'checked' : '' }}>
                        Breast Ultrasound
                    </div>

                    <div class="col-md-4 my-1">
                        <input type="checkbox" name="cancer_screening[]" value="Mammography"
                            class="form-check-input rounded-circle"
                            {{ in_array('Mammography', old('cancer_screening', [])) ? 'checked' : '' }}>
                        Mammography
                    </div>

                    <div class="col-md-4 my-1">
                        <input type="checkbox" name="cancer_screening[]" value="VIA"
                            class="form-check-input rounded-circle"
                            {{ in_array('VIA', old('cancer_screening', [])) ? 'checked' : '' }}>
                        Visual Inspection with Acetic Acid (VIA)
                    </div>

                    <div class="col-md-4 my-1">
                        <input type="checkbox" name="cancer_screening[]" value="Cytology/Pap Smear"
                            class="form-check-input rounded-circle"
                            {{ in_array('Cytology/Pap Smear', old('cancer_screening', [])) ? 'checked' : '' }}>
                        Cytology/Pap Smear
                    </div>

                    <div class="col-md-4 my-1">
                        <input type="checkbox" name="cancer_screening[]" value="HPV Testing"
                            class="form-check-input rounded-circle"
                            {{ in_array('HPV Testing', old('cancer_screening', [])) ? 'checked' : '' }}>
                        HPV Testing
                    </div>

                    <div class="col-md-4 my-1">
                        <input type="checkbox" name="cancer_screening[]" value="FOBT"
                            class="form-check-input rounded-circle"
                            {{ in_array('FOBT', old('cancer_screening', [])) ? 'checked' : '' }}>
                        Fecal Occult Blood Test (FOBT)
                    </div>

                    <div class="col-md-4 my-1">
                        <input type="checkbox" name="cancer_screening[]" value="FIT"
                            class="form-check-input rounded-circle"
                            {{ in_array('FIT', old('cancer_screening', [])) ? 'checked' : '' }}>
                        Stool Fecal Immunochemical Test (FIT)
                    </div>

                    <div class="col-md-4 my-1">
                        <input type="checkbox" name="cancer_screening[]" value="Colonoscopy"
                            class="form-check-input rounded-circle"
                            {{ in_array('Colonoscopy', old('cancer_screening', [])) ? 'checked' : '' }}>
                        Colonoscopy
                    </div>

                    <div class="col-md-4 my-1">
                        <input type="checkbox" name="cancer_screening[]" value="Low-dose CT Scan"
                            class="form-check-input rounded-circle"
                            {{ in_array('Low-dose CT Scan', old('cancer_screening', [])) ? 'checked' : '' }}>
                        Low-dose chest CT Scan
                    </div>

                    <div class="col-md-4 my-1">
                        <input type="checkbox" name="cancer_screening[]" value="None"
                            class="form-check-input rounded-circle"
                            {{ in_array('None', old('cancer_screening', [])) ? 'checked' : '' }}>
                        No cancer screening received
                    </div>

                    <div class="col-md-4 my-1">
                        <input type="checkbox" name="cancer_screening[]" value="Unknown"
                            class="form-check-input rounded-circle"
                            {{ in_array('Unknown', old('cancer_screening', [])) ? 'checked' : '' }}>
                        Unknown
                    </div>

                    {{-- Other (free text) --}}
                    <div class="col-md-6 my-1">
                        @if(old('cancer_screening_other'))
                            <div class="fw-semibold text-danger">
                                <small>Others</small>
                            </div>
                        @endif
                        <input type="text" class="form-control form-control-sm"
                            name="cancer_screening_other"
                            placeholder="Others, specify"
                            value="{{ old('cancer_screening_other') }}">
                    </div>
                </div>
            </div>


            <div class="mb-3">
                <label class="form-label">42. Types of Vaccines Received</label>

                {{-- HPV Vaccine --}}
                <div class="row mb-2">
                    <div class="col-md-3 fw-bold">Human Papillomavirus Vaccine (HPV)</div>
                    <div class="col-md-9">
                        <div class="form-check form-check-inline">
                            <input type="radio" name="vaccine_hpv" value="Fully Vaccinated"
                                class="form-check-input rounded-circle"
                                {{ old('vaccine_hpv') == 'Fully Vaccinated' ? 'checked' : '' }}>
                            Yes, fully vaccinated
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="vaccine_hpv" value="Partially Vaccinated"
                                class="form-check-input rounded-circle"
                                {{ old('vaccine_hpv') == 'Partially Vaccinated' ? 'checked' : '' }}>
                            Yes, partially vaccinated
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="vaccine_hpv" value="No"
                                class="form-check-input rounded-circle"
                                {{ old('vaccine_hpv') == 'No' ? 'checked' : '' }}>
                            No
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="vaccine_hpv" value="Unknown"
                                class="form-check-input rounded-circle"
                                {{ old('vaccine_hpv') == 'Unknown' ? 'checked' : '' }}>
                            Unknown
                        </div>
                    </div>
                </div>

                {{-- Hepatitis B Vaccine --}}
                <div class="row mb-2">
                    <div class="col-md-3 fw-bold">Hepatitis B Vaccine</div>
                    <div class="col-md-9">
                        <div class="form-check form-check-inline">
                            <input type="radio" name="vaccine_hepb" value="Yes, fully vaccinated"
                                class="form-check-input rounded-circle"
                                {{ old('vaccine_hepb') == 'Yes, fully vaccinated' ? 'checked' : '' }}>
                            Yes, fully vaccinated
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="vaccine_hepb" value="Yes, partially vaccinated"
                                class="form-check-input rounded-circle"
                                {{ old('vaccine_hepb') == 'Yes, partially vaccinated' ? 'checked' : '' }}>
                            Yes, partially vaccinated
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="vaccine_hepb" value="No"
                                class="form-check-input rounded-circle"
                                {{ old('vaccine_hepb') == 'No' ? 'checked' : '' }}>
                            No
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="vaccine_hepb" value="Unknown"
                                class="form-check-input rounded-circle"
                                {{ old('vaccine_hepb') == 'Unknown' ? 'checked' : '' }}>
                            Unknown
                        </div>
                    </div>
                </div>

                {{-- Other Vaccines --}}
                <div class="row">
                    <div class="col-md-3 fw-bold">Other vaccines, specify:</div>
                    <div class="col-md-9">
                        <input type="text" class="form-control"
                            name="other_vaccines"
                            placeholder="Specify other vaccines received"
                            value="{{ old('other_vaccines') }}">
                    </div>
                </div>
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

@section("script")
<script>
    function handleSexualOrientationContent(value){
        let sexual_orientation_content = document.getElementById("sexual_orientation_content");
        if(value == "yes"){
            sexual_orientation_content.innerHTML = `
                <input type="text" class="form-control form-control-sm" name="sexual_orientation_other" placeholder="Others, specify">
            `;
        }else{
            sexual_orientation_content.innerHTML = ``;
        }
    }
    function handleContraceptives(value){
        let contraceptives_content = document.getElementById("contraceptives_content");

        if(value == "yes"){
            contraceptives_content.innerHTML = `
                <label class="form-label">If yes, specify type (can be multiple):</label>
                <div class="row">
                    <div class="col-md-4"><input type="checkbox" name="contraceptive_types[]" value="Hormonal" class="form-check-input rounded-circle"> Hormonal Contraceptives</div>
                    <div class="col-md-4"><input type="checkbox" name="contraceptive_types[]" value="Barrier" class="form-check-input rounded-circle"> Barrier Methods</div>
                    <div class="col-md-4"><input type="checkbox" name="contraceptive_types[]" value="Permanent" class="form-check-input rounded-circle"> Permanent Methods</div>
                    <div class="col-md-4"><input type="checkbox" name="contraceptive_types[]" value="IUDs" class="form-check-input rounded-circle"> Intrauterine Devices (IUDs)</div>
                    <div class="col-md-4"><input type="checkbox" name="contraceptive_types[]" value="Behavioral" class="form-check-input rounded-circle"> Behavioral Methods</div>
                    <div class="col-md-4 d-flex">
                        <input type="text" class="form-control form-control-sm" name="contraceptive_types_other" placeholder="Others, specify">
                    </div>
                </div>
            `;
        }else{
            contraceptives_content.innerHTML = ``;
        }
    }
    function handleHasCancer(value) {
        let has_cancer_content = document.getElementById("has_cancer_content");
        if (value === "yes") {
            has_cancer_content.innerHTML = `
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead>
                            <tr>
                                <th style="width:30%">Cancer Site</th>
                                <th style="width:20%">Year of Diagnosis</th>
                                <th style="width:25%">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $cancerSites = [
                                    "Adrenal","Anus","Biliary Tract","Blood - Acute Lymphocytic Leukemia",
                                    "Blood - Acute Myelogenous Leukemia","Blood - Chronic Lymphocytic Leukemia",
                                    "Blood - Chronic Myelogenous Leukemia","Blood - Myelodysplastic Syndromes",
                                    "Blood - Plasma Cell Disorders","Bone","Brain (CNS)","Breast","Cervix",
                                    "Colon","Esophagus","Eyes and Orbit","Gallbladder","Gastroesophageal Junction",
                                    "Hodgkin Lymphoma","Hypopharynx","Kaposi Sarcoma","Kidney","Larynx","Leukemia",
                                    "Lip/Oral Cavity","Liver","Lung","Melanoma of Skin","Mesothelioma","Multiple Myeloma",
                                    "Nasopharynx","Non-Hodgkin Lymphoma","Oral Cavity","Oropharynx","Ovary","Pancreas",
                                    "Paranasal Sinus","Peritoneal","Prostate","Rectum","Renal Pelvis/Ureters","Salivary Glands",
                                    "Skin","Small Bowel","Soft Tissue Sarcoma","Spinal Cord","Stomach","Testis","Thymus","Thyroid",
                                    "Unknown Primary (Occult Primary)","Urinary Bladder","Uterus","Vagina","Vulva"
                                ];
                            @endphp

                            @foreach($cancerSites as $index => $site)
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input cancer-check rounded-circle" name="patient_diagnosed_w_cancer[{{ $site }}][specify]" value="{{ $site }}" id="cancer_{{ $index }}">
                                        <label class="form-check-label" for="cancer_{{ $index }}">{{ $site }}</label>
                                    </div>
                                </td>
                                <td>
                                    <input type="number" class="form-control year-input" name="patient_diagnosed_w_cancer[{{ $site }}][year]" placeholder="YYYY" disabled>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input  rounded-circle status-input" name="patient_diagnosed_w_cancer[{{ $site }}][status]" value="Active" disabled>
                                        <label class="form-check-label">Active</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input  rounded-circle status-input" name="patient_diagnosed_w_cancer[{{ $site }}][status]" value="Remission" disabled>
                                        <label class="form-check-label">Remission</label>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input rounded-circle cancer-check" value="Others" id="cancer_others">
                                        <label class="form-check-label" for="cancer_others">Others, specify:</label>
                                        <input type="text" class="form-control mt-1" name="patient_diagnosed_w_cancer[others][specify]" placeholder="Specify if others" disabled>
                                    </div>
                                </td>
                                <td>
                                    <input type="number" class="form-control year-input" name="patient_diagnosed_w_cancer[others][year]" placeholder="YYYY" disabled>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input rounded-circle status-input" name="patient_diagnosed_w_cancer[others][status]" value="Active" disabled>
                                        <label class="form-check-label">Active</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input rounded-circle status-input" name="patient_diagnosed_w_cancer[others][status]" value="Remission" disabled>
                                        <label class="form-check-label">Remission</label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            `;

            bindCancerListeners();

        } else {
            has_cancer_content.innerHTML = ``;
        }
    }

    function bindCancerListeners() {
        document.querySelectorAll(".cancer-check").forEach(function (checkbox) {
            checkbox.addEventListener("change", function () {
                let row = this.closest("tr");
                let yearInput = row.querySelector(".year-input");
                let statusInputs = row.querySelectorAll(".status-input");
                let otherInput = row.querySelector('input[name*="[specify]"]');

                if (this.checked) {
                    yearInput.removeAttribute("disabled");
                    statusInputs.forEach(i => i.removeAttribute("disabled"));
                    if (otherInput) otherInput.removeAttribute("disabled");
                } else {
                    yearInput.value = "";
                    yearInput.setAttribute("disabled", true);
                    statusInputs.forEach(i => {
                        i.checked = false;
                        i.setAttribute("disabled", true);
                    });
                    if (otherInput) {
                        otherInput.value = "";
                        otherInput.setAttribute("disabled", true);
                    }
                }
            });
        });
    }

    document.addEventListener("DOMContentLoaded", function () {
        bindCancerListeners();
    });

    function handleInfectionsOthers() {
        let infections_others = document.getElementById("infections_others");
        let infection_content = document.getElementById("infection_content");
        if(infections_others.checked){
            infection_content.innerHTML = `
                <input type="text" class="form-control mt-1" name="infections_other_content" placeholder="Specify if others">
            `;
        }else{
            infection_content.innerHTML = ``;
        }
    }

    function handlePatientDiagnoseOthers(){
        let patient_diagnose_content = document.getElementById("patient_diagnose_content");
        let patient_diagnose_others = document.getElementById("patient_diagnose_others");

        if(patient_diagnose_others.checked){
            patient_diagnose_content.innerHTML = `
                <input type="text" class="form-control mt-1" name="comorbidities_others_content" placeholder="Specify if others">
            `;
        }else{
            patient_diagnose_content.innerHTML = ``;
        }
    }

    function handleFamilyHistory(value){
        let family_history_yes = document.getElementById("family_history_yes");
        if(value == "yes"){
            family_history_yes.innerHTML = `
                <label class="form-label fw-bold">If yes, what cancer site/s? (multiple allowed)</label>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Adrenal" class="form-check-input rounded-circle"> Adrenal</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Anus" class="form-check-input rounded-circle"> Anus</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Biliary Tract" class="form-check-input rounded-circle"> Biliary Tract</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Blood - Acute Lymphocytic Leukemia" class="form-check-input rounded-circle"> Blood - Acute Lymphocytic Leukemia</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Blood - Acute Myelogenous Leukemia" class="form-check-input rounded-circle"> Blood - Acute Myelogenous Leukemia</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Blood - Chronic Lymphocytic Leukemia" class="form-check-input rounded-circle"> Blood - Chronic Lymphocytic Leukemia</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Blood - Chronic Myelogenous Leukemia" class="form-check-input rounded-circle"> Blood - Chronic Myelogenous Leukemia</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Blood - Myelodysplastic Syndromes" class="form-check-input rounded-circle"> Blood - Myelodysplastic Syndromes</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Blood - Plasma Cell Disorders" class="form-check-input rounded-circle"> Blood - Plasma Cell Disorders</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Bone" class="form-check-input rounded-circle"> Bone</div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Brain" class="form-check-input rounded-circle"> Brain (Central Nervous System)</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Breast" class="form-check-input rounded-circle"> Breast</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Cervix" class="form-check-input rounded-circle"> Cervix</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Colon" class="form-check-input rounded-circle"> Colon</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Esophagus" class="form-check-input rounded-circle"> Esophagus</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Eyes and Orbit" class="form-check-input rounded-circle"> Eyes and Orbit</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Gallbladder" class="form-check-input rounded-circle"> Gallbladder</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Gastroesophageal Junction" class="form-check-input rounded-circle"> Gastroesophageal Junction</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Hodgkin Lymphoma" class="form-check-input rounded-circle"> Hodgkin Lymphoma</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Hypopharynx" class="form-check-input rounded-circle"> Hypopharynx</div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Kaposi Sarcoma" class="form-check-input rounded-circle"> Kaposi Sarcoma</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Kidney" class="form-check-input rounded-circle"> Kidney</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Larynx" class="form-check-input rounded-circle"> Larynx</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Leukemia" class="form-check-input rounded-circle"> Leukemia</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Lip/Oral Cavity" class="form-check-input rounded-circle"> Lip/Oral Cavity</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Liver" class="form-check-input rounded-circle"> Liver</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Lung" class="form-check-input rounded-circle"> Lung</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Melanoma of Skin" class="form-check-input rounded-circle"> Melanoma of Skin</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Mesothelioma" class="form-check-input rounded-circle"> Mesothelioma</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Multiple Myeloma" class="form-check-input rounded-circle"> Multiple Myeloma</div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Nasopharynx" class="form-check-input rounded-circle"> Nasopharynx</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Non-Hodgkin Lymphoma" class="form-check-input rounded-circle"> Non-Hodgkin Lymphoma</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Oral Cavity" class="form-check-input rounded-circle"> Oral Cavity</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Oropharynx" class="form-check-input rounded-circle"> Oropharynx</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Ovary" class="form-check-input rounded-circle"> Ovary</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Pancreas" class="form-check-input rounded-circle"> Pancreas</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Paranasal Sinus" class="form-check-input rounded-circle"> Paranasal Sinus</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Peritoneal" class="form-check-input rounded-circle"> Peritoneal</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Prostate" class="form-check-input rounded-circle"> Prostate</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Rectum" class="form-check-input rounded-circle"> Rectum</div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Renal Pelvis/Ureters" class="form-check-input rounded-circle"> Renal Pelvis/Ureters</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Salivary Glands" class="form-check-input rounded-circle"> Salivary Glands</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Skin" class="form-check-input rounded-circle"> Skin</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Small Bowel" class="form-check-input rounded-circle"> Small Bowel</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Soft Tissue Sarcoma" class="form-check-input rounded-circle"> Soft Tissue Sarcoma</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Spinal Cord" class="form-check-input rounded-circle"> Spinal Cord</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Stomach" class="form-check-input rounded-circle"> Stomach</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Testis" class="form-check-input rounded-circle"> Testis</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Thymus" class="form-check-input rounded-circle"> Thymus</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Thyroid" class="form-check-input rounded-circle"> Thyroid</div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Unknown Primary" class="form-check-input rounded-circle"> Unknown Primary (Occult Primary)</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Urinary Bladder" class="form-check-input rounded-circle"> Urinary Bladder</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Uterus" class="form-check-input rounded-circle"> Uterus</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Vagina" class="form-check-input rounded-circle"> Vagina</div>
                        <div class="form-check"><input type="checkbox" name="cancer_sites[]" value="Vulva" class="form-check-input rounded-circle"> Vulva</div>
                        <div class="form-check">

                            <input type="checkbox" class="form-check-input rounded-circle" name="cancer_sites_other" value="yes" onclick="HandleOtherOptions()" id="other">
                            <label class="form-check-label">Others, specify:</label>
                        </div>
                        <div id="others"></div>
                    </div>
                </div>
            `;
        }else{
            family_history_yes.innerHTML = ``;
        }
    }

    function HandleOtherOptions() {
        let others = document.getElementById("others");
        let other =  document.getElementById("other");

        if(other.checked){
            others.innerHTML = `<input type="text" class="form-control mt-1" name="cancer_sites_other_value" placeholder="Specify if others" required>`;
        }else{
            others.innerHTML = ``;
        }
    }

    function handleOccupationalExposure(value){
        let occupational_exposure_yes = document.getElementById("occupational_exposure_yes");
        if(value == "yes"){
            occupational_exposure_yes.innerHTML = `
                <label>If yes, specify (can be multiple):</label>
                <div class="row">
                    <div class="col-md-4"><input class="rounded-circle form-check-input" type="checkbox" name="occupation_specify[]" value="cement"> Cement dust</div>
                    <div class="col-md-4"><input class="rounded-circle form-check-input" type="checkbox" name="occupation_specify[]" value="cotton"> Cotton</div>
                    <div class="col-md-4"><input class="rounded-circle form-check-input" type="checkbox" name="occupation_specify[]" value="chemfumes"> Chemical Fumes</div>
                    <div class="col-md-4"><input class="rounded-circle form-check-input" type="checkbox" name="occupation_specify[]" value="grains"> Grains</div>
                    <div class="col-md-4"><input class="rounded-circle form-check-input" type="checkbox" name="occupation_specify[]" value="metal"> Metal</div>
                    <div class="col-md-4"><input class="rounded-circle form-check-input" type="checkbox" name="occupation_specify[]" value="paper"> Paper</div>
                    <div class="col-md-4"><input class="rounded-circle form-check-input" type="checkbox" name="occupation_specify[]" value="radiation"> Radiation</div>
                    <div class="col-md-4"><input class="rounded-circle form-check-input" type="checkbox" name="occupation_specify[]" value="silica"> Silica</div>
                    <div class="col-md-4"><input class="rounded-circle form-check-input" type="checkbox" name="occupation_specify[]" value="smoke"> Smoke</div>
                </div>
            `;
        }else{
            occupational_exposure_yes.innerHTML = ``;
        }
    }
</script>
@endsection
