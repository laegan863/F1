@extends('index')
@section("title", "Update Demographics Profile")
@section("nav_title", "UPDATE DEMOGRAPHIC PROFILE OF PATIENT")
@section("content")
    @php
        $isUpdate = isset($data) && $data;
        $formAction = $isUpdate ? route('update-demographic-profile-data', ['hospitalID' => $demographic->hospitalID]) : route('submit-demograpic-profile');
    @endphp
    <form id="form" method="POST" action="{{ $formAction }}">
        @csrf
        <div class="card-body p-5">
            <div class="row mb-3">
                <div class="col-md-4 mb-3">
                    <label for="firstName" class="form-label">Date of Patient's First Encounter<small class="text-danger">*</small></label>
                    <input type="date" class="form-control" value="{{ old('patient_first_encounter', $isUpdate ? $data->patient_first_encounter : \Carbon\Carbon::now()->toDateString()) }}" name="patient_first_encounter" id="" autofocus>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Patient's Health Facility ID No.<small class="text-danger">*</small></label>
                    <input type="text" class="form-control" value="{{ old('patient_health_facility_id', $isUpdate ? $data->patient_health_facility_id : '') }}" name="patient_health_facility_id" id="" placeholder="Enter Patient's Health Facility ID No.">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="lastName" class="form-label">PhilHealth Identification No. (PIN)<small class="text-danger">*</small></label>
                    <input minlength="13" maxlength="13" type="text" class="form-control" value="{{ old('philhealth_id', $isUpdate ? $data->philhealth_id : '') }}" name="philhealth_id" id="" placeholder="Enter PhilHealth Identification No. (PIN)">
                </div>
                <div class="col-md-3">
                    <label for="firstName" class="form-label">First Name<small class="text-danger">*</small></label>
                    <input type="text" class="form-control" value="{{ old('name.firstname', $isUpdate && isset($data->name['firstname']) ? $data->name['firstname'] : '') }}" name="name[firstname]" id="firstName" placeholder="Enter first name">
                </div>
                <div class="col-md-3">
                    <label for="middleName" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" value="{{ old('name.middlename', $isUpdate && isset($data->name['middlename']) ? $data->name['middlename'] : '') }}" name="name[middlename]" id="middleName" placeholder="Enter middle name">
                </div>
                <div class="col-md-3">
                    <label for="lastName" class="form-label">Last Name<small class="text-danger">*</small></label>
                    <input type="text" class="form-control" value="{{ old('name.lastname', $isUpdate && isset($data->name['lastname']) ? $data->name['lastname'] : '') }}" name="name[lastname]" id="lastName" placeholder="Enter last name">
                </div>
                <div class="col-md-3">
                    <label for="suffix" class="form-label">Suffix<small class="text-danger">*</small></label>
                    <select class="form-select" id="suffix" name="name[suffix]">
                        <option disabled {{ old('name.suffix', $isUpdate && isset($data->name['suffix']) ? $data->name['suffix'] : '') ? '' : 'selected' }}>Choose...</option>
                        <option value="Jr." {{ old('name.suffix', $isUpdate && isset($data->name['suffix']) ? $data->name['suffix'] : '') == 'Jr.' ? 'selected' : '' }}>Jr.</option>
                        <option value="Sr." {{ old('name.suffix', $isUpdate && isset($data->name['suffix']) ? $data->name['suffix'] : '') == 'Sr.' ? 'selected' : '' }}>Sr.</option>
                        <option value="II"  {{ old('name.suffix', $isUpdate && isset($data->name['suffix']) ? $data->name['suffix'] : '') == 'II'  ? 'selected' : '' }}>II</option>
                        <option value="III" {{ old('name.suffix', $isUpdate && isset($data->name['suffix']) ? $data->name['suffix'] : '') == 'III' ? 'selected' : '' }}>III</option>
                        <option value="IV"  {{ old('name.suffix', $isUpdate && isset($data->name['suffix']) ? $data->name['suffix'] : '') == 'IV'  ? 'selected' : '' }}>IV</option>
                        <option value="V"   {{ old('name.suffix', $isUpdate && isset($data->name['suffix']) ? $data->name['suffix'] : '') == 'V'   ? 'selected' : '' }}>V</option>
                        <option value="N/A" {{ old('name.suffix', $isUpdate && isset($data->name['suffix']) ? $data->name['suffix'] : '') == 'N/A' ? 'selected' : '' }}>N/A</option>
                    </select>
                </div>
                <div class="col-md-12 mt-3">
                    <label for="married" class="form-label">If Married, Maiden Name <small class="text-danger">(optional)</small></label>
                    <input type="text" class="form-control" name="married_maiden_name" value="{{ old('married_maiden_name', $isUpdate ? $data->married_maiden_name : '') }}" id="married" placeholder="Enter Maiden Name">
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="dob" class="form-label">Date of Birth<small class="text-danger">*</small></label>
                    <input type="date" class="form-control" value="{{ old('date_of_birth', $isUpdate ? $data->date_of_birth : '') }}" name="date_of_birth" id="dob">
                </div>
                <div class="col-md-3">
                    <label for="sex" class="form-label">Sex at Birth<small class="text-danger">*</small></label>
                    <select class="form-select" name="sex" id="sex">
                        <option disabled {{ old('sex', $isUpdate ? $data->sex : '') ? '' : 'selected' }}>Choose...</option>
                        <option value="male"   {{ old('sex', $isUpdate ? $data->sex : '') == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('sex', $isUpdate ? $data->sex : '') == 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="civilStatus" class="form-label">Civil Status<small class="text-danger">*</small></label>
                    <select class="form-select" name="civil_status" id="civilStatus">
                        <option disabled {{ old('civil_status', $isUpdate ? $data->civil_status : '') ? '' : 'selected' }}>Choose...</option>
                        <option value="Single" {{ old('civil_status', $isUpdate ? $data->civil_status : '') == 'Single' ? 'selected' : '' }}>Single</option>
                        <option value="Married" {{ old('civil_status', $isUpdate ? $data->civil_status : '') == 'Married' ? 'selected' : '' }}>Married</option>
                        <option value="Divorced/Separated/Annulled" {{ old('civil_status', $isUpdate ? $data->civil_status : '') == 'Divorced/Separated/Annulled' ? 'selected' : '' }}>Divorced/Separated/Annulled</option>
                        <option value="Common-law/Live-in" {{ old('civil_status', $isUpdate ? $data->civil_status : '') == 'Common-law/Live-in' ? 'selected' : '' }}>Common-law/Live-in</option>
                        <option value="Widowed" {{ old('civil_status', $isUpdate ? $data->civil_status : '') == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="nationality" class="form-label">Nationality<small class="text-danger">*</small></label>
                    <input type="text" class="form-control" value="{{ old('nationality', $isUpdate ? $data->nationality : '') }}" name="nationality" id="nationality" placeholder="e.g. Filipino">
                </div>
            </div>

            <div class="mb-3">
                <label for="permanentAddress" class="form-label fw-semibold">Permanent Address</label>
                <div class="row mb-3">
                    @if($isUpdate)
                        <div class="col-md-4">
                            <label for="province" class="form-label">Province<small class="text-danger">*</small></label>
                            <input type="text" class="form-control" name="permanent[province]" value="{{ old('permanent.province', isset($data->permanent['province']) ? $data->permanent['province'] : '') }}" placeholder="Province">
                        </div>
                        <div class="col-md-4">
                            <label for="city" class="form-label">City/Municipality<small class="text-danger">*</small></label>
                            <input type="text" class="form-control" name="permanent[city]" value="{{ old('permanent.city', isset($data->permanent['city']) ? $data->permanent['city'] : '') }}" placeholder="City/Municipality">
                        </div>
                        <div class="col-md-4">
                            <label for="barangay" class="form-label">Barangay<small class="text-danger">*</small></label>
                            <input type="text" class="form-control" name="permanent[barangay]" value="{{ old('permanent.barangay', isset($data->permanent['barangay']) ? $data->permanent['barangay'] : '') }}" placeholder="Barangay">
                        </div>
                    @else
                        <div class="col-md-4">
                            <label for="province" class="form-label">Province<small class="text-danger">*</small></label>
                            <select class="form-select" id="province" name="permanent[province]">
                                <option value="">Select Province</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="city" class="form-label">City/Municipality<small class="text-danger">*</small></label>
                            <select class="form-select" name="permanent[city]" id="city" disabled>
                                <option value="">Select City</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="barangay" class="form-label">Barangay<small class="text-danger">*</small></label>
                            <select class="form-select" name="permanent[barangay]" id="barangay" disabled>
                                <option value="">Select Barangay</option>
                            </select>
                        </div>
                    @endif
                </div>
            </div>

            <div class="mb-3">
                <label for="currentAddress" class="form-label fw-semibold">Current Address</label>
                <div class="row mb-3 {{ old('same_as_address', $isUpdate && isset($data->same_as_address) && $data->same_as_address ? 'on' : '') ? 'd-none' : '' }}" id="current_address">
                    @if($isUpdate)
                        <div class="col-md-4">
                            <label for="currentprovince" class="form-label">Province<small class="text-danger">*</small></label>
                            <input type="text" class="form-control" name="current[province]" value="{{ old('current.province', isset($data->current['province']) ? $data->current['province'] : '') }}" placeholder="Province">
                        </div>
                        <div class="col-md-4">
                            <label for="currentcity" class="form-label">City/Municipality<small class="text-danger">*</small></label>
                            <input type="text" class="form-control" name="current[city]" value="{{ old('current.city', isset($data->current['city']) ? $data->current['city'] : '') }}" placeholder="City/Municipality">
                        </div>
                        <div class="col-md-4">
                            <label for="currentbarangay" class="form-label">Barangay<small class="text-danger">*</small></label>
                            <input type="text" class="form-control" name="current[barangay]" value="{{ old('current.barangay', isset($data->current['barangay']) ? $data->current['barangay'] : '') }}" placeholder="Barangay">
                        </div>
                    @else
                        <div class="col-md-4">
                            <label for="currentprovince" class="form-label">Province<small class="text-danger">*</small></label>
                            <select class="form-select" name="current[province]" id="currentprovince">
                                <option value="">Select Province</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="currentcity" class="form-label">City/Municipality<small class="text-danger">*</small></label>
                            <select class="form-select" name="current[city]" id="currentcity" disabled>
                                <option value="">Select City</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="currentbarangay" class="form-label">Barangay<small class="text-danger">*</small></label>
                            <select class="form-select" name="current[barangay]" id="currentbarangay" disabled>
                                <option value="">Select Barangay</option>
                            </select>
                        </div>
                    @endif
                </div>

                <div class="form-check mt-1">
                    <input class="form-check-input" type="checkbox" id="sameAddress" name="same_as_address" value="on"
                        {{ old('same_as_address', $isUpdate && isset($data->same_as_address) && $data->same_as_address ? 'on' : '') ? 'checked' : '' }}>
                    <label class="form-check-label" for="sameAddress">
                        Same as Permanent Address
                    </label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="mobile" class="form-label">Mobile No.<small class="text-danger">*</small></label>
                    <input type="tel" class="form-control" id="mobile" value="{{ old('mobile_number', $isUpdate ? $data->mobile_number : '') }}" name="mobile_number" placeholder="09123456789">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email Address<small class="text-danger">*</small></label>
                    <input type="email" class="form-control" id="email" name="email_address" value="{{ old('email_address', $isUpdate ? $data->email_address : '') }}" placeholder="example@email.com">
                </div>
            </div>

            <div class="mb-3">
                <label for="permanentAddress" class="form-label fw-semibold">Nearest Relative / Legal Guardian Permanent Address</label>
                <div class="row mb-3">
                    @if($isUpdate)
                        <div class="col-md-4">
                            <label for="province" class="form-label">Province<small class="text-danger">*</small></label>
                            <input type="text" class="form-control" name="relative[province]" value="{{ old('relative.province', isset($data->relative['province']) ? $data->relative['province'] : '') }}" placeholder="Province">
                        </div>
                        <div class="col-md-4">
                            <label for="city" class="form-label">City/Municipality<small class="text-danger">*</small></label>
                            <input type="text" class="form-control" name="relative[city]" value="{{ old('relative.city', isset($data->relative['city']) ? $data->relative['city'] : '') }}" placeholder="City/Municipality">
                        </div>
                        <div class="col-md-4">
                            <label for="barangay" class="form-label">Barangay<small class="text-danger">*</small></label>
                            <input type="text" class="form-control" name="relative[barangay]" value="{{ old('relative.barangay', isset($data->relative['barangay']) ? $data->relative['barangay'] : '') }}" placeholder="Barangay">
                        </div>
                    @else
                        <div class="col-md-4">
                            <label for="province" class="form-label">Province<small class="text-danger">*</small></label>
                            <select class="form-select" id="relativeprovince" name="relative[province]">
                                <option value="">Select Province</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="city" class="form-label">City/Municipality<small class="text-danger">*</small></label>
                            <select class="form-select" id="relativecity" name="relative[city]" disabled>
                                <option value="">Select City</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="barangay" class="form-label">Barangay<small class="text-danger">*</small></label>
                            <select class="form-select" id="relativebarangay" name="relative[barangay]" disabled>
                                <option value="">Select Barangay</option>
                            </select>
                        </div>
                    @endif
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="mobile" class="form-label">Nearest Relative / Legal Guardian Mobile Contact No. <small class="text-danger">*</small></label>
                    <input type="tel" class="form-control" value="{{ old('relative_phone_number', $isUpdate ? $data->relative_phone_number : '') }}" name="relative_phone_number" placeholder="09123456789">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Nearest Relative / Legal Guardian Email Address <small class="text-danger">(optional)</small></label>
                    <input type="email" class="form-control" value="{{ old('relative_email', $isUpdate ? $data->relative_email : '') }}" name="relative_email" placeholder="example@email.com">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="education" class="form-label">Highest Level of Education <small class="text-danger">*</small></label>
                        <select class="form-select" name="highest_education" id="education">
                            <option disabled {{ old('highest_education', $isUpdate ? $data->highest_education : '') ? '' : 'selected' }}>Choose...</option>
                            <option value="Elementary" {{ old('highest_education', $isUpdate ? $data->highest_education : '') == 'Elementary' ? 'selected' : '' }}>Elementary</option>
                            <option value="Secondary" {{ old('highest_education', $isUpdate ? $data->highest_education : '') == 'Secondary' ? 'selected' : '' }}>Secondary</option>
                            <option value="Tertiary" {{ old('highest_education', $isUpdate ? $data->highest_education : '') == 'Tertiary' ? 'selected' : '' }}>Tertiary</option>
                            <option value="Adult School" {{ old('highest_education', $isUpdate ? $data->highest_education : '') == 'Adult School' ? 'selected' : '' }}>Adult School</option>
                            <option value="No Education" {{ old('highest_education', $isUpdate ? $data->highest_education : '') == 'No Education' ? 'selected' : '' }}>No Education</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="occupation" class="form-label">Occupation <small class="text-danger">*</small></label>
                        <select class="form-select" name="occupation" id="occupation">
                            <option value="" disabled {{ old('occupation', $isUpdate ? $data->occupation : '') ? '' : 'selected' }}>Choose...</option>
                            <option value="Managers" {{ old('occupation', $isUpdate ? $data->occupation : '') == 'Managers' ? 'selected' : '' }}>Managers</option>
                            <option value="Professionals" {{ old('occupation', $isUpdate ? $data->occupation : '') == 'Professionals' ? 'selected' : '' }}>Professionals</option>
                            <option value="Technicians and Associate Professionals" {{ old('occupation', $isUpdate ? $data->occupation : '') == 'Technicians and Associate Professionals' ? 'selected' : '' }}>Technicians & Associate Professionals</option>
                            <option value="Clerical Support Workers" {{ old('occupation', $isUpdate ? $data->occupation : '') == 'Clerical Support Workers' ? 'selected' : '' }}>Clerical Support Workers</option>
                            <option value="Service and Sales Workers" {{ old('occupation', $isUpdate ? $data->occupation : '') == 'Service and Sales Workers' ? 'selected' : '' }}>Service and Sales Workers</option>
                            <option value="Skilled Agricultural Workers" {{ old('occupation', $isUpdate ? $data->occupation : '') == 'Skilled Agricultural Workers' ? 'selected' : '' }}>Skilled Agricultural Workers</option>
                            <option value="Craft and Related Trades Workers" {{ old('occupation', $isUpdate ? $data->occupation : '') == 'Craft and Related Trades Workers' ? 'selected' : '' }}>Craft and Related Trades Workers</option>
                            <option value="Plant and Machine Operators" {{ old('occupation', $isUpdate ? $data->occupation : '') == 'Plant and Machine Operators' ? 'selected' : '' }}>Plant and Machine Operators</option>
                            <option value="Elementary Occupations" {{ old('occupation', $isUpdate ? $data->occupation : '') == 'Elementary Occupations' ? 'selected' : '' }}>Elementary Occupations</option>
                            <option value="Armed Forces Occupations" {{ old('occupation', $isUpdate ? $data->occupation : '') == 'Armed Forces Occupations' ? 'selected' : '' }}>Armed Forces Occupations</option>
                            <option value="Unemployed Retired" {{ old('occupation', $isUpdate ? $data->occupation : '') == 'Unemployed Retired' ? 'selected' : '' }}>Unemployed/Retired</option>
                            <option value="N/A" {{ old('occupation', $isUpdate ? $data->occupation : '') == 'N/A' ? 'selected' : '' }}>N/A</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="yearsOccupation" class="form-label">Number of Years in Occupation <small class="text-danger">*</small></label>
                <input type="number" class="form-control" value="{{ old('number_of_years_in_occupation', $isUpdate ? $data->number_of_years_in_occupation : '') }}" name="number_of_years_in_occupation" id="yearsOccupation" placeholder="e.g. 15">
            </div>
        </div>

        <div class="card-footer text-end">
            <button type="reset" class="btn btn-secondary rounded-0">Reset</button>
            <button type="button" onclick="handleSubmit()" class="btn btn-primary rounded-0">{{ $isUpdate ? 'Update' : 'Submit' }}</button>
        </div>
    </form>
@endsection
@section("script")
    <script>
        function handleSubmit() {
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to {{ $isUpdate ? 'update' : 'submit' }} this form?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, {{ $isUpdate ? 'update' : 'submit' }} it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById("form").submit();
                }
            });
        }

        document.addEventListener("DOMContentLoaded", function() {
            // Handle same as permanent address checkbox for both create and update modes
            const sameAddressCheckbox = document.getElementById("sameAddress");
            const currentAddressDiv = document.getElementById('current_address');
            
            if (sameAddressCheckbox) {
                sameAddressCheckbox.addEventListener("change", function () {
                    if (this.checked) {
                        currentAddressDiv.classList.add('d-none');
                    } else {
                        currentAddressDiv.classList.remove('d-none');
                    }
                });
            }

            @if(!$isUpdate)
            const permanent = () => {
                const province = document.getElementById("province");
                const city = document.getElementById("city");
                const barangay = document.getElementById("barangay");

                fetch("https://psgc.gitlab.io/api/provinces/")
                    .then(res => res.json())
                    .then(data => {
                        data.forEach(prov => {
                            province.add(new Option(prov.name, prov.code));
                        });
                    });

                province.addEventListener("change", function () {
                    city.innerHTML = "<option value=''>Select City</option>";
                    barangay.innerHTML = "<option value=''>Select Barangay</option>";
                    city.disabled = true;
                    barangay.disabled = true;

                    if (this.value) {
                        fetch(`https://psgc.gitlab.io/api/provinces/${this.value}/cities-municipalities/`)
                            .then(res => res.json())
                            .then(data => {
                                data.forEach(ct => {
                                    city.add(new Option(ct.name, ct.code));
                                });
                                city.disabled = false;
                            });
                    }
                });

                city.addEventListener("change", function () {
                    barangay.innerHTML = "<option value=''>Select Barangay</option>";
                    barangay.disabled = true;

                    if (this.value) {
                        fetch(`https://psgc.gitlab.io/api/cities-municipalities/${this.value}/barangays/`)
                            .then(res => res.json())
                            .then(data => {
                                data.forEach(brgy => {
                                    barangay.add(new Option(brgy.name, brgy.code));
                                });
                                barangay.disabled = false;
                            });
                    }
                });
            }

            const current = () => {
                const currentprovince = document.getElementById("currentprovince");
                const currentcity = document.getElementById("currentcity");
                const currentbarangay = document.getElementById("currentbarangay");

                fetch("https://psgc.gitlab.io/api/provinces/")
                    .then(res => res.json())
                    .then(data => {
                        data.forEach(prov => {
                            currentprovince.add(new Option(prov.name, prov.code));
                        });
                    });

                currentprovince.addEventListener("change", function () {
                    currentcity.innerHTML = "<option value=''>Select City</option>";
                    currentbarangay.innerHTML = "<option value=''>Select Barangay</option>";
                    currentcity.disabled = true;
                    currentbarangay.disabled = true;

                    if (this.value) {
                        fetch(`https://psgc.gitlab.io/api/provinces/${this.value}/cities-municipalities/`)
                            .then(res => res.json())
                            .then(data => {
                                data.forEach(ct => {
                                    currentcity.add(new Option(ct.name, ct.code));
                                });
                                currentcity.disabled = false;
                            });
                    }
                });

                currentcity.addEventListener("change", function () {
                    currentbarangay.innerHTML = "<option value=''>Select Barangay</option>";
                    currentbarangay.disabled = true;

                    if (this.value) {
                        fetch(`https://psgc.gitlab.io/api/cities-municipalities/${this.value}/barangays/`)
                            .then(res => res.json())
                            .then(data => {
                                data.forEach(brgy => {
                                    currentbarangay.add(new Option(brgy.name, brgy.code));
                                });
                                currentbarangay.disabled = false;
                            });
                    }
                });
            }

            const relative = () => {
                const relativeprovince = document.getElementById("relativeprovince");
                const relativecity = document.getElementById("relativecity");
                const relativebarangay = document.getElementById("relativebarangay");

                fetch("https://psgc.gitlab.io/api/provinces/")
                    .then(res => res.json())
                    .then(data => {
                        data.forEach(prov => {
                            relativeprovince.add(new Option(prov.name, prov.code));
                        });
                    });

                relativeprovince.addEventListener("change", function () {
                    relativecity.innerHTML = "<option value=''>Select City</option>";
                    relativebarangay.innerHTML = "<option value=''>Select Barangay</option>";
                    relativecity.disabled = true;
                    relativebarangay.disabled = true;

                    if (this.value) {
                        fetch(`https://psgc.gitlab.io/api/provinces/${this.value}/cities-municipalities/`)
                            .then(res => res.json())
                            .then(data => {
                                data.forEach(ct => {
                                    relativecity.add(new Option(ct.name, ct.code));
                                });
                                relativecity.disabled = false;
                            });
                    }
                });

                relativecity.addEventListener("change", function () {
                    relativebarangay.innerHTML = "<option value=''>Select Barangay</option>";
                    relativebarangay.disabled = true;

                    if (this.value) {
                        fetch(`https://psgc.gitlab.io/api/cities-municipalities/${this.value}/barangays/`)
                            .then(res => res.json())
                            .then(data => {
                                data.forEach(brgy => {
                                    relativebarangay.add(new Option(brgy.name, brgy.code));
                                });
                                relativebarangay.disabled = false;
                            });
                    }
                });
            }
            
            permanent();
            current();
            relative();
            @endif
        });
        @if($isUpdate)
        @endif
    </script>
@endsection
