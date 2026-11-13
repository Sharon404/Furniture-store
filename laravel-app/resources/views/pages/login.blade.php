@extends('layouts.storefront')

@section('title', 'Login | Livora')

@section('content')
    <section class="section-space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="summary-box">
                        <h2>Login</h2>
                        <form>
                            <div class="mb-3">
                                <label>Email address</label>
                                <input type="email" class="form-control" placeholder="you@example.com">
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <button type="submit" class="btn-default w-100">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection
