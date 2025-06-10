<x-layouts.guest>
    <x-slot:title>Listado de Novedades</x-slot:title>

    <h1>Novedades</h1>

    @auth
    <div class="mb-4">
        <a href="{{ route('novedades.crear') }}" class="btn btn-dark btn-m">Publicar Novedad</a>
    </div>
    @endauth

    @if($novedades->isNotEmpty())
    <div class="table-responsive bg-white p-3 rounded shadow-sm">
        <table class="table table-bordered table-condensed mb-0">
            <thead class="table-light">
                <tr class="text-center">
                    <th>Título</th>
                    <th>Contenido</th>
                    <th>Imagen</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($novedades as $novedad)
                <tr>
                    <td>{{ $novedad->titulo }}</td>
                    <td>{{ Str::limit($novedad->contenido, 100) }}</td>
                    <td>
                        @if ($novedad->imagen)
                            <img src="{{ asset($novedad->imagen) }}" alt="Imagen" width="50">
                        @else
                            <span>No hay imagen</span>
                        @endif
                    </td>
                    <td>
                        <div class="d-grid gap-1">
                            <a href="{{ route('novedades.ver', ['id' => $novedad->id]) }}" class="btn btn-primary btn-sm w-100">Ver</a>
                            @auth
                            <a href="{{ route('novedades.edit', ['id' => $novedad->id]) }}" class="btn btn-secondary btn-sm w-100">Editar</a>
                            <a href="{{ route('novedades.delete', ['id' => $novedad->id]) }}" class="btn btn-danger btn-sm w-100">Eliminar</a>
                            @endauth
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <p>No hay ninguna novedad publicada.</p>
    @endif

</x-layouts.guest>