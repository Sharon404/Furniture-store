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
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active" aria-current="page">Shop</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-space shop-page-section">
        <div class="container">
            <div class="row">
                <aside class="col-lg-3">
                    <div class="shop-sidebar">
                        <div class="sidebar-box">
                            <h3>Categories</h3>
                            <ul class="filter-list">
                                <li><a href="#" class="active">Living Room</a></li>
                                <li><a href="#">Bedroom</a></li>
                                <li><a href="#">Dining</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Outdoor</a></li>
                            </ul>
                        </div>

                        <div class="sidebar-box">
                            <h3>Fabric & Material</h3>
                            <div class="filter-pills">
                                <span class="pill active">Fabric</span>
                                <span class="pill">Leather</span>
                                <span class="pill">Bouclé</span>
                                <span class="pill">Linen</span>
                                <span class="pill">Velvet</span>
                                <span class="pill">Oak</span>
                            </div>
                        </div>

                        <div class="sidebar-box">
                            <h3>Price Range</h3>
                            <div class="price-range-box">
                                <div class="range-track">
                                    <span class="range-fill"></span>
                                </div>
                                <div class="price-values">
                                    <span>KSh 5,000</span>
                                    <span>KSh 50,000</span>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-box">
                            <h3>Room Style</h3>
                            <div class="filter-pills compact">
                                <span class="pill active">Minimal</span>
                                <span class="pill">Contemporary</span>
                                <span class="pill">Classic</span>
                                <span class="pill">Scandinavian</span>
                            </div>
                        </div>
                    </div>
                </aside>

                <div class="col-lg-9">
                    <div class="shop-toolbar">
                        <div>
                            <p>Showing 12 curated pieces</p>
                        </div>
                        <div class="shop-sort">
                            <label for="sort-by">Sort by</label>
                            <select id="sort-by">
                                <option>Featured</option>
                                <option>Price: Low to High</option>
                                <option>Price: High to Low</option>
                                <option>Newest</option>
                            </select>
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('product.show', ['slug' => 'round-oak-table']) }}" class="product-card-link">
                                <div class="product-card">
                                    <img src="{{ asset('images/product-1.jpg') }}" alt="Round oak table">
                                    <h3>Round Oak Table</h3>
                                    <p>From @ksh(16800)</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('product.show', ['slug' => 'tufted-cream-sofa']) }}" class="product-card-link">
                                <div class="product-card">
                                    <img src="{{ asset('images/product-2.jpg') }}" alt="Tufted cream sofa">
                                    <h3>Tufted Cream Sofa</h3>
                                    <p>From @ksh(7200)</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('product.show', ['slug' => 'classic-accent-chair']) }}" class="product-card-link">
                                <div class="product-card">
                                    <img src="{{ asset('images/product-3.jpg') }}" alt="Classic accent chair">
                                    <h3>Classic Accent Chair</h3>
                                    <p>From @ksh(24900)</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('product.show', ['slug' => 'walnut-side-table']) }}" class="product-card-link">
                                <div class="product-card">
                                    <img src="{{ asset('images/product-1.jpg') }}" alt="Walnut side table">
                                    <h3>Walnut Side Table</h3>
                                    <p>From @ksh(11200)</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('product.show', ['slug' => 'modern-2-seater-sofa']) }}" class="product-card-link">
                                <div class="product-card">
                                    <img src="{{ asset('images/product-2.jpg') }}" alt="Modern two-seater sofa">
                                    <h3>Modern 2-Seater Sofa</h3>
                                    <p>From @ksh(18450)</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('product.show', ['slug' => 'vintage-lounge-chair']) }}" class="product-card-link">
                                <div class="product-card">
                                    <img src="{{ asset('images/product-3.jpg') }}" alt="Vintage lounge chair">
                                    <h3>Vintage Lounge Chair</h3>
                                    <p>From @ksh(22350)</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection
