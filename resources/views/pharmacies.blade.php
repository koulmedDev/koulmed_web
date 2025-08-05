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
            Du 04 au 11 Août  2025
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
        <p>© 2025 Koulmed - Liste mise à jour le 04 Août 2025</p>
    </div>

    <script>
        // Données des pharmacies
        const pharmacies =
    [
    {
        "name": "PHARMACIE PASTEUR",
        "address": "44 Av. de la libération, en face de Brother Home",
        "phone": "91 43 44 84"
    },
    {
        "name": "PHARMACIES 31EME ARRONDISSEMENT",
        "address": "Bd. du 13 Janvier, près de l'Immeuble FIATA",
        "phone": "96 32 97 71"
    },
    {
        "name": "PHARMACIES CRISTAL",
        "address": "Boulevard Hou hët-Boigny",
        "phone": "97 07 12 32"
    },
    {
        "name": "PHARMACIES OCEANE",
        "address": "Rue HOULATA, perpendiculaire rue de I'OCAM, face Hôtel de la PAIX",
        "phone": "96 75 25 02"
    },
    {
        "name": "PHARMACIES KODJOVIAKOPE",
        "address": "Avenue Duisbour",
        "phone": "22 21 89 90"
    },
    {
        "name": "PHARMACIES AVE MARIA",
        "address": "Av de la victoire, face école des sages-femmes",
        "phone": "99 03 20 12"
    },
    {
        "name": "PHARMACIES AMITIE",
        "address": "72 Av. des Hydrocarbures (SOTED)",
        "phone": "70 25 62 57"
    },
    {
        "name": "PHARMACIES GBOSSIME",
        "address": "Non loin du marché de Gbossimé sur le Bd de la KARA",
        "phone": "92 47 61 21"
    },
    {
        "name": "PHARMACIES BAH",
        "address": "Bd mo, Face EPP Hédzranawé",
        "phone": "90 55 79 59"
    },
    {
        "name": "PHARMACIES CITRUS",
        "address": "Attiégou Carrefour DVA, Grand Contournement",
        "phone": "70 44 59 24"
    },
    {
        "name": "PHARMACIES ISIS",
        "address": "Avenue Jean Paul II près des rails NUKAFU Gakpoto",
        "phone": "70 44 83 87"
    },
    {
        "name": "PHARMACIES YEM-BLA",
        "address": "258, Av. Akéï face à la Résidence",
        "phone": "90 88 98 72"
    },
    {
        "name": "PHARMACIES FRATERNITE",
        "address": "Hédzranawé près de la Clinique St Joseph",
        "phone": "96 80 09 19"
    },
    {
        "name": "PHARMACIES APOTHEKA",
        "address": "Face siège Fédération Togolaise de Football, route de Kegué",
        "phone": "70 44 33 33"
    },
    {
        "name": "PHARMACIES CHRIST-ROI",
        "address": "Kagomé",
        "phone": "97 77 12 31"
    },
    {
        "name": "PHARMACIES MAËLYS",
        "address": "1688, Bd Malfakassa - Bè Kpota en Face de NETADI",
        "phone": "70 44 86 79"
    },
    {
        "name": "PHARMACIES MISERICORDE",
        "address": "BE-KPOTA à 300M de NISSAN, A côté de la Station MRS",
        "phone": "96 80 09 45"
    },
    {
        "name": "PHARMACIES DE LA CITE",
        "address": "Boulevard du 30 Août - BP 8461 - LOME - TOGO",
        "phone": "99 08 15 35"
    },
    {
        "name": "PHARMACIES EPIPHANIA",
        "address": "Rue de La Pampa, Carrefour AGBEMADON, ADIDOGOME",
        "phone": "70 40 10 52"
    },
    {
        "name": "PHARMACIES BESDA",
        "address": "Route de Kpalimé , Adidogomé Aménopé 04 BP : 604 Lomé - TOGO",
        "phone": "70 42 68 25"
    },
    {
        "name": "PHARMACIES CONSEIL",
        "address": "Carrefour du CEG Sagbado Logoté",
        "phone": "93 10 92 92"
    },
    {
        "name": "PHARMACIES DODJI",
        "address": "Ségbé Akato, immeuble Akato plage non loin de l'Eglise Catholique d'Akato",
        "phone": "70 29 16 77"
    },
    {
        "name": "PHARMACIES POINT E",
        "address": "506, rue 129 Aflao Gakli (Kiniti Gomè), à Djidjolé dans le von de la pharmacie Djidjolé",
        "phone": "90 37 45 96"
    },
    {
        "name": "PHARMACIES VERTE",
        "address": "Face Ecole du Parti Klikamé",
        "phone": "91 98 50 17"
    },
    {
        "name": "PHARMACIES DELALI",
        "address": "En face de l'hôpital de Cacavéli à 100m entre la Cour d'Appel et le marché de Cacavéli",
        "phone": "99 29 13 13"
    },
    {
        "name": "PHARMACIES NATION",
        "address": "Face ancien Marché TOTSI",
        "phone": "96 80 09 47"
    },
    {
        "name": "PHARMACIES LAUS DEO",
        "address": "Rte de Léo 2000, face Clinique Besthesda",
        "phone": "93 00 65 75"
    },
    {
        "name": "PHARMACIES VITAFLORE",
        "address": "Agoè Vakpossito à 100 m de la station Shell Agoè Vakpossito",
        "phone": "70 40 22 86"
    },
    {
        "name": "PHARMACIES MAINA",
        "address": "Quartier AVEDJI, non loin de Hôpital Source de Vie, à 500m du Carrefour Y",
        "phone": "70 43 65 34"
    },
    {
        "name": "PHARMACIES ADOUNI",
        "address": "Vak ossito-Lo o omé, rès du carrefour AISED",
        "phone": "70 39 39 39"
    },
    {
        "name": "PHARMACIES IRIS",
        "address": "Amadahomé, Imm. Havon, A 500m de la station CAP, Rue 50m à coté des Casses Auto",
        "phone": "91 68 48 04"
    },
    {
        "name": "PHARMACIES NABINE",
        "address": "Sise à Agoè Anomé dit Plateau Route du Bar Plateau",
        "phone": "93 36 26 26"
    },
    {
        "name": "PHARMACIES ADONAÏ",
        "address": "Face Hôtel la Plantation à Agoè-Nyivé",
        "phone": "22 50 04 05"
    },
    {
        "name": "PHARMACIES LE ROCHER",
        "address": "Agoè zongo, sur la route national NO l, près du terrain de jeu de golf",
        "phone": "92 30 06 56"
    },
    {
        "name": "PHARMACIES TCHEP'SON",
        "address": "Face Terminal du Sahel (Togblékopé)",
        "phone": "70 42 94 41"
    },
    {
        "name": "PHARMACIES AMEN",
        "address": "Marché Adétikopé, près de l'Eglise Catholique Christ-Roi",
        "phone": "90 88 55 88"
    },
    {
        "name": "PHARMACIES LA MAIN DE DIEU",
        "address": "AGOE ASSIYEYE non loin de l'église des Assemblées de Dieu (Temple Galilée)",
        "phone": "93 40 21 21"
    },
    {
        "name": "PHARMACIES ALTA",
        "address": "AGOE Anonkui Route Mission Tové en face du Centre Culturel Loyola",
        "phone": "70 08 46 46"
    },
    {
        "name": "PHARMACIES DIVINA GRACIA",
        "address": "Quartier Agoè-Fiovi Carrefour Bafana-Bafana",
        "phone": "93 83 91 00"
    },
    {
        "name": "PHARMACIES ABRAHAM",
        "address": "AGOE - Logopé Kossigan",
        "phone": "92 25 99 83"
    },
    {
        "name": "PHARMACIES DAFEANNE",
        "address": "Agoè-sogbossito,Route reliant le contournement au camp GP,à 300m de l'espace de loisirs privilège plus.",
        "phone": "70 77 69 42"
    },
    {
        "name": "PHARMACIES GANFAT",
        "address": "AGOE DALIKO rès du CarfEDEM (CAMP GI))",
        "phone": "70 22 15 15"
    },
    {
        "name": "PHARMACIES ZOPOMAHE",
        "address": "ZOPOMAHE, sur la route Zossimé - Sanguera à côté de la salle des témoins de Jehovah",
        "phone": "96 28 34 10"
    },
    {
        "name": "PHARMACIES EL-SALI",
        "address": "Rte Lomé-KpaIimé, Aflao Apédokoè Gbomamé, à 50 m de la quaincaillerie MACO",
        "phone": "97 53 44 44"
    },
    {
        "name": "PHARMACIES Nouvelle TULIPE",
        "address": "Rte de Mission - Tové; Près de la station CAP Agoè-Légbassito",
        "phone": "99 47 00 70"
    },
    {
        "name": "PHARMACIES GRATITUDE",
        "address": "Agoè Le bassito Zovadjin non loin du carrefour Avinato",
        "phone": "92 18 94 85"
    },
    {
        "name": "PHARMACIES HYGEA",
        "address": "Face Lycée publique de Baguida sur la rte d'Afanoukopé",
        "phone": "99 27 36 36"
    },
    {
        "name": "PHARMACIES VERSEAU",
        "address": "Près de la maison Bateau Baguida",
        "phone": "90 01 90 29"
    },
    {
        "name": "PHARMACIES LUMEN",
        "address": "DJAGBLE, En face de l'EPP (Plakomé)",
        "phone": "70 41 68 36"
    },
    {
        "name": "PHARMACIES HELENE",
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
