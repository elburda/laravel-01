<x-layouts.main>

    <x-slot:title>{{ $novedad->titulo }}</x-slot:title>

    <div class="container my-5">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">{{ $novedad->titulo }}</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title mb-3">Descripción</h5>
                <p class="card-text">{{ $novedad->contenido }}</p>

                <dl class="row mb-0">
                    <dt class="col-sm-4">📅 Fecha de Publicación</dt>
                    <dd class="col-sm-8">{{ $novedad->created_at->format('d/m/Y') }}</dd>

                    <dt class="col-sm-4">📸 Imagen</dt>
                    <dd class="col-sm-8">
                        @if ($novedad->imagen)
                            <img src="{{ asset($novedad->imagen) }}" alt="Imagen de la novedad" class="img-fluid rounded">
                        @else
                            <span>No hay imagen disponible</span>
                        @endif
                    </dd>
                </dl>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">        
        <a href="{{ route('abm.novedades') }}" class="btn btn-secondary">Volver</a>
    </div>
</x-layouts.main>


