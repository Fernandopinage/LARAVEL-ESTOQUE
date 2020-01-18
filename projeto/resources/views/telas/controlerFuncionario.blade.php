@extends('layout.app')

@section('conteudo')

    <div class="container">

        <h1><img src='{{'img/grupo2.png'}}'> Funcionario</h1>
        <div class="text-right">
            <a class="btn-success btn-lg" href="{{"/cadastrofuncionario"}}"><img src='{{'img/addP.png'}}'> FUNCIONARIO</a>
        </div>
    </div>
    <br>
    <div class="container">
        <div style="overflow: auto; width: 900px; height: 400px;"> 
          <table class="table table-hover table-dark">
              <thead>
                <tr>
                  <th scope="col">Codigo</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Email</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">Celular</th>
                  <th scope="col">Bairro</th>
                  <th scope="col">Rua</th>
                  <th scope="col">Editar</th>
                  <th scope="col">Excluir</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($usuario as $usuario)
                  
                <th>{{$usuario->id}}</th>
                <th>{{$usuario->nome}}</th>
                <th>{{$usuario->email}}</th>
                <th>{{$usuario->telefone}}</th>
                <th>{{$usuario->celular}}</th>
                <th>{{$usuario->bairro}}</th>
                <th>{{$usuario->rua}}</th>
                <th><button class="btn-primary">editar</button></th>
                <th><button class="btn-danger">excluir</button></th>
              @endforeach
              </tbody>
            </table>
            <br><br>
      
      </div>
    </div>
@endsection