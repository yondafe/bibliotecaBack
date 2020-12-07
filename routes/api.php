<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::GET('/clientes', 'App\Http\Controllers\ClienteController@index');

Route::GET('/clientes/{id}', 'App\Http\Controllers\ClienteController@show');

Route::POST('/clientes', 'App\Http\Controllers\ClienteController@create');

Route::DELETE('/clientes/{id}', 'App\Http\Controllers\ClienteController@destroy');

Route::PUT('/clientes/{id}', 'App\Http\Controllers\ClienteController@update');


Route::GET('/livros', 'App\Http\Controllers\LivroController@index');

Route::GET('/livros/{id}', 'App\Http\Controllers\LivroController@show');

Route::POST('/livros', 'App\Http\Controllers\LivroController@create');

Route::DELETE('/livros/{id}', 'App\Http\Controllers\LivroController@destroy');

Route::PUT('/livros/{id}', 'App\Http\Controllers\LivroController@update');


Route::GET('/revistas', 'App\Http\Controllers\RevistaController@index');

Route::GET('/revistas/{id}', 'App\Http\Controllers\RevistaController@show');

Route::POST('/revistas', 'App\Http\Controllers\RevistaController@create');

Route::DELETE('/revistas/{id}', 'App\Http\Controllers\RevistaController@destroy');

Route::PUT('/revistas/{id}', 'App\Http\Controllers\RevistaController@update');



Route::GET('/notebooks', 'App\Http\Controllers\NotebookController@index');

Route::GET('/notebooks/{id}', 'App\Http\Controllers\NotebookController@show');

Route::POST('/notebooks', 'App\Http\Controllers\NotebookController@create');

Route::DELETE('/notebooks/{id}', 'App\Http\Controllers\NotebookController@destroy');

Route::PUT('/notebooks/{id}', 'App\Http\Controllers\NotebookController@update');


Route::GET('/jornais', 'App\Http\Controllers\JornalController@index');

Route::GET('/jornais/{id}', 'App\Http\Controllers\JornalController@show');

Route::POST('/jornais', 'App\Http\Controllers\JornalController@create');

Route::DELETE('/jornais/{id}', 'App\Http\Controllers\JornalController@destroy');

Route::PUT('/jornais/{id}', 'App\Http\Controllers\JornalController@update');


Route::GET('/musicas', 'App\Http\Controllers\MusicaController@index');

Route::GET('/musicas/{id}', 'App\Http\Controllers\MusicaController@show');

Route::POST('/musicas', 'App\Http\Controllers\MusicaController@create');

Route::DELETE('/musicas/{id}', 'App\Http\Controllers\MusicaController@destroy');

Route::PUT('/musicas/{id}', 'App\Http\Controllers\MusicaController@update');