<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BitGuard : {{ $title ?? '' }}</title>
    <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/styles.css') }}">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">BitGuard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="{{ url('/') }}">Home</a> -->
                            <x-nav-link url="/">Home</x-nav-link>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="{{ url('inventario/hardware') }}">Inventario</a> -->
                            <x-nav-link url="inventario/hardware">Inventario</x-nav-link>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="{{ url('acerca-de') }}">Nosotros</a> -->
                            <x-nav-link url="acerca-de">Nosotros</x-nav-link>
                        </li>
                        @auth
                        <li class="nav-item">
                            <form action="{{ route('auth.logout') }}" method="POST">
                                @csrf
                                <button class="nav-link" type="submit">{{ auth()->user()->email }} (Cerrar Sesión)</button>
                            </form>
                        </li>
                        @else
                        <li class="nav-item">
                            <x-nav-link url="ingresar">Iniciar Sesión</x-nav-link>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container mt-4">

            @if(session()->has('feedback.message'))
                <div class="alert alert-success mb-4">
                    {!! session()->get('feedback.message') !!}
                </div>
            @endif

            {{ $slot }}
        </main>

        <footer class="footer">Copyrigt Burda´s</footer>
    </div>
</body>

</html>