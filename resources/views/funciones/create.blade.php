@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('funciones.index') }}" class="btn btn-warning">Atrás</a>
    <h2>Crear Nueva Función</h2>
    <form action="{{ route('funciones.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="pelicula_id">Peliculas:</label>
            <select name="pelicula_id" class="form-control" required>
                @foreach($peliculas as $peliculas)
                    <option value="{{ $peliculas->id }}">{{ $peliculas->titulo }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="sala_id">Sala:</label>
            <select name="sala_id" class="form-control" required>
                @foreach($salas as $salas)
                    <option value="{{ $salas->id }}">{{ $salas->nombre }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="hora">Hora:</label>
            <input type="time" name="hora" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
