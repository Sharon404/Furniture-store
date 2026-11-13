@extends('layouts.storefront')

@section('title', 'Sign Up | Livora')

@section('content')
    <section class="section-space auth-page-shell">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="auth-card">
                        <div class="auth-header">
                            <span class="section-sub-title">Create account</span>
                            <h2>Join Livora</h2>
                        </div>

                        <form class="auth-form">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First name</label>
                                        <input type="text" class="form-control" placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last name</label>
                                        <input type="text" class="form-control" placeholder="Last name">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" placeholder="you@example.com">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Create password">
                            </div>

                            <div class="form-group">
                                <label>Confirm password</label>
                                <input type="password" class="form-control" placeholder="Confirm password">
                            </div>

                            <button type="submit" class="btn-default w-100">Create account</button>
                        </form>

                        <div class="auth-footer">
                            <p>Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection
