@extends('master')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 col-md-offset-1">
		<h3>Categories</h3>
		</div>
		<div class="col-md-2 col-md-offset-2">
		<h1 class="text-center">Courses</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2 col-md-offset-1">
			<ul class="list-group">
				@foreach($categories as $category)
			  		<li class="list-group-item categoty_menu"><span class="badge">{{$category->countCourses()}}</span><a href="{{url('courses/search/'.$category->id)}}" class="text_category_menu">{{$category->name}}</a></li>
			  	@endforeach
			</ul>
		</div>
		@foreach($courses as $course)
		<div class="col-md-2 product center-block">
			<div class="well">
				<a href="{{url('courses/open/'.$course->id)}}"><img src="{{$course->image}}" alt="{{$course->name}}" width="222" class="center-block img-rounded img-responsive"></a>
				<p class="text-center">{{$course->name}}</p></div>
		</div>
		@endforeach
	</div>
</div>

@endsection