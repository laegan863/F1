@extends('admin.app')
@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <a href="{{ route('admin.records') }}" class="col-lg-3">
                <div class="ibox text-danger">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <span class="label label-success float-right">Total</span>
                        </div>
                        <h5 class="text-danger">Total Records</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins ">{{ $totalRecords }}</h1>
                        <small>Total records</small>
                    </div>
                </div>
            </a>
            @if(Auth::user()->role == "admin")
                <a href="" class="col-lg-3">
                    <div class="ibox text-warning">
                        <div class="ibox-title">
                            <div class="ibox-tools">
                                <span class="label label-success float-right">Total</span>
                            </div>
                            <h5 class="text-warning">Total Sub Users</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">{{ $totalUsers }}</h1>
                            <small>Total records</small>
                        </div>
                    </div>
                </a>
            @endif
        </div>
    </div>
@endsection
