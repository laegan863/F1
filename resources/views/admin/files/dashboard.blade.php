@extends('admin.app')
@section('content')
    <div class="middle-box text-center animated fadeInRightBig">
        <h3 class="font-bold">This is page content {{ Auth::logout() }}</h3>
        <div class="error-desc">
            You can create here any grid layout you want. And any variation layout you imagine:) Check out
            main dashboard and other site. It use many different layout.
            <br/><a href="index.html" class="btn btn-primary m-t">Dashboard</a>
            <div class="fs-5">hello world</div>
        </div>
    </div>
    <div class="container">

        <div class="bg-primary p-5"></div>
        <div class="bg-dark p-5"></div>
        <div class="bg-info p-5"></div>
        <div class="bg-success p-5"></div>
        <div class="bg-danger p-5"></div>
    </div>
@endsection
