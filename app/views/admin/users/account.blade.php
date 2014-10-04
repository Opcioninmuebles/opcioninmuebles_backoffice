@extends('admin/dashboard') 

@section('content')

<!-- BEGIN MAIN CONTENT -->

<div id="main-content">
	<div class="page-title">
		<i class="icon-custom-left"></i>
		<h2>
			Configuración de cuenta <small>configura aquí los datos de tu cuenta</small>
		</h2>
	</div>
	<div class="row">
		<div class="col-md-12">
			<!-- BEGIN TABS -->
			<div class="tabbable tabbable-custom form">
				<div class="tab-content">
					<div class="space20"></div>
					<div class="tab-pane active" id="general_settings">
						<div class="row profile">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-12">
										<ul class="list-unstyled profile-nav col-md-3">
											<li><img src="assets/img/avatars/avatar4_big.png"
												alt="avatar 4"></li>
										</ul>
										<div class="col-md-9">
											<div class="row">
												<div class="col-md-12 profile-info">
													<h1>{{Auth::user()->full_name}}</h1>
													<p>
														Perteneces al grupo de <strong>{{ Auth::user()->type}}</strong>
													</p>
													<div class="m-t-20"></div>
													<a href="profil.html" class="btn btn-dark">Ver Mi Perfil</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<hr>
								<div class="row profile-classic">
									<div class="col-md-6">
										<div class="panel">
											<div class="panel-title line">
												<div class="caption">
													<i class="fa fa-info c-gray m-r-10"></i> Edita Tu Cuenta
												</div>
											</div>
											<div class="panel-body">
				 								{{ Form::model($user, ['route' => 'update_account', 'method' => 'PUT', 'role' => 'form', 'novalidate' ]) }}
		          									 	{{ Field::text('full_name')}}
	           
										                {{ Field::email('email')}}
										           
										                {{ Field::password('password')}}
										           
										                {{ Field::password('password_confirmation', ['placeholder' => 'Confirma tu clave']) }}
										               
										                <p>
										                	<input type="submit" value="Guardar" class="btn btn-success m-r-20">
										                 	<a href="{{ route('admin') }}" class="btn btn-info">
												                Regresar
												            </a>
										                </p>
										                    
		          								{{ Form::close() }}		
		          					    		
		          					    		@if(Session::has('message'))				
													<div class='alert alert-{{ Session::get('class') }}'>
														{{ Session::get('message') }}
													</div> 
												@endif
											</div>
										</div>
									</div>																									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--END TABS-->

		</div>
	</div>


</div>
@stop
