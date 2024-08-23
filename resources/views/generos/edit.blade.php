@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('generos.index') }}" class="btn btn-warning">Atrás</a>
    <h2>Editar Genero</h2>
    <form action="{{ route('generos.update', $generos->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $generos->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control">{{ $generos->descripcion }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection