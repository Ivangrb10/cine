@foreach ($clasificaciones as $clasificaciones)
<div>

    {{$clasificaciones->nombre}}:<br>
    {{$clasificaciones->descripcion}}<br>
    <hr>
    
</div>
    
@endforeach