@if(Session::has('success'))
    <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <i class="fa fa-info"></i> {{ Session::get('success') }}
    </div>
@endif
