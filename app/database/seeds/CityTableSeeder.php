<?php

use OpcionInmuebles\Entities\City;

class CityTableSeeder extends Seeder {

	public function run()
	{
		City::create([
			'name' => 'Barranquilla'
		]);

		City::create([
			'name' => 'Bogotá'
		]);
		
		City::create([
			'name' => 'Medellín'
		]);	
	}
}