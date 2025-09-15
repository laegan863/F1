@extends('app')
@section('content')
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">IN+</h1>
            </div>
            <form class="m-t" role="form" action="index.html">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email address" required="">
                </div>

                <button type="submit" class="btn btn-primary block full-width m-b">Send new password</button>

            </form>
        </div>
    </div>
@endsection
