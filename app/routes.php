<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/login', [ 'as' => 'login', 'uses' => 'AuthController@index' ] );

Route::post('login', ['as' => 'login', 'uses' => 'AuthController@login']);

Route::get('admin/users/account', ['as' => 'account', 'uses' => 'UsersController@account']);
//Actualizar usuario
Route::put('admin/users/account', ['as' => 'update_account', 'uses' => 'UsersController@updateAccount']);

//Formularios
//si el usuario no esta conectado impido el acceso a las rutas
Route::group(['before' => 'auth'], function()
{
	require (__DIR__ . '/routes/auth.php');

	//Admin Routes
	Route::group(['before' => 'is_admin'], function()
	{
		require (__DIR__ . '/routes/admin.php');
	});

});