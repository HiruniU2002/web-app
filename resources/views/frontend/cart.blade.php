@extends('frontend.layouts.master')

@section('content')
<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="shop-checkout container">
        <!-- Main Heading -->
        <div class="text-center mb-5">
            <h1 class="page-title mb-2">Your Shopping Cart</h1>
            <p class="text-muted">Review and manage your items before checkout</p>
        </div>
        
        <!-- Progress Steps -->
        <div class="container mb-5">
    <div class="d-flex justify-content-between align-items-center">
        <!-- Step 1 - Cart Review -->
        <div class="d-flex flex-column align-items-center position-relative">
            <div class="d-flex align-items-center">
                <div class="rounded-circle bg-success text-white d-flex justify-content-center align-items-center" 
                     style="width: 40px; height: 40px;">
                    1
                </div>
                <div class="ms-2 d-none d-md-block">
                    <div class="fw-bold">Cart Review</div>
                    <small class="text-muted">Manage your items</small>
                </div>
            </div>
            <div class="position-absolute top-50 start-100 h-1px bg-success w-25 d-none d-md-block"></div>
        </div>

        <!-- Step 2 - Shipping & Payment -->
        <div class="d-flex flex-column align-items-center position-relative">
            <div class="d-flex align-items-center">
                <div class="rounded-circle bg-secondary text-white d-flex justify-content-center align-items-center" 
                     style="width: 40px; height: 40px;">
                    2
                </div>
                <div class="ms-2 d-none d-md-block">
                    <div class="fw-bold">Shipping & Payment</div>
                    <small class="text-muted">Enter details</small>
                </div>
            </div>
            <div class="position-absolute top-50 start-100 h-1px bg-secondary w-25 d-none d-md-block"></div>
        </div>

        <!-- Step 3 - Confirmation -->
        <div class="d-flex flex-column align-items-center">
            <div class="d-flex align-items-center">
                <div class="rounded-circle bg-secondary text-white d-flex justify-content-center align-items-center" 
                     style="width: 40px; height: 40px;">
                    3
                </div>
                <div class="ms-2 d-none d-md-block">
                    <div class="fw-bold">Confirmation</div>
                    <small class="text-muted">Order review</small>
                </div>
            </div>
        </div>
    </div>
