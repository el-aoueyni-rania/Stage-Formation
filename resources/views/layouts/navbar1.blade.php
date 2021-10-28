<nav  class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
       {{-- <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a> --}}

       <img class="k" src="{{ asset('assets/img/centre.jfif') }}"  />
       <h6 class="ft" >
        <a  class="navbar-brand text-white " href="{{ url('/') }}" >
       Centre It Plus
        </a>
        </h6>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button> 

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav text-uppercase ms-auto py-2 py-lg-0">
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('dashboard') }}" >
                        <div class="sb-nav-link-icon"></div>
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li class="nav-item" style="font-style: oblique; text-transform: lowercase;">
                    <div class="dropdown show">
                        <a class="nav-link collapsed" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="sb-nav-link-icon"></div>
                                Formations  
                                <i class="fas fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu bg-light" aria-labelledby="dropdownMenuLink">
                            <a style="text-transform: lowercase;" class="dropdown-item" href="{{route('premiereAAd')}}">Première année</a>
                            <a style="text-transform: lowercase;" class="dropdown-item" href="#">Deuxième année</a>
                            <a style="text-transform: lowercase;" class="dropdown-item" href="#">Troisième année</a>
                            <a style="text-transform: lowercase;" class="dropdown-item" href="#">Quatrième année</a>
                            <a style="text-transform: lowercase;" class="dropdown-item" href="#">Sinquième année</a>
                            <a style="text-transform: lowercase;" class="dropdown-item" href="#">Sixième année</a>
                            <a style="text-transform: lowercase;" class="dropdown-item" href="#">Septième année</a>
                            <a style="text-transform: lowercase;" class="dropdown-item" href="#">Huitième année</a>
                            <a style="text-transform: lowercase;" class="dropdown-item" href="#">Neuvième année</a>
                            <a style="text-transform: lowercase;" class="dropdown-item" href="#">Première année secondaire</a>
                            <a style="text-transform: lowercase;" class="dropdown-item" href="#">Deuxième année secondaire</a>
                            <a style="text-transform: lowercase;" class="dropdown-item" href="#">Troisième année secondaire</a>
                            <a style="text-transform: lowercase;" class="dropdown-item" href="#">Baccalauréat</a>
                        </div>
                    </div>     
                </li>          

                <li class="nav-item" style="font-style: oblique;text-transform: lowercase;">
                    <a class="nav-link collapsed" href="/messages" >
                        <div class="sb-nav-link-icon"></div>
                        messages
                    </a>
                </li>
                <li class="nav-item" style="font-style: oblique; text-transform: lowercase;">
                    <a class="nav-link collapsed" href="/utilisateurs" >
                        <div class="sb-nav-link-icon"></div>
                        Utilisateurs
                    </a>
                </li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Connection') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Déconnection') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>














