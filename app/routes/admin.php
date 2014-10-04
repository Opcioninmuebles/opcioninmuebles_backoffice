<?php
//duilio-palacios/1
Route::get('{slug}/{id}', ['as' => 'customer', 'uses' => 'CustomersController@show']);

Route::get('admin/customer/{id}', ['as' => 'admin_customer_edit', function($id){
	return 'Editando el customer' .$id;
}]);

