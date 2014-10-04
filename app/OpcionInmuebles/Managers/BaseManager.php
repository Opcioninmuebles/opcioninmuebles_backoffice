<?php

namespace OpcionInmuebles\Managers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;

abstract class BaseManager {
	protected $entity;
	protected $data;

	public function __construct($entity, $data)
	{
		$this->entity = $entity;
		$this->data = array_only($data, array_keys($this->getRules()));		
	}
	
	abstract public function getRules();
	
	public function isValid()
	{
		$rules = $this->getRules();
		$validation  = \Validator::make($this->data, $rules);
		if($validation->fails())
		{
			throw new ValidationException('Validation failed', $validation->messages());
		}
	}
	
	public function prepareData($data)
	{
		return $data;
	}
	
	public function save()
	{
		$this->isValid();
		$this->entity->fill($this->prepareData($this->data));
		$this->entity->save();
		return true;
	}
	
    public function sendEmail()
    {
    	$user = [
    				'firstname'=>$this->entity->full_name, 
    				'email' => $this->entity->email, 
    				'pass' => Input::get('password')
				];
    	Mail::send('emails.auth.welcome', $user, function($message) {
    		$message->subject(\Lang::get('emails.welcome'));
    		$message->to($this->entity->email, \Lang::get('emails.welcome'));
    	});
    	
    }
}