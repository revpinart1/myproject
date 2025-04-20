<!doctype html >
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

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+SA:wght@100..400&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        *{
            font-family: "Playwrite AU SA", cursive;
           
        }
        body{
            background-color:Gainsboro;
        }
        a{
            color: white;
            text-decoration: none;
            
        }
    </style>
</head >
<body dir="rtl">
<header >
    <nav class="navbar" style="background-color:CadetBlue;">
        <div class="container mt-2">
            <ul class="list-inline">
                <li class="list-inline-item p-1"><a href="/">home page</a></li>
                <li class="list-inline-item p-1"><a href="{{route('aboutus')}}">about</a></li>
                <li class="list-inline-item p-1"><a href="{{route('products')}}">products</a></li>
                <li class="list-inline-item p-1"><a href="{{route('callus')}}">contact</a></li>
            </ul>
        </div>
    </nav>
</header>

<main >
 @yield('content')    
</main>


<footer>

</footer>

  

</body>
</html>
