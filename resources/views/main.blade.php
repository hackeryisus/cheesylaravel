<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Sitio de anuarios online">
        <meta name="author" content="@jemandez">
        <meta name="theme-color" content="#62b948">
        <title>@yield ('title', 'Default')</title>
        <link rel="icon" href="/img/brand/favicon.png">
        <link rel="stylesheet" href="{{asset('css/style.min.css')}}">
    </head>
    <body>
          <!-- White Menu -->
      <div class="ui large top fixed hidden menu">
        <div class="ui container">
          <a class="header logo" href="#" class="header item"><img  src="/img/brand/isologo-2.png"></a>
          <a class="active item">Inicio</a>
          <a class="item">Contacto</a>
          <a class="item">Informate</a>
          <div class="right menu">
            <div class="item">
              <a href="login.html" class="ui green button">Entrar</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <div class="ui vertical inverted sidebar menu">
        <a class="header logo" href="#" class="header item"><img  src="/img/brand/isologo-2.png"></a>
        <a class="active item">Inicio</a>
        <a class="item">Contacto</a>
        <a class="item">Informate</a>
        <a href="login.html" class="item">Entrar</a>
      </div>

      <!-- Page Contents -->
      <div class="pusher">
        <div id="masthead" class="ui inverted vertical center aligned segment">

          <div class="ui container">
            <div class="ui large secondary inverted pointing menu">
              <a class="toc item">
                <i class="sidebar icon"></i>
              </a>
              <a class="header logo" href="#" class="header item"><img  src="/img/brand/isologo-2.png"></a>
              <a class="active item">Inicio</a>
              <a class="item">Contacto</a>
              <a class="item">Informate</a>
              <div class="right item">
                <a href="login.html" class="ui green button">Entrar</a>
              </div>
            </div>
          </div>

@yield('content')

@include('partials.footer')
