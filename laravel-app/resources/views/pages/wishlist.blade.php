@extends('layouts.storefront')

@section('title', 'Wishlist | Livora')

@section('content')
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1>Wishlist</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-space wishlist-page-shell">
        <div class="container">
            <div class="wishlist-grid">
                <div class="product-card wishlist-item">
                    <img src="{{ asset('images/product-1.jpg') }}" alt="Classic Sofa">
                    <div class="wishlist-card-body">
                        <h3>Classic Sofa</h3>
                        <p>From @ksh(16800)</p>
                    </div>
                    <div class="wishlist-actions">
                        <a href="{{ route('product-single') }}" class="btn-border">View</a>
                        <button type="button" class="btn-default">Add to cart</button>
                    </div>
                </div>

                <div class="product-card wishlist-item">
                    <img src="{{ asset('images/product-2.jpg') }}" alt="Accent Chair">
                    <div class="wishlist-card-body">
                        <h3>Accent Chair</h3>
                        <p>From @ksh(7200)</p>
                    </div>
                    <div class="wishlist-actions">
                        <a href="{{ route('product-single') }}" class="btn-border">View</a>
                        <button type="button" class="btn-default">Add to cart</button>
                    </div>
                </div>

                <div class="product-card wishlist-item">
                    <img src="{{ asset('images/product-3.jpg') }}" alt="Dining Set">
                    <div class="wishlist-card-body">
                        <h3>Dining Set</h3>
                        <p>From @ksh(24900)</p>
                    </div>
                    <div class="wishlist-actions">
                        <a href="{{ route('product-single') }}" class="btn-border">View</a>
                        <button type="button" class="btn-default">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection
