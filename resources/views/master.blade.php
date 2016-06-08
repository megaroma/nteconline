<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>{{ isset($title) ? $title : 'NTEC Online' }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{url('css/bootstrap-social.css')}}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{url('css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
	<link href="{{url('css/carousel.css')}}" rel="stylesheet">
	<link href="{{url('css/style.css')}}" rel="stylesheet">
	<link href="{{url('css/font-awesome.css')}}" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 50px;
        padding-bottom: 20px;
      }
	.coursetext {
    outline: 2px solid #000; /* Чёрная рамка */
    border: 3px solid #fff; /* Белая рамка */
	}      
    </style>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="{{url('js/ie8-responsive-file-warning.js')}}"></script><![endif]-->
    <script src="{{url('js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


  <body id="main">
	<header class="site_header">
	   <div class="container" id="header_container">
	   <div class="row">
			<div class="col-md-4 vcenter" id="logo">
				<img src="{{url('img/Ntec_Logo.png')}}" class="img-responsive" alt="Ntec Logo">
			</div>
			<div class="col-md-4 vcenter">
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Search for...">
				  <span class="input-group-btn">
					<button class="btn btn-default" type="button">Go!</button>
				  </span>
				</div><!-- /input-group -->
			</div>
			<div class="col-md-3 vcenter">
					<ul class="nav navbar-nav navbar-right">
					  @if(\Auth::check())
					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{\Auth::user()->name}} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							@if(\Auth::user()->hasRole('admin'))
							<li><a href="#" id="ntec-auth-top-admin" data-action="{{url('/admin')}}">Admin Panel</a></li>
							@endif
						  	<li><a href="#" id="ntec-auth-top-logout" data-action="{{url('/auth/logout')}}">Logout</a></li>
						</ul>
					  </li>
					  @else
					  <li><a href="{{url('/register')}}">Sign Up</a></li>
					  <li class="dropdown" id="menuLogin">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Login</a>
						<div class="dropdown-menu" style="width:500px;padding:17px;">
						  <form class="form-horizontal" id="ntec-auth-top-login-form" action="{{url('/auth/login')}}" method="post">
							<div class="form-group">
							 <label for="inputEmail" class="col-sm-2 control-label">Email</label>
							  <div class="col-sm-10">
								<input type="email" name="ntec-auth-email" value="{{ old('ntec-auth-email') }}" class="form-control" id="inputEmail" placeholder="Email">
							  </div>
						   </div>
							<div class="form-group">
							  <label for="inputPassword" class="col-sm-2 control-label">Password</label>
							  <div class="col-sm-10">
							   <input type="password" name="ntec-auth-password" class="form-control" id="inputPassword" placeholder="Password">
							 </div>
						   </div>
							<div class="form-group">
							 <div class="col-sm-offset-2 col-sm-10">
							   <div class="checkbox">
								 <label>
								   <input type="checkbox" name="ntec-auth-remember" value="1"> Remember
								 </label>
							   </div>
							 </div>
						   </div>
						   <div class="form-group">
							<div class="col-sm-12">
							  <div class="alert alert-danger" id="ntec-auth-top-error-msg" style="display:none;" role="alert"><strong>Error:</strong>Login error<br><a href="#">Forgot password?</a></div>
							</div>
						   </div>
						   <div class="form-group">
							 <div class="col-sm-2" >
							   <div style="display:none;" id="ntec-auth-top-ajax-loader"><img src="{{url('pics/ajax-loader.gif')}}"></div>
							 </div>
							 <div class="col-sm-2">
							  {!! csrf_field() !!}
							   <button type="submit" class="ntec_auth_login_btn btn btn-default" id="ntec-auth-top-login-btn">Login</button>

							 </div>
							 <div class="col-sm-8">
							   Don't have an account? <a href="{{url('/register')}}">Sign Up</a>
							 </div>
						   </div>
						  </form>
						</div>
					  </li>
					  @endif
					</ul>
			</div>
		</div>
		</div>
		<div class="container">
			<div class="row">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
				  <div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					  <span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">NTECOnline</a>
				  </div>
				  <div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
					  <li class="active"><a href="/">Home</a></li>
					  <li><a href="#">News</a></li>
					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						  <li><a href="#">Action</a></li>
						  <li><a href="#">Another action</a></li>
						  <li><a href="#">Something else here</a></li>
						  <li class="divider"></li>
						  <li class="dropdown-header">Nav header</li>
						  <li><a href="#">Separated link</a></li>
						  <li><a href="#">One more separated link</a></li>
						</ul>
					  </li>
					  <li><a href="#">Photo</a></li>
					  <li><a href="#">Guest Book</a></li>
					</ul>

				  </div><!--/.nav-collapse -->
				</div><!--/.container-fluid -->
			</nav>
		</div>
		</div>
	</header>

       @yield('content')

      <hr>


      <footer class="site_footer">
<div class="container">
	<div class="row">
		<div class="col-md-3 vcenter">
			<img src="{{url('img/Ntec_Logo.png')}}" class="img-responsive" alt="Ntec Logo">
		</div>
		<div class="col-md-5 vcenter">
		<ul class="list-inline">
		  <li>Menu 1</li>
		  <li>Menu 2</li>
		  <li>Menu 3</li>
		  <li>Menu 4</li>
		  <li>Menu 5</li>
		</ul>
		<p>&copy; 2015 Company, Inc.</p>
		</div>
		<div class="col-md-3 vcenter">
			  <a class="btn btn-social-icon btn-lg btn-twitter">
				<span class="fa fa-twitter"></span>
			  </a>
			  <a class="btn btn-social-icon btn-lg btn-facebook">
				<i class="fa fa-facebook"></i>
			  </a>
			  <a class="btn btn-social-icon btn-lg btn-pinterest">
				<i class="fa fa-pinterest"></i>
			  </a>
			  <a class="btn btn-social-icon btn-lg btn-google">
				<i class="fa fa-google"></i>
			  </a>
		</div>
	</div>


      </footer>
</div>





    <!-- JS -->
    <script src="{{url('js/jquery-1.12.3.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    </script>
    <script src="{{url('js/ntec.js')}}"></script>
    <script src="{{url('js/ie10-viewport-bug-workaround.js')}}"></script>
  </body>
</html>