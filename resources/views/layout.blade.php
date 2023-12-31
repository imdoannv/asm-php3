<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href={{asset('assets/images/favicon-32x32.png')}} type="image/png"/>
    <!--plugins-->
    <link rel="stylesheet" href={{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}} />
    <link href={{asset('assets/plugins/simplebar/css/simplebar.css')}} rel="stylesheet"/>
    <link href={{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}} rel="stylesheet"/>
    <link href={{asset('assets/plugins/metismenu/css/metisMenu.min.css')}} rel="stylesheet"/>
    <!-- loader-->
    <link href={{asset('assets/css/pace.min.css')}} rel="stylesheet"/>
    <script src={{asset('assets/js/pace.min.js')}}></script>
    <!-- Bootstrap CSS -->
    <link href={{asset('assets/css/bootstrap.min.css')}} rel="stylesheet">
    <link href={{asset('assets/css/bootstrap-extended.css')}} rel="stylesheet">
    <link href={{asset('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap')}} rel="stylesheet">
    <link href={{asset('assets/css/app.css')}} rel="stylesheet">
    <link href={{asset('assets/css/icons.css')}} rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href={{asset('assets/css/dark-theme.css')}}/>
    <link rel="stylesheet" href={{asset('assets/css/semi-dark.css')}}/>
    <link rel="stylesheet" href={{asset('assets/css/header-colors.css')}}/>
    <title>FOODY</title>
    <link rel="stylesheet" href={{asset('https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css')}}>

</head>

<body>
<!--wrapper-->
<div class="wrapper">
    <!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <img src={{asset('assets/images/logo-icon.png')}} class="logo-icon" alt="logo icon">
            </div>
            <div>
                <h4 class="logo-text">FOODY</h4>
            </div>
            <div class="toggle-icon ms-auto"></i>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a href="#">
                    <div class="parent-icon"><i class='bx bx-home-alt'></i>
                    </div>
                    <div class="menu-title">Categories</div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Products</div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="parent-icon"><i class='bx bx-user'></i>
                    </div>
                    <div class="menu-title">Users</div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                    </div>
                    <div class="menu-title">Roles</div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="parent-icon"><i class='bx bx-cart'></i>
                    </div>
                    <div class="menu-title">Orders</div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="parent-icon"><i class="bx bx-repeat"></i>
                    </div>
                    <div class="menu-title">Content</div>
                </a>

            </li>
            <li>
                <a href="#">
                    <div class="parent-icon"><i class="bx bx-donate-blood"></i>
                    </div>
                    <div class="menu-title">Icons</div>
                </a>
            </li>
            <li>
                <a href="form-froala-editor.html">
                    <div class="parent-icon"><i class='bx bx-code-alt'></i>
                    </div>
                    <div class="menu-title">Froala Editor</div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                    </div>
                    <div class="menu-title">Forms</div>
                </a>
            </li>
        </ul>
        <!--end navigation-->
    </div>
    <!--end sidebar wrapper -->
    <!--start header -->
    <header>
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand gap-3">
                <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                </div>

                <div class="position-relative d-lg-block d-none">

                </div>


                <div class="top-menu ms-auto">
                    <ul class="navbar-nav align-items-center gap-1">
                        <li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal"
                            data-bs-target="#SearchModal">
                            <a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="avascript:;"
                               data-bs-toggle="dropdown"><img src="assets/images/county/02.png" width="22" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item d-flex align-items-center py-2" href="#"><img
                                            src="assets/images/county/01.png" width="20" alt=""><span class="ms-2">English</span></a>
                                </li>
                                <li><a class="dropdown-item d-flex align-items-center py-2" href="#"><img
                                            src="assets/images/county/03.png" width="20" alt=""><span class="ms-2">French</span></a>
                                </li>

                            </ul>
                        </li>
                        {{--  Đêm và ngày--}}
                        <li class="nav-item dark-mode d-none d-sm-flex">
                            <a class="nav-link dark-mode-icon" href="#"><i class='bx bx-moon'></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                               role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">0</span>
                                <i class='bx bx-shopping-bag'></i>
                            </a>
                        </li>
                    </ul>
                </div>
                {{--Tài khoản--}}
                <div class="user-box dropdown px-3">

                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                                <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret"
                                   href="#"
                                   role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i
                                        class="bx bx-user fs-3"></i>
                                    <div class="user-info">
                                        <p class="user-name mb-0">{{ Auth::user()->name }}</p>
                                        <p class="designattion mb-0">{{ Auth::user()->email }}</p>
                                    </div>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item d-flex align-items-center"
                                               href={{route('profile.edit')}}><i
                                                    class="bx bx-user fs-5"></i><span>Profile</span></a>
                                        </li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a class="dropdown-item d-flex align-items-center"
                                                   href="{{route('logout') }}"
                                                   onclick="event.preventDefault(); this.closest('form').submit()"><i
                                                        class="bx bx-log-out-circle"></i><span>Logout</span></a>

                                        </form>

                                    </ul>
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="nav-link menu-title">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="nav-link menu-title">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif

                </div>
            </nav>
        </div>
    </header>
    <!--end header -->
    <div class="page-wrapper">
        <div class="container mt-5">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <footer class="page-footer">
        <p class="mb-0">Đoàn Phúc - Foody Shop © 2023</p>
    </footer>
</div>
<!--end wrapper-->


<!-- Bootstrap JS -->
<script src={{asset('assets/js/bootstrap.bundle.min.js')}}></script>
<!--plugins-->
<script src={{asset('assets/js/jquery.min.js')}}></script>
<script src={{asset('assets/plugins/simplebar/js/simplebar.min.js')}}></script>
<script src={{asset('assets/plugins/metismenu/js/metisMenu.min.js"')}}></script>
<script src={{asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}></script>
<script src={{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}></script>
<script src={{asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}></script>
<script src={{asset('assets/plugins/chartjs/js/chart.js')}}></script>
<script src={{asset('assets/plugins/sparkline-charts/jquery.sparkline.min.js')}}></script>
<!--Morris JavaScript -->
<script src={{asset('assets/plugins/raphael/raphael-min.js')}}></script>
<script src={{asset('assets/plugins/morris/js/morris.js')}}></script>
<script src={{asset('assets/js/index2.js')}}></script>
<!--app JS-->
<script src={{asset('assets/js/app.js')}}></script>

<script src={{asset('https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js')}}></script>
<script src={{asset('https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js')}}></script>
<script>
    new DataTable('#list');
</script>
</body>

</html>
