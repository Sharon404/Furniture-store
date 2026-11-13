@extends('layouts.storefront')

@section('title', 'Login | Livora')

@section('content')
    <section class="section-space auth-page-shell">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="auth-card">
                        <div class="auth-header">
                            <span class="section-sub-title">Welcome back</span>
                            <h2>Login to your account</h2>
                        </div>

                        <form class="auth-form">
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" placeholder="you@example.com">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Enter your password">
                            </div>

                            <div class="auth-meta">
                                <label class="remember-me">
                                    <input type="checkbox">
                                    <span>Remember me</span>
                                </label>
                                <a href="{{ route('forgot-password') }}">Forgot password?</a>
                            </div>

                            <button type="submit" class="btn-default w-100">Sign in</button>
                        </form>

                        <div class="auth-footer">
                            <p>New here? <a href="{{ route('signup') }}">Create an account</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection
