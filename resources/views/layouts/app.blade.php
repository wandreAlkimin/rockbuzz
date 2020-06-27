<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Compiled and minified js -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/siteStyle.css') }}" rel="stylesheet">
</head>
<body>

@include('layouts.errors')


<div class="referenciaPaineis">

    @include('layouts.topo')

    @auth
        <div class="col s12 m3 l2"  style="padding: 0px 15px 0px 0px; " > <!-- Note that "m4 l3" was added -->
            {{--Oculto para os dispositivos moveis--}}
            <div class="card-panel painelLateral z-depth-3 hide-on-small-only" style="margin-bottom: 0px;width: 14%" >
                <ul class="nav-item m12 l12">
                    @include('layouts.painelLateral')
                </ul>
            </div>
        </div>

        <div class="col s12 m10 l10 " >
            <div class="card-panel painelCentral  " style="margin-bottom: 0px;" >
                @yield('content')
            </div>
        </div>
    @else
        @yield('content')
    @endauth
</div>



        {{--@yield('content')--}}


    {{--<div id="app">--}}
        {{--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">--}}
            {{--<div class="container">--}}
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--Rockbuzz Teste Full Stack Laravel--}}
                {{--</a>--}}
                {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
                    {{--<span class="navbar-toggler-icon"></span>--}}
                {{--</button>--}}

                {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav mr-auto">--}}

                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav ml-auto">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@guest--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                            {{--</li>--}}
                            {{--@if (Route::has('register'))--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                                {{--</li>--}}
                            {{--@endif--}}
                        {{--@else--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="/posts">Posts</a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item dropdown">--}}
                                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--{{ __('Logout') }}--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                        {{--@csrf--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--@endguest--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}

        {{--<main class="py-4 ">--}}

        {{--</main>--}}
    {{--</div>--}}


</body>
</html>
