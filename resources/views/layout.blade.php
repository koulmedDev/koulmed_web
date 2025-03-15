<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Koulmed</title>
  <link rel="icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/accueil.css')}}">
  <link rel="stylesheet" href="{{asset('css/services.css')}}">
  <link rel="stylesheet" href="{{asset('css/about.css')}}">
  <link rel="stylesheet" href="{{asset('css/rdv.css')}}">
  <link rel="stylesheet" href="{{asset('css/faq.css')}}">
  <link rel="stylesheet" href="{{asset('css/avis.css')}}">
  <link rel="stylesheet" href="{{asset('css/blog.css')}}">

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
