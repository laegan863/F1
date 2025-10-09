@extends('index')
@section("title", "Pain Assessment (PQRST)")
@section("nav_title", "B. Pain Assessment (PQRST)")
@section("content")
    <form id="form" method="POST" action="{{ route('store.pain-assessment') }}" class="p-3">
        @csrf

        <!-- Date + Pain -->
        <div class="mb-3">
            <label class="form-label fw-bold">Date of Initial Assessment</label>
            <input type="date" name="assessment_date" class="form-control w-auto d-inline-block"
                   value="{{ old('assessment_date') }}">
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Is there Pain?</label><br>
            <div class="form-check form-check-inline">
                <input type="radio" name="is_pain" value="Yes" class="form-check-input rounded-circle"
                       {{ old('is_pain') == 'Yes' ? 'checked' : '' }}>
                <label class="form-check-label">Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="is_pain" value="No" class="form-check-input rounded-circle"
                       {{ old('is_pain','No') == 'No' ? 'checked' : '' }}>
                <label class="form-check-label">No</label>
            </div>
        </div>

        <!-- Pain Score Acceptable -->
        <div class="mb-3">
            <label class="form-label fw-bold">Pain Score acceptable to Patient</label><br>
            <input type="text" name="pain_score" class="form-control" value="{{ old('pain_score') }}">
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Provocation</label><br>
            <input type="text" name="provocation" class="form-control" value="{{ old('provocation') }}">
        </div>

        <!-- Quality -->
        <div class="mb-3">
            <label class="form-label fw-bold">Quality</label><br>
            @foreach(['Sensory','Affective','Cognitive'] as $label)
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="provocation_quality[]" value="{{ $label }}"
                           class="form-check-input rounded-circle"
                           {{ in_array($label, old('provocation_quality', [])) ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $label }}</label>
                </div>
            @endforeach
        </div>

        <div class="my-5">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <img src="{{ asset("f4-img-2.png") }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-9">
                    <label class="form-label fw-bold">Region</label>
                    <textarea name="provocation_region" class="form-control" rows="3">{{ old('provocation_region') }}</textarea>
                    <input type="text" name="provocation_remarks" class="form-control mt-2"
                           placeholder="Remarks" value="{{ old('provocation_remarks') }}">
                </div>
            </div>
        </div>

        <!-- Severity -->
        <div class="mb-3">
            <label class="form-label fw-bold">Severity</label><br>
            <div class="d-flex flex-wrap gap-2">
                @for($i=1;$i<=10;$i++)
                    <div class="form-check form-check-inline">
                        <input type="radio" name="severity" value="{{ $i }}" class="form-check-input rounded-circle"
                               {{ old('severity') == $i ? 'checked' : '' }}>
                        <label class="form-check-label">{{ $i }}</label>
                    </div>
                @endfor
            </div>
        </div>

        <!-- Timing -->
        <div class="mb-3">
            <label class="form-label fw-bold">Timing</label>
            <textarea name="timing" class="form-control" rows="2">{{ old('timing') }}</textarea>
        </div>

        <!-- Additional Findings -->
        <div class="mb-3">
            <label class="form-label fw-bold">Additional Pertinent Findings</label>
            <textarea name="findings" class="form-control" rows="2">{{ old('findings') }}</textarea>
        </div>

        <!-- Pediatric Pain Assessment -->
        <div class="mb-3">
            <h6 class="fw-bold">Pain Assessment for Pediatric Patients</h6>
            <div>
                <img src="{{ asset("f4-img-1.png") }}" alt="" class="img-fluid">
                <div class="ps-4" style="font-size: 12px">
                    No hurt ... Hurts Worst
                </div>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th colspan="4">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Verbal/Vocal -->
                    <tr>
                        <td><strong>Verbal/Vocal</strong></td>
                        <td colspan="4">
                            @foreach(['0 = Positive','1 = Other complaint, whimper','2 = Pain, crying'] as $desc)
                                <div class="form-check">
                                    <input type="checkbox" name="verbal_vocal[]" value="{{ $desc }}"
                                           class="form-check-input rounded-circle"
                                           {{ in_array($desc, old('verbal_vocal', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label">{{ $desc }}</label>
                                </div>
                            @endforeach
                        </td>
                    </tr>

                    <!-- Body Movement -->
                    <tr>
                        <td><strong>Body Movement</strong></td>
                        <td colspan="4">
                            @foreach(['0 = Moves easily','1 = Neutral shifting','2 = Tense, failing arms/leg'] as $desc)
                                <div class="form-check">
                                    <input type="checkbox" name="body_movement[]" value="{{ $desc }}"
                                           class="form-check-input rounded-circle"
                                           {{ in_array($desc, old('body_movement', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label">{{ $desc }}</label>
                                </div>
                            @endforeach
                        </td>
                    </tr>

                    <!-- Facial -->
                    <tr>
                        <td><strong>Facial</strong></td>
                        <td colspan="4">
                            @foreach(['0 = Smiling','1 = Neutral shifting','2 = Frown, grimace','3 = Clenched teeth'] as $desc)
                                <div class="form-check">
                                    <input type="checkbox" name="facial[]" value="{{ $desc }}"
                                           class="form-check-input rounded-circle"
                                           {{ in_array($desc, old('facial', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label">{{ $desc }}</label>
                                </div>
                            @endforeach
                        </td>
                    </tr>

                    <!-- Touching -->
                    <tr>
                        <td><strong>Touching (localizing pain)</strong></td>
                        <td colspan="4">
                            @foreach(['0 = No touching','1 = Reaching patting','2 = Grabbing'] as $desc)
                                <div class="form-check">
                                    <input type="checkbox" name="touching[]" value="{{ $desc }}"
                                           class="form-check-input rounded-circle"
                                           {{ in_array($desc, old('touching', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label">{{ $desc }}</label>
                                </div>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Associated Signs -->
        <div class="mb-3">
            <h6 class="fw-bold">Associated Signs/Symptoms</h6>
            <input type="text" name="associated_signs" class="form-control" value="{{ old('associated_signs') }}">
        </div>

        <!-- Pain Diagnosis -->
        <div class="mb-3">
            <h6 class="fw-bold">Pain Diagnosis</h6>
            @foreach(['Acute Pain','Chronic Pain','Neuropathic Pain','Nociceptive Pain','Psychogenic Pain','Phantom Pain','Central Pain','Nociplastic Pain'] as $symptom)
                <div class="form-check">
                    <input type="checkbox" name="signs[]" value="{{ $symptom }}" class="form-check-input rounded-circle"
                           {{ in_array($symptom, old('signs', [])) ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $symptom }}</label>
                </div>
            @endforeach
        </div>

        <!-- Pain Management -->
        <div class="mb-3">
            <h6 class="fw-bold">Pain Management</h6>
            @foreach([
                'paracetamol'=>'Paracetamol',
                'nsaids'=>'NSAIDs (Nonsteroidal Anti-inflammatory Drugs)',
                'tramadol'=>'Tramadol',
                'opioid'=>'Strong Opioid',
                'other_drugs'=>'Other Drugs',
                'non_pharma'=>'Other Non-pharmacologic Treatment'
            ] as $key=>$label)
                <div class="border p-2 mb-2">
                    <label class="form-label">{{ $label }}</label><br>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="{{ $key }}" value="Yes" class="form-check-input rounded-circle"
                               onclick="toggleSection('{{ $key }}Details')"
                               {{ old($key) == 'Yes' ? 'checked' : '' }}>
                        <label class="form-check-label">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="{{ $key }}" value="No" class="form-check-input rounded-circle"
                               onclick="toggleSection('{{ $key }}Details')"
                               {{ old($key,'No') == 'No' ? 'checked' : '' }}>
                        <label class="form-check-label">No</label>
                    </div>

                    <div id="{{ $key }}Details" class="{{ old($key) == 'Yes' ? '' : 'd-none' }} mt-2">
                        @if($key == "nsaids")
                            <input type="text" placeholder="if yes, name of NSAID" name="nsaids_specify_name"
                                   class="form-control my-2" value="{{ old('nsaids_specify_name') }}">
                        @endif
                        @if($key == "opioid")
                            <input type="text" placeholder="if yes, name of Strong Opioid" name="opioid_specify_name"
                                   class="form-control my-2" value="{{ old('opioid_specify_name') }}">
                        @endif
                        @if($key == "other_drugs" || $key == "non_pharma")
                            <input type="text" placeholder="if yes, specify name" name="{{ $key }}_specify_name"
                                   class="form-control my-2" value="{{ old($key.'_specify_name') }}">
                        @endif
                        <label class="form-label">If Yes, Is pain controlled?</label><br>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_pain_controlled" value="Yes"
                                   class="form-check-input rounded-circle"
                                   {{ old($key.'_pain_controlled') == 'Yes' ? 'checked' : '' }}>
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="{{ $key }}_pain_controlled" value="No"
                                   class="form-check-input rounded-circle"
                                   {{ old($key.'_pain_controlled') == 'No' ? 'checked' : '' }}>
                            <label class="form-check-label">No</label>
                        </div>
                        <div>
                            <label class="form-label mt-2">Date of Administration</label>
                            <input type="date" name="{{ $key }}_date" class="form-control w-auto"
                                   value="{{ old($key.'_date') }}">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Submit -->
        <div class="text-end">
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
</script>
@endsection
