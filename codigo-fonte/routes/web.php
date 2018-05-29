<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

/* ------------------- ROTAS AUTOMATIZADAS ------------------- */

/**
 * Controla as rotas automaticamente
 * @example Route::resource('{controller name}/{action}/{key}', '{controller name}Controller@{action}');
 * Seta variaveis no session para o ACTION, CONTROLLER e KEY
 */
Route::group(['middleware' => 'auth'], function () {
    RouteBuilder::buildSmartUrl();
});

/* ------------------- ROTAS ALTERNATIVAS -------------------- */
Route::any('/login', 'LoginController@loginUser');
Route::any('/users/recuperarSenha', 'UsersController@recuperarSenha');
Route::get('/manual', function () {
    return view('manual.index');
});

Route::any('/solicitar', 'WebPageController@solicitarProposta');
Route::any('/enviar', 'WebPageController@enviarProposta');
Route::any('/index', 'WebPageController@index');
Route::any('/', 'WebPageController@index');
Route::any('/show/{id}', 'WebPageController@show');
Route::any('/buscar', 'WebPageController@buscarMotos');
Route::any('/quemSomos', 'WebPageController@quemSomos');

Route::any('webPage/buscarModeloEAno/{marca}', 'WebPageController@buscarModeloEAno');
