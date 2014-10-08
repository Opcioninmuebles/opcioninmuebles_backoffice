@extends('admin/dashboard') 

@section('content')

<!-- BEGIN MAIN CONTENT -->

<div id="main-content">
	<div class="page-title">
		<i class="icon-custom-left"></i>
		<h2>
			Clientes<small>a continuación podrás administrar los datos de tus clientes</small>
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
												@include('admin.customers.navigator')
				 								<table class="table table-striped table-bordered">
				 									<thead>
				 										<tr>
				 											<td>Número de Cliente</td>
				 											<td>Nombre</td>
				 											<td>Apellido</td>
				 											<td>Email</td>
				 										</tr>
				 									</thead>
				 									<tbody>				 								
				 									
				 									</tbody>
				 								</table>
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