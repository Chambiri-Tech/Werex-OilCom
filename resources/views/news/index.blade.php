@extends('layouts.guest')

@section('content')
<div class="container py-5">
    <h1 class="text-center text-primary mb-4 fw-bold">Latest News</h1>
    <p class="text-center mb-5 text-muted">
        Stay informed about our latest updates, offers, and improvements — all focused on serving your home with better cooking oil every day.
    </p>

    <div class="row g-4 justify-content-center">

        <!-- News 1 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm news-card h-100">
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title fw-semibold text-primary mb-2">New 1-Litre and 2-Litre Bottles Now Available</h5>
                    <p class="card-text text-muted small mb-4">
                        We've introduced new bottle sizes to make Werex cooking oil more convenient for small families and daily kitchen use.
                    </p>
                    <a href="/news/1" class="btn btn-outline-primary mt-auto rounded-pill">Read More</a>
                </div>
            </div>
        </div>

        <!-- News 2 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm news-card h-100">
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title fw-semibold text-success mb-2">Weekend Discount on Bulk Orders</h5>
                    <p class="card-text text-muted small mb-4">
                        Enjoy up to 10% off when you buy in bulk this weekend. Ideal for small businesses, restaurants, and group buyers.
                    </p>
                    <a href="/news/2" class="btn btn-outline-success mt-auto rounded-pill">Read More</a>
                </div>
            </div>
        </div>

        <!-- News 3 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm news-card h-100">
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title fw-semibold text-warning mb-2">Improved Oil Purification Process</h5>
                    <p class="card-text text-muted small mb-4">
                        Upgraded filtering and refining process ensures every drop of Werex oil is cleaner, lighter, and healthier.
                    </p>
                    <a href="/news/3" class="btn btn-outline-warning mt-auto rounded-pill">Read More</a>
                </div>
            </div>
        </div>

        <!-- News 4 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm news-card h-100">
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title fw-semibold text-info mb-2">Free Home Delivery in Selected Areas</h5>
                    <p class="card-text text-muted small mb-4">
                        Customers within our local delivery zones can now get free delivery for orders above 5 litres.
                    </p>
                    <a href="/news/4" class="btn btn-outline-info mt-auto rounded-pill">Read More</a>
                </div>
            </div>
        </div>

        <!-- News 5 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm news-card h-100">
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title fw-semibold text-danger mb-2">Customer Awareness Campaign</h5>
                    <p class="card-text text-muted small mb-4">
                        We're helping customers identify pure cooking oil through our "Know Your Oil" campaign.
                    </p>
                    <a href="/news/5" class="btn btn-outline-danger mt-auto rounded-pill">Read More</a>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
.news-card {
    border-radius: 1rem;
    transition: transform 0.25s ease, box-shadow 0.25s ease, background-color 0.25s ease;
}
.news-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    background-color: #f1f6ff; /* subtle highlight */
}
.card-body {
    padding: 1.8rem;
}
.btn {
    transition: all 0.25s ease;
}
</style>
@endsection
