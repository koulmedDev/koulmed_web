function toggleMenu() {
    const navMenu = document.getElementById('navMenu');
    navMenu.classList.toggle('show');
  }


  document.addEventListener('DOMContentLoaded', function() {
    // Éléments du carrousel
    const carousel = document.querySelector('.services-carousel');
    const cards = carousel.querySelectorAll('.service-card');
    const indicators = document.querySelectorAll('.indicator');
    const prevBtn = document.querySelector('.carousel-prev');
    const nextBtn = document.querySelector('.carousel-next');

    // Ne mettre en place le carrousel que si on est en mode responsive
    function setupCarousel() {
        if (window.innerWidth <= 768) {
            let currentSlide = 0;
            const slideWidth = cards[0].offsetWidth + 30; // Inclure les marges

            // Fonction pour aller à une diapositive spécifique
            function goToSlide(index) {
                if (index < 0) index = 0;
                if (index >= cards.length) index = cards.length - 1;

                currentSlide = index;
                carousel.scrollLeft = slideWidth * currentSlide;

                // Mettre à jour les indicateurs
                indicators.forEach((indicator, i) => {
                    indicator.classList.toggle('active', i === currentSlide);
                });
            }

            // Gérer le clic sur les indicateurs
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => goToSlide(index));
            });

            // Gérer les boutons de navigation
            if (prevBtn && nextBtn) {
                prevBtn.addEventListener('click', () => goToSlide(currentSlide - 1));
                nextBtn.addEventListener('click', () => goToSlide(currentSlide + 1));
            }

            // Initialiser à la première diapositive
            goToSlide(0);
        }
    }

    // Configurer le carrousel au chargement et au redimensionnement
    setupCarousel();
    window.addEventListener('resize', setupCarousel);
});
