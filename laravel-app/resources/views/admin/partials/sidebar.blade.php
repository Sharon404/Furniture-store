<div class="app-menu navbar-menu">
    <div class="navbar-brand-box">
        <a href="{{ route('admin.dashboard') }}" class="logo logo-dark">
            <span class="logo-sm"><img src="{{ asset('images/branding/logo-primary-cropped.png') }}" alt="BEDS - TREND FURNITURE"></span>
            <span class="logo-lg"><img src="{{ asset('images/branding/logo-primary-cropped.png') }}" alt="BEDS - TREND FURNITURE"></span>
        </a>
        <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
            <span class="logo-sm"><img src="{{ asset('images/branding/logo-primary-cropped.png') }}" alt="BEDS - TREND FURNITURE"></span>
            <span class="logo-lg"><img src="{{ asset('images/branding/logo-primary-cropped.png') }}" alt="BEDS - TREND FURNITURE"></span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar" data-simplebar>
        <div class="container-fluid">
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item"><a class="nav-link menu-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}"><i class="ri-dashboard-2-line"></i> <span>Overview</span></a></li>

                <li class="menu-title mt-2"><span>Commerce</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('admin.products.*') ? 'active' : '' }}" href="#sidebarProducts" data-bs-toggle="collapse" role="button" aria-expanded="{{ request()->routeIs('admin.products.*') ? 'true' : 'false' }}" aria-controls="sidebarProducts">
                        <i class="ri-store-2-line"></i> <span>Product Management</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('admin.products.*') ? 'show' : '' }}" id="sidebarProducts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="{{ route('admin.products.index') }}" class="nav-link">All Products</a></li>
                            <li class="nav-item"><a href="{{ route('admin.products.create') }}" class="nav-link">Add New Product</a></li>
                            <li class="nav-item"><a href="{{ route('admin.products.categories') }}" class="nav-link">Product Categories</a></li>
                            <li class="nav-item"><a href="{{ route('admin.products.images') }}" class="nav-link">Product Images</a></li>
                            <li class="nav-item"><a href="{{ route('admin.products.variations') }}" class="nav-link">Product Variations</a></li>
                            <li class="nav-item"><a href="{{ route('admin.products.pricing') }}" class="nav-link">Pricing & Discounts</a></li>
                            <li class="nav-item"><a href="{{ route('admin.products.status') }}" class="nav-link">Product Status</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('admin.orders.*') ? 'active' : '' }}" href="#sidebarOrders" data-bs-toggle="collapse" role="button" aria-expanded="{{ request()->routeIs('admin.orders.*') ? 'true' : 'false' }}" aria-controls="sidebarOrders">
                        <i class="ri-file-list-3-line"></i> <span>Order Management</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('admin.orders.*') ? 'show' : '' }}" id="sidebarOrders">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="{{ route('admin.orders.index') }}" class="nav-link">All Orders</a></li>
                            <li class="nav-item"><a href="{{ route('admin.orders.index', ['status' => 'pending']) }}" class="nav-link">Pending</a></li>
                            <li class="nav-item"><a href="{{ route('admin.orders.index', ['status' => 'processing']) }}" class="nav-link">Processing</a></li>
                            <li class="nav-item"><a href="{{ route('admin.orders.index', ['status' => 'shipped']) }}" class="nav-link">Shipped</a></li>
                            <li class="nav-item"><a href="{{ route('admin.orders.index', ['status' => 'completed']) }}" class="nav-link">Completed</a></li>
                            <li class="nav-item"><a href="{{ route('admin.orders.index', ['status' => 'cancelled']) }}" class="nav-link">Cancelled</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item"><a class="nav-link menu-link {{ request()->routeIs('admin.customers.*') ? 'active' : '' }}" href="{{ route('admin.customers.index') }}"><i class="ri-group-line"></i> <span>Customer Management</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link {{ request()->routeIs('admin.inventory.*') ? 'active' : '' }}" href="{{ route('admin.inventory.index') }}"><i class="ri-stack-line"></i> <span>Inventory</span></a></li>

                <li class="menu-title mt-2"><span>Growth & Insights</span></li>
                <li class="nav-item"><a class="nav-link menu-link {{ request()->routeIs('admin.discounts.*') ? 'active' : '' }}" href="{{ route('admin.discounts.index') }}"><i class="ri-coupon-3-line"></i> <span>Discounts & Coupons</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link {{ request()->routeIs('admin.reviews.*') ? 'active' : '' }}" href="{{ route('admin.reviews.index') }}"><i class="ri-star-line"></i> <span>Reviews & Ratings</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link {{ request()->routeIs('admin.reports.*') ? 'active' : '' }}" href="{{ route('admin.reports.index') }}"><i class="ri-line-chart-line"></i> <span>Reports & Analytics</span></a></li>

                <li class="menu-title mt-2"><span>Administration</span></li>
                <li class="nav-item"><a class="nav-link menu-link {{ request()->routeIs('admin.settings') ? 'active' : '' }}" href="{{ route('admin.settings') }}"><i class="ri-settings-4-line"></i> <span>Store Settings</span></a></li>
                <li class="nav-item"><a class="nav-link menu-link {{ request()->routeIs('admin.profile') ? 'active' : '' }}" href="{{ route('admin.profile') }}"><i class="ri-user-settings-line"></i> <span>Admin Profile</span></a></li>
            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>
