<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});

*

/***********************************grupo de rotas*********************************************** */

//tela de login
route::get('login','geralController@index')->name('login');

//grupo para middleware função nao deixa acessar outras pelas sem esta autenticado 
Route::group(['middleware' => 'auth'], function () {

/***************************** rota das pagina view *************************************************** */

//tela principal 
route::get('/','geralController@home')->name('/home');

// tela de fornecedores
route::get('/fornecedores', 'geralController@controlerFornecedores')->name('/fornecedores');
//tela de cadastro fornecedores
route::get('/cadastrofornecedor', 'geralController@cadastrofornecedor')->name('/cadastrofornecedor');


//tela de estoque
route::get('/estoque', 'geralController@estoque')->name('/estoque');

//tela de funcionario
route::get('/funcionario', 'geralController@funcionario')->name('/funcionario');

//cadastro funcionario
route::get('/cadastrofuncionario', 'geralController@cadastrofuncionario')->name('/cadastrofuncionario');
// inserindo dados do funcionario no banco
route::post('/cadastro','funcionarioController@insertFuncionario')->name('/cadastro');



/********************************************************************************************************* */
// validando login
route::POST('/validarLogin','funcionarioController@validarLogin')->name('/validarLogin');

});
// sair login logaut
route::get('/logaut',function(){

    //Auth::logout();
});


