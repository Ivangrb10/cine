@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalles de la Clasificacion</h2>
    <div class="card">
        <div class="card-header">
            {{ $clasificaciones->nombre }}
        </div>
        <div class="card-body">
            <p><strong>Descripción:</strong> {{ $clasificaciones->descripcion }}</p>
        </div>
    </div>
    <a href="{{ route('clasificaciones.index') }}" class="btn btn-primary mt-3">Volver a la lista</a>
</div>
@endsection