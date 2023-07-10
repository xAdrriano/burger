<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Burger - pokona każdy głód</title>

        <link href="/css/main.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="/img/logo-burger.png">
    </head>
    <body>

      @yield('content')

      <footer>
        <p>Copyright 2023 Burgir</p>
      </footer>
    </body>
</html>
