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
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('material-pro/src/assets/images/favicon.png') }}">
    <title>Faculty Gate</title>
    <!-- This page css -->
    <!-- Custom CSS -->

    <link href="{{ asset('material-pro/dist/css/style.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('highlights/highlight.min.css') }}">
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
    <div id="main-wrapper">
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
                                <img src="{{ asset('material-pro/src/assets/images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="{{ asset('material-pro/src/assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="{{ asset('material-pro/src/assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />
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
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <a class="nav-link" href="document.html" role="button">
                                Documentation
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap"><span class="hide-menu">Getting Started</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="document.html" aria-expanded="false"><i class="icon-chart font-18"></i>
                                <span class="hide-menu">Introduction</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="docs-start.html" aria-expanded="false"><i class="ti-notepad font-18"></i>
                                <span class="hide-menu">Gettings Started</span></a>
                        </li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Customization</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="docs-layout.html" aria-expanded="false"><i class="ti-layers font-18"></i>
                                <span class="hide-menu">Layout Options</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="docs-theme.html" aria-expanded="false"><i class="icon-drawar font-18"></i>
                                <span class="hide-menu">Color Settings</span></a>
                        </li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">UI Components</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="icon-grid font-18"></i><span class="hide-menu">Bootstrap
                                </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="docs-ui-buttons.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Buttons </span></a></li>
                                <li class="sidebar-item"><a href="docs-ui-modals.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Modals </span></a></li>
                                <li class="sidebar-item"><a href="docs-ui-tabs.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Tabs </span></a></li>
                                <li class="sidebar-item"><a href="docs-ui-tooltip-popover.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Tooltip & Popover </span></a>
                                </li>
                                <li class="sidebar-item"><a href="docs-ui-notification.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Notification </span></a></li>
                                <li class="sidebar-item"><a href="docs-ui-progressbar.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Progressbar </span></a></li>
                                <li class="sidebar-item"><a href="docs-ui-typography.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Typography </span></a></li>
                                <li class="sidebar-item"><a href="docs-ui-bootstrapui.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Bootstrap UI </span></a></li>
                                <li class="sidebar-item"><a href="docs-ui-breadcrumb.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Breadcrumb </span></a></li>
                                <li class="sidebar-item"><a href="docs-ui-listmedia.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> List Media </span></a></li>
                                <li class="sidebar-item"><a href="docs-ui-grid.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Grid </span></a></li>
                                <li class="sidebar-item"><a href="docs-ui-carousel.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Carousel </span></a></li>
                                <li class="sidebar-item"><a href="docs-ui-scrollspy.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Scrollspy </span></a></li>
                                <li class="sidebar-item"><a href="docs-ui-toasts.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Toasts </span></a></li>
                                <li class="sidebar-item"><a href="docs-ui-spinner.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Spinner </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-note font-18"></i><span class="hide-menu">Customized</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="docs-custom-datatables.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Datatables</span></a></li>
                                <li class="sidebar-item"><a href="docs-custom-widgets.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Widgets</span></a></li>
                                <li class="sidebar-item"><a href="docs-custom-chart-chartjs.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu">
                                            ChartJs</span></a></li>
                                <li class="sidebar-item"><a href="docs-custom-toastr.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Toastr</span></a></li>
                                <li class="sidebar-item"><a href="docs-custom-chart-chartist.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu">
                                            Chartist</span></a></li>
                                <li class="sidebar-item"><a href="docs-custom-chart-c3.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> C3 Chart</span></a></li>
                                <li class="sidebar-item"><a href="docs-custom-chart-echart.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Echart</span></a></li>
                                <li class="sidebar-item"><a href="docs-custom-cards.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Cards</span></a></li>
                                <li class="sidebar-item"><a href="docs-custom-blockui.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Blockui</span></a></li>
                                <li class="sidebar-item"><a href="docs-custom-table-bootstrap.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Bootstrap
                                            Table</span></a></li>
                                <li class="sidebar-item"><a href="docs-custom-nouislider.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Nouislider</span></a></li>
                                <li class="sidebar-item"><a href="docs-custom-material-datepicker.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Form
                                            Material Datepicker</span></a></li>
                                <li class="sidebar-item"><a href="docs-custom-touchspin.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Form Bootstrap
                                            Touchspin</span></a></li>
                                <li class="sidebar-item"><a href="docs-custom-duallistbox.html" class="sidebar-link"><i class="icon-drop"></i><span class="hide-menu"> Form Duallistbox</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="docs-third-party.html" aria-expanded="false"><i class="icon-book-open font-18"></i>
                                <span class="hide-menu">Third Party Plugins</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="container">
                @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @elseif(session()->get('warning'))
                <div class="alert alert-warning">
                    {{ session()->get('warning') }}
                </div>
                @elseif(session()->get('errors'))
                <div class="alert alert-warning">
                    {{ session()->get('errors') }}
                </div>
                @endif
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>



</body>

</html>
<!-- <script>
    $(document).ready(function() {
        var i = 1;
        $('#add').click(function() {
            i++;
            $('#dynamic_field').append('<div id="row' + i + '" id="dynamic_field"> <div class= "form-row"><div class = "form-group col-md-6"><label for = "majorField" > {{__("Major Field")}}</label><input id = "majorField"class = "form-control"type = "text" name="majorField[]"></div> <div class = "form-group col-md-6" ><label for = "subspecialtyField" > {{__("Subspecialty Field")}}</label> <input id = "subspecialtyField"class = "form-control"type = "text"  name="subspecialtyField[]" value = "{{ old("subspecialty_field") }}" ></div> </div> <div class = "form-row" ><div class = "form-group col-md-4" ><label for = "degreeName" > {{ __("Degree Name")}}</label> <input id = "degreeName"type = "text"class = "form-control" name="degreeName[]" ></div> <div class = "form-group col-md-4" ><label for = "graduateInstitution" > {{__("Graduate Institution")}} </label> <input id = "graduateInstitution"class = "form-control"type = "text" name="graduateInstitution[]"  placeholder = "King Saud bin Abdulaziz for Heath Sciences"></div> <div class = "form-group col-md-4" ><label for = "year" > {{__("Graduated Year" ) }} </label><input id = "year"class = "form-control"type = "number"name = "year[]"placeholder = "2012"></div> </div><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">Remove</button > ');
        });
        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
        $('#submit').click(function() {
            $.ajax({
                url: "faculty.store",
                method: "POST",
                data: $('#dynamic_field').serialize(),
                success: function(data) {
                    alert(data);
                    $('#dynamic_field')[0].reset();
                }
            });
        });
    });
</script> -->