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
        <div class="half">
          <div class="right links flex-center">
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
        </div>
              <div class="half">
                <div class="right links flex-center">
                @guest
                @if (Route::has('login'))
                      <a href="{{ route('login') }}">
                        <div class="m-button">
                          {{ __('Zaloguj') }}
                        </div>
                      </a>
                @endif
    
                @if (Route::has('register'))
                      <a href="{{ route('register') }}">
                        <div class="m-button">
                          {{ __('Zarejestruj') }}
                        </div>
                      </a>
                @endif
            @else
                    <a href="/burger/lista-zamówień">
                      <div class="m-button">
                        Lista zamównień
                      </div>
                    </a>
                    <a id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                         <div class="m-button">
                                          {{ __('Wyloguj') }}
                                         </div>
                                         
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
            @endguest
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
