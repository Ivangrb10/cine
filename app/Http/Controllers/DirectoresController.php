<?php

namespace App\Http\Controllers;

use App\Models\directores;
use Illuminate\Http\Request;

class DirectoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directores = directores:: all();
        return view ('directores.index', compact('directores'));
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
    public function show(directores $directores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(directores $directores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, directores $directores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(directores $directores)
    {
        //
    }
}
