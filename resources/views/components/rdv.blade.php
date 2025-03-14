<section id="rdv">
    <div class="rdv-container">
      <div class="rdv-image">
        <img src="{{asset('images/rdv.png')}}" alt="Infirmière avec patient senior">
      </div>
      <div class="rdv-content">
        <h2>Prenez un rendez-vous pour une consultation en ligne</h2>
        <p class="rdv-subtitle">En connectant des patients du monde entier aux meilleurs instructeurs</p>

        <ul class="rdv-benefits">
          <li>
            <span class="rdv-check-icon">✓</span>
            <span class="rdv-benefit-text">Gain de temps</span>
          </li>
          <li>
            <span class="rdv-check-icon">✓</span>
            <span class="rdv-benefit-text">Soins personnalisé</span>
          </li>
          <li>
            <span class="rdv-check-icon">✓</span>
            <span class="rdv-benefit-text">Accès facilité</span>
          </li>
          <li>
            <span class="rdv-check-icon">✓</span>
            <span class="rdv-benefit-text">Suivi pratique</span>
          </li>
        </ul>

        <div class="rdv-button-container">
          <a href="#" class="rdv-button">Prendre un rendez-vous</a>
        </div>
      </div>

      <div class="rdv-doctor-card">
        <div class="rdv-doctor-header">
          <div class="rdv-doctor-profile">
            <div class="rdv-doctor-image">
              <img src="{{asset('images/rdv2.png')}}" alt="Dr. Emmanuel Eklu">
            </div>
            <div class="rdv-doctor-details">
              <h3>Dr. Emmanuel Eklu</h3>
              <p>Infirmier specialist</p>
            </div>
          </div>
          <div class="rdv-video-icon">
            <i class="fas fa-video"></i>
          </div>
        </div>

        <div class="rdv-appointment-time">
          <div class="rdv-calendar-icon">
            <i class="fas fa-calendar-alt"></i>
          </div>
          <div class="rdv-date-details">Mardi 11 Mars 2025 - 23h15</div>
        </div>
      </div>
    </div>
  </section>

  <style>
  #rdv {
    padding: 50px 20px;
    background-color: #f8f9fa;
    font-family: Arial, sans-serif;
  }

  .rdv-container {
    max-width: 1000px;
    margin: 0 auto;
    overflow: hidden;
    position: relative;
    display: flex;
    flex-wrap: wrap;
  }

  .rdv-image {
    width: 50%;
    height: 500px;
    overflow: hidden;
  }

  .rdv-image img {
    width: 100%;
    height: 100%;
    border-radius: 10px
    object-fit: cover;
  }

  .rdv-content {
    width: 50%;
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: center; /* Centre verticalement le contenu */
    height: 500px; /* Même hauteur que l'image */
  }

  .rdv-content h2 {
    font-size: 28px; /* Taille légèrement augmentée */
    color: #0056b3;
    margin-bottom: 15px;
    font-weight: bold;
    line-height: 1.3;
  }

  .rdv-subtitle {
    color: #6c757d;
    margin-bottom: 30px;
    font-size: 16px;
  }

  .rdv-benefits {
    list-style-type: none;
    padding: 0;
    margin-bottom: 30px;
  }

  .rdv-benefits li {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
  }

  .rdv-check-icon {
    color: white;
    background-color: #0056b3;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 10px;
    font-size: 12px;
  }

  .rdv-benefit-text {
    color: #333;
    font-weight: 500;
  }

  .rdv-button-container {
    margin-top: 30px;
  }

  .rdv-button {
    background-color: #0056b3;
    color: white;
    padding: 12px 25px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    display: inline-block;
    text-align: center;
  }

  .rdv-doctor-card {
    position: absolute;
    bottom: 40px;
    left: 180px;
    background-color: white;
    border-radius: 15px;
    padding: 15px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    width: 340px;
  }

  .rdv-doctor-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
    border-bottom: 1px solid #f0f0f0;
    padding-bottom: 15px;
  }

  .rdv-doctor-profile {
    display: flex;
    align-items: center;
  }

  .rdv-doctor-image {
    width: 60px;
    height: 60px;
    border-radius: 10px;
    overflow: hidden;
    margin-right: 15px;
  }

  .rdv-doctor-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .rdv-doctor-details h3 {
    font-size: 18px;
    margin: 0;
    color: #0056b3;
    font-weight: bold;
  }

  .rdv-doctor-details p {
    font-size: 14px;
    margin: 5px 0 0;
    color: #6c757d;
  }

  .rdv-video-icon {
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
  }
  .rdv-video-icon, .rdv-calendar-icon i {
    color: #0056b3;
  }
  .rdv-appointment-time {
    display: flex;
    align-items: center;
  }

  .rdv-calendar-icon {
    color: #6c757d;
    margin-right: 10px;
    font-size: 18px;
  }

  .rdv-date-details {
    font-size: 16px;
    color: #6c757d;
  }
  </style>
