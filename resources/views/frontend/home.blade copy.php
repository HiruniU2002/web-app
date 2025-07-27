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

    
    @include('frontend.Home.slider')
    </section>
    

    @include('frontend.Home.HomeSetting')

    <!-- Products Section -->
    <section class="py-5" id="products">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Our Delicious Creations</h2>
            
            <!-- Wedding Cakes -->
            <div class="row mb-5" id="wedding">
                <h3 class="text-center mb-4 pb-2 border-bottom">Wedding Cakes</h3>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://m.media-amazon.com/images/I/71BTWmjDziL._UF894,1000_QL80_.jpg" class="card-img-top" alt="Wedding Cake">
                        <div class="card-body">
                            <h5 class="card-title">Elegant White</h5>
                            <p class="card-text">Classic white wedding cake with delicate floral accents.</p>
                            <a href="#" class="btn btn-outline-primary">Inquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://funcakes.com/content/uploads/2025/02/naked-wedding-cake-960x960-c-default.jpg" class="card-img-top" alt="Wedding Cake">
                        <div class="card-body">
                            <h5 class="card-title">Rustic Charm</h5>
                            <p class="card-text">Naked cake with fresh flowers and berries.</p>
                            <a href="#" class="btn btn-outline-primary">Inquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://images.squarespace-cdn.com/content/v1/65fc26988551a5639cad9129/1711726478571-Y0P0YTDS4U7EOQ1ARH0R/3+tier+Buttercream+fresh+flowers+Summer.JPG" class="card-img-top" alt="Wedding Cake">
                        <div class="card-body">
                            <h5 class="card-title">Modern Elegance</h5>
                            <p class="card-text">Sleek design with metallic accents.</p>
                            <a href="#" class="btn btn-outline-primary">Inquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://cdn11.bigcommerce.com/s-vm6doh2w4n/images/stencil/original/products/6739/18054/sez4l5fo471joav83jgf__78539.1728509582.jpg?c=1" class="card-img-top" alt="Wedding Cake">
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
    </div>


    <!-- Footer -->
      @include('frontend.layouts.footer')
  

    <!-- Bootstrap JS -->
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>




