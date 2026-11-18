<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="navbar-toggle"></div>
                <div class="header-action-box d-flex align-items-center justify-content-between w-100">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('images/beds-trend-furniture.png') }}" alt="BEDS - TREND FURNITURE Logo">
                    </a>

                    <div class="main-menu d-flex align-items-center gap-4">
                        <ul id="menu" class="navbar-nav d-flex flex-row gap-4 align-items-center mb-0">
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">Shop</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="utility-actions" aria-label="Quick actions">
                        <a href="{{ route('products') }}" class="utility-action" aria-label="Browse products">
                            <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                <path d="M10.5 3a7.5 7.5 0 0 1 5.84 12.2l4.23 4.23-1.27 1.27-4.23-4.23A7.5 7.5 0 1 1 10.5 3zm0 1.8a5.7 5.7 0 1 0 0 11.4 5.7 5.7 0 0 0 0-11.4z"/>
                            </svg>
                        </a>
                        <a href="{{ route('wishlist') }}" class="utility-action" aria-label="Wishlist">
                            <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                <path d="M12 21.1l-1-.9C6.2 16 3 13.2 3 9.6 3 6.9 5.1 5 7.7 5c1.7 0 3.3.8 4.3 2.1C13 5.8 14.6 5 16.3 5 18.9 5 21 6.9 21 9.6c0 3.6-3.2 6.4-8 10.6l-1 .9z"/>
                            </svg>
                        </a>
                        <a href="{{ route('profile') }}" class="utility-action" aria-label="Profile">
                            <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                <path d="M12 12.2a4.1 4.1 0 1 1 0-8.2 4.1 4.1 0 0 1 0 8.2zm0 1.9c4.2 0 7.6 2.1 7.6 4.8V21H4.4v-2.1c0-2.7 3.4-4.8 7.6-4.8z"/>
                            </svg>
                        </a>
                        <a href="{{ route('cart') }}" class="utility-action cart-action" aria-label="Cart">
                            <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                <path d="M3 4h2.2l1.1 5h12.3l-1.4 6.2H8.3L7.9 17h9.2v1.8H7.2a1 1 0 0 1-1-.8L4.7 5.8H3V4zm6.1 15.2a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3zm6.8 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="responsive-menu"></div>
            </div>
        </nav>
    </div>
</header>

