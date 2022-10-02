<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'mbApps') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <span class="fas fa-paperclip text-secondary fs-4 me-3" id="menu-toggle"></span>
            <h2 class="navbar-brand"><a href="{{ route('home') }}" class="text-decoration-none text-white">{{ config('app.name', 'mbApps') }}</a></h2>
            <a href="javascript:void(0);" data-bs-target="#sidebar" data-bs-toggle="collapse"
               class="border rounded-3 p-1 text-decoration-none" title="Toggle Sidebar">
                <span class="fas fa-arrow-alt-circle-left fa-lg py-2 p-1 text-secondary"></span>
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Link
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
                </li>
            </ul>
            <div class="d-flex px-2 nav-item dropdown">
                <a class="nav-link dropdown-toggle text-secondary fw-bold" href="#" id="navbarDropdown"
                   role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user me-2"></i>{{ Auth::user()->username }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto px-0">
            <div id="sidebar" class="collapse collapse-horizontal show border-end">
                <div id="mb-sidebar" class="list-group border-0 rounded-0 text-sm-start">
                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate"
                       data-bs-parent="#sidebar"><i class="fas fa-bootstrap"></i> <span>Item</span> </a>
                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate"
                       data-bs-parent="#sidebar"><i class="fas fa-film"></i> <span>Item</span></a>
                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate"
                       data-bs-parent="#sidebar"><i class="fas fa-heart"></i> <span>Item</span></a>
                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate"
                       data-bs-parent="#sidebar"><i class="fas fa-bricks"></i> <span>Item</span></a>
                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate"
                       data-bs-parent="#sidebar"><i class="fas fa-clock"></i> <span>Item</span></a>
                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate"
                       data-bs-parent="#sidebar"><i class="fas fa-archive"></i> <span>Item</span></a>
                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate"
                       data-bs-parent="#sidebar"><i class="fas fa-gear"></i> <span>Item</span></a>
                    <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate"
                       data-bs-parent="#sidebar"><i class="fas fa-calendar"></i> <span>Item</span></a>
                    <a href="{{ route('logout') }}" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="fas fa-power-off me-2"></span>{{ __('Logout') }}
                    </a>
                    <form action="{{ route('logout') }}" id="logout-form" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        <main class="col ps-md-2 pt-2">
            @yield('content')
        </main>
    </div>
</div>
</body>
</html>
