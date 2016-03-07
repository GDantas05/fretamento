<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('index', ['as' => 'index', 'uses' => 'IndexController@index']);
    Route::get('veiculos', ['as' => 'veiculos', 'uses' => 'VeiculosController@index']);
    Route::get('tipo_veiculos', ['as' => 'tipo_veiculos', 'uses' => 'TipoVeiculoController@listagem']);
    Route::get('tipo_veiculos/novo', ['as' => 'tipo_veiculos.novo', 'uses' => 'TipoVeiculoController@novo']);
    Route::get('tipo_veiculos/edita/{id}', ['as' => 'tipo_veiculos.edita', 'uses' => 'TipoVeiculoController@edita']);
    Route::get('tipo_veiculos/remove/{id}', ['as' => 'tipo_veiculos.edita', 'uses' => 'TipoVeiculoController@remove']);
});
/*Route::get('/', function() {
    return view('auth/login');
});*/
/*Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
});*/
Route::group(['middleware' => 'web'], function(){
    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController'
    ]);
});
