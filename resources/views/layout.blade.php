<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Koulmed</title>
  <link rel="icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/accueil.css')}}">
</head>
<body>
  <!-- Header -->
    @include('components.header')
     <!-- Header -->

  <!--  contenu  -->
  <main>
   @yield('content')
  </main>

  <!-- Footer -->
  @include('components.footer')
   <!-- Footer -->

  <script src="{{asset('js/script.js')}}"></script>
</body>
</html>
