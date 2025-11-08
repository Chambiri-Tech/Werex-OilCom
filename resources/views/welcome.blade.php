<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Werex OilCom - The People's Choice</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@500;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --primary: #00695C;
      --primary-dark: #004D40;
      --primary-light: #26A69A;
      --accent: #FF8F00;
      --accent-dark: #E65100;
      --light: #F5F5F5;
      --dark: #263238;
      --text: #37474F;
    }

    body {
      font-family: 'Roboto', sans-serif;
      background-color: var(--light);
      overflow-x: hidden;
      color: var(--text);
    }

    /* Navbar */
    .navbar-brand img { height: 55px; width: auto; margin-right: 10px; }
    .navbar-brand div span { font-weight: 700; color: var(--primary); }
    .navbar-brand div small { color: var(--accent); font-weight: 600; }
    .navbar-nav .nav-link {
      position: relative;
      transition: color 0.3s ease;
      color: var(--dark) !important;
      font-weight: 500;
    }
    .navbar-nav .nav-link:hover { color: var(--primary) !important; }
    .navbar-nav .nav-link::after {
      content: ''; position: absolute; width: 0; height: 3px; left: 0; bottom: -5px;
      background-color: var(--accent); transition: width 0.3s ease;
    }
    .navbar-nav .nav-link:hover::after { width: 100%; }

    /* Hero */
    .hero {
      background: linear-gradient(rgba(0, 105, 92, 0.85), rgba(0, 77, 64, 0.9)),
      url('https://images.unsplash.com/photo-1594736797933-d0ea3ff8db41?auto=format&fit=crop&w=1950&q=80');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 180px 0 100px;
      text-align: center;
    }
    .hero h1 { font-size: 3.5rem; margin-bottom: 1.5rem; line-height: 1.1; }
    .hero p { font-size: 1.2rem; margin-bottom: 2.5rem; opacity: 0.9; }

    /* Section Titles */
    .section-title h2 {
      font-size: 2.5rem; color: var(--primary);
      position: relative; display: inline-block; margin-bottom: 1rem;
    }
    .section-title h2::after {
      content: ''; position: absolute; bottom: -10px; left: 50%;
      transform: translateX(-50%); width: 80px; height: 4px; background-color: var(--accent);
    }

    /* Products Section */
    .products { padding: 100px 0; background-color: #fff; }
    .product-card {
      background: white; border-radius: 8px; overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s;
      border: 1px solid rgba(0, 105, 92, 0.1);
    }
    .product-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 25px rgba(0, 105, 92, 0.15);
    }
    .product-card img { width: 100%; height: 240px; object-fit: cover; }
    .product-card h5 { color: var(--primary); margin-top: 15px; }
    .product-card p { color: #6c757d; }

    /* Why Choose Us */
    .why-us { background-color: var(--light); padding: 100px 0; }
    .why-us .icon-box {
      text-align: center; padding: 30px; border-radius: 12px;
      background: white; box-shadow: 0 5px 20px rgba(0,0,0,0.05);
      transition: transform 0.3s;
      border: 1px solid rgba(0, 105, 92, 0.1);
    }
    .why-us .icon-box:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 25px rgba(0, 105, 92, 0.15);
    }
    .why-us i { font-size: 2rem; color: var(--accent); margin-bottom: 15px; }

    /* Testimonials */
    .testimonials { background-color: #fff; padding: 90px 0; }
    .testimonial-item {
      background: #f8f9fa; border-radius: 12px; padding: 40px; text-align: center;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      border: 1px solid rgba(0, 105, 92, 0.1);
    }
    .testimonial-item img {
      width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin-bottom: 15px;
      border: 3px solid var(--accent);
    }
    .testimonial-item h5 { color: var(--primary); }

    /* Sustainability */
    .sustain {
      padding: 100px 0;
      background: linear-gradient(135deg, var(--primary), var(--primary-dark));
      color: white;
    }
    .sustain i { font-size: 3rem; color: var(--accent); }

    /* Newsletter */
    .newsletter {
      padding: 90px 0;
      background: linear-gradient(135deg, var(--primary), var(--primary-dark));
      color: white; text-align: center;
    }
    .newsletter input {
      max-width: 400px; padding: 12px; border: none; border-radius: 50px;
      margin-right: 10px;
    }

    /* Buttons */
    .btn-warning {
      background-color: var(--accent);
      border-color: var(--accent);
      color: white;
      font-weight: 600;
    }
    .btn-warning:hover {
      background-color: var(--accent-dark);
      border-color: var(--accent-dark);
      color: white;
    }
    .btn-success {
      background-color: var(--primary);
      border-color: var(--primary);
      font-weight: 600;
    }
    .btn-success:hover {
      background-color: var(--primary-dark);
      border-color: var(--primary-dark);
    }
    .btn-outline-success {
      color: var(--primary);
      border-color: var(--primary);
      font-weight: 600;
    }
    .btn-outline-success:hover {
      background-color: var(--primary);
      border-color: var(--primary);
      color: white;
    }
    .btn-outline-light:hover {
      background-color: rgba(255,255,255,0.1);
      color: white;
    }

    /* Back to top */
    #backToTop {
      position: fixed; bottom: 30px; right: 30px;
      background: var(--primary); color: white; border: none;
      border-radius: 50%; width: 50px; height: 50px;
      display: none; align-items: center; justify-content: center;
      z-index: 1000;
      transition: all 0.3s ease;
    }
    #backToTop:hover {
      background: var(--primary-dark);
      transform: scale(1.1);
    }

    footer {
      font-size: 0.95rem;
      background-color: var(--dark);
    }
    footer h5 {
      font-weight: 700;
      color: var(--accent);
    }
    footer a:hover {
      color: var(--accent) !important;
    }

    /* Carousel Fade Animation */
    .carousel-fade .carousel-item {
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }
    .carousel-fade .carousel-item.active {
      opacity: 1;
    }

    /* Carousel Controls */
    .carousel-control-prev, .carousel-control-next {
      width: 5%;
    }
    .carousel-control-prev-icon, .carousel-control-next-icon {
      background-color: var(--primary);
      border-radius: 50%;
      padding: 15px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
        <img src="{{ asset('images/logo.png') }}" alt="Werex Logo">
        <div>
          <span>Werex OilCom</span><br>
          <small>Mafuta ya Kupikia Majumbani</small>
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
          <li class="nav-item"><a href="{{ route('services') }}" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="{{ route('projects') }}" class="nav-link">Projects</a></li>
          <li class="nav-item"><a href="{{ route('news.index') }}" class="nav-link">News</a></li>
          <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
        </ul>
        <div class="ms-3">
          <a href="{{ route('login') }}" class="btn btn-outline-success me-2">Login</a>
          <a href="{{ route('register') }}" class="btn btn-success">Register</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main -->
  <main class="pt-5 mt-5">

    <!-- Hero -->
    <section class="hero">
      <div class="container">
        <h1>Serving the Community with Quality Cooking Oil</h1>
        <p>At Werex OilCom, we bring purity, health, and sustainability to every home — from the local farms to your table, in a Glance</p>
        <a href="{{ route('register') }}" class="btn btn-warning btn-lg me-2">Shop Now</a>
        <a href="{{ route('about') }}" class="btn btn-outline-light btn-lg">Learn More</a>
      </div>
    </section>

    <!-- Products Section -->
    <section class="products text-center">
      <div class="container">
        <div class="section-title"><h2>Our Best-Selling Products</h2></div>
        <div class="row g-4 mt-4">
          <div class="col-md-4">
            <div class="product-card">
              <img src="https://images.unsplash.com/photo-1590080875832-4c19d1b4d15f?auto=format&fit=crop&w=800&q=80" alt="Sunflower Oil">
              <div class="p-3">
                <h5>Werex Sunflower Oil</h5>
                <p>Pure, refined, and rich in Vitamin E — perfect for healthy daily cooking.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-card">
              <img src="https://images.unsplash.com/photo-1585238342029-7b2b17bdb8d9?auto=format&fit=crop&w=800&q=80" alt="Palm Oil">
              <div class="p-3">
                <h5>Werex Palm Gold</h5>
                <p>High-performance palm oil for frying and commercial kitchens — trusted by chefs across East Africa.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-card">
              <img src="https://images.unsplash.com/photo-1622202236652-3e3e870b09b9?auto=format&fit=crop&w=800&q=80" alt="Coconut Oil">
              <div class="p-3">
                <h5>Werex Coconut Bliss</h5>
                <p>100% cold-pressed coconut oil for cooking, skincare, and natural living.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-us">
      <div class="container text-center">
        <div class="section-title"><h2>Why Choose Werex OilCom?</h2></div>
        <div class="row mt-4 g-4">
          <div class="col-md-3 col-6">
            <div class="icon-box">
              <i class="fas fa-seedling"></i>
              <h5>Locally Sourced</h5>
              <p>We support Tanzanian farmers by using fresh, local sunflower and palm produce.</p>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="icon-box">
              <i class="fas fa-flask"></i>
              <h5>Quality Tested</h5>
              <p>Our oils pass strict quality and safety tests before reaching your home.</p>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="icon-box">
              <i class="fas fa-heart"></i>
              <h5>Healthy Choice</h5>
              <p>Low in cholesterol and rich in nutrients — designed for a healthy lifestyle.</p>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="icon-box">
              <i class="fas fa-hand-holding-water"></i>
              <h5>Eco-Friendly</h5>
              <p>We use sustainable production processes that protect our environment.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center">
      <div class="container">
        <div class="section-title"><h2>What Our Customers Say</h2></div>
        <div id="testimonialCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
          <div class="carousel-inner">

            <div class="carousel-item active">
              <div class="testimonial-item mx-auto" style="max-width:600px;">
                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=200&q=80" alt="Client">
                <p>"Werex cooking oil has transformed my restaurant business. The quality is consistent and my customers love the taste!"</p>
                <h5>— Amina Juma, Restaurant Owner, Dar es Salaam</h5>
              </div>
            </div>

            <div class="carousel-item">
              <div class="testimonial-item mx-auto" style="max-width:600px;">
                <img src="https://images.unsplash.com/photo-1589156191108-c762ff4b96ab?auto=format&fit=crop&w=200&q=80" alt="Client">
                <p>"As a mother of four, I trust Werex Sunflower Oil for my family's health. It's pure and affordable for everyday cooking."</p>
                <h5>— Grace Mwamba, Mother, Mwanza</h5>
              </div>
            </div>

            <div class="carousel-item">
              <div class="testimonial-item mx-auto" style="max-width:600px;">
                <img src="https://images.unsplash.com/photo-1567532939604-b6b5b0db2604?auto=format&fit=crop&w=200&q=80" alt="Client">
                <p>"Werex Palm Gold gives my street food business the perfect frying results. It's economical and lasts longer than other brands."</p>
                <h5>— Jamal Hassan, Street Vendor, Arusha</h5>
              </div>
            </div>

            <div class="carousel-item">
              <div class="testimonial-item mx-auto" style="max-width:600px;">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=200&q=80" alt="Client">
                <p>"The Coconut Bliss oil is amazing for both cooking and skincare. My whole family uses it - truly multipurpose!"</p>
                <h5>— Sarah Kimambo, Teacher, Dodoma</h5>
              </div>
            </div>

            <div class="carousel-item">
              <div class="testimonial-item mx-auto" style="max-width:600px;">
                <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=200&q=80" alt="Client">
                <p>"Werex oils don't smoke or burn easily. This has saved me money and made cooking much more enjoyable in my household."</p>
                <h5>— Neema Charles, Homemaker, Mbeya</h5>
              </div>
            </div>

            <div class="carousel-item">
              <div class="testimonial-item mx-auto" style="max-width:600px;">
                <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=200&q=80" alt="Client">
                <p>"Our hotel switched to Werex oils and our chefs are impressed with the quality. The packaging is also very professional."</p>
                <h5>— David Mwita, Hotel Manager, Zanzibar</h5>
              </div>
            </div>

            <div class="carousel-item">
              <div class="testimonial-item mx-auto" style="max-width:600px;">
                <img src="https://images.unsplash.com/photo-1551834593-001fe3b10cdd?auto=format&fit=crop&w=200&q=80" alt="Client">
                <p>"I appreciate that Werex supports local farmers. Buying their products means supporting our community and economy."</p>
                <h5>— John Petro, Farmer Cooperative Leader, Morogoro</h5>
              </div>
            </div>

            <div class="carousel-item">
              <div class="testimonial-item mx-auto" style="max-width:600px;">
                <img src="https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?auto=format&fit=crop&w=200&q=80" alt="Client">
                <p>"The oil doesn't have that strong smell some brands have. My food tastes cleaner and more natural with Werex."</p>
                <h5>— Maria Kondo, Caterer, Tanga</h5>
              </div>
            </div>

            <div class="carousel-item">
              <div class="testimonial-item mx-auto" style="max-width:600px;">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=200&q=80" alt="Client">
                <p>"Werex oils are always available in our local shops and the prices are stable. This reliability helps me budget better."</p>
                <h5>— Robert Shayo, Small Business Owner, Kigoma</h5>
              </div>
            </div>

            <div class="carousel-item">
              <div class="testimonial-item mx-auto" style="max-width:600px;">
                <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?auto=format&fit=crop&w=200&q=80" alt="Client">
                <p>"My children have fewer digestive issues since we switched to Werex. It's gentle on their stomachs and very nutritious."</p>
                <h5>— Fatuma Ali, Nurse, Mtwara</h5>
              </div>
            </div>

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <!-- Sustainability -->
    <section class="sustain text-center">
      <div class="container">
        <div class="section-title text-white"><h2>Our Sustainability Promise</h2></div>
        <div class="row mt-4 g-4">
          <div class="col-md-4">
            <i class="fas fa-recycle"></i>
            <h5 class="mt-3">Zero Waste Production</h5>
            <p>All oil by-products are recycled or repurposed for eco-friendly use.</p>
          </div>
          <div class="col-md-4">
            <i class="fas fa-solar-panel"></i>
            <h5 class="mt-3">Solar Energy Usage</h5>
            <p>Our plants are powered by clean, renewable energy sources.</p>
          </div>
          <div class="col-md-4">
            <i class="fas fa-users"></i>
            <h5 class="mt-3">Community Empowerment</h5>
            <p>We create jobs and empower women through agricultural programs.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
      <div class="container">
        <h2>Stay Updated with Werex</h2>
        <p>Get product updates, promotions, and sustainability news directly in your inbox.</p>
        <form class="d-flex justify-content-center">
          <input type="email" placeholder="Enter your email" required>
          <button type="submit" class="btn btn-warning rounded-pill px-4">Subscribe</button>
        </form>
      </div>
    </section>

  </main>

  <!-- Back to top -->
  <button id="backToTop"><i class="fas fa-arrow-up"></i></button>

  <!-- Footer -->
  <footer class="text-white mt-5 pt-5">
    <div class="container">
      <div class="row g-4 mb-4">
        <div class="col-md-3 text-center text-md-start">
          <img src="{{ asset('images/logo.png') }}" alt="Werex Logo" class="mb-3" style="height: 60px;">
          <h5>Werex OilCom</h5>
          <p>Leading the way in sustainable cooking oil production and energy solutions for homes and families.</p>
          <div class="d-flex justify-content-center justify-content-md-start gap-2 mt-3">
            <a href="https://facebook.com/werexoilcom" class="text-white" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/werexoilcom" class="text-white" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://linkedin.com/company/werexoilcom" class="text-white" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://instagram.com/werexoilcom" class="text-white" target="_blank"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="col-md-3">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="{{ route('home') }}" class="text-white text-decoration-none">Home</a></li>
            <li><a href="{{ route('about') }}" class="text-white text-decoration-none">About Us</a></li>
            <li><a href="{{ route('services') }}" class="text-white text-decoration-none">Services</a></li>
            <li><a href="{{ route('projects') }}" class="text-white text-decoration-none">Projects</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Our Products</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none">Sunflower Oil</a></li>
            <li><a href="#" class="text-white text-decoration-none">Palm Gold</a></li>
            <li><a href="#" class="text-white text-decoration-none">Coconut Bliss</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Contact</h5>
          <ul class="list-unstyled">
            <li><a href="https://maps.google.com/?q=Dar+es+Salaam,Tanzania" class="text-white text-decoration-none"><i class="fas fa-map-marker-alt me-2"></i>Dar es Salaam, Tanzania</a></li>
            <li><a href="mailto:info@werexoilcom.ac.tz" class="text-white text-decoration-none"><i class="fas fa-envelope me-2"></i>info@werexoilcom.co.tz</a></li>
            <li><a href="tel:+255756123456" class="text-white text-decoration-none"><i class="fas fa-phone me-2"></i>+255 756 123 456</a></li>
            <li><a href="https://wa.me/255756123456" class="text-white text-decoration-none"><i class="fab fa-whatsapp me-2"></i>+255 615 063 121</a></li>
          </ul>
        </div>
      </div>
      <div class="text-center text-secondary">
        &copy; {{ date('Y') }} <strong>Werex OilCom</strong>. All rights reserved. |
        <a href="#" class="text-white text-decoration-none">Developed by Chambiri -Tech</a> |
        <a href="#" class="text-white text-decoration-none">Terms of Service</a>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const backToTopBtn = document.getElementById("backToTop");
    window.addEventListener("scroll", () => {
      if (window.scrollY > 300) backToTopBtn.style.display = "flex";
      else backToTopBtn.style.display = "none";
    });
    backToTopBtn.addEventListener("click", () => window.scrollTo({ top: 0, behavior: "smooth" }));
    document.getElementById("year").textContent = new Date().getFullYear();

    // Auto-slide testimonial carousel
    const testimonialCarousel = new bootstrap.Carousel(document.getElementById('testimonialCarousel'), {
      interval: 4000,
      wrap: true,
      pause: false
    });
  </script>
</body>
</html>
