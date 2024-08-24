@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('reservas.index') }}" class="btn btn-warning">Atrás</a>
    <h2>Crear Nueva Reserva</h2>
    <form action="{{ route('reservas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="funcion_id">Función:</label>
            <select name="funcion_id" class="form-control" required>
                @foreach($funciones as $funcion)
                    <option value="{{ $funcion->id }}">{{ $funcion->id }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="cliente_id">Cliente:</label>
            <select name="cliente_id" class="form-control" required>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->id }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="asientos">Asientos:</label>
            <input type="number" name="asientos" class="form-control" required min="1">
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
