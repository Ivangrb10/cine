@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('clientes.index') }}" class="btn btn-warning">Atrás</a>
    <h2>Crear Nuevo Cliente</h2>
    <form action="{{ route('clientes.update', $clientes->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Asegúrate de incluir el método PUT para actualizar -->
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $clientes->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" class="form-control" value="{{ $clientes->apellido }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $clientes->email }}" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" class="form-control" value="{{ $clientes->telefono }}" required>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" class="form-control" value="{{ $clientes->direccion }}" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
