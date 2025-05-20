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
            Du 19 au 26 Mai 2025
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
        <p>© 2025 Koulmed - Liste mise à jour le 19 Mai 2025</p>
    </div>

    <script>
        // Données des pharmacies
        const pharmacies =[
    {
        "name": "PHARMACIE AKOFA",
        "address": "Av. Maman N'Danida Amoutivé",
        "phone": "70 49 96 28"
    },
    {
        "name": "PHARMACIE HANOUKOPE",
        "address": "Avenue de la Nouvelle Marche Immeuble Radio Kanal FM",
        "phone": "70 49 96 63"
    },
    {
        "name": "PHARMACIE BON PASTEUR",
        "address": "44 Av. de la libération en face de Brother Home",
        "phone": "91 43 44 84"
    },
    {
        "name": "PHARMACIE BON SAMARITAIN",
        "address": "BE PA de SOUZA / Hôpital de BE",
        "phone": "91 34 41 94"
    },
    {
        "name": "PHARMACIE PORT",
        "address": "Face Hôtel Sarakawa",
        "phone": "70 41 54 53"
    },
    {
        "name": "PHARMACIE ADJOLOLO",
        "address": "1319, Rue de la Charité roche du CMS de Nyekonakpoè",
        "phone": "70 49 95 00"
    },
    {
        "name": "PHARMACIE DE LA MAIRIE",
        "address": "39 Avenue Nicolas Grunitzky Nyekonakpoe",
        "phone": "91 03 21 21"
    },
    {
        "name": "PHARMACIE HOPITAL",
        "address": "Face Hôpital CHU-Tokoin",
        "phone": "79 69 08 08"
    },
    {
        "name": "PHARMACIE AMITIE",
        "address": "72 Av. des Hydrocarbures SOTED",
        "phone": "70 25 62 57"
    },
    {
        "name": "PHARMACIE ST KISITO",
        "address": "Bd. de la Kara rès du Bar TAMTAM",
        "phone": "96 80 09 64"
    },
    {
        "name": "PHARMACIE THERYA",
        "address": "Petit contournement, à 500 m de la Foire internationale Togo 2000",
        "phone": "70 44 81 77"
    },
    {
        "name": "PHARMACIE ST PAUL",
        "address": "Bd. Jean Paul 11",
        "phone": "92 38 30 50"
    },
    {
        "name": "PHARMACIE LE JOURDAIN",
        "address": "Boulevard Léo old Sédar SENGHOR, face au CEG Tokoin Wuiti",
        "phone": "22 61 56 14"
    },
    {
        "name": "PHARMACIE HEDZRANAWE",
        "address": "Avenu du Grand Seminaire non loin de la banque Atlantique",
        "phone": "96 80 09 27"
    },
    {
        "name": "PHARMACIE KOUESSAN",
        "address": "En face du stade de Kégué",
        "phone": "96 80 10 01"
    },
    {
        "name": "PHARMACIE J-MIMSHAK",
        "address": "Rue Tchamba 964, à 50m de la base de Satom 01 BP : 1391 Hountigomé Lomé - Togo",
        "phone": "92 24 42 70"
    },
    {
        "name": "PHARMACIE UNION",
        "address": "Bd Malfakassa face crèmerie BAMUDAS - BE KPOTA",
        "phone": "96 32 97 26"
    },
    {
        "name": "PHARMACIE LE PROGRES",
        "address": "Grd contournement, face EPPL Universelle, non loin de la Gendarmerie d'AHADZI-Kpota",
        "phone": "70 45 86 55"
    },
    {
        "name": "PHARMACIE LA RUCHE",
        "address": "Attiégou derrière la clôture de I'aéroport voie menant au Grand Contournement, non loin de I'école les Savoirs",
        "phone": "91 54 16 16"
    },
    {
        "name": "PHARMACIE ADIDOGOME",
        "address": "Face au camp 2ème RI d'Adidogomé",
        "phone": "91 05 78 21"
    },
    {
        "name": "PHARMACIE SILOE",
        "address": "Carrefour Aflao Apédokoè Atigangomé",
        "phone": "90 80 26 39"
    },
    {
        "name": "PHARMACIE ACTUELLE",
        "address": "Route de Ségbé quartier Sagbado - Adidogomé",
        "phone": "90 61 46 44"
    },
    {
        "name": "PHARMACIE SEGBE",
        "address": "A coté de l'EPP Ségbé",
        "phone": "92 59 49 35"
    },
    {
        "name": "PHARMACIE WASTINE",
        "address": "Adidogome logoté, à 400 m du carrefour sur la route menant au quartier Lankouvi",
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
        "address": "Rue 267 AGBALEPEDOGAN Kilimandjaro",
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
        "address": "Carrefour AVEDZI face Ets LA LIMOUSINE",
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
        "address": "Rte de la Cour d'AppeI, entre l'Agence CEET Agoè et l'Ecole privée La Source",
        "phone": "70 19 35 35"
    },
    {
        "name": "PHARMACIE ST MICHEL",
        "address": "Située à Agoè-Nyivé entre la Brasserie BB et l'espace Télécom",
        "phone": "70 43 30 43"
    },
    {
        "name": "PHARMACIE TCHEP'SON",
        "address": "Face Terminal du Sahel Togblékopé",
        "phone": "70 42 94 41"
    },
    {
        "name": "PHARMACIE LIDDY",
        "address": "AGOE-DIKAME, Bernard Copé après la station CAP en face du Camp de tir",
        "phone": "70 90 19 60"
    },
    {
        "name": "PHARMACIE ASSURANCE",
        "address": "Adétikopé, National NO 1, non loin du marché",
        "phone": "93 08 76 76"
    },
    {
        "name": "PHARMACIE KOBOYO",
        "address": "DAVIE, rte de la Nationale No I avant le payage de Davié en face de la Station Sanol",
        "phone": "93 70 48 12"
    },
    {
        "name": "PHARMACIE ESPACE VIE",
        "address": "AGOE Logopé non loin de place de Loisir BKS 2",
        "phone": "99 85 89 07"
    },
    {
        "name": "PHARMACIE LA BARAKA",
        "address": "Agoè LOGOPE, non loin de l'ECOLE LA BRUYERE A PROXIMITE DU CAMP GP",
        "phone": "90 17 49 28"
    },
    {
        "name": "PHARMACIE EXCELLENCE",
        "address": "AGOE Démakpoé Voie CEDEAO",
        "phone": "93 27 95 54"
    },
    {
        "name": "PHARMACIE VITAS",
        "address": "Située à Agoè Assiyéyé du côté ouest",
        "phone": "22 25 63 43"
    },
    {
        "name": "PHARMACIE SANGUERA",
        "address": "Près du Iycée Sanguera",
        "phone": "70 42 80 80"
    },
    {
        "name": "PHARMACIE LA SHEKINAH",
        "address": "AGOE-NYIVE Atiomé carrefour Amadenta",
        "phone": "93 33 92 05"
    },
    {
        "name": "PHARMACIE NELLY'S",
        "address": "Klémé Agokpanou, non loin du château d'eau, sur la voie de Ségbé à Sanguéra",
        "phone": "92 01 11 00"
    },
    {
        "name": "PHARMACIE SAG'BIBA",
        "address": "AGOE-Nanegbe à côté de la station T-Oil",
        "phone": "91 83 87 83"
    },
    {
        "name": "PHARMACIE A DIEU LA GLOIRE",
        "address": "Marché de Lé bassito, à côté de la Poste, sur le d contournement",
        "phone": "93 26 36 00"
    },
    {
        "name": "PHARMACIE MAWUNYO",
        "address": "AGOE-So bossito, route de Mission TOVE en face de la station OANDO",
        "phone": "70 42 34 64"
    },
    {
        "name": "PHARMACIE PRINCIPALE",
        "address": "Rte d'Aného Kpogan Yovo Kopé",
        "phone": "90 82 67 67"
    },
    {
        "name": "PHARMACIE LE DESTIN",
        "address": "A côté de l'A ence ECOBANK de Baguida",
        "phone": "70 41 15 41"
    },
    {
        "name": "PHARMACIE LA PATIENCE",
        "address": "DJAGBLE, A Ayokléfé",
        "phone": "70 05 23 39"
    },
    {
        "name": "PHARMACIE SIKA",
        "address": "DJAGBLE, Hiheatro à 200m du complexe scolaire la Perseverance rte Akakope-Gbamakope",
        "phone": "92 62 06 51"
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
