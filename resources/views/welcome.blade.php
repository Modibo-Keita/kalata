<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kalata Welcome</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('KALATA-Logo-Officiel.png') }}" rel="icon">
  <link href="{{ asset('assets/theme/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/theme/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/theme/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/theme/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/theme/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/theme/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/theme/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/theme/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.10.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <div class="container-fluid bg-success">

    </div>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('KALATA-Logo-Officiel.png')}}" alt="">
        <span>Kalata</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
            <li><a class="nav-link scrollto" href="#testimonials">Temoingnages</a></li>
            <li><a class="nav-link scrollto" href="#">Demos</a></li>
            <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
            <li><a class="nav-link scrollto" href="#about">A propos</a></li>
            <li><a class="nav-link scrollto" href="#services">Services</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            @if (Route::has('login'))
                @auth
                    <li><a class="getstarted scrollto" href="{{ url('/home') }}">Home</a></li>
                    @else
                    <li><a class="getstarted scrollto bg-success" href="{{ route('login') }}">Se connecter</a></li>
                    @if (Route::has('register'))
                    <li><a class="getstarted scrollto bg-primary" href="{{ route('register') }}">S'incrire</a></li>
                    @endif
                @endauth
            @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Votez en ligne chez vous et obtenez le resultat</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Le vote en ligne n'a jamais ete aussi facile. Nous vous accompagnons tout au long du processus </h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Explorer davantage</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('assets/Img/vote.jpg')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Nous sommes</h3>
              <h2>Une equipe de jeune developpeur issue du programme Tech4sahel.</h2>
              <p>
                Nous avons l'ambition de digitaliser l'ensemble des processus des elections au Mali <br>
                Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
              </p>
              <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Lire plus</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('assets/Img/IMG-20220324-WA0050.jpg') }}" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Nos Valeurs</h2>
          <p>Odit est perspiciatis laborum et dicta</p>
        </header>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="{{ asset('assets/theme/img/values-1.png') }}" class="img-fluid" alt="">
              <h3>Ad cupiditate sed est odio</h3>
              <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="{{ asset('assets/theme/img/values-2.png') }}" class="img-fluid" alt="">
              <h3>Voluptatem voluptatum alias</h3>
              <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="{{ asset('assets/theme/img/values-3.png') }}" class="img-fluid" alt="">
              <h3>Fugit cupiditate alias nobis.</h3>
              <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
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
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Utilisateurs</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Elections</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="102" data-purecounter-duration="1" class="purecounter"></span>
                <p>Fedbacks</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="630" data-purecounter-duration="1" class="purecounter"></span>
                <p>Utilisateurs</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Nos Services</h2>
          <p>De l'assistance à la configuration
            en passant par le service complet.
            </p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-box blue">
              <i class="ri-discuss-line icon"></i>
              <h3>Configuration du vote</h3>
              <p>
                Votre expert électoral terminera la configuration pour s'assurer que votre vote répond à vos besoins. Nous allons configurer les paramètres de vote, les bulletins de vote personnalisés et l'avis de calendrier ! Et si vous avez besoin de vous conformer à des règlements administratifs, des statuts ou des lois, nous travaillerons également avec votre conseiller juridique !
              </p>
              <a href="#" class="read-more"><span>Lire plus</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-box orange">
              <i class="ri-discuss-line icon"></i>
              <h3>Assistance dédiée</h3>
              <p>
                Votre expert électoral vous accompagne des exigences aux résultats. Vous vous rencontrerez en ligne pour examiner les besoins et tester. Pendant le vote, l'aide est un appel téléphonique pour des questions sur la gestion des électeurs ou des demandes de renseignements. Ou pour les réunions, votre expert assiste en utilisant la vidéo, ou dirige les votes.
              </p>
              <a href="#" class="read-more"><span>Lire plus</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box green">
              <i class="ri-discuss-line icon"></i>
              <h3>Communication des résultats</h3>
              <p>
                Votre expert électoral vous guide pour fournir rapidement des résultats observables et précis, ainsi que des conseils sur le partage des résultats avec vos électeurs. Et si votre vote nécessite un décompte personnalisé ou une attestation d'un tiers ou une autre aide à la déclaration, il vous suffit de demander !
              </p>
              <a href="#" class="read-more"><span>Lire plus</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box red">
              <i class="ri-discuss-line icon"></i>
              <h3>Services techniques</h3>
              <p>
                Nos experts vous conseillent sur les meilleures pratiques pour permettre à votre vote de se conformer aux normes de vote étatiques, provinciales ou fédérales et aux exigences spécifiques de l'industrie, et pour garantir que votre élection ou réunion est transparente, vérifiable et observable de manière indépendante. Ou demandez à nos experts tiers indépendants et impartiaux de surveiller le vote en direct à distance ou sur place.
              </p>
              <a href="#" class="read-more"><span>Lire plus</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box purple">
              <i class="ri-discuss-line icon"></i>
              <h3>Certification des résultats</h3>
              <p>
                Si votre vote nécessite une attestation pour respecter les statuts ou la législation de l'État, de la province ou du gouvernement fédéral, ou si vous avez besoin de faire examiner votre processus par des observateurs externes, nos experts travaillent avec votre équipe pour assurer la vérifiabilité et la conformité, ainsi que la délivrance d'un rapport de certification pour certifier le processus et les résultats du vote en tant que tiers indépendant.
              </p>
              <a href="#" class="read-more"><span>Lire plus</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box pink">
              <i class="ri-discuss-line icon"></i>
              <h3>Expertise en intégration</h3>
              <p>
                Si vous avez des systèmes ou des processus qui font partie intégrante de la façon dont votre organisation vote, nos experts travaillent avec votre équipe technique sur des stratégies d'API pour partager les détails des électeurs, voter à partir de votre site Web ou de votre système de gestion des membres, ou mettre à jour les détails de l'engagement des électeurs. Ou faites également appel à notre équipe technologique pour développer et mettre en œuvre des processus !
              </p>
              <a href="#" class="read-more"><span>Lire plus</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>F.A.Q</h2>
          <p>Questions Frequemment Posées</p>
        </header>

        <div class="row">
          <div class="col-lg-6">
            <!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    L'utilisation de l'application est elle gratuite?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    Quelles sont les risques de corruption des donnees?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    Quelles mesures à adopter pour la securite?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6">

            <!-- F.A.Q List 2-->
            <div class="accordion accordion-flush" id="faqlist2">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                    Quelles les limites du systeme?
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                    Puis-je me faire assister par un expert ?
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                    L'application est-elle disponible partout?
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section><!-- End F.A.Q Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Temoingnages</h2>
          <p>Ce que pensent les futurs utilisateurs</p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('assets/theme/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                  <h3>Modibo Keita</h3>
                  <h4>Ceo &amp; Fondateur</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('assets/theme/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                  <h3>Sidy Lamine Diakite</h3>
                  <h4>Charger Promotions</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/theme/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Fatoumata Konta</h3>
                  <h4>Designer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('assets/theme/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                  <h3>Aissata Diakite</h3>
                  <h4>Developpeuse</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('assets/theme/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                  <h3>Amara Sissoko</h3>
                  <h4>Expert Technicien Informatique</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- End Testimonials Section -->

    <!-- ======= sponsors Section ======= -->
    <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          {{-- <h2>Our sponsors</h2> --}}
          <p>Ils nous soutiennent</p>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ asset('assets/sponsor/cda_logo.jpg') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/sponsor/ceni_mali.jpg') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/sponsor/logo_gouv.jpg') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/sponsor/makeSense_logo.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/sponsor/orange_logo.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/sponsor/yeleenMa_logo.jpg') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/sponsor/logo_gouv.jpg') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/sponsor/makeSense_logo.png') }}" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- End Clients Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contacts</h2>
          <p>Contactez Nous</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Adresse</h3>
                  <p>Bacodjicoroni<br>Bamako</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Appelez-nous</h3>
                  <p>+223 44 23 45 61<br>+223 7920 9337</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Nous laissez un email</h3>
                  <p>kalata-contact@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Nous sommes disponible</h3>
                  <p>Lundi - Samedi<br>8:00 du matin - 20:00 du soir</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="votre nom" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="votre email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="objet" placeholder="objet" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Votre message a bien ete envoyer. Merci!</div>

                  <button type="submit">Envoyer message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="{{ asset('KALATA-Logo-Officiel.png')}}" alt="">
              <span>Kalata</span>
            </a>
            {{-- <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p> --}}
            <div class="social-links mt-5">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Menu du bas</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Accueil</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">A propos de nous</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Guide pratique</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Termes du contrat</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Fonctionnalités Supportées</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Programmer vote</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Rapport analytiques</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Notifications</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Voter</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">PDF telechargeable</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Nos Contacts</h4>
            <p>
              Bacodjicoroni <br>
              Bamako<br>
              Mali <br><br>
              <strong>Phone:</strong> +223 44 23 45 61<br>
              <strong>Email:</strong> kalata-info@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Kalata</span></strong>. Tous droits reservés
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Developpé par <a href="#">Keita Modibo</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/theme/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/theme/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/theme/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/theme/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/theme/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/theme/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/theme/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/theme/js/main.js') }}"></script>

</body>

</html>
