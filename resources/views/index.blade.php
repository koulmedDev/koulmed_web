@extends('layout')

@section('title', 'Accueil')

@section('content')

 <!-- Hero Section -->
 @include('components.hero')
 <!-- /Hero Section -->

  <!-- Featured Services Section -->
  @include('components.services')
  <!-- /Featured Services Section -->

  <!-- Call To Action Section -->
  <section id="call-to-action" class="call-to-action section accent-background">

    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
          <div class="text-center">
            <h3>In an emergency? Need help now?</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="cta-btn" href="#appointment">Make an Appointment</a>
          </div>
        </div>
      </div>
    </div>

  </section><!-- /Call To Action Section -->

  <!-- About Section -->
  @include('components.about')
  <!-- /About Section -->


  <!-- Appointment Section -->
   {{-- @include('components.giveavis') --}}
  <!-- /Appointment Section -->

  <!-- Testimonials Section -->
  @include('components.avis')
  <!-- /Testimonials Section -->

  <!-- blog Section -->
 @include('components.blog')
  <!-- /blog Section -->

  <!-- Faq Section -->
  @include('components.faq')

  <!-- /Faq Section -->

  <!-- Contact Section -->
  @include('components.contact')
  <!-- /Contact Section -->

@endsection
