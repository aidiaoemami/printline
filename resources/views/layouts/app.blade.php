<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PrintLine') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <div class="header py-4">
                <div class="container">
                    <div class="d-flex">
                        <a class="header-brand" href="{{ route('home')}}">
                            <img
                                src="/img/logo.png"
                                class="header-brand-img"
                                alt="tabler logo">
                        </a>

                        <div class="d-flex order-lg-2 ml-auto">
                            @guest
                                <div class="nav-item d-none d-md-flex">
                                    <a class="btn btn-link" href="{{ route('login') }}">@lang('Login')</a>
                                </div>
                                <div class="nav-item d-none d-md-flex">
                                    <a class="btn btn-link" href="{{ route('register') }}">@lang('Register')</a>
                                </div>
                            @else
                            <div class="dropdown">
                                <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                                    <span class="avatar" style="background-image: url()"></span>
                                    <span class="ml-2 d-none d-lg-block">
                                    <span class="text-default">{{ auth()->user()->name }}</span>
                                        <small class="text-muted d-block mt-1">{{ auth()->user()->roles[0]->name}}</small>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon fe fe-user"></i> Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon fe fe-settings"></i> Settings
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <i class="dropdown-icon fe fe-log-out"></i> @lang('Sign out')
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            @endguest
                        </div>

                        <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                            <span class="header-toggler-icon"></span>
                        </a>
                    </div>
                </div>
            </div>

        @auth
            <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg order-lg-first">
                            <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                            @role('admin')
                            <li class="nav-item">
                                <a href="{{ route('home')}}" class="nav-link {{ request()->is('home') ? 'active' : ''}}">
                                    <i class="fe fe-home"></i> Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('users.index')}}" class="nav-link {{ request()->is('users') ? 'active' : ''}}">
                                    <i class="fe fe-users"></i> Users
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('orders.index')}}" class="nav-link {{ request()->is('orders') ? 'active' : ''}}">
                                    <i class="fe fe-shopping-cart"></i> Orders
                                </a>
                            </li>
                            @endrole

                            @role('seller')
                            @endrole

                            @role('member')
                            @endrole
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endauth

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
