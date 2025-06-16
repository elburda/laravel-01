<?php
// print_r($planes);
?>

<?php
/** @var \App\Models\Plan[] $planes */
?>
<x-layouts.main>
    <x-slot:title>Eliminar Plan o Servicio</x-slot:title>

    <h1>Eliminar Plan o Servicio</h1>

    <p>Estás a punto de eliminar el plan <b>{{ $plan->titulo }}</b>. Esta acción no se puede deshacer.</p>

    <dl>
        <dt>Resumen</dt>
        <dd>{{ $plan->resumen }}</dd>
        <dt>Precio</dt>
        <dd>$ {{ $plan->precio }}</dd>
    </dl>
    <hr>

    <form action="{{ route('inventario.destroy', ['id' => $plan->plan_id]) }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Eliminar</button>
        <a href="{{ route('abm.planes.servicios') }}" class="btn btn-secondary">Cancelar</a>
    </form>
    
</x-layouts.main>


