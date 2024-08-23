<?php

namespace App\Http\Controllers;

use App\Models\Directores;
use Illuminate\Http\Request;

class DirectoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directores = Directores::all();
        return view('directores.index', compact('directores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('directores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'biografia' => 'nullable|max:500',
            'fecha_nac' => 'nullable|date',

        ]);

        Directores::create($request->all());

        return redirect()->route('directores.index')
                         ->with('success', 'Director creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $directores = Directores::find($id);
        return view('directores.show', compact('directores'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $directores = Directores::find($id);
        return view('directores.edit', compact('directores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'biografia' => 'nullable|max:500',
            'fecha_nac' => 'nullable|date',

        ]);

        $directores = Directores::find($id);
        $directores->update($request->all());

        return redirect()->route('directores.index')
                         ->with('success', 'Director actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $directores = Directores::find($id);
        $directores->delete();

        return redirect()->route('directores.index')
                         ->with('success', 'Director eliminado exitosamente.');
    }
}

