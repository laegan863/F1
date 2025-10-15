<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBCR - @yield("title")</title>
    <link rel="icon" type="image/png" class="rounded" href="{{ asset('assets/img/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <style>
        body{
            background-color: #89c2fa;
            font-family: tahoma;
            font-size: 14px;
        }
        .max-w-1000{
            max-width: 1000px;
        }
        input,select{
            border-radius: 0px !important;
            font-size: 14px !important;
        }
        .bg-darkblue{
            background: #107ec7;
        }
        /* For Chrome, Safari, Edge, Opera */
        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        /* For Firefox */
        input[type=number] {
        -moz-appearance: textfield;
        }
    </style>
</head>
<body>
    <section class="max-w-1000 mx-auto">
        <div class="container my-4">
            <div class="card border-0">
                <div class="card-header  bg-darkblue text-white">
                    <h5 class="fw-semibold">@yield("nav_title")</h5>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show m-5 rounded-0" role="alert">
                        <div class="fw-semibold fs-5 ps-3">Error Message:</div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="small text-capitalize">{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @yield("content")
            </div>
        </div>
    </section>
<script src="{{ asset('sweetalert.min.js') }}"></script>
@yield("script")
<script>
    function handleSubmit() {
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to submit this form?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, submit it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("form").submit();
            }
        });
    }
</script>
@if($errors->any())
    <script>
        Swal.fire({
            title: 'Error!',
            text: "Please fill in all required fields!",
            icon: 'error',
            cancelButtonColor: '#6b1921',
            confirmButtonText: 'Close'
        });
    </script>
@endif
@if(Session::has('success'))
    <script>
        Swal.fire({
            title: "Good job!",
            text: "Data has been saved successfully!  ",
            icon: "success"
        });
    </script>
@endif
@if(Session::has('error'))
    <script>
        Swal.fire({
            title: "Error Alert!",
            text: "{{ Session::get('error') }}",
            icon: "error"
        });
    </script>
@endif
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
