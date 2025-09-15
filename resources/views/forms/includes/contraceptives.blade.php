<label class="form-label">If yes, specify type (can be multiple):</label>
<div class="row">
    <div class="col-md-4">
        <input type="checkbox" name="contraceptive_types[]" value="Hormonal"
               class="form-check-input rounded-circle"
               {{ in_array('Hormonal', old('contraceptive_types', [])) ? 'checked' : '' }}>
        Hormonal Contraceptives
    </div>

    <div class="col-md-4">
        <input type="checkbox" name="contraceptive_types[]" value="Barrier"
               class="form-check-input rounded-circle"
               {{ in_array('Barrier', old('contraceptive_types', [])) ? 'checked' : '' }}>
        Barrier Methods
    </div>

    <div class="col-md-4">
        <input type="checkbox" name="contraceptive_types[]" value="Permanent"
               class="form-check-input rounded-circle"
               {{ in_array('Permanent', old('contraceptive_types', [])) ? 'checked' : '' }}>
        Permanent Methods
    </div>

    <div class="col-md-4">
        <input type="checkbox" name="contraceptive_types[]" value="IUDs"
               class="form-check-input rounded-circle"
               {{ in_array('IUDs', old('contraceptive_types', [])) ? 'checked' : '' }}>
        Intrauterine Devices (IUDs)
    </div>

    <div class="col-md-4">
        <input type="checkbox" name="contraceptive_types[]" value="Behavioral"
               class="form-check-input rounded-circle"
               {{ in_array('Behavioral', old('contraceptive_types', [])) ? 'checked' : '' }}>
        Behavioral Methods
    </div>

    <div class="col-md-4">
        <div>
            <small class="text-danger">Others</small>
        </div>
        <input type="text" class="form-control form-control-sm"
               name="contraceptive_types_other"
               placeholder="Others, specify"
               value="{{ old('contraceptive_types_other') }}">
    </div>
</div>
