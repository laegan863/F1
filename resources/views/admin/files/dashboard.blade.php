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
                <a href="{{ route('admin.users') }}" class="col-lg-3">
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
                <a href="{{ route('admin.support-messages') }}" class="col-lg-3">
                    <div class="ibox text-info">
                        <div class="ibox-title">
                            <div class="ibox-tools">
                                <span class="label label-info float-right">Total</span>
                            </div>
                            <h5 class="text-info">Support Messages</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">{{ $totalSupportMessages }}</h1>
                            <small>Total messages</small>
                        </div>
                    </div>
                </a>
                <a href="{{ route('admin.support-messages') }}" class="col-lg-3">
                    <div class="ibox {{ $pendingSupportMessages > 0 ? 'text-warning' : 'text-success' }}">
                        <div class="ibox-title">
                            <div class="ibox-tools">
                                @if($pendingSupportMessages > 0)
                                    <span class="label label-warning float-right">Pending</span>
                                @else
                                    <span class="label label-success float-right">All Clear</span>
                                @endif
                            </div>
                            <h5 class="{{ $pendingSupportMessages > 0 ? 'text-warning' : 'text-success' }}">Pending Support</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">{{ $pendingSupportMessages }}</h1>
                            <small>Pending responses</small>
                        </div>
                    </div>
                </a>
            @endif
        </div>

        @if(Auth::user()->role == "admin")
        <div class="row">
            <a href="{{ route('admin.activity-logs') }}" class="col-lg-6">
                <div class="ibox text-primary">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <span class="label label-primary float-right">Today</span>
                        </div>
                        <h5 class="text-primary">Today's Activities</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{ $todayActivities }}</h1>
                        <small>Activities in the last 24 hours</small>
                    </div>
                </div>
            </a>
            <a href="{{ route('admin.activity-logs') }}" class="col-lg-6">
                <div class="ibox text-navy">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <span class="label label-navy float-right">All Time</span>
                        </div>
                        <h5 class="text-navy">Total Activities</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{ $totalActivities }}</h1>
                        <small>All activity logs</small>
                    </div>
                </div>
            </a>
        </div>
        @endif
    </div>
@endsection
