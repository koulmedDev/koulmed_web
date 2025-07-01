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
            Du  30 Juin au 07 Juillet 2025
        </span>
    </div>

    <div class="search-container">
        <i class="fas fa-search search-icon"></i>
        <input type="text" id="se archInput" class="search-input"
            placeholder="Rechercher une pharmacie par nom ou quartier...">
    </div>

    <div class="pharmacy-grid" id="pharmacyGrid">
        <!-- Les pharmacies seront générées dynamiquement ici -->
    </div>

    <div class="footer">
        <p>© 2025 Koulmed - Liste mise à jour le 30 Juin 2025</p>
    </div>

    <script>
        // Données des pharmacies
        const pharmacies =[
    {
        "name": "PHARMACIE 3ème arrondissement",
        "address": "Bd du 13 janvier, près de l'immeuble fiata",
        "phone": "22 21 52 27"
    },
    {
        "name": "PHARMACIE CENTRE",
        "address": "ASSIVITO, face WATT",
        "phone": "22 21 83 30"
    },
    {
        "name": "PHARMACIE BON SAMARITAN",
        "address": "Bè PA De SOUZA, HOPITAL DE BE",
        "phone": "22 21 45 30"
    },
    {
        "name": "PHARMACIE OLIVIERS",
        "address": "01, Rue du Rotary club international angle Bd Felix Houphët-Boigny 08 BP 8480 Lomé 08 TOGO",
        "phone": "22 27 04 34"
    },
    {
        "name": "PHARMACIE HORIZON",
        "address": "165, Bd du 1 3 janvier Nyékonakpoè. Face Sapeurs-Pompiers à côté de l'immeuble A.AC.",
        "phone": "22 20 42 42"
    },
    {
        "name": "PHARMACIE AVE MARIA",
        "address": "Face ENSF (Ecole Nationale des Sages Femmes) près du CHU Tokoin",
        "phone": "22 22 33 01"
    },
    {
        "name": "PHARMACIE LIBERATION",
        "address": "Avenue Libération Prolongée",
        "phone": "22 22 25 25"
    },
    {
        "name": "PHARMACIE BON SECOURS",
        "address": "Rue du Grand collège du plateau- cassablanca",
        "phone": "70 45 76 74"
    },
    {
        "name": "PHARMACIE BAH",
        "address": "face EPP Hédzranawé",
        "phone": "22 26 03 20"
    },
    {
        "name": "PHARMACIE CITRUS",
        "address": "Attiegou carrefour DVA Grand contournement",
        "phone": "70 44 59 24"
    },
    {
        "name": "PHARMACIE ISIS",
        "address": "Avenue jean Paul II",
        "phone": "70 44 83 87"
    },
    {
        "name": "PHARMACIE YEM-BLA",
        "address": "58, Av. Akeï face à la résidence",
        "phone": "22 26 76 51"
    },
    {
        "name": "PHARMACIE FRATERNITE",
        "address": "Hédzranawé près de la clinique St Joseph",
        "phone": "96 80 09 19"
    },
    {
        "name": "PHARMACIE APOTHEKA",
        "address": "Face siège Fédération Togolaise de Football route de Kegué",
        "phone": "22 61 57 75"
    },
    {
        "name": "PHARMACIE SEPOPO",
        "address": "ADAKPAME grand contournement, rond point Sawleto non loin de la station Somayaf",
        "phone": "70 34 65 65"
    },
    {
        "name": "PHARMACIE O GRAIN D'OR",
        "address": "Ahadji - Kpota, Rue Carrefour Zorrobar, Grand Contournement, Lomé",
        "phone": "71 90 11 66"
    },
    {
        "name": "PHARMACIE 2000",
        "address": "BE KPOTA",
        "phone": "22 70 85 87"
    },
    {
        "name": "PHARMACIE BETHEL",
        "address": "ADIDOGOME Soviépé, bd du 30 Août, face OraBank et Banque Atlantique",
        "phone": "98 58 64 64"
    },
    {
        "name": "PHARMACIE DES ECOLES",
        "address": "Face Lycée Technique Adidogomé et près du CEG, Route de Kpalimé",
        "phone": "96 80 09 14"
    },
    {
        "name": "PHARMACIE EL- NISSI",
        "address": "Route Lomé kpalimé à 200 m de la station Total Apédokoè",
        "phone": "99 73 39 32"
    },
    {
        "name": "PHARMACIE HOSANNA",
        "address": "Carrefour Sagbado-Sémékonawo, en face de la station service SANOL",
        "phone": "97 77 69 59"
    },
    {
        "name": "PHARMACIE MAGNIFICAT",
        "address": "Adidogomé yokoè Agblégan, rue de la pampa à 100 m du palais royal de Yokoè",
        "phone": "70 44 51 59"
    },
    {
        "name": "PHARMACIE GREENRX",
        "address": "Ségbé dans l'immeuble Mabiz Plaza Non loin du Rond point Douane",
        "phone": "92 96 19 19"
    },
    {
        "name": "PHARMACIE MATHILDA",
        "address": "Route PATASSE - Lomégan - ODEF",
        "phone": "22 51 15 34"
    },
    {
        "name": "PHARMACIE EL-SHADAI",
        "address": "Face Ecole Théologique ESTAO",
        "phone": "22 51 44 25"
    },
    {
        "name": "PHARMACIE ENOULI",
        "address": "Station d'Agbaépédogan",
        "phone": "22 25 90 68"
    },
    {
        "name": "PHARMACIE LE GALIEN",
        "address": "Rue Pavée Adjidoadin",
        "phone": "22 51 71 71"
    },
    {
        "name": "PHARMACIE DES ROSES",
        "address": "AGOE- Vakpossito près de l'entreprise de l'union",
        "phone": "70 42 37 72"
    },
    {
        "name": "PHARMACIE BETANIA",
        "address": "Rue Sito, Totsi-Glenkomé non loin de la salle des Témoins de Jéhovah",
        "phone": "96 80 10 11"
    },
    {
        "name": "PHARMACIE VOLONTAS DEI",
        "address": "Avédü, Carrefour \"SUN CITY\", face à l'ancien bar Sun City",
        "phone": "70 42 23 60"
    },
    {
        "name": "PHARMACIE EL-SHAMMA",
        "address": "Sise à Amadahomé à côté de la Maison des Jeunes",
        "phone": "70 43 25 85"
    },
    {
        "name": "PHARMACIE NOTRE DAME DE LOURDES",
        "address": "Carrefour Maison Blanche en allant à \"Deux Lions\" en face de STAM",
        "phone": "70 44 01 01"
    },
    {
        "name": "PHARMACIE ST ESPRIT",
        "address": "Sur la bretelle Agoè-Nyivé Kégué, Face au CEG Agoè-Est",
        "phone": "70 40 29 06"
    },
    {
        "name": "PHARMACIE LA GRACE",
        "address": "Près de l' Auberge Sahara avant la Station SUN AGIP Agoè",
        "phone": "90 56 16 81"
    },
    {
        "name": "PHARMACIE TCHEPSON",
        "address": "Face Terminal du sahel (Toglékopé)",
        "phone": "22 25 91 65"
    },
    {
        "name": "PHARMACIE LIDDY",
        "address": "AGOE-DIKAME, Bernard Copé après la station CAP en face du Camp de tir",
        "phone": "70 90 19 60"
    },
    {
        "name": "PHARMACIE REGINA PACIS",
        "address": "ADETIKOPE, Rte National Nº I près du bar Sous l' Antenne",
        "phone": "70 45 98 58"
    },
    {
        "name": "PHARMACIE KOBOYO",
        "address": "DAVIE, Nationale Nº I avant le péage de Davié en face de la Station Sanol",
        "phone": "93 70 48 12"
    },
    {
        "name": "PHARMACIE ESPACE-VIE",
        "address": "Agoè- Logopé non loin de la place de loisirs BKS 2",
        "phone": "99 85 89 07"
    },
    {
        "name": "PHARMACIE LA BARAKAT",
        "address": "Agoè LOGOPE, non loin de l'ECOLE LA BRUYERE A PROXIMITE DU CAMP GP",
        "phone": "90 17 49 28"
    },
    {
        "name": "PHARMACIE EXCELLENCE",
        "address": "AGOE Démakpoè",
        "phone": "22 50 24 47"
    },
    {
        "name": "PHARMACIE VITAS",
        "address": "Située à agoè Assiyéyé Du Côté ouest",
        "phone": "22 25 63 43"
    },
    {
        "name": "PHARMACIE Zanguéra",
        "address": "Près du lycée Sanguéra",
        "phone": "70 42 80 80"
    },
    {
        "name": "PHARMACIE LA SHEKINA",
        "address": "AGOE NYIVE Atiome carrefour Amadenta",
        "phone": "93 33 92 05"
    },
    {
        "name": "PHARMACIE NELLY'S",
        "address": "Klémé Agokpanou, non loin du château d'eau, sur la voie de Ségbé à Sanguéra",
        "phone": "92 01 11 00"
    },
    {
        "name": "PHARMACIE SAG 'BIBA",
        "address": "AGOE-Nanegbé à côté de la station T-oil",
        "phone": "91 83 87 83"
    },
    {
        "name": "PHARMACIE DIEU LA GLOIRE",
        "address": "Marché de Légbassito, à côté de la Poste, sur le grand contournement",
        "phone": "93 26 36 00"
    },
    {
        "name": "PHARMACIE MA WUNYO",
        "address": "AGOE-Sogbossito, route de Mission TOVE en face de la station OANDO",
        "phone": "70 42 34 64"
    },
    {
        "name": "PHARMACIE DE L'EDEN",
        "address": "Route d'Aného face cité Baguida",
        "phone": "70 42 13 98"
    },
    {
        "name": "PHARMACIE AVEPOZO",
        "address": "AVEPOZO Be Komeà côté de la place publique 04 BP: 353 Lomé-Togo",
        "phone": "93 01 73 51"
    },
    {
        "name": "PHARMACIE LA PATIENCE",
        "address": "DJAGBLE A 300 mètres du CMS (Ayoklépé)",
        "phone": "22 27 04 86"
    },
    {
        "name": "PHARMACIE SIKA",
        "address": "DJAGBLE, Hiheatro à 200m du complexe scolaire la Perseverance rte Akakope-Gbamakope",
        "phone": "92 62 06 51"
    }
]
   ;

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
