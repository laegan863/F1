@extends('admin.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title">
                <h5>Support Messages</h5>
                <div class="ibox-tools">
                    <span class="badge badge-warning">{{ $pendingCount }} Pending</span>
                </div>
            </div>
            <div class="ibox-content">
                @if($messages->isEmpty())
                    <div class="text-center p-4">
                        <i class="fa fa-inbox" style="font-size: 64px; color: #ccc;"></i>
                        <h4>No support messages</h4>
                        <p>There are no support messages at this time.</p>
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-striped table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>Status</th>
                                    <th>User</th>
                                    <th>Subject</th>
                                    <th>Date Submitted</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $message)
                                <tr class="{{ $message->status === 'pending' ? 'bg-warning-light' : '' }}">
                                    <td>
                                        @if($message->status === 'pending')
                                            <span class="badge badge-warning">
                                                <i class="fa fa-exclamation-circle"></i> Pending
                                            </span>
                                        @elseif($message->status === 'read')
                                            <span class="badge badge-info">
                                                <i class="fa fa-eye"></i> Read
                                            </span>
                                        @else
                                            <span class="badge badge-success">
                                                <i class="fa fa-check-circle"></i> Resolved
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <strong>{{ $message->user->name }}</strong><br>
                                        <small class="text-muted">{{ $message->user->email }}</small>
                                    </td>
                                    <td>{{ Str::limit($message->subject, 50) }}</td>
                                    <td>{{ $message->created_at->format('M d, Y') }}<br>
                                        <small class="text-muted">{{ $message->created_at->format('h:i A') }}</small>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.support-messages.show', $message->id) }}" 
                                           class="btn btn-sm btn-primary">
                                            <i class="fa fa-eye"></i> View & Respond
                                        </a>
                                        <form action="{{ route('admin.support-messages.delete', $message->id) }}" 
                                              method="POST" style="display: inline-block;"
                                              onsubmit="return confirm('Are you sure you want to delete this message?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-3">
                        {{ $messages->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<style>
.bg-warning-light {
    background-color: #fff3cd !important;
}
</style>
@endsection
