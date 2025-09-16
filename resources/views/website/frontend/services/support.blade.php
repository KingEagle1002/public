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
                <a href="#">Maintenance & Support</a>
                <a href="#">Bug Fixes & Updates</a>
                <a href="#">Performance Monitoring</a>
            </div>



            <h4>Maintenance & Support</h4>
            <p>We provide reliable maintenance and support services to ensure your applications remain up-to-date, secure, and high-performing. Our team proactively monitors, troubleshoots, and enhances your systems to minimize downtime and improve efficiency.</p>


          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('assets/img/support.webp') }}" alt="Software Development" class="img-fluid services-img">
          <h3>Reliable Maintenance & Support Services</h3>
            <p>Our Maintenance and Support services ensure that your applications remain secure, updated, and perform at their best. We provide continuous monitoring, timely updates, and quick issue resolution to keep your systems running smoothly.</p>
            <ul>
                <li><i class="bi bi-check-circle"></i> <span>Regular updates and security patches to prevent vulnerabilities.</span></li>
                <li><i class="bi bi-check-circle"></i> <span>24/7 performance monitoring and proactive issue detection.</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Prompt bug fixing and feature enhancements as needed.</span></li>
            </ul>
            <p>Our dedicated support team ensures minimal downtime and maximum reliability, enabling your business operations to continue seamlessly without interruptions.</p>




          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

</main>
@endsection
