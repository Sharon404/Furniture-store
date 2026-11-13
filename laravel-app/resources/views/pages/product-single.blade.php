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

    <section class="section-space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset('images/product-1.jpg') }}" alt="Classic Sofa" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h2 class="text-anime-style-3">Classic Sofa</h2>
                    <p class="price">@ksh(16800)</p>
                    <p>A timeless sofa designed for comfort, durability, and a refined living room look.</p>
                    <div class="product-actions d-flex gap-3">
                        <a href="{{ route('cart') }}" class="btn-default">Add to cart</a>
                        <a href="{{ route('checkout') }}" class="btn-border">Buy now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection
