<x-layouts.main>
    <x-slot:title>Editar Usuario</x-slot:title>

    <h1>Editar Usuario</h1>
    
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method('POST')

        <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}">
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Rol:</label>
            <select class="form-select" name="role">
                <option value="usuario" {{ $user->role == 'usuario' ? 'selected' : '' }}>Usuario</option>
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Administrador</option>
            </select>
            @error('role') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <h3 class="mt-4">Datos del Equipo</h3>

        <div class="mb-3">
            <label for="equipo" class="form-label">Equipo:</label>
            <input type="text" class="form-control" name="equipo" value="{{ old('equipo', $user->equipo) }}">
        </div>

        <div class="mb-3">
            <label for="rustdesk" class="form-label">RustDesk:</label>
            <input type="number" class="form-control" name="rustdesk" value="{{ old('rustdesk', $user->rustdesk) }}">
        </div>

        <div class="mb-3">
            <label for="sistema_operativo" class="form-label">S.O:</label>
            <input type="text" class="form-control" name="sistema_operativo" value="{{ old('sistema_operativo', $user->sistema_operativo) }}">
        </div>

        <div class="mb-3">
            <label for="procesador" class="form-label">Procesador:</label>
            <input type="text" class="form-control" name="procesador" value="{{ old('procesador', $user->procesador) }}">
        </div>

        <div class="mb-3">
            <label for="tipo_memoria" class="form-label">Tipo de Memoria:</label>
            <select class="form-control" name="tipo_memoria">
                <option value="DDR 3" {{ old('tipo_memoria', $user->tipo_memoria) == 'DDR 3' ? 'selected' : '' }}>DDR 3</option>
                <option value="DDR 4" {{ old('tipo_memoria', $user->tipo_memoria) == 'DDR 4' ? 'selected' : '' }}>DDR 4</option>
                <option value="DDR 5" {{ old('tipo_memoria', $user->tipo_memoria) == 'DDR 5' ? 'selected' : '' }}>DDR 5</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="capacidad_memoria" class="form-label">Capacidad de Memoria:</label>
            <select class="form-control" name="capacidad_memoria">
                <option value="4 GB" {{ old('capacidad_memoria', $user->capacidad_memoria) == '4 GB' ? 'selected' : '' }}>4 GB</option>
                <option value="8 GB" {{ old('capacidad_memoria', $user->capacidad_memoria) == '8 GB' ? 'selected' : '' }}>8 GB</option>
                <option value="16 GB" {{ old('capacidad_memoria', $user->capacidad_memoria) == '16 GB' ? 'selected' : '' }}>16 GB</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="tipo_disco" class="form-label">Tipo de Disco:</label>
            <select class="form-control" name="tipo_disco">
                <option value="SSD" title="Solido" {{ old('tipo_disco', $user->tipo_disco) == 'SSD' ? 'selected' : '' }}>SSD</option>
                <option value="MEC" title="Mecanico" {{ old('tipo_disco', $user->tipo_disco) == 'MEC' ? 'selected' : '' }}>MEC</option>
                <option value="M.2" title="NVME" {{ old('tipo_disco', $user->tipo_disco) == 'M.2' ? 'selected' : '' }}>M.2</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="capacidad_disco" class="form-label">Capacidad del Disco (GB):</label>
            <select class="form-control" name="capacidad_disco">
                <option value="120 GB" {{ old('capacidad_disco', $user->capacidad_disco) == '120 GB' ? 'selected' : '' }}>120 GB</option>
                <option value="240 GB" {{ old('capacidad_disco', $user->capacidad_disco) == '240 GB' ? 'selected' : '' }}>240 GB</option>
                <option value="500 GB" {{ old('capacidad_disco', $user->capacidad_disco) == '500 GB' ? 'selected' : '' }}>500 GB</option>
                <option value="1 TB" {{ old('capacidad_disco', $user->capacidad_disco) == '1 TB' ? 'selected' : '' }}>1 TB</option>
                <option value="2 TB" {{ old('capacidad_disco', $user->capacidad_disco) == '2 TB' ? 'selected' : '' }}>2 TB</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="ip_pc" class="form-label">IP PC:</label>
            <input type="text" class="form-control" name="ip_pc" value="{{ old('ip_pc', $user->ip_pc) }}">
        </div>

        <div class="mb-3">
            <label for="ip_tel" class="form-label">IP Teléfono:</label>
            <input type="text" class="form-control" name="ip_tel" value="{{ old('ip_tel', $user->ip_tel) }}">
        </div>

        <div class="mb-3">
            <label for="notas" class="form-label">Notas:</label>
            <textarea class="form-control" name="notas">{{ old('notas', $user->notas) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="interno" class="form-label">Número Interno:</label>
            <input type="number" class="form-control" name="interno" value="{{ old('interno', $user->interno) }}">
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Volver</a>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
    </form>
</x-layouts.main>

