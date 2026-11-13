@extends('layouts.storefront')

@section('title', 'Blog Single | Livora')

@section('content')
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1>Top furniture trends for 2026</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <img src="{{ asset('images/blog-image-1.jpg') }}" alt="Blog article" class="img-fluid mb-4">
                    <p>Furniture design is evolving to focus on multi-use spaces, natural textures, and comfort-driven features. Homeowners are choosing pieces that look good and work hard.</p>
                    <p>Neutral palettes, sculpted forms, and warm wood tones remain popular. Smart storage and compact silhouettes also continue to lead interior trends.</p>
                    <p>At Livora, we believe a beautiful room should still feel practical and welcoming.</p>
                </div>
            </div>
        </div>
    </section>
@endSection
