<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"><!--<![endif]-->
<head>
 <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>BackOffice Opción Inmuebles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
     <!-- BEGIN MANDATORY STYLE -->
    <link href="{{ asset('assets/css/icons/icons.min.css') }}" rel="stylesheet">
  
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/plugins.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet">
    <link href="index.html#" rel="stylesheet" id="theme-color">
       <!-- END  MANDATORY STYLE -->
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link href="{{ asset('assets/plugins/fullcalendar/fullcalendar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/metrojs/metrojs.css') }}" rel="stylesheet">
    <!-- END PAGE LEVEL STYLE -->
    <script src="{{ asset('assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
    
</head>

<body data-page="dashboard">
    <!-- BEGIN TOP MENU -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="menu-medium" class="sidebar-toggle tooltips">
                    <i class="fa fa-outdent"></i>
                </a>
                <a class="navbar-brand" href="{{route('admin')}}"></a>
            </div>
            <div class="navbar-center">Dashboard</div>
            <div class="navbar-collapse collapse">
                <!-- BEGIN TOP NAVIGATION MENU -->
                <ul class="nav navbar-nav pull-right header-menu">
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <li class="dropdown" id="notifications-header">
                        <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="glyph-icon flaticon-notifications"></i>
                            <span class="badge badge-danger badge-header">6</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header clearfix">
                                <p class="pull-left">Notifications</p>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list withScroll" data-height="220">
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-star p-r-10 f-18 c-orange"></i>
                                            Steve have rated your photo
                                            <span class="dropdown-time">Just now</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-heart p-r-10 f-18 c-red"></i>
                                            John added you to his favs
                                            <span class="dropdown-time">15 mins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-file-text p-r-10 f-18"></i>
                                            New document available
                                            <span class="dropdown-time">22 mins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-picture-o p-r-10 f-18 c-blue"></i>
                                            New picture added
                                            <span class="dropdown-time">40 mins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-bell p-r-10 f-18 c-orange"></i>
                                            Meeting in 1 hour
                                            <span class="dropdown-time">1 hour</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-bell p-r-10 f-18"></i>
                                            Server 5 overloaded
                                            <span class="dropdown-time">2 hours</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-comment p-r-10 f-18 c-gray"></i>
                                            Bill comment your post
                                            <span class="dropdown-time">3 hours</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-picture-o p-r-10 f-18 c-blue"></i>
                                            New picture added
                                            <span class="dropdown-time">2 days</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-footer clearfix">
                                <a href="index.html#" class="pull-left">See all notifications</a>
                                <a href="index.html#" class="pull-right">
                                    <i class="fa fa-cog"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
             
                    <!-- END NOTIFICATION DROPDOWN -->
                    <!-- BEGIN USER DROPDOWN -->
                    <li class="dropdown" id="user-header">
                        <a href="index.html#" class="dropdown-toggle c-white" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img src="{{ asset('assets/img/avatars/avatar2.png') }}" alt="user avatar" width="30" class="p-r-5">
                            <span class="username">   
	                            {{ Auth::user()->full_name }} 
	                        	@if (is_admin())
				            		(General Manager)
				            	@endif	
			            	</span>
                            <i class="fa fa-angle-down p-r-10"></i>
                        </a>       
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">
                                    <i class="glyph-icon flaticon-account"></i> Mi Perfil
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('account') }}">
                                    <i class="glyph-icon flaticon-settings21"></i> Configuración de Cuenta
                                </a>
                            </li>
                            <li class="dropdown-footer clearfix">
                                <a href="javascript:;" class="toggle_fullscreen" title="Fullscreen">
                                    <i class="glyph-icon flaticon-fullscreen3"></i>
                                </a>
                                <a href="{{ route('lockscreen') }}" title="Lock Screen">
                                    <i class="glyph-icon flaticon-padlock23"></i>
                                </a>
                                <a href="{{ route('logout') }}" title="Logout">
                                    <i class="fa fa-power-off"></i>
                                </a>
                            </li>
                        </ul>
                    <!-- END USER DROPDOWN -->
                </ul>
                <!-- END TOP NAVIGATION MENU -->
            </div>
        </div>
    </nav>
    <!-- END TOP MENU -->
    <!-- BEGIN WRAPPER -->
    <div id="wrapper">
        <!-- BEGIN MAIN SIDEBAR -->
        <nav id="sidebar">
            <div id="main-menu">
                <ul class="sidebar-nav">
                    <li class="current">
                        <a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i><span class="sidebar-text">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="index.html#"><i class="glyph-icon flaticon-panels"></i><span class="sidebar-text">Sucursales</span><span class="fa arrow"></span></a>
                          <ul class="submenu collapse">
                            <li>
                                <a href="panels.html"><span class="sidebar-text">Crear</span></a>
                            </li>
                            <li>
                                <a href="panels_draggable.html"><span class="sidebar-text">Modificar</span></a>
                            </li>
                            <li>
                                <a href="panels_draggable.html"><span class="sidebar-text">Eliminar</span></a>
                            </li>
                            <li>
                                <a href="panels_draggable.html"><span class="sidebar-text">Consultar</span></a>
                            </li>
                        </ul>
                    </li>     
                    <li>
                        <a href="index.html#"><i class="glyph-icon flaticon-account"></i><span class="sidebar-text">Mi Cuenta</span><span class="fa arrow"></span></a>
                          <ul class="submenu collapse">
                            <li>
                                <a href="#"><span class="sidebar-text">Mi Perfil</span></a>
                            </li>
                            <li>
                                <a href="{{ route('account') }}"><span class="sidebar-text">Configuración de Cuenta</span></a>
                            </li>
                            <li>
                                <a href="signup.html"><span class="sidebar-text">Registrar Usuarios</span></a>
                            </li>
                            <li>
                                <a href="password_forgot.html"><span class="sidebar-text">Recuperar Contraseña</span></a>
                            </li>
                            <li>
                                <a href="{{ route('lockscreen') }}"><span class="sidebar-text">Lockscreen</span></a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"><span class="sidebar-text">Logout</span></a>
                            </li>
                        </ul>
                    </li>                 
                    <li>
                        <a href="index.html#"><i class="glyph-icon flaticon-account"></i><span class="sidebar-text">Agente Comercial</span><span class="fa arrow"></span></a>
                          <ul class="submenu collapse">
                            <li>
                                <a href="#"><span class="sidebar-text">Crear</span></a>
                            </li>
                            <li>
                                <a href="login.html"><span class="sidebar-text">Modificar</span></a>
                            </li>
                            <li>
                                <a href="signup.html"><span class="sidebar-text">Eliminar</span></a>
                            </li>
                            <li>
                                <a href="password_forgot.html"><span class="sidebar-text">Consultar</span></a>
                            </li>
                            <li>
                                <a href="lockscreen.html"><span class="sidebar-text">Asignación Gerente</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html#"><i class="glyph-icon flaticon-ui-elements2"></i><span class="sidebar-text">Clientes</span><span class="fa arrow"></span></a>
                        <ul class="submenu collapse">
                            <li>
                                <a href="components.html"><span class="sidebar-text">Recepción</span></a>
                            </li>
                            <li>
                                <a href="animations.html"><span class="sidebar-text">Asignacion de clientes</span></a>
                            </li>
                        </ul>
                    </li>                                       
                    <li>
                        <a href="index.html#"><i class="glyph-icon flaticon-forms"></i><span class="sidebar-text">Listados</span><span class="fa arrow"></span></a>
                        <ul class="submenu collapse">
                            <li>
                                <a href="forms.html"><span class="sidebar-text">Listar clientes asignados a empleados</span></a>                            
                            </li>
                            <li>
                                <a href="form_validation.html"><span class="sidebar-text">Listar total de clientes x sucursal</span></a>
                            </li>
                        </ul>
                    </li>                        
                    <li class="m-b-245">
                        <a href="charts.html"><i class="glyph-icon flaticon-charts2"></i><span class="sidebar-text">Charts</span><span class="pull-right badge badge-primary">6</span></a>
                    </li>
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
                        <div class="sidebar-charts-right" class="sparkline mini-chart" data-type="bar" data-color="theme">
                            <span class="dynamicbar1"></span>
                        </div>
                    </div>
                    <hr class="divider">
                    <div class="sidebar-charts-inner">
                        <div class="sidebar-charts-left">
                            <div class="sidebar-chart-title">Facturación</div>
                            <div class="sidebar-chart-number">$47,564</div>
                        </div>
                        <div class="sidebar-charts-right" class="sparkline mini-chart" data-type="bar" data-color="theme">
                            <span class="dynamicbar2"></span>
                        </div>
                    </div>
                    <hr class="divider">
                    <div class="sidebar-charts-inner">
                        <div class="sidebar-charts-left">
                            <div class="sidebar-chart-title">Visitantes</div>
                            <div class="sidebar-chart-number" id="number-visits">147,687</div>
                        </div>
                        <div class="sidebar-charts-right" class="sparkline mini-chart" data-type="bar" data-color="theme">
                            <span class="dynamicbar3"></span>
                        </div>
                    </div>
                </div>
                <div class="sidebar-footer clearfix">
                    <a class="pull-left" href="profil_edit.html" rel="tooltip" data-placement="top" data-original-title="Settings"><i class="glyph-icon flaticon-settings21"></i></a>
                    <a class="pull-left toggle_fullscreen" href="index.html#" rel="tooltip" data-placement="top" data-original-title="Fullscreen"><i class="glyph-icon flaticon-fullscreen3"></i></a>
                    <a class="pull-left" href="{{ route('lockscreen') }}" rel="tooltip" data-placement="top" data-original-title="Lockscreen"><i class="glyph-icon flaticon-padlock23"></i></a>
                    <a class="pull-left" href="{{ route('logout') }}" rel="tooltip" data-placement="top" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
                </div> 
            </div>
        </nav>
        <!-- END MAIN SIDEBAR -->


      	@yield('content')

    </div>
 	@yield('scripts')
    <!-- END CHAT MENU -->
    <!-- BEGIN MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/plugins/mandatoryJs.min.js') }}"></script>
    <!-- END MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('assets/plugins/metrojs/metrojs.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/fullcalendar/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/simple-weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/google-maps/markerclusterer.js') }}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true') }}"></script>
    <script src="{{ asset('assets/plugins/google-maps/gmaps.js') }}"></script>
    <script src="{{ asset('assets/plugins/charts-flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/plugins/charts-flot/jquery.flot.animator.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/charts-flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/plugins/charts-flot/jquery.flot.time.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/charts-morris/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/charts-morris/morris.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
    <script src="{{ asset('assets/js/calendar.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <!-- END  PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('assets/js/application.js') }}"></script>
</body>

</html>