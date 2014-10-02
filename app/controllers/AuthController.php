<?php

use Illuminate\Support\Facades\View;
class AuthController extends \BaseController {

	/**
	 * Display a login.
	 * GET /index
	 *
	 * @return View
	 */
	public function index()
	{
		return View::make('login');
	}

	
	/**
	 * User Authentication.
	 * POST /login
	 *
	 * @return View
	 */
	public function login()
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
			//return Redirect::back();
		}
		return Redirect::to('/login')->with('login_error',1);
		
	}
}