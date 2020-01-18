@extends('layout.app')

@section('conteudo')

<div class="container">

    <h1><img src='{{'img/fornecedor2.png'}}'> Fornecedor</h1>
    <div class="text-right">
      <a class="btn-success btn-lg" href="{{"/cadastrofornecedor"}}"><img src='{{'img/fornecedor.png'}}'> FORNECEDOR</a>
    </div>
    
</div>
<br>
<div class="container">
  <div style="overflow: auto; width: 900px; height: 400px;"> 
    <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">codigo</th>
            <th scope="col">cnpj</th>
            <th scope="col">nome</th>
            <th scope="col">cep</th>
            <th scope="col">cidade</th>
            <th scope="col">rua</th>
            <th scope="col">bairro</th>
            <th scope="col">telefone</th>
            <th scope="col">celular</th>
            <th scope="col">editar</th>
            <th scope="col">excluir</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($fornecedor as $fornecedor)
          <tr>

                
            <th>{{$fornecedor->id}}</th>
            <th>{{$fornecedor->cnpj}}</th>
            <th>{{$fornecedor->marca}}</th>
            <th>{{$fornecedor->cep}}</th>
            <th>{{$fornecedor->cidade}}</th>
            <th>{{$fornecedor->rua}}</th>
            <th>{{$fornecedor->bairro}}</th>
            <th>{{$fornecedor->telefone}}</th>
            <th>{{$fornecedor->celular}}</th>
            <th><button class="btn-primary"><a href="/editar/{{ $fornecedor->id }}" > editar </a></button></th>
            <th><button class="btn-danger"><a href="/excluir/{{ $fornecedor->id }}" > excluir </a></button></th>

            @endforeach
          </tbody>
        </table>
      <br><br>

  </div> 
</div>
    
@endsection