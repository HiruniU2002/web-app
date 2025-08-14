<nav class="navbar navbar-expand-lg sticky-top shadow-sm" style="background-color: #FFD1DC;">
    <div class="container">
        <a class="navbar-brand fw-bold fs-3 text-dark d-flex align-items-center" href="/">
            <img src="{{ asset('frontend/images/Cake-Logo.png') }}" alt="Logo" width="50" height="50" class="rounded-circle me-2">
            <span style="font-family: 'Pacifico', cursive;">Cakes by Hiru</span>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->is('/') ? 'fw-bold text-danger' : 'text-dark' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->is('product') ? 'fw-bold text-danger' : 'text-dark' }}" href="/product">Our Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->is('about') ? 'fw-bold text-danger' : 'text-dark' }}" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->is('contact') ? 'fw-bold text-danger' : 'text-dark' }}" href="/contact">Contact</a>
                </li>
            
            
                
            </ul>
            <!-- Cart Icon with Badge -->
                    <div class="position-relative">
                        <a href="{{route('cart.index')}}" class="text-dark fs-5">
                            <i class="bi bi-cart3 fs-5"></i>
                            @if(Cart::instance('cart')->content()->count()>0)
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.5rem;">
                                {{Cart::instance('cart')->content()->count()}}
                                <!-- <span class="visually-hidden">items in cart</span> -->
                            </span>
                            @endif
                        </a>
                    </div>

            <div class="d-flex ms-3 align-items-center">
    @auth
        <!-- Logged-in: Profile dropdown with icons -->
        <div class="dropdown">
            <a href="#" class="dropdown-toggle d-flex align-items-center text-decoration-none" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                @if(Auth::user()->profile_photo_path)
                    <img src="{{ asset(Auth::user()->profile_photo_path) }}" alt="Profile" class="rounded-circle me-2" width="32" height="32">
                @else
                    <span class="avatar bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 32px; height: 32px;">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </span>
                @endif
                <span class="d-none d-sm-inline">{{ Auth::user()->name }}</span>
                <!-- <i class="bi bi-chevron-down ms-1"></i> -->
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="/dashboard">
                        <i class="bi bi-person me-2"></i> Profile
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="/">
                        <i class="bi bi-gear me-2"></i> Settings
                    </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item bg-danger text-white">
                            <i class="bi bi-box-arrow-right me-2"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    @else
        <!-- Guest: Login/Register buttons with icons -->
        <a href="{{ route('login') }}" class="btn btn-outline-dark me-2">
            <i class="bi bi-box-arrow-in-right me-1"></i> Login
        </a>
        <a href="{{ route('register') }}" class="btn btn-danger text-white">
            <i class="bi bi-person-plus me-1"></i> Register
        </a>
    @endauth
</div>
        </div>
    </div>
</nav>
