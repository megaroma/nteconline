<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Admin Page</title>
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/bootstrap-theme.min.css')}}" rel="stylesheet">
    <link href="{{url('BootstrapFormHelpers/css/bootstrap-formhelpers.min.css')}}" rel="stylesheet">
    <link href="{{url('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{url('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{url('css/summernote.css')}}" rel="stylesheet">
    <link href="{{url('css/tma.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      body {
        padding-top: 20px;
        padding-bottom: 20px;
        background-image: url("{{url('pics/003-subtle-light-pattern-background-texture-vol5.jpg')}}");
        background-color: #FFFFFF;  
      }
      .navbar {
        margin-bottom: 20px;
      }

      .line {
        background-color: #666666;
        content: "";
        display: inline-block;
        height: 3px;
        position: relative;
        vertical-align: middle;
        width: 30px;
      }

   @media print {
    .MapToPrint {
        background-color: white;
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        margin: 0;
        padding: 15px;
        font-size: 14px;
        line-height: 18px;
    }
  }
   
    </style>
    <script src="{{url('js/jquery-1.12.3.min.js')}}"></script>
    <script src="{{url('js/jquery-ui.min.js')}}"></script>
    <script src="{{url('js/moment.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('BootstrapFormHelpers/js/bootstrap-formhelpers.min.js')}}"></script>
    <script src="{{url('js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{url('js/summernote.js')}}"></script>
    <script src="{{url('js/crud.js?v=3')}}"></script>    
    <script src="{{url('tinymce/tinymce.min.js')}}"></script>

    <script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    </script>
  </head>
  <body>
    <div class="container">
      @yield('menu')
      @yield('content')
    </div>

  </body>
</html>
