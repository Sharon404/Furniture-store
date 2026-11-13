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

    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <form class="checkout-form">
                        <div class="mb-3">
                            <label>Full name</label>
                            <input type="text" class="form-control" placeholder="Your name">
                        </div>
                        <div class="mb-3">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="you@example.com">
                        </div>
                        <div class="mb-3">
                            <label>Delivery address</label>
                            <textarea class="form-control" rows="4" placeholder="Your address"></textarea>
                        </div>
                        <button type="submit" class="btn-default">Place order</button>
                    </form>
                </div>
                <div class="col-lg-5">
                    <div class="summary-box">
                        <h3>Your order</h3>
                        <p>Classic Sofa: @ksh(16800)</p>
                        <p>Delivery: @ksh(1500)</p>
                        <h4>Total: @ksh(18300)</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection
