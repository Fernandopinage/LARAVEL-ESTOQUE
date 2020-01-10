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

*/

/***************************** rota das pagina view *************************************************** */

//index
route::get('index','geralController@index');
//painel
route::get('/','geralController@home')->name('/home');
//fornecedores
route::get('/fornecedores', 'geralController@controlerFornecedores')->name('/fornecedores');
//cadastro fornecedores
route::get('/cadastrofornecedor', 'geralController@cadastrofornecedor')->name('/cadastrofornecedor');
//estoque
route::get('/estoque', 'geralController@estoque')->name('/estoque');
//cadastro funcionario
route::get('/cadastrofuncionario', 'geralController@cadastrofuncionario')->name('/cadastrofuncionario');
//funcionario
route::get('/funcionario', 'geralController@funcionario')->name('/funcionario');


/***************************** rota do funcionario *************************************************** */
// validando login
route::POST('/validarLogin','funcionarioController@validarLogin')->name('/validarLogin');
// inserindo dados no banco
route::post('/cadastro','funcionarioController@validarFuncionario')->name('/cadastro');