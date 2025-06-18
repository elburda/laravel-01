<?php
// print_r($planes);
?>

<?php
/** @var \App\Models\Plan[] $planes */
?>

<x-layouts.main>

    <x-slot:title>{{ $plan->titulo }}</x-slot:title>
    <div class="container my-5">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-success text-white">
                <h2 class="mb-0">{{ $plan->titulo }}</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title mb-3">Sinopsis</h5>
                <p class="card-text">{{ $plan->resumen }}</p>

                <dl class="row mb-0">
                    <dt class="col-sm-4">Precio</dt>
                    <dd class="col-sm-8">$ {{ $plan->precio }}</dd>

                    <dt class="col-sm-4">⏱Cantidad de Horas</dt>
                    <dd class="col-sm-8">{{ $plan->horas }}</dd>

                    <dt class="col-sm-4">Demanda</dt>
                    <dd class="col-sm-8">({{ $plan->demanda->abbreviation }}) {{ $plan->demanda->name }}</dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-between mt-4">
        <a href="{{ route('listados.index') }}" class="btn btn-secondary">Volver</a>
    </div>
        
</x-layouts.main>

