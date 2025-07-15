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
            Du 14 au 21 Juillet 2025
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
        <p>© 2025 Koulmed - Liste mise à jour le 14 Juillet 2025</p>
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
        "name": "PHARMACIE MATTHIA",
        "address": "1048, Avenue de la Libération",
        "phone": "96 80 10 07"
    },
    {
        "name": "PHARMACIE STE RITA",
        "address": "Rue avée, Doulassamé - Face Hôtel SANA",
        "phone": "96 80 09 70"
    },
    {
        "name": "PHARMACIE DES APÔTRES",
        "address": "49, Bd Moboutou Sese Seko, Akodésséwa, non loin du Centre de Formation CAMA",
        "phone": "70 45 38 05"
    },
    {
        "name": "PHARMACIE ECLAIR",
        "address": "Rue Avenou, Bè Ahligo, dans le prolongement du Marché de Ahligo",
        "phone": "96 80 09 06"
    },
    {
        "name": "PHARMACIE EMMANUEL",
        "address": "637, Av. Duisbur Face MIVIP Kodjoviakopé",
        "phone": "90 09 94 03"
    },
    {
        "name": "PHARMACIE SOURCE DE VIE",
        "address": "Face Collège Protestant Tokoin Lomé",
        "phone": "90 88 25 82"
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
        "name": "PHARMACIE RAOUDHA",
        "address": "4495 Boulevard Zio Hédzranawoe, derrière TOGO 2000",
        "phone": "91 61 33 32"
    },
    {
        "name": "PHARMACIE N.D. DE LA TRINITE",
        "address": "20 boulevard de la Paix à Super Taco",
        "phone": "98 46 50 88"
    },
    {
        "name": "PHARMACIE FOREVER",
        "address": "01 BP 4884 Lomé I-TOGO-52 Avenue des Kondona, face Garage Central Administratif",
        "phone": "91 00 29 17"
    },
    {
        "name": "PHARMACIE SANTA MADONNA",
        "address": "Kégué, face maison Kader Eglise catholique Ste Thèrèse",
        "phone": "70 01 03 03"
    },
    {
        "name": "PHARMACIE BIEN ETRE",
        "address": "100, bd du haho, hedzranawoe, à côté de la station d'essence total",
        "phone": "22 26 45 16"
    },
    {
        "name": "PHARMACIE KELEGOUGAN",
        "address": "AGOE-Kelegougan,Voie du contournement, à 100m de la station TOTAL Kélégougan et du bar Obrigado",
        "phone": "92 95 38 38"
    },
    {
        "name": "PHARMACIE UNION",
        "address": "Bd Malfakassa, face crèmerie BAMUDAS - BE KPOTA",
        "phone": "22 27 71 64"
    },
    {
        "name": "PHARMACIE LE PROGRES",
        "address": "Grd contournement, face EPPL Universelle, non loin de la Gendarmerie d'AHADZI-Kpota",
        "phone": "70 45 86 55"
    },
    {
        "name": "PHARMACIE LA RUCHE",
        "address": "Attiégou derrière la clôture de l'aéroport voie menant au Grand Contournement, non loin de l'école les Savoirs",
        "phone": "91 54 16 16"
    },
    {
        "name": "PHARMACIE ADIDOGOME",
        "address": "Face au camp 2ème RI d'Adidogomé",
        "phone": "22 51 18 91"
    },
    {
        "name": "PHARMACIE SILOE",
        "address": "Carrefour Aflao Apédokoè Atigangomé",
        "phone": "90 80 26 39"
    },
    {
        "name": "PHARMACIE ACTUELLE",
        "address": "Route de Ségbé', quartier Sagbado - Adidogomé",
        "phone": "90 61 46 44"
    },
    {
        "name": "PHARMACIE SEGBE",
        "address": "Ségbé Zanvi, près de l'EPP et du CEG Ségbé",
        "phone": "92 59 49 35"
    },
    {
        "name": "PHARMACIE WASTINE",
        "address": "Adidogome logoté, à 400m du carrefour logoté sur la route menant au quartier Lankouvi",
        "phone": "92 61 17 00"
    },
    {
        "name": "PHARMACIE DJIDJOLE",
        "address": "DJIDJOLE",
        "phone": "93 93 99 27"
    },
    {
        "name": "PHARMACIE ST JOSEPH",
        "address": "Bretelle BE KLIKAME",
        "phone": "96 80 09 65"
    },
    {
        "name": "PHARMACIE VIGUEUR",
        "address": "Rue 267, AGBALEPEDOGAN, Kilimandjaro",
        "phone": "70 44 81 96"
    },
    {
        "name": "PHARMACIE MILLENAIRE",
        "address": "Face réserve de la gendarmerie d'Agoè-Nyivé, sur la route de 50m à 300m du côté Nord",
        "phone": "70 21 31 97"
    },
    {
        "name": "PHARMACIE DIEUDONNE",
        "address": "AGOE-TELESSOU NON LOIN DE LA STATION CAP",
        "phone": "70 44 84 59"
    },
    {
        "name": "PHARMACIE OSSAN",
        "address": "Carrefour AVEDZI, face Ets LA LIMOUSINE",
        "phone": "70 40 44 25"
    },
    {
        "name": "PHARMACIE APOLLON",
        "address": "Avédji, Face complexe scolaire Makafui - Non loin du carrefour des hirondelles",
        "phone": "93 50 42 55"
    },
    {
        "name": "PHARMACIE YESHUA",
        "address": "AGOE Vakpossito vers l'Ecole NDE, entre le CMS Mur et le CMS Maranatha",
        "phone": "98 77 21 53"
    },
    {
        "name": "PHARMACIE CLEMENCE",
        "address": "Rte de la Cour d'Appel, entre l'Agence CEET Agoè et l'Ecole privée La Source",
        "phone": "70 19 35 35"
    },
    {
        "name": "PHARMACIE ST MICHEL",
        "address": "Agoè-Nyivé entre la Brasserie BB et l'espace Télécom",
        "phone": "70 43 30 43"
    },
    {
        "name": "PHARMACIE LE ROCHER",
        "address": "Agoè zongo, sur la route national Nº 1, près du terrain de jeu de golf",
        "phone": "92 30 06 56"
    },
    {
        "name": "PHARMACIE TCHEP'SON",
        "address": "Face Terminal du Sahel (Togblékopé)",
        "phone": "70 42 94 41"
    },
    {
        "name": "PHARMACIE ASSURANCE",
        "address": "Adétikopé, National Nº 1, non loin du marché",
        "phone": "93 08 76 76"
    },
    {
        "name": "PHARMACIE LA MAIN DE DIEU",
        "address": "AGOE ASSIYEYE non loin de l'église des Assemblées de Dieu (Temple Galilée)",
        "phone": "93 40 21 21"
    },
    {
        "name": "PHARMACIE ALTA",
        "address": "AGOE Anonkui Route Mission Tové en face du Centre Culturel Loyola",
        "phone": "70 08 46 46"
    },
    {
        "name": "PHARMACIE DIVINA GRACIA",
        "address": "Quartier Agoè-Fiovi Carrefour Bafana-Bafana",
        "phone": "93 83 91 00"
    },
    {
        "name": "PHARMACIE ABRAHAM",
        "address": "AGOE - Logopé Koshigan",
        "phone": "92 25 99 83"
    },
    {
        "name": "PHARMACIE DAFEANNE",
        "address": "Agoè-sogbossito, Route reliant le contournement au camp GP, à 300m de l'espace de loisirs privilège plus",
        "phone": "70 77 69 42"
    },
    {
        "name": "PHARMACIE ZOSSIME",
        "address": "AGOE - Zossimé, près du marché",
        "phone": "70 46 26 64"
    },
    {
        "name": "PHARMACIE ST PHILIPPE",
        "address": "SANGUERA, Rte Lomé - Kpalimé près de la Station-service OANDO",
        "phone": "90 67 33 24"
    },
    {
        "name": "PHARMACIE EVA",
        "address": "SANGUERA, Klikamé, Non loin du T-OIL",
        "phone": "92 16 32 32"
    },
    {
        "name": "PHARMACIE Nouvelle TULIPE",
        "address": "Rte de Mission - Tové; Près de la station CAP Agoè-Légbassito",
        "phone": "99 47 00 70"
    },
    {
        "name": "PHARMACIE GRATITUDE",
        "address": "Agoè Légbassito Zovadjin non loin du carrefour Avinato",
        "phone": "92 18 94 85"
    },
    {
        "name": "PHARMACIE VERONIQUE",
        "address": "Avépozo en face de l'école nationale de gendarmerie D'Avépozo",
        "phone": "92 03 40 40"
    },
    {
        "name": "PHARMACIE LE DESTIN",
        "address": "À côté de l'Agence ECOBANK de Baguida",
        "phone": "70 41 15 41"
    },
    {
        "name": "PHARMACIE LUMEN",
        "address": "DJAGBLE, À côté de l'EPP de DJAGBLÉ",
        "phone": "70 41 68 36"
    },
    {
        "name": "PHARMACIE SAINTE MARIE",
        "address": "Klemé",
        "phone": "92 85 97 94"
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
