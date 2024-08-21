<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //consultar a la base de datos con todos los parametros
        $categorias = Categoria:: all();
        return view ('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
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
    
    Categoria::create($request->all());

    return redirect()->route('categorias.index')
                     ->with('success', 'Categoría creada exitosamente.');
}

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $categoria = Categoria::find($id);
    return view('categorias.show', compact('categoria'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
    $categoria = Categoria::find($id);
    return view('categorias.edit', compact('categoria'));
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

    $categoria = Categoria::find($id);
    $categoria->update($request->all());

    return redirect()->route('categorias.index')
                     ->with('success', 'Categoría actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $categoria = Categoria::find($id);
    $categoria->delete();

    return redirect()->route('categorias.index')
                     ->with('success', 'Categoría eliminada exitosamente.');
}

}
