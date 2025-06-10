<x-layouts.main>
    <x-slot:title>Eliminar Novedad</x-slot:title>

    <h1>Eliminar Novedad</h1>

    <p>Estás a punto de eliminar la novedad <b>{{ $novedad->titulo }}</b>. Esta acción no se puede deshacer.</p>

    <dl>
        <dt>Título</dt>
        <dd>{{ $novedad->titulo }}</dd>
        <dt>Contenido</dt>
        <dd>{{ $novedad->contenido }}</dd>
        <dt>Imagen</dt>
        <dd>
            @if ($novedad->imagen)
                <img src="{{ asset($novedad->imagen) }}" alt="Imagen de la novedad" class="img-fluid rounded">
            @else
                <span>No hay imagen disponible</span>
            @endif
        </dd>
    </dl>
    <hr>

    <form action="{{ route('novedades.destroy', ['id' => $novedad->id]) }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Eliminar</button>
        <a href="{{ route('abm.novedades') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</x-layouts.main>

