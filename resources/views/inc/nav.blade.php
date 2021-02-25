<div id="page-top">
<nav class="navbar navbar-expand-lg navbar-light bg-light ban sticky-top ">
 
                <a   class="navbar-brand" href="{{ url('/') }}">
                   <img class="my-auto" id="logo" src="/assets/img/logom.png" 
                        style="width: 3.7rem;">
                </a>
                <a class="navbar-brand text-center text-secondary" href="{{url('/')}}" >
                     <span id="text"  class="d-block" style="font-size: 16px;font-family: sans-serif, Noto sans Ethiopic !important;">ትምህርት ሚኒስቴር</span> 
                     <span id="text" class="d-block" style="font-size: 13px;font-family: sans-serif Gotham ;">Ethiopian Schools Digital Library</span> 
                </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="collapseButton">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse self-align-center mx-auto" id="navbarSupportedContent">  
    <div class="d-flex justify-content-between ml-5">
      <form class="form  justify-content-start  " id="searchForm1" style="width: 80%;">
                            <div class="input-group col" ><input class="bg-light form-control border-0 small shadow-sm px-2"  type="text" placeholder="Search for ..." id="myInput1" autocomplete="off" type="text" >
                            <div class="input-group-append"><button class="btn btn-outline py-0 shadow-sm zoom" type="submit" ><i class="fas fa-search"></i></button></div>
                            </div>
               </form>
        <ul class="nav navbar-nav text-capitalize shadow-nav justify-content-end float-right">
        
  
                   @if (Route::has('login'))
                    <div class="hidden fixed my-auto float-right p-2 ">

                            @auth

                            
                              <form method="POST" action="{{ route('logout') }}"><a href="{{ url('/admin') }}" class="text-sm text-secondary underline "> <button type="button" class="btn btn-sm btn-outline-primary zoom">Admin page</button></a>
                            @csrf

                            
                        </form>
                            @else
                            <a href="{{ route('login') }}" class="text-sm text-secondary underline " ><button type="button" class="btn btn-sm btn-outline-primary zoom">log in</button></a>
                             @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class=" text-sm text-secondary underline ml-4 "><button type="button" class="btn btn-sm btn-outline-primary zoom" >Register</button></a>
                            @endif
                        @endif
                    </div>
                @endif

   </ul>      
  
  </div>
</div>
</nav>