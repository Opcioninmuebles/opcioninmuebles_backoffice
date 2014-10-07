<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"><!--<![endif]-->
<head>
 	@include('admin.includes.head')
</head>

<body data-page="dashboard">
 	@include('admin.includes.header')
    <!-- BEGIN WRAPPER -->
    <div id="wrapper">
		@include('admin.includes.sidebar')

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
    <script src="{{ asset('assets/js/application.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
   
    <!-- END  PAGE LEVEL SCRIPTS -->
</body>

</html>