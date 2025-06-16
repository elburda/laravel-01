<?php
/** @var \App\Models\Plan[] $planes */
?>

<x-layouts.main>
    <h1 class="mb-4">Servicios</h1>

    @if(auth()->check() && auth()->user()->isAdmin())
    <div class="mb-4">
        <a href="{{ route('inventario.crear') }}" class="btn btn-dark btn-m">Publicar</a>
    </div>
    @endif

    @if($planes->isNotEmpty())
    <div class="table-responsive bg-white p-3 rounded shadow-sm">
        <table class="table table-bordered table-condensed mb-0">
            <thead class="table-light">
                <tr class="text-center">
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Horas</th>
                    <th>Demanda</th>
                    @if(auth()->check() && auth()->user()->isAdmin()) <!-- ✅ Solo admins pueden ver acciones -->
                        <th>Acción</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($planes as $plan)
                <tr>
                    <td>{{ $plan->titulo }}</td>
                    <td>{{ $plan->resumen }}</td>
                    <td>$ {{ $plan->precio }}</td>
                    <td class="text-center">{{ $plan->horas }}</td>
                    <td class="text-center">{{ $plan->demanda->abbreviation }}</td>
                    @if(auth()->check() && auth()->user()->isAdmin()) <!-- ✅ Solo admins pueden ver esto -->
                    <td>
                        <div class="d-grid gap-1">
                            <a href="{{ route('inventario.ver', ['id' => $plan->plan_id]) }}" class="btn btn-primary btn-sm w-100">Ver</a>
                            <a href="{{ route('inventario.edit', ['id' => $plan->plan_id]) }}" class="btn btn-secondary btn-sm w-100">Editar</a>
                            <a href="{{ route('inventario.delete', ['id' => $plan->plan_id]) }}" class="btn btn-danger btn-sm w-100">Eliminar</a>
                        </div>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <p>No hay ningún plan para mostrar.</p>
    @endif
</x-layouts.main>

