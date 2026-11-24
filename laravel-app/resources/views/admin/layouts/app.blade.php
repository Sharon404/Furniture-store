<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') | BEDS - TREND FURNITURE</title>
    <meta name="description" content="BEDS - TREND FURNITURE admin dashboard" />

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <script>
        (function () {
            var savedTheme = localStorage.getItem('beds_admin_theme') || 'light';
            var root = document.documentElement;
            root.setAttribute('data-bs-theme', savedTheme);
            root.setAttribute('data-topbar', savedTheme === 'dark' ? 'dark' : 'light');
            root.setAttribute('data-sidebar', savedTheme === 'dark' ? 'dark' : 'light');
        })();
    </script>
    <script src="{{ asset('admin/assets/js/layout.js') }}"></script>

    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/beds-admin.css') }}" rel="stylesheet" type="text/css" />
    @stack('styles')
</head>
<body>
<div id="layout-wrapper">
    @include('admin.partials.topbar')
    @include('admin.partials.sidebar')

    <div class="vertical-overlay"></div>

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @include('admin.partials.page-title')

                @if(session('success'))
                    <div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
                        <i class="ri-checkbox-circle-line me-3 align-middle"></i>{{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="alert alert-warning alert-border-left" role="alert">
                    <i class="ri-information-line me-2 align-middle"></i>
                    Preview interface only. Connect real models, validation, and business workflows before production actions.
                </div>

                @yield('content')
            </div>
        </div>

        @include('admin.partials.footer')
    </div>
</div>

<script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins.js') }}"></script>
<script src="{{ asset('admin/assets/js/app.js') }}"></script>
<script src="{{ asset('admin/assets/js/beds-admin.js') }}"></script>
@stack('scripts')
</body>
</html>
