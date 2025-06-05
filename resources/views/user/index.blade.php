<x-layouts.guest>
    <x-slot:title>Planes y Servicios</x-slot:title>

    <h1 class="mb-4">Planes y Servicios</h1>

    @auth
    <div class="mb-4">
        <a href="{{ route('inventario.crear') }}" class="btn btn-success">Publicar</a>
    </div>
    @endauth

    @if($planes->isNotEmpty())
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($planes as $plan)
        <div class="col">
            <div class="card h-100 shadow-sm">
                <!-- Imagen dummy -->
                {{-- <img src="https://via.placeholder.com/400x200?text=Servicio+IT" class="card-img-top rounded-top" alt="Imagen de servicio"> --}}

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title mb-3">
                        <i class="bi bi-box-seam"></i> {{ $plan->titulo }}
                    </h5>
                    <h6 class="card-subtitle mb-3 text-muted">
                        <i class="bi bi-tags"></i> {{ $plan->demanda->abbreviation }}
                    </h6>
                    <p class="card-text mb-3">
                        {{ \Illuminate\Support\Str::limit($plan->resumen, 100) }}
                    </p>
                    <ul class="list-unstyled mb-4">
                        <li><i class="bi bi-currency-dollar"></i> <strong>Precio:</strong> ${{ $plan->precio }}</li>
                        <li><i class="bi bi-clock"></i> <strong>Horas:</strong> {{ $plan->horas }}</li>
                    </ul>
                </div>

                <div class="card-footer bg-transparent border-top-0 d-flex flex-column align-items-center gap-2">
                    <a href="{{ route('public.show', ['id' => $plan->plan_id]) }}" class="btn btn-primary btn-sm w-50 text-center">
                        <i class="bi bi-eye"></i> Ver
                    </a>

                    @auth
                    <div class="d-flex gap-2 mt-2">
                        <a href="{{ route('inventario.edit', ['id' => $plan->plan_id]) }}" class="btn btn-secondary btn-sm">
                            <i class="bi bi-pencil"></i> Editar
                        </a>
                        <a href="{{ route('inventario.delete', ['id' => $plan->plan_id]) }}" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i> Eliminar
                        </a>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
        <p>No hay ningún plan para mostrar. 
            @auth
            <a href="{{ route('inventario.crear') }}">¡Publicá el primer plan o servicio!</a>
            @endauth
        </p>
    @endif
</x-layouts.guest>
