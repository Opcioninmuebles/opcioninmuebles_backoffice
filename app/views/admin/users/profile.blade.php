@extends('admin/dashboard') 

@section('content')

<!-- BEGIN MAIN CONTENT -->
<div id="main-content">
	<div class="page-title">
		<i class="icon-custom-left"></i>
		<h2>
			Editá Tu Perfil <small>Completa todos los datos que puedas, esto te ayudará a configurar tus tiendas.</small>
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
						
								<div class="row">
									<div class="col-md-12">
										<div class="panel">
											<div class="panel-title line">
												<div class="caption">
													<i class="fa fa-phone c-gray m-r-10"></i> Datos Personales
												</div>
											</div>
											
											<div class="panel-body">
												<div class="row profile-classic">
													<div class="col-md-6 col-md-offset-1">
											
													 {{ Form::model($customer, ['route' => 'update_profile', 'method' => 'PUT', 'id'=>'settings', 'role' => 'form', 'novalidate', 'class' => 'form-horizontal' ]) }}
										       										        		
										        	
										                {{ Field::text('street',null, ['placeholder' => \Lang::get('validation.attributes.pldr_street')])}} 
										                {{ Field::text('state',null, ['placeholder' => \Lang::get('validation.attributes.pldr_state')])}} 
										                {{ Field::text('city',null, ['placeholder' => \Lang::get('validation.attributes.pldr_city')])}}
										                {{ Field::text('zipcode',null, ['placeholder' => \Lang::get('validation.attributes.pldr_zipcode')])}} 
										                {{ Field::text('country',null, ['placeholder' => \Lang::get('validation.attributes.pldr_country')])}} 
										                {{ Field::phone('phone',null, ['placeholder' => \Lang::get('validation.attributes.pldr_phone')])}} 
										               
										                <p>
										                	<input type="submit" value="Guardar Perfil" class="btn btn-success">
										                	 <a href="{{ route('admin') }}" class="btn btn-info">
												                Regresar
												            </a>
										                </p>
										             {{ Form::close() }}
             										</div>
												</div>
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
<!-- END MAIN CONTENT -->

@stop
