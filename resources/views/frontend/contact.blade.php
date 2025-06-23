@extends('frontend.layouts.master')

    @section('content')
  <!-- Contact Section -->
   <section class="py-5" id="contact">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Contact Us</h2>
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title mb-4"><i class="bi bi-geo-alt-fill text-primary me-2"></i>Visit Us</h4>
                            <p class="card-text">123 Sweet Street, Cakeville</p>
                            
                            <h4 class="card-title mt-4 mb-3"><i class="bi bi-telephone-fill text-primary me-2"></i>Call Us</h4>
                            <p class="card-text">+1 (555) 123-4567</p>
                            
                            <h4 class="card-title mt-4 mb-3"><i class="bi bi-envelope-fill text-primary me-2"></i>Email Us</h4>
                            <p class="card-text">orders@cakesbyhiru.com</p>
                            
                            <h4 class="card-title mt-4 mb-3"><i class="bi bi-clock-fill text-primary me-2"></i>Hours</h4>
                            <p class="card-text mb-0">Monday-Friday: 9am - 6pm</p>
                            <p class="card-text mb-0">Saturday: 10am - 4pm</p>
                            <p class="card-text">Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Send us a message</h4>
                           <form>
                                <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                  <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
                                </div>
                                <div class="mb-3">
                                 <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                                </div>
                                <div class="mb-3">
                                  <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" placeholder="e.g. +94 77 123 4567">
                                </div>
                                <div class="mb-3">
                                   <label for="message" class="form-label">Your Message</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Write your message here..." required></textarea>
                                </div>
                                <button type="submit" class="btn btn-secondary w-100">Send Message</button>
                                </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
