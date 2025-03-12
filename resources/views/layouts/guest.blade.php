<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900">
        <header>
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand fw-bold fs-2" href="{{ url('/') }}">
                        <i class="bi bi-distribute-horizontal"></i> STARTUP
                    </a>
    
                    <div class="d-flex justify-content-end" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            @auth
    
                                @if (auth()->user()->isAdmin())
                                    <li class="nav-item">
                                        <a class="nav-link text-primary" href="/">Panel de Administrador</a>
                                    </li>
                                @endif
                                {{-- si es trabajador --}}
                                @if (auth()->user()->isWorker())
                                    <li class="nav-item">
                                        <a class="nav-link  text-primary" href="/">Panel de Trabajador</a>
                                    </li>
                                @endif
                            @endauth
                            {{-- navegador usual --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('agendas') }}">Agendados</a>
                            </li>
    
    
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('salas') }}">Salas</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ url('reunions') }}">Reuniones</a>
                            </li> --}}
                            {{-- si es administrador --}}
                            @auth
    
                            @endauth
    
                            <!-- Mostrar contenido solo para trabajadores -->
                            @auth
    
    
                                <li class="nav-item">
                                    <!-- Formulario de cierre de sesión solo si el usuario está autenticado -->
                                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="nav-link"
                                            style="background: none; border: none; color: inherit;">Cerrar sesión</button>
                                    </form>
                                </li>
                            @endauth
    
                            <!-- Si el usuario no está autenticado -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('login') }}">Iniciar Sesión</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('register') }}">Registrarse</a>
                                </li>
                            @endguest
    
    
    
    
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0  bg-gray-900">
            <div>
               
                    <a class="navbar-brand fw-bold text-hero" href="{{ url('/') }}">
                        <i class="bi bi-distribute-horizontal"></i> STARTUP
                    </a>
               
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4  dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
                
            </div>
        </div>
    </body>
</html>
