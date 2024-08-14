@foreach ($funciones as $funciones)
<div>

    {{$funciones->pelicula_id}}:<br>
    {{$funciones->sala_id}}<br>
    {{$funciones->fecha}}<br>
    {{$funciones->hora}}<br>
    <hr>
    
</div>
    
@endforeach