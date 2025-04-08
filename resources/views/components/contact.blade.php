<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <p></p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">
        <div class="col-lg-6 ">
          <div class="row gy-4">

            <div class="col-lg-12">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt"></i>
                <h3>Adresse</h3>
                <p>Lomé</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <a href="tel:+22891259103" style="text-decoration: none; color: inherit;">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Appeler</h3>
                  <p>+228 91259103</p>
                </div>
              </a>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <a href="mailto:koulmedservice@gmail.com" style="text-decoration: none; color: inherit;">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>koulmedservice@gmail.com</p>
                </div>
              </a>
            </div><!-- End Info Item -->

          </div>
        </div>

        <div class="col-lg-6">
            <div class="alert alert-info d-flex align-items-center" role="alert">
                <i class="bi bi-info-circle-fill me-2"></i>
                Vous pouvez nous contacter pour toute question concernant nos services, pour obtenir des renseignements, faire des suggestions ou partager votre avis. Notre équipe se fera un plaisir de vous répondre rapidement.
              </div>

              @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
          <form action="{{ route('contact.send') }}" method="POST" data-aos="fade-up" data-aos-delay="500">
            @csrf
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Votre nom" required="">
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Votre Email" required="">
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Objet" required="">
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                {{-- <div class="loading">Chargement...</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message à été envoyé. Merci!</div> --}}

                <button type="submit" style="background-color: #0055A4; color: white; border: none; padding: 12px 24px; border-radius: 8px; font-size: 16px; font-weight: bold; cursor: pointer; transition: background-color 0.3s;">
                    <i class="bi bi-send me-1"></i> Envoyer
                  </button>
                <a href="https://wa.me/22891259103" target="_blank" class="btn btn-success">
                    <i class="bi bi-whatsapp me-1"></i> Contacter via WhatsApp
                  </a>

              </div>

            </div>
          </form>
        </div>
        <!-- End Contact Form -->

      </div>
    </div>

  </section>
