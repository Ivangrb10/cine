<?php

namespace App\Http\Controllers;

use App\Models\actores;
use Illuminate\Http\Request;

class ActoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actores = actores:: all();
        return view ('actores.index', compact('actores'));
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
    public function show(actores $actores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(actores $actores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, actores $actores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(actores $actores)
    {
        //
    }
}
