<!-- resources/views/pharmacies/index.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pharmacies de Garde - Lomé</title>
  <link href="{{asset('images/logotype.png')}}" rel="icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
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

    .footer1 {
      text-align: center;
      margin-top: 60px;
      padding-top: 20px;
      color:linear-gradient(110deg, #78BA25 0%, #0056b3 100%);
      font-size: 2rem;
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
      <img src="{{ asset('images/logo.png') }}" alt="Koulmed Logo" class="logo" />
    </div>
    <h1>Pharmacies de Garde - Lomé</h1>
    @forelse($periodes as $periode)
      <span class="period">
        <i class="fas fa-calendar-alt"></i>
        {{ $periode->titre }}
      </span>
    @empty
      <p>Aucune période définie.</p>
    @endforelse
  </div>

  <div class="search-container">
    <input type="text" class="search-input" id="searchInput" placeholder="Rechercher une pharmacie par nom ou quartier..." />
  </div>

  <div class="pharmacy-grid" id="pharmacyGrid">
    @forelse($pharmacies as $pharmacy)
      <div class="pharmacy-card" data-name="{{ strtolower($pharmacy->name) }}" data-address="{{ strtolower($pharmacy->address) }}">
        <div class="pharmacy-content">
          <div class="pharmacy-header">
            <div class="icon-container">
              <i class="fas fa-prescription-bottle-alt"></i>
            </div>
            <div>
              <div class="pharmacy-name">{{ $pharmacy->name }}</div>
            </div>
          </div>
          <div class="pharmacy-details">
            <div class="address">{{ $pharmacy->address }}</div>
            <a href="tel:{{ $pharmacy->phone }}" class="contact-btn">
              <i class="fas fa-phone"></i>{{ $pharmacy->phone }}
            </a>
          </div>
        </div>
      </div>
    @empty
      <p>Aucune pharmacie de garde disponible actuellement.</p>
    @endforelse
  </div>

  <div class="footer1">
    <p>Koulmed souhaite une Prompte guérison aux patients</p>
  </div>
  <div class="footer">
    <p>© 2025 Koulmed - Liste mise à jour le {{ now()->format('d M Y H:i') }}</p>
  </div>

  <script>
    const searchInput = document.getElementById('searchInput');
    const pharmacyCards = document.querySelectorAll('.pharmacy-card');

    searchInput.addEventListener('input', function () {
      const term = this.value.toLowerCase();

      pharmacyCards.forEach(card => {
        const name = card.getAttribute('data-name');
        const address = card.getAttribute('data-address');

        if (name.includes(term) || address.includes(term)) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    });
  </script>
</body>
</html>
