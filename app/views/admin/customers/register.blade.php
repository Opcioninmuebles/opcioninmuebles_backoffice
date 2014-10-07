@extends('admin/dashboard') 

@section('content')

<!-- BEGIN MAIN CONTENT -->

<div id="main-content">
	<div class="page-title">
		<i class="icon-custom-left"></i>
		<h2>
			Registrar cliente <small>ingrese a continuación los datos del cliente</small>
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
								<div class="row profile-classic">
									<div class="col-md-6">
										<div class="panel">
											<div class="panel-body">
				 								{{ Form::model($customer, ['route' => 'update_register', 'method' => 'PUT', 'role' => 'form', 'novalidate' ]) }}
													<div class="form-group">
														{{Field::text('Nro de cliente', null, ['placeholder' => 'Numero de cliente'])}}
														{{Field::text('Nombres', null, ['placeholder' => 'Nombres'])}}
														{{Field::text('Apellido', null, ['placeholder' => 'Apellido'])}}
														{{Field::phone('Telefono', null, ['placeholder' => 'Telefono'])}}
														{{Field::email('Email', null, ['placeholder' => 'ejemplo@mail.com'])}}
													
										                <p>
										                	<input type="submit" value="Registrar" class="btn btn-success m-r-20">
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