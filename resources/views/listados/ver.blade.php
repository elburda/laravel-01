<?php
// print_r($planes);
?>

<?php
/** @var \App\Models\Plan[] $planes */
?>

<x-layouts.main>

    <x-slot:title>{{ $plan->titulo}}</x-slot:title>

    <h1>{{ $plan->titulo}}</h1>

    <h2>Sinopsis</h2>

    {{ $plan->resumen }}
    
    <dl>
        <dt>Precio</dt>
        <dd>$ {{ $plan->precio }}</dd>
        <dt>Cantidad de Horas</dt>
        <dd>{{ $plan->horas }}</dd>
        <dt>Demanda</dt>
        <dd>({{ $plan->demanda->abbreviation }}) {{ $plan->demanda->name }} </dd>

    </dl>

        
</x-layouts.main>

