<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacies de Garde - Lomé</title>
    <link href="{{ asset('images/logotype.png') }}" rel="icon">
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
            Du 06  au 12 Mai  2025
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
        <p>© 2025 Koulmed - Liste mise à jour le 05 Mai 2025</p>
    </div>

    <script>
        // Données des pharmacies
        const pharmacies = [
    {
        "name": "PHARMACIE ST ANTOINE",
        "address": "1048, Avenue de la Libération",
        "phone": "96 80 10 07"
    },
    {
        "name": "PHARMACIE STE RITA",
        "address": "Rue avée Doulassamé - Face Hôtel SANA",
        "phone": "96 80 09 70"
    },
    {
        "name": "PHARMACIES SANTE",
        "address": "Près de NOPATO",
        "phone": "70 44 91 37"
    },
    {
        "name": "PHARMACIE BIOVA",
        "address": "Bd. Houphët-Boigny",
        "phone": "70 23 19 23"
    },
    {
        "name": "PHARMACIE CHÂTEAU-D'EAU",
        "address": "Près Château d'eau de BE",
        "phone": "96 80 08 88"
    },
    {
        "name": "PHARMACIE EMMANUEL",
        "address": "637, Av. Duisbur Face MIVIP Kodjoviakopé",
        "phone": "90 09 94 03"
    },
    {
        "name": "PHARMACIE JUSTINE",
        "address": "291 Bd des Armées - Tokoin Habitat",
        "phone": "96 80 09 31"
    },
    {
        "name": "PHARMACIE AGBEGNIGAN",
        "address": "Tokoin Ramco - Gbadago, Av. de la Libération, près du PRÊT MANGER",
        "phone": "70 20 00 00"
    },
    {
        "name": "PHARMACIE BON SECOURS",
        "address": "Rue du Grand Collège du Plateau - Cassablanca",
        "phone": "70 45 76 74"
    },
    {
        "name": "PHARMACIE RAOUDHA",
        "address": "Située au 4495 Boulevard Zio Hédzranawoe, derrière TOGO 2000",
        "phone": "91 61 33 32"
    },
    {
        "name": "PHARMACIE N.D. DE LA TRINITE",
        "address": "Sise au 20 boulevard de la Paix à Super Taco",
        "phone": "98 46 50 88"
    },
    {
        "name": "PHARMACIE FOREVER",
        "address": "01 BP 4884 Lomé I -TOGO-52 Avenue des Kondona, face Garage Central Administratif",
        "phone": "91 00 29 17"
    },
    {
        "name": "PHARMACIES SANTA MADONNA",
        "address": "Kégué, face maison Kader Coubadja et l'Eglise catholique Ste Thèrèse",
        "phone": "70 01 03 03"
    },
    {
        "name": "PHARMACIE BIEN ETRE",
        "address": "100, bd du haho, hedzranawoe à côté de la station d'essence total",
        "phone": "70 54 29 07"
    },
    {
        "name": "PHARMACIE KELEGOUGAN",
        "address": "AGOE-Kelegougan,V0ie du contournement, à 100m de la station TOTAL Kelegougan et du bar Obrigado",
        "phone": "92 95 38 38"
    },
    {
        "name": "PHARMACIE SEPOPO",
        "address": "ADAKPAME grand contournement, rond-point Sawleto non loin de la station Somayaf",
        "phone": "70 34 65 65"
    },
    {
        "name": "PHARMACIE O GRAIN D'OR",
        "address": "Ahadji - Kpota, Rue Carrefour Zorrobar, Grand Contournement, Lomé",
        "phone": "71 90 11 66"
    },
    {
        "name": "PHARMACIE 2000",
        "address": "BE KPOTA près du Marché Dzifa",
        "phone": "96 37 94 25"
    },
    {
        "name": "PHARMACIE BETHEL",
        "address": "ADIDOGOME Soviépé, bd du 30 Août, face OraBank et Ban ue Atlanti que",
        "phone": "98 58 64 64"
    },
    {
        "name": "PHARMACIE DES ECOLES",
        "address": "Face Lycée Technique Adidogomé et près du CEG, Route de Kpalimé",
        "phone": "96 80 09 14"
    },
    {
        "name": "PHARMACIE EL-NISSI",
        "address": "Rte Lomé-Kpalimé, carrefour Apédokoè-Gbomamé à 200 m de la station total d'Apédokoè",
        "phone": "99 73 39 32"
    },
    {
        "name": "PHARMACIE HOSANNA",
        "address": "Carrefour Sagbado-Sémékonawo, en face de la station service SANOL",
        "phone": "97 77 69 59"
    },
    {
        "name": "PHARMACIE MAGNIFICAT",
        "address": "Adidogomé yokoè Agblégan, rue de la pampa à 100 m du ais royal de Yokoè",
        "phone": "70 44 51 59"
    },
    {
        "name": "PHARMACIE GREENRX",
        "address": "Segbe dans l'immeuble Mabiz Plaza Non loin du Rond point Douane",
        "phone": "92 96 19 19"
    },
    {
        "name": "PHARMACIE MATHILDA",
        "address": "Route PATASSE - Lomégan - ODEF",
        "phone": "22 51 15 34"
    },
    {
        "name": "PHARMACIE EL-SHADAI",
        "address": "Face Ecole Théologie ESTAO",
        "phone": "96 80 09 10"
    },
    {
        "name": "PHARMACIE ENOULI",
        "address": "Station d'Agbalépédogan",
        "phone": "22 25 90 68"
    },
    {
        "name": "PHARMACIE LE GALIEN",
        "address": "Rue Pavée d'Adidoadin",
        "phone": "96 80 09 21"
    },
    {
        "name": "PHARMACIE DES ROSES",
        "address": "AGOE - Vakpossito",
        "phone": "70 42 37 72"
    },
    {
        "name": "PHARMACIE BETANIA",
        "address": "Rue Sito, Totsi-Glenkomé non loin de la salle des Témoins de Jéhovah",
        "phone": "96 80 10 11"
    },
    {
        "name": "PHARMACIE VOLONTAS DEI",
        "address": "Avédji, Carrefour \"SUN CITY\", face à l'ancien bar Sun City",
        "phone": "70 42 23 60"
    },
    {
        "name": "PHARMACIE EL-SHAMMAH",
        "address": "Sise à Amadahomé à côté de la Maison des Jeunes",
        "phone": "70 43 25 85"
    },
    {
        "name": "PHARMACIE NOTRE DAME DE LOURDES",
        "address": "Carrefour Maison Blanche en allant à \"Deux Lions\" en face de STAM",
        "phone": "70 44 01 01"
    },
    {
        "name": "PHARMACIE LA GRÂCE",
        "address": "Près de l'Auberge Sahara avant la Station SUN AGIP Agoè",
        "phone": "90 56 16 81"
    },
    {
        "name": "PHARMACIE ST ESPRIT",
        "address": "Sur la bretelle Agoè-Nyivé Kégué, Face au CEG Agoè-Est",
        "phone": "70 40 29 06"
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
        "address": "Derrière le marche d'Agoè zongo",
        "phone": "92 61 66 08"
    },
    {
        "name": "PHARMACIE REGINA PACIS",
        "address": "ADETIKOPE Rte National Nº 1 près du bar sous l'Antenne",
        "phone": "70 45 98 58"
    },
    {
        "name": "PHARMACIE SATIS",
        "address": "Agoè-Logopé face CEG Agoè nyivé Ouest (Kossigan sur la rue de 50 m",
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
        "phone": "90 65 21 90"
    },
    {
        "name": "PHARMACIE ZOSSIME",
        "address": "AGOE - Zossimé",
        "phone": "70 46 26 64"
    },
    {
        "name": "PHARMACIE St PHILIPPE",
        "address": "SANGUERA, Rte Lomé - Kpalimé près de la Station service OANDO",
        "phone": "90 67 33 24"
    },
    {
        "name": "PHARMACIE EVA",
        "address": "SANGUERA, Klikamé Non loin du T-OIL",
        "phone": "92 16 32 32"
    },
    {
        "name": "PHARMACIE OBSERVANCE",
        "address": "SOGBOSSITO, en face de la station Total à Côté du Cam BIR",
        "phone": "70 74 22 22"
    },
    {
        "name": "PHARMACIE MBA",
        "address": "Agoè-Légbassito. Route de Mission Tové, 300 mètres après le marché de Légbassito",
        "phone": "70 27 81 81"
    },
    {
        "name": "PHARMACIE DE L'EDEN",
        "address": "Route dtAného face Cité Baguida",
        "phone": "70 42 13 98"
    },
    {
        "name": "PHARMACIE AVEPOZO",
        "address": "AVEPOZO Be Kome à côté de la place publi ue04 BP: 353 Lomé - Togo",
        "phone": "93 01 73 51"
    },
    {
        "name": "PHARMACIE LUMEN",
        "address": "DJAGBLE En face de l'EPP Djagblé",
        "phone": "70 41 68 36"
    },
    {
        "name": "PHARMACIE HELENE",
        "address": "Aveta face au marché d'Aveta",
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
