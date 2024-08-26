@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css">
@endsection
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Otros enlaces a CSS o scripts -->
</head>
<body>
    @yield('content')
</body>
</html>
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Reservas
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover" id="reservas">
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

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
    <script>
        new DataTable('#reservas');
    </script>
@endsection
