@extends('layouts.storefront')

@section('title', 'Order Received | Livora')

@section('content')
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1>Order Received</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-order-receive">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="page-single-sidebar">
                        <div class="order-receive-sidebar">
                            <div class="order-receive-sidebar-item order-receive-box">
                                <h2 class="order-sidebar-item-title">Order Received</h2>
                                <ul>
                                    <li>Order number<span><b>#236</b></span></li>
                                    <li>Order Date<span>Nov 16, 2026</span></li>
                                    <li>Payment method:<span>Direct bank transfer</span></li>
                                    <li>Total:<span>@ksh(20300)</span></li>
                                </ul>
                            </div>

                            <div class="order-receive-sidebar-item">
                                <h2 class="order-sidebar-item-title">Billing address</h2>
                                <ul>
                                    <li>Jack R. Miles</li>
                                    <li>221B Baker Street, Marylebone, London NW1 6XE</li>
                                    <li><a href="tel:+254712345678">+254 712 345 678</a> <a href="mailto:hello@livora.co.ke">hello@livora.co.ke</a></li>
                                </ul>
                            </div>

                            <div class="order-receive-sidebar-item">
                                <h2 class="order-sidebar-item-title">Shipping address</h2>
                                <ul>
                                    <li>Jack R. Miles</li>
                                    <li>221B Baker Street, Marylebone, London NW1 6XE</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-7">
                    <div class="order-receive-content-box">
                        <div class="section-title">
                            <h2>ORDER #236</h2>
                            <p>Thank you. Your order has been received.</p>
                        </div>

                        <div class="order-receive-content-list">
                            <ul>
                                <li class="order-receive-content-list-title">Product <span>Total</span></li>
                                <li>Classic Sofa - 01 <span>@ksh(16800)</span></li>
                                <li>Delivery <span>@ksh(1500)</span></li>
                                <li>Assembly <span>@ksh(2000)</span></li>
                                <li>Subtotal: <span>@ksh(20300)</span></li>
                                <li>Shipping: <span>Free shipping</span></li>
                                <li>Tax: <span>@ksh(0)</span></li>
                                <li>Total: <span>@ksh(20300)</span></li>
                                <li>Payment method: <span>Direct bank transfer</span></li>
                                <li>Note: <span>Thank you for choosing Livora. We will keep you updated as your furniture is prepared and delivered.</span></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('products') }}" class="btn-default">Continue shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
