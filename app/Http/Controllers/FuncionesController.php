<?php

namespace App\Http\Controllers;

use App\Models\directores;
use App\Models\funciones;
use App\Models\generos;
use App\Models\pelicula;
use App\Models\peliculas;
use App\Models\salas;
use Illuminate\Http\Request;

class FuncionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $funciones = Funciones::all();
    return view('funciones.index', compact('funciones'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    // Obtener todas las películas y salas
    $peliculas = peliculas::all();
    $salas = salas::all();

    // Pasar los datos a la vista
    return view('funciones.create', compact('peliculas', 'salas'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validar los datos del formulario
    $request->validate([
        'pelicula_id' => 'required|exists:peliculas,id',
        'sala_id' => 'required|exists:salas,id',
        'fecha' => 'required|date',
        'hora' => 'required|date_format:H:i',
    ]);

    // Crear una nueva función
    Funciones::create([
        'pelicula_id' => $request->pelicula_id,
        'sala_id' => $request->sala_id,
        'fecha' => $request->fecha,
        'hora' => $request->hora,
    ]);

    // Redirigir con un mensaje de éxito
    return redirect()->route('funciones.index')->with('success', 'Función creada exitosamente.');
}

    /**
     * Display the specified resource.
     */
    public function show(funciones $funciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $funciones = peliculas::findOrFail($id);
        $peliculas = peliculas::all();
        $salas = salas::all();
        return view('funciones.edit', compact('funciones', 'peliculas', 'salas'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validar los datos del formulario
    $request->validate([
        'pelicula_id' => 'required|exists:peliculas,id',
        'sala_id' => 'required|exists:salas,id',
        'fecha' => 'required|date',
        'hora' => 'required|date_format:H:i',
    ]);
    // Encontrar las funciones y actualizar sus datos
    $funciones = funciones::findOrFail($id);
    $funciones->update([
        'pelicula_id' => $request->pelicula_id,
        'sala_id' => $request->sala_id,
        'fecha' => $request->fecha,
        'hora' => $request->hora,
    ]);
    // Redirigir con un mensaje de éxito
    return redirect()->route('funciones.index')->with('success', 'Función actualizada exitosamente.');
}


  /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    // Encontrar la función por su id
    $funciones = Funciones::findOrFail($id);

    // Eliminar la función
    $funciones->delete();

    // Redirigir con un mensaje de éxito
    return redirect()->route('funciones.index')->with('success', 'Función eliminada exitosamente.');
}

}


  
