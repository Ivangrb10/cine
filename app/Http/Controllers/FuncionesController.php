<?php

namespace App\Http\Controllers;

use App\Models\funciones;
use Illuminate\Http\Request;

class FuncionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funciones = funciones:: all();
        return view ('funciones.index', compact('funciones'));
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
    public function show(funciones $funciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(funciones $funciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, funciones $funciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(funciones $funciones)
    {
        //
    }
}
