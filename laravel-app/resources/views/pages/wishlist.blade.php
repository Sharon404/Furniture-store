@extends('layouts.storefront')

@section('title', 'Wishlist | BEDS - TREND FURNITURE')

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
                    <img src="{{ asset('images/corner-seat.jpeg') }}" alt="Corner sectional seat">
                    <div class="wishlist-card-body">
                        <h3>Haven Corner Sectional Seat</h3>
                        <p>From @ksh(16800)</p>
                    </div>
                    <div class="wishlist-actions">
                        <a href="{{ route('product.show', ['slug' => 'round-oak-table']) }}" class="btn-border">View</a>
                        <button type="button" class="btn-default">Add to cart</button>
                    </div>
                </div>

                <div class="product-card wishlist-item">
                    <img src="{{ asset('images/linen-couch.jpeg') }}" alt="Linen couch">
                    <div class="wishlist-card-body">
                        <h3>Cloud Linen Couch</h3>
                        <p>From @ksh(18450)</p>
                    </div>
                    <div class="wishlist-actions">
                        <a href="{{ route('product.show', ['slug' => 'tufted-cream-sofa']) }}" class="btn-border">View</a>
                        <button type="button" class="btn-default">Add to cart</button>
                    </div>
                </div>

                <div class="product-card wishlist-item">
                    <img src="{{ asset('images/recliner-couch.jpeg') }}" alt="Recliner couch">
                    <div class="wishlist-card-body">
                        <h3>Heritage Recliner Couch</h3>
                        <p>From @ksh(24900)</p>
                    </div>
                    <div class="wishlist-actions">
                        <a href="{{ route('product.show', ['slug' => 'classic-accent-chair']) }}" class="btn-border">View</a>
                        <button type="button" class="btn-default">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

