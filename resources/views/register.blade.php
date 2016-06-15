@extends('master')
@section('content')
<h1 align="center">Registration form</h1>
<div class="container">
	<div class="row">
		
		<div class="col-md-6 col-md-offset-2">
		@if($message != "")
			<p>You have successfully registered for NTEC Online Courses as a {{$optionsRole}}.
			You will be able to login shortly, after administration security check. Usually it takes up to 24 hours.
			</p>
		@else
			@if(count($errors) > 0)
				<div class="alert alert-danger" role="alert">
					@foreach($errors as $error)
						<p>{{$error}}</p>
					@endforeach
				</div>
			@endif
		<form class="form-horizontal" id="registration_form" method="post">
			<div class="form-group">
		    <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
		    	<div class="col-sm-8">
		      	<input type="email" name="email" class="form-control" value="{{$email}}" id="inputEmail3" placeholder="Email">
	    		</div>
  		  	</div>
	  		<div class="form-group">
			    <label for="name" class="col-sm-4 control-label">Full Name</label>
			    <div class="col-sm-8">
			      <input type="text" name="name" class="form-control" id="text1" value="{{$name}}" placeholder="Full Name">
		    	</div>
	  		</div>
	  		<div class="form-group">
		  		<div class="radio-inline col-md-3 col-md-offset-5 col-sm-3 col-sm-offset-5 col-lg-3 col-lg-offset-5 col-xs-3 col-xs-offset-5">
					  <label>
					    <input type="radio" class="user_role" name="optionsRole" id="optionsRadios1" value="student" 
					    @if($optionsRole == "student") 
					    	{{"checked"}}
					    @endif
					    >
					    Student
					  </label>
				</div>
				<div class="radio-inline">
					  <label>
					    <input type="radio" class="user_role" name="optionsRole" id="optionsRadios2" value="tutor"
					    @if($optionsRole == "tutor") 
					    	{{"checked"}}
					    @endif
					    >
					    Tutor
					  </label>
				</div>
			</div>
			<div class="form-group" id="student_id_section">
		    <label for="studentid" class="col-sm-4 control-label">Student ID</label>
		    	<div class="col-sm-8">
		      	<input type="text" value="{{$student_id}}" name="student_id" class="form-control" id="studentid1" placeholder="Student ID">
	    		</div>
  		  	</div>
  		  	<div class="form-group">
			    <label for="inputPassword" class="col-sm-4 control-label">Password</label>
			    <div class="col-sm-8">
			      <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
			    </div>
			</div>
			<div class="form-group">
			    <label for="confirmpassword" class="col-sm-4 control-label">Confirm Password</label>
			    <div class="col-sm-8">
			      <input type="password" class="form-control" name="password_confirmation" id="confirmpassword" placeholder="Confirm Password">
			    </div>
			</div>
			{!! csrf_field() !!}
			<button type="submit" class="btn btn-default col-md-3 col-md-offset-6 col-sm-3 col-sm-offset-6 col-lg-3 col-lg-offset-6 col-xs-3 col-xs-offset-6">Submit</button>
  		  </form>
  		  @endif
  		</div>
	</div>	
</div>
@endsection