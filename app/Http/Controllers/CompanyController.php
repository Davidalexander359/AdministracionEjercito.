<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
class CompanyController extends Controller
{
    public function create()
    {
        return view('compania.create'); // Asegúrate de que la vista exista
    }

    public function store(Request $request)
    {
        $request->validate([
            'activity_company' => 'required|string|max:20',
        ]);

        Company::create([
            'activity_company' => $request->activity_company,
        ]);

        return redirect()->route('compania.create')->with('success', 'Compañía creada con éxito');
    }
}
