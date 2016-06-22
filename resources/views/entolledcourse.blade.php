@extends('master')
@section('content')


<div class="container-fluid">
	<div class="row">
			<div class="col-md-2 col-md-offset-1">
			<h1 class="text-center">List of lectures</h1>
				<ul class="list-group">
				@foreach($lectures as $lecture)
					<li class="list-group-item categoty_menu"><a href="{{url('courses/enrolled/'.$course_id.'/'.$lecture->id)}}" class="text_category_menu">{{$lecture->name}}</a></li>
				@endforeach
					<li class="list-group-item categoty_menu"><a href="{{url('courses/enrolled/'.$course_id.'/13')}}" class="text_category_menu">Quiz</a></li>
				</ul>
			</div>
			
			<div class="col-md-8" >
			@foreach($pages as $page)
				<h1 class="text-center">{{$page->name}}</h1>
				<div class="text-center">
					<video width="500" controls>
  						<source src="{{$page->url}}" type="video/mp4">
  						Your browser does not support HTML5 video.
					</video>
				</div>
			@endforeach
			</div>
			
	</div>
</div>

@endsection