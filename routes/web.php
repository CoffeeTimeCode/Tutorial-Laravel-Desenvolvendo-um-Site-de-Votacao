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

Route::get('/', function () {
    return view('welcome');
});

//Routes - Todos os Usuários
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Routes - Todos os Usuários Logados
Route::middleware(['auth'])->prefix('painel')->group(function(){
  Route::get('/', function () {
      return view('admin.painel');
  });

  Route::get('adicionar-tema','Admin\TemaController@create');
  Route::post('adicionar-tema','Admin\TemaController@store');

  //Routes - Todos os Usuários de level:0
  Route::middleware(['level:0'])->group(function () {
  });
  //Routes - Todos os Usuários de level:1
  Route::middleware(['level:1'])->group(function () {
  });
});
