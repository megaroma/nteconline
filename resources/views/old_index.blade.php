@extends('master')
@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->

 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="second-slide" src="/img/slider2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Learn anytime, anywhere.</h1>
              <p><a class="btn btn-lg btn-primary" href="/register" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="/img/slider1.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Best Courses.</h1>
              <p><a class="btn btn-lg btn-primary" href="/register" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
<h2 class="text-center">New Courses</h2>
  <div class="container">
  <div class="row">
        @for($i=0;$i<4;$i++)
        <div class="product col-sm-6 col-md-4 col-lg-3 center-block"><div class="well"><img src="{{$courses[$i]->image}}" alt="Corse 1" width="222" class="center-block img-rounded img-responsive"><p class="text-center">{{$courses[$i]->name}}</p></div></div>
        @endfor
      </div>
  </div>
	<h2 class="text-center">Our Benefits</h2>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-3">
		  <img class="img-responsive center-block" src="/img/main_icon1.png" alt="Icon 1" width="180">
          <h2 class="text-center">CONTENT</h2>
          <p class="text-center">Take full advantage of our system with huge range of high quality content: video and audio lectures, educational materials.</p>
        </div>
        <div class="col-md-3">
		  <img class="img-responsive center-block" src="/img/main_icon2.png" alt="Icon 2"  width="180">
          <h2 class="text-center">FEEDBACK</h2>
          <p class="text-center">Acquire real time feedback from our system and tutors by completing assignments, pop-up quizes, and exams.</p>
       </div>
        <div class="col-md-3">
		  <img class="img-responsive center-block" src="/img/main_icon3.png" alt="Icon 3"  width="180">
          <h2 class="text-center">VISUAL</h2>
          <p class="text-center">Get remarkable experience with simple and adaptive design of our web and mobile application.</p>
        </div>
		<div class="col-md-3">
		  <img class="img-responsive center-block" src="/img/main_icon4.png" alt="Icon 3"  width="180">
          <h2 class="text-center">LEVEL UP</h2>
          <p class="text-center">Increase your knowledge and qualification in any desirable field. Level up your skills.</p>
        </div>
      </div>
	  </div>
@endsection