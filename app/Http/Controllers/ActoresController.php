<?php

namespace App\Http\Controllers;

use App\Models\actores;
use Illuminate\Http\Request;

class ActoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actores = actores::all();
        return view('actores.index', compact('actores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('actores.create');
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

        actores::create($request->all());

        return redirect()->route('actores.index')
                         ->with('success', 'Actor creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $actores = actores::find($id);
    return view('actores.show', compact('actores'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $actores = actores::find($id);
        return view('actores.edit', compact('actores'));
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

        $actores = actores::find($id);
        $actores->update($request->all());

        return redirect()->route('actores.index')
                         ->with('success', 'actor actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(actores $actores)
    {
        $actores->delete();

        return redirect()->route('actores.index')
                         ->with('success', 'Actor eliminado exitosamente.');
    }
}

