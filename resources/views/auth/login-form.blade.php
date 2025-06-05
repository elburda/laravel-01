<x-layouts.guest>
    <x-slot:title>Ingresar a mi cuenta</x-slot:title>

    <h1>Ingresar a mi cuenta</h1>

    {{-- TODO: Agregar validaciones del form, mostrar errores, etc. --}}
    <form action="{{ route('auth.loginExecute') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contrseña</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
</x-layouts.guest>
