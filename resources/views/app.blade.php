<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CRS+</title>
    <link rel="icon" type="image/png" class="rounded" href="{{ asset('assets/img/logo.png') }}">
    <link href="{{ asset(path: 'assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset(path: 'assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset(path: 'assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset(path: 'assets/css/style.css') }}" rel="stylesheet">
    <style>
        .max-width-400 {
            max-width: 400px;
            margin: 0px auto;
        }
        .logo-name{
            font-size: 70px;
            letter-spacing: -5px;
        }
    </style>
</head>

<body class="gray-bg">

    @yield(section: 'content')

    <script src="{{ asset(path: 'assets/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset(path: 'assets/js/popper.min.js') }}"></script>
    <script src="{{ asset(path: 'assets/js/bootstrap.js') }}"></script>
</body>

</html>
