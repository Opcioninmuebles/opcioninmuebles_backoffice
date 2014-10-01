<?php namespace OpcionInmuebles\Components;

use Illuminate\Html\FormBuilder as Form;
//funciona en laravel 4.1
//use Illuminate\View\Environment as View;

use Illuminate\View\Factory as View;
use Illuminate\Session\Store as Session;
use Illuminate\Filesystem\Filesystem as File;

class FieldBuilder {
	protected $form;
	protected $view;
	protected $session;
	protected $file;
	
	protected $defaultClass = [
		'default' => 'form-control',
		'checkbox' => ''
	];
	
	public function __construct(Form $form, View $view, Session $session, File $file)
	{
		$this->form = $form;
		$this->view = $view;
		$this->session = $session;
		$this->file = $file;
	}
	
	public function getDefaultClass($type)
	{
		if(isset($this->defaultClass[$type]))
		{
			return $this->defaultClass[$type];
		}
		return $this->defaultClass['default'];
	}
	
	public  function buildCssClasses($type, &$attributes)
	{	
		//obtiene clases por defecto
		$defaultClasses = $this->getDefaultClass($type);
		if(isset($attributes['class']) )
		{
			$attributes['class'] .= ' ' . $defaultClasses;
		}
		else
		{
			$attributes['class'] = $defaultClasses;
		}
	}
	
	public function buildLabel($name)
	{
		//si esta dentro de validation.attributes lo traigo
		if(\Lang::has('validation.attributes.' . $name))
		{
			$label = \Lang::get('validation.attributes.' . $name);
		}
		else
		{
			$label = str_replace('_', ' ', $name);
		}
		return ucfirst($label);
	}
	
	public function buildControl($type, $name, $value = null, $attributes = array(), $options= array())
	{
		switch ($type)
		{
			case 'select':
				$options = array('' => 'Seleccione') + $options;
				return $this->form->select($name, $options, $value, $attributes);
			case 'password':
				return $this->form->password($name, $attributes);
			case 'checkbox':
				return $this->form->checkbox($name);
			case 'textarea':
				return $this->form->textarea($name, $value, $attributes);
			default:
				return $this->form->input($type, $name, $value, $attributes);
		
		}
	}
	
	public function buildError($name)
	{
		$error = null;
		//si la sesion de laravel tiene errores
		if($this->session->has('errors'))
		{
			$errors = $this->session->get('errors');
			//si el error tiene el mismo nombre del campo
			if($errors->has($name))
			{
				$error = $errors->first($name);
			}
		}
		return $error;
	}
	
	public function buildTemplate($type)
	{
		if($this->file->exists('app/views/fields/' . $type . '.blade.php'))
		{
			return 'fields/' . $type;
		}
		return  'fields/default';
	}
	
	public function password($name, $attributes = array())
	{
		return $this->input('password', $name, null, $attributes);
	}
	
	public function select($name, $options, $value = null, $attributes = array())
	{
		return $this->input('select', $name, $value, $attributes, $options);
	}
	
	//se llama cuando intento acceder a un metodo que no existe
	public function __call($method, $params)
	{
		//agrego a la primera posicion del array el nombre del metodo
		array_unshift($params, $method);
		return call_user_func_array([$this, 'input'], $params);
	}
	
	public function input($type, $name, $value = null, $attributes = array(), $options= array())
	{
		$this->buildCssClasses($type, $attributes);
		$label = $this->buildLabel($name);
		$control = $this->buildControl($type, $name, $value, $attributes, $options);
		$error = $this->buildError($name);
		$template = $this->buildTemplate($type);
		
		return $this->view->make($template, compact('name', 'label', 'control', 'error'));
	}
}