@foreach ($peliculas as $peliculas)
<div>

    {{$peliculas->titulo}}:<br>
    {{$peliculas->descripcion}}<br>
    {{$peliculas->director_id}}:<br>
    {{$peliculas->anio}}<br>
    {{$peliculas->genero_id}}:<br>
    {{$peliculas->duracion}}<br>
    
    <hr>
    
</div>
    
@endforeach