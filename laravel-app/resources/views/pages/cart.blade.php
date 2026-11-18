@extends('layouts.storefront')

@section('title', 'Cart | BEDS - TREND FURNITURE')

@section('content')
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1>Shopping Cart</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-space cart-page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <table class="table cart-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Classic Sofa</td>
                                <td>@ksh(16800)</td>
                                <td>1</td>
                                <td>@ksh(16800)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4">
                    <div class="summary-box">
                        <h3>Order summary</h3>
                        <p>Subtotal: @ksh(16800)</p>
                        <p>Delivery: @ksh(1500)</p>
                        <h4>Total: @ksh(18300)</h4>
                        <a href="{{ route('checkout') }}" class="btn-default">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection

