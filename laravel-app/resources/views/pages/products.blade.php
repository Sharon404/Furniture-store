@extends('layouts.storefront')

@section('title', 'Shop | Livora')

@section('content')
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1>Shop</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shop</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar-box">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="#">Living Room</a></li>
                            <li><a href="#">Bedroom</a></li>
                            <li><a href="#">Dining</a></li>
                            <li><a href="#">Office</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="product-card">
                                <img src="{{ asset('html.awaikenthemes.com/livora/images/product-1.jpg') }}" alt="Product">
                                <h3>Classic Sofa</h3>
                                <p>From @ksh(16800)</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-card">
                                <img src="{{ asset('html.awaikenthemes.com/livora/images/product-2.jpg') }}" alt="Product">
                                <h3>Accent Chair</h3>
                                <p>From @ksh(7200)</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-card">
                                <img src="{{ asset('html.awaikenthemes.com/livora/images/product-3.jpg') }}" alt="Product">
                                <h3>Dining Set</h3>
                                <p>From @ksh(24900)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection
