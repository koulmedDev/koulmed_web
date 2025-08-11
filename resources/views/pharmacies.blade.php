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
            Du 11 au 18 Août  2025
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
        <p>© 2025 Koulmed - Liste mise à jour le 11 Août 2025</p>
    </div>

    <script>
        // Données des pharmacies
        const pharmacies =
   [
    {
        "name": "PHARMACIES JEANNE D'ARC",
        "address": "Près de Marox-Renault-Star",
        "phone": "90 86 40 51"
    },
    {
        "name": "PHARMACIES CENTRE",
        "address": "ASSIVITO, face WATT",
        "phone": "91 03 83 83"
    },
    {
        "name": "PHARMACIES PORT",
        "address": "Face Hôtel Sarakawa",
        "phone": "70 41 54 53"
    },
    {
        "name": "PHARMACIES AMESSIAME-BE",
        "address": "Marché de Bè",
        "phone": "96 32 97 60"
    },
    {
        "name": "PHARMACIES HORIZON",
        "address": "165, Bd du 13 janvier Nyékonakpoè. Face Sapeurs-Pompiers à côté de l'immeuble A.AC.",
        "phone": "90 56 52 56"
    },
    {
        "name": "PHARMACIES JUSTINE",
        "address": "291, Bd des Armées - Tokoin Habitat",
        "phone": "96 80 09 31"
    },
    {
        "name": "PHARMACIES AGBEGNIGAN",
        "address": "Tokoin Ramco - Gbadago, Av. de la Libération, près du PRÊT À MANGER",
        "phone": "70 20 00 00"
    },
    {
        "name": "PHARMACIES CAMPUS",
        "address": "ADEWI - Boulevard de la Kara à côté de UTB",
        "phone": "96 80 08 85"
    },
    {
        "name": "PHARMACIES NOTRE DAME",
        "address": "Rte de l'Aéroport entre la foire TOGO 2000 et l'Aéroport",
        "phone": "96 80 10 12"
    },
    {
        "name": "PHARMACIES LA PROSPERITE",
        "address": "Bd Eyadéma entre l'immeuble EDA OBA et la Direction Police Judiciaire (DPJ)",
        "phone": "96 80 09 91"
    },
    {
        "name": "PHARMACIES MADINA",
        "address": "WUITI en face de la cité de la CNSS à côté de UTB Novissi",
        "phone": "91 18 33 33"
    },
    {
        "name": "PHARMACIES ST PIERRE",
        "address": "Sa boville Hédzranawé. Boulevard Haho",
        "phone": "22 26 19 73"
    },
    {
        "name": "PHARMACIES DEO GRATIAS",
        "address": "Rue Notre Dame de la Miséricorde KEGUE DINGBLE",
        "phone": "96 28 57 13"
    },
    {
        "name": "PHARMACIES PEUPLE",
        "address": "Rue Santia ou, près du marché NUKAFU 06 BP 61217 Lomé 06",
        "phone": "22 61 37 29"
    },
    {
        "name": "PHARMACIES BA-AYETA",
        "address": "KEGUE, Zogbédji non loin de la station Ouando après le pont de Kégué",
        "phone": "97 72 69 69"
    },
    {
        "name": "PHARMACIES UNION",
        "address": "Bd Malfakassa, face crèmerie BAMUDAS - BE KPOTA",
        "phone": "22 27 71 64"
    },
    {
        "name": "PHARMACIES LE PROGRES",
        "address": "Grd contournement, face EPPL Universelle, non loin de la Gendarmerie d'AHADZI-Kpota",
        "phone": "70 45 86 55"
    },
    {
        "name": "PHARMACIES LA RUCHE",
        "address": "Attiégou derrière la clôture de l'aéroport voie menant au Grand Contoumement, non loin de l'école les Savoirs",
        "phone": "91 54 16 16"
    },
    {
        "name": "PHARMACIES ADIDOGOME",
        "address": "Face au camp 2ème RI d'Adidogomé",
        "phone": "22 51 18 91"
    },
    {
        "name": "PHARMACIES SILOE",
        "address": "Carrefour Aflao Apédokoè Atigangomé",
        "phone": "90 80 26 39"
    },
    {
        "name": "PHARMACIES ACTUELLE",
        "address": "Route de Ségbé; Quartier Sagbado - Adidogomé",
        "phone": "90 61 46 44"
    },
    {
        "name": "PHARMACIES SEGBE",
        "address": "Ségbé, près de l'EPP et du CEG Ségbé",
        "phone": "92 59 49 35"
    },
    {
        "name": "PHARMACIES WASTINE",
        "address": "Adidogome logoté, à 400m du carrefour logoté sur la route menant au quartier Lankouvi",
        "phone": "92 61 17 00"
    },
    {
        "name": "PHARMACIES DJIDJOLE",
        "address": "DJIDJOLE",
        "phone": "22 25 65 12"
    },
    {
        "name": "PHARMACIES ST JOSEPH",
        "address": "Bretelle BE KLIKAME",
        "phone": "22 25 74 65"
    },
    {
        "name": "PHARMACIES VIGUEUR",
        "address": "Rue 267, AGBALEPEDOGAN, Kilimandjaro",
        "phone": "22 51 63 30"
    },
    {
        "name": "PHARMACIES MILLENAIRE",
        "address": "Face réserve de la gendarmerie d'Agoè-Nyivé, sur la route de 50m à 300m du côté Nord",
        "phone": "70 21 31 97"
    },
    {
        "name": "PHARMACIES DIEUDONNE",
        "address": "AGOE-TELESSOU NON LOIN DE LA STATION CAP",
        "phone": "70 44 84 59"
    },
    {
        "name": "PHARMACIES OSSAN",
        "address": "Carrefour AVEDZI, face Ets LA LIMOUSINE",
        "phone": "70 40 44 25"
    },
    {
        "name": "PHARMACIES APOLLON",
        "address": "Avédji, Face complexe scolaire Makafui - Non loin du carrefour des hirondelles",
        "phone": "93 50 42 55"
    },
    {
        "name": "PHARMACIES YESHUA",
        "address": "AGOE Vakpossito vers l'Ecole NDE, entre le CMS Mur et le CMS Maranatha",
        "phone": "98 77 21 53"
    },
    {
        "name": "PHARMACIES CLEMENCE",
        "address": "Rte de la Cour d'Appel, entre l'Agence CEET Agoè et l'Ecole privée La Source",
        "phone": "70 19 35 35"
    },
    {
        "name": "PHARMACIES ST MICHEL",
        "address": "Située à Agoè-Nyivé entre la Brasserie BB et l'espace Télécom",
        "phone": "22 51 70 22"
    },
    {
        "name": "PHARMACIES ST ESPRIT",
        "address": "Sur la bretelle Agoè-Nyivé Kégué, Face au CEG Agoè-Est",
        "phone": "70 40 29 06"
    },
    {
        "name": "PHARMACIES ZONGO",
        "address": "Togblékopé carrefour Hermann entre Orabank et la station Sanol Togblékopé",
        "phone": "70 49 96 55"
    },
    {
        "name": "PHARMACIES LIDDY",
        "address": "AGOE-DIKAME, Bernard Copé après la station CAP en face du Camp de tir",
        "phone": "70 90 19 60"
    },
    {
        "name": "PHARMACIES ZILIDJI",
        "address": "Derrière le marché d'agoè zongo",
        "phone": "92 61 66 08"
    },
    {
        "name": "PHARMACIES ASSURANCE",
        "address": "Adétikopé, National NO 1, non loin du marché",
        "phone": "93 08 76 76"
    },
    {
        "name": "PHARMACIES KOBOYO",
        "address": "DAVIE, rte de la Nationale No I avant le péage de Davié en face de la Station Sanol",
        "phone": "93 70 48 12"
    },
    {
        "name": "PHARMACIES VITAS",
        "address": "Située à Agoè Assiyéyé du côté ouest",
        "phone": "22 25 63 43"
    },
    {
        "name": "PHARMACIES EXCELLENCE",
        "address": "AGOE Démakpoé Voie CEDEAO",
        "phone": "22 50 24 47"
    },
    {
        "name": "PHARMACIES ESPACE VIE",
        "address": "AGOE Logopé non loin de place de Loisir BKS 2",
        "phone": "99 85 89 07"
    },
    {
        "name": "PHARMACIES LA BARAKA",
        "address": "Agoè LOGOPE, non loin de l'ECOLE LA BRUYERE A PROXIMITE DU CAMP GP",
        "phone": "90 17 49 28"
    },
    {
        "name": "PHARMACIES SANGUERA",
        "address": "Près du lycée Sanguéra",
        "phone": "70 42 80 80"
    },
    {
        "name": "PHARMACIES SAG'BIBA",
        "address": "AGOE-Nanegbe à côté de la station T-Oil",
        "phone": "91 83 87 83"
    },
    {
        "name": "PHARMACIES LA SHEKINAH",
        "address": "AGOE-NYIVE Atiomé carrefour Amadenta",
        "phone": "93 33 92 05"
    },
    {
        "name": "PHARMACIES NELLY'S",
        "address": "Klémé Agokpanou, non loin du château d'eau, sur la voie de Ségbé à Sanguéra",
        "phone": "92 01 11 00"
    },
    {
        "name": "PHARMACIES MAWUNYO",
        "address": "AGOE-Sogbossito, route de Mission TOVE en face de la station OANDO",
        "phone": "70 42 34 64"
    },
    {
        "name": "PHARMACIES A DIEU LA GLOIRE",
        "address": "Marché de Légbassito, à côté de la Poste, sur le grand contournement",
        "phone": "93 26 36 00"
    },
    {
        "name": "PHARMACIES VERONIQUE",
        "address": "Avépozo en face de l'école nationale de gendarmerie D'Avépozo",
        "phone": "92 03 40 40"
    },
    {
        "name": "PHARMACIES LE DESTIN",
        "address": "A côté de l'Agence ECOBANK de Baguida",
        "phone": "70 41 15 41"
    },
    {
        "name": "PHARMACIES SAINTE MARIE",
        "address": "DJAGBLE, Non loin du marché d'Avéta (Ada Adoté-kopé)",
        "phone": "92 85 97 94"
    },
    {
        "name": "PHARMACIES SAINT PIO",
        "address": "KLOBATEME, non loin du CMS Klobatèmé et près du complexe scolaire Le Bon Samaritain",
        "phone": "93 40 40 40"
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
