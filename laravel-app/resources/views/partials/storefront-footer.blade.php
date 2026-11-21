<footer class="main-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <a href="{{ route('home') }}" class="footer-brandmark" aria-label="BEDS - TREND FURNITURE home">
                            <img src="{{ asset('images/branding/logo-secondary-dark-bg.svg') }}" alt="BEDS - TREND FURNITURE secondary logo for dark background" class="footer-logo-dark-bg">
                            <img src="{{ asset('images/branding/logo-secondary-light-bg.svg') }}" alt="BEDS - TREND FURNITURE secondary logo for light background" class="footer-logo-light-bg">
                        </a>
                        <h3>About BEDS - TREND FURNITURE</h3>
                        <p>Modern furniture crafted for joyful living spaces, thoughtful design, and lasting comfort.</p>
                        <div class="footer-icon-pair" aria-hidden="true">
                            <img src="{{ asset('images/branding/icon-light.svg') }}" alt="">
                            <img src="{{ asset('images/branding/icon-brown.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="{{ route('about') }}">About us</a></li>
                            <li><a href="{{ route('products') }}">Shop</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                            <li><a href="{{ route('delivery-policy') }}">Delivery Policy</a></li>
                            <li><a href="{{ route('refund-return') }}">Refund & Return</a></li>
                            <li><a href="{{ route('faqs') }}">FAQs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3>Contact</h3>
                        <ul>
                            <li>Nairobi, Kenya</li>
                            <li><a href="tel:+254712345678">+254 712 345 678</a></li>
                            <li><a href="mailto:hello@bedstrendfurniture.com">hello@bedstrendfurniture.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p>© 2026 BEDS - TREND FURNITURE. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <ul class="footer-social">
                        <li><a href="{{ route('contact') }}" aria-label="Contact on Facebook">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M13.5 22v-8h2.7l.4-3h-3.1V7.5c0-.9.3-1.5 1.6-1.5H17V3.1c-.3-.1-1.5-.1-2.8-.1-2.8 0-4.7 1.7-4.7 4.8V11H7v3h2.5v8h4z"/></svg>
                        </a></li>
                        <li><a href="{{ route('blog') }}" aria-label="View Instagram stories">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 2h10a5 5 0 015 5v10a5 5 0 01-5 5H7a5 5 0 01-5-5V7a5 5 0 015-5zm0 2a3 3 0 00-3 3v10a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H7zm5 3.5A5.5 5.5 0 1017.5 13 5.5 5.5 0 0012 7.5zm0 2A3.5 3.5 0 1112 16.5 3.5 3.5 0 0112 9.5zm5.25-3.25a1.25 1.25 0 110 2.5 1.25 1.25 0 010-2.5z"/></svg>
                        </a></li>
                        <li><a href="{{ route('about') }}" aria-label="Follow on X">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M18.9 2h3.5l-7.6 8.7L22.9 22h-6.9l-5.4-7.9L4.8 22H1.3l8.2-9.3L1 2h7.1l4.9 7.2L18.9 2zm-1.2 18h1.9L7.2 3.9H5.2L17.7 20z"/></svg>
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
