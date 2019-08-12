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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-theme-white
{{-- bg-black --}}
{{-- opacity-90 --}}
{{-- h-screen --}}
">
    <div id="app">


        <nav class="sticky top-0 flex items-center flex-wrap bg-black h-2/12 p-3  text-white
            {{-- justify-around sm:justify-between --}}
            justify-center sm:justify-between
        ">
            <div class="flex-no-shrink mr-6">
                <a class="navbar-brand pr-3" href="{{ url('/') }}">
                    <h1 class="inline text-xl">Provayer</h1>
                </a>
            </div>
            <hamburger-component></hamburger-component>
        </nav>

        {{-- <navbar-component></navbar-component> --}}


            {{-- <main class="container mx-auto py-4"> --}}
            <main class="
            {{--
                flex justify-center
            flex-wrap
            --}}
            {{-- opacity-90 --}}
            " >
                @yield('content')
            </main>
    </div>
</body>
</html>
