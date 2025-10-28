@extends('layouts.guest')

@section('content')
<div class="container py-5">
    <h1 class="text-center text-primary mb-5 fw-bold">Our Services</h1>

    <div class="row g-4 justify-content-center">
        <!-- Service 1: Oil Production -->
        <div class="col-md-4">
            <div class="p-4 rounded shadow-sm service-card h-100 bg-light">
                <h4 class="mb-3 fw-semibold">Oil Production</h4>
                <p>We produce high-quality cooking oils using carefully selected raw materials and modern small-scale processing techniques.</p>
            </div>
        </div>

        <!-- Service 2: Packaging & Bottling -->
        <div class="col-md-4">
            <div class="p-4 rounded shadow-sm service-card h-100 bg-light">
                <h4 class="mb-3 fw-semibold">Packaging & Bottling</h4>
                <p>Our oils are packaged hygienically and efficiently to ensure they reach your kitchen safely and fresh.</p>
            </div>
        </div>

        <!-- Service 3: Home Delivery -->
        <div class="col-md-4">
            <div class="p-4 rounded shadow-sm service-card h-100 bg-light">
                <h4 class="mb-3 fw-semibold">Home Delivery</h4>
                <p>We deliver our cooking oils directly to households, making it convenient for customers to enjoy our products.</p>
            </div>
        </div>

        <!-- Service 4: Custom Orders -->
        <div class="col-md-4">
            <div class="p-4 rounded shadow-sm service-card h-100 bg-light">
                <h4 class="mb-3 fw-semibold">Custom Orders</h4>
                <p>We cater to small businesses and households with tailored orders and flexible packaging options.</p>
            </div>
        </div>

        <!-- Service 5: Quality Assurance -->
        <div class="col-md-4">
            <div class="p-4 rounded shadow-sm service-card h-100 bg-light">
                <h4 class="mb-3 fw-semibold">Quality Assurance</h4>
                <p>Every batch of oil undergoes strict quality checks to ensure purity, taste, and nutritional value.</p>
            </div>
        </div>

        <!-- Service 6: Sustainable Sourcing -->
        <div class="col-md-4">
            <div class="p-4 rounded shadow-sm service-card h-100 bg-light">
                <h4 class="mb-3 fw-semibold">Sustainable Sourcing</h4>
                <p>We source raw materials locally using eco-friendly practices, supporting farmers and minimizing environmental impact.</p>
            </div>
        </div>
    </div>
</div>

<style>
.service-card {
    transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;
}
.service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    background-color: #e8f0fe; /* soft highlight on hover */
}
</style>
@endsection
