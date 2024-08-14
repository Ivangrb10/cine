@foreach ($directores as $directores)
<div>

    {{$directores->nombre}}:<br>
    {{$directores->biografia}}<br>
    {{$directores->fecha_nac}}<br>
    <hr>
    
</div>
    
@endforeach