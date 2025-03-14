<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Koulmed</title>
  <link rel="icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
  <!-- Header -->
  <header>
    <div class="logo-container">
      <img src="{{asset('images/logo.png')}}" alt="Koulmed Logo" class="logo">
    </div>

    <div class="hamburger" onclick="toggleMenu()">
      <div></div>
      <div></div>
      <div></div>
    </div>

    <ul class="nav-menu" id="navMenu">
      <li><a href="#">Accueil</a></li>
      <li><a href="#">Nos Services</a></li>
      <li><a href="#">À propos de nous</a></li>
      <li><a href="#">Contact</a></li>
    </ul>

    <div class="header-buttons">
      <button class="btn-rdv">Prendre un rendez-vous</button>
      <button class="btn-connect">Se connecter</button>
    </div>
  </header>

  <!--  contenu  -->
  <main>
    <div style="padding: 50px; text-align: center;">
      <h1>Contenu principal</h1>
      <p>Cette partie serait remplacée par votre contenu.</p>
    </div>
  </main>

  <!-- Footer -->
  <footer>
    <ul class="footer-nav">
      <li><a href="#">Nos Services</a></li>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">À propos de nous</a></li>
      <li><a href="#">Contact</a></li>
    </ul>

    <div class="social-icons">
      <a href="#" aria-label="Facebook">
        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
          <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
        </svg>
      </a>
      <a href="#" aria-label="Twitter">
        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
          <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723 9.99 9.99 0 01-3.127 1.195 4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
        </svg>
      </a>
      <a href="#" aria-label="YouTube">
        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
          <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
        </svg>
      </a>
    </div>

    <div class="copyright">
      © Copyright 2025 - powered by koulmed
    </div>
  </footer>

  <script src="{{asset('js/script.js')}}"></script>
</body>
</html>
