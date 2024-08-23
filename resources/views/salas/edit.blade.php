@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('salas.index') }}" class="btn btn-warning">Atrás</a>
    <h2>Editar Sala</h2>
    <form action="{{ route('salas.update', $salas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $salas->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="capacidad">Capacidad:</label>
            <textarea name="capacidad" class="form-control">{{ $salas->capacidad }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
