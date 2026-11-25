<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | BEDS - TREND FURNITURE</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/beds-admin.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
<section class="auth-page-wrapper py-5 d-flex align-items-center justify-content-center min-vh-100">
    <div class="auth-page-content w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <img src="{{ asset('images/branding/logo-primary-cropped.png') }}" alt="BEDS - TREND FURNITURE" class="mb-3 admin-login-logo">
                                <h5 class="text-primary">Admin Portal</h5>
                                <p class="text-muted">Sign in to manage inventory, orders, and store operations.</p>
                            </div>

                            @if($errors->any())
                                <div class="alert alert-danger mt-2">{{ $errors->first() }}</div>
                            @endif

                            <div class="p-2 mt-4">
                                <form method="POST" action="{{ route('admin.login.submit') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="1" id="remember" name="remember">
                                        <label class="form-check-label" for="remember">Remember me</label>
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-primary w-100" type="submit">Sign In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <p class="mb-0">Back to storefront <a href="{{ route('home') }}" class="fw-semibold text-primary text-decoration-underline">BEDS - TREND FURNITURE</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
