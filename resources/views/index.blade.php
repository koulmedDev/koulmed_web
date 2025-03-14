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

{{-- section a propos --}}
@include('components.rdv')
{{-- section a propos --}}

@endsection
