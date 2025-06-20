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
                        <a class="nav-link text-light active" href="index.html">Home</a>
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
                        <a class="nav-link text-light" href="product.html">Our Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="contact.html">Contact</a>
                    </li>
                </ul>
                <div class="d-flex ms-3">
                <a href="login.html" class="btn btn-outline-light me-2">Login</a>
                <a href="register.html" class="btn btn-light">Register</a>
            </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="text-white d-flex align-items-center" style="
    min-height: 100vh;
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
    url('frontend/images/cake/12.jpg') 
    no-repeat center center / cover;">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3">Delicious Cakes for Every Occasion</h1>
        <p class="lead mb-4">Handcrafted with love and the finest ingredients</p>
        <a href="#products" class="btn btn-secondary btn-lg px-4">View Our Cakes</a>
    </div>
</section>

            <div class="container my-5">
  <div class="row">
    <div class="col-md-6 bg-warning-subtle p-4">
      <h2 class="fw-bold text-uppercase">Welcome to<br>Delightful Cakes</h2>
      <div class="border rounded p-3 border-danger">
        <p>At our cake shop, we offer a delightful selection...</p>
        <p>Indulge in our rich, fudgy brownies...</p>
        <p>Whether you dream of a classic tiered cake...</p>
        <p>Every bite is freshly baked with love and care...</p>
      </div>
    </div>
    <div class="col-md-6 d-flex align-items-center justify-content-center bg-light" style="background-image: url('frontend/images/wed/3.jpg'); background-size: cover;">
      <div class="bg-light p-4 rounded border border-purple" style="background-color: rgba(255,255,255,0.8);">
        <h2 class="text-dark fw-bold">Cakes</h2>
        <p>Click here to see our cakes gallery.</p>
        <a class="btn btn-outline-danger" href="product.html">Click Here</a>
      </div>
    </div>
  </div>
