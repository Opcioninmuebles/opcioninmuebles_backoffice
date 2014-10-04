<?php namespace OpcionInmuebles\Components;

use Illuminate\Support\ServiceProvider;
use OpcionInmuebles\Components\FieldBuilder;

class FieldServiceProvider extends ServiceProvider {
	
	public function register() {
  		$this->app['field'] = $this->app->share(function($app)
        {    	
            $fieldBuilder = new FieldBuilder($app['form'], $app['view'], $app['session.store'], $app['files']);        
        	return $fieldBuilder;
        });
	}	
}