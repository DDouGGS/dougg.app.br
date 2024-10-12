<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Butterfly Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('/favicon.png')}}" rel="icon">
  <link href="{{asset('/assets/butterfly/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/assets/butterfly/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/butterfly/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/butterfly/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/butterfly/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/butterfly/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('/assets/butterfly/css/main.css')}}" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center">
        <img src="{{asset('/assets/butterfly/img/logo.png')}}" alt="">
        <!-- Uncomment the line below if you also wish to use text logo -->
        <!-- <h1 class="sitename">Butterfly</h1>  -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#services">Serviços</a></li>
          <li><a href="#contact">Contato</a></li>
          <li><a href="#about">Sobre</a></li>
          <li><a href="#about">Admin</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-md-start" data-aos="fade-up">
            <h2>UNINDO A EXPERIÊNCIA À INOVAÇÃO</h2>
            <p>Conheçemos o caminho para alcançar a inovação que você tanto deseja.</p>
            <div class="d-flex mt-4 justify-content-center justify-content-md-start">
              <a href="#about" class="cta-btn">Cadastre-se</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{asset('/assets/butterfly/img/hero-img.png')}}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 position-relative" data-aos="fade-up" data-aos-delay="100">
            <img src="{{asset('/assets/butterfly/img/about.jpg')}}" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
          </div>

          <div class="col-lg-6 ps-lg-4 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <h3>Sobre Nós</h3>
            <p>
              Ainda que sejemos jovens temos experiência suficiente para direcionar e ajudar você e sua empresaa alcançar seu objetivo e ter seu diferêncial digital no mercado. Experimente e veja que a inovação com experiência traz resultados melhores e seguros.
            </p>
            <ul>
              <li>
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Metodologias</h5>
                  <p>Aplicamos as melhores metodologias para que seu projeto seja bem sucedido e saia rapidamente do papel.</p>
                </div>
              </li>
              <li>
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>Testes</h5>
                  <p>Não queremos só um bom desenvolvimento, mas também que o seu cliente sinta-se seguro, por isso realizamos testes continuos.</p>
                </div>
              </li>
              <li>
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Comunicação</h5>
                  <p>No mundo de hoje uma boa comunicação é a chave para o sucesso no desenvolvimento e o que buscamos.</p>
                </div>
              </li>
            </ul>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <img src="{{asset('/assets/butterfly/img/stats-bg.jpg')}}" alt="" data-aos="fade-in">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
              <p>Parceiros</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projetos</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="244" data-purecounter-duration="1" class="purecounter"></span>
              <p>Horas de Desenvolvimento</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
              <p>Equipes</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0 clients-wrap">

          <div class="col-xl-3 col-md-4 client-logo">
            <img src="{{asset('/assets/butterfly/img/clients/client-1.png')}}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-3 col-md-4 client-logo">
            <img src="{{asset('/assets/butterfly/img/clients/client-2.png')}}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-3 col-md-4 client-logo">
            <img src="{{asset('/assets/butterfly/img/clients/client-3.png')}}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-3 col-md-4 client-logo">
            <img src="{{asset('/assets/butterfly/img/clients/client-4.png')}}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-3 col-md-4 client-logo">
            <img src="{{asset('/assets/butterfly/img/clients/client-5.png')}}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-3 col-md-4 client-logo">
            <img src="{{asset('/assets/butterfly/img/clients/client-6.png')}}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-3 col-md-4 client-logo">
            <img src="{{asset('/assets/butterfly/img/clients/client-7.png')}}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-3 col-md-4 client-logo">
            <img src="{{asset('/assets/butterfly/img/clients/client-8.png')}}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Serviços</h2>
        <p>Desenvolvimento não é tudo, quando a empresa ou o seu projeto é montado para alcançar seu potencial máximo no menor tempo possível.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-house" style="color: #1af0ba;"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Site</h3>
              </a>
              <p>Podemos desenvolver o seu site conforme a sua necessidade, com tecnologias modernas e um MVP.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-hdd-stack" style="color: #f0e639;"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>DevOps</h3>
              </a>
              <p>As vezes, para que o seu projeto dê certo é preciso também que a infraestrutura o acompanhe.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-file-earmark-code" style="color: #a1a08d;"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Desenvolvimento</h3>
              </a>
              <p>Mesmo no desenvolvimento o foco é o produto com a criação de um MVP ágil.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-gear" style="color: #705e59;"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Configurações</h3>
              </a>
              <p>Por vezes, um aplicativo adequado e bem configurado já faz toda a diferença para o seu negócio crescer. Basta uma boa consultoria.</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-globe" style="color: #9b6cf0;"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Web</h3>
              </a>
              <p>Hoje a internet tem mais que sites para ajudar seu negócio, como: Logs, APIs, etc.</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-phone" style="color: #f08665;"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Mobile</h3>
              </a>
              <p>Como Flutter/Dart podemos desenvolver seu app mobile para o sistema Andróid.</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

      <img src="{{asset('/assets/butterfly/img/testimonials-bg.jpg')}}" class="testimonials-bg" alt="">

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
              }
            }
          </script>
          <div class="swiper-wrapper">

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('/assets/butterfly/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div> -->

             <!-- End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('/assets/butterfly/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div> -->

            <!-- End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('/assets/butterfly/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div> -->

            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('/assets/butterfly/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('/assets/butterfly/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contatos</h2>
        <p>Em que posso ajudá-lo? Entre em contato e iremos te ajudar.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.430325737198!2d-46.5868013!3d-23.481004799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef5e44515cff7%3A0x7681b48d87c95ef6!2sAv.%20J%C3%BAlio%20Buono%2C%202400%20-%20Vila%20Gustavo%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2002201-002!5e0!3m2!1spt-BR!2sbr!4v1728433215759!5m2!1spt-BR!2sbr" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Endereço</h3>
                <p>Avenida Júlio Buono, 2400 - Vila Gustavo - São Paulo - SP - CEP: 02201-002</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Fone</h3>
                <p>+55 (11) 97580.3656</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>E-Mail</h3>
                <p>ti.dougg@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nome" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="E-mail" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Título" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Menssagem" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Lendo...</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Sua menssagem foi enviada. Obrigado!</div>

                  <button type="submit">Enviar</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="#" class="logo d-flex align-items-center">
            <span class="sitename">Dougg TI</span>
          </a>
          <p>Trazendo a experiência que faltava para a inovação.</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Menu</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#services">Serviços</a></li>
            <li><a href="#contact">Contato</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#">Admin</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Outros Serviços</h4>
          <ul>
            <li><a href="#">Web</a></li>
            <li><a href="#">Desenvolvimento</a></li>
            <li><a href="#">Mobile</a></li>
            <li><a href="#">Leads</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contate-nos</h4>
          <p>Avenida Júlio Buono, 2400, Bloco D, apto 11, Vila Gustavo</p>
          <p>São Pauolo, SP, CEP: 02201-002</p>
          <p>Brasil</p>
          <p class="mt-4"><strong>Telefone:</strong> <span>+55 (11) 97580.3656</span></p>
          <p><strong>Email:</strong> <span>ti.dougg@gmail.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Dougg TI</strong> <span>Todos os direitos reservados</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Criado por <a href="https://bootstrapmade.com/">Dougg TI</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('/assets/butterfly/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/assets/butterfly/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('/assets/butterfly/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('/assets/butterfly/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('/assets/butterfly/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('/assets/butterfly/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('/assets/butterfly/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('/assets/butterfly/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('/assets/butterfly/js/main.js')}}"></script>

</body>

</html>
