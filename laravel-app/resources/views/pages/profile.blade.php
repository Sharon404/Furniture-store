@extends('layouts.storefront')

@section('title', 'My Profile | Livora')

@section('content')
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1>My account</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">My profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-space account-page-shell">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="account-sidebar">
                        <div class="account-hero">
                            <div class="avatar-badge">AK</div>
                            <div>
                                <h3>Alice Kamau</h3>
                                <p>Premium member</p>
                            </div>
                        </div>

                        <nav class="account-nav">
                            <a href="#" class="active">Profile</a>
                            <a href="{{ route('wishlist') }}">Wishlist</a>
                            <a href="{{ route('cart') }}">Cart</a>
                            <a href="{{ route('checkout') }}">Orders</a>
                        </nav>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="account-card">
                        <h3>Account details</h3>
                        <form class="account-form">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label>First name</label>
                                    <input type="text" class="form-control" value="Alice">
                                </div>
                                <div class="col-md-6">
                                    <label>Last name</label>
                                    <input type="text" class="form-control" value="Kamau">
                                </div>
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="alice@example.com">
                                </div>
                                <div class="col-md-6">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" value="+254 712 333 999">
                                </div>
                                <div class="col-12">
                                    <label>Address</label>
                                    <textarea class="form-control" rows="4">Westlands, Nairobi, Kenya</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn-default">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection
