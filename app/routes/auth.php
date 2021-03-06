<?php



//Route::get('profile', ['as' => 'profile', 'uses' => 'UsersController@profile']);
Route::get('admin/users/profile', ['as' => 'profile', 'uses' => 'UsersController@profile']);
Route::put('admin/users/profile', ['as' => 'update_profile', 'uses' => 'UsersController@updateProfile']);

Route::get('admin/users/account', ['as' => 'account', 'uses' => 'UsersController@account']);
//Actualizar usuario
Route::put('admin/users/account', ['as' => 'update_account', 'uses' => 'UsersController@updateAccount']);

Route::get('admin',  ['as' => 'admin', 'uses' => 'AdminController@index']);

Route::get('lockscreen', ['as' => 'lockscreen', 'uses' => 'AuthController@lockscreen']);
Route::post('unlockscreen', ['as' => 'unlockscreen', 'uses' => 'AuthController@unlockscreen']);

Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);

Route::get('admin/customers/register', ['as' => 'register', 'uses' => 'CustomersController@register']);
Route::post('admin/customers/register', ['as' => 'update_register', 'uses' => 'CustomersController@updateRegister']);

Route::get('admin/customers/listcustomers', ['as' => 'list_customers', 'uses' => 'CustomersController@index']);
 