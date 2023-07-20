<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="menu dropdown-item" href="{{ route('home') }}">Dashboard</a>
                                <a class="menu dropdown-item" href="{{url('guru') }}">Guru</a>
                                <a class="menu dropdown-item" href="{{url('mapel') }}">Mapel</a>
                                <a class="menu dropdown-item" href="{{url('kelas') }}">Kelas</a>
                                <a class="menu dropdown-item" href="{{url('about') }}">About</a>
                                    <a class=" logout dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <style>
                    *{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

}
.logout:hover{
    background-color: red;
    color:white;
}
.menu:hover{
    background-color: #0D6EFD;
    color:white;

}
.titik-dua-satu{
    display: inline;
    margin-left: 50px;
}
.titik-dua-dua{
    display: inline;
    margin-left: 62px;
}
.titik-dua-tiga{
    display: inline;
    margin-left: 54px;
}
.titik-dua-empat{
    display: inline;
    margin-left: 9px;
}
.titik-dua-lima{
    display: inline;
    margin-left: 48px;
}
                </style>
                @yield('content')

                <div class="footer mt-5 fw-bold text-center">
                    Copyright 2023 &copy; Diah Sawitri - 0702201027
                </div>
            </div>
        </main>
    </div>
</body>
</html>
