<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="header-action-box d-flex align-items-center justify-content-between w-100">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('images/beds-trend-furniture.png') }}" alt="BEDS - TREND FURNITURE Logo">
                    </a>

                    <div class="main-menu d-flex align-items-center gap-4">
                        <ul class="navbar-nav d-flex flex-row gap-4 align-items-center mb-0">
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">Shop</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="utility-actions" aria-label="Quick actions">
                        <a href="{{ route('products') }}" class="utility-action" aria-label="Browse products">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M10.5 3a7.5 7.5 0 015.88 12.8l4.4 4.4 1.4-1.4-4.4-4.4A7.5 7.5 0 1110.5 3zm0 2a5.5 5.5 0 100 11 5.5 5.5 0 000-11z"/></svg>
                        </a>
                        <a href="{{ route('wishlist') }}" class="utility-action" aria-label="Wishlist">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 20.5l-1.45-1.32C5.4 14.36 2 11.28 2 7.5A4.5 4.5 0 016.5 3c1.74 0 3.41.81 4.5 2.09A6.07 6.07 0 0115.5 3 4.5 4.5 0 0120 7.5c0 3.78-3.4 6.86-8.55 11.68L12 20.5z"/></svg>
                        </a>
                        <a href="{{ route('profile') }}" class="utility-action" aria-label="Profile">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 12a4 4 0 100-8 4 4 0 000 8zm0 2c-4.42 0-8 2.24-8 5v1h16v-1c0-2.76-3.58-5-8-5z"/></svg>
                        </a>
                        <a href="{{ route('cart') }}" class="utility-action cart-action" aria-label="Cart">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 4h2l2.2 9.2a1 1 0 001 .8h8.9a1 1 0 001-.76L19 7H7.2M9 18.5a1.5 1.5 0 100 3 1.5 1.5 0 000-3zm8 0a1.5 1.5 0 100 3 1.5 1.5 0 000-3z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

