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
    <style>
        .banner {
            position: relative;
            display: inline-block;
        }

        .text-hero {
            font-size: 90px;
        }

        .banner .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* Ajusta la opacidad según necesidad */
        }
    </style>
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('agendas') }}">Usuarios</a>
                        </li>
                   
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('salas') }}">Salas</a>
                        </li>
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
                        <i class="bi bi-distribute-horizontal"></i> STARTUP
                    </a>
                    <p class="fs-4">Optimiza la gestión de salas agendadas y usuarios con nuestra plataforma.</p>
                </div>
            </div>
        </div>
    
        <!-- Sección de información -->
        <div class="row mt-4 text-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title"><i class="bi bi-people"></i> Usuarios Registrados</h3>
                        <p class="fs-4">{{ \App\Models\Agenda::count() }}</p>
                        <a href="{{ url('agendas') }}" class="btn btn-primary">Ver Usuarios</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title"><i class="bi bi-calendar-check"></i> Salas Agendadas</h3>
                        <p class="fs-4">{{ \App\Models\Sala::count() }}</p>
                        <a href="{{ url('salas') }}" class="btn btn-primary">Ver Salas</a>
                    </div>
                </div>
            </div>
        </div>
    @endif

        @yield('content')
    </main>

    <footer class="mt-4 text-center p-3 bg-light">
        <p>&copy; {{ date('Y') }} Startup - Gestión de Reuniones</p>
    </footer>

    <!-- Bootstrap JS -->
 <!-- Bootstrap Bundle con Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
