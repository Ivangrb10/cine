@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalles de los clientes</h2>
    <div class="card">
        <div class="card-header">
            <p><strong>Nombre:</strong>{{ $clientes->nombre }} </p>
        </div>
        <div class="card-body">
            <p><strong>Apellido:</strong> {{ $clientes->apellido }}</p>
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $clientes->email }}</p>
        </div>
        <div class="card-body">
            <p><strong>Telefono:</strong> {{ $clientes->telefono }}</p>
        </div>
        <div class="card-body">
            <p><strong>Direccion::</strong> {{ $clientes->direccion }}</p>
        </div>
    </div>
    <a href="{{ route('clientes.index') }}" class="btn btn-primary mt-3">Volver a la lista</a>
</div>
@endsection