@extends('admin.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title">
                <h5>Support Message Details</h5>
                <div class="ibox-tools">
                    <a href="{{ route('admin.support-messages') }}" class="btn btn-white btn-xs">
                        <i class="fa fa-arrow-left"></i> Back to List
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- User Message -->
                        <div class="mail-box">
                            <div class="mail-box-header">
                                <h2>{{ $message->subject }}</h2>
                                <div class="mail-tools">
                                    @if($message->status === 'pending')
                                        <span class="badge badge-warning">Pending</span>
                                    @elseif($message->status === 'read')
                                        <span class="badge badge-info">Read</span>
                                    @else
                                        <span class="badge badge-success">Resolved</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mail-box-content">
                                <div class="mb-3">
                                    <strong>From:</strong> {{ $message->user->name }} 
                                    ({{ $message->user->email }})<br>
                                    <strong>Date:</strong> {{ $message->created_at->format('M d, Y h:i A') }}
                                </div>

                                <hr>

                                <div class="mb-4">
                                    <h4>Message:</h4>
                                    <div class="well">
                                        {{ $message->message }}
                                    </div>
                                </div>

                                @if($message->response)
                                    <hr>
                                    <div class="mb-4">
                                        <h4>Your Response:</h4>
                                        <div class="alert alert-success">
                                            <strong>Response sent on {{ $message->responded_at->format('M d, Y h:i A') }}</strong>
                                            <p class="mt-2">{{ $message->response }}</p>
                                        </div>
                                    </div>
                                @endif

                                @if(!$message->response || $message->status !== 'resolved')
                                    <hr>
                                    <h4>{{ $message->response ? 'Update Response' : 'Send Response' }}</h4>
                                    <form method="POST" action="{{ route('admin.support-messages.respond', $message->id) }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="response">Response <span class="text-danger">*</span></label>
                                            <textarea class="form-control" id="response" name="response" 
                                                      rows="6" required maxlength="5000">{{ old('response', $message->response) }}</textarea>
                                            <small class="form-text text-muted">Maximum 5000 characters</small>
                                            @error('response')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-paper-plane"></i> 
                                                {{ $message->response ? 'Update Response' : 'Send Response' }}
                                            </button>
                                            <a href="{{ route('admin.support-messages') }}" class="btn btn-white">
                                                Cancel
                                            </a>
                                        </div>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>User Information</h5>
                            </div>
                            <div class="ibox-content">
                                <p><strong>Name:</strong><br>{{ $message->user->name }}</p>
                                <p><strong>Email:</strong><br>{{ $message->user->email }}</p>
                                <p><strong>Role:</strong><br>
                                    <span class="badge badge-primary">{{ ucfirst($message->user->role) }}</span>
                                </p>
                                <hr>
                                <p><strong>Message Status:</strong><br>
                                    @if($message->status === 'pending')
                                        <span class="badge badge-warning">Pending Response</span>
                                    @elseif($message->status === 'read')
                                        <span class="badge badge-info">Read</span>
                                    @else
                                        <span class="badge badge-success">Resolved</span>
                                    @endif
                                </p>
                                <p><strong>Submitted:</strong><br>
                                    {{ $message->created_at->format('M d, Y h:i A') }}<br>
                                    <small class="text-muted">{{ $message->created_at->diffForHumans() }}</small>
                                </p>
                                @if($message->responded_at)
                                    <p><strong>Responded:</strong><br>
                                        {{ $message->responded_at->format('M d, Y h:i A') }}<br>
                                        <small class="text-muted">{{ $message->responded_at->diffForHumans() }}</small>
                                    </p>
                                @endif
                            </div>
                        </div>

                        <div class="ibox">
                            <div class="ibox-title bg-danger">
                                <h5>Danger Zone</h5>
                            </div>
                            <div class="ibox-content">
                                <p>Delete this support message permanently.</p>
                                <form action="{{ route('admin.support-messages.delete', $message->id) }}" 
                                      method="POST"
                                      onsubmit="return confirm('Are you sure you want to delete this message? This action cannot be undone.');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-block">
                                        <i class="fa fa-trash"></i> Delete Message
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.mail-box {
    background-color: #ffffff;
    border: 1px solid #e7eaec;
    margin-bottom: 20px;
}

.mail-box-header {
    background-color: #ffffff;
    border-bottom: 1px solid #e7eaec;
    padding: 20px;
}

.mail-box-header h2 {
    font-size: 20px;
    font-weight: 600;
    margin: 0;
}

.mail-tools {
    float: right;
    margin-top: 5px;
}

.mail-box-content {
    background-color: #ffffff;
    padding: 20px;
}

.well {
    background-color: #f3f3f4;
    border: 1px solid #e7eaec;
    padding: 15px;
    border-radius: 4px;
}
</style>
@endsection
