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
                <a href="#">Backend Development</a>
                <a href="#">API Development</a>
                <a href="#">Database Management</a>
           </div>

            <h4>Backend Development</h4>
            <p>Building secure, scalable, and high-performance server-side applications using technologies like PHP, Laravel, Node.js, and Python. We ensure smooth data processing, robust APIs, and seamless integration with frontend systems.</p>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('assets/img/backend.jpg') }}" alt="Software Development" class="img-fluid services-img">
           <h3>Why Choose Our Backend Development Services?</h3>
            <p>Our expert backend developers create powerful and reliable server-side solutions that drive your applications. We specialize in building secure APIs, managing databases, and ensuring high-performance processing.</p>
            <ul>
                <li><i class="bi bi-check-circle"></i> <span>Robust and secure API development for seamless frontend integration.</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Scalable backend architecture to handle growing user demands.</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Expertise in technologies like PHP, Laravel, Node.js, and Python.</span></li>
            </ul>
            <p>We focus on delivering backend systems that are not only efficient but also maintainable and secure. Our goal is to ensure smooth data flow, optimized performance, and reliability for your business applications.</p>

          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

</main>
@endsection