</div>

    <!-- Products Section -->
    <section class="py-5" id="products">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Our Delicious Creations</h2>
            
            <!-- Wedding Cakes -->
            <div class="row mb-5" id="wedding">
                <h3 class="text-center mb-4 pb-2 border-bottom">Wedding Cakes</h3>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="frontend/images/wcakes/wcake7.jpg" class="card-img-top" alt="Wedding Cake">
                        <div class="card-body">
                            <h5 class="card-title">Elegant White</h5>
                            <p class="card-text">Classic white wedding cake with delicate floral accents.</p>
                            <a href="#" class="btn btn-outline-primary">Inquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="frontend/images/wcakes/wcake5.jpg" class="card-img-top" alt="Wedding Cake">
                        <div class="card-body">
                            <h5 class="card-title">Rustic Charm</h5>
                            <p class="card-text">Naked cake with fresh flowers and berries.</p>
                            <a href="#" class="btn btn-outline-primary">Inquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="frontend/images/wcakes/wcake3.jpg" class="card-img-top" alt="Wedding Cake">
                        <div class="card-body">
                            <h5 class="card-title">Modern Elegance</h5>
                            <p class="card-text">Sleek design with metallic accents.</p>
                            <a href="#" class="btn btn-outline-primary">Inquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="frontend/images/wcakes/wcake6.jpg" class="card-img-top" alt="Wedding Cake">
                        <div class="card-body">
                            <h5 class="card-title">Floral Fantasy</h5>
                            <p class="card-text">Luxurious cake with sugar flowers.</p>
                            <a href="#" class="btn btn-outline-primary">Inquire</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Birthday Cakes -->
            <div class="row mb-5" id="birthday">
                <h3 class="text-center mb-4 pb-2 border-bottom">Birthday Cakes</h3>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="frontend/images/cake/4.jpeg" class="card-img-top" alt="Birthday Cake">
                        <div class="card-body">
                            <h5 class="card-title">Chocolate Dream</h5>
                            <p class="card-text">Rich chocolate cake with chocolate ganache.</p>
                            <a href="#" class="btn btn-outline-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="frontend/images/cake/6.jpg" class="card-img-top" alt="Birthday Cake">
                        <div class="card-body">
                            <h5 class="card-title">Vanilla Celebration</h5>
                            <p class="card-text">Classic vanilla cake with buttercream.</p>
                            <a href="#" class="btn btn-outline-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="frontend/images/cake/14.jpg" class="card-img-top" alt="Birthday Cake">
                        <div class="card-body">
                            <h5 class="card-title">Rainbow Delight</h5>
                            <p class="card-text">Colorful layers with vanilla frosting.</p>
                            <a href="#" class="btn btn-outline-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                         <img src="frontend/images/cake/11.jpg" class="card-img-top" alt="Birthday Cake">
                        <div class="card-body">
                            <h5 class="card-title">Kids' Favorite</h5>
                            <p class="card-text">Fun designs for children's birthdays.</p>
                            <a href="#" class="btn btn-outline-primary">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Cup Cakes -->
            <div class="row mb-5" id="cupcakes">
                <h3 class="text-center mb-4 pb-2 border-bottom">Cup Cakes</h3>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="frontend/images/cupcakes/cupcake2.jpg" class="card-img-top" alt="Cupcakes">
                        <div class="card-body">
                            <h5 class="card-title">Classic Vanilla</h5>
                            <p class="card-text">Fluffy vanilla cupcakes with buttercream.</p>
                            <a href="#" class="btn btn-outline-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="frontend/images/cupcakes/cupcake5.jpg" class="card-img-top" alt="Cupcakes">
                        <div class="card-body">
                            <h5 class="card-title">Decadent Chocolate</h5>
                            <p class="card-text">Rich chocolate cupcakes with ganache.</p>
                            <a href="#" class="btn btn-outline-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="frontend/images/cupcakes/cupcake8.jpg" class="card-img-top" alt="Cupcakes">
                        <div class="card-body">
                            <h5 class="card-title">Red Velvet</h5>
                            <p class="card-text">Classic red velvet with cream cheese.</p>
                            <a href="#" class="btn btn-outline-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="frontend/images/cupcakes/cupcake4.jpg" class="card-img-top" alt="Cupcakes">
                        <div class="card-body">
                            <h5 class="card-title">Fancy Toppings</h5>
                            <p class="card-text">Gourmet cupcakes with creative toppings.</p>
                            <a href="#" class="btn btn-outline-primary">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Brownies -->
            <div class="row" id="brownies">
                <h3 class="text-center mb-4 pb-2 border-bottom">Brownies</h3>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="frontend/images/brownie/brownie10.jpg" class="card-img-top" alt="Brownies">
                        <div class="card-body">
                            <h5 class="card-title">Classic Fudge</h5>
                            <p class="card-text">Rich, fudgy brownies.</p>
                            <a href="#" class="btn btn-outline-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="frontend/images/brownie/brownie3.jpg" class="card-img-top" alt="Brownies">
                        <div class="card-body">
                            <h5 class="card-title">Walnut Crunch</h5>
                            <p class="card-text">Fudgy brownies with walnuts.</p>
                            <a href="#" class="btn btn-outline-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="frontend/images/brownie/brownie5.jpg" class="card-img-top" alt="Brownies">
                        <div class="card-body">
                            <h5 class="card-title">Blondies</h5>
                            <p class="card-text">White chocolate brownies.</p>
                            <a href="#" class="btn btn-outline-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="frontend/images/brownie/brownie8.jpg" class="card-img-top" alt="Brownies">
                        <div class="card-body">
                            <h5 class="card-title">Cheesecake Swirl</h5>
                            <p class="card-text">Chocolate brownies with cheesecake.</p>
                            <a href="#" class="btn btn-outline-primary">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

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
    <script src="{{('frontend/css/bootstrap.bundle.min.js')}}"></script>
</body>
</html>