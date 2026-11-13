@extends('layouts.storefront')

@section('title', 'Product Details | Livora')

@section('content')
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1>Classic Sofa</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('products') }}">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Classic Sofa</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-space product-page-shell">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="product-gallery">
                        <img src="{{ asset('images/product-1.jpg') }}" alt="Classic Sofa" class="img-fluid main-product-image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="product-info-box">
                        <span class="section-sub-title">Handcrafted furniture</span>
                        <h2>Classic Sofa</h2>
                        <div class="product-rating">
                            <span>★★★★★</span>
                            <small>4.9 (128 reviews)</small>
                        </div>
                        <div class="product-price">@ksh(16800)</div>
                        <p class="product-description">A timeless sofa designed for comfort, durability, and a refined living room look. Crafted with premium fabrics and a sculpted silhouette for elevated everyday living.</p>

                        <div class="product-options">
                            <div class="option-group">
                                <label>Fabric</label>
                                <div class="option-pills">
                                    <span class="pill active">Linen</span>
                                    <span class="pill">Velvet</span>
                                    <span class="pill">Bouclé</span>
                                </div>
                            </div>
                            <div class="option-group">
                                <label>Color</label>
                                <div class="option-pills">
                                    <span class="pill active">Sand</span>
                                    <span class="pill">Charcoal</span>
                                    <span class="pill">Warm Beige</span>
                                </div>
                            </div>
                        </div>

                        <div class="product-actions d-flex flex-wrap gap-3">
                            <a href="{{ route('cart') }}" class="btn-default">Add to cart</a>
                            <a href="{{ route('checkout') }}" class="btn-border">Buy now</a>
                        </div>

                        <ul class="product-meta-list">
                            <li>Free delivery in Nairobi</li>
                            <li>2-year craftsmanship warranty</li>
                            <li>Made to order</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection
