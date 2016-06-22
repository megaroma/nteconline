@extends('master')
@section('content')
<h1 align="center">{{$course->name}}</h1>
<script type="text/javascript">
	function login_t() {
		$('.dropdown-toggle').dropdown('toggle');
		return true;
	}
</script>
<div class="container">
	<div class="row">
		<div class="col-xs-5 col-xs-offset-2 col-sm-5 col-md-5 col-lg-5 well video">
			<?php if($course_id == 1): ?>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/XhBaPunUPv0" frameborder="0" allowfullscreen></iframe>
			<?php elseif($course_id == 2): ?>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/nS_k1h7JRLs" frameborder="0" allowfullscreen></iframe>
			<?php else: ?>
			<img src="{{$course->image}}">
			<?php endif; ?>
		</div>	
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 vertical-align">
			@if(\Auth::check())
				@if(isset($_SESSION['course'.$course_id]))
					<a href="{{url('courses/enrolled/'.$course_id)}}" type="submit" class="btn btn-success btn-lg">Enrolled</a>
				@else
					<form method="post">
					<input name="enrollme" type="hidden" value="1">
					{!! csrf_field() !!}
					<button type="submit" class="btn btn-primary btn-lg">Enroll Now</button>
					</form>
				@endif
			@else
			<button type="button" class="btn btn-primary btn-lg" onclick="window.setTimeout(login_t,100)">Login to enroll</button> 
			@endif
		</div>

	</div>	
</div>

<div class="container">
<h2>About this course</h2>
	<div class="row">
		<div class="col-xs-8 well">
			<p>{!!$course->description!!}</p>
		</div>
		<div class="col-xs-4 well">
		<p>Lenght - {!!html_entity_decode($course->length)!!}</p>
		<p>Effort - {{$course->effort}} hours per week</p>
		<p>Price - FREE Add a Verified Certificate for $49</p>
		<p>Subject - {{$course->categories->first()->name}}</p>
		<p>Level - Introductory</p>

		</div>
	</div>
	<div class="row">
		<div class="col-xs-8 well">
			<h2>Tutors</h2>

			<?php if($course_id == 1): ?>
			<div class="row">
				<div class="product col-sm-3 col-md-3 col-lg-3 well">
					<img src="https://www.edx.org/sites/default/files/person/image/lander_x110.jpg" alt="Tutor 1" width="155" class="img-circle img-responsive">
					<p class="text-center">Eric S. Lander</p>
				</div>
				<div class="product col-sm-3 col-md-3 col-lg-3 well">
					<img src="https://www.edx.org/sites/default/files/person/image/graham_walker_x110.jpg" alt="Tutor 2" width="155" class="img-circle img-responsive">
					<p class="text-center">Graham Walker</p>
				</div>
				<div class="product col-sm-3 col-md-3 col-lg-3 well">
					<img src="https://www.edx.org/sites/default/files/person/image/michelle_mischke_x110.jpg" alt="Tutor 3" width="155" class="img-circle img-responsive">
					<p class="text-center">Michelle Mischke</p>
				</div>
				<div class="product col-sm-3 col-md-3 col-lg-3 well">
					<img src="https://www.edx.org/sites/default/files/person/image/brian_white_x110.jpg" alt="Tutor 1" width="155" class="img-circle img-responsive">
					<p class="text-center">Brian White</p>
				</div>
			</div>
			<?php elseif($course_id == 2): ?>
			<div class="row">
				<div class="product col-sm-3 col-md-3 col-lg-3 well">
					<img src="https://www.edx.org/sites/default/files/person/image/mx101z-chen-110x110.png" alt="Tutor 1" width="155" class="img-circle img-responsive">
					<p class="text-center">Estella Y. M. Chen</p>
				</div>

			</div>
			<?php else: ?>
			<div class="row">
				<div class="product col-sm-3 col-md-3 col-lg-3 well">
					<img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/1/000/1a5/039/2989387.jpg" alt="Tutor 1" width="155" class="img-circle img-responsive">
					<p class="text-center">Doney Lai</p>
				</div>

			</div>
			<?php endif; ?>

		</div>
	</div>
</div>
@endsection