<?php
// print_r($planes);
?>

<?php
/** @var \App\Models\Plan[] $planes */
?>

<x-layouts.main>

    <x-slot:title>Confirmación de eliminación:</x-slot:title>

    <h1>Confirmación necesaria</h1>

    <h2>{{ $plan->titulo }}</h2>

    <dl>
        <dt>Resumen</dt>
        <dd>$ {{ $plan->resumen }}</dd>
        <dt>Precio</dt>
        <dd>{{ $plan->precio }}</dd>
    </dl>

    <hr>

    <form action="{{ route('inventario.destroy', ['id' => $plan->plan_id]) }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Confirmar eliminación</button>
    </form>

        
</x-layouts.main>

