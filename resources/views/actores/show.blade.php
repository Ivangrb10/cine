@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalles de los Actores</h2>
    <div class="card">
        <div class="card-header">
            {{ $actores->nombre }}
        </div>
        <div class="card-body">
            <p><strong>Biografía:</strong> {{ $actores->biografia }}</p>
        </div>
        <div class="card-body">
            <p><strong>Fecha de Nacimiento:</strong> {{ $actores->fecha_nac }}</p>
        </div>
    </div>
    <a href="{{ route('actores.index') }}" class="btn btn-primary mt-3">Volver a la lista</a>
</div>
@endsection
