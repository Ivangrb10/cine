@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('actores.index') }}" class="btn btn-warning">Atrás</a>
    <h2>Editar Directores</h2>
    <form action="{{ route('actores.update', $actores->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $actores->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="biografia">Biografia:</label>
            <textarea name="biografia" class="form-control">{{ $actores->biografia }}</textarea>
        </div>
        <div class="form-group">
        <label for="fecha_nac">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nac" class="form-control" value="{{ $actores->fecha_nac }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection