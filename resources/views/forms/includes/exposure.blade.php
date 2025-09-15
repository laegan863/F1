<label>If yes, specify (can be multiple):</label>
<div class="row">
    <div class="col-md-4">
        <input class="rounded-circle form-check-input" type="checkbox"
               name="occupation_specify[]" value="cement"
               {{ in_array('cement', old('occupation_specify', [])) ? 'checked' : '' }}>
        Cement dust
    </div>

    <div class="col-md-4">
        <input class="rounded-circle form-check-input" type="checkbox"
               name="occupation_specify[]" value="cotton"
               {{ in_array('cotton', old('occupation_specify', [])) ? 'checked' : '' }}>
        Cotton
    </div>

    <div class="col-md-4">
        <input class="rounded-circle form-check-input" type="checkbox"
               name="occupation_specify[]" value="chemfumes"
               {{ in_array('chemfumes', old('occupation_specify', [])) ? 'checked' : '' }}>
        Chemical Fumes
    </div>

    <div class="col-md-4">
        <input class="rounded-circle form-check-input" type="checkbox"
               name="occupation_specify[]" value="grains"
               {{ in_array('grains', old('occupation_specify', [])) ? 'checked' : '' }}>
        Grains
    </div>

    <div class="col-md-4">
        <input class="rounded-circle form-check-input" type="checkbox"
               name="occupation_specify[]" value="metal"
               {{ in_array('metal', old('occupation_specify', [])) ? 'checked' : '' }}>
        Metal
    </div>

    <div class="col-md-4">
        <input class="rounded-circle form-check-input" type="checkbox"
               name="occupation_specify[]" value="paper"
               {{ in_array('paper', old('occupation_specify', [])) ? 'checked' : '' }}>
        Paper
    </div>

    <div class="col-md-4">
        <input class="rounded-circle form-check-input" type="checkbox"
               name="occupation_specify[]" value="radiation"
               {{ in_array('radiation', old('occupation_specify', [])) ? 'checked' : '' }}>
        Radiation
    </div>

    <div class="col-md-4">
        <input class="rounded-circle form-check-input" type="checkbox"
               name="occupation_specify[]" value="silica"
               {{ in_array('silica', old('occupation_specify', [])) ? 'checked' : '' }}>
        Silica
    </div>

    <div class="col-md-4">
        <input class="rounded-circle form-check-input" type="checkbox"
               name="occupation_specify[]" value="smoke"
               {{ in_array('smoke', old('occupation_specify', [])) ? 'checked' : '' }}>
        Smoke
    </div>
</div>
