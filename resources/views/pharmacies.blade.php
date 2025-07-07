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
            Du  07 au 14 Juillet 2025
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
        <p>© 2025 Koulmed - Liste mise à jour le 07 Juillet 2025</p>
    </div>

    <script>
        // Données des pharmacies
        const pharmacies =[
    {
        "name": "PHARMACIE ADONAÏ",
        "address": "Face motel plantation, entre commissariat d'agoè et FIL O Parc, 03 BP31008",
        "phone": "22 50 04 05"
    },
    {
        "name": "PHARMACIE ADOUNI",
        "address": "Vakposito logogome, carrefour AISED",
        "phone": "70 39 39 39"
    },
    {
        "name": "PHARMACIE AJP-ABOLAVE",
        "address": "Djagblé sur la route d'Abolavé à 50 m de la CEET Djagblé",
        "phone": "93506360"
    },
    {
        "name": "PHARMACIE AMEN",
        "address": "Marché Adétikopé, près de l'Eglise Catholique Christ-Roi",
        "phone": "90 88 55 88"
    },
    {
        "name": "PHARMACIE BA-AYETA",
        "address": "Kégué Zogbédji, non loin de la station OANDO après le pont de Kégué",
        "phone": "97726969"
    },
    {
        "name": "PHARMACIE BESDA",
        "address": "Adidogomé Aménopé, Route de Kpalimé",
        "phone": "22 51 05 29"
    },
    {
        "name": "PHARMACIE CHRIST ROI",
        "address": "Raffinerie vers le petit marché, kagomé, BP 1409",
        "phone": "22 27 46 66"
    },
    {
        "name": "PHARMACIE CONSEIL",
        "address": "Carrefour du CEG Sagbado Logoté",
        "phone": "93 10 92 92"
    },
    {
        "name": "PHARMACIE DE LA CHARITE",
        "address": "Non loin de CEG agoè nyivé centre, BP 7856",
        "phone": "22 25 12 60"
    },
    {
        "name": "PHARMACIE DE LA CITE",
        "address": "Bd ; du 30 Août cité n'danida BP 8461",
        "phone": "22 25 01 25"
    },
    {
        "name": "PHARMACIE DE L'ESPERANCE",
        "address": "Rue de l'ogou, en face du lycée française nyékonakpo, BP 719",
        "phone": "22 21 01 28"
    },
    {
        "name": "PHARMACIE DELALI",
        "address": "Face CMS de cacaveli, 04 BP 225",
        "phone": "93 64 53 72"
    },
    {
        "name": "PHARMACIE DENIS",
        "address": "Agoè Kové, Carrefour KPOGLI",
        "phone": "93 08 46 40"
    },
    {
        "name": "PHARMACIE DEO GRATIAS",
        "address": "Rue de l'ocam, derrière siège Ecobank, kotokoukondji, BP 1128",
        "phone": "96 28 57 13"
    },
    {
        "name": "PHARMACIE DES ETOILES",
        "address": "10, avenue de la nouvelle marché, BP 3484",
        "phone": "22 22 45 04"
    },
    {
        "name": "PHARMACIE DODJI",
        "address": "Ségbé Akato, Immeuble Akato Plage non loin de l'église Catholique d'Akato",
        "phone": "70291677"
    },
    {
        "name": "PHARMACIE DU PEUPLE",
        "address": "PRES MARCHE NKAFU CERFER",
        "phone": "22 26 84 22"
    },
    {
        "name": "PHARMACIE DU POINT E",
        "address": "506, rue 129, Aflao Gakli, djidjolé, 08 BP 8589",
        "phone": "22 51 91 71"
    },
    {
        "name": "PHARMACIE DU PORT",
        "address": "Bd. Du mono, face SARAKAWA, Ablogamé, BP 12999",
        "phone": "22 27 61 88"
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
        "name": "PHARMACIE EMMAUS",
        "address": "Route de Mission-Tové, Agoè-Nyivé BP 20492",
        "phone": "70 40 25 40"
    },
    {
        "name": "PHARMACIE EPIPHANIA",
        "address": "Rue Lapampa, carrefour Agbénadon, Adidogomé, 04 BP 30446",
        "phone": "70 40 10 52"
    },
    {
        "name": "PHARMACIE GANFAT",
        "address": "Agoè Daliko près du Carf EDEM (Camp GP)",
        "phone": "22 55 08 15"
    },
    {
        "name": "PHARMACIE GBOSSIME",
        "address": "405, Bd. De la Kara, Gbossime, BP 80859",
        "phone": "22 22 50 50"
    },
    {
        "name": "PHARMACIE HELENE",
        "address": "Aveta face au marché d'Aveta",
        "phone": "96981414"
    },
    {
        "name": "PHARMACIE HYGEA",
        "address": "Derrière Lycée de Baguida",
        "phone": "99 27 36 36"
    },
    {
        "name": "PHARMACIE IRIS",
        "address": "Amadahomé, Imm. Havon, non loin de la station de service CAP, Rue 50 m à côté de Casses Auto",
        "phone": "91684804"
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
        "name": "PHARMACIE LA MISERICORDE",
        "address": "52, Boulevard, de l'Oti, Bè-kpota, BP 8223",
        "phone": "96 80 09 45"
    },
    {
        "name": "PHARMACIE LA PROSPERITE",
        "address": "Bd. Eyadéma, Angle rue kokoté, BP 80272 Lomé 08",
        "phone": "96 80 09 91"
    },
    {
        "name": "PHARMACIE LAUS DEO",
        "address": "Route de Léo 2000, face clinique Bethesda, Adidoadin, 05 BP 21",
        "phone": "22 25 15 05"
    },
    {
        "name": "PHARMACIE L'AMITIE",
        "address": "72, avenue des hydrocarbures, entre soted et togogaz ; tokoin, BP 8648",
        "phone": "22 21 74 47"
    },
    {
        "name": "PHARMACIE M'BA",
        "address": "13 BP 341 Lomé. Route de Kovié, 500 mètres après le marché de LEGBASSITO.",
        "phone": "70 27 81 81"
    },
    {
        "name": "PHARMACIE MADINA",
        "address": "WUITI en face de la cité de la CNSS à côté de l'UTB Novissi",
        "phone": "91 18 33 33"
    },
    {
        "name": "PHARMACIE MAELYS",
        "address": "10620, boulevard Malfakassa, en face de NETADI, Bè Kpota, BP 604",
        "phone": "22 27 60 19"
    },
    {
        "name": "PHARMACIE MAINA",
        "address": "Marché Agoè-Assiyéyé",
        "phone": "70 43 65 34"
    },
    {
        "name": "PHARMACIE NABINE",
        "address": "Site à Agoè Anomé, dit plateau (Route Bar le Plateau)",
        "phone": "93 36 26 26"
    },
    {
        "name": "PHARMACIE NATION",
        "address": "Totsi en face de l'agence ECOBANK",
        "phone": "22 25 99 65"
    },
    {
        "name": "PHARMACIE NOTRE DAME",
        "address": "Rue Assiyéyé Hédzranawoé, BP 363",
        "phone": "22 42 74 04"
    },
    {
        "name": "PHARMACIE OBSERVANCE",
        "address": "SOGBOSSITO, en face de la station Total Energies à Côté du Camp FIR",
        "phone": "22504860"
    },
    {
        "name": "PHARMACIE SAINT PIERRE",
        "address": "88, boulevard du Haho, Hédzranawoé Sagboville, BP 30717",
        "phone": "22 26 19 73"
    },
    {
        "name": "PHARMACIE SATIS",
        "address": "Face CEG Koshigan, Agoè, BP 8519",
        "phone": "23 38 26 65"
    },
    {
        "name": "PHARMACIE TAKOE",
        "address": "Rte d'Atakpamé, Face Terminal Sahel, Togblekopé, BP 8408",
        "phone": "70 45 62 17"
    },
    {
        "name": "PHARMACIE VERSEAU",
        "address": "Rte d'Aného, à côté de Maison Bateau, Baguida, BP 60660",
        "phone": "90 01 90 29"
    },
    {
        "name": "PHARMACIE VERTE",
        "address": "Avenue du RPT Bè Klikamé, BP 81297",
        "phone": "22 25 03 26"
    },
    {
        "name": "PHARMACIE VITAFLORE",
        "address": "Baguida, BP 80531",
        "phone": "22 27 06 36"
    },
    {
        "name": "PHARMACIE ZOPOMAHE",
        "address": "Zopomahe, sur la route Zossimé - Zanguera à côté de la salle des témoins de Jehovah",
        "phone": "96283410"
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
