<?php namespace OpcionInmuebles\Managers;

class CustomerManager extends BaseManager {
  public function getRules()
    {
        $rules = [
            'numcli' => 'required', //|exists:categories,id',
            'name' => 'required',
            'lastname' => 'required',
            'country' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/'
		];
        return $rules;
    }
    
    //lo uso por el checkbox
    public function prepareData($data)
    {
  //  	if ( ! isset ($data['available']))
    //	{
    	//	$data['available'] = 0;
    //	}
    	    	
    	$this->entity->slug = \Str::slug($this->entity->customer->name . '-' . $this->entity->customer->lastname);
    	
//    	$data['description'] = strip_tags($data['description']);
    	return $data;
    }
}