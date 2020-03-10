<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('material-pro/src/assets/images/favicon.png')}}">
    <title>FACULTY GATE</title>
    <!-- This page css -->
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('material-pro/src/assets/extra-libs/css-chart/css-chart.css')}}">
    <link href="{{asset('material-pro/dist/css/style.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('highlights/highlight.min.css')}}">
    <!-- <link href="{{ asset('assets/plugins/footable/css/footable.bootstrap.min.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('assets/plugins/footable/css/footable.core.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- Custom CSS -->
    <style>
        .font-18 {
            font-size: 18px !important;
        }
    </style>
</head>

<body>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="index.html">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="{{asset('material-pro/src/assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="{{asset('material-pro/src/assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="{{asset('material-pro/src/assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="{{asset('material-pro/src/assets/images/logo-light-text.png')}}" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- RIGHT NAV FOR LOGIN AND Register -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ ('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ ('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ ('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
                <!-- END OF RIGHT NAV FOR LOGIN AND Register -->
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap"><span class="hide-menu">Getting Started</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('faculty.index')}}" aria-expanded="false">
                                <span class="hide-menu">Faculty Information</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('community.index')}}" aria-expanded="false">
                                <span class="hide-menu">Community</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('research.index')}}" aria-expanded="false">
                                <span class="hide-menu">Research</span></a>
                        </li>
                        <li class="list-divider"></li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <!-- <div class="page-wrapper"> -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <!-- <div class="container-fluid"> -->
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb mb-3">
            <div class="d-flex align-items-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-0">Cards</h4>
                <div class="ml-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item text-muted active" aria-current="page">Material-pro</li>
                            <li class="breadcrumb-item text-muted" aria-current="page">Cards</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card overflow-hidden">
                    <!-- <div class="card-body border-bottom">
                        <h4 class="card-title mb-0">Cards</h4>
                    </div> -->
                    <div class="row justify-content-center bg-light p-5">
                        <div class="col-md-7">
                            <div class="card shadow-sm">
                                <div class="p-4">
                                    <h5>@yield('title')</h5>
                                    <h4 class="card-title">@yield('sub-title')</h4>
                                    <!-- <div class="card mb-0 bg-light mt-3"> -->
                                    <div class="card-body">

                                        @yield('content')


                                    </div>
                                    <!-- </div> -->
                                </div>

                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        © 2020 KSAU-HS COM-J Faculty Gate - version 0.0.1 (build 32540b1) .
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    <!-- </div> -->
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- </div> -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Page -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('material-pro/src/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('material-pro/src/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('material-pro/src/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- apps -->
    <script src="{{asset('material-pro/dist/js/app.min.js')}}"></script>
    <script src="{{asset('material-pro/dist/js/app.init.js')}}"></script>
    <script src="{{asset('material-pro/dist/js/app-style-switcher.js')}}"></script>
    <script src="{{asset('material-pro/src/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('material-pro/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!-- End JS -->
    <script src="{{asset('highlights/highlight.min.js')}}"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
</body>

</html>