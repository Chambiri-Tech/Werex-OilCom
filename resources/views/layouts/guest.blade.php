<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Werex OilCom - Energy Solutions for Tomorrow</title>

  {{-- Bootstrap CSS --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  {{-- Font Awesome --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  {{-- Google Fonts --}}
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@500;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f8f9fa;
    }

    .navbar-brand img {
      height: 55px;
      width: auto;
      margin-right: 10px;
    }

    .navbar-brand div {
      line-height: 1.1;
    }

    /* Navbar link hover with blue text and orange underline */
    .navbar-nav .nav-link {
      position: relative;
      transition: color 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
      color: #0d47a1 !important;
    }

    .navbar-nav .nav-link::after {
      content: '';
      position: absolute;
      width: 0;
      height: 3px;
      left: 0;
      bottom: -5px;
      background-color: #ff6f00;
      transition: width 0.3s ease;
    }

    .navbar-nav .nav-link:hover::after {
      width: 100%;
    }

    .nav-link.active {
      font-weight: 700;
      color: #0d47a1 !important;
    }

    footer {
      font-size: 0.95rem;
    }

    footer h5 {
      font-weight: 700;
    }

    footer a {
      transition: color 0.3s ease;
    }

    footer a:hover {
      color: #ffc107 !important;
    }
  </style>
</head>

<body>
  {{-- Navbar --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
        <img src="{{ asset('images/logo.png') }}" alt="Werex Logo">
        <div>
          <span class="text-success fw-bold fs-5">Werex OilCom</span><br>
          <small class="text-warning fw-semibold">Mafuta ya Kupikia Majumbani</small>
        </div>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
          <li class="nav-item"><a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
          <li class="nav-item"><a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
          <li class="nav-item"><a href="{{ route('projects') }}" class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a></li>
          <li class="nav-item"><a href="{{ route('news.index') }}" class="nav-link {{ request()->routeIs('news.index') ? 'active' : '' }}">News</a></li>
          <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>

        <div class="ms-3">
          <a href="{{ route('login') }}" class="btn btn-outline-success me-2">Login</a>
          <a href="{{ route('register') }}" class="btn btn-success">Register</a>
        </div>
      </div>
    </div>
  </nav>

  {{-- Main Content --}}
  <main class="py-4">
    @yield('content')
  </main>

  {{-- Footer --}}
  <footer class="bg-dark text-white mt-5 pt-5">
    <div class="container">
      <div class="row g-4 mb-4">
        <div class="col-md-3 text-center text-md-start">
          <img src="{{ asset('images/logo.png') }}" alt="Werex Logo" class="mb-3" style="height: 60px;">
          <h5 class="text-warning fw-bold">Werex OilCom</h5>
          <p>Leading the way in sustainable cooking oil production and energy solutions for homes and families.</p>
          <div class="d-flex justify-content-center justify-content-md-start gap-2 mt-3">
            <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="fab fa-twitter"></i></a>
            <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

        <div class="col-md-3">
          <h5 class="text-warning position-relative pb-2">Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="{{ route('home') }}" class="text-white text-decoration-none">Home</a></li>
            <li><a href="{{ route('about') }}" class="text-white text-decoration-none">About Us</a></li>
            <li><a href="{{ route('services') }}" class="text-white text-decoration-none">Services</a></li>
            <li><a href="{{ route('projects') }}" class="text-white text-decoration-none">Projects</a></li>
          </ul>
        </div>

        <div class="col-md-3">
          <h5 class="text-warning position-relative pb-2">Our Products</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none">Sunflower Oil</a></li>
            <li><a href="#" class="text-white text-decoration-none">Palm Gold</a></li>
            <li><a href="#" class="text-white text-decoration-none">Coconut Bliss</a></li>
          </ul>
        </div>

        <div class="col-md-3">
          <h5 class="text-warning position-relative pb-2">Contact Us</h5>
          <ul class="list-unstyled">
            <li><a href="https://maps.google.com/?q=Dar+es+Salaam,Tanzania" class="text-white text-decoration-none"><i class="fas fa-map-marker-alt me-2"></i>Dar es Salaam, Tanzania</a></li>
            <li><a href="mailto:info@werexoilcom.ac.tz" class="text-white text-decoration-none"><i class="fas fa-envelope me-2"></i>info@werexoilcom.co.tz</a></li>
            <li><a href="tel:+255756123456" class="text-white text-decoration-none"><i class="fas fa-phone me-2"></i>+255 756 123 456</a></li>
            <li><a href="https://wa.me/255756123456" class="text-white text-decoration-none"><i class="fab fa-whatsapp me-2"></i>+255 615 063 121</a></li>
          </ul>
          </ul>
        </div>
      </div>

      <div class="text-center text-secondary">
        &copy; {{ date('Y') }} <strong>Werex OilCom</strong>. All rights reserved. |
        <a href="#" class="text-white text-decoration-none">Developed by Chambiri-Tech</a> |
        <a href="#" class="text-white text-decoration-none">Terms of Service</a>
      </div>
    </div>
  </footer>

  {{-- Bootstrap JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
