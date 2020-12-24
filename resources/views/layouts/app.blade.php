</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
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
<script src="/assets/js/jQuery3.5.1.js"></script>
          <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
        <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>

<script>
  document.addEventListener("DOMContentLoaded", function() {

    document.getElementById('button-file').addEventListener('click', (event) => {
      event.preventDefault();

      inputId = 'fileLocation';

      window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
    });

    // second button
    document.getElementById('button-thumbnail').addEventListener('click', (event) => {
      event.preventDefault();

      inputId = 'thumbnailLocation';

      window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
    });
  });

  // input
  let inputId = '';

  // set file link
  function fmSetLink($url) {
    document.getElementById(inputId).value = $url;
  }
</script>
</body>

</html>
