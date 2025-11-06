@extends('admin.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <!-- Statistics Cards -->
        <div class="row mb-3">
            <div class="col-lg-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>Total Activities</h5>
                        <h2 class="no-margins">{{ $stats['total'] }}</h2>
                        <small>All time</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>Today's Activities</h5>
                        <h2 class="no-margins text-info">{{ $stats['today'] }}</h2>
                        <small>Last 24 hours</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>Logins Today</h5>
                        <h2 class="no-margins text-success">{{ $stats['logins_today'] }}</h2>
                        <small>User logins</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>Activity Types</h5>
                        <h2 class="no-margins text-warning">{{ count($stats['by_action']) }}</h2>
                        <small>Different actions</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="ibox">
            <div class="ibox-title">
                <h5>Activity Logs</h5>
                <div class="ibox-tools">
                    <a href="{{ route('admin.activity-logs.export', request()->query()) }}" class="btn btn-primary btn-xs">
                        <i class="fa fa-download"></i> Export CSV
                    </a>
                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#cleanupModal">
                        <i class="fa fa-trash"></i> Cleanup Old Logs
                    </button>
                </div>
            </div>
            <div class="ibox-content">
                <!-- Filter Form -->
                <form method="GET" action="{{ route('admin.activity-logs') }}" class="form-horizontal">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>User</label>
                                <select name="user_id" class="form-control">
                                    <option value="">All Users</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" {{ request('user_id') == $user->id ? 'selected' : '' }}>
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Action</label>
                                <select name="action" class="form-control">
                                    <option value="">All Actions</option>
                                    @foreach($actions as $action)
                                        <option value="{{ $action }}" {{ request('action') == $action ? 'selected' : '' }}>
                                            {{ ucfirst($action) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Start Date</label>
                                <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>End Date</label>
                                <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Search</label>
                                <input type="text" name="search" class="form-control" placeholder="Description..." value="{{ request('search') }}">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label>&nbsp;</label>
                                <button type="submit" class="btn btn-primary btn-block">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    @if(request()->hasAny(['user_id', 'action', 'start_date', 'end_date', 'search']))
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ route('admin.activity-logs') }}" class="btn btn-white btn-sm">
                                    <i class="fa fa-times"></i> Clear Filters
                                </a>
                            </div>
                        </div>
                    @endif
                </form>

                <hr>

                <!-- Activity Logs Table -->
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Date & Time</th>
                                <th>User</th>
                                <th>Action</th>
                                <th>Description</th>
                                <th>IP Address</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($logs as $log)
                            <tr>
                                <td>
                                    {{ $log->created_at->format('M d, Y') }}<br>
                                    <small class="text-muted">{{ $log->created_at->format('h:i A') }}</small>
                                </td>
                                <td>
                                    @if($log->user)
                                        <strong>{{ $log->user->name }}</strong><br>
                                        <small class="text-muted">{{ $log->user->role }}</small>
                                    @else
                                        <span class="text-muted">System</span>
                                    @endif
                                </td>
                                <td>
                                    @php
                                        $badgeClass = match($log->action) {
                                            'login' => 'success',
                                            'logout' => 'info',
                                            'create' => 'primary',
                                            'update' => 'warning',
                                            'delete' => 'danger',
                                            'view' => 'default',
                                            default => 'default'
                                        };
                                    @endphp
                                    <span class="badge badge-{{ $badgeClass }}">
                                        {{ ucfirst($log->action) }}
                                    </span>
                                </td>
                                <td>{{ Str::limit($log->description, 60) }}</td>
                                <td><small>{{ $log->ip_address ?? 'N/A' }}</small></td>
                                <td>
                                    <a href="{{ route('admin.activity-logs.show', $log->id) }}" 
                                       class="btn btn-xs btn-primary">
                                        <i class="fa fa-eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">
                                    <p class="text-muted">No activity logs found.</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    {{ $logs->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cleanup Modal -->
<div class="modal fade" id="cleanupModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('admin.activity-logs.cleanup') }}">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Cleanup Old Activity Logs</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning">
                        <i class="fa fa-warning"></i> This will permanently delete activity logs older than the specified number of days.
                    </div>
                    <div class="form-group">
                        <label>Delete logs older than (days):</label>
                        <input type="number" name="days" class="form-control" value="90" min="1" max="365" required>
                        <small class="form-text text-muted">Recommended: 90 days</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete Old Logs</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
