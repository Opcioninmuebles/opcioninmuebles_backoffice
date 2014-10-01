<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"> <!--<![endif]-->

<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="{{ asset('assets/css/icons/icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/plugins.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet">


    <link href="#" rel="stylesheet" id="theme-color">
    <!-- END  MANDATORY STYLE -->
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link href="{{ asset('assets/plugins/fullcalendar/fullcalendar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/metrojs/metrojs.css') }}" rel="stylesheet">
    
    <!-- END PAGE LEVEL STYLE -->

	<link href="{{ asset('assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js') }}" rel="stylesheet">
        
</head>

<body class="login fade-in" data-page="login">
    <!-- BEGIN LOGIN BOX -->
    <div class="container" id="login-block">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                <div class="login-box clearfix animated flipInY">
                    <div class="page-icon animated bounceInDown">
                        <img src="assets/img/account/user-icon.png" alt="Key icon">
                    </div>
                    <div class="login-logo">
                        <a href="login.html#?login-theme-3">
                            <img src="assets/img/account/login-logo.png" alt="Company Logo">
                        </a>
                    </div>
                    <hr>
                    <div class="login-form">
                        <!-- BEGIN ERROR BOX -->
                        <div class="alert alert-danger hide">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Error!</h4>
                            Your Error Message goes here
                        </div>
                        <!-- END ERROR BOX -->
                        <form action="login.html#" method="post">                        
                            <input type="text" placeholder="Usuario" class="input-field form-control user" />
                            <input type="password" placeholder="Contraseña" class="input-field form-control password" />
                            <button id="submit-form" class="btn btn-login ladda-button" data-style="expand-left"><span class="ladda-label">login</span></button>
                        </form>
                        <div class="login-links">
                            <a href="password_forgot.html">Olvidastes tu Password?</a>
                            <br>
                            <a href="signup.html">Don't have an account? <strong>Sign Up</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END LOCKSCREEN BOX -->
    <!-- BEGIN MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/plugins/jquery-1.11.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-migrate-1.2.1.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-mobile/jquery.mobile-1.4.2.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.cookie.min.js') }}" type="text/javascript"></script>
    <!-- END MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('assets/plugins/backstretch/backstretch.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-loading/lada.min.js') }}"></script>
    <script src="{{ asset('assets/js/account.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <script>
    $(function() {
    $('#submit-form').click(function(e){
        e.preventDefault();
        var l = Ladda.create(this);
        l.start();
        setTimeout(function () {
            window.location.href = "index.html";
        }, 2000);

    });
});
    </script>
</body>

</html>
