@extends('website.frontend.main')
@section('content')
<main class="main">

  <!-- Page Title -->
  <div class="page-title dark-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Project  Details</h1>
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
                <img src="assets/img/portfolio/website/register.png" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/website/login.png" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/website/profile.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/portfolio/website/address.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/portfolio/website/password-change.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/portfolio/website/layout1.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/portfolio/website/layout.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/portfolio/website/mobile.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/portfolio/website/laptop.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/portfolio/website/top-wear.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/portfolio/website/botom-wear.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/portfolio/website/cart-detail.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/portfolio/website/add-to-cart.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/portfolio/website/order-summery.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/portfolio/website/plased-order.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/portfolio/website/admin.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/portfolio/website/cart.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/portfolio/website/customer1.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/portfolio/website/place.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/portfolio/website/product.png" alt="">
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
              <li><strong>Technology</strong>: Python, Django</li>
              <li><strong>Project Date</strong>: 20 July, 2024</li>
             <li><strong>Project URL</strong>: <a href="https://github.com/KingEagle1002/shoppinglyx.git" target="_blank">GitHub Repository</a></li>

            </ul>
          </div>
          <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
            <h2>Python Django Project</h2>
            <p>
              This is a professional web application developed using Python and Django framework. The project includes user authentication, dynamic content management, and an admin panel. It is secure, scalable, and built following modern web development standards.
            </p>
          </div>
        </div>

      </div>

    </div>

  </section><!-- /Portfolio Details Section -->

</main>
@endsection
