<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacies de Garde - Lomé</title>
    {{-- <link href="{{ asset('images/logotype.png') }}" rel="icon"> --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logotype.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logotype.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logotype.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/logotype.png') }}">
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
            <img src="{{ asset('images/logo.png') }}" alt="Koulmed Logo" class="logo" height="60px">
        </div>
        <h1>Pharmacies de Garde - Lomé</h1>
        <span class="period">
            <i class="fas fa-calendar-alt"></i>
            Du  02 au 09 Juin 2025
        </span>
    </div>

    <div class="search-container">
        <i class="fas fa-search search-icon"></i>
        <input type="text" id="searchInput" class="search-input"
            placeholder="Rechercher une pharmacie par nom ou quartier...">
    </div>

    <div class="pharmacy-grid" id="pharmacyGrid">
        <!-- Les pharmacies seront générées dynamiquement ici -->
    </div>

    <div class="footer">
        <p>© 2025 Koulmed - Liste mise à jour le 03 Juin 2025</p>
    </div>

    <script>
        // Données des pharmacies
        const pharmacies =
      [
    {
        "name": "PHARMACIE 2000",
        "address": "Bè kpota, BP 61194",
        "phone": "96 37 94 25"
    },
    {
        "name": "PHARMACIE ABRAHAM",
        "address": "Agoè Logopé Kossigan",
        "phone": "22 50 10 00"
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
        "name": "PHARMACIE AU GRAIN D'OR",
        "address": "Carrefour Zorobar, grand contournement",
        "phone": "22 70 06 90"
    },
    {
        "name": "PHARMACIE AVEPOZO",
        "address": "A 600m restaurant Alice, Bè-kome, avépozo, 04 BP 353 Lomé 04",
        "phone": "22 27 04 86"
    },
    {
        "name": "PHARMACIE BA-AYETA",
        "address": "Kégué Zogbédji, non loin de la station OANDO après le pont de Kégué",
        "phone": "97726969"
    },
    {
        "name": "PHARMACIE BETANIA",
        "address": "Rue sito, gblinkomé, 19 BP 243",
        "phone": "96 80 10 11"
    },
    {
        "name": "PHARMACIE BETHEL",
        "address": "Bd. Du 30 Août, sur la route de kpalimé, adidogomé, BP1236",
        "phone": "98 58 64 64"
    },
    {
        "name": "PHARMACIE BON SECOURS",
        "address": "Gblinkomé, BP 80878",
        "phone": "22 20 76 30"
    },
    {
        "name": "PHARMACIE DE L'EDEN",
        "address": "Route d'Anèho, face à la cité Baguida",
        "phone": "70 42 13 98"
    },
    {
        "name": "PHARMACIE DE LA LIBERATION",
        "address": "199 avenue de la libération, tokoin trésor, BP 12045",
        "phone": "22 22 25 25"
    },
    {
        "name": "PHARMACIE DES APOTRES",
        "address": "49 rue Mobutu séssé Seko, Akodésséwa, BP 3924",
        "phone": "22 27 11 98"
    },
    {
        "name": "PHARMACIE DES ECOLES",
        "address": "Rte de kpalimé, face lycée technique adidogomé, 04 BP 74",
        "phone": "22 51 75 75"
    },
    {
        "name": "PHARMACIE DES ETOILES",
        "address": "10, avenue de la nouvelle marché, BP 3484",
        "phone": "22 22 45 04"
    },
    {
        "name": "PHARMACIE DES ROSES",
        "address": "Carrefour de l'union, vakpossito",
        "phone": "70 42 37 72"
    },
    {
        "name": "PHARMACIE DIVINA GRACIA",
        "address": "Agoè fiovi, rond point Cool Catche",
        "phone": "93 83 91 00"
    },
    {
        "name": "PHARMACIE DU PEUPLE",
        "address": "PRES MARCHE NKAFU CERFER",
        "phone": "22 26 84 22"
    },
    {
        "name": "PHARMACIE EL-NISSI",
        "address": "DZOTSI KOMLA SENAM VICTOR ADIDOGOME APEDOKOE GBOMAME 07",
        "phone": "79 78 15 37"
    },
    {
        "name": "PHARMACIE EL-SHADAÏ",
        "address": "Atikoumé, en face de ESTAO",
        "phone": "22 51 44 25"
    },
    {
        "name": "PHARMACIE EL-SHAMMAH",
        "address": "Amadahomé à côté de la maison des jeunes",
        "phone": "22 46 93 50"
    },
    {
        "name": "PHARMACIE ENOULI",
        "address": "Face gare routière Agblalipédogan, BP 8613",
        "phone": "22 25 90 68"
    },
    {
        "name": "PHARMACIE EVA",
        "address": "Sanguéra, non loin de T'OIL",
        "phone": "92163232"
    },
    {
        "name": "PHARMACIE GRATITUDE",
        "address": "Grand contournement non loin du carrefour avinato à 100m de la clinique OASIS",
        "phone": "92 18 94 85"
    },
    {
        "name": "PHARMACIE HORIZON",
        "address": "95, boulevard du 13 Janvier, Nyekonakpoè, 08 BP 81726",
        "phone": "90 56 52 56"
    },
    {
        "name": "PHARMACIE HOSANNA",
        "address": "Rond-Point Sagbado, à 100m d'EPP Sagbado, Adidogomé, 05 BP 77",
        "phone": "97 77 69 59"
    },
    {
        "name": "PHARMACIE JEANNE D'ARC",
        "address": "Sur l'ancienne route d'Aného, BP 368",
        "phone": "22 22 08 01"
    },
    {
        "name": "PHARMACIE JUSTINE",
        "address": "291, boulevard des armées, tokoin Habitat, BP 8021",
        "phone": "22 21 00 01"
    },
    {
        "name": "PHARMACIE LA GRACE",
        "address": "Nationale N°1, face Terrain d'Agoè-Nyivé, BP 440",
        "phone": "22 25 91 65"
    },
    {
        "name": "PHARMACIE LA MAIN DE DIEU",
        "address": "Agoè nouveau marché, vers le camp de police",
        "phone": "22 52 77 55"
    },
    {
        "name": "PHARMACIE LA NOUVELLE TULIPE",
        "address": "Rte de Mission-Tové, près de la Station CAP Agoè-légbassito",
        "phone": "99 47 00 70"
    },
    {
        "name": "PHARMACIE LA PROSPERITE",
        "address": "Bd. Eyadéma, Angle rue kokoté, BP 80272 Lomé 08",
        "phone": "96 80 09 91"
    },
    {
        "name": "PHARMACIE LE GALIEN",
        "address": "Avenue Pya, Rue Pavée, Adidoadin, 05 BP 92",
        "phone": "22 51 71 71"
    },
    {
        "name": "PHARMACIE MADINA",
        "address": "WUITI en face de la cité de la CNSS à côté de l'UTB Novissi",
        "phone": "91 18 33 33"
    },
    {
        "name": "PHARMACIE MAGNIFICAT",
        "address": "Aflao Yokoe, Rue De La Pampa à 100 M Du Palais Royal De Yokoe, Lomé",
        "phone": "70 44 51 59"
    },
    {
        "name": "PHARMACIE NOTRE DAME",
        "address": "Rue Assiyéyé Hédzranawoé, BP 363",
        "phone": "22 42 74 04"
    },
    {
        "name": "PHARMACIE NOTRE DAME DE LOURDES",
        "address": "Bd. Adidoadin-Assiyéyé, Agoè Anomé, BP 05",
        "phone": "22 44 01 01"
    },
    {
        "name": "PHARMACIE REGINA PACIS",
        "address": "Sur la Nationale N°1 Adétikopé près du Bar Sous l'Antenne",
        "phone": "96 80 10 22"
    },
    {
        "name": "PHARMACIE SAINT ESPRIT",
        "address": "Route Agoè-Kégué, CEG Agoè Est, BP 1246",
        "phone": "22 40 29 06"
    },
    {
        "name": "PHARMACIE SAINT PHILIPPE",
        "address": "Zanguéra, Route Lomé-Kpalimé, près de la station de service OANDO",
        "phone": "90 67 33 24"
    },
    {
        "name": "PHARMACIE SAINT PIERRE",
        "address": "88, boulevard du Haho, Hédzranawoé Sagboville, BP 30717",
        "phone": "22 26 19 73"
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
        "name": "PHARMACIE SEPOPO",
        "address": "Adakpamé, grand contournement, rond point Sawleto non loin de la Station SOMAYAF",
        "phone": "70 34 65 65"
    },
    {
        "name": "PHARMACIE TAKOE",
        "address": "Rte d'Atakpamé, Face Terminal Sahel, Togblekopé, BP 8408",
        "phone": "70 45 62 17"
    },
    {
        "name": "PHARMACIE VOLONTAS DEI",
        "address": "Avédji carrefour SUN CITY",
        "phone": "70 42 23 60"
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
