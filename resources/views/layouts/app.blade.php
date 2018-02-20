<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar" role="navigation" >
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <div class="navbar-menu">
                <div class="navbar-start"></div>
                <div class="navbar-end">
                        @guest
                            <a class="navbar-item" href="{{ route('login') }}">Login</a>
                            <a class="navbar-item" href="{{ route('register') }}">Register</a>
                        @else
                            <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-item has-dropdown">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="navbar-dropdown">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                    <button class="navbar-item">Logout</button>
                                </form>
                            </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
</body>
</html>
