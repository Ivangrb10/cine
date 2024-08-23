@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('directores.index') }}" class="btn btn-warning">Atrás</a>
    <h2>Crear Nuevos Directores</h2>
    <form action="{{ route('directores.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="biografia">Biografia:</label>
            <textarea name="biografia" class="form-control"></textarea>
        </div>
        <div class="form-group">
        <label for="fecha_nac">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nac" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection