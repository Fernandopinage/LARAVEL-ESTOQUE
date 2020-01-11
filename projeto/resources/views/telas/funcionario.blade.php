@extends('layout.app')

@section('conteudo')
        <div class="container">
            <h1>Cadastro Funcionario</h1>
        </div>
        <br>

        <div class="container">
            <div class="row">
            <form action="{{"/cadastro"}}" method="POST">

                    @csrf
                    <div class="form-group">
                        <label>Nome:</label> <input type="text" name="name" class="input-medio">
                        <label>Email:</label> <input type="text" name="email" class="input-medio">
                    </div>
                    <div class="form-group">
                        <label>Senha:</label> <input type="password" name="password" class="input-pequeno">
                        <label>Sexo:</label> <input type="text" name="sexo" class="input-pequeno">
                        <label>Cep:</label> <input type="text" name="cep" class="input-pequeno">
                        
                        
                    </div>
                    <div class="form-group">
                        <label>Cidade:</label> <input type="text" name="cidade" class="input-pequeno">
                        <label>Rua:</label> <input type="text" name="rua" class="input-medio">
                        <label>Bairro:</label> <input type="text" name="bairro" class="input-pequeno">
                        
                    </div>
                    <div class="form-group">
                        <label>Telefone:</label> <input type="text" name="telefone" class="input-pequeno">
                        <label>Celular:</label> <input type="text" name="celular" class="input-pequeno">
                        
                    </div>
                    <br>
                    <button class="btn-primary">Enviar</button>
                </form>

            </div>
        </div>   
@endsection