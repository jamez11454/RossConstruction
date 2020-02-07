<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RossCo Construction</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light stick-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="#"><img src={{url('/img/logo.jpg')}} width="" height="" alt=""/></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Team</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contact Us</a>
				</li>

	</div>
</nav>

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src={{url('/img/roofing-1.jpg')}} width="" height="" alt=""/>
			<div class="carousel-caption">
				<h1 class="display-2">RossCo</h1>
				<h3>Construction services</h3>
				<button type="button" class="btn btn-outline-light btn-lg">View Gallery</button>
				<button type="button" class="btn btn-primary btn-lg">Get Booked in</button>
			</div>
		</div>
		<div class="carousel-item">
			<img src={{url('/img/roofing-2.jpg')}} width="" height="" alt=""/>
		</div>
		<div class="carousel-item">
			<img src={{url('/img/roofing-3.jpg')}} width="" height="" alt=""/>
		</div>
	</div>
</div>


<!--- Jumbotron -->
<div class="container-fluid">
	<div class="row jumbotron">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<p class="lead">this would be a punchy bit of information regarding your service</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
			<a href="#"><button type="button" class="btn btn-outline-secondary">services</button></a>
		</div>
	</div>
</div>

<!--- Welcome Section -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">built with ease.</h1>
		</div>
		<hr>
		<div class="col-12">
			<p class="lead">welcome to my website {{ $name }}</p>
		</div>
	</div>
</div>
<hr class="my-4">

<!--- Two Column Section -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">
			<h2>if you build it</h2>
			<p>here is some information to fill the gap here is some information to fill the gap here is some information to fill the gap here is some information to fill the gap </p>
			<p>some more information to fill the gap </p>
			<p>even more information to fill the gap</p>
			<br>
			<a href="#" class="btn btn-primary">learn more</a>
		</div>
		<div class="col-lg-6">
			<img class="img-fluid" src={{url('/img/desk.png')}}>
		</div>
	</div>
</div>
<hr class="my-4">
<!--- Fixed background -->
<figure>
	<div class="fixed-wrap">
		<div id="fixed">
		</div>
	</div>
</figure>
 
<!--- Meet the team -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">meet the team</h1>
		</div>
		<hr>
	</div>
</div>

<!--- Cards -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src={{url('/img/team1.png')}}>
					<div class="card-body">
						<h4 class="card-title">first last</h4>
						<p class="card-text"> this is some text </p>
						<a href="#" class="btn btn-secondary"> see profile </a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src={{url('/img/team2.png')}}>
					<div class="card-body">
						<h4 class="card-title">first last</h4>
						<p class="card-text"> this is some text </p>
						<a href="#" class="btn btn-secondary"> see profile </a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src={{url('/img/team3.png')}}>
					<div class="card-body">
						<h4 class="card-title">first last</h4>
						<p class="card-text"> this is some text </p>
						<a href="#" class="btn btn-secondary"> see profile </a>
				</div>
			</div>
		</div>
	</div>
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-sm-12 col-lg-6">
			<h2>if you want it built, we can do it.</h2>
			<p>here is some information to fill the gap here is some information to fill the gap here is some information to fill the gap here is some information to fill the gap </p>
			<p>some more information to fill the gap </p>
			<br>
		</div>
		<div class="col-sm-12 col-lg-6">
			<img class="img-fluid" src={{url('/img/desk-2.jpg')}}>
		</div>
	</div>
</div>
<hr class="my-4">

<!--- Connect -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-12">
			<h2>connect</h2>
		</div>
		<div class="col-12 social padding">
			<a href="#"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-google-plus-g"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
	</div>
</div>

<!--- Footer -->
<footer>
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-md-4">
				<hr class="light">
				<h5>our hours</h5>
				<hr class="light">
				<p>stuff</p>
				<p>stuff2</p>
				<p>stuff3</p>
				<p>stuff4</p>
			</div>
			<div class="col-md-4">
				<hr class="light">
				<h5>our hours</h5>
				<hr class="light">
				<p>stuff</p>
				<p>stuff2</p>
				<p>stuff3</p>
			</div>
			<div class="col-md-4">
				<hr class="light">
				<h5>service area</h5>
				<hr class="light">
				<p>stuff</p>
				<p>stuff2</p>
				<p>stuff3</p>
			</div>
			<div class="col-12 text-center">
				<hr class="light">
				<h5>something</h5>
			</div>
</footer>



</body>
</html>