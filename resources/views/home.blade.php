@extends('layouts/header')
@section('container')
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Are you the one?</h1>
            <p data-aos="fade-up" data-aos-delay="100">Improve your music skills in a fun and flexible way! 
                Music lessons that can be tailored to your schedule 
                so that you can learn anytime, anywhere. </p>
            <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
              <a href="#about" class="btn-get-started">I’m In! <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="{{ asset('bocilprik') }}/hero.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->
    <section id="values" class="values section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Our Values</h2>
          <p>What we value most<br></p>
        </div><!-- End Section Title -->
  
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="card">
                <img src="{{ asset('bocilprik') }}/assets/img/values-1.png" class="img-fluid" alt="">
                <h3>Ad cupiditate sed est odio</h3>
                <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
              </div>
            </div><!-- End Card Item -->
  
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="card">
                <img src="{{ asset('bocilprik') }}/assets/img/values-2.png" class="img-fluid" alt="">
                <h3>Voluptatem voluptatum alias</h3>
                <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
              </div>
            </div><!-- End Card Item -->
  
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="card">
                <img src="{{ asset('bocilprik') }}/assets/img/values-3.png" class="img-fluid" alt="">
                <h3>Fugit cupiditate alias nobis.</h3>
                <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
              </div>
            </div><!-- End Card Item -->
  
          </div>
  
        </div>
  
      </section><!-- /Values Section -->
  
    <section id="about" class="about section">

        <div class="container" data-aos="fade-up">
          <div class="row gx-0">
  
            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <h3>Who We Are</h3>
                <h2>Anytime you need</h2>
                <p>
                    Whenever you want, you can access any learning video. Is it already the equivalent of a madura stall? Is it already the apa anjay ga kelar
                </p>
                <div class="text-center text-lg-start">
                  <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>I'm In!</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
              <img src="{{ asset('bocilprik') }}/assets/img/about.jpg" class="img-fluid" alt="">
            </div>
  
          </div>
        </div>
  
      </section>
      <section id="about" class="about section">
        <div class="container" data-aos="fade-up">
          <div class="row gx-0">
      
            <!-- Foto di sebelah kiri -->
            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
              <img src="{{ asset('bocilprik') }}/assets/img/about.jpg" class="img-fluid" alt="">
            </div>
      
            <!-- Konten di sebelah kanan -->
            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <h3>Who We Are</h3>
                <h2>Anywhere you want</h2>
                <p>
                    Learn music anywhere, so you don't have to worry about where to learn. Studio, home, office, ex's house, even the toilet.
                </p>
                <div class="text-center text-lg-start">
                  <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>I'm In!</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
      
          </div>
        </div>
      </section>
      <section id="certification" class="py-5 bg-light">
        <div class="container">
          <div class="row align-items-center">
            
            <!-- Kolom Kiri: Tulisan -->
            <div class="col-lg-6 mb-4 mb-lg-0">
              <h1 class="fw-bold display-5">Ready to <br>become the <br>next star?</h1>
            </div>
            
            <!-- Kolom Kanan: Konten -->
            <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center">
              <!-- Bintang Rating -->
              <div class="d-flex mb-2">
                <i class="bi bi-star-fill text-warning fs-2 me-1"></i>
                <i class="bi bi-star-fill text-warning fs-2 me-1"></i>
                <i class="bi bi-star-fill text-warning fs-2 me-1"></i>
                <i class="bi bi-star-fill text-warning fs-2 me-1"></i>
                <i class="bi bi-star-fill text-warning fs-2 me-1"></i>
              </div>
              
              <!-- Tulisan Deskripsi -->
              <p class="text-muted fs-5 fw-bold text-center mb-3">
                70% certified students <br> are accepted to Juilliard School.
              </p>
              
              <!-- Tombol -->
              <a href="#" class="btn btn-primary btn-lg fw-bold shadow">
                Get my certification now!
              </a>
            </div>
            
          </div>
        </div>
      </section>
      <section id="faq" class="faq section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div><!-- End Section Title -->
  
        <div class="container">
  
          <div class="row">
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
  
              <div class="faq-container">
  
                <div class="faq-item faq-active">
                  <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                  <div class="faq-content">
                    <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
                <div class="faq-item">
                  <h3>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
                  <div class="faq-content">
                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
                <div class="faq-item">
                  <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                  <div class="faq-content">
                    <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
              </div>
  
            </div><!-- End Faq Column-->
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
  
              <div class="faq-container">
  
                <div class="faq-item">
                  <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                  <div class="faq-content">
                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
                <div class="faq-item">
                  <h3>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h3>
                  <div class="faq-content">
                    <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
                <div class="faq-item">
                  <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
                  <div class="faq-content">
                    <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi. Distinctio ipsam dolore et.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
              </div>
  
            </div><!-- End Faq Column-->
  
          </div>
  
        </div>
  
      </section><!-- /Faq Section -->
      <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div><!-- End Section Title -->
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="row gy-4">
  
            <div class="col-lg-6">
  
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="info-item" data-aos="fade" data-aos-delay="200">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Address</h3>
                    <p>A108 Adam Street</p>
                    <p>New York, NY 535022</p>
                  </div>
                </div><!-- End Info Item -->
  
                <div class="col-md-6">
                  <div class="info-item" data-aos="fade" data-aos-delay="300">
                    <i class="bi bi-telephone"></i>
                    <h3>Call Us</h3>
                    <p>+1 5589 55488 55</p>
                    <p>+1 6678 254445 41</p>
                  </div>
                </div><!-- End Info Item -->
  
                <div class="col-md-6">
                  <div class="info-item" data-aos="fade" data-aos-delay="400">
                    <i class="bi bi-envelope"></i>
                    <h3>Email Us</h3>
                    <p>info@example.com</p>
                    <p>contact@example.com</p>
                  </div>
                </div><!-- End Info Item -->
  
                <div class="col-md-6">
                  <div class="info-item" data-aos="fade" data-aos-delay="500">
                    <i class="bi bi-clock"></i>
                    <h3>Open Hours</h3>
                    <p>Monday - Friday</p>
                    <p>9:00AM - 05:00PM</p>
                  </div>
                </div><!-- End Info Item -->
  
              </div>
  
            </div>
  
            <div class="col-lg-6">
              <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">
  
                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                  </div>
  
                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                  </div>
  
                  <div class="col-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                  </div>
  
                  <div class="col-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                  </div>
  
                  <div class="col-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
  
                    <button type="submit">Send Message</button>
                  </div>
  
                </div>
              </form>
            </div><!-- End Contact Form -->
  
          </div>
  
        </div>
  
      </section><!-- /Contact Section -->
  
      
      
</main>