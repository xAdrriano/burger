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
      <div class="nav links flex-center" id="return-to-top">
          <a href="/">
            <img src="/img/logo-burger.png" width="30" height="30" alt="burger">
          </a>
              <a href="/burger/menu">
                <div class="m-button">
                MENU
              </div>
              </a>
            <div class="d-hover">
              <div class="d-button links">
                <a href="/burger/zamow">
                  Zamów Online >>
                </a>
              </div>
            </div>
          </div>
            <div class="arrow">
              <a href="#return-to-top">
                <img src="/img/up-arrow.png"  width="50" src="do-góry">
              </a>
          </div>
          <div class="back">
            <a href="/">
              <img src="/img/logo-burger.png"  width="50" src="powrot">
            </a>
        </div>
      @yield('content')

      <footer>
        <a href="/">
          <img src="/img/logo-burger.png" width="30" height="30" alt="logo">
        </a>
        <p>Copyright 2023 Burgir | Made by Adrian</p>
      </footer>
    </body>
</html>
