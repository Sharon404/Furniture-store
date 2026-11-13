@extends('layouts.storefront')

@section('title', 'Home | Livora')

@section('content')
    <section class="hero-section dark-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="section-sub-title wow fadeInUp">Fresh arrivals</span>
                    <h1 class="text-anime-style-3">Furniture that brings comfort home.</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.1s">Discover beautifully crafted furniture for modern Kenyan homes and workspaces.</p>
                    <div class="d-flex gap-3 flex-wrap wow fadeInUp" data-wow-delay="0.2s">
                        <a href="{{ route('products') }}" class="btn-default">Shop now</a>
                        <a href="{{ route('about') }}" class="btn-border">About us</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-box">
                        <img src="{{ asset('html.awaikenthemes.com/livora/images/hero-image.png') }}" alt="Furniture collection">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-space">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <span class="section-sub-title">Why shop with us</span>
                    <h2 class="text-anime-style-3">Built for everyday living</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="feature-box">
                        <h3>Handpicked designs</h3>
                        <p>Modern, practical, and stylish furniture curated for your spaces.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <h3>Affordable pricing</h3>
                        <p>Transparent Kenyan pricing with quality pieces that fit your budget.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <h3>Fast delivery</h3>
                        <p>Quick dispatch and friendly support for homes across Nairobi and beyond.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-space light-section">
        <div class="container">
            <div class="row align-items-center mb-4">
                <div class="col-lg-8">
                    <span class="section-sub-title">Popular collections</span>
                    <h2 class="text-anime-style-3">Best sellers</h2>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('products') }}" class="btn-default">View all</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="{{ asset('html.awaikenthemes.com/livora/images/product-1.jpg') }}" alt="Sofa">
                        <h3>Modern Sofa</h3>
                        <p>From @ksh(14500)</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="{{ asset('html.awaikenthemes.com/livora/images/product-2.jpg') }}" alt="Dining chair">
                        <h3>Dining Chair</h3>
                        <p>From @ksh(6200)</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="{{ asset('html.awaikenthemes.com/livora/images/product-3.jpg') }}" alt="Coffee table">
                        <h3>Coffee Table</h3>
                        <p>From @ksh(8900)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection
