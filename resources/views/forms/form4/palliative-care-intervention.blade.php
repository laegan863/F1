@extends('index')
@section("title", "Palliative Care Intervention")
@section("nav_title", "C. Palliative Care Intervention")
@section("content")
    <form id="form" method="POST" action="" class="p-3">
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
                    <input type="radio" name="{{ $key }}_care" value="1" class="form-check-input rounded-circle" onclick="toggleSection('{{ $key }}Details')">
                    <label class="form-check-label">1 Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="{{ $key }}_care" value="2" class="form-check-input rounded-circle" onclick="toggleSection('{{ $key }}Details')" checked>
                    <label class="form-check-label">2 No</label>
                </div>

                <!-- Extra fields if Yes -->
                <div id="{{ $key }}Details" class="d-none mt-2">

                    <!-- For "Others" add specify -->
                    @if($key === 'others')
                        <label class="form-label">If yes, specify:</label>
                        <input type="text" name="{{ $key }}_specify" class="form-control mb-2">
                    @endif

                    <label class="form-label">If yes, where is care being given mainly in:</label><br>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="{{ $key }}_place" value="1" class="form-check-input rounded-circle">
                        <label class="form-check-label">1 Home</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="{{ $key }}_place" value="2" class="form-check-input rounded-circle">
                        <label class="form-check-label">2 Hospital</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="{{ $key }}_place" value="3" class="form-check-input rounded-circle">
                        <label class="form-check-label">3 Community-based</label>
                    </div>

                    <br>
                    <label class="form-label mt-2">Is the patient’s quality of life improved with these care by 25% or more?</label><br>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="{{ $key }}_improved" value="1" class="form-check-input rounded-circle">
                        <label class="form-check-label">1 Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="{{ $key }}_improved" value="2" class="form-check-input rounded-circle">
                        <label class="form-check-label">2 No</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="{{ $key }}_improved" value="3" class="form-check-input rounded-circle">
                        <label class="form-check-label">3 Not assessed</label>
                    </div>
                </div>
            </div>

        @endforeach

        <div class="text-end">
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
</script>
@endsection
