@extends('layout')

@section('content')

<div class="container">
    <div class="row">
         <div class="col-md-6">
             <h1>Edita tu Perfil</h1>
             {{ Form::model($customer, ['route' => 'update_profile', 'method' => 'PUT', 'role' => 'form', 'novalidate' ]) }}
           		{{ Field::url('store_url')}}
                
                {{ Field::textarea('description') }}
                
                {{ Field::select('plan_type', $plan_types)}}
                
                {{ Field::select('category_id', $categories)}}
                
                {{ Field::checkbox('available')}} 
                <p>
                	<input type="submit" value="Guardar Perfil" class="btn btn-success">
                	 <a href="{{ route('home') }}" class="btn btn-info">
		                Regresar
		            </a>
                </p>
             {{ Form::close() }}
         </div>
   </div>
</div>