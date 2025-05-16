/**
* Template Name: Medicio
* Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
* Updated: Aug 07 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function() {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  mobileNavToggleBtn.addEventListener('click', mobileNavToogle);

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Auto generate the carousel indicators
   */
  document.querySelectorAll('.carousel-indicators').forEach((carouselIndicator) => {
    carouselIndicator.closest('.carousel').querySelectorAll('.carousel-item').forEach((carouselItem, index) => {
      if (index === 0) {
        carouselIndicator.innerHTML += `<li data-bs-target="#${carouselIndicator.closest('.carousel').id}" data-bs-slide-to="${index}" class="active"></li>`;
      } else {
        carouselIndicator.innerHTML += `<li data-bs-target="#${carouselIndicator.closest('.carousel').id}" data-bs-slide-to="${index}"></li>`;
      }
    });
  });

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * Frequently Asked Questions Toggle
   */
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

  /**
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  window.addEventListener('load', function(e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        setTimeout(() => {
          let section = document.querySelector(window.location.hash);
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  });

  /**
   * Navmenu Scrollspy
   */
  let navmenulinks = document.querySelectorAll('.navmenu a');

  function navmenuScrollspy() {
    navmenulinks.forEach(navmenulink => {
      if (!navmenulink.hash) return;
      let section = document.querySelector(navmenulink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
        navmenulink.classList.add('active');
      } else {
        navmenulink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navmenuScrollspy);
  document.addEventListener('scroll', navmenuScrollspy);

})();


// script d'envoi des informations de prise de rendez vous
document.addEventListener('DOMContentLoaded', function() {
    const appointmentForm = document.getElementById('appointmentForm');

    appointmentForm.addEventListener('submit', function(e) {
        e.preventDefault();

        // Collecter les données du formulaire
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const service = document.getElementById('service').value;
        const location = document.getElementById('location').value;
        const message = document.getElementById('message').value;

        // Construire le message WhatsApp
        const whatsappMessage = `
*Nouveau rendez-vous médical*
*Nom*: ${name}
*Email*: ${email}
*Téléphone*: ${phone}
*Service*: ${service === 'consultation' ? 'Consultations et soins médicaux à domicile' : 'Prise de sang à domicile pour analyses médicales'}
*Localisation*: ${location}
*Message*: ${message}
        `;

        // Encodage du message pour l'URL
        const encodedMessage = encodeURIComponent(whatsappMessage);

        const whatsappNumber = "22891259103";

        // lien WhatsApp compatible avec tous les appareils
        const whatsappLink = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;

        // Détection de l'appareil iOS
        const isIOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;

        // Afficher le message de chargement
        document.querySelector('.loading').style.display = 'block';

        // Simuler un délai pour l'envoi
        setTimeout(function() {
            // Masquer le message de chargement
            document.querySelector('.loading').style.display = 'none';

            // Afficher le message de succès
            document.querySelector('.sent-message').style.display = 'block';

            // Pour iOS, utiliser une approche différente
            if (isIOS) {
                // Créer un lien temporaire et déclencher un clic
                const tempLink = document.createElement('a');
                tempLink.setAttribute('href', whatsappLink);
                tempLink.setAttribute('target', '_blank');
                tempLink.setAttribute('rel', 'noopener noreferrer');
                tempLink.style.display = 'none';
                document.body.appendChild(tempLink);
                tempLink.click();

                // Alternative: essayer d'ouvrir directement avec window.location
                setTimeout(() => {
                    window.location = whatsappLink;
                }, 300);
            } else {
                // Pour les autres appareils, utiliser window.open comme avant
                window.open(whatsappLink, '_blank');
            }

            // Réinitialiser le formulaire après un court délai
            setTimeout(function() {
                appointmentForm.reset();
                document.querySelector('.sent-message').style.display = 'none';
            }, 3000);
        }, 1500);
    });
});


// script pour l'api de geolocalisation
let map;
let marker;

    document.getElementById('location').addEventListener('click', function () {
        // Affiche la carte
        document.getElementById('map').style.display = 'block';
        document.getElementById('confirmLocation').style.display = 'inline-block';

        // Obtenir la géolocalisation
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                const userLocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                // Afficher la carte centrée sur l'utilisateur
                map = new google.maps.Map(document.getElementById('map'), {
                    center: userLocation,
                    zoom: 16
                });

                // Placer un marqueur
                marker = new google.maps.Marker({
                    position: userLocation,
                    map: map,
                    draggable: true
                });
            }, function (error) {
                alert("Erreur de géolocalisation : " + error.message);
            });
        } else {
            alert("Votre navigateur ne supporte pas la géolocalisation.");
        }
    });

    document.getElementById('confirmLocation').addEventListener('click', function () {
        const lat = marker.getPosition().lat();
        const lng = marker.getPosition().lng();
        const mapsUrl = `https://www.google.com/maps?q=${lat},${lng}`;

        document.getElementById('location').value = mapsUrl;

        // Cacher la carte et le bouton
        document.getElementById('map').style.display = 'none';
        document.getElementById('confirmLocation').style.display = 'none';
    });
