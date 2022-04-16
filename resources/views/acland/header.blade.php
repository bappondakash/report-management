
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>রিপোর্ট ব্যবস্থাপনা সিস্টেম</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">

        <!-- Plugins css -->
        <link href="/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
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
                    @if(Auth::user()->profile == Null)
                    <img src="/assets/images/users/user-0.jpg" alt="user-image" class="rounded-circle">
                    @else
                     <img src="/{{ Auth::user()->profile }}" alt="user-image" class="rounded-circle">
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
                    <a href="{{ route('acland.update.profile') }}" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>প্রোফাইল</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="{{ route('acland.logout') }}" class="dropdown-item notify-item">
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
                    <img src="/assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="/assets/images/logo-light.png" alt="" height="20">
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
                        @if(Auth::user()->profile == Null)
                        <img src="/assets/images/users/user-0.jpg" alt="user-img" title="Mat Helme"
                            class="rounded-circle avatar-md">
                            @else
                            <img src="/{{ Auth::user()->profile }}" alt="user-img" title="Mat Helme"
                            class="rounded-circle avatar-md">
                            @endif
                        <div class="dropdown">
                            <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                                data-bs-toggle="dropdown">{{ Auth::user()->name_bangla }}</a>
                            <div class="dropdown-menu user-pro-dropdown">

                                <!-- item-->
                                <a href="{{ route('acland.update.profile') }}" class="dropdown-item notify-item">
                                    <i class="fe-user me-1"></i>
                                    <span>প্রোফাইল</span>
                                </a>
                                <!-- item-->
                                <a href="{{ route('acland.logout') }}" class="dropdown-item notify-item">
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
                                <a href="{{ route('acland.dashboard') }}">
                                    <i class="icon-screen-desktop"></i>.
                                    <span> ড্যাশবোর্ড </span>
                                </a>
                            </li>

                            <li class="menu-title mt-2">রিপোর্ট নেভিগেশন</li>

                            <li>
                                <a href="{{ route('acland.report.initial') }}">
                                    <i class="icon-doc"></i>
                                    <span> নতুন রিপোর্ট </span>
                                </a>
                            </li>

                            <li>
                                <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                                    <i class="icon-docs"></i>
                                    <span> সকল রিপোর্টসমূহ </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarEcommerce">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="ecommerce-dashboard.html">অনুমোদিত রিপোর্টসমূহ</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('acland.pending.report') }}">অপেক্ষমান রিপোর্টসমূহ</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                            <li>
                                <a href="apps-chat.html">
                                    <i class="icon-book-open"></i>
                                    <span> রেজিস্টার </span>
                                </a>
                            </li>

                            <li class="menu-title">সেটিংস নেভিগেশন</li>

                            <li>
                                <a href="apps-chat.html">
                                    <i class="icon-equalizer"></i>
                                    <span> অফিস সেটিংস </span>
                                </a>
                            </li>



                            <li>
                                <a href="apps-companies.html">
                                    <i class="icon-wrench"></i>
                                    <span> রিপোর্ট সেটিংস </span>
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

