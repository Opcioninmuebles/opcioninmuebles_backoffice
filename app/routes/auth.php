<?php



//Route::get('profile', ['as' => 'profile', 'uses' => 'UsersController@profile']);
Route::get('admin/users/profile', ['as' => 'profile', 'uses' => 'UsersController@profile']);
Route::put('admin/users/profile', ['as' => 'update_profile', 'uses' => 'UsersController@updateProfile']);

Route::get('admin',  ['as' => 'admin', 'uses' => 'AdminController@index']);

Route::get('lockscreen', ['as' => 'lockscreen', 'uses' => 'AuthController@lockscreen']);
Route::post('unlockscreen', ['as' => 'unlockscreen', 'uses' => 'AuthController@unlockscreen']);

Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
