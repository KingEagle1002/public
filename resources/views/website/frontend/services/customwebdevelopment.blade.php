@extends('website.frontend.main')
@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Service Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('portfolio.home') }}">Home</a></li>
            <li class="current">Service Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
           <div class="services-list">
              <a href="#">Software Development</a>
              <a href="#">Product Management</a>
              <a href="#">Marketing</a>
            </div>


            <h4>Custom Web Development</h4>
            <p>Building responsive, fast, and dynamic websites using modern technologies like HTML, CSS, JavaScript,Laravel and Python.</p>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('assets/img/custom.webp') }}" alt="Custom Web Development" class="img-fluid services-img">
            <h3>Why Choose Our Custom Web Development?</h3>
            <p>We provide tailored web solutions designed to fit your business needs. Our expertise ensures high performance, scalability, and engaging user experiences.</p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Responsive designs for all devices.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Optimized for speed and SEO.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Built with secure and modern technologies like Laravel.</span></li>
            </ul>
            <p>Our team focuses on delivering clean, maintainable code with a focus on scalability. We ensure your website stays relevant with evolving trends and technologies.</p>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

</main>
@endsection
