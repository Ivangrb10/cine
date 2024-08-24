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
  
    $directores = directores::all();
    $generos = generos::all();
    return view('peliculas.create', compact('directores', 'generos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validar los datos del formulario
    $request->validate([
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'director_id' => 'required|exists:directores,id',
        'genero_id' => 'required|exists:generos,id',
        'anio' => 'required|integer|min:1888|max:' . date('Y'),
        'duracion' => 'required|integer|min:1',
    ]);

    // Crear una nueva película con los datos validados
    peliculas::create([
        'titulo' => $request->titulo,
        'descripcion' => $request->descripcion,
        'director_id' => $request->director_id,
        'genero_id' => $request->genero_id,
        'anio' => $request->anio,
        'duracion' => $request->duracion,
    ]);

    // Redirigir al índice de películas con un mensaje de éxito
    return redirect()->route('peliculas.index')->with('success', 'Película creada exitosamente.');
}


    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $peliculas = peliculas::findOrFail($id);
    return view('peliculas.show', compact('peliculas'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $peliculas = peliculas::findOrFail($id);
    $directores = Directores::all();
    $generos = generos::all();
    return view('peliculas.edit', compact('peliculas', 'directores', 'generos'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validar los datos del formulario
    $request->validate([
        'titulo' => 'required|max:255',
        'descripcion' => 'nullable|max:500',
        'director_id' => 'required|exists:directores,id', // Validación de clave foránea
        'genero_id' => 'required|exists:generos,id', // Validación de clave foránea
        'anio' => 'required|integer|min:1888|max:' . date('Y'), // Validación de número entero
        'duracion' => 'required|integer|min:1', // Validación de número entero
    ]);

    // Encontrar la película y actualizar sus datos
    $peliculas = peliculas::findOrFail($id);
    $peliculas->update([
        'titulo' => $request->titulo,
        'descripcion' => $request->descripcion,
        'director_id' => $request->director_id,
        'genero_id' => $request->genero_id,
        'anio' => $request->anio,
        'duracion' => $request->duracion,
    ]);

    // Redirigir al índice de películas con un mensaje de éxito
    return redirect()->route('peliculas.index')->with('success', 'Película actualizada exitosamente.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(peliculas $peliculas)
    {
        //
    }
}
