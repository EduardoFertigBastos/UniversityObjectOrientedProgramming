<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="imagem/png" href="_imagens/simbolos/logo.png" />
    <title> By Nani - Arte de Encantar </title>
    <link rel="stylesheet" href=" {{ asset('css/style/css/style.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/node_modules/bootstrap/compiler/bootstrap.css')}} ">
    <link rel="stylesheet" href=" {{ asset('css/node_modules/@fortawesome/fontawesome-free/css/fontawesome.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/node_modules/@fortawesome/fontawesome-free/css/brands.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/node_modules/@fortawesome/fontawesome-free/css/solid.css') }}">
    @yield('style')
</head>

<body>
    @if (Auth::check())
        @if (Auth::user()->lenivel == 1)
            @include('templates.menu.admin')
        @else
            @include('templates.menu.withUser')
        @endif            
    @else
        @include('templates.menu.withoutUser')
    @endif
    

    <section id="content">
        @yield('content')
    </section>
    

    @include('templates.index.footer')

    @yield('javaScript')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>