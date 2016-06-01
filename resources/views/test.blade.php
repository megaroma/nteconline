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

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{url('css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
	<link href="{{url('css/carousel.css')}}" rel="stylesheet">
	<link href="{{url('css/style.css')}}" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 50px;
        padding-bottom: 20px;
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
	  
<div class="container-fluid">

      <footer>

	<div class="row">
		<div class="col-md-2">
			11
		</div>
		<div class="col-md-6">
		<p>&copy; 2015 Company, Inc.</p>
		</div>
		<div class="col-md-2">
			11
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
    <script src="{{url('js/ie10-viewport-bug-workaround.js')}}"></script>
  </body>
</html>