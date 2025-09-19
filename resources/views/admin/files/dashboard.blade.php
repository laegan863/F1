@extends('admin.app')
@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <span class="label label-success float-right">Total</span>
                        </div>
                        <h5 class="text-danger">Total Records</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{ $totalRecords }}</h1>
                        <small>Total records</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
