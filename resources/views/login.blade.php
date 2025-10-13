@extends('app')
@section('content')
    <div class="max-width-400 text-center loginscreen animated fadeInDown mt-5">
        <div class="card pb-4 px-4">
            <div>
                <h3 class="logo-name">CBCR</h3>
            </div>
            @error('error')
               <div class="alert alert-danger fw-semibold">
                    {{ $errors->first('error') }}!
               </div>
            @enderror
            <form class="m-t" role="form" method="post" action="{{ route(name: 'verify-auth') }}">
                @csrf
                <div class="form-group">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="email" name="email" value="{{ old(key: 'email') }}" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="password" name="password" value="{{ old(key: 'password') }}" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                {{-- <a href="{{ route(name: 'forgot') }}"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ route(name: 'register') }}">Create an account</a> --}}
            </form>
        </div>
    </div>
@endsection
