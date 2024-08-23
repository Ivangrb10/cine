@extends('layouts.app')
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
            Peliculas
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Año</th>
                        <th>Genero_id</th>
                        <th>Duracion</th>
                        <th>Acciones
                            <a href="{{ route('peliculas.create') }}" class="btn btn-success ml-4">
                                <i class="fas fa-plus"></i> Crear
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($peliculas as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->titulo }}</td>
                        <td>{{ $item->descripcion }}</td>
                        <td>{{ $item->anio }}</td>
                        <td>{{ $item->genero_id }}</td>
                        <td>{{ $item->duracion }}</td>
                        <td>
                            <a href="{{ route('peliculas.show', $item->id) }}" class="btn btn-info">
                                <i class="fas fa-eye"></i> Detalles
                            </a>
                            <a href="{{ url('peliculas/'.$item->id.'/edit') }}" class="btn btn-primary">
                                <i class="fa-solid fa-pen"></i> Editar
                            </a>
                            <form action="{{ route('peliculas.destroy', $item->id) }}" method="POST" style="display:inline;">
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