<?php

namespace App\Http\Controllers;

use App\Models\Demanda;
use App\Models\Plan;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index()
    {
        $planes = Plan::all();
        // dd($planes);

        // return view('listados.index');

        return view('listados.index',[
            'planes' => $planes,
        ]);
    }

    public function show(int $id)
    {
        // $planes = Plan::all();
        // dd($planes);

        // return view('listados.index');

        $plan = Plan::findOrFail($id);


        return view('listados.ver',[
            'plan' => $plan,
        ]);
    }

    public function create()
    {
        return view('listados.form-crear', [
            'demandas' => Demanda::all(),
        ]);
    }

    public function store(Request $request)
    {
        
        //Validacion//

        $request->validate([
            'titulo' => 'required|min:2',
            'resumen' => 'required|min:2',
            'precio' => 'required|numeric',
            'horas' => 'required|numeric',
        ], [
            'titulo.required' => 'El título debe tener un valor.',
            'titulo.min' => 'El título debe tener :min caracteres o más.',
            'resumen.required' => 'El resumen debe tener un valor.',
            'resumen.min' => 'El resumen debe tener :min caracteres o más.',
            'precio.required' => 'El precio debe tener un valor.',
            'precio.numeric' => 'El precio debe ser un valor numérico.',
            'horas.required' => 'Las horas deben tener un valor.',
            'horas.numeric' => 'Las horas deben ser un valor numérico.',
        ]);

        $data = $request->only(['titulo', 'resumen', 'precio','horas', 'demanda_fk']);
        
        $plan = Plan::create($data);
        
        return redirect()
            ->route('abm.planes.servicios')

            ->with('feedback.message', 'El plan y/o servicio <b>' . e($data['titulo']) . '</b> se publicó exitosamente.');

    }

    public function edit(int $id)
    {
        return view('listados.form-edit', [
            'plan' => Plan::findOrFail($id),
            'demandas' => Demanda::all(),
        ]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'titulo' => 'required|min:2',
            'resumen' => 'required|min:2',
            'precio' => 'required|numeric',
            'horas' => 'required|numeric',
        ], [
            'titulo.required' => 'El título debe tener un valor.',
            'titulo.min' => 'El título debe tener :min caracteres o más.',
            'resumen.required' => 'El resumen debe tener un valor.',
            'resumen.min' => 'El resumen debe tener :min caracteres o más.',
            'precio.required' => 'El precio debe tener un valor.',
            'precio.numeric' => 'El precio debe ser un valor numérico.',
            'horas.required' => 'Las horas deben tener un valor.',
            'horas.numeric' => 'Las horas deben ser un valor numérico.',
        ]);

        
        $plan = Plan::findOrFail($id);

        $data = $request->only('titulo', 'resumen', 'precio', 'horas', 'demanda_fk');

        

        
        $plan->update($data);

        return redirect()
            ->route('abm.planes.servicios')
            ->with('feedback.message', 'El Plan <b>' . e($data['titulo']) . '</b> se actualizó coorectamente.');
    }

    public function delete(int $id)
    {
        return view('listados.form-borrar', [
            'plan' => Plan::findOrFail($id),
        ]);
    }



    public function destroy(int $id)
    {

        $plan = Plan::findOrFail($id);


        $plan->delete();

        
        return redirect()
            ->route('abm.planes.servicios')
            ->with('feedback.message', 'El plan <b>' . e($plan->titulo) . '</b> se eliminó exitosamente.');
    }

}
