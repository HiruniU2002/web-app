@extends('frontend.layouts.master')


@section('content')
<!-- About Section -->
 
<div class="container my-5">
  <div class="row align-items-center">
    <div class="col-md-5">
      <img src="{{asset('frontend/images/bg4.jpg')}}" class="img-fluid rounded shadow" alt="About Us">
    </div>
    <div class="col-md-7">
      <h2 class="fw-bold">About Cakes by Hiru</h2>
      <p class="mt-3">Founded in 2020, <strong>Cakes by Hiru</strong> is a home-grown cake shop that brings you joy, flavor, and art all in one bite. With a passion for baking and a love for creativity, we deliver custom cakes for every special occasion.</p>
      <p>From birthdays and weddings to casual celebrations, our cakes are made with fresh ingredients and designed to match your unique taste and theme.</p>
      <p>Our team is dedicated to quality, consistency, and customer satisfaction — because your sweet moments deserve the best!</p>
    </div>
  </div>

  <!-- Vision & Mission Section -->
  <div class="row text-center mt-5">
    <div class="col-md-6 mb-4">
      <div class="p-4 bg-white rounded shadow">
        <h3 class="fw-bold">Our Vision</h3>
        <p class="mt-3">To become the most beloved and trusted cake brand in the region, known for innovation, quality, and personal touch in every bite.</p>
      </div>
    </div>
    <div class="col-md-6 mb-4">
      <div class="p-4 bg-white rounded shadow">
        <h3 class=" fw-bold">Our Mission</h3>
        <p class="mt-3">To craft cakes that not only look stunning but also create unforgettable memories — by using premium ingredients and delivering heartfelt service.</p>
      </div>
    </div>
  </div>

  <!-- Features Section -->
  <div class="row mt-5">
    <div class="col-md-4 text-center">
      <i class="ri-cake-2-line display-4 mb-2"></i>
      <h5 class="fw-bold">Fresh Ingredients</h5>
      <p>We bake using only premium quality ingredients — no shortcuts.</p>
    </div>
    <div class="col-md-4 text-center">
      <i class="ri-emotion-happy-line display-4 mb-2"></i>
      <h5 class="fw-bold">Customer Happiness</h5>
      <p>We listen, design, and deliver cakes that make people smile.</p>
    </div>
    <div class="col-md-4 text-center">
      <i class="ri-star-line display-4  mb-2"></i>
      <h5 class="fw-bold">Custom Designs</h5>
      <p>From floral to themed, we create cakes as unique as you are.</p>
    </div>
  </div>
</div>
@endsection

