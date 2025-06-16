<x-layouts.main>
    <x-slot:title>Perfil de {{ $user->name }}</x-slot:title>

    <h1>Perfil de {{ $user->name }}</h1>

    <div class="table-responsive bg-white p-3 rounded shadow-sm">
        <table class="table table-bordered table-condensed mb-0">
            <tr><th>Nombre:</th><td>{{ $user->name }}</td></tr>
            <tr><th>Email:</th><td>{{ $user->email }}</td></tr>
            <tr><th>Rol:</th><td>{{ ucfirst($user->role) }}</td></tr>
            <tr><th>Equipo:</th><td>{{ $user->equipo ?? 'No especificado' }}</td></tr>
            <tr><th>RustDesk:</th><td>{{ $user->rustdesk ?? 'No disponible' }}</td></tr>
            <tr><th>Sistema Operativo:</th><td>{{ $user->sistema_operativo ?? 'No especificado' }}</td></tr>
            <tr><th>Procesador:</th><td>{{ $user->procesador ?? 'No especificado' }}</td></tr>
            <tr><th>Memoria RAM:</th><td>{{ $user->capacidad_memoria ?? 'No especificado' }} ({{ $user->tipo_memoria ?? 'No especificado' }})</td></tr>
            <tr><th>Disco:</th><td>{{ $user->capacidad_disco ?? 'No especificado' }} ({{ $user->tipo_disco ?? 'No especificado' }})</td></tr>
            <tr><th>IP PC:</th><td>{{ $user->ip_pc ?? 'No disponible' }}</td></tr>
            <tr><th>IP Teléfono:</th><td>{{ $user->ip_tel ?? 'No disponible' }}</td></tr>
            <tr><th>Notas:</th><td>{{ $user->notas ?? 'No hay notas registradas' }}</td></tr>
        </table>
    </div>

    <div class="mt-4">
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</x-layouts.main>
