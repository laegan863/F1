@extends('index')
@section("title", "Demographics Profile")
@section("nav_title", "DEMOGRAPHIC PROFILE OF PATIENT")
@section("content")
    <form id="form" method="POST" action="{{ route('submit-demograpic-profile') }}">
        @csrf
        <div class="card-body p-5">
            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="firstName" class="form-label">First Name<small class="text-danger">*</small></label>
                    {{-- @error('name.firstname')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror --}}
                    <input type="text" class="form-control" value="{{ old('name.firstname') }}" name="name[firstname]" id="firstName" placeholder="Enter first name" autofocus>
                </div>
                <div class="col-md-3">
                    <label for="middleName" class="form-label">Middle Name<small class="text-danger">*</small></label>
                    {{-- @error('name.middlename')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror --}}
                    <input type="text" class="form-control" value="{{ old('name.middlename') }}" name="name[middlename]" id="middleName" placeholder="Enter middle name">
                </div>
                <div class="col-md-3">
                    <label for="lastName" class="form-label">Last Name<small class="text-danger">*</small></label>
                    {{-- @error('name.lastname')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror --}}
                    <input type="text" class="form-control" value="{{ old('name.lastname') }}" name="name[lastname]" id="lastName" placeholder="Enter last name">
                </div>
                <div class="col-md-3">
                    <label for="suffix" class="form-label">Suffix<small class="text-danger">*</small></label>
                    {{-- @error('name.suffix')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror --}}
                    <select class="form-select" id="suffix" name="name[suffix]">
                        <option disabled {{ old('name.suffix') ? '' : 'selected' }}>Choose...</option>
                        <option value="Jr." {{ old('name.suffix') == 'Jr.' ? 'selected' : '' }}>Jr.</option>
                        <option value="Sr." {{ old('name.suffix') == 'Sr.' ? 'selected' : '' }}>Sr.</option>
                        <option value="II"  {{ old('name.suffix') == 'II'  ? 'selected' : '' }}>II</option>
                        <option value="III" {{ old('name.suffix') == 'III' ? 'selected' : '' }}>III</option>
                        <option value="IV"  {{ old('name.suffix') == 'IV'  ? 'selected' : '' }}>IV</option>
                        <option value="V"   {{ old('name.suffix') == 'V'   ? 'selected' : '' }}>V</option>
                        <option value="N/A" {{ old('name.suffix') == 'N/A' ? 'selected' : '' }}>N/A</option>
                    </select>

                </div>
                <div class="col-md-12 mt-3">
                    <label for="married" class="form-label">If Married, Maiden Name <small class="text-danger">(optional)</small></label>
                    <input type="text" class="form-control" name="married_maiden_name" value="{{ old('married_maiden_name') }}" id="married" placeholder="Enter Maiden Name">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="dob" class="form-label">Date of Birth<small class="text-danger">*</small></label>
                    {{-- @error('date_of_birth')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror --}}
                    <input type="date" class="form-control" value="{{ old('date_of_birth') }}" name="date_of_birth" id="dob">
                </div>
                <div class="col-md-3">
                        <label for="sex" class="form-label">Sex at Birth<small class="text-danger">*</small></label>
                        {{-- @error('sex')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror --}}
                        <select class="form-select" name="sex" id="sex">
                            <option disabled {{ old('sex') ? '' : 'selected' }}>Choose...</option>
                            <option value="male"   {{ old('sex') == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ old('sex') == 'female' ? 'selected' : '' }}>Female</option>
                        </select>
                </div>
                <div class="col-md-3">
                    <label for="civilStatus" class="form-label">Civil Status<small class="text-danger">*</small></label>
                    {{-- @error('civil_status')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror --}}
                    <select class="form-select" name="civil_status" id="civilStatus">
                        <option disabled {{ old('civil_status') ? '' : 'selected' }}>Choose...</option>
                        <option value="Single" {{ old('civil_status') == 'Single' ? 'selected' : '' }}>Single</option>
                        <option value="Married" {{ old('civil_status') == 'Married' ? 'selected' : '' }}>Married</option>
                        <option value="Divorced/Separated/Annulled" {{ old('civil_status') == 'Divorced/Separated/Annulled' ? 'selected' : '' }}>Divorced/Separated/Annulled</option>
                        <option value="Common-law/Live-in" {{ old('civil_status') == 'Common-law/Live-in' ? 'selected' : '' }}>Common-law/Live-in</option>
                        <option value="Widowed" {{ old('civil_status') == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="nationality" class="form-label">Nationality<small class="text-danger">*</small></label>
                    {{-- @error('nationality')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror --}}
                    <input type="text" class="form-control" value="{{ old('nationality') }}" name="nationality" id="nationality" placeholder="e.g. Filipino">
                </div>
            </div>

            <div class="mb-3">
                <label for="permanentAddress" class="form-label fw-semibold">Permanent Address</label>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="province" class="form-label">Province<small class="text-danger">*</small></label>
                        {{-- @error('permanent.province')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror --}}
                        <select class="form-select" id="province" name="permanent[province]">
                            <option value="">Select Province</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="city" class="form-label">City/Municipality<small class="text-danger">*</small></label>
                        {{-- @error('permanent.city')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror --}}
                        <select class="form-select" name="permanent[city]" id="city" disabled>
                            <option value="">Select City</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="barangay" class="form-label">Barangay<small class="text-danger">*</small></label>
                        {{-- @error('permanent.barangay')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror --}}
                        <select class="form-select" name="permanent[barangay]" id="barangay" disabled>
                            <option value="">Select Barangay</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="sitio" class="form-label">Sitio<small class="text-danger">*</small></label>
                        {{-- @error('permanent.sitio')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror --}}
                        <input type="text" class="form-control" name="permanent[sitio]" id="sitio" placeholder="Enter Sitio">
                    </div>
                </div>
            </div>

            <div class="mb-3" >
                <label for="currentAddress" class="form-label fw-semibold">Current Address</label>
                <div class="row mb-3 {{ old('same_as_address') ? 'd-none' : '' }}" id="current_address">
                    <div class="col-md-3">
                        <label for="curretprovince" class="form-label">Province<small class="text-danger">*</small></label>
                        {{-- @error('current.province')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror --}}
                        <select class="form-select" name="current[province]" id="currentprovince">
                            <option value="">Select Province</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="currentcity" class="form-label">City/Municipality<small class="text-danger">*</small></label>
                        {{-- @error('current.city')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror --}}
                        <select class="form-select" name="current[city]" id="currentcity" disabled>
                            <option value="">Select City</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="currentbarangay" class="form-label">Barangay<small class="text-danger">*</small></label>
                        {{-- @error('current.barangay')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror --}}
                        <select class="form-select" name="current[barangay]" id="currentbarangay" disabled>
                            <option value="">Select Barangay</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="currentsitio" class="form-label">Sitio<small class="text-danger">*</small></label>
                        {{-- @error('current.sitio')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror --}}
                        <input type="text" value="" name="current[sitio]" class="form-control" id="currentsitio" placeholder="Enter Sitio">
                    </div>
                </div>

                <div class="form-check mt-1">
                <input
                    class="form-check-input"
                    type="checkbox"
                    id="sameAddress"
                    name="same_as_address"
                    value="on"
                    {{ old('same_as_address') ? 'checked' : '' }}>
                    <label class="form-check-label" for="sameAddress">
                        Same as Permanent Address
                    </label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="mobile" class="form-label">Mobile No.<small class="text-danger">*</small></label>
                    {{-- @error('mobile_number')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror --}}
                    <input type="tel" class="form-control" id="mobile" value="{{ old('mobile_number') }}" name="mobile_number" placeholder="09123456789">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email Address<small class="text-danger">*</small></label>
                    {{-- @error('email_address')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror --}}
                    <input type="email" class="form-control" id="email" name="email_address" value="{{ old('email_address') }}" placeholder="example@email.com">
                </div>
            </div>

            <div class="mb-3">
                <label for="permanentAddress" class="form-label fw-semibold">Nearest Relative / Legal Guardian Permanent Address</label>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="province" class="form-label">Province<small class="text-danger">*</small></label>
                        {{-- @error('relative.province')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror --}}
                        <select class="form-select" id="relativeprovince" value="{{ old('relative.province') }}" name="relative[province]">
                            <option value="">Select Province</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="city" class="form-label">City/Municipality<small class="text-danger">*</small></label>
                        {{-- @error('relative.city')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror --}}
                        <select class="form-select" id="relativecity" value="{{ old('relative.city') }}" name="relative[city]" disabled>
                            <option value="">Select City</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="barangay" class="form-label">Barangay<small class="text-danger">*</small></label>
                        {{-- @error('relative.barangay')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror --}}
                        <select class="form-select" id="relativebarangay" value="{{ old('relative.barangay') }}" name="relative[barangay]" disabled>
                            <option value="">Select Barangay</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="sitio" class="form-label">Sitio<small class="text-danger">*</small></label>
                        {{-- @error('relative.sitio')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror --}}
                        <input type="text" class="form-control" id="relativesitio" value="{{ old('relative.sitio') }}" name="relative[sitio]" placeholder="Enter Sitio">
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="mobile" class="form-label">Nearest Relative / Legal Guardian Mobile Contact No. <small class="text-danger">*</small></label>
                    {{-- @error('relative_phone_number')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror --}}
                    <input type="tel" class="form-control" id="mobile" value="{{ old('relative_phone_number') }}" name="relative_phone_number" placeholder="09123456789">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Nearest Relative / Legal Guardian Email Address <small class="text-danger">(optional)</small></label>
                    {{-- @error('relative_email')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror --}}
                    <input type="email" class="form-control" id="email" value="{{ old('relative_email') }}" name="relative_email" placeholder="example@email.com">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="education" class="form-label">Highest Level of Education <small class="text-danger">*</small></label>
                        {{-- @error('relative_education')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror --}}
                        <select class="form-select" name="highest_education" id="education">
                            <option disabled {{ old('highest_education') ? '' : 'selected' }}>Choose...</option>
                            <option value="Elementary" {{ old('highest_education') == 'Elementary' ? 'selected' : '' }}>Elementary</option>
                            <option value="Secondary" {{ old('highest_education') == 'Secondary' ? 'selected' : '' }}>Secondary</option>
                            <option value="Tertiary" {{ old('highest_education') == 'Tertiary' ? 'selected' : '' }}>Tertiary</option>
                            <option value="Adult School" {{ old('highest_education') == 'Adult School' ? 'selected' : '' }}>Adult School</option>
                            <option value="No Education" {{ old('highest_education') == 'No Education' ? 'selected' : '' }}>No Education</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="occupation" class="form-label">Occupation <small class="text-danger">*</small></label>
                        {{-- @error('relative_occupation')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror --}}
                        <select class="form-select" name="occupation" id="occupation">
                            <option value="" disabled {{ old('occupation') ? '' : 'selected' }}>Choose...</option>
                            <option value="Managers" {{ old('occupation') == 'Managers' ? 'selected' : '' }}>Managers</option>
                            <option value="Professionals" {{ old('occupation') == 'Professionals' ? 'selected' : '' }}>Professionals</option>
                            <option value="Technicians and Associate Professionals" {{ old('occupation') == 'Technicians and Associate Professionals' ? 'selected' : '' }}>Technicians & Associate Professionals</option>
                            <option value="Clerical Support Workers" {{ old('occupation') == 'Clerical Support Workers' ? 'selected' : '' }}>Clerical Support Workers</option>
                            <option value="Service and Sales Workers" {{ old('occupation') == 'Service and Sales Workers' ? 'selected' : '' }}>Service and Sales Workers</option>
                            <option value="Skilled Agricultural Workers" {{ old('occupation') == 'Skilled Agricultural Workers' ? 'selected' : '' }}>Skilled Agricultural Workers</option>
                            <option value="Craft and Related Trades Workers" {{ old('occupation') == 'Craft and Related Trades Workers' ? 'selected' : '' }}>Craft and Related Trades Workers</option>
                            <option value="Plant and Machine Operators" {{ old('occupation') == 'Plant and Machine Operators' ? 'selected' : '' }}>Plant and Machine Operators</option>
                            <option value="Elementary Occupations" {{ old('occupation') == 'Elementary Occupations' ? 'selected' : '' }}>Elementary Occupations</option>
                            <option value="Armed Forces Occupations" {{ old('occupation') == 'Armed Forces Occupations' ? 'selected' : '' }}>Armed Forces Occupations</option>
                            <option value="Unemployed Retired" {{ old('occupation') == 'Unemployed Retired' ? 'selected' : '' }}>Unemployed/Retired</option>
                            <option value="N/A" {{ old('occupation') == 'N/A' ? 'selected' : '' }}>N/A</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="yearsOccupation" class="form-label">Number of Years in Occupation <small class="text-danger"><small class="text-danger">*</small></label>
                {{-- @error('number_of_years_in_occupation')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror --}}
                <input type="number" class="form-control" value="{{ old('number_of_years_in_occupation') }}" name="number_of_years_in_occupation" id="yearsOccupation" placeholder="e.g. 15">
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
        function handleSubmit() {
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to submit this form?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, submit it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById("form").submit();
                }
            });
        }
        document.addEventListener("DOMContentLoaded", function() {
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

                document.getElementById("sameAddress").addEventListener("change", function () {
                    let current_address = document.getElementById('current_address');

                    if (this.checked) {
                        current_address.classList.add('d-none');
                    } else {
                        current_address.classList.remove('d-none');
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
        });
    </script>
@endsection
