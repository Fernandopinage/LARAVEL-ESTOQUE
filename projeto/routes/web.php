<?php


/************************************************************************************************ */
/*                         Sistema desenvolvido para estudo                                       */
/*                               creiado 14/01/2020                                               */
/*          proibida a venda ou copia desse sistema sem autorização do desenvolvedor              */
/*                      entre encontado com Luizfernandoluck@hotmail.com                          */
/*                                                                                                */
/************************************************************************************************ */

/***********************************grupo de rotas*********************************************** */

//tela de login
route::get('/','geralController@index')->name('/');

//grupo para middleware função nao deixa acessar outras pelas sem esta autenticado 

/***************************** rota das pagina view *************************************************** */
Route::group(['middleware' => 'auth'], function () {
    
    
    //tela principal 
    route::get('/painel','geralController@home')->name('/painel');
    
    // tela de fornecedores
    route::get('/fornecedores', 'geralController@controlerFornecedores')->name('/fornecedores');
    //tela de cadastro fornecedores
    route::get('/cadastrofornecedor', 'geralController@cadastrofornecedor')->name('/cadastrofornecedor');
    //cadastrando fornecedores
    route::post('/fornecedorcadastro','fornecedorController@cadastroFornecedor')->name('/fornecedorcadastro');

    
    //tela de estoque
    route::get('/estoque', 'geralController@estoque')->name('/estoque');
    //novo estoque
    route::get('/cadastroestoque', 'geralController@cadastroestoque')->name('/cadastroestoque');


    //tela de funcionario
    route::get('/funcionario', 'geralController@funcionario')->name('/funcionario');
    //novo funcionario 
    route::get('/cadastrofuncionario', 'geralController@cadastrofuncionario')->name('/cadastrofuncionario');
    
    
    //cadastro funcionario
    route::get('/cadastrofuncionario', 'geralController@cadastrofuncionario')->name('/cadastrofuncionario');
    // inserindo dados do funcionario no banco
    route::post('/cadastro','funcionarioController@insertFuncionario')->name('/cadastro');
    
    
});   
    /********************************************************************************************************* */
    // validando login
    route::POST('/validarLogin','funcionarioController@validarLogin')->name('/validarLogin');
    

// sair login logaut
route::get('/logaut','funcionarioController@logaut');


