@extends('admin.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title">
                <h5>Contact Support</h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-8">
                        <form method="POST" action="{{ route('support.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="subject">Subject <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="subject" name="subject" 
                                       value="{{ old('subject') }}" required maxlength="255">
                                @error('subject')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="message">Message <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="message" name="message" rows="8" 
                                          required maxlength="5000">{{ old('message') }}</textarea>
                                <small class="form-text text-muted">Maximum 5000 characters</small>
                                @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-paper-plane"></i> Send Message
                                </button>
                                <a href="{{ route('support.my-messages') }}" class="btn btn-white">
                                    <i class="fa fa-list"></i> View My Messages
                                </a>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Support Information</h5>
                            </div>
                            <div class="ibox-content">
                                <p><i class="fa fa-info-circle"></i> <strong>How it works:</strong></p>
                                <ul>
                                    <li>Fill out the support form with your issue or question</li>
                                    <li>Our team will review your message</li>
                                    <li>You'll receive a response in your message history</li>
                                    <li>Check "My Messages" to see responses</li>
                                </ul>
                                <hr>
                                <p><i class="fa fa-clock-o"></i> <strong>Response Time:</strong><br>
                                We typically respond within 24-48 hours during business days.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
