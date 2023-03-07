<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Vapps</title>
    <link rel="icon" type="image/x-icon" href="{{URL::asset('images/logo.png')}}" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <!-- LOGO PRINCIPAL -->
    <div class="d-flex justify-content-center logo">
        <a href="{{ url('/') }}">
          <!-- <-----REDIRECCION -->
          <img src="{{URL::asset('images/full_logo.png')}}" alt="Logo_vapps" class="img-fluid" />
        </a>
      </div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">{{ __('Inicio') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('shishas') }}">{{ __('Shishas') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('pods') }}">{{ __('Pods') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('accesorios') }}">{{ __('Accesorios') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <!-- Button trigger modal 1 -->
                                    <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <img src="{{URL::asset('images/box-arrow-left.svg')}}">
                                        {{ __('Cerrar Sesion') }}
                                    </button>
                                    <!-- Button trigger modal 2 -->
                                    <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                        <img src="{{URL::asset('images/x-lg.svg')}}"> 
                                        Eliminar Cuenta
                                    </button>
                                </div>
                            </li>
                            {{-- Dropdown carrito --}}
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="badge badge-pill badge-dark">
                                        <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity()}}
                                    </span>
                                </a>
            
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color: #9DA0A2">
                                    <ul class="list-group" style="margin: 20px;">
                                        @include('partials.cart-drop')
                                    </ul>
            
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <!-- Modal 1 -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">¡ CUIDADO !</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <div class="alert alert-danger" role="alert">
                            Al cerrar sesión se eliminará tu carrito
                          </div>
                        <a class="btn btn-success" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Cerrar Sesion') }}
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    </div>
                </div>
                </div>
            </div>
            <!-- Modal 2 -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">¿ Estas seguro ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <div class="alert alert-danger" role="alert">
                            Se eliminará tu cuenta junto todos tus datos
                          </div>
                          @guest
                          ...
                          @else
                            <a href="{{route('deleteuser',Auth::user()->id)}}" class="btn btn-danger">Eliminar {{ Auth::user()->email }}</a>
                          @endguest
                    </div>
                </div>
                </div>
            </div>
            @yield('content')
        </main>
    </div>
    <!-- FOOTER -->
    <footer class="border-top pt-5 mt-5">
        <div class="container-xl">
            <div class="row text-center">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h3 class="mb-4">Categorías</h3>
                    <nav class="d-flex flex-column">
                        <a class="text-decoration-none text-dark" href="#">Shishas</a>
                        <a class="text-decoration-none text-dark" href="#">Pods</a>
                        <a class="text-decoration-none text-dark" href="#">Accesorios</a>
                        <a class="text-decoration-none text-dark" href="#">Encendido</a>
                        <a class="text-decoration-none text-dark" href="#">Cazoletas</a>
                    </nav>
                </div>
    
                <div class="col-md-4 mb-4 mb-md-0">
                    <h3 class="mb-4">Sobre nosotros</h3>
                    <nav class="d-flex flex-column">
                        <a class="text-decoration-none text-dark" href="#">¿Quienes somos?</a>
                        <a class="text-decoration-none text-dark" href="#">Ubicanos</a>
                        <a class="text-decoration-none text-dark" href="#">Nuestro Contacto</a>
                        <a class="text-decoration-none text-dark" href="#">vappsspain@gmail.com</a>
                        <a class="text-decoration-none text-dark" href="#">664 34 56 33</a>
                    </nav>
                </div>
    
                <div class="col-md-4 mb-4 mb-md-0">
                    <h3 class="mb-4">Soporte</h3>
                    <nav class="d-flex flex-column">
                        <a class="text-decoration-none text-dark" href="#">Centro de ayuda</a>
                        <a class="text-decoration-none text-dark" href="#">Seguimiento de pedido</a>
                        <a class="text-decoration-none text-dark" href="#">Politica de empresa</a>
                        <a class="text-decoration-none text-dark" href="#">Derechos reservados</a>
                        <a class="text-decoration-none text-dark" href="#">Porveedores</a>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="mt-4 mb-4">Siguenos</h2>
                </div>
                <div class="col-12 text-center mb-4">
                    <img src="{{URL::asset('images/socials/instagram.svg')}}" alt="instagram" class="iconos">
                    <img src="{{URL::asset('images/socials/facebook.svg')}}" alt="facebook" class="iconos">
                    <img src="{{URL::asset('images/socials/twitter.svg')}}" alt="twitter" class="iconos">
                    <img src="{{URL::asset('images/socials/tiktok.svg')}}" alt="tiktok" class="iconos">
                </div>
            </div>
        </div>
    </footer>

    <div class="bg-dark text-white">
        <p class="text-center p-4 m-0">
          &copy; 2023 Vapps Spain. Todos los derechos reservados.
        </p>
        <div class="container">
            <i class="fa fa-apple" id="apple"></i>
            <i class="fa fa-twitter" id="twitter"></i>
            <i class="fa fa-github-square github" id="github"></i>
            <i class="fa fa-facebook-square" id="facebook"></i>
        </div>
      </div>
</body>
</html>
