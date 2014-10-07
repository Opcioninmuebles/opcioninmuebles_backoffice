<!-- BEGIN MAIN SIDEBAR -->
<nav id="sidebar">
	<div id="main-menu">
		<ul class="sidebar-nav">
			<li class="current"><a href="{{ route('admin') }}"><i
					class="fa fa-dashboard"></i><span class="sidebar-text">Dashboard</span></a>
			</li>
			<li><a href="index.html#"><i class="glyph-icon flaticon-panels"></i><span
					class="sidebar-text">Sucursales</span><span class="fa arrow"></span></a>
				<ul class="submenu collapse">
					<li><a href="panels.html"><span class="sidebar-text">Crear</span></a>
					</li>
					<li><a href="panels_draggable.html"><span class="sidebar-text">Modificar</span></a>
					</li>
					<li><a href="panels_draggable.html"><span class="sidebar-text">Eliminar</span></a>
					</li>
					<li><a href="panels_draggable.html"><span class="sidebar-text">Consultar</span></a>
					</li>
				</ul></li>
			<li><a href="index.html#"><i class="glyph-icon flaticon-account"></i><span
					class="sidebar-text">Mi Cuenta</span><span class="fa arrow"></span></a>
				<ul class="submenu collapse">
					<li><a href="#"><span class="sidebar-text">Mi Perfil</span></a></li>
					<li><a href="{{ route('account') }}"><span class="sidebar-text">Configuración
								de Cuenta</span></a></li>
					<li><a href="#"><span class="sidebar-text">Registrar Usuarios</span></a>
					</li>
					<li><a href="password_forgot.html"><span class="sidebar-text">Recuperar
								Contraseña</span></a></li>
					<li><a href="{{ route('lockscreen') }}"><span class="sidebar-text">Lockscreen</span></a>
					</li>
					<li><a href="{{ route('logout') }}"><span class="sidebar-text">Logout</span></a>
					</li>
				</ul></li>
			<li><a href="index.html#"><i class="glyph-icon flaticon-account"></i><span
					class="sidebar-text">Agente Comercial</span><span class="fa arrow"></span></a>
				<ul class="submenu collapse">
					<li><a href="#"><span class="sidebar-text">Crear</span></a></li>
					<li><a href="login.html"><span class="sidebar-text">Modificar</span></a>
					</li>
					<li><a href="signup.html"><span class="sidebar-text">Eliminar</span></a>
					</li>
					<li><a href="password_forgot.html"><span class="sidebar-text">Consultar</span></a>
					</li>
					<li><a href="lockscreen.html"><span class="sidebar-text">Asignación
								Gerente</span></a></li>
				</ul></li>
			<li><a href="index.html#"><i class="glyph-icon flaticon-ui-elements2"></i><span
					class="sidebar-text">Clientes</span><span class="fa arrow"></span></a>
				<ul class="submenu collapse">
					<li><a href="{{ route('register') }}"><span class="sidebar-text">Recepción</span></a>
					</li>
					<li><a href="animations.html"><span class="sidebar-text">Asignacion
								de clientes</span></a></li>
				</ul></li>
			<li><a href="index.html#"><i class="glyph-icon flaticon-forms"></i><span
					class="sidebar-text">Listados</span><span class="fa arrow"></span></a>
				<ul class="submenu collapse">
					<li><a href="forms.html"><span class="sidebar-text">Listar clientes
								asignados a empleados</span></a></li>
					<li><a href="form_validation.html"><span class="sidebar-text">Listar
								total de clientes x sucursal</span></a></li>
				</ul></li>
			<li class="m-b-245"><a href="charts.html"><i
					class="glyph-icon flaticon-charts2"></i><span class="sidebar-text">Charts</span><span
					class="pull-right badge badge-primary">6</span></a></li>
			<br>
		</ul>
	</div>
	<div class="footer-widget">
		<div class="footer-gradient"></div>
		<div id="sidebar-charts">
			<div class="sidebar-charts-inner">
				<div class="sidebar-charts-left">
					<div class="sidebar-chart-title">Pedidos</div>
					<div class="sidebar-chart-number">1,256</div>
				</div>
				<div class="sidebar-charts-right" class="sparkline mini-chart"
					data-type="bar" data-color="theme">
					<span class="dynamicbar1"></span>
				</div>
			</div>
			<hr class="divider">
			<div class="sidebar-charts-inner">
				<div class="sidebar-charts-left">
					<div class="sidebar-chart-title">Facturación</div>
					<div class="sidebar-chart-number">$47,564</div>
				</div>
				<div class="sidebar-charts-right" class="sparkline mini-chart"
					data-type="bar" data-color="theme">
					<span class="dynamicbar2"></span>
				</div>
			</div>
			<hr class="divider">
			<div class="sidebar-charts-inner">
				<div class="sidebar-charts-left">
					<div class="sidebar-chart-title">Visitantes</div>
					<div class="sidebar-chart-number" id="number-visits">147,687</div>
				</div>
				<div class="sidebar-charts-right" class="sparkline mini-chart"
					data-type="bar" data-color="theme">
					<span class="dynamicbar3"></span>
				</div>
			</div>
		</div>
		<div class="sidebar-footer clearfix">
			<a class="pull-left" href="profil_edit.html" rel="tooltip"
				data-placement="top" data-original-title="Settings"><i
				class="glyph-icon flaticon-settings21"></i></a> <a
				class="pull-left toggle_fullscreen" href="index.html#" rel="tooltip"
				data-placement="top" data-original-title="Fullscreen"><i
				class="glyph-icon flaticon-fullscreen3"></i></a> <a
				class="pull-left" href="{{ route('lockscreen') }}" rel="tooltip"
				data-placement="top" data-original-title="Lockscreen"><i
				class="glyph-icon flaticon-padlock23"></i></a> <a class="pull-left"
				href="{{ route('logout') }}" rel="tooltip" data-placement="top"
				data-original-title="Logout"><i class="fa fa-power-off"></i></a>
		</div>
	</div>
</nav>
<!-- END MAIN SIDEBAR -->