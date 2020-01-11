@extends('layout.app')

@section('conteudo')
    <div class="container">
        <h1>Cadastro Fornecedor</h1>
    </div>
    
    <br>
    <div class="container">

        <div class="row">
            
            <form>        
                    <div class="form-group">
                        <label>Nome:</label> <input type="text" name="" class="input-medio">
                        <label>CNPJ:</label> <input type="text" name="" class="input-pequeno">
                        <label>Cep:</label> <input type="text" name="" class="input-pequeno">
                    </div>
                    <div class="form-group">
                        
                        <label>Rua:</label> <input type="text" name="" class="input-medio">
                        <label>Cidade:</label> <input type="text" name="" class="input-pequeno">
                        <label>Bairro:</label> <input type="text" name="" class="input-pequeno">
                    </div>
                    <div class="form-group">
                        
                        <label>Telefone:</label> <input type="text" name="" class="input-pequeno">
                        <label>Celular:</label> <input type="text" name="" class="input-pequeno">
                        
                    </div>
                    <br>
                    <button class="btn-primary">Enviar</button>
            </form>
        </div>
        
    </div>
@endsection