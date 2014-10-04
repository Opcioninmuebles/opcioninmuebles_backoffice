<?php namespace OpcionInmuebles\Managers;

class AccountManager extends BaseManager {
	public function getRules() {
		$rules = [
		'full_name' => 'required',
		//users es el nombre de la tabla en donde
		//queremos revisar y email es el campo
		//que no debe repetirse
		'email' 	=> 'required|email|unique:users,email,' . $this->entity->id,
		'password' 	=> 'confirmed|min:6|max:18',
		'password_confirmation' => ''
				];
		return $rules;
	}
	
	public function prepareData($data)
	{
		//Elimino cualquier html filtrado
		$data['full_name'] = strip_tags($data['full_name']);
		 
		return $data;
	}
}