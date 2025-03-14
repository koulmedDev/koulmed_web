@extends('layout')

@section('title', 'Accueil')

@section('content')

<section class="hero-section">
    <div class="hero-container">
        <div class="hero-content">
            <h1 class="hero-title">Koulmed, Votre Hôpital à portée de mains</h1>
            <p class="hero-subtitle">Des soins médicaux à domicile, simplement et rapidement à Lomé</p>

            <div class="subscribe-form">
                <input type="email" placeholder="Entrez votre mail" class="email-input">
                <button class="subscribe-button">S'abonner à Koulmed</button>
            </div>
        </div>

        <div class="hero-image">
            <img src="{{ asset('images/medecin-avec-femme.png') }}" alt="Médecin prenant la tension d'une patiente">
        </div>
    </div>

    <div class="partners-bar">
        <div class="partner">
            {{-- <img src="{{ asset('images/logos/logo1.png') }}" alt="Logoipsum" class="partner-logo"> --}}
            <p class="partner-logo"> logo</p>
        </div>
        <div class="partner">
            <p class="partner-logo"> logo</p>
        </div>
        <div class="partner">
            <p class="partner-logo"> logo</p>
        </div>
        <div class="partner">
            <p class="partner-logo"> logo</p>
        </div>
    </div>
</section>

@endsection
