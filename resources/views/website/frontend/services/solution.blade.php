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
                <a href="#">Full Stack Development</a>
                <a href="#">Frontend & Backend Integration</a>
                <a href="#">End-to-End Project Delivery</a>
            </div>



            <h4>Full Stack Solutions</h4>
            <p>Delivering comprehensive full stack development services that cover both frontend and backend technologies. We build complete, scalable, and high-performing web applications tailored to your business requirements.</p>


          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('assets/img/solution.avif') }}" alt="Software Development" class="img-fluid services-img">
           <h3>Comprehensive Full Stack Solutions</h3>
            <p>Our Full Stack development services provide end-to-end solutions, combining both frontend and backend expertise to deliver seamless, scalable, and robust web applications. From intuitive interfaces to powerful server-side logic, we cover it all.</p>
            <ul>
                <li><i class="bi bi-check-circle"></i> <span>Expertise in modern frontend frameworks like React, Vue.js, and Angular.</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Robust backend development with technologies like Node.js, Laravel, and Python.</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Efficient integration of APIs, databases, and third-party services.</span></li>
            </ul>
            <p>We ensure that every solution is fully optimized for performance, security, and scalability. Whether it's a startup MVP or an enterprise-grade system, our full stack services ensure a smooth and complete development journey from concept to deployment.</p>



          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

</main>
@endsection
