<x-layouts.main>
    <x-slot:title>Lista de Usuarios</x-slot:title>

    <h1>Usuarios</h1>

    @if(auth()->check() && auth()->user()->isAdmin())
    <div class="mb-4">
        <a href="{{ route('users.crear') }}" class="btn btn-dark btn-m">➕ Agregar Usuario</a>
    </div>
    @endif
    
    @if($users->isNotEmpty())
    <div class="table-responsive bg-white p-3 rounded shadow-sm">
        <table class="table table-bordered table-condensed mb-0">
            <thead class="table-light text-center">
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Equipo</th>
                    <th>Rustdesk</th>
                    <th>Int.</th>
                    @if(auth()->check() && auth()->user()->isAdmin())
                        <th>S.O.</th>
                        <th>Micro.</th>
                        <th>Mem.</th>
                        <th>T/D</th>
                        <th>Cap.</th>
                        <th>IP-PC</th>
                        <th>Rol</th>
                        <th>Acción</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="text-center">
                    <td>{{ $user->name }}</td>
                    <td><a href="{{ route('users.ver', ['user' => $user->id]) }}">{{ $user->email }}</a></td>
                    <td>{{ $user->equipo ?? 'No disponible' }}</td>
                    <td>
                        <a href="rustdesk://{{ $user->rustdesk }}?action=connect">
                            {{ $user->rustdesk ?? 'No disponible' }}
                        </a>
                    </td>
                    <td>{{ $user->interno ?? 'No disponible' }}</td>
                    @if(auth()->check() && auth()->user()->isAdmin()) 
                    <td>{{ $user->sistema_operativo ?? 'No disponible' }}</td>
                    <td>{{ $user->procesador ?? 'No disponible' }}</td>
                    <td>{{ $user->capacidad_memoria ?? 'No disponible' }}</td>
                    <td>{{ $user->tipo_disco ?? 'No disponible' }}</td>
                    <td>{{ $user->capacidad_disco ?? 'No disponible' }}</td>
                    <td>{{ $user->ip_pc ?? 'No disponible' }}</td>
                    <td>{{ ucfirst($user->role) }}</td>
                    <td>
                        <div class="d-grid gap-1">
                            <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-secondary btn-sm w-100">Editar</a>
                            <a href="{{ route('users.delete', ['user' => $user->id]) }}" class="btn btn-danger btn-sm w-100">Eliminar</a>
                        </div>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <p>No hay usuarios registrados.</p>
    @endif

</x-layouts.main>




