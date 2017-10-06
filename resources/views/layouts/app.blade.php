<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Proyecto</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{URL::asset('css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/estilo.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    

       <!-- Scripts -->
    <script src="{{URL::asset('js/jquery-1.12.4.js')}}"></script>
    <script src="{{URL::asset('js/jquery-ui.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/bootbox.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap-notify.min.js')}}"></script>
    <script src="{{URL::asset('js/Chart.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/funciones.js')}}"></script>
    <script src="{{URL::asset('js/utils.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Proyecto
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">

                      <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Comercial <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="/planificar/campana">Planificar Campaña</a></li>
                        <li><a href="/analizar/campana">Analizar Campañas</a></li>
                        <li><a href="/analizar/resultados">Analizar Resultados</a></li>
                      </ul>
                      </li>
                              

                    
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Siniestros<span class="caret"></span</a>
                      <ul class="dropdown-menu">
                        <li><a href="/analizar/siniestro">Analizar Siniestro</a></li>
                      </ul>
                      </li>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Suscripción<span class="caret"></span</a>
                      <ul class="dropdown-menu">
                        <li><a href="/consultar/trama">Consultar Trama</a></li>
                        <li><a href="/enviar/trama">Enviar Trama</a></li>
                        <li><a href="/mantenimiento">Mantenimiento</a></li>
                      </ul>
                      </li>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sistema<span class="caret"></span</a>
                      <ul class="dropdown-menu">
                        <li><a href="/perfiles">Perfiles</a></li>
                        <li><a href="/usuarios">Usuarios</a></li>
                      </ul>
                      </li>                    
                      </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links 
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest-->
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">

        @yield('body')

        </div>

    </div>



</body>
</html>
