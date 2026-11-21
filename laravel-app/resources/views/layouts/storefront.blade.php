<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="BEDS - TREND FURNITURE furniture store storefront">
    <title>@yield('title', 'BEDS - TREND FURNITURE | Furniture Store')</title>

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32.png') }}?v=2">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16.png') }}?v=2">
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon-32.png') }}?v=2">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/slicknav.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mousecursor.css') }}">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/site-overrides.css') }}" rel="stylesheet" media="screen">
    @stack('styles')
</head>
<body>
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="{{ asset('images/branding/icon-brown.svg') }}" alt="Loading"></div>
        </div>
    </div>

    @include('partials.storefront-header')

    <main>
        @yield('content')
    </main>

    @include('partials.storefront-footer')

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/validator.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/gsap.min.js') }}"></script>
    <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('js/SplitText.min.js') }}"></script>
    <script src="{{ asset('js/lenis.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/counter.min.js') }}"></script>
    <script src="{{ asset('js/parallaxie.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/function.js') }}"></script>
    <script src="{{ asset('js/magiccursor.js') }}"></script>
    @stack('scripts')
</body>
</html>

