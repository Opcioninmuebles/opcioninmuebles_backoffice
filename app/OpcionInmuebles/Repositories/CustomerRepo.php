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
} 