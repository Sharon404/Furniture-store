@extends('layouts.storefront')

@section('title', 'Forgot Password | Livora')

@section('content')
    <section class="section-space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="summary-box">
                        <h2>Reset your password</h2>
                        <form>
                            <div class="mb-3">
                                <label>Email address</label>
                                <input type="email" class="form-control" placeholder="you@example.com">
                            </div>
                            <button type="submit" class="btn-default w-100">Send reset link</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection
