<section id="appointment" class="appointment section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Prendre un rendez-vous maintenant</h2>
      <p>Si vous souhaitez prendre un rendez-vous, remplissez vos informations dans les champs ci-dessous.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <form id="appointmentForm" role="form" class="php-email-form">
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom complet" required>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Numéro de téléphone" required>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-md-12 form-group">
            <div class="input-group">
              <input type="text" class="form-control" id="location" name="location" placeholder="Votre localisation" readonly required>
              <button class="btn btn-outline-secondary" type="button" id="getLocation">
                <i class="bi bi-geo-alt"></i> Localiser
              </button>
            </div>
            <div id="map" style="height: 0; overflow: hidden; transition: height 0.3s;"></div>
          </div>
        </div>

        <div class="form-group mt-3">
          <textarea class="form-control" name="message" id="message" rows="5" placeholder="Décrivez l'état du patient..."></textarea>
        </div>
        <div class="mt-3">
          <div class="loading">Veuillez patienter...</div>
          <div class="error-message"></div>
          <div class="sent-message">Votre prise de rendez-vous a été envoyée. Merci!</div>
          <div class="text-center"><button type="submit">Envoyer</button></div>
        </div>
      </form>

    </div>

</section>


