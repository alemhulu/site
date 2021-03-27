<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
   <meta name="MoE" content="Ministry of Education">
  <meta name="author" content="Alemhulu AWekelgne">
    <meta name="description" content="The MoE E-Learning and D-Library is a web portal that provides access to educational digital resources to students and educational staff. The portal has been designed Easily access digital resources in a “YouTube” like style. A functionality to read pdf within the portal. Filter functionality to view contents based on Grade, Course, Units, Sub- Units, etc And	Search functionality by keywords."/>
  <meta name="google-site-verification" content="YA8sQHO3FyF0B5Ozb0Y96IbN3kgetyaR-fOIN-fa3dk" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>

  @if(!\Request::is('login') && !\Request::is('register'))
    @include('partial.navbar')
  @endif

  @include('flash-message')

  @yield('content')


  @if(!\Request::is('login') && !\Request::is('register'))
    @include('partial.footer')
  @endif

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
