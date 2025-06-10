<?php

namespace App\Http\Controllers;

use App\Models\Novedad;
use Illuminate\Http\Request;

class NovedadesController extends Controller
{
    public function index()
    {
        $novedades = Novedad::all();
        return view('novedades.index', ['novedades' => $novedades]);
    }

    public function show($id)
    {
        $novedad = Novedad::findOrFail($id);
        return view('novedades.ver', ['novedad' => $novedad]);
    }


    public function create()
    {
        return view('novedades.form-crear');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:2',
            'contenido' => 'required|min:5',
            'imagen' => 'nullable|string',
        ]);

        $data = $request->only(['titulo', 'contenido', 'imagen']);

        $novedad = Novedad::create($data);
        
        return redirect()
            ->route('abm.novedades.ver', ['id' => $novedad->id])
            ->with('feedback.message', 'La novedad <b>' . e($data['titulo']) . '</b> se creó exitosamente.');
            
    }

    public function edit(int $id)
    {
        return view('novedades.form-edit', [
            'novedad' => Novedad::findOrFail($id),
        ]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'titulo' => 'required|min:2',
            'contenido' => 'required|min:5',
            'imagen' => 'nullable|string',
        ]);

        $novedad = Novedad::findOrFail($id);
        $data = $request->only(['titulo', 'contenido', 'imagen']);
        $novedad->update($data);

        return redirect()
            ->route('abm.novedades')
            ->with('feedback.message', 'La novedad <b>' . e($data['titulo']) . '</b> se actualizó correctamente.');
    }

    public function delete(int $id)
    {
        return view('novedades.form-borrar', [
            'novedad' => Novedad::findOrFail($id),
        ]);
    }

    public function destroy(int $id)
    {
        $novedad = Novedad::findOrFail($id);
        $novedad->delete();

        return redirect()
            ->route('abm.novedades')
            ->with('feedback.message', 'La novedad <b>' . e($novedad->titulo) . '</b> se eliminó exitosamente.');
    }
}

