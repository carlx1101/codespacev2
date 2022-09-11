<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{asset('dist/assets/css/theme.min.css')}}">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @yield('header')
</head>
<body>  
    {{-- Application  --}}
    <div id="app">
        {{-- Nab --}}
        {{-- @include('layouts.includes.navigation') --}}


        
        {{-- Main content  --}}
        @yield('content')

        {{-- Footer --}}
        
        {{-- Secondary Content --}}
        @yield('secondary-contnet')

    </div>

    @yield('footer')

    <!-- JS Global Compulsory -->
    <script src="{{asset('dist/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

    @yield('js')


</body>
</html>
