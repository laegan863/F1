{{-- Shared "date + patient name" block for the first page of Forms 2-4. Values come from old() (pre-filled by the controller). --}}
<div class="row g-3 mb-3">
    <div class="col-md-3">
        <label class="form-label fw-bold" for="fu_date">Date <small class="text-danger">*</small></label>
        <input type="date" id="fu_date" name="date" class="form-control" value="{{ old('date', now()->toDateString()) }}" max="{{ now()->toDateString() }}">
    </div>
</div>
<div class="row g-3 mb-3">
    <div class="col-md-3">
        <label class="form-label fw-bold">First Name <small class="text-danger">*</small></label>
        <input type="text" name="name[firstname]" class="form-control" value="{{ old('name.firstname') }}">
    </div>
    <div class="col-md-3">
        <label class="form-label fw-bold">Middle Name</label>
        <input type="text" name="name[middlename]" class="form-control" value="{{ old('name.middlename') }}">
    </div>
    <div class="col-md-3">
        <label class="form-label fw-bold">Last Name <small class="text-danger">*</small></label>
        <input type="text" name="name[lastname]" class="form-control" value="{{ old('name.lastname') }}">
    </div>
    <div class="col-md-3">
        <label class="form-label fw-bold">Suffix</label>
        <input type="text" name="name[suffix]" class="form-control" value="{{ old('name.suffix') }}">
    </div>
</div>
