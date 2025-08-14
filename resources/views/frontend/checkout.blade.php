@extends('frontend.layouts.master')

@section('content')
<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="shop-checkout container">
        <!-- Main Heading -->
        <div class="text-center mb-5">
            <h1 class="page-title mb-2">Checkout</h1>
            <p class="text-muted">Complete your purchase securely</p>
        </div>
        
        <!-- Progress Steps -->
        <div class="container mb-5">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Step 1 - Cart Review -->
                <div class="d-flex flex-column align-items-center position-relative">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success text-white d-flex justify-content-center align-items-center" 
                             style="width: 40px; height: 40px;">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="ms-2 d-none d-md-block">
                            <div class="fw-bold">Cart Review</div>
                            <small class="text-muted">Completed</small>
                        </div>
                    </div>
                    <div class="position-absolute top-50 start-100 h-1px bg-success w-25 d-none d-md-block"></div>
                </div>

                <!-- Step 2 - Shipping & Payment -->
                <div class="d-flex flex-column align-items-center position-relative">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success text-white d-flex justify-content-center align-items-center" 
                             style="width: 40px; height: 40px;">
                            2
                        </div>
                        <div class="ms-2 d-none d-md-block">
                            <div class="fw-bold">Shipping & Payment</div>
                            <small class="text-muted">Current step</small>
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
        
        <!-- Checkout Content -->
        <div class="row">
            <!-- Left Column - Shipping and Payment Forms -->
            <div class="col-lg-8 pe-lg-4">
                <form action="#" method="POST" id="checkout-form">
                    @csrf
                    
                    <!-- Shipping Information -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h3 class="mb-0">Shipping Information</h3>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <!-- First Name -->
                                <div class="col-md-6">
                                    <label for="first_name" class="form-label">First Name*</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                                </div>
                                
                                <!-- Last Name -->
                                <div class="col-md-6">
                                    <label for="last_name" class="form-label">Last Name*</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                                </div>
                                
                                <!-- Email -->
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email*</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                
                                <!-- Phone -->
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number*</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                                
                                <!-- Address -->
                                <div class="col-12">
                                    <label for="address" class="form-label">Address*</label>
                                    <input type="text" class="form-control" id="address" name="address" required>
                                </div>
                                
                                <!-- City -->
                                <div class="col-md-4">
                                    <label for="city" class="form-label">City*</label>
                                    <input type="text" class="form-control" id="city" name="city" required>
                                </div>
                                
                                <!-- State/Region -->
                                <div class="col-md-4">
                                    <label for="state" class="form-label">State/Region*</label>
                                    <input type="text" class="form-control" id="state" name="state" required>
                                </div>
                                
                                <!-- Postal Code -->
                                <div class="col-md-4">
                                    <label for="postal_code" class="form-label">Postal Code*</label>
                                    <input type="text" class="form-control" id="postal_code" name="postal_code" required>
                                </div>
                                
                                <!-- Country -->
                                <div class="col-md-12">
                                    <label for="country" class="form-label">Country*</label>
                                    <select class="form-select" id="country" name="country" required>
                                        <option value="">Select Country</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="United States">United States</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                    </select>
                                </div>
                                
                                <!-- Shipping Method -->
                                <div class="col-12 mt-3">
                                    <h5 class="mb-3">Shipping Method</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="shipping_method" 
                                               id="standard-shipping" value="standard" checked>
                                        <label class="form-check-label" for="standard-shipping">
                                            Standard Shipping (FREE)
                                            <small class="text-muted d-block">3-5 business days</small>
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="radio" name="shipping_method" 
                                               id="express-shipping" value="express">
                                        <label class="form-check-label" for="express-shipping">
                                            Express Shipping (LKR 500)
                                            <small class="text-muted d-block">1-2 business days</small>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Payment Information -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h3 class="mb-0">Payment Method</h3>
                        </div>
                        <div class="card-body">
                            <div class="payment-methods">
                                <!-- Credit Card -->
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="payment_method" 
                                           id="credit-card" value="credit_card" checked>
                                    <label class="form-check-label fw-bold" for="credit-card">
                                        Credit/Debit Card
                                    </label>
                                </div>
                                
                                <!-- Credit Card Form -->
                                <div class="credit-card-form mb-4 ps-4">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="card-number" class="form-label">Card Number*</label>
                                            <input type="text" class="form-control" id="card-number" 
                                                   name="card_number" placeholder="1234 5678 9012 3456">
                                            <div class="card-icons mt-2">
                                                <svg width="24px" height="24px" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg"><title>Visa icon</title><path d="M17.445 8.623c-.387-.146-.99-.301-1.74-.301-1.92 0-3.275.968-3.285 2.355-.012 1.02.964 1.594 1.701 1.936.757.35 1.01.57 1.008.885-.005.477-.605.693-1.162.693-.766 0-1.186-.107-1.831-.375l-.239-.111-.271 1.598c.466.195 1.306.362 2.175.375 2.041 0 3.375-.961 3.391-2.439.016-.813-.51-1.43-1.621-1.938-.674-.33-1.094-.551-1.094-.886 0-.296.359-.612 1.109-.612.645-.01 1.096.129 1.455.273l.18.081.271-1.544-.047.01zm4.983-.17h-1.5c-.467 0-.816.127-1.021.591l-2.885 6.534h2.041l.408-1.07 2.49.002c.061.25.24 1.068.24 1.068H24l-1.572-7.125zM9.66 8.393h1.943l-1.215 7.129H8.444L9.66 8.391v.002zm-4.939 3.929l.202.99 1.901-4.859h2.059l-3.061 7.115H3.768l-1.68-6.026c-.035-.103-.078-.173-.18-.237C1.34 9.008.705 8.766 0 8.598l.025-.15h3.131c.424.016.766.15.883.604l.682 3.273v-.003zm15.308.727l.775-1.994c-.01.02.16-.412.258-.68l.133.615.449 2.057h-1.615v.002z"/></svg>
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
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="card-name" class="form-label">Name on Card*</label>
                                            <input type="text" class="form-control" id="card-name" 
                                                   name="card_name" placeholder="John Doe">
                                        </div>
                                        
                                        <div class="col-md-3">
                                            <label for="card-expiry" class="form-label">Expiry Date*</label>
                                            <input type="text" class="form-control" id="card-expiry" 
                                                   name="card_expiry" placeholder="MM/YY">
                                        </div>
                                        
                                        <div class="col-md-3">
                                            <label for="card-cvc" class="form-label">CVC*</label>
                                            <input type="text" class="form-control" id="card-cvc" 
                                                   name="card_cvc" placeholder="123">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- PayPal -->
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="payment_method" 
                                           id="paypal" value="paypal">
                                    <label class="form-check-label fw-bold" for="paypal">
                                        PayPal
                                    </label>
                                </div>
                                
                                <!-- Cash on Delivery -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method" 
                                           id="cod" value="cod">
                                    <label class="form-check-label fw-bold" for="cod">
                                        Cash on Delivery (COD)
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Order Notes -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h3 class="mb-0">Order Notes (Optional)</h3>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" id="order-notes" name="order_notes" 
                                      rows="3" placeholder="Special instructions for your order..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            
            <!-- Right Column - Order Summary -->
            <div class="col-lg-4">
                <div class="order-summary card">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Order Summary</h3>
                        
                        <!-- Cart Items Preview -->
                        <div class="cart-items-preview mb-3">
                            @foreach($items as $item)
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0">
                                    <img src="{{ $item->options->image }}" alt="{{ $item->name }}" 
                                         class="img-fluid rounded" style="width: 60px;">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">{{ $item->name }}</h6>
                                    <small class="text-muted">{{ $item->qty }} × LKR {{ $item->price }}</small>
                                </div>
                                <div class="flex-shrink-0">
                                    <span class="fw-bold">LKR {{ $item->subtotal() }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                        <!-- Order Summary Details -->
                        <div class="order-summary-details mb-4">
                            <div class="d-flex justify-content-between mb-2">
                                <span>Subtotal ({{ $items->count() }} items)</span>
                                <span>LKR {{ Cart::instance('cart')->subtotal() }}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Shipping</span>
                                <span class="text-success">FREE</span>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <span>Tax (VAT)</span>
                                <span>LKR {{ Cart::instance('cart')->tax() }}</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between fw-bold fs-5">
                                <span>Total</span>
                                <span>LKR {{ Cart::instance('cart')->total() }}</span>
                            </div>
                        </div>
                        
                        <!-- Place Order Button -->
                        <div class="d-grid gap-2">
                            <button type="submit" form="checkout-form" class="btn btn-primary btn-lg">
                                Place Order
                            </button>
                        </div>
                        
                        <!-- Security Info -->
                        <div class="mt-4 p-3 bg-light rounded">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-lock text-success me-2"></i>
                                <span class="small">Secure SSL Encryption</span>
                            </div>
                            <p class="small text-muted mb-0">
                                Your personal data will be used to process your order securely.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection