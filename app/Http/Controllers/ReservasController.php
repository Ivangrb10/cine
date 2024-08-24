<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservas;
use App\Models\funciones;
use App\Models\Clientes;

class ReservasController extends Controller
{
    public function index()
    {
        $reservas = Reservas::all();
        return view('reservas.index', compact('reservas'));
    }
    // Método para mostrar el formulario de creación
    public function create()
    {
        $funciones = funciones::all();
        $clientes = Clientes::all();
        return view('reservas.create', compact('funciones', 'clientes'));
    }

    // Método para almacenar una nueva reserva
    public function store(Request $request)
    {
        $request->validate([
            'funcion_id' => 'required|exists:funciones,id',
            'cliente_id' => 'required|exists:clientes,id',
            'asientos' => 'required|integer|min:1',
        ]);

        Reservas::create($request->all());

        return redirect()->route('reservas.index')->with('success', 'Reserva creada exitosamente.');
    }

    // Método para mostrar el formulario de edición
    public function edit($id)
    {
        $reserva = Reservas::findOrFail($id);
        $funciones = funciones::all();
        $clientes = Clientes::all();
        return view('reservas.edit', compact('reserva', 'funciones', 'clientes'));
    }

    // Método para actualizar una reserva existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'funcion_id' => 'required|exists:funciones,id',
            'cliente_id' => 'required|exists:clientes,id',
            'asientos' => 'required|integer|min:1',
        ]);

        $reserva = Reservas::findOrFail($id);
        $reserva->update($request->all());

        return redirect()->route('reservas.index')->with('success', 'Reserva actualizada exitosamente.');
    }

    // Método para eliminar una reserva
    public function destroy($id)
    {
        $reserva = Reservas::findOrFail($id);
        $reserva->delete();

        return redirect()->route('reservas.index')->with('success', 'Reserva eliminada exitosamente.');
    }
}

