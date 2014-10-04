@extends('layout')

@section('content')

<div class="container">
  <div class="row">
   <div class="col-md-6">
     <h1>Registro</h1>
     {{ Form::open(['route' => 'register', 'method' => 'POST', 'role' => 'form', 'novalidate' ]) }}

     {{ Field::text('full_name') }}
     {{ Field::email('email') }}
     {{ Field::password('password') }}
     {{ Field::password('password_confirmation', ['placeholder' => 'Repite tu clave'] ) }}

     <p>
      <input type="submit" value="Registro" class="btn btn-success">
      <a href="{{ route('home') }}" class="btn btn-info">Regresar</a>
    </p>
    {{ Form::close() }}
  </div>

  <div class="col-md-6">
     <h1>Social</h1>
     
      <a href="{{ route('login-fb') }}" class="btn btn-primary">Facebook</a>
      <a href="{{ route('login-tw') }}" class="btn btn-info">Twitter</a>
    
    {{ Form::close() }}
  </div>


</div>
</div>