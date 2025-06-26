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
            Du  23 au 30 Juin 2025
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
        <p>© 2025 Koulmed - Liste mise à jour le 23 Juin 2025</p>
    </div>

    <script>
        // Données des pharmacies
        const pharmacies = [
    {
        "name": "PHARMACIE BOULEVARD",
        "address": "Bd. Du 13 Janv. Doulassamé",
        "phone": "90 89 28 49"
    },
    {
        "name": "PHARMACIE HANOUKOPE",
        "address": "Avenue de la Nouvelle Marche, Immeuble Radio Kanal FM",
        "phone": "70 49 96 63"
    },
    {
        "name": "PHARMACIE CRISTAL",
        "address": "Boulevard Hou hët-Boigny",
        "phone": "97 07 12 32"
    },
    {
        "name": "PHARMACIE OCAM",
        "address": "Rue de I'ENTENTE",
        "phone": "92 85 99 55"
    },
    {
        "name": "PHARMACIE KODJOVIAKOPE",
        "address": "Avenue Duisbour",
        "phone": "22 21 89 90"
    },
    {
        "name": "PHARMACIE ROBERTSON",
        "address": "607 Avenue Fran ois MITTERAND Nyékonakpoè",
        "phone": "22 22 28 41"
    },
    {
        "name": "PHARMACIE AGBEGNIGAN",
        "address": "Tokoin Ramco - Gbadago, Av. de la Libération, près du PRÊT À MANGER",
        "phone": "70 20 00 00"
    },
    {
        "name": "PHARMACIE ST KISITO",
        "address": "Bd. de la Kara près du Bar TAMTAM",
        "phone": "96 80 09 64"
    },
    {
        "name": "PHARMACIE KLOKPE",
        "address": "Derrière la Foire Togo 2000",
        "phone": "96 80 10 03"
    },
    {
        "name": "PHARMACIE ST PAUL",
        "address": "Bd. Jean Paul 11",
        "phone": "22 61 85 08"
    },
    {
        "name": "PHARMACIE LE JOURDAIN",
        "address": "Boulevard Léo Id Sédar SENGHOR, face au CEG Tokoin Wuiti",
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
        "address": "Rue Tchamba 964, à 5m de la base de Satom 01 BP : 1391 Hountigomé Lomé - Togo",
        "phone": "92 24 42 70"
    },
    {
        "name": "PHARMACIE MA WULE",
        "address": "54 Bd de l'OTI Rond-Point Gakpoto, Bè-Kpota",
        "phone": "70 45 91 86"
    },
    {
        "name": "PHARMACIE FIDELIA",
        "address": "Bè-Kpota, Route d'Attiégou, près de l'hôtel \"LE REFERENTIEL\"",
        "phone": "96 80 09 18"
    },
    {
        "name": "PHARMACIE SARAH",
        "address": "Près du centre de santé d'Adakpamé",
        "phone": "70 42 69 02"
    },
    {
        "name": "PHARMACIE ELI-BERACA",
        "address": "Route d'Adidogorné, Immeuble SIKOVIC face bureau de poste",
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
        "address": "Apédokoè-Gbomamé, rte d'Atigangomé, Carrefour Obéna, près de l'église Pentécôte",
        "phone": "90 49 44 56"
    },
    {
        "name": "PHARMACIE JAHNAP",
        "address": "A côté de IEPP Gakli Didjolé-Gakli, immeuble Favo",
        "phone": "96 80 09 29"
    },
    {
        "name": "PHARMACIE CONFIANCE",
        "address": "Face GTA",
        "phone": "70 15 78 46"
    },
    {
        "name": "PHARMACIE LUMIERE",
        "address": "AGBALEPEDOGAN - Lossossimé près du Rond-Point de l'Œuf",
        "phone": "70 43 15 49"
    },
    {
        "name": "PHARMACIE GROUPE C",
        "address": "Agbalépédogan face Clinique la Victoire non loin de l'EPP Groupe C",
        "phone": "99 98 20 87"
    },
    {
        "name": "PHARMACIE DES ORCHIDEES",
        "address": "AGOE TELESSOU-LEO 2000",
        "phone": "93 43 10 49"
    },
    {
        "name": "PHARMACIE SOLIDARITE",
        "address": "Rue Avédji Limousine, Près de PUTB Totsi BP : 8919 Lomé - TOGO",
        "phone": "96 80 09 76"
    },
    {
        "name": "PHARMACIE DE LA VICTOIRE",
        "address": "Avédji Wessomé, sur le Bd Faure Gnassingbé (voie douane d'Adidogomé - CarfLimousine), après les rails",
        "phone": "70 45 74 92"
    },
    {
        "name": "PHARMACIE ARC-EN-CIEL",
        "address": "Agoè-Téléssou, à 50m du Carrefour Margot",
        "phone": "70 42 50 00"
    },
    {
        "name": "PHARMACIE SHALOM",
        "address": "Agoè-Cacavéli non loin de BKS. Sur Bd Faure GNASSINGBE",
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
        "name": "PHARMACIE SALA HOUBEIDA",
        "address": "Agoè Kelegougan Koffi Panou, Carrefour O'Queens",
        "phone": "91 91 15 35"
    },
    {
        "name": "PHARMACIE ZONGO",
        "address": "Togbléko é carrefour Hermann entre Orabank et la station Sanol Togblékopé",
        "phone": "70 49 96 55"
    },
    {
        "name": "PHARMACIE TAKOE",
        "address": "Avant la station CAP ESSO de Zongo côté opposé",
        "phone": "91 55 18 04"
    },
    {
        "name": "PHARMACIE ELEMAWUSSI",
        "address": "Adétikopé, Médina, Nationale Nº I, avant PIA (Plateforme Industrielle)",
        "phone": "92 34 06 80"
    },
    {
        "name": "PHARMACIE DIVINA GRACIA",
        "address": "Quartier Agoè-Fiovi Carrefour Bafana-Bafana",
        "phone": "93 83 91 00"
    },
    {
        "name": "PHARMACIE ABRAHAM",
        "address": "AGOE-Logopé Kossigan",
        "phone": "92 25 99 83"
    },
    {
        "name": "PHARMACIE LA MAIN DE DIEU",
        "address": "AGOE ASSIYEYE non loin de l'Eglise des Assemblées de Dieu (Temple Galilée)",
        "phone": "93 40 21 21"
    },
    {
        "name": "PHARMACIE ALTA",
        "address": "AGOE Anonkui Route Mission Tové en face du Centre Culturel Loyola",
        "phone": "70 08 46 46"
    },
    {
        "name": "PHARMACIE ZOSSIME",
        "address": "AGOE - Zossimé",
        "phone": "70 46 26 64"
    },
    {
        "name": "PHARMACIE St PHILIPPE",
        "address": "SANGUERA, Rte Lomé - K alimé rès de la Station-service OANDO",
        "phone": "90 67 33 24"
    },
    {
        "name": "PHARMACIE EVA",
        "address": "SANGUERA, Klikamé, Non loin du T-OIL",
        "phone": "92 16 32 32"
    },
    {
        "name": "PHARMACIE GRATITUDE",
        "address": "Agoè Légbassito Zovadjin non loin du carrefour Avinato",
        "phone": "92 18 94 85"
    },
    {
        "name": "PHARMACIE NOUVELLE TULIPE",
        "address": "Rte de Mission - Tové; Près de la station CAP Agoè-Légbassito",
        "phone": "99 47 00 70"
    },
    {
        "name": "PHARMACIE BAGUIDA",
        "address": "Face CMS de Baguida",
        "phone": "70 42 47 77"
    },
    {
        "name": "PHARMACIE LA FLAMME D'AMOUR",
        "address": "t. Boboleko / K o an Non Loin du cimétière Zogbedjimonou",
        "phone": "70 45 70 14"
    },
    {
        "name": "PHARMACIE SAINTE MARIE",
        "address": "à klemé",
        "phone": "92 85 97 94"
    },
    {
        "name": "PHARMACIE SAINT PIO",
        "address": "KLOBATEME, non loin du CMS Klobatèmé et près du complexe scolaire Le Bon Samaritain",
        "phone": "93 40 40 40"
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
