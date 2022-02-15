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
         <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                       {{ __('Admin') }}
                    </x-jet-nav-link>
                </div> 
                
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="collapseButton">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse self-align-center mx-auto" id="navbarSupportedContent">  
             <!-- Right Side Of Navbar -->
                   <!-- Settings Dropdown -->
             <div class="d-flex justify-content-between ml-5">
              <form class="form  justify-content-start  " id="searchForm" style="width: 80%;">
                            <div class="input-group col" ><input class="bg-light form-control border-0 small shadow-sm px-2"  type="text" placeholder="Search for ..." id="myInput" autocomplete="off" type="text" >
                            <div class="input-group-append"><button class="btn btn-outline py-0 shadow-sm zoom" type="submit" ><i class="fas fa-search"></i></button></div>
                            </div>
               </form>    
     <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>
                    <x-jet-dropdown-link href="{{ route('dashboard') }}" >
                            {{ __('Admin') }}
                        </x-jet-dropdown-link>
      
                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                        @endif
                        <x-jet-dropdown-link href="/">
                                {{ __('Home') }}
                         </x-jet-dropdown-link>
                  <x-jet-dropdown-link href="/resources">
                                {{ __('Resources') }}
                            </x-jet-dropdown-link>
                        <div class="border-t border-gray-100"></div>

                        <!-- Team Management -->
                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Team') }}
                            </div>

                            <!-- Team Settings -->
                            <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                {{ __('Team Settings') }}
                            </x-jet-dropdown-link>

                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                    {{ __('Create New Team') }}
                                </x-jet-dropdown-link>
                            @endcan

                            <div class="border-t border-gray-100"></div>

                            <!-- Team Switcher -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Switch Teams') }}
                            </div>

                            @foreach (Auth::user()->allTeams() as $team)
                                <x-jet-switchable-team :team="$team" />
                            @endforeach

                            <div class="border-t border-gray-100"></div>
                        @endif

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown></h2></div></div>

           
          
  </div>
</nav>
