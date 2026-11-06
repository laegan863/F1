@extends('index')
@section("title", "Validate Hospital Number")
@section("nav_title", "Find the patient by hospital number")
@section("wizard_step", "1")
@section("content")
<form id="form" method="POST" action="{{ route('admin.validate-hospital-number') }}">
    @csrf
    <div class="card-body p-4">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7 text-center py-3">
                <div class="mx-auto mb-3 d-flex align-items-center justify-content-center rounded-circle"
                     style="width:72px;height:72px;background:var(--brand-soft);color:var(--brand);">
                    <i class="fa fa-id-card-o fa-2x"></i>
                </div>
                <p class="text-muted mb-4">
                    Enter the patient's hospital number. If the patient exists in the hospital information system,
                    their details will be filled in for you on the next step.
                </p>
                <label for="HospitalID" class="form-label fw-semibold d-block text-start">Hospital Number <small class="text-danger">*</small></label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-white"><i class="fa fa-hashtag text-muted"></i></span>
                    <input type="text" inputmode="numeric" pattern="[0-9]{1,10}" maxlength="10"
                           id="HospitalID" name="HospitalID" value="{{ old('HospitalID') }}"
                           class="form-control @error('HospitalID') is-invalid @enderror"
                           placeholder="e.g. 123456" required autofocus autocomplete="off">
                </div>
                <div class="form-text text-start">
                    Digits only, up to 10. It will be padded to <span id="padPreview" class="fw-semibold font-monospace">0000000000</span>.
                </div>
                @error('HospitalID')
                    <div class="text-danger small text-start mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="card-footer d-flex justify-content-end gap-2">
        <button type="submit" data-submit-btn class="btn btn-primary">
            Look up patient <i class="fa fa-search ms-1"></i>
        </button>
    </div>
</form>
@endsection
@section('script')
<script>
    (function () {
        const input = document.getElementById('HospitalID');
        const preview = document.getElementById('padPreview');
        const update = () => {
            input.value = input.value.replace(/\D/g, '').slice(0, 10);
            preview.textContent = input.value.padStart(10, '0');
        };
        input.addEventListener('input', update);
        update();
        document.getElementById('form').addEventListener('submit', function (e) {
            if (!input.value) { e.preventDefault(); input.classList.add('is-invalid'); input.focus(); return; }
            const b = this.querySelector('[data-submit-btn]');
            b.disabled = true;
            b.innerHTML = '<i class="fa fa-circle-o-notch fa-spin me-1"></i> Searching...';
        });
    })();
</script>
@endsection
