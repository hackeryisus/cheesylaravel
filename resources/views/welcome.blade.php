@extends('main')

@section('title')
    Inicio de la pagina
@endsection

@section('content')
        <div class="ui text container">
          <h1 class="ui inverted header">Fotografia Profesional para ti</h1>
          <h2>Capturamos tus mejores momentos.</h2>
          <div class="ui huge primary button">Empezar<i class="icon arrow right"></i></div>
        </div>

        </div>

        <!--Escudos de escuelas-->
        <h2 id="anuarios-title" class="ui center aligned teal huge header">ANUARIOS</h2>
        <div class="ui center aligned two column doubling grid">
        <div class="column">
            <img class="" src="./img/escudos/BINE-logo.png" alt="">
            <h3>Benemérito Instituto Normal del Estado</h3>
            <p>Bachillerato Matutino</p>
        </div>
        <div class="column">
            <img class="" src="./img/escudos/BINE-logo.png" alt="">
            <h3>Benemérito Instituto Normal del Estado</h3>
            <p>Bachillerato Vespertino</p>
        </div>
        <div class="column">
            <img class="" src="./img/escudos/CENCH-logo.png" alt="">
            <h3>Centro Escolar Niños Heroes de Chapultepec</h3>
            <p>Primaria Matutina</p>
        </div>
        </div>
@endsection
