<?php
use Illuminate\Support\Facades\Input;
use OpcionInmuebles\Entities\User;
use Illuminate\Support\Facades\Redirect;
//use OpcionInmuebles\Managers\RegisterManager;
//use OpcionInmuebles\Repositories\CustomerRepo;
//use OpcionInmuebles\Repositories\CategoryRepo;
use OpcionInmuebles\Components\FieldBuilder;
use OpcionInmuebles\Managers\AccountManager;
//use OpcionInmuebles\Managers\ProfileManager;
use Illuminate\Support\Facades\Auth;


class UsersController extends BaseController {
  	protected $customerRepo;
  	protected $categoryRepo;  		
    
  	public function registrer()
  	{
  		$user = Auth::user();
  		//return View::make('users/account')->with('user','user');
  		return \View::make('admin/users/registrer', compact('user'));
  	}
  	
  	public function updateRegistrer()
  	{
  		$user = Auth::user();
  		$manager = new AccountManager($user, Input::all());
  		//$data = Input::only({'full_name', 'email', 'password', 'password_confirmation'});
  		if($manager->save())
  		{
  			Session::flash('message', \Lang::get('validation.messages.account_created'));
  			Session::flash('class', 'success');
  		}
  		else {
  			Session::flash('message', \Lang::get('validation.messages.account_fails'));
  			Session::flash('class', 'danger');
  		}
  	
  		return Redirect::route('registrer');
  	
  		//si huvo errores redirige al formulario con los campos que ya
  		//lleno y muestra los errores que no paso la validacion.
  		//return  Redirect::back()->withInput()->withErrors($manager->getErrors());
  	}
    public function account()
    {
    	$user = Auth::user();
    	//return View::make('users/account')->with('user','user');
    	return \View::make('admin/users/account', compact('user'));
    }
    
    public function updateAccount()
    {
    	$user = Auth::user();
    	$manager = new AccountManager($user, Input::all());
    	//$data = Input::only({'full_name', 'email', 'password', 'password_confirmation'});
    	if($manager->save())
    	{    		
    		Session::flash('message', \Lang::get('validation.messages.account_created'));
    		Session::flash('class', 'success');
    	}
    	else {
    		Session::flash('message', \Lang::get('validation.messages.account_fails'));
    		Session::flash('class', 'danger');
    	}
    	
    	return Redirect::route('account');
    	 
    	//si huvo errores redirige al formulario con los campos que ya
    	//lleno y muestra los errores que no paso la validacion.
    	//return  Redirect::back()->withInput()->withErrors($manager->getErrors());
    }
    
}
