<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BitGuard : {{ $title ?? '' }}</title>
    <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/styles.css') }}">
    @vite(['resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100" style="background-color: rgb(170, 201, 165);">
    <div class="d-flex flex-grow-1 w-100">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success p-3 h-100 ">
            <div class="container-fluid d-flex flex-column align-items-start justify-content-start h-100">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="d-flex w-30 justify-content-between align-items-center mb-3">
                    <div class="collapse navbar-collapse w-100 h-100" id="navbarSupportedContent">
                        <div class="d-flex flex-column align-items-start w-100 h-100">
                            <a class="navbar-brand d-flex align-items-center" href="#">
                                <img src="{{ asset('img/icons/logo.png') }}" alt="BitGuard Logo" width="40" class="me-2">
                                <span class="text-warning">BitGuard</span>
                            </a>
                            <ul class="navbar-nav flex-column w-100">
                                <li class="nav-item"><x-nav-link url="/">Home</x-nav-link></li>
                                <li class="nav-item"><x-nav-link url="/abm/planes-servicios">Planes</x-nav-link></li>
                                <li class="nav-item"><x-nav-link url="/abm/novedades">Novedades</x-nav-link></li>
                                <li class="nav-item"><x-nav-link url="/users">Usuarios</x-nav-link></li>
                                <li class="nav-item">
                                    <x-nav-link url="{{ route('users.ver', ['user' => auth()->user()->id]) }}">Perfil</x-nav-link>
                                    @auth 
                                    <div class="mb-3 text-white small w-100">
                                        {{-- {{ auth()->user()->email}} --}}
                                        <form action="{{ route('auth.logout') }}" method="POST" class="mt-2">
                                            @csrf
                                            <button class="btn btn-sm btn-dark w-100" type="submit">Cerrar Sesión</button>
                                        </form>
                                    </div>
                                    @endauth
                                </li>
                            </ul>
                        </div>
                    </div>
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
    </div>
    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h3>BitGuard</h3>
                    <p>Protegemos lo que más valorás con tecnología y experiencia.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h3>Contacto</h3>
                    <ul class="list-unstyled">
                        <li>Trabajo Practico: Comercio Electronico</li>
                        <li>Integrantes: Dario Burda - Nicolás Burda</li>
                        <li>Email: info@burdaseguridad.com</li>
                        <li>Tel: +54 11 1234 5678</li>
                        <li>Dirección: Av. Siempre Viva 742</li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h3>Seguinos</h3>
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

