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
			  <li class="list-group-item categoty_menu"><span class="badge">12</span><a href="#" class="text_category_menu">Linguistics and languages</a></li>
			  <li class="list-group-item categoty_menu"><span class="badge">5</span><a href="#" class="text_category_menu">Visual arts</a></li> 
			  <li class="list-group-item categoty_menu"><span class="badge">3</span><a href="#" class="text_category_menu">Archaeology</a></li>
			  <li class="list-group-item categoty_menu"><span class="badge">12</span><a href="#" class="text_category_menu">Economics</a></li>
			  <li class="list-group-item categoty_menu"><span class="badge">5</span><a href="#" class="text_category_menu">Geography</a></li> 
			  <li class="list-group-item categoty_menu"><span class="badge">3</span><a href="#" class="text_category_menu">Biology</a></li> 
			  <li class="list-group-item categoty_menu"><span class="badge">12</span><a href="#" class="text_category_menu">Chemistry</a></li>
			  <li class="list-group-item categoty_menu"><span class="badge">5</span><a href="#" class="text_category_menu">Physics</a></li> 
			  <li class="list-group-item categoty_menu"><span class="badge">3</span><a href="#" class="text_category_menu">Computer sciences</a></li>
			  <li class="list-group-item categoty_menu"><span class="badge">12</span><a href="#" class="text_category_menu">Mathematics</a></li>
			  <li class="list-group-item categoty_menu"><span class="badge">5</span><a href="#" class="text_category_menu">Systems science</a></li> 
			  <li class="list-group-item categoty_menu"><span class="badge">3</span><a href="#" class="text_category_menu">Agriculture</a></li>
			  <li class="list-group-item categoty_menu"><span class="badge">12</span><a href="#" class="text_category_menu">Architecture and design</a></li>
			  <li class="list-group-item categoty_menu"><span class="badge">5</span><a href="#" class="text_category_menu">Business</a></li> 
			  <li class="list-group-item categoty_menu"><span class="badge">3</span><a href="#" class="text_category_menu">Engineering and technology</a></li> 
			</ul>
		</div>
		<div class="col-md-2 product center-block">
			<div class="well"><img src="/img/course1.jpg" alt="Corse 1" width="222" class="center-block img-rounded img-responsive"><p class="text-center">Corse 1</p></div>
		</div>
		<div class="col-md-2 product center-block">
			<div class="well"><img src="/img/course2.jpg" alt="Corse 1" width="222" class="center-block img-rounded img-responsive"><p class="text-center">Corse 2</p></div>
		</div>
		<div class="col-md-2 product center-block">
			<div class="well"><img src="/img/course3.jpg" alt="Corse 1" width="222" class="center-block img-rounded img-responsive"><p class="text-center">Corse 3</p></div>
		</div>
		<div class="col-md-2 product center-block">
			<div class="well"><img src="/img/course4.jpg" alt="Corse 1" width="222" class="center-block img-rounded img-responsive"><p class="text-center">Corse 4</p></div>
		</div>
	</div>
</div>

@endsection