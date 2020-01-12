<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
    <div class="logo"></div>
    <div class="contents">

    
        <form method="POST" action="/validarLogin">

            @csrf
            
                  <div class="form-group">
    
                     <label for="email" class="col-sm-4">Email:</label>
                    <div>
                        <span><img src='{{'img/email.png'}}'> </span> <input type="text" class="input-medio" name="email"  placeholder="Email">
                    </div>
    
                  </div>
    
    
                  <div class="form-group">
                    <label for="senha" class="col-sm-4">Password:</label>
                    <div>
                      <span><img src='{{'img/key.png'}}'> </span><input type="password" class="input-medio" name="password"  placeholder="Password">
                    </div>
                  </div>
                  
                  <div>
                      <button class="btn-primary">Enviar</button>
                  </div>
          </form>
    </div>
</head>
<body>
    
</body>
</html>