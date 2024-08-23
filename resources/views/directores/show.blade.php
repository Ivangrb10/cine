@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalles de los Directores</h2>
    <div class="card">
        <div class="card-header">
            {{ $directores->nombre }}
        </div>
        <div class="card-body">
            <p><strong>Biografia:</strong> {{ $directores->biografia }}</p>
        </div>
        <div class="card-body">
            <p><strong>Fecha_nac:</strong> {{ $directores->fecha_nac }}</p>
        </div>
    </div>
    <a href="{{ route('directores.index') }}" class="btn btn-primary mt-3">Volver a la lista</a>
</div>
@endsection