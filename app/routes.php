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

Route::get("usuarios/cities/", function(){
	$results = DB::select('select name from cities');
	//$roles = cities::lists('name', 'id');
	dd($results);
	//return View::make("usuarios.cities", array("id" => $id,"name" => $name ));
});