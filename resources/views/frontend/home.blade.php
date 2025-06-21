@extends('frontend.layouts.master')


@section('content')
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
@endsection


