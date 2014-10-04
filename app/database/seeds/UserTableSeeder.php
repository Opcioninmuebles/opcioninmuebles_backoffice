<?php

use OpcionInmuebles\Entities\User;

class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'full_name' => 'Abdeel Maussa',
			'email'     => 'jcvaldes.ingenieria@gmail.com',
			'password'  => '123456',
			'type'      => 'GeneralManager'
		]);
	}

}