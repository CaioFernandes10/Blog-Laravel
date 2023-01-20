<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title> Super Gestao - @yield('titulo')</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    @include('paginas.layouts.parciais.topo')

@yield('principal')
@yield('contato')
@yield('sobre')

</body>

</html>
