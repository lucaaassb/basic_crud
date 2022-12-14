<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/novo', 'ProdutosController@create');
Route::post('/produtos/novo', 'ProdutosController@store')->name('registrar_produto');
Route::get('/produto/ver/{id}', 'ProdutosController@show');
Route::get('/produto/editar/{id}', 'ProdutosController@edit');
Route::post('/produto/editar/{id}', 'ProdutosController@update')->name('atualizar_produto');
Route::get('/produto/deletar/{id}', 'ProdutosController@delete');
Route::post('/produto/deletar/{id}', 'ProdutosController@destroy')->name('deletar_produto');
