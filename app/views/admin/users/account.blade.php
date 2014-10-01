@extends('admin/dashboard') 

@section('content')

<!-- BEGIN MAIN CONTENT -->
<div id="main-content">
	<div class="containerAccount">
	    <div class="row">
	         <div class="col-md-6">
	             <h1>Edita tu cuenta</h1>
	             {{ Form::model($user, ['route' => 'update_account', 'method' => 'PUT', 'role' => 'form', 'novalidate' ]) }}
	           	 	{{ Field::text('full_name')}}
	           
	                {{ Field::email('email')}}
	           
	                {{ Field::password('password')}}
	           
	                {{ Field::password('password_confirmation', ['placeholder' => 'Confirma tu clave']) }}
	               
	                <p>
	                	<input type="submit" value="Guardar" class="btn btn-success">
	                 	<a href="{{ route('admin') }}" class="btn btn-info">
			                Regresar
			            </a>
	                </p>
	             {{ Form::close() }}
	         </div>
	   </div>
	</div>
</div>

@stop
