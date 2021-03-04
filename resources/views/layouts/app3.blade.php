<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="MoE" content="Ministry of Education">
    <meta name="author" content="Alemhulu AWekelgne">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MoE</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="icon" href="/assets/img/logom.png">
    @yield('singleStyle')
</head>
<body style="overflow-x:hidden;" id="body" >
    
       @include('inc.nav')
       @include('inc.messages')
       @yield('content')
            
      
    </div>
   
    
</body>
</html>

