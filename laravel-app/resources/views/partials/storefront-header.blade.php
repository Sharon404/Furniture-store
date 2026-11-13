<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="header-action-box d-flex align-items-center justify-content-between w-100">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('images/logo.svg') }}" alt="Livora Logo">
                    </a>

                    <div class="main-menu d-flex align-items-center gap-4">
                        <ul class="navbar-nav d-flex flex-row gap-4 align-items-center mb-0">
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">Shop</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('cart') }}">Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
