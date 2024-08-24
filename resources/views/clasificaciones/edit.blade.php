@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('clasificaciones.index') }}" class="btn btn-warning">Atrás</a>
    <h2>Editar Clasificacion</h2>
    <form action="{{ route('clasificaciones.update', $clasificaciones->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $clasificaciones->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control">{{ $clasificaciones->descripcion }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection