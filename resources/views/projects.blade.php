@extends('layouts.guest')

@section('content')
<div class="container py-5">
    <h1 class="text-center text-primary mb-4 fw-bold">Our Projects</h1>
    <p class="text-center mb-5">Practical initiatives we’ve undertaken to supply fresh, quality cooking oil to our local community.</p>

    <div class="row g-4">
        <!-- Project 1: Small-Scale Bottling -->
        <div class="col-md-6">
            <div class="p-4 rounded shadow-sm project-card h-100 bg-light">
                <h5 class="fw-semibold mb-3">Small-Scale Bottling</h5>
                <p>Compact bottling lines ensuring fresh cooking oil reaches households efficiently and safely.</p>
            </div>
        </div>

        <!-- Project 2: Community Delivery -->
        <div class="col-md-6">
            <div class="p-4 rounded shadow-sm project-card h-100 bg-light">
                <h5 class="fw-semibold mb-3">Community Delivery</h5>
                <p>Direct delivery of cooking oils to homes and small shops within our local area for convenience.</p>
            </div>
        </div>

        <!-- Project 3: Pilot Refining -->
        <div class="col-md-6">
            <div class="p-4 rounded shadow-sm project-card h-100 bg-light">
                <h5 class="fw-semibold mb-3">Pilot Refining</h5>
                <p>Testing small-scale refining setups to maintain oil quality and nutritional value for local consumption.</p>
            </div>
        </div>

        <!-- Project 4: Local Workshops -->
        <div class="col-md-6">
            <div class="p-4 rounded shadow-sm project-card h-100 bg-light">
                <h5 class="fw-semibold mb-3">Local Workshops</h5>
                <p>Educating families on healthy cooking and proper use of our locally produced oils.</p>
            </div>
        </div>
    </div>
</div>

<style>
.project-card {
    transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;
}
.project-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    background-color: #e8f0fe; /* soft highlight on hover */
}
</style>
@endsection
