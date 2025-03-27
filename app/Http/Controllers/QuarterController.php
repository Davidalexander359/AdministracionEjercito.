<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quarter;

class QuarterController extends Controller
{
    public function create()
    {
        return view('cuartel.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name_quarter' => 'required|string|max:30',
        'location' => 'required|string|max:60', // Asegura que location sea obligatorio
    ]);

    Quarter::create([
        'name_quarter' => $request->name_quarter,
        'location' => $request->location, // Asegura que location se guarde
    ]);

    return redirect()->route('cuartel.create')->with('success', 'Cuartel creado exitosamente.');
}

}
