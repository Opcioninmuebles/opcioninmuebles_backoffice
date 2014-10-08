<?php namespace OpcionInmuebles\Repositories;

use OpcionInmuebles\Entities\Customer;

class CustomerRepo extends BaseRepo {

    public function getModel()
    {
        return new Customer();
    }

    public function newCustomer()
    {
        $customer = new Customer();
        return $customer;
    }
    
    public function findLatest($take = 10)
    {
    	//esto es lo que se llama carga ambiciosa y permite obtener todos los datos de una
    	//return  Category::with('candidates', 'candidate.user')->get();
    	$customers = Customer::all();
    	
    	
    	return $customers;

    	 /*Category::with([
    			'candidates' => function($q) use ($take) {
    				$q->take($take);
    				$q->orderBy('created_at', 'DESC');
    			},
    			'candidates.user'
    					])->get();
    
    */
    }
} 