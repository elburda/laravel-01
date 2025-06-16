<?php

namespace App\Http\Controllers;

use App\Models\Plan;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $planes = Plan::all();

        return view('visitantes.index', [
            'planes' => $planes,
        ]);
    }

    public function show(int $id)
    {
        $plan = Plan::findOrFail($id);

        return view('visitantes.ver', [
            'plan' => $plan,
        ]);
    }
}
