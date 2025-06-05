@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-3">{{ $novedad->titulo }}</h2>

    <p class="text-muted">Publicado el {{ $novedad->created_at->format('d/m/Y') }}</p>

    <div class="border rounded p-4 mb-4">
        {!! nl2br(e($novedad->contenido)) !!}
    </div>

    <a href="{{ route('novedades.lista') }}" class="btn btn-secondary">Volver a novedades</a>
</div>
@endsection
