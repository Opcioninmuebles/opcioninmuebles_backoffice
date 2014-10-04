<?php namespace ShoppyProducer\Managers;

class ProfileManager extends BaseManager {
  public function getRules()
    {
         $rules = [
            'street' => 'required', //|exists:categories,id',
            'state' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
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
    	    	
    	$this->entity->slug = \Str::slug($this->entity->user->full_name);
//    	$data['description'] = strip_tags($data['description']);
    	return $data;
    }
}