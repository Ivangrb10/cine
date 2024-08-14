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
    public function show(salas $salas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(salas $salas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, salas $salas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(salas $salas)
    {
        //
    }
}
