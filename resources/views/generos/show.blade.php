@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalles del Genero</h2>
    <div class="card">
        <div class="card-header">
            {{ $generos->nombre }}
        </div>
        <div class="card-body">
            <p><strong>Descripción:</strong> {{ $generos->descripcion }}</p>
        </div>
    </div>
    <a href="{{ route('generos.index') }}" class="btn btn-primary mt-3">Volver a la lista</a>
</div>
@endsection