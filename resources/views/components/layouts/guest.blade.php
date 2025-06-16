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
    <nav class="navbar navbar-expand-lg bg-dark bg-gradient">
        <div class="container-fluid">
            <a class="navbar-brand warning text-warning d-flex align-items-center gap-2" href="#">
                <img src="{{ asset('img/icons/logo.png') }}" alt="BitGuard Logo" width="32" height="32">
                <span >BitGuard</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <x-nav-link url="/" class="text-white">Home</x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link url="/listado/planes-servicios" class="text-white">Planes/Servicios</x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link url="/novedades/novedades-lista" class="text-white">Novedades</x-nav-link>
                    </li>
                    @auth
                        <li class="nav-item">
                            <form action="{{ route('auth.logout') }}" method="POST">
                                @csrf
                                <button class="nav-link text-white bg-transparent border-0" type="submit">
                                    {{ auth()->user()->email }} (Cerrar Sesión)
                                </button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <x-nav-link url="ingresar" class="text-white">Iniciar Sesión</x-nav-link>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-4 flex-grow-1">
            @if(session('feedback.message'))
                <div class="alert alert-{{ session('feedback.type', 'success') }} mb-4">
                    {!! session('feedback.message') !!}
                </div>
            @endif

        {{ $slot }}
    </main>

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
