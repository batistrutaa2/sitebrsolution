@extends('master.master')
@section('content')
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="row gx-0">
        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h3>Quem Somos</h3>
            <h2>A Br Solutions é especialista em desenvolvimento de sistemas focado em produtividade para o
              seu negócio decolar.</h2>
            <p>
              Seja micro, media ou grande empresa, construiremos uma solução de lhe trará produtividade e
              segurança para tomar qualquer decisão.
            </p>
            <div class="text-center text-lg-start">
              <a href="#contact"
                 class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Consulte Mais informações</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="img/about.jpg" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section><!-- End About Section -->
  <!-- ======= Values Section ======= -->
  <section id="values" class="values">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <h3>Nossos Valores</h3>
      </header>
      <div class="row">
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="box">
            <img src="img/values-1.png" class="img-fluid" alt="">
            <h3>Missão</h3>
            <p>Ser a empresa de maior credibilidade do mercado de desenvolvimento de software, oferecendo as
              melhores soluções aos nossos clientes.</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
          <div class="box">
            <img src="img/values-2.png" class="img-fluid" alt="">
            <h3>Visão</h3>
            <p>Consolidar nossa inquestionável qualidade global dos produtos e serviços, em uma posição de
              líder de mercado.</p>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
          <div class="box">
            <img src="img/values-3.png" class="img-fluid" alt="">
            <h3>Valores</h3>
            <li>Pessoas em primeiro lugar.</li>
            <li>Qualidade em nossos serviços</li>
            <li>Responsabilidade em toda decisão.</li>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Values Section -->
  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">
      <div class="row gy-4">
        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <div>
                            <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1"
                                  class="purecounter"></span>
              <p>clientes Satisfeitos</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
            <div>
                            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1"
                                  class="purecounter"></span>
              <p>Projetos</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-headset" style="color: #15be56;"></i>
            <div>
                            <span data-purecounter-start="0" data-purecounter-end="17520" data-purecounter-duration="1"
                                  class="purecounter"></span>
              <p>Horas de Suporte</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-people" style="color: #bb0852;"></i>
            <div>
                            <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1"
                                  class="purecounter"></span>
              <p>Colaboradores</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Counts Section -->
  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <h2>Portfolio</h2>
        <p>Confira nossos últimos trabalhos</p>
      </header>
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Todos</li>
            <li data-filter=".filter-app">Sistemas</li>
            <li data-filter=".filter-card">Sites</li>
            <li data-filter=".filter-web">Outros</li>
          </ul>
        </div>
      </div>
      <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="img/portfolio/lkBrokers.PNG" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sales Control</h4>
              <p>Sistema</p>
              <div class="portfolio-links">
                <a href="img/portfolio/lkBrokers.PNG" data-gallery="portfolioGallery"
                   class="portfokio-lightbox"
                   title="Dashboard do sistema de gestão de carteira focado em vendas de plano de saude e controle de leads"><i
                    class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div> -->
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="img/portfolio/hitrading.PNG" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>hit Trading</h4>
              <p>Sistema</p>
              <div class="portfolio-links">
                <a href="img/portfolio/hitrading.PNG" data-gallery="portfolioGallery"
                   class="portfokio-lightbox"
                   title="Dashboard do sistema de gestão de carteira focada em investimentos"><i
                    class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section><!-- End Portfolio Section -->
  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <h2>Nossos Clientes</h2>
        <p>Conheça nossos Parceiros</p>
      </header>
      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="img/clients/logo-hit-black.png" class="img-fluid" alt="">
          </div>
          <div class="swiper-slide"><img src="img/clients/logo-lk.jpeg" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="img/clients/client-7.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="img/clients/client-8.png" class="img-fluid" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section><!-- End Clients Section -->
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <h2>Contact</h2>
        <p>Contate-nos</p>
      </header>
      <div class="row gy-4">
        <div class="col-lg-6">
          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>A108 Adam Street,<br>New York, NY 535022</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com<br>contact@example.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-clock"></i>
                <h3>Open Hours</h3>
                <p>Monday - Friday<br>9:00AM - 05:00PM</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <form action="#" method="post" class="php-email-form">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>
              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>
              <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                          required></textarea>
              </div>
              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
                <button type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->

@endsection
