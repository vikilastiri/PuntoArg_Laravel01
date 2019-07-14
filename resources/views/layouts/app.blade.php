<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('views.name', 'PuntoARG') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto+Condensed" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

  	<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet">
  		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/puntoarg.css') }}" rel="stylesheet">




</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-blue shadow-sm">
            <div class="container">
                <a class="marcalogo" href="{{ url('/') }}">
                  PuntoARG
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon "></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->

                    <ul class="navbar-nav ml-auto ">

                      <li class="nav-item dropdown">
                        <a class="linkmenu "href="/attractions">Atracciones</a>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="linkmenu dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Tarjetas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <span class="dropdown-header">.ArgPass</span>
                          <span class=""></span>
                          <a class="dropdown-item" href="#">Tarjeta 3 Días</a>
                          <a class="dropdown-item" href="#">Tarjeta 7 Días</a>
                          <a class="dropdown-item" href="#">Tarjeta 15 Días</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Formas de pago</a>
                          <a class="dropdown-item" href="#">FAQ</a>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="linkmenu "href="/cart">Carrito</a>
                      </li>
                        <!-- Authentication Links -->
                        @guest
                          @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="linkmenu" href="{{ route('login') }}">{{ __('ingresar') }} </a>
                            </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="linkmenu dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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

        <main class="py-4">
            @yield('content')
        </main>
        @section('footer')
        <footer class="footer ">
          <div class="container secciones ">


          <section class="mas-info " >
            <h2>Más Info:</h2>
            <ul>
          <div class="infocard">
          <div class="info">

            <li><a href="#"><i class="far fa-credit-card"></i><br>Formas de Pago</a>
            </li>

              </div>

              <div class="info">


              <li><a href="#"><i class="fas fa-store"></i><br>PostVenta</a></li>
                </div>
                </div>
            </ul>
          </section>

          <section class="oficinas">
            <h2>Nuestras Oficinas</h2>
             <p> Av. Monroe 860<br>
            CABA, Buenos Aires<br></p>

            <p>
            <i class="fas fa-mobile-alt"></i>11-5263-7400 </p>

          </section>

          <section class="social">
            <h2>¡Seguinos!</h2>
            <ul>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
          </section>
          </div>
        </footer>
        @show
    </div>
</body>
</html>
