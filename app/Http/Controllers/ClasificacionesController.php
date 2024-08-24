<?php

namespace App\Http\Controllers;

use App\Models\Clasificaciones;
use Illuminate\Http\Request;

class ClasificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clasificaciones = Clasificaciones:: all();
        return view ('clasificaciones.index', compact('clasificaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clasificaciones.create');
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
        
        Clasificaciones::create($request->all());
    
        return redirect()->route('clasificaciones.index')
                         ->with('success', 'Clasificacion creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $clasificaciones = Clasificaciones::find($id);
        return view('clasificaciones.show', compact('clasificaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $clasificaciones = Clasificaciones::find($id);
    return view('clasificaciones.edit', compact('clasificaciones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'nullable|max:500',
        ]);
    
        $clasificaciones = Clasificaciones::find($id);
        $clasificaciones->update($request->all());
    
        return redirect()->route('clasificaciones.index')
                         ->with('success', 'Clasificacion actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $clasificaciones = Clasificaciones::find($id);
        $clasificaciones->delete();

    return redirect()->route('clasificaciones.index')
                     ->with('success', 'Clasificacion eliminada exitosamente.');
    }
}
