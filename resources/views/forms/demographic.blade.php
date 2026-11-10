@extends('index')
@section("title", "Demographics Profile")
@section("nav_title", "Demographic Profile of Patient")
@section("wizard_step", "2")
@section("content")
    @php
        $opt = fn ($field, $value) => old($field) == $value ? 'selected' : '';
        $suffixes = ['Jr.', 'Sr.', 'II', 'III', 'IV', 'V', 'N/A'];
        $civil = ['Single', 'Married', 'Divorced/Separated/Annulled', 'Common-law/Live-in', 'Widowed'];
        $education = ['Elementary', 'Secondary', 'Tertiary', 'Adult School', 'No Education'];
        $occupations = [
            'Managers' => 'Managers',
            'Professionals' => 'Professionals',
            'Technicians and Associate Professionals' => 'Technicians & Associate Professionals',
            'Clerical Support Workers' => 'Clerical Support Workers',
            'Service and Sales Workers' => 'Service and Sales Workers',
            'Skilled Agricultural Workers' => 'Skilled Agricultural Workers',
            'Craft and Related Trades Workers' => 'Craft and Related Trades Workers',
            'Plant and Machine Operators' => 'Plant and Machine Operators',
            'Elementary Occupations' => 'Elementary Occupations',
            'Armed Forces Occupations' => 'Armed Forces Occupations',
            'Unemployed Retired' => 'Unemployed/Retired',
            'N/A' => 'N/A',
        ];
        $sameAddress = old('same_as_address') === 'on';
    @endphp

    <form id="form" method="POST" action="{{ $formAction ?? route('submit-demograpic-profile') }}">
        @csrf
        <div class="card-body">

            {{-- ===================== Part 1: Patient identity ===================== --}}
            <div class="wizard-section" data-title="Patient Identity">
                <div class="row g-3 mb-2">
                    <div class="col-md-4">
                        <label for="first_encounter" class="form-label">Date of Patient's First Encounter <small class="text-danger">*</small></label>
                        <input type="date" class="form-control" id="first_encounter" name="patient_first_encounter"
                               value="{{ old('patient_first_encounter', now()->toDateString()) }}" max="{{ now()->toDateString() }}">
                    </div>
                    <div class="col-md-4">
                        <label for="facility_id" class="form-label">Patient's Health Facility ID No. <small class="text-danger">*</small></label>
                        <input type="text" class="form-control" id="facility_id" name="patient_health_facility_id"
                               value="{{ old('patient_health_facility_id') }}" placeholder="Health Facility ID No.">
                    </div>
                    <div class="col-md-4">
                        <label for="philhealth" class="form-label">PhilHealth Identification No. (PIN) <small class="text-danger">*</small></label>
                        <input type="text" class="form-control" id="philhealth" name="philhealth_id" inputmode="numeric" maxlength="15"
                               autocomplete="off" value="{{ old('philhealth_id') }}" placeholder="12-345678901-2">
                        <div class="form-text" id="philhealthHint">12 or 13 digits</div>
                    </div>
                </div>

                <div class="row g-3 mb-2">
                    <div class="col-md-3">
                        <label for="firstName" class="form-label">First Name <small class="text-danger">*</small></label>
                        <input type="text" class="form-control" id="firstName" name="name[firstname]" value="{{ old('name.firstname') }}" placeholder="First name">
                    </div>
                    <div class="col-md-3">
                        <label for="middleName" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="middleName" name="name[middlename]" value="{{ old('name.middlename') }}" placeholder="Middle name">
                    </div>
                    <div class="col-md-3">
                        <label for="lastName" class="form-label">Last Name <small class="text-danger">*</small></label>
                        <input type="text" class="form-control" id="lastName" name="name[lastname]" value="{{ old('name.lastname') }}" placeholder="Last name">
                    </div>
                    <div class="col-md-3">
                        <label for="suffix" class="form-label">Suffix <small class="text-danger">*</small></label>
                        <select class="form-select" id="suffix" name="name[suffix]">
                            <option value="" disabled {{ old('name.suffix') ? '' : 'selected' }}>Choose...</option>
                            @foreach($suffixes as $s)
                                <option value="{{ $s }}" {{ $opt('name.suffix', $s) }}>{{ $s }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="married" class="form-label">If married, maiden name <small class="text-muted">(optional)</small></label>
                        <input type="text" class="form-control" id="married" name="married_maiden_name" value="{{ old('married_maiden_name') }}" placeholder="Maiden name">
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col-md-3">
                        <label for="dob" class="form-label">Date of Birth <small class="text-danger">*</small></label>
                        <input type="date" class="form-control" id="dob" name="date_of_birth" value="{{ old('date_of_birth') }}" max="{{ now()->toDateString() }}">
                        <div class="form-text" id="agePreview"></div>
                    </div>
                    <div class="col-md-3">
                        <label for="sex" class="form-label">Sex at Birth <small class="text-danger">*</small></label>
                        <select class="form-select" id="sex" name="sex">
                            <option value="" disabled {{ old('sex') ? '' : 'selected' }}>Choose...</option>
                            <option value="male" {{ $opt('sex', 'male') }}>Male</option>
                            <option value="female" {{ $opt('sex', 'female') }}>Female</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="civilStatus" class="form-label">Civil Status <small class="text-danger">*</small></label>
                        <select class="form-select" id="civilStatus" name="civil_status">
                            <option value="" disabled {{ old('civil_status') ? '' : 'selected' }}>Choose...</option>
                            @foreach($civil as $c)
                                <option value="{{ $c }}" {{ $opt('civil_status', $c) }}>{{ $c }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="nationality" class="form-label">Nationality <small class="text-danger">*</small></label>
                        <input type="text" class="form-control" id="nationality" name="nationality" value="{{ old('nationality', 'Filipino') }}" placeholder="e.g. Filipino">
                    </div>
                </div>
            </div>

            {{-- ===================== Part 2: Address & contact ===================== --}}
            <div class="wizard-section" data-title="Address &amp; Contact">
                <div class="mb-4">
                    <div class="fw-semibold mb-2"><i class="fa fa-home text-primary me-1"></i> Permanent Address</div>
                    @include('forms.partials.address-select', ['prefix' => 'permanent'])
                </div>

                <div class="mb-4">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="fw-semibold"><i class="fa fa-map-marker text-primary me-1"></i> Current Address</div>
                        <div class="form-check form-switch m-0">
                            <input class="form-check-input" type="checkbox" role="switch" id="sameAddress" name="same_as_address" value="on" {{ $sameAddress ? 'checked' : '' }}>
                            <label class="form-check-label" for="sameAddress">Same as permanent address</label>
                        </div>
                    </div>
                    <div id="current_address" class="{{ $sameAddress ? 'd-none' : '' }}">
                        @include('forms.partials.address-select', ['prefix' => 'current'])
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="mobile" class="form-label">Mobile No. <small class="text-muted">(optional)</small></label>
                        <input type="tel" class="form-control" id="mobile" name="mobile_number" value="{{ old('mobile_number') }}" placeholder="09123456789" maxlength="13">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email Address <small class="text-muted">(optional)</small></label>
                        <input type="email" class="form-control" id="email" name="email_address" value="{{ old('email_address') }}" placeholder="example@email.com">
                    </div>
                </div>
            </div>

            {{-- ===================== Part 3: Nearest relative ===================== --}}
            <div class="wizard-section" data-title="Relative / Guardian">
                <div class="mb-4">
                    <div class="fw-semibold mb-2"><i class="fa fa-users text-primary me-1"></i> Nearest Relative / Legal Guardian Permanent Address</div>
                    @include('forms.partials.address-select', ['prefix' => 'relative'])
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="relative_mobile" class="form-label">Relative / Guardian Mobile No. <small class="text-muted">(optional)</small></label>
                        <input type="tel" class="form-control" id="relative_mobile" name="relative_phone_number" value="{{ old('relative_phone_number') }}" placeholder="09123456789" maxlength="13">
                    </div>
                    <div class="col-md-6">
                        <label for="relative_email" class="form-label">Relative / Guardian Email <small class="text-muted">(optional)</small></label>
                        <input type="email" class="form-control" id="relative_email" name="relative_email" value="{{ old('relative_email') }}" placeholder="example@email.com">
                    </div>
                </div>
            </div>

            {{-- ===================== Part 4: Education & occupation ===================== --}}
            <div class="wizard-section" data-title="Education &amp; Occupation">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="education" class="form-label">Highest Level of Education <small class="text-danger">*</small></label>
                        <select class="form-select" id="education" name="highest_education">
                            <option value="" disabled {{ old('highest_education') ? '' : 'selected' }}>Choose...</option>
                            @foreach($education as $e)
                                <option value="{{ $e }}" {{ $opt('highest_education', $e) }}>{{ $e }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="occupation" class="form-label">Occupation <small class="text-danger">*</small></label>
                        <select class="form-select" id="occupation" name="occupation">
                            <option value="" disabled {{ old('occupation') ? '' : 'selected' }}>Choose...</option>
                            @foreach($occupations as $value => $label)
                                <option value="{{ $value }}" {{ $opt('occupation', $value) }}>{{ $label }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="yearsOccupation" class="form-label">Number of Years in Occupation <small class="text-danger">*</small></label>
                        <input type="number" class="form-control" id="yearsOccupation" name="number_of_years_in_occupation" min="0" max="100"
                               value="{{ old('number_of_years_in_occupation') }}" placeholder="e.g. 15">
                    </div>
                </div>
            </div>
        </div>

        @include('forms.partials.wizard-footer')
    </form>
@endsection

@section("script")
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const same = document.getElementById("sameAddress");
            const current = document.getElementById("current_address");
            same.addEventListener("change", function () {
                current.classList.toggle('d-none', this.checked);
            });

            // PhilHealth PIN: digits only, 12 or 13; shown as XX-XXXXXXXXX-X (12) or XX-XXXXXXXXXX-X (13)
            const pin = document.getElementById('philhealth');
            const pinHint = document.getElementById('philhealthHint');
            const formatPin = () => {
                const d = pin.value.replace(/\D/g, '').slice(0, 13);
                const mid = d.length === 13 ? 12 : 11;
                pin.value = [d.slice(0, 2), d.slice(2, mid), d.slice(mid)].filter(Boolean).join('-');
                const ok = d.length === 12 || d.length === 13;
                pinHint.textContent = ok ? `\u2713 ${d.length} digits` : `${d.length} digits (12 or 13 needed)`;
                pinHint.className = 'form-text ' + (ok ? 'text-success' : (d.length ? 'text-warning' : ''));
            };
            pin.addEventListener('input', formatPin);
            formatPin();

            const dob = document.getElementById('dob');
            const agePreview = document.getElementById('agePreview');
            const showAge = () => {
                if (!dob.value) { agePreview.textContent = ''; return; }
                const b = new Date(dob.value), t = new Date();
                let age = t.getFullYear() - b.getFullYear();
                if (t.getMonth() < b.getMonth() || (t.getMonth() === b.getMonth() && t.getDate() < b.getDate())) age--;
                agePreview.textContent = age >= 0 ? `Age: ${age} year${age === 1 ? '' : 's'}` : '';
            };
            dob.addEventListener('change', showAge);
            showAge();
        });
    </script>
@endsection
