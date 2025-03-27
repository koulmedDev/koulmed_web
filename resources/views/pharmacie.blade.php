@extends('layout')

@section('title', 'Pharmacie de garde')

@section('content')
    <section id="pharmacies-on-duty" class="pharmacies-on-duty section">
        <!-- Titre principal avec animation -->
        <div class="container text-center" data-aos="zoom-in">
            <h1 class="display-4 fw-bold mb-3">Pharmacies de Garde</h1>
            <p class="lead text-muted mb-5">Trouvez rapidement une pharmacie de garde parmi celle qui sont ouvert cette semaine, disponible 24/7 pour vos besoins urgents.</p>
        </div>

        <!-- Liste des pharmacies -->
        <div class="container">
            <div class="row g-4">
                @foreach($pharmacies as $pharmacie)
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="card pharmacy-card h-100 shadow-sm border-0">
                            <div class="card-body text-center">
                                <!-- Icône animée -->
                                <div class="icon mb-3">
                                    <i class="fas fa-prescription-bottle-alt fa-3x text-success animate__animated animate__pulse animate__infinite"></i>
                                </div>
                                <!-- Nom de la pharmacie -->
                                <h5 class="card-title fw-bold">{{ $pharmacie->name }}</h5>
                                <!-- Informations supplémentaires -->
                                <p class="card-text text-muted">
                                    <i class="fas fa-map-marker-alt me-2"></i>{{ $pharmacie->address }}<br>
                                    <i class="fas fa-phone me-2"></i>{{ $pharmacie->phone }}<br>
                                    {{-- <i class="fas fa-clock me-2"></i>Ouvre jusqu'à {{ $pharmacie->closing_time ?? 'inconnu' }} --}}
                                </p>
                                <!-- Bouton stylé -->
                                {{-- <a href="#" class="btn btn-outline-success btn-sm">Voir sur la carte</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Ajout de styles personnalisés -->
    <style>
        .pharmacy-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .pharmacy-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
        }
        .icon i {
            color: #77BA25;
        }
    </style>

    <!-- Ajout de la bibliothèque Animate.css pour les animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection
