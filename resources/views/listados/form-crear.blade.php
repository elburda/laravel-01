<x-layouts.main>
    <x-slot:title>Publicar Planes</x-slot:title>

    <h1>Publicar Planes</h1>

    @if ($errors->any())
        <div class="text-danger mb-3">Por favor, revisá el formulario para continuar.</div>
    @endif

    <div class="mb-4">
        <button type="submit" form="crear-plan-form" class="btn btn-dark btn-m">Publicar</button>
    </div>

    <div class="bg-light p-4 rounded shadow-sm" style="max-width: 600px;">
        <form id="crear-plan-form" action="{{ route('inventario.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="titulo" class="form-label">Título:</label>
                <input 
                    type="text"
                    id="titulo"
                    name="titulo"
                    class="form-control @error('titulo') is-invalid @enderror"
                    placeholder="Ingrese el título del plan o servicio"
                    value="{{ old('titulo') }}"
                >
                @error('titulo') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="resumen" class="form-label">Descripción:</label>
                <textarea
                    id="resumen"
                    name="resumen"
                    class="form-control @error('resumen') is-invalid @enderror"
                    placeholder="Ingrese una breve descripción"
                    rows="4"
                >{{ old('resumen') }}</textarea>
                @error('resumen') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="demanda_fk" class="form-label">Demanda:</label>
                <select
                    id="demanda_fk"
                    name="demanda_fk"
                    class="form-select @error('demanda_fk') is-invalid @enderror"
                >
                    @foreach($demandas as $demanda)
                    <option value="{{ $demanda->demanda_id }}" @selected(old('demanda_fk') == $demanda->demanda_id)>
                        {{ $demanda->name }} ({{ $demanda->abbreviation }})
                    </option>
                    @endforeach
                </select>
                @error('demanda_fk') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input
                    type="number"
                    id="precio"
                    name="precio"
                    class="form-control @error('precio') is-invalid @enderror"
                    placeholder="Ingrese el precio"
                    value="{{ old('precio') }}"
                >
                @error('precio') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="horas" class="form-label">Horas:</label>
                <input
                    type="number"
                    id="horas"
                    name="horas"
                    class="form-control @error('horas') is-invalid @enderror"
                    placeholder="Ingrese la cantidad de horas"
                    value="{{ old('horas') }}"
                >
                @error('horas') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mt-3">
                <a href="{{ route('listados.index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </form>
    </div>
</x-layouts.main>

{{-- <x-layouts.main>

    <x-slot:title>Publicar Plan o Servicio</x-slot:title>

    <h1>Publicar Plan o Servicio</h1>
    

    @if ($errors->any())
        <div class="mb-4 text-danger">Por favor, revisá el formulario para continuar.</div>
    @endif

    <form action="{{ route('inventario.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input 
                type="text"
                id="titulo"
                name="titulo"
                class="form-control @error('titulo') is-invalid @enderror"
                @error('titulo')
                    aria-invalid="true"
                    aria-errormessage="error_titulo"
                @enderror
                value="{{ old ('titulo') }}"
            >
                @error('titulo')
                    <div class="text-danger" id="error_title">{{ $message }}</div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="resumen"class="form-label">Descripción</label>
            <textarea
                id="resumen"
                name="resumen"
                class="form-control @error('resumen') is-invalid @enderror" 
                @error('resumen')
                aria-invalid="true"
                aria-errormessage="error_resumen"
                @enderror
                >{{ old ('resumen') }}</textarea>
                @error('resumen')
                <div class="text-danger" id="error_resumen">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="demanda_fk" class="form-label">Demanda</label>
                <select
                    id="demanda_fk"
                    name="demanda_fk"
                    class="form-control @error('demanda_fk') is-invalid @enderror"
                    @error('demanda_fk')
                        aria-invalid="true"
                        aria-errormessage="error_demanda_fk"
                    @enderror
                >
                    @foreach($demandas as $demanda)
                    <option
                        value="{{ $demanda->demanda_id }}"
                        @selected(old('demanda_fk') == $demanda->demanda_id)
                    >
                        {{ $demanda->name }} ({{ $demanda->abbreviation }})
                    </option>
                    @endforeach
                </select>
                @error('demanda')
                    <div class="text-danger" id="error_demanda">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input
                type="number"
                id="precio"
                name="precio"
                class="form-control @error('precio') is-invalid @enderror" 
                @error('precio')
                    aria-invalid="true"
                    aria-errormessage="error_precio"
                @enderror
                value="{{ old ('precio') }}"
            >
                @error('precio')
                    <div class="text-danger" id="error_title">{{ $message }}</div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="horas" class="form-label">Horas</label>
            <input
                type="number"
                id="horas"
                name="horas"
                class="form-control @error('horas') is-invalid @enderror" 
                @error('horas')
                    aria-invalid="true"
                    aria-errormessage="error_horas"
                @enderror
                value="{{ old ('horas') }}"
            >
                @error('horas')
                    <div class="text-danger" id="error_title">{{ $message }}</div>
                @enderror
        </div>
        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('listados.index') }}" class="btn btn-secondary">Volver</a>
            <button type="submit" class="btn btn-primary">Publicar</button>
        </div>
    </form>

        
</x-layouts.main> --}}

