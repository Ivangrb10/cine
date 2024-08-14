@foreach ($generos as $generos)
<div>

    {{$generos->nombre}}:<br>
    {{$generos->descripcion}}<br>
    
    <hr>
    
</div>
    
@endforeach