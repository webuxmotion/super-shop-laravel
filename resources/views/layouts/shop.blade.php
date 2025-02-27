<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Super Shop Laravel</title>

        <link rel="icon" href="/favicon.ico" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.scss', 'resources/js/app.js'])
        @else
            
        @endif
    </head>
    <body>
        @include('partials.top-header')
        @include('partials.header')

        {{$slot}}
    </body>
</html>
