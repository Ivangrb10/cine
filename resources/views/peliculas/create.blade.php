@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('peliculas.index') }}" class="btn btn-warning">Atrás</a>
    <h2>Crear Nueva Película</h2>
    <form action="{{ route('peliculas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control" required></textarea>
        </div>
        
        <div class="form-group">
            <label for="director_id">Director:</label>
            <select name="director_id" class="form-control" required>
                @foreach($directores as $directores)
                    <option value="{{ $directores->id }}">{{ $directores->nombre }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="genero_id">Género:</label>
            <select name="genero_id" class="form-control" required>
                @foreach($generos as $generos)
                    <option value="{{ $generos->id }}">{{ $generos->nombre }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="anio">Año:</label>
            <input type="number" name="anio" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="duracion">Duración (minutos):</label>
            <input type="number" name="duracion" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
