<?php

namespace App\Http\Controllers;

use App\Models\salas;
use Illuminate\Http\Request;

class SalasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salas = salas:: all();
        return view ('salas.index', compact('salas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('salas.create');
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
        
        salas::create($request->all());
    
        return redirect()->route('salas.index')
                         ->with('success', 'Sala creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $salas = salas::find($id);
        return view('salas.show', compact('salas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $salas = salas::find($id);
        return view('salas.edit', compact('salas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'capacidad' => 'nullable|integer',
        ]);        
        
        $salas = salas::find($id);
        $salas->update($request->all());
    
        return redirect()->route('salas.index')
                         ->with('success', 'Sala actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $salas = salas::find($id);
        $salas->delete();

    return redirect()->route('salas.index')
                     ->with('success', 'Sala eliminada exitosamente.');
    }
}
