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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Clasificaciones $clasificaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clasificaciones $clasificaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clasificaciones $clasificaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clasificaciones $clasificaciones)
    {
        //
    }
}
