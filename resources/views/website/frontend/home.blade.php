@extends('website.frontend.main')
@section('content')
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/file.webp" alt="" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>Hashir Mehran</h2>
        <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer">Designer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>I’m a self-taught Web Application Developer with expertise in HTML, CSS, JavaScript, Python, and Laravel. I have hands-on experience building dynamic websites, games like Flappy Bird in JavaScript, and full websites using Python frameworks.
            I am passionate about creating user-friendly, responsive, and fast web applications. My goal is to continue growing as a developer, take on new challenges, and contribute to projects that solve real-world problems.
            I am currently open to remote or on-site opportunities in Dubai, the Middle East, and globally.
            Skills:
            Front-End: HTML, CSS, JavaScript
            Back-End: Python, Laravel (PHP)
            Tools: Git, GitHub, VS Code

            Feel free to connect with me for collaboration or job opportunities.</p>
      </div><!-- End Section Title -->

      <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/hashir2.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2>Web Application Developer &amp; Full Stack Developer.</h2>
            <p class="fst-italic py-3">
              I am a self-taught web developer skilled in HTML, CSS, JavaScript, Python, and Laravel. I love building web applications, dynamic websites, and creative solutions that solve real-world problems.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>10 Oct 2005</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>0316 8606867</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Pakistan, Sargodha</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>20</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>hashirshakeel25@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
              I specialize in developing responsive websites and scalable applications. With a passion for coding and continuous learning, I aim to deliver high-quality digital solutions. Always open to exciting freelance projects and collaborations.
            </p>
          </div>
      </div>
    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="stats-item">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Happy Clients</strong> <span>Projects completed successfully</span></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="stats-item">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Projects</strong> <span>Websites & Applications developed</span></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="stats-item">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Hours Of Support</strong> <span>Client assistance provided</span></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="stats-item">
            <i class="bi bi-people"></i>
            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Hard Workers</strong> <span>Team members collaborated</span></p>
          </div>
        </div>

      </div>

    </div>
</section>
<!-- /Stats Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Skills</h2>
      <p>I have expertise in both frontend and backend technologies essential for building modern web applications.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row skills-content skills-animation">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill"><span>CSS</span> <i class="val">85%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill"><span>JavaScript</span> <i class="val">40%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill"><span>Python</span> <i class="val">50%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill"><span>Laravel (PHP)</span> <i class="val">95%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill"><span>Git & GitHub</span> <i class="val">70%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div>

</section>
<!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Resume</h2>
    <p>I am a passionate and dedicated Web Application Developer specializing in both front-end and back-end technologies. I love building responsive websites, web apps, and providing effective solutions for businesses and clients.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3 class="resume-title">Summary</h3>

        <div class="resume-item pb-0">
          <h4>Hashir Shakeel</h4>
          <p><em>Self-taught Full Stack Web Developer with hands-on experience in HTML, CSS, JavaScript, Python, and Laravel. Skilled in building user-friendly, dynamic, and efficient web applications. Always eager to learn and work on innovative projects.</em></p>
          <ul>
            <li>Sargodha, Pakistan</li>
            <li>0316 8606867</li>
            <li>hashirshakeel25@gmail.com</li>
          </ul>
        </div><!-- End Resume Item -->

      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <h3 class="resume-title">Professional Experience</h3>
        <div class="resume-item">
          <h4>Web Application Developer</h4>
          <h5>2024 - Present</h5>
          <p><em>Freelance / Independent Developer</em></p>
          <ul>
            <li>Developed dynamic and responsive websites using HTML, CSS, JavaScript, Python, and Laravel.</li>
            <li>Created web-based applications that solve client-specific problems and enhance user experience.</li>
            <li>Built and deployed multiple projects hosted on GitHub for showcasing my work.</li>
            <li>Continuously learning modern web technologies to enhance skills and project quality.</li>
          </ul>
        </div><!-- End Resume Item -->

      </div>

    </div>

  </div>

</section>
<!-- /Resume Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <div class="container section-title" data-aos="fade-up">
          <h2>Portfolio</h2>
          <p>Explore my work below which showcases my expertise in web development, game development, and Python projects. Each project reflects my skills, creativity, and dedication to delivering high-quality solutions.</p>
        </div>

<!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-css">CSS</li>
            <li data-filter=".filter-js">JAVA-SCRIPT</li>
            <li data-filter=".filter-python">PYTHON-DJANGO</li>
            <li data-filter=".filter-laravel">LARAVEL-PHP</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

           <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-python">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/website/python.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Shoppinglyx</h4>
                  <p>A full-featured E-commerce platform built with Python Django, including user authentication, product catalog, cart, and checkout functionality.</p>
                  <a href="assets/img/portfolio/website/python.png" title="Shoppinglyx" data-gallery="portfolio-gallery-website" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="{{ route('portfolio') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
