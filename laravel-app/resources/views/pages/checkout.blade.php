@extends('layouts.storefront')

@section('title', 'Checkout | Livora')

@section('content')
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1>Checkout</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-space checkout-page-shell">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="checkout-card">
                        <h3>Shipping details</h3>
                        <form class="checkout-form">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label>Full name</label>
                                    <input type="text" class="form-control" placeholder="Your name">
                                </div>
                                <div class="col-md-6">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" placeholder="you@example.com">
                                </div>
                                <div class="col-md-6">
                                    <label>Phone number</label>
                                    <input type="text" class="form-control" placeholder="+254 712 345 678">
                                </div>
                                <div class="col-md-6">
                                    <label>City</label>
                                    <input type="text" class="form-control" placeholder="Nairobi">
                                </div>
                                <div class="col-12">
                                    <label>Delivery address</label>
                                    <textarea class="form-control" rows="4" placeholder="Street, building, apartment, etc."></textarea>
                                </div>
                                <div class="col-12">
                                    <label>Delivery notes</label>
                                    <textarea class="form-control" rows="3" placeholder="Any special instructions"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="summary-box">
                        <h3>Your order</h3>
                        <div class="order-item">
                            <span>Classic Sofa</span>
                            <span>@ksh(16800)</span>
                        </div>
                        <div class="order-item">
                            <span>Delivery</span>
                            <span>@ksh(1500)</span>
                        </div>
                        <div class="order-item">
                            <span>Assembly</span>
                            <span>@ksh(2000)</span>
                        </div>
                        <h4>Total: @ksh(20300)</h4>
                        <button type="submit" class="btn-default w-100">Place order</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection
