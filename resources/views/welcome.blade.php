<!doctype html>
<html lang="es">

<head>
    <title>Agenda Startup</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
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

    <main class="container-fluid p-3">
        @if (Request::is('/'))
            <div class="text-center position-relative">
                <!-- Imagen de fondo -->
                <div class="position-relative banner">
                    <img src="{{ asset('images/startup-banner.jpg') }}" class="img-fluid w-100" alt="Startup Banner">
                    <div class="overlay"></div>
                    <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
                        <a class="navbar-brand fw-bold text-hero" href="{{ url('/') }}">
                            <i class="bi bi-distribute-horizontal"></i> STARTUP               </a>
                        <p class="fs-4">Clientes y las salas disponibles en el espacio Startup.</p>
                    </div>
                </div>
            </div>

            <!-- Sección de información -->
            <div class="row mt-4 text-center">

                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <h3 class="card-title"><i class="bi bi-person-fill"></i> Usuarios Registrados</h3>
                            <p class="fs-4">{{ \App\Models\Agenda::count() }}</p>
                            <a href="{{ url('agendas') }}" class="btn btn-primary">Ver Usuarios</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <h3 class="card-title"><i class="bi bi-arrow-up-left-square-fill"></i> Salas</h3>
                            <p class="fs-4">{{ \App\Models\Sala::count() }}</p>
                            <a href="{{ url('salas') }}" class="btn btn-primary">Ver Salas</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="mt-4 text-center p-3 gradient">
        <p>&copy; {{ date('Y') }} Startup - Gestión de Reuniones</p>
    </footer>

    <!-- Bootstrap JS -->
    <!-- Bootstrap Bundle con Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
