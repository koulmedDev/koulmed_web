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
            Du 18 au 25 Août  2025
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
        <p>© 2025 Koulmed - Liste mise à jour le 18 Août 2025</p>
    </div>

    <script>
        // Données des pharmacies
        const pharmacies =
   [
    {
        "name": "PHARMACIE AGOE-NYIVE",
        "address": "Agoènyive, BP 2064",
        "phone": "22 25 83 38"
    },
    {
        "name": "PHARMACIE ARC-EN-CIEL",
        "address": "Agoè-Téléssou, à 50m du Carrefour Margot",
        "phone": "70 42 50 00"
    },
    {
        "name": "PHARMACIE AURORE",
        "address": "Lankouvi, non loin de l'école la Divine Providence",
        "phone": "92531293"
    },
    {
        "name": "PHARMACIE AZUR",
        "address": "Apédokoè-Gbomamé, Rte d'Atigangomé en face de la station Sanol",
        "phone": "90494456"
    },
    {
        "name": "PHARMACIE BAGUIDA",
        "address": "Rte baguida-dévégo, BP 60767",
        "phone": "22 35 47 77"
    },
    {
        "name": "PHARMACIE BIEN ETRE",
        "address": "Boulevard du haho, hédzranawoé, BP 2933",
        "phone": "22 26 45 16"
    },
    {
        "name": "PHARMACIE BON SECOURS",
        "address": "Gblinkomé, BP 80878",
        "phone": "22 20 76 30"
    },
    {
        "name": "PHARMACIE BONTE",
        "address": "Route de SEGBE, Wonyomé-Adidogomé en face de la station Sanol",
        "phone": "22 50 74 31"
    },
    {
        "name": "PHARMACIE DE LA CONFIANCE",
        "address": "Rue de la chance, face GTA, Agbalépédo, BP 8574",
        "phone": "22 42 46 81"
    },
    {
        "name": "PHARMACIE DE LA CHARITE",
        "address": "Non loin de CEG agoè nyivé centre, BP 7856",
        "phone": "22 25 12 60"
    },
    {
        "name": "PHARMACIE DE LA LIBERATION",
        "address": "199 avenue de la libération, tokoin trésor, BP 12045",
        "phone": "22 22 25 25"
    },
    {
        "name": "PHARMACIE DE LA MARINA",
        "address": "Sur la RN2, BD du Mono en face de la poste frontière d'Aflao Kodjoviakopé",
        "phone": "22214846"
    },
    {
        "name": "PHARMACIE DE LA VICTOIRE",
        "address": "Avédji Wéssomé, voie douane Adidogomé-carrefour Limousine (Après les rails)",
        "phone": "70 45 74 92"
    },
    {
        "name": "PHARMACIE DE L'ESPERANCE",
        "address": "Rue de l'ogou, en face du lycée française nyékonakpo, BP 719",
        "phone": "22 21 01 28"
    },
    {
        "name": "PHARMACIE DE L'HOPITAL",
        "address": "Face CHU Tokoin, BP 12045",
        "phone": "22 20 08 08"
    },
    {
        "name": "PHARMACIE DENIS",
        "address": "Agoè Kové, Carrefour KPOGLI",
        "phone": "93 08 46 40"
    },
    {
        "name": "PHARMACIE DES APOTRES",
        "address": "49 rue Mobutu séssé Seko, Akodésséwa, BP 3924",
        "phone": "22 27 11 98"
    },
    {
        "name": "PHARMACIE DES ETOILES",
        "address": "10, avenue de la nouvelle marché, BP 3484",
        "phone": "22 22 45 04"
    },
    {
        "name": "PHARMACIE DES ORCHIDEES",
        "address": "A côté de l'hôtel LEO 2000, anomé, BP 2015",
        "phone": "22 51 30 40"
    },
    {
        "name": "PHARMACIE ECLAIR",
        "address": "Rue avénou, bè ahligo, BP 81297",
        "phone": "22 22 75 11"
    },
    {
        "name": "PHARMACIE EL NOUR",
        "address": "Alinka non loin du CMS Togblékopé",
        "phone": "97799374"
    },
    {
        "name": "PHARMACIE EL-SALI",
        "address": "Rte Lomé-Kpalimé, Aflao Apédokoè Gbomamé, à 50 m de la quaincaillerue MACO",
        "phone": "70 12 44 44"
    },
    {
        "name": "PHARMACIE ELEMAWUSSI",
        "address": "Adétikopé, Médina, Nationale N°1, avant PIA (Plateforme Industrielle)",
        "phone": "92 34 06 80"
    },
    {
        "name": "PHARMACIE ELI-BERACA",
        "address": "Bd. Du 30 Août, imm ; SIKOVIC Adidogomé, 04 BP 96",
        "phone": "99911342"
    },
    {
        "name": "PHARMACIE EMMAUS",
        "address": "Route de Mission-Tové, Agoè-Nyivé BP 20492",
        "phone": "70 40 25 40"
    },
    {
        "name": "PHARMACIE FIDELIA",
        "address": "Rue des premiers passages des bœufs, route d'Attiegou, Bè-kpota, BP 30446",
        "phone": "22 71 95 95"
    },
    {
        "name": "PHARMACIE FOREVER",
        "address": "142, avenue des kondona, forever, BP 4884",
        "phone": "22 26 11 77"
    },
    {
        "name": "PHARMACIE GANFAT",
        "address": "Agoè Daliko près du Carf EDEM (Camp GP)",
        "phone": "22 55 08 15"
    },
    {
        "name": "PHARMACIE GROUPE C",
        "address": "Agbalépédogan, face Clinique la Victoire non loin de l'EPP Groupe C",
        "phone": "99 98 20 87"
    },
    {
        "name": "PHARMACIE JAHNAP",
        "address": "Rue 16, Imm 337, Aflao Gagli, Djidjolé, BP 81221",
        "phone": "22 51 22 86"
    },
    {
        "name": "PHARMACIE KELEGOUGAN",
        "address": "Agoè-Kélégougan voie contournement à 100 m du Total Kélégougan et du bar Obrigado",
        "phone": "92953838"
    },
    {
        "name": "PHARMACIE LA FLAMME D'AMOUR",
        "address": "Sise à Agodékè, route d'Anèho",
        "phone": "70 45 70 14"
    },
    {
        "name": "PHARMACIE LA PATIENCE",
        "address": "Djagblé à 300 mètres du CMS Ayokléfé",
        "phone": "70052339"
    },
    {
        "name": "PHARMACIE LA RÉFÉRENCE",
        "address": "Route de Kpalimé, Adidogomé Assiyé à côté du bar Madiba",
        "phone": "96 80 09 96"
    },
    {
        "name": "PHARMACIE LUMIERE",
        "address": "Rond-Point Caméléon, Cacavéli, BP 225",
        "phone": "70 43 15 49"
    },
    {
        "name": "PHARMACIE M'BA",
        "address": "13 BP 341 Lomé. Route de Kovié, 500 mètres après le marché de LEGBASSITO.",
        "phone": "70 27 81 81"
    },
    {
        "name": "PHARMACIE MAWULE",
        "address": "Bd. De l'Oti, rue 54, Rond-Point, Bè-Gakpoto, BP 4908",
        "phone": "22 27 11 21"
    },
    {
        "name": "PHARMACIE NOTRE DAME DE LA TRINITE",
        "address": "30, Bd. De la paix, super Taco, BP 60154",
        "phone": "98 46 50 88"
    },
    {
        "name": "PHARMACIE OBSERVANCE",
        "address": "SOGBOSSITO, en face de la station Total Energies à Côté du Camp FIR",
        "phone": "22504860"
    },
    {
        "name": "PHARMACIE RAOUDHA",
        "address": "4495, Bd. Du Zio, Hédzranawoé, 3 BP 30153",
        "phone": "91 61 33 32"
    },
    {
        "name": "PHARMACIE SAINTE RITA",
        "address": "Rue de France, face Hôtel Sana, Doulassamé, BP 10046",
        "phone": "96 80 09 70"
    },
    {
        "name": "PHARMACIE SALA HOUBEIDA",
        "address": "Kélégougan, non loin du rond point O'QUEENS",
        "phone": "91911535"
    },
    {
        "name": "PHARMACIE SANTA MADONA",
        "address": "Kégué, face Kader COUGBADJA et l'Eglise catholique Ste Thèrese",
        "phone": "70 01 03 03"
    },
    {
        "name": "PHARMACIE SARAH (Adakpamé)",
        "address": "Adakpamé, non du centre de santé d'Adakpamé",
        "phone": "70426902"
    },
    {
        "name": "PHARMACIE SATIS",
        "address": "Face CEG Koshigan, Agoè, BP 8519",
        "phone": "23 38 26 65"
    },
    {
        "name": "PHARMACIE SHALOM",
        "address": "Bd. Faure Gnassigbé, Non loin de l'ancienne Direction des impôts, Agoè Cacavéli",
        "phone": "22518760"
    },
    {
        "name": "PHARMACIE SIKA",
        "address": "DJAGBLE, Hiheatro à 200m du complexe scolaire la Persévérance, Rte Akakpoe - Gbamakopé",
        "phone": "92620651"
    },
    {
        "name": "PHARMACIE SOLIDARITE",
        "address": "Route d'avédji, Totsi, BP 8919",
        "phone": "96 80 09 76"
    },
    {
        "name": "PHARMACIE TAKOE",
        "address": "Rte d'Atakpamé, Face Terminal Sahel, Togblekopé, BP 8408",
        "phone": "70 45 62 17"
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
