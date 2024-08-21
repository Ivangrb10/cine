@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalles de la Categoría</h2>
    <div class="card">
        <div class="card-header">
            {{ $categoria->nombre }}
        </div>
        <div class="card-body">
            <p><strong>Descripción:</strong> {{ $categoria->descripcion }}</p>
        </div>
    </div>
    <a href="{{ route('categorias.index') }}" class="btn btn-primary mt-3">Volver a la lista</a>
</div>
@endsection
