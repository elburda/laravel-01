<?php
namespace App\Http\Controllers;

use App\Models\Demanda;
use App\Models\Plan;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('users.ver', compact('user'));
    }

    public function create()
    {
        if (!Auth::check() || !Auth::user()->isAdmin()) {
            abort(403, "No tienes permiso para crear usuarios.");
        }
        return view('users.form-crear');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role'     => 'required|in:admin,usuario',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
            'role'     => $request->role,
        ]);

        return redirect()->route('users.index')->with('message', "Usuario creado exitosamente.");
    }

    public function edit(User $user)
    {
        if (!Auth::check() || !Auth::user()->isAdmin()) {
            abort(403, "No tienes permiso para editar usuarios.");
        }

        return view('users.form-edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        if (!Auth::check() || !Auth::user()->isAdmin()) {
            abort(403, "No tienes permiso para editar usuarios.");
        }

        $request->validate([
            'name'              => 'required|string|max:255',
            'email'             => 'required|email|max:255',
            'role'              => 'required|in:admin,usuario',
            'equipo'            => 'nullable|string|max:255',
            'rustdesk'          => 'nullable|integer',
            'sistema_operativo' => 'nullable|string|max:255',
            'procesador'        => 'nullable|string|max:255',
            'tipo_memoria'      => 'nullable|string|max:20',
            'capacidad_memoria' => 'nullable|string|max:20',
            'tipo_disco'        => 'nullable|string|max:50',
            'capacidad_disco'   => 'nullable|string|max:20',
            'ip_pc'             => 'nullable|regex:/^(\d{1,3}\.){3}\d{1,3}$/',
            'ip_tel'            => 'nullable|regex:/^(\d{1,3}\.){3}\d{1,3}$/',
            'notas'             => 'nullable|string',
            'interno'           => 'nullable|integer',
        ]);

        $user->update($request->all());

        return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente.');
    }

    public function destroy(User $user)
    {
        if (!Auth::check() || !Auth::user()->isAdmin()) {
            abort(403, "No tienes permiso para eliminar usuarios.");
        }

        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuario eliminado correctamente.');
    }
    public function delete(int $id)
    {
        return view('users.form-borrar', [
            'user' => User::findOrFail($id),
        ]);
    }


}

