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
				 								{{ Form::model($user, ['route' => 'update_registrer', 'method' => 'PUT', 'role' => 'form', 'novalidate' ]) }}
													<div class="form-group">
														{{Field::text('Nro de cliente', null, ['placeholder' => 'Numero de cliente'])}}
														{{Field::text('Nombres', null, ['placeholder' => 'Nombres'])}}
														{{Field::text('Apellido', null, ['placeholder' => 'Apellido'])}}
														{{Field::phone('Telefono', null, ['placeholder' => 'Telefono'])}}
														{{Field::email('Email', null, ['placeholder' => 'ejemplo@mail.com'])}}
														{{Field::text('Cod. inmueble', null, ['placeholder' => 'Codigo del inmueble'])}}
														Estado
														<div>														
															<select name="estado" id="estado">
																<option value="prospecto">Prospecto</option>
															</select>
														</div>
														
														Categoria
														<div>
															<select name="categoinmu" id="categoinmu">
																<option value="Casa">Casa </option>
																<option value="Apartamento">Apartamento </option>
																<option value="Oficina">Oficina </option>
																<option value="Finca">Finca </option>
																<option value="Local">Local </option>
																<option value="Bodega">Bodega </option>
																<option value="Lote">Lote </option>
																<option value="Habitacion">Habitacion </option>
																<option value="Consultorio">Consultorio </option>
																<option value="Edificio">Edificio </option>
																<option value="Cabaña">Cabaña </option>
																<option value="CasaLote">Casa lote </option>
															</select>
														</div>
														Portal
														<div>														
															<select name="estado" id="estado">
																<option value="fincaRaiz">Finca raiz</option>
																<option value="fincaRaizMobile">Finca raiz mobile</option>
															</select>
														</div>
														{{Field::text('Observaciones', null, ['placeholder' => 'Observaciones'])}}
													</div>
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