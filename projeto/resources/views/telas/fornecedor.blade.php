@extends('layout.app')

@section('conteudo')
    <div class="container">
        <h1>Cadastro Fornecedor</h1>
    </div>
    
    <br>
    <div class="container">

        <div class="row">
            
            <form method="POST" action="{{'/fornecedorcadastro'}}">
                @csrf        
                    <div class="form-group">
                        <label>Nome Marca:</label> <input type="text" name="marca" class="input-pequeno" placeholder="Marca do Produto">
                        <label>CNPJ:</label> <input type="text" name="cnpj" class="input-medio" placeholder=" XX. XXX. XXX/XXXX-XX">
                        <label>Cep:</label> <input type="text" name="cep" class="input-pequeno" placeholder="XXXXX-XXX">
                    </div>
                    <div class="form-group">
                        
                        <label>Rua:</label> <input type="text" name="rua" class="input-medio">
                        <label>Cidade:</label> <input type="text" name="cidade" class="input-pequeno">
                        <label>Bairro:</label> <input type="text" name="bairro" class="input-pequeno">
                    </div>
                    <div class="form-group">
                        
                        <label>Telefone:</label> <input type="text" name="telefone" class="input-pequeno" placeholder="(00)0 0000-0000">
                        <label>Celular:</label> <input type="text" name="celular" class="input-pequeno" placeholder="(00)0 0000-0000">
                        
                    </div>
                    <br>
                    <button class="btn-primary">Enviar</button>
            </form>
        </div>
        
    </div>
@endsection