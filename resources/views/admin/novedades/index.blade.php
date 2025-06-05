@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Listado de Novedades</h2>

    <a href="{{ route('admin.novedades.create') }}" class="btn btn-success mb-3">+ Nueva novedad</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Título</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($novedades as $novedad)
                <tr>
                    <td>{{ $novedad->titulo }}</td>
                    <td>{{ $novedad->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('admin.novedades.edit', $novedad->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('admin.novedades.destroy', $novedad->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('¿Estás seguro?')" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                        <a href="{{ route('novedades.show', $novedad->id) }}" class="btn btn-secondary btn-sm">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
