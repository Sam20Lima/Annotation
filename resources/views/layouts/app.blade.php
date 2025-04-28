<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- style css --> 
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/task.css') }}" rel="stylesheet">

    </head>
    <body>
        @include('components.header')

        @yield('content', 'nenhum conteúdo renderizado!')

        @stack('scripts')
        <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    </body>
</html>
