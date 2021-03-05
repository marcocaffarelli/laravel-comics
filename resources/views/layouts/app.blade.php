<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('layouts.first_nav')
    <div class="app_blade">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container d-flex">
                <div>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="../img/logo.jpg" alt="" style="width:100px">
                    </a>
                </div>

                <div class="link_nav">
                    <ul class="d-flex">
                        <li><a href="#">CHARACTERS</a></li>
                        <li><a href="{{route('comics_api')}}">COMICS</a></li>
                        <li><a href="#">MOVIES</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">GAMES</a></li>
                        <li><a href="#">VIDEOS</a></li>
                        <li><a href="#">NEWS</a></li>
                        <li><a href="#">SHOP <i class="fas fa-chevron-down"></i></a></li>
                    </ul>
                </div>
                
                
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer>
        <div class="container_footer">
            <div class="parte_superiore_footer">
                <ul class="d-flex">
                    <li><img src="../img/spiderm.jpg" alt="">MARVEL COMICS</li>
                    <li><img src="../img/iron.jpg" alt="">MARVEL MERCHANDISE</li>
                    <li><img src="../img/cap.jpg" alt="">PRINT SUBSCRIPTIONS</li>
                    <li><i class="fas fa-map-marker-alt"></i><span>COMIC SHOP LOCATOR</span></li>
                </ul>
            </div>
            <div class="parte_centrale_footer d-flex">
                <div class="link_footer d-flex">
                    <div class="d-flex">
                        <div>
                            <ul>
                                <li><h4>MARVEL COMICS</h4></li>
                                <li><a href="#">Characters</a></li>
                                <li><a href="#">Comics</a></li>
                                <li><a href="#">Movies</a></li>
                                <li><a href="#">TV</a></li>
                                <li><a href="#">Games</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">News</a></li>
                                <li><h4>SHOP</h4></li>
                                <li><a href="#">Shop Marvel</a></li>
                                <li><a href="#">Shop Marvel Collectibles</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><h4>MARVEL</h4></li>
                                <li><a href="#">Terms Of Use</a></li>
                                <li><a href="#">Privacy Policy (New)</a></li>
                                <li><a href="#">Advertising</a></li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Subscriptions</a></li>
                                <li><a href="#">Talent Workshop</a></li>
                                <li><a href="#">CPSC Certificates</a></li>
                                <li><a href="#">Shop Helps</a></li>
                                <li><a href="#">Contact U</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><h4>SITES</h4></li>
                                <li><a href="#">MARVEL</a></li>
                                <li><a href="#">MAD Magazine</a></li>
                                <li><a href="#">MARVEL Kids</a></li>
                                <li><a href="#">MARVEL Universe</a></li>
                                <li><a href="#">MARVEL Shop</a></li>
                            </ul>
                        </div>
                    </div>
                    <div>All Sites Content TM and &copy; 2020 MARVEL Entertainment, unless otherwise <span>noted here</span>. All rights reserved <span>Cookies Settings</span></div>
                </div>
                <div class="parte_vuota"></div>
            </div>
            <div class="parte_inferiore_footer">
                <div class="parte_inferiore_container d-flex">
                    <div>SIGN-UP NOW!</div>
                    <div>
                        <span>FOLLOW US</span>
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-youtube"></i>
                        <i class="fab fa-pinterest"></i>
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        </footer>
    </div>
</body>
</html>
