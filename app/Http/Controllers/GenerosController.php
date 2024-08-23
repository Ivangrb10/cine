<?php

namespace App\Http\Controllers;

use App\Models\generos;
use Illuminate\Http\Request;

class GenerosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $generos = generos:: all();
        return view ('generos.index', compact('generos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('generos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'nullable|max:500', // Agregar validación para descripción
        ]);
        
        generos::create($request->all());
    
        return redirect()->route('generos.index')
                         ->with('success', 'Categoría creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $generos = generos::find($id);
        return view('generos.show', compact('generos'));
    }

    public function edit($id)
    {
        $generos = generos::find($id);
        return view('generos.edit', compact('generos'));    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'nullable|max:500',
        ]);
    
        $generos = generos::find($id);
        $generos->update($request->all());
    
        return redirect()->route('generos.index')
                         ->with('success', 'Genero actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $generos = generos::find($id);
        $generos->delete();

    return redirect()->route('generos.index')
                     ->with('success', 'Genero eliminado exitosamente.');
    }
}
