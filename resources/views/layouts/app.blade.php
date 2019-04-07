<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Itinex') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div id="app">

    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="/">
          <img src="/img/suparavel-logo-100.png" width="30px" height="30px">
        </a>
    
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
    
      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item" href="/">
            Home
          </a>
    
          <a class="navbar-item">
            Documentation
          </a>    
        </div>
    
        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
                @guest

                    <a class="button is-primary" href="{{ route('register') }}">
                        <strong>{{ __('Register') }}</strong>
                    </a>

                    <a class="button is-light" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>

                @else
                <div class="navbar-item has-dropdown is-hoverable">
                  <a class="navbar-link">
                    {{ Auth::user()->name }}
                  </a>
          
                  <div class="navbar-dropdown">
                    <a class="navbar-item" href="{{ route('dashboard') }}">
                      Dashboard
                    </a>
                    <a class="navbar-item" href="{{ route('profile',Auth::user()->id) }}">
                      Edit Profile
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                  </div>
                </div>

                @endguest

            </div>
          </div>
        </div>
      </div>
    </nav>

    @yield('content')

</body>
</html>