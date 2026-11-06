<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CBCR @hasSection('title') - @yield('title') @endif</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
        :root {
            --brand: #107ec7;
            --brand-dark: #0b5d94;
            --brand-deep: #0a3d62;
            --ink: #1f2d3d;
            --muted: #6b7a8c;
        }
        * { box-sizing: border-box; }
        html, body { height: 100%; }
        body {
            margin: 0;
            font-family: "Segoe UI", -apple-system, BlinkMacSystemFont, Roboto, "Helvetica Neue", Arial, sans-serif;
            color: var(--ink);
            background: #f3f6fa;
        }
        .max-width-400 { max-width: 400px; margin: 0 auto; }
        .logo-name { font-size: 70px; letter-spacing: -5px; }
        @yield('styles')
    </style>
</head>

<body class="@yield('body_class', 'gray-bg')">
    @yield('content')
    <script src="{{ asset('assets/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    @yield('script')
</body>

</html>
