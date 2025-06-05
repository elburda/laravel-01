<?php

namespace App\Http\Controllers;

use App\Models\Plan;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $planes = Plan::all();

        return view('user.index', [
            'planes' => $planes,
        ]);
    }

    public function show(int $id)
    {
        $plan = Plan::findOrFail($id);

        return view('user.ver', [
            'plan' => $plan,
        ]);
    }
}
