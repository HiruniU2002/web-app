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
                <li class="nav-item">
                    <a href="/cart" class="nav-link px-3 text-dark position-relative">
                        <i class="bi bi-cart3 fs-5"></i>
                        <!-- <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            
                        </span> -->
                    </a>
                </li>
            </ul>

            <div class="d-flex ms-3">
                <a href="/login" class="btn btn-outline-dark me-2">Login</a>
                <a href="/register" class="btn btn-danger text-white">Register</a>
            </div>
        </div>
    </div>
</nav>
