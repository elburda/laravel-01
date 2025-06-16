<x-layouts.main>
    <x-slot:title>Eliminar Usuario</x-slot:title>

    <h1>Eliminar Usuario</h1>

    <p>Estás a punto de eliminar al usuario <b>{{ $user->name }}</b> con correo <b>{{ $user->email }}</b>. Esta acción no se puede deshacer.</p>

    <dl>
        <dt>Nombre</dt>
        <dd>{{ $user->name }}</dd>
        <dt>Correo Electrónico</dt>
        <dd>{{ $user->email }}</dd>
        <dt>Rol</dt>
        <dd>{{ $user->role }}</dd>
    </dl>
    <hr>

    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</x-layouts.main>
