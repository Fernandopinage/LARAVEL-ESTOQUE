@extends('layout.app')

@section('conteudo')
    
    <div class="container">
        <h1><img src='{{'img/estoque2.png'}}'>Estoque</h1>
    </div>
    <div class="container" >

        <div class="form-group">
            <label>Codigo:</label> <input type="text" name="cep" class="input-grande"><button class="btn-success">pesquisar</button>

        </div>
        <br>
        <div style="overflow: auto; width: 640px;"> 
                <table class="table table-hover table-dark">
                    <thead>
                    <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Nome/Marca</th>
                        <th scope="col">editar</th>
                        <th scope="col">excluir</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th></th>
                        <th></th>
                        <th><button class="btn-primary">editar</button></th>
                        <th><button class="btn-danger">excluir</button></th>
                        
                    </tbody>
                </table>
                <br><br>
            
        </div>
    </div>
    <div class="container">

        <div class="row">
            
            <form method="POST" action="{{'/fornecedorcadastro'}}">
                    @csrf
                    <div class="form-group">
                        <label>Codigo:</label> <input type="text" name="cep" class="input-pequeno">
                        <label>Funcionario:</label> <input type="text" name="cep" value="{{Auth::user()->name}}" class="input-medio" id="disabled" disabled>
                    </div>        
                    <div class="form-group">
                        <label>Nome Produto:</label> <input type="text" name="nome" class="input-medio">
                        <label>Nome Marca:</label> <input type="text" name="marca" class="input-pequeno">
                    </div>
                    <div class="form-group">
                        
                        <label>Nº Lote:</label> <input type="text" name="bairro" class="input-pequeno">
                        <label>Data Fabricação:</label> <input type="date" name="rua" class="input-pequeno">
                        <label>Data Validade:</label> <input type="date" name="cidade" class="input-pequeno">
                    </div>
                    <div class="form-group">
                        
                        <label>Quantidad:</label> <input type="text" name="telefone" class="input-pequeno" placeholder="Unidade">
                        <label>Valor:</label> <input type="text" name="celular" class="input-pequeno" placeholder="000,00">
                        
                    </div>
                    <br>
                    <button class="btn-primary">Enviar</button>
            </form>
        </div>
        
    </div>
@endsection