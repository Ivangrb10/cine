@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('peliculas.index') }}" class="btn btn-warning">Atrás</a>
    <h2>Editar Película</h2>
    <form action="{{ route('peliculas.update', $peliculas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" class="form-control" value="{{ $peliculas->titulo }}" required>
        </div>
        
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control" required>{{ $peliculas->descripcion }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="director_id">Director:</label>
            <select name="director_id" class="form-control" required>
                @foreach($directores as $director)
                    <option value="{{ $director->id }}" {{ $peliculas->director_id == $director->id ? 'selected' : '' }}>{{ $director->nombre }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="genero_id">Género:</label>
            <select name="genero_id" class="form-control" required>
                @foreach($generos as $genero)
                    <option value="{{ $genero->id }}" {{ $peliculas->genero_id == $genero->id ? 'selected' : '' }}>{{ $genero->nombre }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="anio">Año:</label>
            <input type="number" name="anio" class="form-control" value="{{ $peliculas->anio }}" required>
        </div>
        
        <div class="form-group">
            <label for="duracion">Duración (minutos):</label>
            <input type="number" name="duracion" class="form-control" value="{{ $peliculas->duracion }}" required>
        </div>
        
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
