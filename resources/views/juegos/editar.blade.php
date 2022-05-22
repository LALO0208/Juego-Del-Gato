<form action="{{route('juegos.update', $juego->id)}}" method="POST">
    @method('PATCH')
    @csrf 
    <input type="text" name= "jugador" placeholder= "Jugador" value="{{$juego->jugador}}">
    <br>
    <br>
<button type="submit">Guardar</button>
</form>