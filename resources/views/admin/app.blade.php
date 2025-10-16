<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CBCR</title>
    <link rel="icon" type="image/png" class="rounded" href="{{ asset('assets/img/logo.png') }}">
    <link href="{{ asset(path: 'assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset(path: 'assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset(path: 'assets/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset(path: 'assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset(path: 'assets/css/style.css') }}" rel="stylesheet">

</head>
<body class="">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" class="rounded-circle" src="{{ asset(path: 'assets/img/profile.png') }}"/>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">{{ Auth::user()->name }}</span>
                            </a>
                        </div>
                        <div class="logo-element">
                            <b>CBCR</b>
                        </div>
                    </li>
                    <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-dashboard"></i>
                            <span class="nav-label">
                                Dashboard
                            </span>
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/records') ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-th-large"></i><span class="nav-label">Record Management</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="{{ request()->is('admin/records') ? 'active' : '' }}">
                                <a href="{{ route('admin.records') }}">
                                    <i class="fa fa-list"></i>
                                    Manage Records
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('first-page') }}">
                                    <i class="fa fa-plus"></i>
                                    Add Record
                                </a>
                            </li>
                        </ul>
                    </li>
                    @if(Auth::user()->role === 'admin')
                        <li class="{{ request()->is('admin/users') ? 'active' : '' }}">
                            <a href="{{ route('admin.users') }}">
                                <i class="fa fa-users"></i>
                                <span class="nav-label">
                                    User Management
                                </span>
                            </a>
                        </li>
                    @endif
                    <li class="{{ request()->is('admin/reports') ? 'active' : '' }}">
                        <a href="{{ route('select-report') }}">
                            <i class="fa fa-book"></i>
                            <span class="nav-label">
                                Generate Reports
                            </span>
                        </a>
                    </li>
                </ul>

            </div>
        </nav>


        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="{{ route('logout') }}">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>{{ ucwords(Request::segment(index: 2)) }}</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">{{ ucwords(Request::segment(index: 1)) }}</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>{{ str_replace("-", " ", ucwords(Request::segment(index: 2))) }}</strong>
                        </li>
                    </ol>
                </div>
            </div>

            <div class="wrapper wrapper-content">
                @yield(section: 'content')
            </div>
            <div class="footer">
                <div class="float-right">
                    <strong>CLMMRH Administrator</strong>
                </div>
                <div>
                    <strong>All Rights Reserved</strong> CLMMRH &copy; 2025
                </div>
            </div>

        </div>
    </div>

    <script src="{{ asset(path: 'assets/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset(path: 'assets/js/popper.min.js') }}"></script>
    <script src="{{ asset(path: 'assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset(path: 'assets/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset(path: 'assets/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset(path: 'assets/js/plugins/dataTables/datatables.min.js') }}"></script>
    <script src="{{ asset(path: 'assets/js/inspinia.js') }}"></script>
    <script src="{{ asset(path: 'assets/js/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ asset('sweetalert.min.js') }}"></script>
    @if(Session::has('success'))
        <script>
            Swal.fire({
                title: "Good job!",
                text: "{{ Session::get('success') }}",
                icon: "success"
            });
        </script>
    @endif
    <script>
        $.fn.dataTable.Buttons.defaults.dom.button.className = 'btn btn-white btn-sm';

        $(document).ready(function () {
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy', title: 'CRCB' },
                    { extend: 'csv', title: 'CRCB' },
                    { extend: 'excel', title: 'CRCB' },
                    { extend: 'pdf', title: 'CRCB' },

                    {
                        extend: 'print',
                        customize: function (win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]
            });
        });
    </script>
</body>
