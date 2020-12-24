<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MoE</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    @yield('singleStyle')
</head>
<body style="overflow-x:hidden;" >
       
        @include('inc.nav')
        

        <div>
            @include('inc.messages')
            @yield('content')
            
        </div>
        
    </div>
    <script src="/assets/js/jquery.min.js"></script>
    <script>
function view(){
                var file_id=document.getElementById("fileId").value;
               $.ajax
                ({
                        url:"{{route('view')}}",
                        method:'Get',
                        data:{file_id:file_id},
                        success:function(response)
                        {
                        },
                        error: function(error)
                        {
                              alert("Error!  ");
                        }
                });
}
</script>

    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/chart.min.js"></script>
    <script src="/assets/js/bs-init.js"></script>
    <script src="/assets/js/theme.js"></script>
    
</body>
</html>

