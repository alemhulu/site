<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MoE</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       <link rel="stylesheet" href="css/style.css">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"> -->
        <div class=" bg-gray-100 dark:bg-gray-900 ">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                  
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                        
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif
          

             <div id="content">
                <div class="mt-3"></div>
                    <div id="result">
                      @foreach($types as $type)
                        @if(count($type->allresources)>0)
                          <h4 class="mt-3 ml-2 bg-light">{{$type->name}}</h4>
                          <div class="container-fluid">
                            <div class="row">
                              @foreach($type->allresources->take(4) as $resource)
                                <div class="col-md-3 " id="linkColor">
                                  <div class="card">
                                        @if($resource->media->name == "Document"||$resource->media->name == "document" )
                                          <a href="{{url('user',[$resource->id, $type->id])}}">
                                          <img src="{{$resource->thumbnailLocation}}" width="270px" height="150px"></a>
                                        @elseif($resource->media->name == "Video"||$resource->media->name == "video")
                                          <a href="{{url('user',[$resource->id, $type->id])}}">
                                            <img src="{{$resource->thumbnailLocation}}" width="270px" height="150px"></a>
                                        @endif
                                        <div class="card-body">
                                          @if($resource->unit_id=="" || $resource->subunit_id=="" || $resource->grade_id=="")
                                            <h5 class="card-title">{{$resource->course->name}} </h5>
                                            <h6 class="card-text">{{$resource->description}} </h6>
                                            <h6 class="card-text"><small class="text-muted">Last updated 3 mins ago</small></h6>
                                          @else
                                            <h5 class="card-title">G-{{$resource->grade->name}} {{$resource->course->name}}</h5>
                                            <h6 class="card-text">Unit- {{$resource->unit->name}} {{$resource->unit->title}}</h6> 
                                            <h6 class="card-text">Subunit {{$resource->subunit->name}} {{$resource->subunit->title}}</h6>
                                            <h6 class="card-text"><small class="text-muted">Last updated 3 mins ago</small></h6>
                                          @endif
                                        </div>
                                    </div>  
                                  </div>
                              @endforeach
                            </div>
                        </div> 
                        @endif  
                    @endforeach
                    </div>
                </div>
            

        
                <footer class="bg-white sticky-footer">
                    <div class="container my-auto">
                        <div class="text-center my-auto copyright"><span>Copyright © Brand 2020</span></div>
                    </div>
                </footer>
   
    <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
       </div> 
    </body>
</html>
