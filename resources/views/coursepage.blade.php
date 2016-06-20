@extends('master')
@section('content')
<h1 align="center">Course page</h1>
<div class="container">
	<div class="row">
		<div class="col-xs-5 col-xs-offset-2 col-sm-5 col-md-5 col-lg-5 well video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/rKtFJxGzJX8" frameborder="0" allowfullscreen></iframe>
		</div>	
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 vertical-align">
			<button type="submit" class="btn btn-primary btn-lg">Enroll Now</button>
		</div>

	</div>	
</div>

<div class="container">
<h2>About this course</h2>
	<div class="row">
		<div class="col-xs-8 well">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pulvinar velit vitae turpis ultricies congue. Nullam commodo faucibus tellus quis hendrerit. Donec mollis erat vel ullamcorper finibus. Aenean rhoncus lobortis augue, vitae egestas ligula auctor vitae.</p>

			<p>Nullam a purus odio. Fusce sed massa et ligula mollis congue quis a erat. Pellentesque vitae elit nisl. Praesent ut sem vehicula, consequat libero nec, fermentum enim. Pellentesque urna nisi, tincidunt vitae sapien a, hendrerit tincidunt ex. Sed quam lorem, faucibus a est sit amet, consectetur dignissim libero.</p>

			<p>Aenean vitae lectus non felis sagittis vehicula. Aenean in gravida sem. Aenean nec metus sed mauris rhoncus volutpat eget nec tellus. Nullam ut augue eu arcu laoreet sodales. Praesent ut quam luctus, dapibus tortor et, hendrerit risus. Pellentesque placerat et nisi nec. </p>
		</div>
		<div class="col-xs-4 well">
		<p>Lenght - 6 weeks</p>
		<p>Effort - 2-4 hours per week</p>
		<p>Price - FREE Add a Verified Certificate for $49</p>
		<p>Subject - Language</p>
		<p>Level - Introductory</p>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-8 well">
			<h2>Tutors</h2>
			<div class="row">
				<div class="product col-sm-3 col-md-3 col-lg-3 well">
					<img src="/img/tutor1.jpg" alt="Tutor 1" width="155" class="img-circle img-responsive">
					<p class="text-center">Tutor 1</p>
				</div>
				<div class="product col-sm-3 col-md-3 col-lg-3 well">
					<img src="/img/tutor2.jpg" alt="Tutor 2" width="155" class="img-circle img-responsive">
					<p class="text-center">Tutor 2</p>
				</div>
				<div class="product col-sm-3 col-md-3 col-lg-3 well">
					<img src="/img/tutor3.jpg" alt="Tutor 3" width="155" class="img-circle img-responsive">
					<p class="text-center">Tutor 3</p>
				</div>
				<div class="product col-sm-3 col-md-3 col-lg-3 well">
					<img src="/img/tutor1.jpg" alt="Tutor 1" width="155" class="img-circle img-responsive">
					<p class="text-center">Tutor 4</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection