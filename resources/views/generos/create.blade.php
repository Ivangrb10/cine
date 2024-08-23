@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('generos.index') }}" class="btn btn-warning">Atrás</a>
    <h2>Crear Nuevo Genero</h2>
    <form action="{{ route('generos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection