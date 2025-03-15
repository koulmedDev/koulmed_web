@extends('layout')

@section('title', 'Accueil')

@section('content')

{{-- section accueil --}}
@include('components.accueil')
{{-- section accueil --}}

{{-- section services --}}
@include('components.services')
{{-- section services --}}

{{-- section a propos --}}
@include('components.about')
{{-- section a propos --}}

{{-- section rdv --}}
@include('components.rdv')
{{-- section rdv --}}

{{-- section faq --}}
@include('components.faq')
{{-- section faq --}}

{{-- section rdv --}}
@include('components.avis')
{{-- section rdv --}}
@endsection
