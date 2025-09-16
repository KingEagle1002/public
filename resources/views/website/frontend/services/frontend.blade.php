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
                <a href="#">Frontend Development</a>
                <a href="#">UI/UX Design</a>
                <a href="#">Performance Optimization</a>
            </div>

            <h4>Frontend Development</h4>
            <p>Creating modern, responsive, and fast-loading user interfaces using HTML, CSS, JavaScript, and frontend frameworks. We ensure optimal user experience across all devices.</p>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('assets/img/frontend.jpg') }}" alt="Software Development" class="img-fluid services-img">
            <h3>Why Choose Our Frontend Development Services?</h3>
            <p>Our skilled frontend team designs interactive and visually appealing user interfaces that enhance engagement and usability. We specialize in crafting pixel-perfect designs compatible across devices and browsers.</p>
            <ul>
            <li><i class="bi bi-check-circle"></i> <span>Responsive designs that work flawlessly on all screen sizes.</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Performance-optimized interfaces for faster load times.</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Built with modern frameworks like React, Vue.js, and Angular.</span></li>
            </ul>
            <p>We ensure that every frontend solution we build not only looks great but also provides a seamless user experience. Our focus is on accessibility, speed, and scalability to future-proof your application.</p>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

</main>
@endsection
