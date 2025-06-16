<x-layouts.main>
    <x-slot:title>Crear Usuario</x-slot:title>

    <h1>Crear Usuario</h1>

    @if ($errors->any())
        <div class="text-danger mb-3">Por favor, revisá el formulario para continuar.</div>
    @endif

    <div class="mb-4">
        <button type="submit" form="crear-usuario-form" class="btn btn-dark btn-m">Crear Usuario</button>
    </div>

    <div class="bg-light p-4 rounded shadow-sm" style="max-width: 450px;">
        <form id="crear-usuario-form" action="{{ route('users.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" name="name" class="form-control" placeholder="Ingrese el nombre">
                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" placeholder="Ingrese el email">
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Contraseña:</label>
                <input type="password" name="password" class="form-control" placeholder="Ingrese la contraseña">
                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Rol:</label>
                <select name="role" class="form-select">
                    <option value="usuario">Usuario</option>
                    <option value="admin">Administrador</option>
                </select>
                @error('role') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mt-3">
                <a href="{{ route('users.index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </form>
    </div>

</x-layouts.main>



{{-- <x-layouts.main>
    <h1>Crear Usuario</h1>
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <label>Nombre:</label> <input type="text" name="name">
        @error('name') <small style="color: red;">{{ $message }}</small> @enderror

        <label>Email:</label> <input type="email" name="email">
        @error('email') <small style="color: red;">{{ $message }}</small> @enderror

        <label>Contraseña:</label> <input type="password" name="password">
        @error('password') <small style="color: red;">{{ $message }}</small> @enderror

        <label>Rol:</label>
        <select name="role">
            <option value="usuario">Usuario</option>
            <option value="admin">Administrador</option>
        </select>
        @error('role') <small style="color: red;">{{ $message }}</small> @enderror

        <button type="submit">Crear</button>
    </form>
</x-layouts.main> --}}


