<div class="topbar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="topbar-content-info">
                    <p>Exclusive Furniture Sale Up To 50% Off</p>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="header-action-box">
                <div class="header-contact-info-list mobile-hide">
                    <div class="header-contact-info">
                        <div class="icon-box">
                            <img src="{{ asset('html.awaikenthemes.com/livora/images/icon-phone-primary.svg') }}" alt="">
                        </div>
                        <div class="header-contact-info-content">
                            <p>Need Help ?</p>
                            <span><a href="tel:+254712345678">+254 712 345 678</a></span>
                        </div>
                    </div>
                </div>

                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('html.awaikenthemes.com/livora/images/logo.svg') }}" alt="Logo">
                </a>

                <div class="header-action-details">
                    <ul>
                        <li>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <img src="{{ asset('html.awaikenthemes.com/livora/images/icon-search.svg') }}" alt="">
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                        <div class="modal-search-form">
                                            <input type="text" name="search" class="form-control" id="search" placeholder="Search Your Product">
                                            <button type="submit" class="modal-search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{ route('account.wishlist') }}"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-wishlist-primary.svg') }}" alt=""></a></li>
                        <li><a href="{{ route('account.dashboard') }}"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-user-primary.svg') }}" alt=""></a></li>
                        <li><a href="{{ route('cart') }}"><img src="{{ asset('html.awaikenthemes.com/livora/images/icon-cart-primary.svg') }}" alt=""></a></li>
                    </ul>
                </div>
            </div>

            <div class="main-menu">
                <button class="mobile-nav-toggle" type="button" aria-label="Toggle navigation" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">Shop</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
