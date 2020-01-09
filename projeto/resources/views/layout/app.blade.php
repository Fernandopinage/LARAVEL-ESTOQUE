<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->
    
    <title>Document</title>
</head>
<body>
    
    <div class="logo"></div>
    <div class="menu">

        @include('layout.menu')

    </div>

    <div>

        @yield('conteudo')

    </div>

</body>
</html>