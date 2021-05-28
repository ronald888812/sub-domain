<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="yip6ksyOV86QCfYblfVsovsjRy1I32Yo2XDmYHpw">
    <title>Dashboard</title>
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
</head>
<body class="sidebar-mini" >
        <div class="wrapper">    
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#">
                        <i class="fas fa-bars"></i>
                        <span class="sr-only">Toggle navigation</span>
                        </a>
                    </li>
          
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <span>
                                {{Auth::user()->name}}
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <li class="user-footer">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>    
                </ul>
            </nav>
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <a href="http://127.0.0.1:8000/home" class="brand-link ">
                    <img src="http://127.0.0.1:8000/vendor/adminlte/dist/img/AdminLTELogo.png"
                        alt="AdminLTE"
                        class="brand-image img-circle elevation-3"
                        style="opacity:.8">
                        <span class="brand-text font-weight-light "><b>Admin</b>LTE</span>
                </a>
                <div class="sidebar">
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                            <li  class="nav-item">
                                <a class="nav-link" href="{{ route('request.index') }}">
                                    <i class="far fa-fw fa-file "></i>
                                    <p>Request</p>
                                </a>
                            </li>
                            <li  class="nav-item">
                                <a class="nav-link" href="{{ route('user.index') }}"
                                    <i class="fas fa-fw fa-user "></i>
                                    <p>Profile</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('products.index', ['subdomain' => Auth::user()->role]) }}"
                                    <i class="fas fa-fw fa-user"></i>
                                    <p>Domain Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tipes.index', ['subdomain' => Auth::user()->role]) }}"
                                    <i class="fas fa-fw fa-user"></i>
                                    <p>Domain Tipe </p>
                                </a>
                            </li>
                             <li class="nav-header ">ACCOUNT SETTINGS</li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>
        <script src="http://127.0.0.1:8000/vendor/jquery/jquery.min.js"></script>
        <script src="http://127.0.0.1:8000/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="http://127.0.0.1:8000/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <script src="http://127.0.0.1:8000/vendor/adminlte/dist/js/adminlte.min.js"></script>
        <script> console.log('Hi!'); </script>
</body>
</html>
