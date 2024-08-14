@foreach ($reservas as $reservas)
<div>

    {{$reservas->funcion_id}}:<br>
    {{$reservas->cliente_id}}<br>
    {{$reservas->asientos}}:<br>
  
    
    <hr>
    
</div>
    
@endforeach