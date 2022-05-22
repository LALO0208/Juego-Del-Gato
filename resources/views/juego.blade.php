<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">

    <title>Gatito</title>
  </head>
  <body>
    <div class="cuadrado">
      <div onclick="click_user(1)" class="button" id="1"></div>
      <div onclick="click_user(2)" class="button" id="2"></div>
      <div onclick="click_user(3)" class="button" id="3"></div>
      <div onclick="click_user(4)" class="button" id="4"></div>
      <div onclick="click_user(5)" class="button" id="5"></div>
      <div onclick="click_user(6)" class="button" id="6"></div>
      <div onclick="click_user(7)" class="button" id="7"></div>
      <div onclick="click_user(8)" class="button" id="8"></div>
      <div onclick="click_user(9)" class="button" id="9"></div>
    </div>
    <div class="contenedor_bajo">
      <button onclick="restart()">Reiniciar Partida</button>
    </div>
  </body>
  <script src="{{asset('js/index.js')}}" defer></script>
</html>