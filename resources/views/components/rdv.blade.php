<section id="appointment" class="appointment section light-background">
    <div class="container section-title" data-aos="fade-up">
        <h2>Prendre un rendez-vous maintenant</h2>
        <p>Si vous souhaitez prendre un rendez-vous, que ce soit une consultation à domicile ou prise de sang à domicile
            pour analyses médicales, remplissez vos informations dans les champs ci-dessous.</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        {{-- correction en enlevant la methode et l'action qui posait le problème de l'erreur 405 --}}
        <form id="appointmentForm" role="form" class="php-email-form">
            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="name" class="form-label">Nom complet</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom complet" required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <label for="phone" class="form-label">Numéro de téléphone</label>
                    <input type="number" class="form-control" name="phone" id="phone" placeholder="Numéro de téléphone" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6 form-group">
                    <label for="service" class="form-label">Type de service</label>
                    <select class="form-select" id="service" name="service" required>
                        <option value="">Sélectionnez un service</option>
                        <option value="consultation">Consultations et soins médicaux à domicile</option>
                        <option value="prelevement">Prise de sang à domicile pour analyses médicales</option>
                    </select>
                </div>
                {{-- localisation du user --}}
                <div class="col-md-6 form-group">
                    <label for="location" class="form-label">Localisation (Cliquez sur le champ pour sélectionner votre position actuelle)</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Cliquez pour localiser..." readonly required>

                    <div id="map" style="height: 300px; display: none; margin-top: 10px;"></div>

                    <button type="button" id="confirmLocation" class="btn btn-sm btn-success mt-2" style="display: none;">Valider ma position</button>
                </div>

            </div>

            <div class="form-group mt-3">
                <label for="message" class="form-label">Description du besoin</label>
                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Décrivez vraiment votre besoin..." required></textarea>
            </div>

            <div class="mt-3">
                <div class="loading">Veuillez patienter...</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre prise de rendez-vous a été envoyée. Merci!</div>
                <div class="text-center"><button type="submit" class="btn btn-primary">Envoyer</button></div>
            </div>
        </form>
    </div>
</section>
