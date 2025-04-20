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
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        a{
            color:white;
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar" style="background-color:pink;">
        <div class="container">
            <ul class="list-inline">
                <li class="list-inline-item p-1"><a href="/">home page</a></li>
                <li class="list-inline-item p-1"><a href="{{route('aboutus')}}">about</a></li>
                <li class="list-inline-item p-1"><a href="{{route('products')}}">products</a></li>
                <li class="list-inline-item p-1"><a href="{{route('callus')}}">contact</a></li>
            </ul>
        </div>
    </nav>
</header>

<main>
 @yield('content')    
</main>


<footer>
copyright
</footer>

  

</body>
</html>
