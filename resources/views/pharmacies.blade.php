<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacies de Garde - Lomé</title>
    <link href="{{asset('images/logotype.png')}}" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2563eb;
            --secondary: #10b981;
            --light: #f0fdf4;
            --dark: #1e293b;
            --accent: #f97316;
            --gray: #94a3b8;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background-color: #f8fafc;
            color: var(--dark);
            line-height: 1.6;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e2e8f0;
        }

        .logo-container {
            margin-bottom: 16px;
        }

        .logo {
            height: 70px;
            margin-bottom: 10px;
        }

        h1 {
            color: var(--primary);
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .period {
            display: inline-block;
            background-color: var(--light);
            color: var(--secondary);
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 1.1rem;
            margin-top: 12px;
            border: 1px solid #d1fae5;
        }

        .search-container {
            margin: 24px auto;
            max-width: 500px;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 14px 20px 14px 50px;
            border: 1px solid #e2e8f0;
            border-radius: 50px;
            font-size: 1rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.1);
        }

        .search-icon {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
        }

        .pharmacy-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .pharmacy-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border: 1px solid #f1f5f9;
            position: relative;
        }

        .pharmacy-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            border-color: #e2e8f0;
        }

        .pharmacy-content {
            padding: 20px;
        }

        .pharmacy-header {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
        }

        .icon-container {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 16px;
            flex-shrink: 0;
        }

        .icon-container i {
            color: white;
            font-size: 1.5rem;
        }

        .pharmacy-name {
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--dark);
            margin-bottom: 4px;
        }

        .pharmacy-details {
            margin-left: 66px;
        }

        .address {
            color: var(--gray);
            margin-bottom: 14px;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .contact-btn {
            display: flex;
            align-items: center;
            background-color: var(--light);
            color: var(--secondary);
            padding: 8px 16px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.95rem;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            text-decoration: none;
            width: fit-content;
        }

        .contact-btn:hover {
            background-color: var(--secondary);
            color: white;
        }

        .contact-btn i {
            margin-right: 8px;
        }

        .footer {
            text-align: center;
            margin-top: 60px;
            padding-top: 20px;
            border-top: 1px solid #e2e8f0;
            color: var(--gray);
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .pharmacy-grid {
                grid-template-columns: 1fr;
            }

            body {
                padding: 16px;
            }

            h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo-container">
        <img src="{{asset('images/logo.png')}}" alt="Koulmed Logo" class="logo" height="60px">
        </div>
        <h1>Pharmacies de Garde - Lomé</h1>
        <span class="period">
            <i class="fas fa-calendar-alt"></i>
            Du 21 au 28 Avril 2025
        </span>
    </div>

    <div class="search-container">
        <i class="fas fa-search search-icon"></i>
        <input type="text" id="searchInput" class="search-input" placeholder="Rechercher une pharmacie par nom ou quartier...">
    </div>

    <div class="pharmacy-grid" id="pharmacyGrid">
        <!-- Les pharmacies seront générées dynamiquement ici -->
    </div>

    <div class="footer">
        <p>© 2025 Koulmed - Liste mise à jour le 21 Avril 2025</p>
    </div>

    <script>
        // Données des pharmacies
        const pharmacies = [
  {
    "name": "PHARMACIE ABRAHAM",
    "address": "Agoè Lohopé Kossigan",
    "phone": "22 50 10 00"
  },
  {
    "name": "PHARMACIE ACTUELLE",
    "address": "Route ségbé, sagbado, BP 3622",
    "phone": "22 51 11 72"
  },
  {
    "name": "PHARMACIE ADIDOGOME",
    "address": "Avenue du 30 Août, adidogomé, 04 BP 224 Lomé 04",
    "phone": "22 25 54 85"
  },
  {
    "name": "PHARMACIE ALTA",
    "address": "Agoè Anonkui Route Mission Tové en face du Centre Culturel Loyola",
    "phone": "22259447"
  },
  {
    "name": "PHARMACIE AMESSIAME",
    "address": "Bd. F H Boigny près du marché de Bè, BP 61720",
    "phone": "22 21 49 74"
  },
  {
    "name": "PHARMACIE APOLLON",
    "address": "Hétsiavi, avédji, 08 BP 80507",
    "phone": "70 41 01 07"
  },
  {
    "name": "PHARMACIE APOTHEKA",
    "address": "5122, bd jean Paul II, face siège fédération togolaise de Football kégué, BP 31124",
    "phone": "22 61 57 57"
  },
  {
    "name": "PHARMACIE ASSURANCE",
    "address": "Adétikopé, Nationale N° 1, non loin du marché",
    "phone": "93 08 76 76"
  },
  {
    "name": "PHARMACIE AVE MARIA",
    "address": "Carrefour CHU Tokoin face station-service BP 80283",
    "phone": "22 22 33 01"
  },
  {
    "name": "PHARMACIE BAH",
    "address": "2283, Bd. Du Zio, face EPP, Hédzranawoè, BP 20519",
    "phone": "22 26 03 20"
  },
  {
    "name": "PHARMACIE BEL AIR",
    "address": "1 rue du commerce, face cinéma OPERA BP 13115",
    "phone": "22 21 03 21"
  },
  {
    "name": "PHARMACIE CITRUS",
    "address": "ATTIEGOU CARREFOUR DVA SUR LE CONTOURNEMENT LOME",
    "phone": "70 44 59 24"
  },
  {
    "name": "PHARMACIE CLEMENCE",
    "address": "Route de la Cour d'appel, entre la CEET et l'Ecole privée LA SOURCE",
    "phone": "70 19 35 35"
  },
  {
    "name": "PHARMACIE DE L'UNION",
    "address": "Bd ; mafakassa Bè KPOTA BP 2735",
    "phone": "22 27 71 64"
  },
  {
    "name": "PHARMACIE DE SEGBE",
    "address": "Ségbé, quartier Zanvi,, près de l'EPP et du CEG Ségbé",
    "phone": "90 59 49 35"
  },
  {
    "name": "PHARMACIE DIEUDONNE",
    "address": "Route LEO 2000, non loin de FUCEC, Agoè-Téléssou, BP 7951",
    "phone": "23 38 07 44"
  },
  {
    "name": "PHARMACIE DIVINA GRACIA",
    "address": "Agoè fiovi, rond point Cool Catche",
    "phone": "93 83 91 00"
  },
  {
    "name": "PHARMACIE DJIDJOLE",
    "address": "93 rue Pya BP 8539",
    "phone": "22 25 65 12"
  },
  {
    "name": "PHARMACIE DU 3e ARRONDISSEMENT",
    "address": "219, boulevard du 13 Janvier, BP 2847",
    "phone": "22 21 52 27"
  },
  {
    "name": "PHARMACIE DU CAMPUS",
    "address": "Bd. De la Kara, adéwui, BP 20217",
    "phone": "96 80 08 85"
  },
  {
    "name": "PHARMACIE DU PORT",
    "address": "Bd. Du mono, face SARAKAWA, Ablogamé, BP 12999",
    "phone": "22 27 61 88"
  },
  {
    "name": "PHARMACIE HORIZON",
    "address": "95, boulevard du 13 Janvier, Nyekonakpoè, 08 BP 81726",
    "phone": "90 56 52 56"
  },
  {
    "name": "PHARMACIE ISIS",
    "address": "835, boulevard Jean Paul II, forever, BP 80121",
    "phone": "22 26 90 91"
  },
  {
    "name": "PHARMACIE LA FRATERNITE",
    "address": "72, boulevard du Haho, près de clinique st Joseph, BP 80326",
    "phone": "22 26 81 55"
  },
  {
    "name": "PHARMACIE LA MAIN DE DIEU",
    "address": "Agoè nouveau marché, vers le camp de police",
    "phone": "22 52 77 55"
  },
  {
    "name": "PHARMACIE LA RUCHE",
    "address": "Attiegou derrière la clôture de l'aéroport voie menant au Grand Contournement, non loin de l'école les Savoirs",
    "phone": "91541616"
  },
  {
    "name": "PHARMACIE LE DESTIN",
    "address": "Route d'Aného, Imm. ECOBANK, Baguida, 01 BP 2691",
    "phone": "22 41 15 41"
  },
  {
    "name": "PHARMACIE LE PROGRES",
    "address": "Akodésséwa Kponou (Zorro-bar), 06 BP 60986",
    "phone": "22 35 86 55"
  },
  {
    "name": "PHARMACIE L'AMITIE",
    "address": "72, avenue des hydrocarbures, entre soted et togogaz ; tokoin, BP 8648",
    "phone": "22 21 74 47"
  },
  {
    "name": "PHARMACIE MILLENAIRE",
    "address": "Adidoadin, 05 BP 64",
    "phone": "22 51 64 31"
  },
  {
    "name": "PHARMACIE NOTRE DAME",
    "address": "Rte de l'Aéroport entre la foire TOGO 2000 et l'Aéroport",
    "phone": "96 80 10 12"
  },
  {
    "name": "PHARMACIE OSSAN",
    "address": "Carrefour d'Avédji, BP 869",
    "phone": "70 40 44 25"
  },
  {
    "name": "PHARMACIE PRINCIPALE",
    "address": "Rte d'Aného Kpogan Yovo Kopé",
    "phone": "90826767"
  },
  {
    "name": "PHARMACIE SAINT JOSEPH",
    "address": "Rue Bretelle, Avenue de la RP, Bè Klikamé, BP 13000",
    "phone": "22 25 74 65"
  },
  {
    "name": "PHARMACIE SAINT MICHEL",
    "address": "Près de la Brasserie BB, 05 BP 201",
    "phone": "22 51 70 22"
  },
  {
    "name": "PHARMACIE SAINT PHILIPPE",
    "address": "Zanguéra, Route Lomé-Kpalimé, près de la station de service OANDO",
    "phone": "90 67 33 24"
  },
  {
    "name": "PHARMACIE SAINT PIO",
    "address": "Klobatèmé, non loin du CMS Klobatèmé à côté du Complexe Scolaire Bon Samaritain",
    "phone": "93404040"
  },
  {
    "name": "PHARMACIE SAINTE MARIE",
    "address": "Avenue de la libération, Limusco, Tokoin Ramco, BP 297",
    "phone": "22 21 85 58"
  },
  {
    "name": "PHARMACIE SILOE",
    "address": "Carrefour Atigangomé, Adidogomé A pédokoe, 07 BP 7189",
    "phone": "90 80 26 39"
  },
  {
    "name": "PHARMACIE TAKOE",
    "address": "Rte d'Atakpamé, Face Terminal Sahel, Togblekopé, BP 8408",
    "phone": "70 45 62 17"
  },
  {
    "name": "PHARMACIE VIGUEUR",
    "address": "267, rue Agbalépédo, 05 BP 02",
    "phone": "22 51 63 30"
  },
  {
    "name": "PHARMACIE WASTINE",
    "address": "Adidogomé Logoté, à 400m du carrefour Logoté sur la route menant au quartier Lankouvi",
    "phone": "92611700"
  },
  {
    "name": "PHARMACIE YEM-BLA",
    "address": "Rue 258, avenue Akwei, face Résidence du Benin, Tokoin-Tamé, Wuiti, BP 20633",
    "phone": "22 26 76 51"
  },
  {
    "name": "PHARMACIE YESHUA",
    "address": "Agoè - Vakpossito vers l'école NDE, entre le CMS Mur et le CMS Maranatha",
    "phone": "98772153"
  },
  {
    "name": "PHARMACIE ZONGO",
    "address": "Togblékopé carrefour Hermann entre Orabank et la station Sanol Togblékopé",
    "phone": "70 49 96 55"
  },
  {
    "name": "PHARMACIE ZOSSIME",
    "address": "Zossimé, route de Sanguéra près du marché de Zossimé",
    "phone": "99 99 80 75"
  }

];

        // Fonction pour générer les cartes de pharmacies
        function generatePharmacyCards(pharmaciesArray) {
            const pharmacyGrid = document.getElementById('pharmacyGrid');
            pharmacyGrid.innerHTML = '';

            pharmaciesArray.forEach(pharmacy => {
                const card = document.createElement('div');
                card.className = 'pharmacy-card';

                card.innerHTML = `
                    <div class="pharmacy-content">
                        <div class="pharmacy-header">
                            <div class="icon-container">
                                <i class="fas fa-prescription-bottle-alt"></i>
                            </div>
                            <div>
                                <div class="pharmacy-name">${pharmacy.name}</div>
                            </div>
                        </div>
                        <div class="pharmacy-details">
                            <div class="address">${pharmacy.address}</div>
                            <a href="tel:${pharmacy.phone.replace(/\s/g, '')}" class="contact-btn">
                                <i class="fas fa-phone-alt"></i> ${pharmacy.phone}
                            </a>
                        </div>
                    </div>
                `;

                pharmacyGrid.appendChild(card);
            });
        }

        // Initialiser l'affichage des pharmacies
        generatePharmacyCards(pharmacies);

        // Fonctionnalité de recherche
        const searchInput = document.getElementById('searchInput');
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const filteredPharmacies = pharmacies.filter(pharmacy =>
                pharmacy.name.toLowerCase().includes(searchTerm) ||
                pharmacy.address.toLowerCase().includes(searchTerm)
            );
            generatePharmacyCards(filteredPharmacies);
        });
    </script>
</body>
</html>
