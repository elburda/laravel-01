<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Novedad;

class NovedadController extends Controller
{
    public function index()
    {
        $novedades = Novedad::all();
        return view('admin.novedades.index', compact('novedades'));
    }

    public function create()
    {
        return view('admin.novedades.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required',
        ]);

        Novedad::create($request->all());

        return redirect()->route('admin.novedades.index')->with('success', 'Novedad creada con éxito.');
    }

    public function edit(Novedad $novedad)
    {
        return view('admin.novedades.edit', compact('novedad'));
    }

    public function update(Request $request, Novedad $novedad)
    {
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required',
        ]);

        $novedad->update($request->all());

        return redirect()->route('admin.novedades.index')->with('success', 'Novedad actualizada.');
    }

    public function destroy(Novedad $novedad)
    {
        $novedad->delete();
        return redirect()->route('admin.novedades.index')->with('success', 'Novedad eliminada.');
    }

}

