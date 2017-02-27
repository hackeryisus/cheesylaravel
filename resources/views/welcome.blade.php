<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset}}.css">
    </head>
    <body>
      <header>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <figure class="navbar-brand" id="header-logo" ><img src="./img/brand/isologo-2.png" alt="Cheesy"></figure>
      </div>
      <div id="navbar" class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <!--<li class="active"><a href="#">Inicio</a></li>
          <li><a href="#contact">Contacto</a></li>-->
          <li><a class="cheesy-green" href="loggin.html">Entrar</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
</header>

<div class="jumbotron text-center cheesy-green">
<h1>Fografía Profesional</h1>
<p>Recuerdos digitales de tus más grandes momentos</p>
</div>

<div class="container-fluid text-center">
<div class="row  slideanim slide anuarios">
  <div class="col-xs-12 col-md-6 col-lg-4">
      <img class="img-responsive center-block" src="./img/BINE-logo.png" alt="">
      <h3>Benemérito Instituto Normal del Estado</h3>
      <p>Bachillerato Matutino</p>
  </div>
  <div class="col-xs-12 col-md-6 col-lg-4">
      <img class="img-responsive center-block" src="./img/BINE-logo.png" alt="">
      <h3>Benemérito Instituto Normal del Estado</h3>
      <p>Bachillerato Vespertino</p>
  </div>
  <div class="col-xs-12 col-md-6 col-lg-4">
      <img class="img-responsive center-block" src="./img/CENCH-logo.png" alt="">
      <h3>Centro Escolar Niños Heroes de Chapultepec</h3>
      <p>Primaria Matutina</p>
  </div>
</div>
</div>


<footer class="footer">
<div class="row cheesy-green">
  <div class="col-sm-4">
    <p class="text-muted">©2017 Cheesy S.A. de C.V. Todos los derechos reservados.</p>
  </div>
  <div class="col-sm-4">
    <p><strong>Contactanos</strong></p>
    <form class="form-inline">
      <div class="input-group">
        <input type="email" class="form-control" size="50" placeholder="Email Address" required="">
        <div class="input-group-btn">
          <button type="button" class="btn btn-danger">Enviar</button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-sm-4 text-center">
    <p><a href="#">Aviso de Privacidad</a></p>
  </div>
</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
    </body>
</html>
