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
		dd('llego');
	}
}