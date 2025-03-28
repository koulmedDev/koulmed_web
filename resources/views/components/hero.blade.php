{{-- <section id="hero" class="hero section">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h2 class="text-white">Koulmed, Mon Hôpital à portée de mains</h2>
          <p class="text-white">Des soins médicaux à domicile, simplement et rapidement à Lomé</p>
        </div>

        <div class="col-lg-6">
          <div class="hero-img">
            <img src="{{asset('images/medecin-avec-femme.png')}}" class="img-fluid rounded" alt="Médecin prenant la tension d'une patiente">
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-12">
          <div class="logos-container bg-dark p-3 rounded d-flex justify-content-around align-items-center">
            <div class="logo-item text-secondary">
              <i class="bi bi-moon"></i> Logoipsum
            </div>
            <div class="logo-item text-secondary">
              <i class="bi bi-x-circle"></i> Logoipsum
            </div>
            <div class="logo-item text-secondary">
              <i class="bi bi-sun"></i> Logoipsum
            </div>
            <div class="logo-item text-secondary">
              <i class="bi bi-lightning"></i> Logoipsum
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

   <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
            <img src="{{asset('images/medecin-avec-femme.png')}}" alt="">
            <div class="container">
              <h2>Koulmed, Mon Hôpital à portée de mains</h2>
              <p>Des soins médicaux à domicile, simplement et rapidement à Lomé</p>

<!-- ------------------------------------------------------------------ -->

<!-- J'ai commenté le code d'abonnment à la newsletter pour le moment car il n'est pas encore fonctionnel -->
<!-- ------------------------------------------------------------------ -->
              <!-- Nouveau formulaire d'inscription remplaçant le bouton Read More -->
              <!-- <div class="newsletter-form">
                <div class="input-group">
                  <input type="email" class="form-control" placeholder="Entrez votre mail" aria-label="Adresse email">
                  <button class="btn btn-subscribe" type="button">S'abonner à Koulmed</button>
                </div>
              </div>
            </div> -->
<!-- ------------------------------------------------------------------ -->
          </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="{{asset('images/prise-de-sang.jpg')}}" alt="">
          <div class="container">
            <h2>Prise de Sang à Domicile</h2>
            <p>Bénéficiez d'analyses médicales sans vous déplacer. Nos professionnels qualifiés se rendent à votre domicile pour effectuer vos prélèvements sanguins dans le confort de votre foyer. Service rapide, sécurisé et adapté à tous, particulièrement aux personnes à mobilité réduite et aux personnes âgées.</p>
            <a href="#appointment" class="btn-get-started">Commander</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="{{asset('images/pharmacie.jpg')}}" alt="">
          <div class="container">
            <h2>Pharmacies de Garde à Votre Service</h2>
            <p>Accédez instantanément aux informations sur les pharmacies de garde à Lomé, 24h/24 et 7j/7. Cherchez les pharmacies ouvertes les plus proches de chez vous, leurs horaires et itinéraires. En cas d'urgence médicale, ne perdez plus de temps à chercher une pharmacie disponible</p>
            <a href="/pharmacies-on-duty" class="btn-get-started">Chercher une pharmacie de garde</a>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->