</div>
        
        <!-- Shopping Cart Content -->
        <div class="shopping-cart">
            @if($items->count() > 0)
            <div class="row">
                <!-- Left Column - Cart Items -->
                <div class="col-lg-8 pe-lg-4">
                    <div class="cart-items-container mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="mb-0">Your Items ({{$items->count()}})</h3>
                            <form action="{{route('cart.empty')}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm" type="submit">
                                    Clear Cart
                                </button>
                            </form>
                        </div>
                        
                        <div class="cart-items-list">
                            @foreach ($items as $item)
                            <div class="cart-item card mb-3">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <!-- Product Image -->
                                        <div class="col-md-2">
                                            <img src="{{ $item->options->image }}" 
                                                 alt="{{ $item->name }}" 
                                                 class="img-fluid rounded">
                                        </div>
                                        
                                        <!-- Product Details -->
                                        <div class="col-md-4">
                                            <h5 class="mb-1">{{$item->name}}</h5>
                                            <ul class="list-unstyled text-muted small">
                                                <li>Category: {{$item->type}}</li>
                                                <li>Size: {{$item->size}}</li>
                                            </ul>
                                        </div>
                                        
                                        <!-- Price -->
                                        <div class="col-md-2 text-center">
                                            <span class="fw-bold">LKR {{$item->price}}</span>
                                        </div>
                                        
                                        <!-- Quantity -->
                                        <div class="col-md-2">
                                            <div class="input-group">
                                                <form method="POST" action="{{route('cart.reduce.qty',['rowId'=>$item->rowId])}}" class="d-inline">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn btn-outline-secondary" type="submit">-</button>
                                                </form>
                                                <input type="text" value="{{$item->qty}}" 
                                                       class="form-control text-center" readonly>
                                                <form method="POST" action="{{route('cart.increase.qty',['rowId'=>$item->rowId])}}" class="d-inline">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn btn-outline-secondary" type="submit">+</button>
                                                </form>
                                            </div>
                                        </div>
                                        
                                        <!-- Subtotal & Remove -->
                                        <div class="col-md-2 text-end">
                                            <div class="d-flex flex-column align-items-end">
                                                <span class="fw-bold mb-2">LKR {{$item->subtotal()}}</span>
                                                <form action="{{route('cart.remove',$item->rowId)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-link text-danger p-0">
                                                        <small>Remove</small>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <div class="continue-shopping text-center py-3">
                        <a href="{{route('product')}}" class="btn btn-outline-primary">
                            <i class="fas fa-arrow-left me-2"></i> Continue Shopping
                        </a>
                    </div>
                </div>
                
                <!-- Right Column - Order Summary -->
                <div class="col-lg-4">
                    <div class="order-summary card sticky-top">
                        <div class="card-body">
                            <h3 class="card-title mb-4">Order Summary</h3>
                            
                            <div class="order-summary-details mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Subtotal ({{$items->count()}} items)</span>
                                    <span>LKR {{Cart::instance('cart')->subtotal()}}</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Shipping</span>
                                    <span class="text-success">FREE</span>
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <span>Tax (VAT)</span>
                                    <span>LKR {{Cart::instance('cart')->tax()}}</span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between fw-bold fs-5">
                                    <span>Total</span>
                                    <span>LKR {{Cart::instance('cart')->total()}}</span>
                                </div>
                            </div>
                            
                            <div class="d-grid gap-2">
                                <a href="{{route('cart.checkout')}}" class="btn btn-primary btn-lg">
                                    Proceed to Checkout
                                </a>
                            </div>
                            
                            <div class="payment-methods mt-4 p-3 bg-light rounded">
    <div class="d-flex flex-column align-items-center">
        <!-- Title -->
        <p class="text-muted mb-2 small fw-semibold">We accept these payment methods:</p>
        
        <!-- Payment Icons -->
        <div class="d-flex justify-content-center align-items-center gap-3">
            <!-- Visa -->
            <div class="p-2 bg-white rounded shadow-sm">
                <svg width="24px" height="24px" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg"><title>Visa icon</title><path d="M17.445 8.623c-.387-.146-.99-.301-1.74-.301-1.92 0-3.275.968-3.285 2.355-.012 1.02.964 1.594 1.701 1.936.757.35 1.01.57 1.008.885-.005.477-.605.693-1.162.693-.766 0-1.186-.107-1.831-.375l-.239-.111-.271 1.598c.466.195 1.306.362 2.175.375 2.041 0 3.375-.961 3.391-2.439.016-.813-.51-1.43-1.621-1.938-.674-.33-1.094-.551-1.094-.886 0-.296.359-.612 1.109-.612.645-.01 1.096.129 1.455.273l.18.081.271-1.544-.047.01zm4.983-.17h-1.5c-.467 0-.816.127-1.021.591l-2.885 6.534h2.041l.408-1.07 2.49.002c.061.25.24 1.068.24 1.068H24l-1.572-7.125zM9.66 8.393h1.943l-1.215 7.129H8.444L9.66 8.391v.002zm-4.939 3.929l.202.99 1.901-4.859h2.059l-3.061 7.115H3.768l-1.68-6.026c-.035-.103-.078-.173-.18-.237C1.34 9.008.705 8.766 0 8.598l.025-.15h3.131c.424.016.766.15.883.604l.682 3.273v-.003zm15.308.727l.775-1.994c-.01.02.16-.412.258-.68l.133.615.449 2.057h-1.615v.002z"/></svg>
                <span class="visually-hidden">Visa</span>
            </div>
            
            <!-- Mastercard -->
            <div class="p-2 bg-white rounded shadow-sm">
                <svg width="24px" height="24px" viewBox="0 -54.25 482.51 482.51" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg">
  <title>mastercard</title>
  <g>
    <path d="M220.13,421.67V396.82c0-9.53-5.8-15.74-15.32-15.74-5,0-10.35,1.66-14.08,7-2.9-4.56-7-7-13.25-7a14.07,14.07,0,0,0-12,5.8v-5h-7.87v39.76h7.87V398.89c0-7,4.14-10.35,9.94-10.35s9.11,3.73,9.11,10.35v22.78h7.87V398.89c0-7,4.14-10.35,9.94-10.35s9.11,3.73,9.11,10.35v22.78Zm129.22-39.35h-14.5v-12H327v12h-8.28v7H327V408c0,9.11,3.31,14.5,13.25,14.5A23.17,23.17,0,0,0,351,419.6l-2.49-7a13.63,13.63,0,0,1-7.46,2.07c-4.14,0-6.21-2.49-6.21-6.63V389h14.5v-6.63Zm73.72-1.24a12.39,12.39,0,0,0-10.77,5.8v-5h-7.87v39.76h7.87V399.31c0-6.63,3.31-10.77,8.7-10.77a24.24,24.24,0,0,1,5.38.83l2.49-7.46a28,28,0,0,0-5.8-.83Zm-111.41,4.14c-4.14-2.9-9.94-4.14-16.15-4.14-9.94,0-16.15,4.56-16.15,12.43,0,6.63,4.56,10.35,13.25,11.6l4.14.41c4.56.83,7.46,2.49,7.46,4.56,0,2.9-3.31,5-9.53,5a21.84,21.84,0,0,1-13.25-4.14l-4.14,6.21c5.8,4.14,12.84,5,17,5,11.6,0,17.81-5.38,17.81-12.84,0-7-5-10.35-13.67-11.6l-4.14-.41c-3.73-.41-7-1.66-7-4.14,0-2.9,3.31-5,7.87-5,5,0,9.94,2.07,12.43,3.31Zm120.11,16.57c0,12,7.87,20.71,20.71,20.71,5.8,0,9.94-1.24,14.08-4.56l-4.14-6.21a16.74,16.74,0,0,1-10.35,3.73c-7,0-12.43-5.38-12.43-13.25S445,389,452.07,389a16.74,16.74,0,0,1,10.35,3.73l4.14-6.21c-4.14-3.31-8.28-4.56-14.08-4.56-12.43-.83-20.71,7.87-20.71,19.88h0Zm-55.5-20.71c-11.6,0-19.47,8.28-19.47,20.71s8.28,20.71,20.29,20.71a25.33,25.33,0,0,0,16.15-5.38l-4.14-5.8a19.79,19.79,0,0,1-11.6,4.14c-5.38,0-11.18-3.31-12-10.35h29.41v-3.31c0-12.43-7.46-20.71-18.64-20.71h0Zm-.41,7.46c5.8,0,9.94,3.73,10.35,9.94H364.68c1.24-5.8,5-9.94,11.18-9.94ZM268.59,401.79V381.91h-7.87v5c-2.9-3.73-7-5.8-12.84-5.8-11.18,0-19.47,8.7-19.47,20.71s8.28,20.71,19.47,20.71c5.8,0,9.94-2.07,12.84-5.8v5h7.87V401.79Zm-31.89,0c0-7.46,4.56-13.25,12.43-13.25,7.46,0,12,5.8,12,13.25,0,7.87-5,13.25-12,13.25-7.87.41-12.43-5.8-12.43-13.25Zm306.08-20.71a12.39,12.39,0,0,0-10.77,5.8v-5h-7.87v39.76H532V399.31c0-6.63,3.31-10.77,8.7-10.77a24.24,24.24,0,0,1,5.38.83l2.49-7.46a28,28,0,0,0-5.8-.83Zm-30.65,20.71V381.91h-7.87v5c-2.9-3.73-7-5.8-12.84-5.8-11.18,0-19.47,8.7-19.47,20.71s8.28,20.71,19.47,20.71c5.8,0,9.94-2.07,12.84-5.8v5h7.87V401.79Zm-31.89,0c0-7.46,4.56-13.25,12.43-13.25,7.46,0,12,5.8,12,13.25,0,7.87-5,13.25-12,13.25-7.87.41-12.43-5.8-12.43-13.25Zm111.83,0V366.17h-7.87v20.71c-2.9-3.73-7-5.8-12.84-5.8-11.18,0-19.47,8.7-19.47,20.71s8.28,20.71,19.47,20.71c5.8,0,9.94-2.07,12.84-5.8v5h7.87V401.79Zm-31.89,0c0-7.46,4.56-13.25,12.43-13.25,7.46,0,12,5.8,12,13.25,0,7.87-5,13.25-12,13.25C564.73,415.46,560.17,409.25,560.17,401.79Z" transform="translate(-132.74 -48.5)"/>
    <g>
      <rect x="169.81" y="31.89" width="143.72" height="234.42" fill="#ff5f00"/>
      <path d="M317.05,197.6A149.5,149.5,0,0,1,373.79,80.39a149.1,149.1,0,1,0,0,234.42A149.5,149.5,0,0,1,317.05,197.6Z" transform="translate(-132.74 -48.5)" fill="#eb001b"/>
      <path d="M615.26,197.6a148.95,148.95,0,0,1-241,117.21,149.43,149.43,0,0,0,0-234.42,148.95,148.95,0,0,1,241,117.21Z" transform="translate(-132.74 -48.5)" fill="#f79e1b"/>
    </g>
  </g>