<!-- End Portfolio Item -->
           <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-css">
              <div class="portfolio-content h-100">
                <!-- Image 1 -->
                <img src="assets/img/portfolio/css/box1.png" class="img-fluid mb-3" alt="Neon Tech Block">
                <div class="portfolio-info mt-3">
                  <h4>Tech Visualization Cubes</h4>
                  <p>
                    - Neon Tech Block: Futuristic cube with glowing blue base.<br>
                   
                  </p>
                  <a href="assets/img/portfolio/css/box1.png" title="Zoom Neon Tech Block" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="{{ route('box') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
<!-- End Portfolio Item -->




            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-js">
                <div class="portfolio-content h-100">
                  <img src="assets/img/portfolio/Coffee/Home.png" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Coffee Shop </h4>
                    <p>A modern JavaScript-based coffee shop UI with interactive features.</p>
                    <a href="assets/img/portfolio/Coffee/Home.png" title="Coffee Shop" data-gallery="portfolio-gallery-js" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="{{ route('coffee') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div>



            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-js">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/Flappy/bird.png" class="img-fluid" alt="Flappy Bird Game">
                <div class="portfolio-info">
                  <h4>Flappy Bird Game</h4>
                  <p>A fun and engaging Flappy Bird game developed purely in JavaScript with smooth animations and collision mechanics.</p>
                  <a href="assets/img/portfolio/Flappy/bird.png" title="Flappy Bird Game" data-gallery="portfolio-gallery-js" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="{{ route('bird') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>

<!-- End Portfolio Item -->




            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-laravel">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/app-2.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Services Section -->
   <section id="services" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Services</h2>
    <p>I offer a range of web development services tailored to meet client needs with modern, scalable, and efficient solutions.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="icon flex-shrink-0"><i class="bi bi-code-slash"></i></div>
        <div>
          <h4 class="title"><a href="{{ route('development') }}" class="stretched-link">Custom Web Development</a></h4>
          <p class="description">Building responsive, fast, and dynamic websites using modern technologies like HTML, CSS, JavaScript, and Laravel.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="icon flex-shrink-0"><i class="bi bi-phone"></i></div>
        <div>
          <h4 class="title"><a href="{{ route('frontend') }}" class="stretched-link">Frontend Development</a></h4>
          <p class="description">Crafting clean and user-friendly interfaces with HTML, CSS, Bootstrap, and JavaScript frameworks.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="icon flex-shrink-0"><i class="bi bi-hdd-network"></i></div>
        <div>
          <h4 class="title"><a href="{{ route('backend') }}" class="stretched-link">Backend Development</a></h4>
          <p class="description">Developing robust backend systems using Python, Laravel, and integrating APIs for seamless data flow.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="icon flex-shrink-0"><i class="bi bi-github"></i></div>
        <div>
          <h4 class="title"><a href="{{ route('version') }}" class="stretched-link">Version Control</a></h4>
          <p class="description">Managing projects efficiently using Git and GitHub for version control and collaboration.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
        <div class="icon flex-shrink-0"><i class="bi bi-laptop"></i></div>
        <div>
          <h4 class="title"><a href="{{ route('solution') }}" class="stretched-link">Full Stack Solutions</a></h4>
          <p class="description">Delivering complete solutions from frontend to backend, ensuring smooth integration and performance.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
        <div class="icon flex-shrink-0"><i class="bi bi-wrench"></i></div>
        <div>
          <h4 class="title"><a href="{{ route('support') }}" class="stretched-link">Maintenance & Support</a></h4>
          <p class="description">Providing ongoing maintenance, updates, and support to keep your website running smoothly and securely.</p>
        </div>
      </div>

    </div>

  </div>

</section>
<!-- /Services Section -->

    <!-- Testimonials Section -->
    {{-- <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
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
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section --> --}}

    <!-- Contact Section -->
    <section id="contact" class="contact section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Feel free to contact me directly via phone or email.</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="info-wrap">
      <div class="info-item d-flex">
        <i class="bi bi-geo-alt flex-shrink-0"></i>
        <div>
          <h3>Address</h3>
          <p>Sargodha, Punjab, Pakistan</p>
        </div>
      </div>

      <div class="info-item d-flex">
        <i class="bi bi-telephone flex-shrink-0"></i>
        <div>
          <h3>Call Me</h3>
          <p>+92 316 8606867</p>
        </div>
      </div>

      <div class="info-item d-flex">
        <i class="bi bi-envelope flex-shrink-0"></i>
        <div>
          <h3>Email Me</h3>
          <p>hashirshakeel25@gmail.com</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Contact Section -->

  </main>
@endsection