@extends('website.frontend.main')
@section('content')
<main class="main">

  <!-- Page Title -->
  <div class="page-title dark-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Project Details</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li class="current">Portfolio Details</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Portfolio Details Section -->
  <section id="portfolio-details" class="portfolio-details section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper init-swiper">

            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>

            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide">
                <img src="assets/img/portfolio/css/box1.png" alt="box Page">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/portfolio/css/box2.png" alt="box Page">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/portfolio/css/box3.png" alt="box Page">
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
            <h3>Project Information</h3>
            <ul>
              <li><strong>Category</strong>: Web Development</li>
              <li><strong>Technology</strong>: HTML, CSS</li>
              <li><strong>Project Date</strong>: 18 July, 2024</li>
              <li><strong>Project URL</strong>: <a href="https://github.com/KingEagle1002/3D-Box.git" target="_blank">GitHub Repository</a></li>
            </ul>
          </div>
          <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
            <h2>3D Box animation</h2>
           <p>
            This is a fully responsive 3D Box animation website created using only HTML and CSS. The project showcases modern styling with clean transitions, demonstrating creative use of CSS for interactive 3D effects without any JavaScript.
           </p>

          </div>
        </div>

      </div>

    </div>

  </section><!-- /Portfolio Details Section -->

</main>
@endsection
