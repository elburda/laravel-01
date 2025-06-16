<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login-form');
    }

    public function loginExecute(Request $request)
    {
        // TODO VALIDACION
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ], [
            'email.required'    => 'El email es obligatorio.',
            'email.email'       => 'El email debe ser válido.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min'      => 'La contraseña debe tener al menos :min caracteres.',
        ]);
        $credentials = $request->only(['email', 'password']);
    

        
        if(Auth::attempt($credentials)) {
            return redirect()
                ->route('abm.planes.servicios')
                ->with([
                    'feedback.message' =>'¡Sesión iniciada con éxito! Bienvenido...',
                    'feedback.type'    => 'success'
            ]);
        }

        
        return redirect()
            ->route('auth.loginForm')
            ->withInput()
            ->with([
                'feedback.message'  => '¡Las credenciales ingresadas no coinciden con nuestros registros!',
                'feedback.type'     => 'danger'
            ]);        
    }

    public function logout(Request $request)
    {
        Auth::logout();

        
        $request->session()->invalidate();

        
        $request->session()->regenerateToken();

        return redirect()
            ->route('auth.loginForm')
            ->with([
                'feedback.message'  => 'La sesión se cerró correctamente. ¡Te esperamos pronto!',
                'feedback.type'     => 'success'
        ]);
    }
}
