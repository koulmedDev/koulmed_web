@extends('layout')

@section('title', 'Accueil')

@section('content')

{{-- section accueil --}}
@include('components.accueil')
{{-- section accueil --}}

{{-- section services --}}
@include('components.services')
{{-- section services --}}

@endsection
