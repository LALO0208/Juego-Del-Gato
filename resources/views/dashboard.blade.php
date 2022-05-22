<x-app-layout>
<link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
    <x-slot name="header">
        <center>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('BIENVENIDO A ESTE JUEGO') }}
        </h2>
        </center>
    </x-slot>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/jv/main.jv"></script>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-blue border-b border-gray-200">
                    <h1>JUGADOR VS MAQUINAA</h1>
                </div>
                <div class="p-6 bg-white border-b border-gray-50">
                   <p>ANIMATE A JUGAR CONTRA LA MAQUINA</p> 
                   <p>INSTRUCCIONES:</p>
                   <p>1.Registra tu nombre pulsando el boton "REGISTRAR"</p>
                   <p>2.Una vez registrado, pulse el boton "JUGAR"</p>
                   <p>3.Disfrute el juego</p>
                </div>
                <div class="button">
                 <ul class="nav-nav-pills">
                  <li class="nav-item"><a class="nav-link" href="{{route('juegos.create')}}">Registrarse</a></li>
                 </ul><br> 
                 <ul class="nav-nav-pills">
                 <li class="nav-item"><a class="nav-link" href="{{route('juegos.index')}}">Jugar</a></li>
                 </ul>

                </div>
                <div class="texto-final">
                    <h1>¡BUENA SUERTE!</h1>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
