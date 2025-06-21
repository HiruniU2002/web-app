<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakes by Hiru - Premium Bakery</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3 text-light" href="#">
                <img src="frontend/images/Cake-Logo.png" alt="Logo" width="50"> Cakes by Hiru
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light active" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item " href="#wedding">Wedding Cakes</a></li>
                            <li><a class="dropdown-item " href="#birthday">Birthday Cakes</a></li>
                            <li><a class="dropdown-item " href="#cupcakes">Cup Cakes</a></li>
                            <li><a class="dropdown-item" href="#brownies">Brownies</a></li>
                        </ul>
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

    <div>
        @yield('content')
    </div>


    <!-- Footer -->
    <footer class="text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-uppercase mb-4">Cakes by Hiru</h5>
                    <p>Delicious cakes and desserts for all occasions. Made with love and the finest ingredients.</p>
                    <div class="mt-4">
                        <a href="#" class="text-white me-3"><i class="bi bi-facebook fs-4"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-instagram fs-4"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-twitter fs-4"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-pinterest fs-4"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Products</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#wedding" class="text-white text-decoration-none">Wedding Cakes</a></li>
                        <li class="mb-2"><a href="#birthday" class="text-white text-decoration-none">Birthday Cakes</a></li>
                        <li class="mb-2"><a href="#cupcakes" class="text-white text-decoration-none">Cup Cakes</a></li>
                        <li><a href="#brownies" class="text-white text-decoration-none">Brownies</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Company</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#about" class="text-white text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Our Product</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Contact</a></li>
                        <li><a href="#" class="text-white text-decoration-none">About</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-uppercase mb-4">Newsletter</h5>
                    <p>Subscribe to get updates on new products and special offers.</p>
                    <form class="mb-3">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your email" required>
                            <button class="btn btn-secondary" type="submit">Subscribe</button>
                        </div>
                    </form>
                    <p class="small mb-0">We'll never share your email with anyone else.</p>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="small mb-0">&copy; 2023 Cakes by Hiru. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-white text-decoration-none small me-3">Privacy Policy</a>
                    <a href="#" class="text-white text-decoration-none small">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>