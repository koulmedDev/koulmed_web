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
            <img src="{{ asset('images/logos/logo1.png') }}" alt="Logoipsum" class="partner-logo">
        </div>
        <div class="partner">
            <img src="{{ asset('images/logos/logo2.png') }}" alt="Logoipsum" class="partner-logo">
        </div>
        <div class="partner">
            <img src="{{ asset('images/logos/logo3.png') }}" alt="Logoipsum" class="partner-logo">
        </div>
        <div class="partner">
            <img src="{{ asset('images/logos/logo4.png') }}" alt="Logoipsum" class="partner-logo">
        </div>
    </div>
</section>

<style>
    .hero-section {
        position: relative;
        background-color: #0055A4;
        color: white;
        border-radius: 10px;
        margin: 30px;
    }

    .hero-container {
        display: flex;
        max-width: 1200px;
        margin: 0 auto;
        padding: 50px 20px;
    }

    .hero-content {
        flex: 1;
        padding-right: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .hero-title {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .hero-subtitle {
        font-size: 1.1rem;
        margin-bottom: 30px;
        opacity: 0.9;
    }

    .subscribe-form {
        display: flex;
        margin-top: 10px;
        max-width: 500px;
    }

    .email-input {
        flex-grow: 1;
        padding: 12px 15px;
        border: none;
        border-radius: 4px 0 0 4px;
        font-size: 1rem;
    }

    .subscribe-button {
        padding: 12px 20px;
        background-color: #7AB800;
        color: white;
        border: none;
        border-radius: 0 4px 4px 0;
        font-size: 0.9rem;
        cursor: pointer;
        white-space: nowrap;
    }

    .hero-image {
        flex: 1;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .hero-image img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .partners-bar {
        display: flex;
        justify-content: space-around;
        align-items: center;
        background-color: #1D2B3A;
        padding: 20px;
    }

    .partner {
        flex: 1;
        text-align: center;
    }

    .partner-logo {
        max-width: 120px;
        height: auto;
        filter: grayscale(100%) brightness(2);
        opacity: 0.7;
        transition: opacity 0.3s ease;
    }

    .partner-logo:hover {
        opacity: 1;
    }

    @media screen and (max-width: 768px) {
        main {
        padding: 20px;
    }

    .hero-section {
        margin: 20px;
    }

    .hero-content {
        text-align: center;
        padding-right: 0;
        margin-bottom: 20px;
    }
    .hero-container {
        padding: 30px 20px;
    }

    .hero-title {
        font-size: 2rem;
    }


    .subscribe-form {
        flex-direction: column;
        align-items: center;
    }

    .email-input {
        width: 100%;
        margin-bottom: 10px;
        border-radius: 4px;
    }

    .subscribe-button {
        width: 100%;
        border-radius: 4px;
    }

    .hero-image {
        justify-content: center;
    }

    .hero-image img {
        max-width: 90%;
    }

    .partners-bar {
        flex-wrap: wrap;
    }

    .partner {
        flex-basis: 50%;
        padding: 10px;
    }
    }

    @media screen and (max-width: 480px) {
        .hero-title {
        font-size: 1.8rem;
    }

    .hero-subtitle {
        font-size: 1rem;
    }

    .subscribe-form {
        width: 100%;
    }

    .email-input {
        width: 100%;
        margin-bottom: 10px;
        border-radius: 4px;
    }

    .subscribe-button {
        width: 100%;
        border-radius: 4px;
    }

    .partner {
        flex-basis: 100%;
    }

    .partner-logo {
        max-width: 100px;
    }
    }
</style>

@endsection
