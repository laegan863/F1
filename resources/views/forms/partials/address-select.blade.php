{{--
    Province / City-Municipality / Barangay as free-text fields.

    These were cascading dropdowns loaded from the online PSGC service; the
    main branch switched to plain text entry (the lookup is not always
    reachable from the hospital network), so the same is done here. Values are
    stored as typed, and previously entered values are restored automatically.

    Params: $prefix (permanent|current|relative)
--}}
<div class="row g-3 address-fields" data-prefix="{{ $prefix }}">
    <div class="col-md-4">
        <label class="form-label" for="{{ $prefix }}_province">Province <small class="text-danger">*</small></label>
        <input type="text" class="form-control" id="{{ $prefix }}_province" name="{{ $prefix }}[province]"
               value="{{ old($prefix . '.province') }}" placeholder="e.g. Negros Occidental" autocomplete="off">
    </div>
    <div class="col-md-4">
        <label class="form-label" for="{{ $prefix }}_city">City / Municipality <small class="text-danger">*</small></label>
        <input type="text" class="form-control" id="{{ $prefix }}_city" name="{{ $prefix }}[city]"
               value="{{ old($prefix . '.city') }}" placeholder="e.g. Bacolod City" autocomplete="off">
    </div>
    <div class="col-md-4">
        <label class="form-label" for="{{ $prefix }}_barangay">Barangay <small class="text-danger">*</small></label>
        <input type="text" class="form-control" id="{{ $prefix }}_barangay" name="{{ $prefix }}[barangay]"
               value="{{ old($prefix . '.barangay') }}" placeholder="e.g. Barangay 18" autocomplete="off">
    </div>
</div>
