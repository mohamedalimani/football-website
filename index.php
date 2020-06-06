<?php include('header.php') ?>

<div class="container">

<div class="alert alert-danger alert-dismissible fade show" role="alert" style="height:45px;" id="bnbox">
<div style="width: 120px;float:left;"><strong>Breaking news :</strong>
</div>
<label class="moveMe">
 You should check in on some of those fields below.
</label>
</div>

<div class="row">

<div class="col-sm">

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">

  <div class="carousel-item active">
  <img src="carous/top-eng.jpg" class="d-block w-100" alt="top team in england" height="450px" width="70px">
  <div class="carousel-caption d-none d-md-block">
  <h5>top PL formation</h5>
  </div>
  </div>

  <div class="carousel-item">
  <img src="carous/top-fra.jpg" class="d-block w-100" alt="top team in france" height="450px" width="70px">
  <div class="carousel-caption d-none d-md-block">
  <h5>top ligue 1 formation</h5>   
  </div>
  </div>

  <div class="carousel-item">
  <img src="carous/top-ital.jpg" class="d-block w-100" alt="top team in italy" height="450px" width="70px">
  <div class="carousel-caption d-none d-md-block">
  <h5>top calcio formation</h5>
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

<div class="col-sm">

  <div class="card" style="width: 18rem;">
  <div class="card-body">
  <h5 class="card-title">article name</h5>
  <h6 class="card-subtitle mb-2 text-muted">by : writer name</h6>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <a href="article.php" class="card-link">read more</a>
  <a href="#" class="card-link"><img height="50px" width="50px" src="icon/football teams/real-madrid.png"></a>
  </div>
  </div>
  <br>
  <br>

  <div class="card" style="width: 18rem;">
  <div class="card-header" id="testMe">
  upcoming tournaments 
  </div>
  <ul class="list-group list-group-flush">
  <li class="list-group-item"><img src="icon/comps/caf.png" style="width:35px; height:35px;">
     fifa world cup 2022 Qatar + date here</li>
  <li class="list-group-item"><img src="icon/comps/fifa wc.png" style="width:35px; height:35px;">
     EURO 2021 + date here</li>
  <li class="list-group-item"><img src="icon/comps/uefa cl.png" style="width:35px; height:35;">   
     CAF 2020 + date here</li>
  </ul>
  </div>

</div>

</div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include('footer.php') ; ?>
