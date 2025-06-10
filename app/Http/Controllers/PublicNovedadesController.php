<?php

namespace App\Http\Controllers;

use App\Models\Novedad;
use Illuminate\Http\Request;

class PublicNovedadesController extends Controller
{
    public function index()
    {
        // Listado de novedades accesible para todos
        $novedades = Novedad::all();

        return view('user.novedades-index', [
            'novedades' => $novedades,
        ]);
    }

    // public function show(int $id)
    // {
    //     // Vista ampliada de una novedad accesible para todos
    //     $novedad = Novedad::findOrFail($id);

    //     return view('user.novedades-ver', [
    //         'novedad' => $novedad,
    //     ]);
    // }
    public function show($id)
    {
        if (!is_numeric($id)) {
            abort(404, "El ID proporcionado no es válido.");
        }

        $novedad = Novedad::findOrFail($id);

        return view('user.novedades-ver', ['novedad' => $novedad]);
    }

}
