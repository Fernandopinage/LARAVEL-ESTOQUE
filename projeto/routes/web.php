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


//index
route::get('/','geralController@index')->name('/home');
//fornecedores
route::get('/fornecedores', 'geralController@controlerFornecedores')->name('/fornecedores');
//cadastro fornecedores
route::get('/cadastrofornecedor', 'geralController@cadastrofornecedor')->name('/cadastrofornecedor');
//estoque
route::get('/estoque', 'geralController@estoque')->name('/estoque');
//cadastro funcionario
route::get('/funcionario', 'geralController@cadastrofuncionario')->name('/funcionario');
//funcionario
//route::get('/funcionario', 'geralController@funcionario')->name('/funcionario');

