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

/* Route::get('/', function () {
    return 'Olá seja bem vindo ao curso!';
});

Route::get('/sobrenos', function () {
    return 'sobre nos!';
});

Route::get('/contato', function () {
    return 'contato';
});
*/ 

Route::get('/','PrincipalController@principal')->name('site.index');
Route::get('/contato','ContatoController@contato')->name('site.contato');
Route::get('/sobre-nos','SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/login', function() {return 'login'; })->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clientes','SobreNosController@sobreNos')->name('app.clientes');
    Route::get('/fornecedores','FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos','SobreNosController@sobreNos')->name('app.produtos');
});

Route::fallback(function(){
    echo "A rota acessada não existe";
});

/*
    Rotas com expressões regulares (validação)

    Route::get('/contato/{nome}/{categoria_id}', function(
     string $nome = "Desconhecido", 
     int $categoria_id = 1) {
     echo "Estamos aqui: $nome - $categoria_id";
      })->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');
*/