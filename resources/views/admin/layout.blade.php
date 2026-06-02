<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin | THE NIACE')</title>

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    {{-- SB Admin 2 CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.4/css/sb-admin-2.min.css">

    <style>
        body { font-family: 'Nunito', sans-serif; }

        /* Brand color overrides */
        .bg-gradient-primary { background: linear-gradient(180deg, #DF4C18 10%, #c23e12 100%) !important; }
        .bg-primary           { background-color: #DF4C18 !important; }
        .text-primary         { color: #DF4C18 !important; }
        .btn-primary          { background-color: #DF4C18; border-color: #DF4C18; }
        .btn-primary:hover    { background-color: #c23e12; border-color: #c23e12; }
        a                     { color: #DF4C18; }
        a:hover               { color: #c23e12; }

        /* Sidebar */
        .sidebar               { background: linear-gradient(180deg, #111111 10%, #2d2d2d 100%) !important; }
        .sidebar .nav-item .nav-link     { color: rgba(255,255,255,0.7); }
        .sidebar .nav-item .nav-link:hover,
        .sidebar .nav-item.active .nav-link { color: #fff; }
        .sidebar-brand         { background: rgba(0,0,0,0.25) !important; }
        .sidebar-brand-text    { font-weight: 800; letter-spacing: 0.05em; }
        .sidebar-brand-text span { color: #DF4C18; }
        .sidebar-divider       { border-top: 1px solid rgba(255,255,255,0.1); }
        .sidebar-heading       { color: rgba(255,255,255,0.4); font-size: 0.65rem; }

        /* Topbar */
        .topbar                { background: #fff; box-shadow: 0 2px 8px rgba(0,0,0,0.06); }
        .topbar .navbar-search input { border-radius: 999px; }

        /* Cards */
        .card                  { border: none; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,0.07); }
        .card-header           { border-radius: 12px 12px 0 0 !important; font-weight: 700; }

        /* Stat card icons */
        .icon-circle-sm {
            width: 3rem; height: 3rem;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
        }

        /* Table */
        .table thead th {
            background: #f8f9fc;
            font-size: 0.72rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #6e707e;
            border-bottom: 2px solid #e3e6f0;
        }
        .table tbody tr:hover { background: #fff8f2; }
        .table td { vertical-align: middle; font-size: 0.88rem; }

        /* Badges */
        .badge-verified  { background: #d1fae5; color: #065f46; }
        .badge-pending   { background: #fef3c7; color: #92400e; }
        .badge-rejected  { background: #fee2e2; color: #991b1b; }
        .badge-status    { padding: 0.35em 0.75em; border-radius: 999px; font-size: 0.75rem; font-weight: 700; }

        /* Cert number chip */
        .cert-chip {
            font-family: 'Courier New', monospace;
            font-size: 0.8rem;
            background: #f3f3f7;
            padding: 0.2rem 0.55rem;
            border-radius: 6px;
            color: #444;
        }

        /* Student avatar */
        .stu-avatar {
            width: 34px; height: 34px;
            border-radius: 50%;
            background: linear-gradient(135deg, #DF4C18, #EB9B7E);
            color: #fff;
            font-weight: 800;
            font-size: 0.85rem;
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
        }

        /* Detail table */
        .detail-label { color: #888; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; }

        /* Action buttons */
        .btn-action { padding: 0.3rem 0.65rem; font-size: 0.8rem; border-radius: 8px; }

        /* Pagination */
        .pagination .page-link { color: #DF4C18; }
        .pagination .page-item.active .page-link { background: #DF4C18; border-color: #DF4C18; }

        /* Content wrapper bg */
        #content-wrapper { background: #f8f9fc; }
    </style>
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
                <div class="sidebar-brand-icon mr-2">
                    <img src="{{ asset('img/logos/the_niace.png') }}" alt="THE NIACE"
                         style="height:36px; width:auto; object-fit:contain; filter:brightness(0) invert(1);">
                </div>
            </a>

            <hr class="sidebar-divider my-0">

            <!-- Dashboard -->
            <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">Management</div>

            <!-- Certificates -->
            <li class="nav-item {{ request()->routeIs('admin.certificates.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.certificates.index') }}">
                    <i class="fas fa-fw fa-certificate"></i>
                    <span>Certificates</span>
                </a>
            </li>

            <!-- Applications -->
            <li class="nav-item {{ request()->routeIs('admin.applications.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.applications.index') }}">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Applications</span>
                </a>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">Links</div>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('certificate.verification') }}" target="_blank">
                    <i class="fas fa-fw fa-external-link-alt"></i>
                    <span>Public Verification</span>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand topbar mb-4 static-top shadow-sm">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrator</span>
                                <div class="stu-avatar" style="width:32px;height:32px;font-size:0.8rem;">A</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('admin.logout') }}">
                                    @csrf
                                    <button class="dropdown-item text-danger" type="submit">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End Topbar -->

                <!-- Main Content -->
                <div class="container-fluid">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                            <i class="fas fa-exclamation-circle me-2"></i> {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                        </div>
                    @endif

                    @yield('content')
                </div>
                <!-- End Main Content -->

            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white mt-auto">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; THE NIACE {{ date('Y') }}</span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- End Content Wrapper -->

    </div>
    <!-- End Page Wrapper -->

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    {{-- jQuery + Bootstrap 4 + SB Admin 2 JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.4/js/sb-admin-2.min.js"></script>

    @stack('scripts')
</body>
</html>
