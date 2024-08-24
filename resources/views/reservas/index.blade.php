@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Reservas
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Funcion</th>
                        <th>Cliente</th>
                        <th>Asientos</th>
                        <th>Acciones
                            <a href="{{ route('reservas.create') }}" class="btn btn-success ml-4">
                                <i class="fas fa-plus"></i> Crear
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($reservas as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->funcion_id}}</td> <!-- Acceder a la relación funciones -->
                        <td>{{ $item->cliente_id }}</td> <!-- Acceder a la relación clientes -->
                        <td>{{ $item->asientos }}</td>
                        <td>
                            <a href="{{ url('reservas/'.$item->id.'/edit') }}" class="btn btn-primary">
                                <i class="fa-solid fa-pen"></i> Editar
                            </a>
                            <form action="{{ route('reservas.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i> Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
