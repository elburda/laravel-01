<?php
/** @var \App\Models\Plan[] $planes */
?>

@auth
<x-layouts.main>
    <x-slot:title>Planes y Servicios</x-slot:title>

    <h1 class="mb-4">Admin - Planes y Servicios</h1>

    <div class="mb-4">
        <a href="{{ route('inventario.crear') }}">Publicar</a>
    </div>

    @if($planes->isNotEmpty())
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <th>Admin Título</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Horas</th>
                    <th>Demanda</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($planes as $plan)
                <tr>
                    <td>{{ $plan->titulo }}</td>
                    <td>{{ $plan->resumen }}</td>
                    <td>$ {{ $plan->precio }}</td>
                    <td>{{ $plan->horas }}</td>
                    <td>{{ $plan->demanda->abbreviation }}</td>
                    <td>
                        <div>
                            <a href="{{ route('inventario.ver', ['id' => $plan->plan_id]) }}" class="btn btn-primary">Ver</a>
                            <a href="{{ route('inventario.edit', ['id' => $plan->plan_id]) }}" class="btn btn-secondary">Editar</a>
                            <a href="{{ route('inventario.delete', ['id' => $plan->plan_id]) }}" class="btn btn-danger">Eliminar</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay ningún plan para mostrar. <a href="{{ route('inventario.crear') }}">¡Publicá el primer plan o servicio!</a></p>
    @endif
</x-layouts.main>
@endauth

@guest
<x-layouts.guest>
    <x-slot:title>Planes y Servicios</x-slot:title>

    <h1 class="mb-4">User Planes y Servicios</h1>

    @if($planes->isNotEmpty())
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Horas</th>
                    <th>Demanda</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($planes as $plan)
                <tr>
                    <td>{{ $plan->titulo }}</td>
                    <td>{{ $plan->resumen }}</td>
                    <td>$ {{ $plan->precio }}</td>
                    <td>{{ $plan->horas }}</td>
                    <td>{{ $plan->demanda->abbreviation }}</td>
                    <td>
                        <div>
                            <a href="{{ route('inventario.ver', ['id' => $plan->plan_id]) }}" class="btn btn-primary">Ver</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay ningún plan para mostrar.</p>
    @endif
</x-layouts.guest>
@endguest
