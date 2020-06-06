<?php include('header.php') ?>
	<!-- search for a transfer deal form-->
<script type="text/javascript" src="countries.json"></script>
<script type="text/javascript" src="dynamic.js"></script>

<link rel="stylesheet" type="text/css" href="transfer.css">
<div class="publicity">
	here is your ad
</div>
<form>
  <div class="form-row">

    <div class="col-md-3 mb-3">
      <label for="validationServer01">Player name</label>
      <input type="text" class="form-control is-valid">
    </div>

   <div class="col-md-3 mb-3">
      <label>nationality</label>
      <select class="custom-select is-valid">
      <option value="">Choose...</option>
      </select>
  </div> 

  <div class="col-md-5 mb-3">
	<label for="customRange3">season</label>
	<select class="custom-select" required>
      <option value="0">...</option>
      <option value="1">2019/2020</option>
      <option value="2">2018/2019</option>
      <option value="3">2017/2018</option>
      <option value="4">2016/2017</option>
    </select>
	</div>

  </div>
  <button class="btn btn-primary" type="submit" style="margin-left: 5px; padding-right: 15px;">filter   </button>
</form>
<br>

	<!-- transfer deals detail-->
<br>

<table style="width:80%">
	<tr>
		<th></th>
		<th>Player</th>
		<th>season</th>
		<th>nationality</th>
		<th>left</th>
		<th>joined</th>
	</tr>
	<tr>
		<td><img src="neymar.jpg" height="90px" width="80px"></td></td>
		<td>Neymar
		<td>2016/2017</td>
		<td>Brazil</td>
		<td><img height="40px" width="40px" src="icon/football teams/Barcelona.png">  fc Barcelone</td>
		<td><img height="40px" width="40px" src="icon/football teams/paris-saint-germain.png">  paris saint germain</td>
	</tr>
</table>

<?php include('footer.php') ; ?>