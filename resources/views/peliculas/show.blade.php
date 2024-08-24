@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('peliculas.index') }}" class="btn btn-warning">Atrás</a>
    <h2>Detalles de la Película</h2>
    <div class="form-group">
        <label for="titulo">Título:</label>
        <p>{{ $peliculas->titulo }}</p>
    </div>
    
    <div class="form-group">
        <label for="descripcion">Descripción:</label>
        <p>{{ $peliculas->descripcion }}</p>
    </div>
    
    <div class="form-group">
        <label for="director_id">Director:</label>
        <p>{{ $peliculas->director_id->nombre }}</p>
    </div>
    
    <div class="form-group">
        <label for="genero_id">Género:</label>
        <p>{{ $peliculas->genero_id->nombre }}</p>
    </div>
    
    <div class="form-group">
        <label for="anio">Año:</label>
        <p>{{ $peliculas->anio }}</p>
    </div>
    
    <div class="form-group">
        <label for="duracion">Duración (minutos):</label>
        <p>{{ $peliculas->duracion }}</p>
    </div>
</div>
@endsection

