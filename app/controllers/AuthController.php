<?php

use Illuminate\Support\Facades\View;
class AuthController extends \BaseController {

	/**
	 * Display a login.
	 * GET /login
	 *
	 * @return Response
	 */
	public function login()
	{
		return View::make('login');
	}

}