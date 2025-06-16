<x-layouts.main>
    <x-slot:title>Publicar una Novedad</x-slot:title>

    <h1>Publicar Novedad</h1>

    @if ($errors->any())
        <div class="text-danger mb-3">Por favor, revisá el formulario para continuar.</div>
    @endif

    <div class="mb-4">
        <button type="submit" form="novedad-form" class="btn btn-dark btn-m">Publicar</button>
    </div>

    <div class="bg-light p-4 rounded shadow-sm" style="max-width: 600px;">
        <form id="novedad-form" action="{{ route('abm.novedades.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="titulo" class="form-label">Título:</label>
                <input 
                    type="text"
                    id="titulo"
                    name="titulo"
                    class="form-control @error('titulo') is-invalid @enderror"
                    placeholder="Ingrese el título de la novedad"
                    value="{{ old('titulo') }}"
                >
                @error('titulo') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="contenido" class="form-label">Contenido:</label>
                <textarea
                    id="contenido"
                    name="contenido"
                    class="form-control @error('contenido') is-invalid @enderror"
                    placeholder="Ingrese el contenido de la novedad"
                    rows="4"
                >{{ old('contenido') }}</textarea>
                @error('contenido') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen (opcional):</label>
                <input
                    type="text"
                    id="imagen"
                    name="imagen"
                    class="form-control @error('imagen') is-invalid @enderror"
                    placeholder="URL de la imagen"
                    value="{{ old('imagen') }}"
                >
                @error('imagen') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mt-3">
                <a href="{{ route('abm.novedades') }}" class="btn btn-secondary">Volver</a>
            </div>
        </form>
    </div>

</x-layouts.main>



{{-- <x-layouts.main>
    <x-slot:title>Publicar una Novedad</x-slot:title>

    <h1>Publicar Novedad</h1>

    @if ($errors->any())
        <div class="mb-4 text-danger">Por favor, revisá el formulario para continuar.</div>
    @endif

    <form action="{{ route('abm.novedades.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input 
                type="text"
                id="titulo"
                name="titulo"
                class="form-control @error('titulo') is-invalid @enderror"
                value="{{ old ('titulo') }}"
            >
            @error('titulo')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="contenido" class="form-label">Contenido</label>
            <textarea
                id="contenido"
                name="contenido"
                class="form-control @error('contenido') is-invalid @enderror"
            >{{ old ('contenido') }}</textarea>
            @error('contenido')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen (opcional)</label>
            <input
                type="text"
                id="imagen"
                name="imagen"
                class="form-control @error('imagen') is-invalid @enderror"
                value="{{ old ('imagen') }}"
            >
            @error('imagen')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('abm.novedades') }}" class="btn btn-secondary">Volver</a>
            <button type="submit" class="btn btn-primary">Publicar</button>
        </div>

    </form>
</x-layouts.main> --}}
