@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalles de la Sala</h2>
    <div class="card">
        <div class="card-header">
            {{ $salas->nombre }}
        </div>
        <div class="card-body">
            <p><strong>Descripción:</strong> {{ $salas->capacidad }}</p>
        </div>
    </div>
    <a href="{{ route('salas.index') }}" class="btn btn-primary mt-3">Volver a la lista</a>
</div>
@endsection