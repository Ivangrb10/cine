<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = clientes:: all();
        return view ('clientes.index', compact('clientes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('clientes.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'apellido' => 'nullable|string|max:500',
        'email' => 'required|email|max:255',
        'telefono' => 'required|string|max:15',
        'direccion' => 'required|string|max:255',
    ]);

    // Crear un nuevo cliente
    clientes::create($request->all());

    // Redirigir a la lista de clientes con un mensaje de éxito
    return redirect()->route('clientes.index')
                     ->with('success', 'Cliente creado exitosamente.');
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $clientes = clientes::find($id);
        return view('clientes.show', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $clientes = clientes::find($id);
        return view('clientes.edit', compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'nullable|string|max:500',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:15',
            'direccion' => 'required|string|max:255',
        ]);
        $clientes = clientes::find($id);
        $clientes->update($request->all());
    
        // Redirigir a la lista de clientes con un mensaje de éxito
        return redirect()->route('clientes.index')
                         ->with('success', 'Cliente actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $clientes = clientes::find($id);
        $clientes->delete();

    return redirect()->route('clientes.index')
                     ->with('success', 'Clientes eliminado exitosamente.');
    }
}
