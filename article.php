<?php 
include('header.php') ; 
?>

<div class="container" >
  <div class="row">
	<div class="col-sm-9">

	<div class="card mb-3">
	<img src="img/article.jpg" class="card-img-top" alt="article picture" style="height:250px;">
	<div class="card-body">
	<h5 class="card-title">Card title</h5>
	<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	</div>
	</div>

	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
	<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
	</ol>

		<div class="carousel-inner">
		<div class="carousel-item active" >
		<img src="article pics/pic1.jpeg" class="d-block w-100" alt="an article" style="height=100px;">
		<div class="carousel-caption d-none d-md-block">
		<h5>First slide label</h5>
		<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
		</div>
		</div>
		</div>

	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
	</a>
	</div>

	</div>

	<div class="col-sm-3">
	<div class="card" style="width: 13rem;float:right;">
	<img src="img/profile.png" class="card-img-top" alt="writer's photo">
	<div class="card-body">
	<p class="card-text">article writer name</p>
	<p class="card-text">age</p>
	<p class="card-text">prefered football club</p>
	<p class="card-text">rank</p>
	</div>
	</div>
	</div>

  </div>
</div>

<?php include('footer.php') ; ?>