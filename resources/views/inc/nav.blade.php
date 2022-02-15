<div id="page-top">
  <nav class="navbar navbar-expand-lg navbar-light bg-white ban sticky-top "> 
      <a class="navbar-brand" href="{{ url('/') }}">
          <img class="my-auto" id="logo" src="/assets/img/logom.png" 
                  style="width: 3.7rem;">
      </a>
      <a class="navbar-brand text-center text-secondary" href="{{url('/')}}" >
          <span  class="d-block brandAmharic" >ትምህርት ሚኒስቴር</span> 
          <span class="d-block brandEnglish bold" > E-Learning & D-Library</span> 
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="collapseButton">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">  
          <div class="nav-form-ul">
              <form class="form mt-4" id="searchForm1" >
                  <div class="input-group col" ><input class="bg-light form-control border-0 small shadow-sm px-2 input"  type="text" placeholder="Search for ..." id="myInput1" autocomplete="off" type="text" >
                      <div class="input-group-append"><button class="btn btn-outline py-0 shadow-sm dblue search" type="button" ><i class="fas fa-search "></i></button>
                      </div>
                  </div>
              </form>
              <ul class="nav navbar-nav text-capitalize shadow-nav   d-flex flex-row float-right">
                  <div class="links my-auto" >
                    <a href="http://www.moe.gov.et" target="_blank" class="text-sm text-secondary underline p-1"> 
                                      <button type="button" class="btn btn-sm btn-outline-primary zoom">MoE</button>
                    </a>
                    <a href="http://eict.edu.et" target="_blank" class="text-sm text-secondary underline p-1"> 
                                      <button type="button" class="btn btn-sm btn-outline-primary zoom">EICT</button>
                    </a>
                  
                </div>
                  @if (Route::has('login'))
                      <div class="hidden fixed my-auto float-right ">
                          @auth
                              <form method="POST" action="{{ route('logout') }}">
                                  <a href="{{ url('/admin') }}" class="text-sm text-secondary underline p-1"> 
                                      <button type="button" class="btn btn-sm btn-outline-primary zoom">Admin page</button>
                                  </a>
                                  @csrf
                              </form>
                            @else
                                  <a href="{{ route('login') }}" class="text-sm text-secondary underline p-1" ><button type="button" class="btn btn-sm btn-outline-primary zoom">log in</button></a>
                                  @if (Route::has('register'))
                                      <a href="{{ route('register') }}" class=" text-sm text-secondary underline p-1 "><button type="button" class="btn btn-sm btn-outline-primary zoom" >Register</button></a>
                                  @endif
                            @endif
                        </div>
                    @endif
                
              </ul>      
           </div>
       </div>
   </nav>