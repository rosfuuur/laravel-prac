<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Laracasts')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css" integrity="sha256-vK3UTo/8wHbaUn+dTQD0X6dzidqc5l7gczvH+Bnowwk=" crossorigin="anonymous" />

        <style>
            .is-complete { text-decoration: line-through; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="links">
                <a href="/">Home</a>
                <a href="/contact">Contact</a>
                <a href="/about">About Us</a>
                <a href="/projects">Projects</a>
            </div>
            @yield('content')
        </div>
    </body>
</html>
