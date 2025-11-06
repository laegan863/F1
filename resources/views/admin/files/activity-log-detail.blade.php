@extends('admin.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title">
                <h5>Activity Log Details</h5>
                <div class="ibox-tools">
                    <a href="{{ route('admin.activity-logs') }}" class="btn btn-white btn-xs">
                        <i class="fa fa-arrow-left"></i> Back to List
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-8">
                        <h2>{{ ucfirst($log->action) }} Activity</h2>
                        <p class="text-muted">{{ $log->created_at->format('l, F d, Y \a\t h:i A') }}</p>

                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <dl class="dl-horizontal">
                                    <dt>Activity ID:</dt>
                                    <dd>#{{ $log->id }}</dd>

                                    <dt>User:</dt>
                                    <dd>
                                        @if($log->user)
                                            {{ $log->user->name }} ({{ $log->user->email }})
                                        @else
                                            <span class="text-muted">System/Deleted User</span>
                                        @endif
                                    </dd>

                                    <dt>Action Type:</dt>
                                    <dd>
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
                                    </dd>

                                    <dt>Date & Time:</dt>
                                    <dd>{{ $log->created_at->format('M d, Y h:i:s A') }}</dd>

                                    <dt>Time Ago:</dt>
                                    <dd>{{ $log->created_at->diffForHumans() }}</dd>
                                </dl>
                            </div>

                            <div class="col-md-6">
                                <dl class="dl-horizontal">
                                    <dt>IP Address:</dt>
                                    <dd>{{ $log->ip_address ?? 'N/A' }}</dd>

                                    @if($log->model_type)
                                        <dt>Model Type:</dt>
                                        <dd>{{ class_basename($log->model_type) }}</dd>

                                        <dt>Model ID:</dt>
                                        <dd>#{{ $log->model_id }}</dd>
                                    @endif

                                    <dt>User Agent:</dt>
                                    <dd style="word-break: break-all;">
                                        <small>{{ Str::limit($log->user_agent ?? 'N/A', 100) }}</small>
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <hr>

                        <h4>Description</h4>
                        <div class="well">
                            {{ $log->description }}
                        </div>

                        @if($log->properties && count($log->properties) > 0)
                            <hr>
                            <h4>Additional Details</h4>
                            <div class="well">
                                <pre style="background: transparent; border: none; padding: 0;">{{ json_encode($log->properties, JSON_PRETTY_PRINT) }}</pre>
                            </div>
                        @endif
                    </div>

                    <div class="col-lg-4">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Activity Summary</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="text-center p-3">
                                    <i class="fa fa-{{ $log->action === 'login' ? 'sign-in' : ($log->action === 'logout' ? 'sign-out' : ($log->action === 'create' ? 'plus-circle' : ($log->action === 'update' ? 'edit' : ($log->action === 'delete' ? 'trash' : 'eye')))) }} fa-4x text-{{ $badgeClass }}"></i>
                                    <h3 class="mt-3">{{ ucfirst($log->action) }}</h3>
                                </div>

                                <hr>

                                <table class="table table-sm">
                                    <tr>
                                        <td><strong>User:</strong></td>
                                        <td>{{ $log->user ? $log->user->name : 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Role:</strong></td>
                                        <td>
                                            @if($log->user)
                                                <span class="badge badge-primary">{{ ucfirst($log->user->role) }}</span>
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>IP:</strong></td>
                                        <td><code>{{ $log->ip_address ?? 'N/A' }}</code></td>
                                    </tr>
                                    <tr>
                                        <td><strong>When:</strong></td>
                                        <td>{{ $log->created_at->diffForHumans() }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        @if($log->user)
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>User Activity Summary</h5>
                            </div>
                            <div class="ibox-content">
                                @php
                                    $userStats = \App\Models\ActivityLog::where('user_id', $log->user_id)
                                        ->selectRaw('action, COUNT(*) as count')
                                        ->groupBy('action')
                                        ->get()
                                        ->pluck('count', 'action');
                                @endphp
                                <table class="table table-sm">
                                    @foreach($userStats as $action => $count)
                                    <tr>
                                        <td>{{ ucfirst($action) }}:</td>
                                        <td><strong>{{ $count }}</strong></td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.well {
    background-color: #f3f3f4;
    border: 1px solid #e7eaec;
    padding: 15px;
    border-radius: 4px;
}
</style>
@endsection
