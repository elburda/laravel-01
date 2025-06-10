<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BitGuard : {{ $title ?? '' }}</title>
    <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/styles.css') }}">
</head>

<body class="d-flex flex-column min-vh-100" style="background-color: rgb(170, 201, 165);">
    <div class="d-flex flex-grow-1">
        <!-- Navbar lateral -->
        <nav class="bg-success bg-gradient text-white p-3 d-flex flex-column" style="width: 250px; min-height: 100vh;">
            <div class="text-center mb-4">
                <img src="{{ asset('img/icons/logo.png') }}" alt="BitGuard Logo" width="64" height="64" class="mb-2">
                <h5 class="text-warning m-0">BitGuard</h5>
            </div>

            @auth
                <div class="mb-2 text-center">
                    <div class="fw-bold small">{{ auth()->user()->email }}</div>
                    <form action="{{ route('auth.logout') }}" method="POST" class="mt-2">
                        @csrf
                        <button class="mt-3 btn btn-sm btn-dark w-100" type="submit">
                            Cerrar Sesión
                        </button>
                    </form>
                </div>
            @endauth

            <hr class="border-light">

            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <x-nav-link url="/">Home</x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link url="/abm/planes-servicios">ABM-Planes/Servicios</x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link url="/abm/novedades">ABM-Novedades</x-nav-link>
                </li>


            </ul>
        </nav>

        <!-- Main Content -->
        <main class="container my-4 flex-grow-1">
            @if(session('feedback.message'))
                <div class="alert alert-{{ session('feedback.type', 'success') }} mb-4">
                    {!! session('feedback.message') !!}
                </div>
            @endif

            {{ $slot }}
        </main>
    </div>

            <footer class="bg-dark text-white py-4 mt-auto">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <h5>BitGuard</h5>
                            <p>Protegemos lo que más valorás con tecnología y experiencia.</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <h5>Contacto</h5>
                            <ul class="list-unstyled">
                                <li>Trabajo Practico: Comercio Electronico</li>
                                <li>Integrantes: Dario Burda - Nicolas Burda</li>
                                <li>Email: info@burdaseguridad.com</li>
                                <li>Tel: +54 11 1234 5678</li>
                                <li>Dirección: Av. Siempre Viva 742</li>
                            </ul>
                        </div>
                        <div class="col-md-4 mb-3">
                            <h5>Seguinos</h5>
                            <div class="d-flex gap-3">
                                <a href="#" class="text-white" aria-label="Github">
                                    <img src="{{ asset('img/icons/github.png') }}" alt="Github" width="32" height="32">
                                </a>
                                <a href="#" class="text-white" aria-label="Instagram">
                                    <img src="{{ asset('img/icons/instagram.png') }}" alt="Instagram" width="32" height="32">
                                </a>
                                <a href="#" class="text-white" aria-label="LinkedIn">
                                    <img src="{{ asset('img/icons/linked.png') }}" alt="LinkedIn" width="32" height="32">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <small>&copy; {{ date('Y') }} BitGuard Seguridad IT. Todos los derechos reservados.</small>
                    </div>
                </div>
            </footer>
</body>

</html>
