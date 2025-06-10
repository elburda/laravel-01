{{-- <x-layouts.main>
    <x-slot:title>Publicar una Novedad</x-slot:title>

    <h1>Publicar Novedad</h1>

    @if ($errors->any())
        <div class="mb-4 text-danger">Por favor, revisá el formulario para continuar.</div>
    @endif

    <form action="{{ route('novedades.store') }}" method="post">
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

        <button type="submit" class="btn btn-primary">Publicar</button>
    </form>
</x-layouts.main> --}}
<x-layouts.main>
    <x-slot:title>Publicar una Novedad</x-slot:title>

    <h1>Publicar Novedad</h1>

    @if ($errors->any())
        <div class="mb-4 text-danger">Por favor, revisá el formulario para continuar.</div>
    @endif

    <form action="{{ route('novedades.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" id="titulo" name="titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo') }}">
            @error('titulo')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="contenido" class="form-label">Contenido</label>
            <textarea id="contenido" name="contenido" class="form-control @error('contenido') is-invalid @enderror">{{ old('contenido') }}</textarea>
            @error('contenido')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen (opcional)</label>
            <input type="text" id="imagen" name="imagen" class="form-control @error('imagen') is-invalid @enderror" value="{{ old('imagen') }}">
            @error('imagen')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Publicar</button>
    </form>
</x-layouts.main>

