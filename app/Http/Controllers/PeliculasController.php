<?php

namespace App\Http\Controllers;
use App\Models\Directores;
use App\Models\generos;
use App\Models\peliculas;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = peliculas:: all();
        return view ('peliculas.index', compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
  
    return view('peliculas.create', compact('directores', 'generos'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'titulo' => 'required|max:255',
        'descripcion' => 'nullable|max:500',
        'director_id' => 'nullable|exists:directors,id', // Validación de clave foránea
        'anio' => 'nullable|integer', // Validación de número entero
        'genero_id' => 'nullable|exists:generos,id', // Validación de clave foránea
        'duracion' => 'nullable|integer', // Validación de número entero
    ]);

    peliculas::create($request->all());

    return redirect()->route('peliculas.index')
                     ->with('success', 'Pelicula creada exitosamente.');
}


    /**
     * Display the specified resource.
     */
    public function show(peliculas $peliculas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(peliculas $peliculas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, peliculas $peliculas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(peliculas $peliculas)
    {
        //
    }
}
