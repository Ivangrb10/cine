@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('salas.index') }}" class="btn btn-warning">Atrás</a>
    <h2>Crear Nueva Sala</h2>
    <form action="{{ route('salas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="capacidad">Capacidad:</label>
        <input type="number" id="capacidad" name="capacidad" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection