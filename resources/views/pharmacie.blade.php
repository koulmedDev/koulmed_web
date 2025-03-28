<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KOULMED</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('images/logo.png')}}" rel="icon">
  <link href="{{asset('Med/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('Med/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('Med/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('Med/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('Med/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('Med/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('Med/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('Med/assets/css/main.css')}}" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header sticky-top">



        <div class="branding d-flex align-items-center">

          <div class="container position-relative d-flex align-items-center justify-content-end">
            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <img src="{{asset('images/logo.png')}}" alt="Koulmed Logo" class="logo" height="60px">
            </a>

            <nav id="navmenu" class="navmenu">
              <ul>
                <li><a href="#hero" class="active">Accueil</a></li>

                <li><a href="#featured-services">Nos services</a></li>
                <li><a href="#features">A propos de nous</a></li>
                <li><a href="#pharmacies-on-duty">Pharmacie de garde</a></li>
                {{-- <li><a href="#departments">Departments</a></li>
                <li><a href="#doctors">Doctors</a></li>
                <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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
                </li> --}}
                <li><a href="#contact">Contact</a></li>
              </ul>
              <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="cta-btn" href="#appointment">Prendre un rendez-vous</a>

          </div>

        </div>

      </header>


  <!-- Contenu-->
  <main class="main">
    <section id="pharmacies-on-duty" class="pharmacies-on-duty section">
        <!-- Titre principal avec animation -->
        <div class="container text-center" data-aos="zoom-in">
            <h1 class="display-4 fw-bold mb-3">Pharmacies de Garde</h1>
            <p class="lead text-muted mb-5">Trouvez rapidement une pharmacie de garde parmi celle qui sont ouvert cette semaine, disponible 24/7 pour vos besoins urgents.</p>
        </div>

        <!-- Liste des pharmacies -->
        <div class="container">
            <div class="row g-4">
                @foreach($pharmacies as $pharmacie)
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="card pharmacy-card h-100 shadow-sm border-0">
                            <div class="card-body text-center">
                                <!-- Icône animée -->
                                <div class="icon mb-3">
                                    <i class="fas fa-prescription-bottle-alt fa-3x text-success animate__animated animate__pulse animate__infinite"></i>
                                </div>
                                <!-- Nom de la pharmacie -->
                                <h5 class="card-title fw-bold">{{ $pharmacie->name }}</h5>
                                <!-- Informations supplémentaires -->
                                <p class="card-text text-muted">
                                    <i class="fas fa-map-marker-alt me-2"></i>{{ $pharmacie->address }}<br>
                                    <i class="fas fa-phone me-2"></i>{{ $pharmacie->phone }}<br>
                                    {{-- <i class="fas fa-clock me-2"></i>Ouvre jusqu'à {{ $pharmacie->closing_time ?? 'inconnu' }} --}}
                                </p>
                                <!-- Bouton stylé -->
                                {{-- <a href="#" class="btn btn-outline-success btn-sm">Voir sur la carte</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Ajout de styles personnalisés -->
    <style>
        .pharmacy-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .pharmacy-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
        }
        .icon i {
            color: #77BA25;
        }
    </style>

    <!-- Ajout de la bibliothèque Animate.css pour les animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  </main>

  <footer id="footer" class="footer " style="background-color: #0055A4; color: white ">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="#hero" class="logo d-flex align-items-center">
            <img src="{{asset('images/logo-blanc.png')}}" alt="Koulmed Logo" class="logo" height="500px">
          </a>
          {{-- <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div> --}}
          <div class="social-links d-flex mt-4" >
            <a href=""><i class="bi bi-twitter-x" ></i></a>
            <a href=""><i class="bi bi-facebook" ></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin" ></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4 style="color: white">Menus</h4>
          <ul>
            <li><a href="#featured-services">Nos services</a></li>
            <li><a href="#features">A propos de nous</a></li>
            <li><a href="#blogs">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
            {{-- <li><a href="#">Privacy policy</a></li> --}}
          </ul>
        </div>

 <div class="col-lg-2 col-md-3 footer-links">
          <h4 style="color: white">Liens utiles</h4>
          <ul>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#testimonials">Avis des clients</a></li>
            <li><a href="#appointment">Prendre un rendez-vous</a></li>
            {{-- <li><a href="#">Apportez votre avis</a></li> --}}
            {{-- <li><a href="#">Product Management</a></li>
            <li><a href="#">Graphic Design</a></li> --}}
          </ul>
        </div>

        {{-- <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hic solutasetp</h4>
          <ul>
            <li><a href="#">Molestiae accusamus iure</a></li>
            <li><a href="#">Excepturi dignissimos</a></li>
            <li><a href="#">Suscipit distinctio</a></li>
            <li><a href="#">Dilecta</a></li>
            <li><a href="#">Sit quas consectetur</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nobis illum</h4>
          <ul>
            <li><a href="#">Ipsam</a></li>
            <li><a href="#">Laudantium dolorum</a></li>
            <li><a href="#">Dinera</a></li>
            <li><a href="#">Trodelas</a></li>
            <li><a href="#">Flexo</a></li>
          </ul>
        </div>  --}}

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">KOULMED</strong> <span>All Rights Reserved</span></p>
      {{-- <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> --}}
    </div>

  </footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('Med/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('Med/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('Med/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('Med/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('Med/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('Med/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('Med/assets/js/main.js')}}"></script>
  <!-- Ajoutez ces scripts à la fin de votre document avant la fermeture du body -->
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=VOTRE_CLE_API_GOOGLE&callback=initMap" async defer></script> --}}


</body>

</html>
