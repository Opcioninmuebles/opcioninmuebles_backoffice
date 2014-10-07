<?php

use Illuminate\Support\Facades\Input;
use OpcionInmuebles\Managers\CustomerManager;
use OpcionInmuebles\Repositories\CustomerRepo;

class CustomersController extends \BaseController {

	protected $customerRepo;
	
	public function __construct(CustomerRepo $customerRepo)
	{
		$this->customerRepo = $customerRepo;
	}
	
	/**
	 * Display a listing of the resource.
	 * GET /customers
	 *
	 * @return Response
	 */
	
	public function register()
	{		
		$customer = $this->customerRepo->newCustomer();
		return \View::make('admin/customers/register', compact('customer'));
	}
	 
	public function updateRegister()
	{
		$customer = $this->customerRepo->newCustomer();
		$manager = new CustomerManager($customer, Input::all());		
		if($manager->save())
		{
			Session::flash('message', \Lang::get('validation.messages.account_created'));
			Session::flash('class', 'success');
		}
		else {
			Session::flash('message', \Lang::get('validation.messages.account_fails'));
			Session::flash('class', 'danger');
		}
		
		return Redirect::route('register');
		//si huvo errores redirige al formulario con los campos que ya
		//lleno y muestra los errores que no paso la validacion.
		//return  Redirect::back()->withInput()->withErrors($manager->getErrors());
	}
}