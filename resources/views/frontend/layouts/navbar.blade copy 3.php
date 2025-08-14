  <nav class="navbar navbar-expand-lg navbar sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3 text-light" href="#">
                <img src="{{asset('frontend/images/Cake-Logo.png')}}" alt="Logo" width="60" height="60" class="rounded-circle">
                 Cakes by Hiru
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light active" href="/">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/product">Our Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/contact">Contact</a>
                    </li>
                </ul>
                <div class="d-flex ms-3">
                <a href="/login" class="btn btn-outline-light me-2">Login</a>
                <a href="/register" class="btn btn-light">Register</a>
            </div>
            </div>
        </div>
    </nav>
