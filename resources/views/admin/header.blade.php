<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>এডমিন । রিপোর্ট ব্যবস্থাপনা সিস্টেম</title>
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- Plugins css -->
    <link href="/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/toastr/toastr.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link rel="stylesheet" href="/assets/css/ban_fonts/fonts.css">
    <link href="/assets/css/config/modern/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="/assets/css/config/modern/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="/assets/css/config/modern/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
    <link href="/assets/css/config/modern/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

    <!-- icons -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

</head>

<!-- body start -->

<body class="loading" data-layout-mode="detached" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": true}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-end mb-0">

                    <li class="dropdown d-none d-lg-inline-block">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                            <i class="fe-maximize noti-icon"></i>
                        </a>
                    </li>

                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            @if(Auth::user()->profile == !Null)
                                <img src="/{{Auth::user()->profile}}" alt="user-image" class="rounded-circle">
                            @else
                                <img src="/assets/images/users/user-6.jpg" alt="user-image" class="rounded-circle">
                            @endif
                            <span class="pro-user-name ms-1">
                                {{ Auth::user()->name_bangla }} <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">স্বাগতম !</h6>
                            </div>

                            <!-- item-->
                            <a href="{{ route('admin.update.profile') }}" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>প্রোফাইল</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="{{ route('admin.logout') }}" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>লগআউট</span>
                            </a>

                        </div>
                    </li>
                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo logo-dark text-center">
                        <span class="logo-sm">
                            <!--                    <img src="assets/images/logo-sm.png" alt="" height="22">-->
                            <span class="logo-lg-text-light">রিপোর্ট ব্যবস্থাপনা সিস্টেম</span>
                        </span>
                        <span class="logo-lg">
                            <!--                    <img src="assets/images/logo-dark.png" alt="" height="20">-->
                            <span class="logo-lg-text-light">R</span>
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light text-center">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="20">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                    <li>
                        <!-- Mobile menu toggle (Horizontal Layout)-->
                        <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="h-100" data-simplebar>

                <!-- User box -->
                <div class="user-box text-center">
                    @if(Auth::user()->profile ==!Null)
                        <img src="/{{Auth::user()->profile}}" alt="user-img" title="{{Auth::user()->name_english}}" class="rounded-circle avatar-md">
                        @else
                            <img src="assets/images/users/user-6.jpg" alt="user-img" title="User" class="rounded-circle avatar-md">
                    @endif
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown">{{ Auth::user()->name_bangla }}</a>
                        <div class="dropdown-menu user-pro-dropdown">

                            <!-- item-->
                            <a href="{{ route('admin.update.profile') }}" class="dropdown-item notify-item">
                                <i class="fe-user me-1"></i>
                                <span>প্রোফাইল</span>
                            </a>
                            <!-- item-->
                            <a href="{{ route('admin.logout') }}" class="dropdown-item notify-item">
                                <i class="fe-log-out me-1"></i>
                                <span>লগআউট</span>
                            </a>

                        </div>
                    </div>
                    <p class="text-muted">{{ Auth::user()->designation->designation_name }}</p>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul id="side-menu">

                        <li class="menu-title">নেভিগেশন</li>

                        <li>
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="icon-screen-desktop"></i>.
                                <span> ড্যাশবোর্ড </span>
                            </a>
                        </li>

                        <li class="menu-title mt-2">ব্যবহারকারী নেভিগেশন</li>

                        <li>
                            <a href="{{ route('admin.create.user') }}">
                                <i class="fe-user-plus"></i>
                                <span> নতুন ব্যবহারকারী </span>
                            </a>
                        </li>

                        <li>
                            <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                                <i class="fe-users"></i>
                                <span> সকল ব্যবহারকারী </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('admin.users') }}">সক্রিয় ব্যবহারকারী</a>
                                    </li>
                                    <li>
                                        <a href="ecommerce-products.html">নিষ্ক্রিয় ব্যবহারকারী</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-title">অন্যান্য নেভিগেশন</li>

                        <li>
                            <a href="#sidebarReport" data-bs-toggle="collapse">
                                <i class="fe-file-text"></i>
                                <span> রিপোর্ট ধরণ ব্যবস্থাপনা </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarReport">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('admin.report-type.create') }}">নতুন রিপোর্ট ধরণ</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.report-type.index') }}">সকল রিপোর্ট ধরণ</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarDesignation" data-bs-toggle="collapse">
                                <i class="fe-aperture"></i>
                                <span> পদবী ব্যবস্থাপনা </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarDesignation">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('admin.designations.create') }}">নতুন পদবী</a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.designations.index')}}">সকল পদবী</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarMultilevel" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                <i class="fe-home"></i>
                                <span> অফিস ব্যবস্থাপনা </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMultilevel" style="">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="#divisionoffice" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                            বিভাগীয় অফিস <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="divisionoffice" style="">
                                            <ul class="nav-second-level">
                                                <li>
                                                    <a href="{{ route('admin.divisional-offices.create') }}">নতুন অফিস</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('admin.divisional-offices.index') }}">সকল অফিস</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#districoffice" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                            জেলা অফিস <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="districoffice" style="">
                                            <ul class="nav-second-level">
                                                <li>
                                                    <a href="{{ route('admin.distric-offices.create') }}">নতুন অফিস</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('admin.distric-offices.index') }}">সকল অফিস</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#upazilaoffice" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                            উপজেলা অফিস <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="upazilaoffice" style="">
                                            <ul class="nav-second-level">
                                                <li>
                                                    <a href="{{ route('admin.upazila-offices.create') }}">নতুন অফিস</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('admin.upazila-offices.index') }}">সকল অফিস</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li>
                            <a href="#sidebarMultilevel1" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                <i class="fe-map-pin"></i>
                                <span> লোকেশন ব্যবস্থাপনা </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMultilevel1" style="">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="#division" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                            বিভাগ <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="division" style="">
                                            <ul class="nav-second-level">
                                                <li>
                                                    <a href="{{ route('admin.divisions.create') }}">নতুন বিভাগ</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('admin.divisions.index') }}">সকল বিভাগ</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#distric" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                            জেলা <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="distric" style="">
                                            <ul class="nav-second-level">
                                                <li>
                                                    <a href="{{ route('admin.districs.create') }}">নতুন জেলা</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('admin.districs.index') }}">সকল জেলা</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#upazila" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                            উপজেলা অফিস <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="upazila" style="">
                                            <ul class="nav-second-level">
                                                <li>
                                                    <a href="{{ route('admin.upazila.create') }}">নতুন উপজেলা</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('admin.upazila.index') }}">সকল উপজেলা</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarMultilevel2" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                <i class="fe-calendar"></i>
                                <span> অর্থবছর, মাস ব্যবস্থাপনা </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMultilevel2" style="">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="#fiscalyear" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                            অর্থবছর <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="fiscalyear" style="">
                                            <ul class="nav-second-level">
                                                <li>
                                                    <a href="{{ route('admin.fiscal-years.create') }}">নতুন অর্থবছর</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('admin.fiscal-years.index') }}">সকল অর্থবছর</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#month" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                            মাস <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="month" style="">
                                            <ul class="nav-second-level">
                                                <li>
                                                    <a href="{{ route('admin.months.create') }}">নতুন মাস</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('admin.months.index') }}">সকল মাস</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </li>



                        <li>
                            <a href="apps-companies.html">
                                <i class="icon-wrench"></i>
                                <span> সেটিংস </span>
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

