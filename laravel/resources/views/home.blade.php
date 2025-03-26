<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- style css -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <header>
            <div class="head_left">
                <img src="{{ asset('images/logo.png') }}" alt="logo" title="logo">
            </div>
            <div class="head_right">
                <button>Criar Conta</button>
                <button>Login</button>
            </div>
        </header>
    </body>
</html>
