<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacies de Garde - Lomé</title>
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
        <img src="{{asset('images/logo.png')}}" alt="Koulmed Logo" class="logo" height="60px">
        </div>
        <h1>Pharmacies de Garde - Lomé</h1>
        <span class="period">
            <i class="fas fa-calendar-alt"></i>
            Du 24 au 31 Mars 2025
        </span>
    </div>
    
    <div class="search-container">
        <i class="fas fa-search search-icon"></i>
        <input type="text" id="searchInput" class="search-input" placeholder="Rechercher une pharmacie par nom ou quartier...">
    </div>
    
    <div class="pharmacy-grid" id="pharmacyGrid">
        <!-- Les pharmacies seront générées dynamiquement ici -->
    </div>
    
    <div class="footer">
        <p>© 2025 Koulmed - Liste mise à jour le 24 Mars 2025</p>
    </div>
    
    <script>
        // Données des pharmacies
        const pharmacies = [
            {
                name: "PHARMACIE JEANNE D'ARC",
                address: "Près de Marox-Renault-Star",
                phone: "90 86 40 51"
            },
            {
                name: "PHARMACIE SANTE",
                address: "Près de NOPATO",
                phone: "70 44 91 37"
            },
            {
                name: "PHARMACIE AMESSIAME-BE",
                address: "Marché de Bè",
                phone: "96 32 97 60"
            },
            {
                name: "PHARMACIE DES APÔTRES",
                address: "49, Bd Moboutou Sese Seko, Akodésséwa, non loin du Centre de Formation CAMA",
                phone: "70 45 38 05"
            },
            {
                name: "PHARMACIE OCEANE",
                address: "Rue HOULATA, rue de I'OCAM, face Hôtel de la PAIX",
                phone: "96 75 25 02"
            },
            {
                name: "PHARMACIE HORIZON",
                address: "165, Bd du 13 janvier Nyékonakpoè. Face Sapeurs-Pompiers à côté de l'immeuble AAC.",
                phone: "90 56 52 56"
            },
            {
                name: "PHARMACIE SOURCE DE VIE",
                address: "Face Collège Protestant Tokoin Lomé",
                phone: "90 88 25 82"
            },
            {
                name: "PHARMACIE LIBERATION",
                address: "Avenue Libération Prolongée",
                phone: "96 80 09 35"
            },
            {
                name: "PHARMACIE CAMPUS",
                address: "ADEWI - Boulevard de la Kara à côté de UTB",
                phone: "96 80 08 85"
            },
            {
                name: "PHARMACIE NOTRE DAME",
                address: "Rte de l'Aéroport entre la foire TOGO 2000 et l'Aéroport",
                phone: "96 80 10 12"
            },
            {
                name: "PHARMACIE LA PROSPERITE",
                address: "Bd Eyadema entre l'immeuble EDA OBA et la Direction Police Judiciaire (DPJ)",
                phone: "96 80 09 91"
            },
            {
                name: "PHARMACIE MADINA",
                address: "WUITI en face de la cité de la CNSS à côté de UTB Novissi",
                phone: "91 18 33 33"
            },
            {
                name: "PHARMACIE ST PIERRE",
                address: "Sagboville Hédzranawé. Boulevard Haho",
                phone: "70 43 26 67"
            },
            {
                name: "PHARMACIE DEO GRATIAS",
                address: "Rue Notre Dame de la Miséricorde KEGUE DINGBLE",
                phone: "96 28 57 13"
            },
            {
                name: "PHARMACIE PEUPLE",
                address: "Rue Santiagou, près du marché NUKAFU 06 BP 61217 Lomé 06",
                phone: "98 25 04 86"
            },
            {
                name: "PHARMACIE BA-AYETA",
                address: "KEGUE, Zogbédji non loin de la station Ouando après le pont de Kégué",
                phone: "97 72 69 69"
            },
            {
                name: "PHARMACIE UNION",
                address: "Bd Malfakassa face crèmerie BAMUDAS - BE KPOTA",
                phone: "96 32 97 26"
            },
            {
                name: "PHARMACIE LE PROGRES",
                address: "Grand contournement, face EPPL Universelle, non loin de la Gendarmerie d'AHADZI-Kpota",
                phone: "70 45 86 55"
            },
            {
                name: "PHARMACIE LA RUCHE",
                address: "Attiégou derrière la clôture de l'aéroport voie menant au Grand Contournement, non loin de l'école les Savoirs",
                phone: "91 54 16 16"
            },
            {
                name: "PHARMACIE ADIDOGOME",
                address: "Face au camp 2ème RI d'Adidogomé",
                phone: "91 05 7821"
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