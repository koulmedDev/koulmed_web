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
            Du 26 Mai au 02 Juin 2025
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
        <p>© 2025 Koulmed - Liste mise à jour le 26 Mai 2025</p>
    </div>

    <script>
        // Données des pharmacies
        const pharmacies =
        [
    {
        "name": "PHARMACIE BEL AIR",
        "address": "Non loin de Ramco et de l'hôtel Palm Beach",
        "phone": "96 80 08 75"
    },
    {
        "name": "PHARMACIE 31EME ARRONDISSEMENT",
        "address": "Bd. du 13 Janvier, près de l'Immeuble FIATA",
        "phone": "96 32 97 71"
    },
    {
        "name": "PHARMACIE OLIVIERS",
        "address": "01, Rue du Rotary club international angle Bd Felix Houphët-Boigny 08 BP 8480 Lomé 08 TOGO",
        "phone": "96 80 09 50"
    },
    {
        "name": "PHARMACIE ECLAIR",
        "address": "Rue Avenou, Bè Ahligo, dans le prolongement du Marché de Ahligo",
        "phone": "96 80 09 06"
    },
    {
        "name": "PHARMACIE ESPERANCE",
        "address": "Av F.J. STRAUSS, Face Ecole Française Nyékonakpoè Rue Adjololo",
        "phone": "22 21 01 28"
    },
    {
        "name": "PHARMACIE AVE MARIA",
        "address": "Face ENSF (Ecole Nationale des Sages Femmes près du CHU Tokoin)",
        "phone": "99 03 20 12"
    },
    {
        "name": "PHARMACIE AGBEGNIGAN",
        "address": "Tokoin Ramco - Gbadago, Av. de la Libération, près du PRÊT À MANGER",
        "phone": "70 20 00 00"
    },
    {
        "name": "PHARMACIE CAMPUS",
        "address": "ADEWI - Boulevard de la Kara à côté de UTB",
        "phone": "96 80 08 85"
    },
    {
        "name": "PHARMACIE BAH",
        "address": "Bd Zio, Face EPP Hédzranawé",
        "phone": "90 55 79 59"
    },
    {
        "name": "PHARMACIE CITRUS",
        "address": "Attiégou Carrefour DVA Grand Contournement",
        "phone": "70 44 59 24"
    },
    {
        "name": "PHARMACIE ISIS",
        "address": "Avenue Jean Paul II près des rails NUKAFU Gakpoto",
        "phone": "70 44 83 87"
    },
    {
        "name": "PHARMACIE YEM-BLA",
        "address": "258 Av. Akéï face à la Résidence",
        "phone": "90 88 98 72"
    },
    {
        "name": "PHARMACIE FRATERNITE",
        "address": "Hédzranawé près de la Clinique St Joseph",
        "phone": "96 80 09 19"
    },
    {
        "name": "PHARMACIE APOTHEKA",
        "address": "Face siège Fédération Togolaise de Football, route de Kegué",
        "phone": "70 44 33 33"
    },
    {
        "name": "PHARMACIE MA WULE",
        "address": "54 Bd de l'OTR Rond Point Gakpoto Bè-Kpota",
        "phone": "70 45 91 86"
    },
    {
        "name": "PHARMACIE FIDELIA",
        "address": "Bè-Kpota, ou, de l'hôtel \"LE REFERENTIEL\"",
        "phone": "96 80 09 18"
    },
    {
        "name": "PHARMACIE SARAH",
        "address": "Près du centre de santé d'Adakpamé",
        "phone": "70 42 69 02"
    },
    {
        "name": "PHARMACIE ELI-BERACA",
        "address": "Route d'Adidogomé Immeuble SIKOVIC face bureau de poste",
        "phone": "99 91 13 42"
    },
    {
        "name": "PHARMACIE LA REFERENCE",
        "address": "Route de Kpalimé, Adidogomé Assiyéyé, à côté du bar Madiba",
        "phone": "96 80 09 96"
    },
    {
        "name": "PHARMACIE BONTE",
        "address": "Route de SEGBE, Wonyomé-Adidogomé en face de la station Sanol",
        "phone": "96 80 09 00"
    },
    {
        "name": "PHARMACIE AZUR",
        "address": "Apédokoè-Gbomamé, route d'Atigangomé, Carrefour Obéna, de l'eglise Pentecôte",
        "phone": "90 49 44 56"
    },
    {
        "name": "PHARMACIE JAHNAP",
        "address": "A côté de l'EPP Gakli Didjolé-Gakli, immeuble Favo",
        "phone": "96 80 09 29"
    },
    {
        "name": "PHARMACIE CONFIANCE",
        "address": "Face GTA",
        "phone": "70 15 78 46"
    },
    {
        "name": "PHARMACIE LUMIERE",
        "address": "AGBALEPEDOGAN -Lossossime près du Rond Point de l'Œuf",
        "phone": "70 43 15 49"
    },
    {
        "name": "PHARMACIE GROUPE C",
        "address": "Agbalépédo an face Clinique la Victoire non loin de IEPP Groupe C",
        "phone": "99 98 20 87"
    },
    {
        "name": "PHARMACIE DES ORCHIDEES",
        "address": "AGOE-TELESSOU LEO 2000",
        "phone": "93 43 10 49"
    },
    {
        "name": "PHARMACIE SOLIDARITE",
        "address": "Rue Avédji Limousine, Près de l'UTB Totsi BP : 8919 Lomé - TOGO",
        "phone": "96 80 09 76"
    },
    {
        "name": "PHARMACIE DE LA VICTOIRE",
        "address": "Avédji Wessomé, sur le Bd Faure Gnassingbé (voie douane dAdidogomé - CarfLimousine), après les rails",
        "phone": "70 45 74 92"
    },
    {
        "name": "PHARMACIE ARC-EN-CIEL",
        "address": "Agoè-Téléssou à 50m du Carrefour Margot",
        "phone": "70 42 50 00"
    },
    {
        "name": "PHARMACIE SHALOM",
        "address": "Agoè-Cacavéli, non loin de BKS. Sur Bd Faure GNASSINGBE",
        "phone": "93 58 78 23"
    },
    {
        "name": "PHARMACIE APOU ANTOINE",
        "address": "Boulevard Lycée Agoè-Assiyéyé Face TOTAL Minamadou II",
        "phone": "70 41 36 12"
    },
    {
        "name": "PHARMACIE AGOE-NYIVE",
        "address": "A côté de l'Eglise Catholique d'Agoè-Nyivé",
        "phone": "91 61 02 62"
    },
    {
        "name": "PHARMACIE LE ROCHER",
        "address": "Agoèzongo, sur la route national Nº 1, près du terrain de jeu de golf",
        "phone": "92 30 06 56"
    },
    {
        "name": "PHARMACIE EL NOUR",
        "address": "AGOE - Alinka non loin du CMS Togblekopé",
        "phone": "97 79 93 74"
    },
    {
        "name": "PHARMACIE ZILIDJI",
        "address": "Derrière le marche d' agoè zongo",
        "phone": "92 61 66 08"
    },
    {
        "name": "PHARMACIE ELEMAWUSSI",
        "address": "Adétikopé Médina, Nationale Nº I, avant PIA (Plateforme Industrielle)",
        "phone": "92 34 06 80"
    },
    {
        "name": "PHARMACIE SATIS",
        "address": "Agoè-Logopé face CEG Agoè-Nyivé Ouest (Kossigan sur la rue de 50 m)",
        "phone": "70 44 85 17"
    },
    {
        "name": "PHARMACIE DENIS",
        "address": "AGOE Kové Carrefour Kpogli",
        "phone": "93 08 46 40"
    },
    {
        "name": "PHARMACIE EMMAÜS",
        "address": "Sur la route de Mission Tové à côté du bar Solidarité",
        "phone": "70 40 25 40"
    },
    {
        "name": "PHARMACIE CHARITE",
        "address": "A côté du CEG d'Agoè-Nyivé",
        "phone": "22 25 12 60"
    },
    {
        "name": "PHARMACIE GANFAT",
        "address": "AGOE DALIKO près du Carf EDEM CAMP GP",
        "phone": "22 55 08 15"
    },
    {
        "name": "PHARMACIE ZOPOMAHE",
        "address": "ZOPOMAHE, sur la route Zossimé à côté de la salle des témoins de Jehovah",
        "phone": "96 28 34 10"
    },
    {
        "name": "PHARMACIE EL-SALI",
        "address": "Rte Lomé-Kpalimé,Aflao Apédokoè Gbomamé, à 50 m de la quaincaillerie MACO",
        "phone": "97 53 44 44"
    },
    {
        "name": "PHARMACIE OBSERVANCE",
        "address": "SOGBOSSITO, en face de la station Total Energies à Côté du Camp BIR",
        "phone": "22 50 48 60"
    },
    {
        "name": "PHARMACIE MBA",
        "address": "Agoè-Légbassito. Route de Mission Tové, 300 mètres après le marché de Légbassito",
        "phone": "70 27 81 81"
    },
    {
        "name": "PHARMACIE BAGUIDA",
        "address": "Face CMS de Baguida",
        "phone": "70 42 47 77"
    },
    {
        "name": "PHARMACIE LA FLAMME D'AMOUR",
        "address": "Qt. Boboleko 1K an Non Loin du cimétière Zogbedjimonou de Kpogan",
        "phone": "70 45 70 14"
    },
    {
        "name": "PHARMACIE LUMEN",
        "address": "DJAGBLE, à côté de l'EPP de DJAGBLÉ",
        "phone": "70 41 68 36"
    },
    {
        "name": "PHARMACIE HELENE",
        "address": "Aveta face au marché d' Aveta",
        "phone": "96 98 15 15"
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
