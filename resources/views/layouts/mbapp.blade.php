<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body>
    <div id="app">
        <div id="wrapper" class="d-flex">
            <!-- Sidebar -->
            <div class="bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading text-center py-4 primary-text fs-5 fw-bold text-uppercase">
                    <i class="fas fa-user-secret me-2"></i> {{ config('app.name', 'mbApp') }}
                </div>
                <div class="list-group list-group-flush my-3">
                    @auth
                    <span class="list-group-item list-group-item-action bg-transparent text-secondary fw-bold">
                        <i class="fas fa-user-astronaut me-2"></i>Hi, {{ Auth::user()->username }}!
                    </span>
                    @endauth
                    <a href="{{ route('home') }}" class="list-group-item list-group-item-action bg-transparent text-secondary active">
                        <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent text-secondary fw-bold">
                        <i class="fas fa-chart-area me-2"></i>Analytics
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent text-secondary fw-bold">
                        <i class="fas fa-paperclip me-2"></i>Reports
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent text-secondary fw-bold">
                        <i class="fas fa-project-diagram me-2"></i>Advanced
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent text-secondary fw-bold">
                        <i class="fas fa-users-gear me-2"></i>User
                    </a>
                    <a href="{{ route('logout') }}" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-user-lock me-2"></i>{{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div>
            </div>
            <!-- ./Sidebar -->

            <div id="page-content-wrapper" class="flex-grow-1">
<!--                <nav class="navbar navbar-expand-md navbar-light bg-transparent shadow-sm py-4 px-4">-->
<!--                    <div class="d-flex align-items-center">-->
<!--                        <i class="fas fa-align-left text-primary fs-4 me-3" id="menu-toggle"></i>-->
<!--                        <h2 class="fs-2 m-0">Dashboard</h2>-->
<!--                    </div>-->
<!--                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"-->
<!--                        data-bs-target="#navbar-supported-content" aria-controls="navbar-supported-content"-->
<!--                        aria-expanded="false" aria-label="Toggle navigation">-->
<!--                        <span class="navbar-toggler-icon"></span>-->
<!--                    </button>-->
<!--                    <div class="collapse navbar-collapse" id="navbar-supported-content">-->
<!--                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">-->
<!--                            <li class="nav-item-dropdown">-->
<!--                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-secondary fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>-->
<!--                                    <i class="fas fa-user me-2"></i> {{ Auth::user()->username }}-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!---->
<!--                            </ul>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </nav>-->
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-align-left text-primary fs-4 me-3" id="menu-toggle"></i>
                        <h2 class="fs-2 m-0">Dashboard</h2>
                    </div>
                    <div class="container">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            Dashboard
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="fas fa-align-left text-primary fs-4 me-3" id="menu-toggle"></span>
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
                                        {{ Auth::user()->username }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
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
            </div>
            <main class="container-fluid py-r px-4">
                @yield('content')
            </main>
        </div>
    </div>
    <script>
        let el = document.getElementById('wrapper')
        let toggleBtn = document.getElementById('menu-toggle')
        toggleBtn.onclick = function() {
            el.classList.toggle('toggled')
            console.log('menu-toggle clicked')
            console.log(el.classList)
        }
    </script>
</body>
</html>
