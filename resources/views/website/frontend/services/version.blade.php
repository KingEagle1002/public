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
                <a href="#">Version Control Systems</a>
                <a href="#">Git & GitHub Management</a>
                <a href="#">Branching & Collaboration</a>
            </div>


            <h4>Version Control</h4>
            <p>Implementing efficient version control practices using tools like Git and platforms such as GitHub and GitLab. We ensure organized code collaboration, tracking changes, and managing project versions effectively.</p>

          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('assets/img/version.jpg') }}" alt="Software Development" class="img-fluid services-img">
           <h3>Version Control Systems</h3>
            <p>Version control is essential for managing changes in code efficiently and collaboratively. Using systems like Git, we enable teams to track every modification, revert to previous versions, and collaborate on projects without conflict.</p>
            <ul>
                <li><i class="bi bi-check-circle"></i> <span>Track and manage code changes effectively.</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Facilitate collaboration through branching and merging.</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Ensure project stability with version history and rollbacks.</span></li>
            </ul>
            <p>With tools like Git, GitHub, and GitLab, we streamline the development workflow, ensuring code integrity, better collaboration, and smoother deployment processes across multiple environments.</p>


          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

</main>
@endsection
