<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="image/x-icon" href="/favicon.png">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('admin/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}?t={{ time() }}" />

    @yield('css')
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Admin DEMO</a>
        <div class="d-flex justify-content-end w-100">
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                    class="fas fa-bars"></i></button>

            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ asset('backend/logout') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">管理單位</div>
                        <a class="nav-link" href="{{ asset('backend/user') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-user-alt"></i>
                            </div>
                            管理者名單
                        </a>

                        <div class="sb-sidenav-menu-heading">一般管理</div>
                        <a class="nav-link" href="{{ asset('backend/member') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-user-alt"></i>
                            </div>
                            會員管理
                        </a>

                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/js/scripts.js') }}"></script>

    <script>
        @if(Session::has('message'))
            alert('{{ Session::get('message') }}')
        @endif
    </script>
    @yield('js')
</body>

</html>