</svg>
                <span class="visually-hidden">Mastercard</span>
            </div>
            
            <!-- PayPal -->
            <div class="p-2 bg-white rounded shadow-sm">
               <svg fill="#000000" width="24px" height="24px" viewBox="0 0 24 24" id="paypal" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color"><path id="secondary" d="M4,17,6,3h5a4,4,0,0,1,4,4h0a4,4,0,0,1-4,4H5" style="fill: none; stroke: rgb(44, 169, 188); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path><path id="primary" d="M9,15h6a4,4,0,0,0,4-4h0a4,4,0,0,0-4-4H10L8,21" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></svg>
                <span class="visually-hidden">PayPal</span>
            </div>
            
        </div>
        
        <!-- Optional security badge -->
        <div class="mt-2 d-flex align-items-center">
            <i class="fas fa-lock text-success me-2"></i>
            <span class="small text-muted">Secure payments</span>
        </div>
    </div>
</div>
                        </div>
                    </div>
                </div>
            </div>
            @else
                <!-- Empty Cart State -->
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center py-5">
                        <div class="empty-cart-message">
                            <i class="fas fa-shopping-cart fa-4x text-muted mb-4"></i>
                            <h3 class="mb-3">Your cart is empty</h3>
                            <p class="text-muted mb-4">Looks like you haven't added any items to your cart yet.</p>
                            <a href="{{route('product')}}" class="btn btn-primary btn-lg">
                                Start Shopping
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
</main>
@endsection