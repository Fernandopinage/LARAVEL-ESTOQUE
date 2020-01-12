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
    
    <div class="logo">
        
        <div class="perfil">
            
            @if (Auth::guest())
            
            @else
             <span><img src='{{'img/perfil.png'}}'>{{Auth::user()->name}}</span> 
             <span><a href="{{'/logaut'}}">Sair<img src='{{'img/x2.png'}}'> </a></span> 
            
            @endif
           
        </div>
    </div>


    <div class="menu">

        @include('layout.menu')

    </div>

    <div>

        @yield('conteudo')

    </div>

</body>
</html>