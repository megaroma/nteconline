@section('menu')
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">Admin</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="{{url('/')}}">Home</a></li>

              <li class="dropdown" >
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{url('admin/users')}}">Users</a></li>
                  <li><a href="{{url('admin/roles')}}">Roles</a></li>
                </ul>
              </li>
            </ul>

 
            <ul class="nav navbar-nav navbar-right">
              @if(\Auth::check())
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{url('auth/logout')}}">Logout</a></li>
                </ul>
              </li>  
              @endif            
            </ul>



          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
@endsection