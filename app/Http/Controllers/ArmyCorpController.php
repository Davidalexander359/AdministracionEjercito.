<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArmyCorp;

class ArmyCorpController extends Controller
{
    // Muestra el formulario de creación
    public function create()
    {
        return view('cuerpo.create');
    }

    // Guarda los datos en la base de datos
    public function store(Request $request)
{
    $request->validate([
        'denomination' => 'required|string|max:255',
    ]);

    ArmyCorp::create([
        'denomination' => $request->denomination,
    ]);

    return redirect()->route('cuerpo.create')->with('success', 'Cuerpo de Ejército creado correctamente.');
}

}
