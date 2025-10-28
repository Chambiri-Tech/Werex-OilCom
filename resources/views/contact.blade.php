@extends('layouts.guest')

@section('content')
<div class="container py-5">
  <h1 class="text-center text-primary mb-4">Contact Us</h1>
  <p class="text-center mb-5">We’d love to hear from you. Fill out the form below or reach out through our contact details.</p>

  @if(session('success'))
      <div id="successMessage" class="alert alert-success text-center" style="opacity:0; transform: translateY(-20px); transition: opacity 0.5s ease, transform 0.5s ease;">
          {{ session('success') }}
      </div>
      <script>
        window.addEventListener('DOMContentLoaded', () => {
          let msg = document.getElementById('successMessage');
          if(msg){
            // Fade in
            setTimeout(() => {
              msg.style.opacity = '1';
              msg.style.transform = 'translateY(0)';
            }, 50);

            // Fade out after 3 seconds
            setTimeout(() => {
              msg.style.opacity = '0';
              msg.style.transform = 'translateY(-20px)';
              setTimeout(() => msg.remove(), 500); // Remove after transition
            }, 3050);
          }
        });
      </script>
  @endif

  @if ($errors->any())
      <div class="alert alert-danger">
          <ul class="mb-0">
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="{{ route('contact.store') }}" method="POST" class="card shadow-sm p-4 border-0">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label fw-bold">Full Name</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="Enter your full name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label fw-bold">Email</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label fw-bold">Message</label>
          <textarea name="message" id="message" class="form-control" rows="5" placeholder="Write your message here" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Send Message</button>
      </form>
    </div>
  </div>
</div>
@endsection
