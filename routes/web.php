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


Route::get('/', function () {
    return view('posts');
});
*/
// Chamando o Controller
Route::get('/', 'PostController@posts');
Route::get('/sobre', 'PaginaBasicaController@sobre');
Route::get('/contato', 'PaginaBasicaController@contato');
// rotas para parte de posts

Route::get('/posts/form-adicionar', 'PostController@formAdicionar');
Route::post('/posts/adicionar', 'PostController@adicionar');
Route::get('/posts/excluir/{id}', 'PostController@excluir');
Route::get('/posts/editar/{id}', 'PostController@form_editar');
Route::post('/posts/editar', 'PostController@editar');
