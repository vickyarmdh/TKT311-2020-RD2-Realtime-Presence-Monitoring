<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Realtime Presence Monitoring') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href = "{{asset ('css/bootstrap.min.css')}}" rel = "stylesheet">

</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Realtime Presence Monitoring') }}
                </a>
                

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        </div>
                                <div class="mr-2 d-none d-lg-inline small"
                                style="margin-right: 1rem;">
                                    <strong>{{ Auth::user()->name }}</strong>
                                </div>
                                <div class="ml-auto">
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <style type="text/css">
            .warnaBombol{
                background-color: gray;
                color: white;
                border:none;
                border-radius: 3;
            }
        </style>
        <nav class="navbar-light bg-white shadow-sm">
            <div class="container" >
                <button class="btn warnaBombol">Scan wajah</button>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>

    </div>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>

     <script src = "{{asset ('../js/bootstrap.min.js')}}"> </script>

</body>
</html>