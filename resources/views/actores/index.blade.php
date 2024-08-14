@foreach ($actores as $actores)
<div>

    {{$actores->nombre}}:<br>
    {{$actores->biografia}}<br>
    {{$actores->fecha_nac}}<br>
    <hr>
</div>
    
@endforeach