@extends('admin.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title">
                <h5>My Support Messages</h5>
                <div class="ibox-tools">
                    <a href="{{ route('support.create') }}" class="btn btn-primary btn-xs">
                        <i class="fa fa-plus"></i> New Message
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                @if($messages->isEmpty())
                    <div class="text-center p-4">
                        <i class="fa fa-inbox" style="font-size: 64px; color: #ccc;"></i>
                        <h4>No messages yet</h4>
                        <p>You haven't sent any support messages.</p>
                        <a href="{{ route('support.create') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Send Your First Message
                        </a>
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Status</th>
                                    <th>Submitted</th>
                                    <th>Response</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $message)
                                <tr>
                                    <td>
                                        <strong>{{ $message->subject }}</strong>
                                    </td>
                                    <td>
                                        @if($message->status === 'pending')
                                            <span class="badge badge-warning">Pending</span>
                                        @elseif($message->status === 'read')
                                            <span class="badge badge-info">Read</span>
                                        @else
                                            <span class="badge badge-success">Resolved</span>
                                        @endif
                                    </td>
                                    <td>{{ $message->created_at->format('M d, Y h:i A') }}</td>
                                    <td>
                                        @if($message->response)
                                            <span class="text-success">
                                                <i class="fa fa-check-circle"></i> Received
                                            </span>
                                        @else
                                            <span class="text-muted">
                                                <i class="fa fa-clock-o"></i> Waiting
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-toggle="modal" 
                                                data-target="#messageModal{{ $message->id }}">
                                            <i class="fa fa-eye"></i> View
                                        </button>
                                    </td>
                                </tr>

                                <!-- Modal for Message Details -->
                                <div class="modal fade" id="messageModal{{ $message->id }}" tabindex="-1" 
                                     role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">{{ $message->subject }}</h4>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <strong>Your Message:</strong>
                                                    <div class="well mt-2">
                                                        {{ $message->message }}
                                                    </div>
                                                    <small class="text-muted">
                                                        Sent on {{ $message->created_at->format('M d, Y h:i A') }}
                                                    </small>
                                                </div>

                                                @if($message->response)
                                                    <hr>
                                                    <div>
                                                        <strong>Admin Response:</strong>
                                                        <div class="alert alert-success mt-2">
                                                            {{ $message->response }}
                                                        </div>
                                                        <small class="text-muted">
                                                            Responded on {{ $message->responded_at->format('M d, Y h:i A') }}
                                                        </small>
                                                    </div>
                                                @else
                                                    <div class="alert alert-info">
                                                        <i class="fa fa-clock-o"></i> Waiting for admin response...
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
@endsection
