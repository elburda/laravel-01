<?php

namespace App\Http\Controllers;

use App\Models\Novedad;
use Illuminate\Http\Request;

class PublicNovedadesController extends Controller
{
    public function index()
    {
        $novedades = Novedad::all();

        return view('visitantes.novedades-index', [
            'novedades' => $novedades,
        ]);
    }
    public function show(int $id)
    {
        if (!is_numeric($id)) {
            abort(404, "El ID proporcionado no es válido.");
        }

        return view('visitantes.novedades-ver', [
            'novedad' => Novedad::findOrFail($id),
        ]);
    }


}
