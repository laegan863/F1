@extends('index')
@section("title", "Palliative Care Intervention")
@section("nav_title", "C. Palliative Care Intervention")
@section("content")
    <form id="form" method="POST" action="{{ route('store.palliative-care') }}" class="p-3">
        @csrf

        @foreach([
            'nutritional' => 'Nutritional Care',
            'nursing' => 'Nursing Care',
            'rehabilitation' => 'Rehabilitation Care',
            'psychosocial' => 'Psychosocial Care (e.g., depression, anxiety, well-being)',
            'spiritual' => 'Spiritual Care',
            'others' => 'Other/s'
        ] as $key => $label)

            <div class="mb-4 border p-2">
                <label class="fw-bold">{{ $label }}</label><br>

                <!-- Yes/No -->
                <div class="form-check form-check-inline">
                    <input type="radio" name="{{ $key }}_care" value="Yes"
                           class="form-check-input rounded-circle"
                           onclick="toggleSection('{{ $key }}Details')"
                           {{ old($key.'_care') == 'Yes' ? 'checked' : '' }}>
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="{{ $key }}_care" value="No"
                           class="form-check-input rounded-circle"
                           onclick="toggleSection('{{ $key }}Details')"
                           {{ old($key.'_care','No') == 'No' ? 'checked' : '' }}>
                    <label class="form-check-label">No</label>
                </div>

                <!-- Extra fields if Yes -->
                <div id="{{ $key }}Details" class="{{ old($key.'_care') == 'Yes' ? '' : 'd-none' }} mt-2">

                    <!-- For "Others" add specify -->
                    @if($key === 'others')
                        <label class="form-label">If yes, specify:</label>
                        <input type="text" name="{{ $key }}_specify" class="form-control mb-2"
                               value="{{ old($key.'_specify') }}">
                    @endif

                    <label class="form-label">If yes, where is care being given mainly in:</label><br>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="{{ $key }}_place" value="Home"
                               class="form-check-input rounded-circle"
                               {{ old($key.'_place') == 'Home' ? 'checked' : '' }}>
                        <label class="form-check-label">Home</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="{{ $key }}_place" value="Hospital"
                               class="form-check-input rounded-circle"
                               {{ old($key.'_place') == 'Hospital' ? 'checked' : '' }}>
                        <label class="form-check-label">Hospital</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="{{ $key }}_place" value="Community-based"
                               class="form-check-input rounded-circle"
                               {{ old($key.'_place') == 'Community-based' ? 'checked' : '' }}>
                        <label class="form-check-label">Community-based</label>
                    </div>

                    <br>
                    <label class="form-label mt-2">Is the patient’s quality of life improved with these care by 25% or more?</label><br>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="{{ $key }}_improved" value="Yes"
                               class="form-check-input rounded-circle"
                               {{ old($key.'_improved') == 'Yes' ? 'checked' : '' }}>
                        <label class="form-check-label">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="{{ $key }}_improved" value="No"
                               class="form-check-input rounded-circle"
                               {{ old($key.'_improved') == 'No' ? 'checked' : '' }}>
                        <label class="form-check-label">No</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="{{ $key }}_improved" value="Not assessed"
                               class="form-check-input rounded-circle"
                               {{ old($key.'_improved') == 'Not assessed' ? 'checked' : '' }}>
                        <label class="form-check-label">Not assessed</label>
                    </div>
                </div>
            </div>

        @endforeach

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
