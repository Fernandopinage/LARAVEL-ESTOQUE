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
route::get('/fornecedor', 'geralController@fornecedor')->name('/fornecedor');
//estoque
route::get('/estoque', 'geralController@estoque')->name('/estoque');
//funcionario
route::get('/funcionario', 'geralController@funcionario')->name('/funcionario');

