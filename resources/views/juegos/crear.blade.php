<form action="{{route('juegos.store')}}" method="POST">
    @csrf

    <h1>"Para comenzar ingrese un alias para distinguirlo"</h1>

 <input type="text" name= "jugador" placeholder= "Jugador">
 <br>
 <br>
<button type="submit">Guardar</button>
</form>
