<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CPRMIS v3</title>

    <link href="{{ asset(path: 'assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset(path: 'assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    @if(request()->is('admin/records'))
        <link href="{{ asset(path: 'assets/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
    @endif

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
                            <img alt="image" class="rounded-circle" src="{{ asset(path: 'assets/img/profile_small.jpg') }}"/>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">Administrator</span>
                            </a>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-dashboard"></i>
                            <span class="nav-label">
                                Dashboard
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-th-large"></i><span class="nav-label">Record Management</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="{{ route('admin.records') }}">
                                    <i class="fa fa-list"></i>
                                    Manage Records
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('demographic-profile') }}">
                                    <i class="fa fa-plus"></i>
                                    Add Record
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li>
                        <a href="layouts.html"><i class="fa fa-file"></i> <span class="nav-label">Record Management</span></a>
                    </li> --}}
                </ul>

            </div>
        </nav>


        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    {{-- <form role="search" class="navbar-form-custom" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form> --}}
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    {{-- <li>
                        <span class="m-r-sm text-muted welcome-message">Welcome to Cancer</span>
                    </li> --}}
                    {{-- <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="dropdown-item float-left" href="profile.html">
                                        <img alt="image" class="rounded-circle" src="{{ asset('assets/img/a7.jpg') }}">
                                    </a>
                                    <div class="media-body">
                                        <small class="float-right">46h ago</small>
                                        <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html" class="dropdown-item">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                        <span class="float-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a href="profile.html" class="dropdown-item">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="float-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a href="grid_options.html" class="dropdown-item">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="float-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html" class="dropdown-item">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li> --}}
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
                            <strong>{{ ucwords(Request::segment(index: 2)) }}</strong>
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

    <!-- Mainly scripts -->
    <script src="{{ asset(path: 'assets/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset(path: 'assets/js/popper.min.js') }}"></script>
    <script src="{{ asset(path: 'assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset(path: 'assets/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset(path: 'assets/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    @if(request()->is('admin/records'))
    <script src="{{ asset(path: 'assets/js/plugins/dataTables/datatables.min.js') }}"></script>
    @endif
    <!-- Custom and plugin javascript -->
    <script src="{{ asset(path: 'assets/js/inspinia.js') }}"></script>
    <script src="{{ asset(path: 'assets/js/plugins/pace/pace.min.js') }}"></script>

    @if(request()->is('admin/records'))
    <script>
        $.fn.dataTable.Buttons.defaults.dom.button.className = 'btn btn-white btn-sm';

        $(document).ready(function () {
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy' },
                    { extend: 'csv' },
                    { extend: 'excel', title: 'ExampleFile' },
                    { extend: 'pdf', title: 'ExampleFile' },

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
    @endif
</body>
