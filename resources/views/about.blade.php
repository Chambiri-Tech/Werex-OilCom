@extends('layouts.guest')

@section('content')
<div class="container py-5">
  <h1 class="text-center text-primary mb-5">About Us</h1>

  <div class="row align-items-center">
    <!-- Image side -->
    <div class="col-md-6 mb-4 mb-md-0">
        @php
            $imagePath = 'images/about-us.jpg';
        @endphp
      <img src="{{ asset('storage/images/about-us.jpg') }}" alt="About Us">

    </div>

    <!-- Text side -->
    <div class="col-md-6">
      <h3 class="text-secondary mb-3">Our Mission</h3>
      <p>
        At <strong>Werex OilCom</strong>, we are dedicated to producing high-quality, pure cooking oils for homes and small businesses. Our mission is to provide nutritious, affordable, and safe cooking solutions that make everyday meals healthier and tastier.
      </p>

      <h3 class="text-secondary mt-4 mb-3">Our Quality</h3>
      <p>
        Using carefully selected raw materials and modern small-scale processing techniques, we ensure that every package of oil maintains its natural flavor, aroma, and nutritional value. Perfect for frying, baking, or everyday cooking, our oils are designed to meet the diverse needs of households while promoting healthy living.
      </p>

      <h3 class="text-secondary mt-4 mb-3">Community & Sustainability</h3>
      <p>
        We pride ourselves on sustainability and community impact. By sourcing locally and maintaining eco-friendly production practices, we support the local economy and contribute to a cleaner environment.
      </p>

      <p class="fw-bold mt-4 text-primary">
        Pure, Fresh, and Healthy Cooking Oils – Straight from Our Local Factory to Your Kitchen!
      </p>
    </div>
  </div>
</div>
@endsection
