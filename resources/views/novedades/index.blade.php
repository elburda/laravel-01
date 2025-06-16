<x-layouts.main>
    <x-slot:title>Listado de Novedades</x-slot:title>

    <h1>Novedades</h1>

    @if(auth()->check() && auth()->user()->isAdmin()) 
    <div class="mb-4">
        <a href="{{ route('abm.novedades.crear') }}" class="btn btn-dark btn-m">Publicar</a>
    </div>
    @endif

    @if($novedades->isNotEmpty())
    <div class="table-responsive bg-white p-3 rounded shadow-sm">
        <table class="table table-bordered table-condensed mb-0">
            <thead class="table-light">
                <tr class="text-center">
                    <th>Título</th>
                    <th>Contenido</th>
                    <th>Imagen</th>
                    @if(auth()->check() && auth()->user()->isAdmin())
                        <th>Acción</th>
                    @endif
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
                    @if(auth()->check() && auth()->user()->isAdmin())
                    <td>
                        <div class="d-grid gap-1">
                            <a href="{{ route('novedades.ver', $novedad->id) }}" class="btn btn-primary btn-sm w-100">Ver</a>
                            <a href="{{ route('abm.novedades.edit', ['id' => $novedad->id]) }}" class="btn btn-secondary btn-sm w-100">Editar</a>
                            <a href="{{ route('abm.novedades.delete', ['id' => $novedad->id]) }}" class="btn btn-danger btn-sm w-100">Eliminar</a>
                        </div>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <p>No hay ninguna novedad publicada.</p>
    @endif

</x-layouts.main>
