@extends('layouts.storefront')

@section('title', $product['name'] . ' | BEDS - TREND FURNITURE')

@section('content')
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1>{{ $product['name'] }}</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('products') }}">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $product['name'] }}</li>
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
                        <img src="{{ asset($product['image']) }}" alt="{{ $product['alt'] }}" class="img-fluid main-product-image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="product-info-box">
                        <span class="section-sub-title">Handcrafted furniture</span>
                        <h2>{{ $product['name'] }}</h2>
                        <div class="product-rating">
                            <span>★★★★★</span>
                            <small>4.9 (128 reviews)</small>
                        </div>
                        <div class="product-price">{{ $product['price'] }}</div>
                        <p class="product-description">{{ $product['description'] }}</p>

                        <div class="product-options">
                            <div class="option-group">
                                <label>Material</label>
                                <div class="option-pills">
                                    @foreach ($product['materials'] as $material)
                                        <span class="pill{{ $loop->first ? ' active' : '' }}">{{ $material }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="option-group">
                                <label>Finish</label>
                                <div class="option-pills">
                                    @foreach ($product['finishes'] as $finish)
                                        <span class="pill{{ $loop->first ? ' active' : '' }}">{{ $finish }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="product-actions d-flex flex-wrap gap-3">
                            <a href="{{ route('cart') }}" class="btn-default">Add to cart</a>
                            <a href="{{ route('checkout') }}" class="btn-border">Buy now</a>
                        </div>

                        <ul class="product-meta-list">
                            @foreach ($product['meta'] as $meta)
                                <li>{{ $meta }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection

