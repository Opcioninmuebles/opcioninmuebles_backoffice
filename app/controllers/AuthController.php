<?php

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthManager;
class AuthController extends \BaseController {

	/**
	 * Display a login.
	 * GET /index
	 *
	 * @return View
	 */
	public function index()
	{
		return \View::make('login');
	}

	
	/**
	 * User Authentication.
	 * POST /login
	 *
	 * @return View
	 */
	public function login()
	{
		return $this->checkCredentials(false);
	}
	
	public function logout()
	{
		Auth::logout();
		return Redirect::route('login');
	}
	
	public function lockscreen()
	{
		return \View::make('lockscreen');
	}
	
	public function unlockscreen()
	{
		return $this->checkCredentials(true);
	}
	
	private function checkCredentials($lock)
	{				
		$data = Input::only('useremail','password');
		$credentials = [
		'email' => $data['useremail'],
		'password'=> $data['password']
		];
	
		//si las credenciales son validas
		if(Auth::attempt($credentials))
		{
			return Redirect::route('admin');
		}
		
		if(!$lock)
		{
			return Redirect::to('/login')->with('login_error',1);
		}
		else 
		{
			return Redirect::to('/lockscreen')->with('login_error',1);
		}	
	}
}