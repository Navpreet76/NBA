<?php include 'header.php' ?>
<!DOCTYPE html>
<html>
<head>
<title>Toronto Raptors Page</title>
<script>
$(document).ready(function(){
	$("#flip").click(function(){
		$("#panel").slideToggle("slow");
	});
	$("#flip2").click(function(){
		$("#panel2").slideToggle("slow");
	});
});
</script>
<style>
#panel, #panel2 {
	padding: 50px;
	text-align: center;
	background-color: orange;
	border: 1px solid #c3c3c3;
	display: none;
	
}
#flip {
	padding: 5px;
	text-align: center;
	background-color: lightblue;
	border: 1px solid black;

}
#flip2 {
	padding: 5px;
	text-align: center;
	background-color: lightblue;
	border: 1px solid black;
}
</style>
</head>
<body>
<div id="wrapper">
	<div class="col-md-12">
		<div class="col-md-4">
			<div id="flip"><h4>Toggle/Starters</h4></div>
			<div id="panel">
				<p>Center: John Doe</p>
				<p>Power Forward: John Doe</p>
				<p>Small Forward: John Doe</p>
				<p>Shooting Guard: John Doe</p>
				<p>Point Guard: Allen Iverson</p>
			</div>
		</div>
		<div class="col-md-4">
			<img src="images/raptors.jpg" alt="raptos" height="400" width="80%">
		</div>
		<div class="col-md-4">
			<div id="flip2"><h4>Toggle/Reserves</h4></div>
			<div id="panel2">
				<p>Center: John Doe</p>
				<p>Power Forward: John Doe</p>
				<p>Small Forward: John Doe</p>
				<p>Shooting Guard: John Doe</p>
				<p>Point Guard: Allen Iverson</p>
			</div>
		</div>
		<div class="col-md-12">
			<hr>	
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-3">
			<h4>Games Played</h4>
			<h2 class="text-info">80</h2>
		</div>
		<div class="col-md-3">
			<h4>Wins</h4>
			<h2 class="text-success">41</h2>
		</div>
		<div class="col-md-3">
			<h4>Losses</h4>
			<h2 class="text-danger">41</h2>
		</div>
		<div class="col-md-3">
			<h4>Win Percentage</h4>
			<h2 class="text-info">.500</h2>
		</div>
	</div>
	<div class="col-md-12">
		<hr>
		<div class="col-md-4">
		<h4 class="text-danger">Upcoming Games</h4>
		<ul>
			<li>1/19 at San Antonio <div id="div18" style="width:80px;height:80px;background-color:blue;"><a href="spurs.php"><img src="images/spurs.png" alt="spurs" height="80" width="80"></a></div><br></li>
			<li>1/21 at Phoenix <div id="div18" style="width:80px;height:80px;background-color:blue;"><a href="spurs.php"><img src="images/suns.png" alt="spurs" height="80" width="80"></a></div><br></li>
			<li>1/22 Warriors <div id="div18" style="width:80px;height:80px;background-color:blue;"><a href="spurs.php"><img src="images/warriors.png" alt="spurs" height="80" width="80"></a></div><br></li>
			<li>1/25 at Miami <div id="div18" style="width:80px;height:80px;background-color:blue;"><a href="spurs.php"><img src="images/miami_heat.png" alt="spurs" height="80" width="80"></a></div><br></li>
			<li>1/27 Oklahoma City <div id="div18" style="width:80px;height:80px;background-color:blue;"><a href="spurs.php"><img src="images/thunder_logo.png" alt="spurs" height="80" width="80"></a></div><br></li>
		</ul>
	</div>
	</div>

	<div class="col-md-12">
	<hr>
		<h4 class="text-center"><a href="http://www.torontoraptors.com"><button class="btn btn-danger">Visit Toronto Raptors Website</button></a></h4>
	</div>
</div>

</body>
</html>