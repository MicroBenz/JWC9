<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Login | JWC9: Management System</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="../graders/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
{{-- <link href="../graders/css/simple-line-icons.min.css" rel="stylesheet" type="text/css"/> --}}
<link href="../graders/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
{{-- <link href="../graders/css/uniform.default.css" rel="stylesheet" type="text/css"/> --}}
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="../graders/css/login.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="../graders/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
{{-- <link href="../graders/css/plugins.css" rel="stylesheet" type="text/css"/> --}}
{{-- <link href="../graders/css/layout.css" rel="stylesheet" type="text/css"/> --}}
{{-- <link href="../graders/css/default.css" rel="stylesheet" type="text/css" id="style_color"/> --}}
{{-- <link href="../graders/css/custom.css" rel="stylesheet" type="text/css"/> --}}
<!-- END THEME STYLES -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">
	<img src="../img/logo.png" width="20%" alt="JWC9 Logo"/>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="login/redirect" method="get">
		<h3 class="form-title">Sign In | JWC#9 Management System</h3>
		<!--@if($errors->first())
		<div class="alert alert-danger">
			<button class="close" data-close="alert"></button>
			<span>{{ $errors->first() }}</span>
		</div>
		@endif
		@if (session('fail'))
		    <div class="alert alert-danger">
		    	<button class="close" data-close="alert"></button>
		        <span>{{ session('fail') }}</span>
		    </div>
		@endif
		<div class="form-group">-->
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<!--<label class="control-label visible-ie8 visible-ie9">Username</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" value="{{ old('username') }}" />
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" required />
		</div>-->
		<div class="form-actions">
			<button type="submit" class="btn btn-success uppercase">Login</button>
			<label class="rememberme check">
		</div>
	</form>
	<!-- END LOGIN FORM -->
</div>
<div class="copyright">
	 2017 © Young Webmaster Camp, in association with Thai Webmaster Association. All right reserved.
</div>
<!-- END LOGIN -->
</body>
<!-- END BODY -->
</html>