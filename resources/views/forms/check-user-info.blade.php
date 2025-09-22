@extends('index')
@section("title", "Validate Hospital Number")
@section("nav_title", "Validate Hospital Number")
@section("content")
<form id="form" method="POST" action="{{ route('admin.validate-hospital-number') }}">
    @csrf
    <div class="card-body p-4">
        <div class="row">
            <div class="col-md-12">
                <div class="my-2">
                    <label for="">Hopital Number</label>
                    <input type="number" class="form-control" placeholder="Enter the Hopital Number">
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer text-end">
        <button type="reset" class="btn btn-secondary rounded-0">Reset</button>
        <button type="button" onclick="handleSubmit()" class="btn btn-primary rounded-0">Submit</button>
    </div>
</form>
@endsection
