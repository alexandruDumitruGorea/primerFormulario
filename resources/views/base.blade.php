<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ url('assets/css/styles.css') }}">
</head>
<body>
  <header>
    <ul class="menu">
      <li class="menu__item"><a href="{{ url('inicio/') }}" class="menu__link menu__link--active">Inicio</a></li>
      <li class="menu__item"><a href="#" class="menu__link">PHP</a></li>
      <li class="menu__item"><a href="#" class="menu__link">Laravel</a></li>
      <li class="menu__item"><a href="{{ url('login/') }}" class="menu__link menu__link--login">Login</a></li>
    </ul>
  </header>
  <div class="content">
    @yield('contenido')
  </div>
</body>
</html>