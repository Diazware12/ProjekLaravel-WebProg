<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="{{ url('/') }}">BMDB</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav mr-auto">
                        @guest
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            @else
                                @if(Auth::user()->role===1)
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Manage
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/manage/user">Manage User</a>
                                    <a class="dropdown-item" href="/manage/movie">Manage Movie</a>
                                    <a class="dropdown-item" href="/manage/genre">Manage Genre</a>
                                </li>
                                @else
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ url('/save') }}">Saved Movie <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ url('/inbox') }}">Inbox <span class="sr-only">(current)</span></a>
                                    </li>
                                @endif
                        @endguest
                        </ul>
                    
                    <!-- <form class="form-inline my-2 my-lg-0"> -->
                        <ul class="navbar-nav ml-auto">
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
                                @if(Auth::user()->role===1 || Auth::user()->role===2)

                                
                                        <li class="nav-item active">
                                            <a class="nav-link" href="/users/{{ Auth::user()->id}}/profile" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>
                                        </li>
                                        
                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>


                                
                                @endif
                            @endguest
                        </ul>
                    
                </div>
            </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
