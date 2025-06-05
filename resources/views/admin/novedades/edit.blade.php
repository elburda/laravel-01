@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar novedad</h2>

    <form action="{{ route('admin.novedades.update', $novedad->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $novedad->titulo }}" required>
        </div>

        <div class="mb-3">
            <label for="contenido" class="form-label">Contenido</label>
            <textarea name="contenido" id="contenido" class="form-control" rows="5" required>{{ $novedad->contenido }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('admin.novedades.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
