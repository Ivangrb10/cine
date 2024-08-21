@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Categorías
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <a href="{{ route('categorias.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Crear
                            </a>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($categorias as $item)
                        
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->descripcion }}</td>

                        <td><a href="{{ route('categorias.show', $item->id) }}" class="btn btn-info">
                         <i class="fas fa-eye"></i> Detalles
                        </a>
                        </td>

                        <td>
                            <a href="{{ url('categorias/'.$item->id.'/edit') }}" class="btn btn-primary">
                                <i class="fas fa-pencil-alt"></i> Editar
                            </a>
                        </td> 

                        <td>
                            <form action="{{ route('categorias.destroy', $item->id) }}" method="POST" style="display:inline;">
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
