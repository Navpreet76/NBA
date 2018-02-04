<?php include 'header.php' ?>
<!DOCTYPE html>
<html>
<head>
<title>Denver Nuggets Page</title>
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
				<p>Center: Nikola Jokic</p>
				<p>Power Forward: Kenneth Faried</p>
				<p>Small Forward: Wilson Chandler</p>
				<p>Shooting Guard: Gary Harris</p>
				<p>Point Guard: Jamal Murray</p>
			</div>
		</div>
		<div class="col-md-4">
			<img src="images/nuggets.png" alt="nuggets" height="400" width="80%">
		</div>
		<div class="col-md-4">
			<div id="flip2"><h4>Toggle/Reserves</h4></div>
			<div id="panel2">
				<p>Center: Jon Doe</p>
				<p>Power Forward: Chuck Norris</p>
				<p>Small Forward: Jean Claude Van Damme</p>
				<p>Shooting Guard: Michael Jordan</p>
				<p>Point Guard: Bruce Lee</p>
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
		<h1 class="text-danger">Denver Nuggets Starters</h1>
		<div class="col-md-2">
			<div class="thumbnail">
				<a href="images/lebron_profile.jpg" target="_blank">
					<img src="images/lebron_profile.jpg" alt="lebronprofile" style="width:70%;height:190px">
					<div class="caption">
						<p>Lebron James</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-2">
			<div class="thumbnail">
				<a href="images/tris_thompson.jpg" target="_blank">
					<img src="images/tris_thompson.jpg" alt="tris_thompson" style="width:70%;height:160px">
					<div class="caption">
						<p>Tristan Thompson</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-2">
			<div class="thumbnail">
				<a href="images/jr_smith.jpg" target="_blank">
					<img src="images/jr_smith.jpg" alt="jr_smith" style="width:70%;height:190px">
					<div class="caption">
						<p>JR Smith</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-2">
			<div class="thumbnail">
				<a href="images/kevin_love.jpg" target="_blank">
					<img src="images/kevin_love.jpg" alt="kevin_love" style="width:70%;height:190px">
					<div class="caption">
						<p>Kevin Love</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-2">
			<div class="thumbnail">
				<a href="images/isaiah_thomas.jpg" target="_blank">
					<img src="images/isaiah_thomas.jpg" alt="isaiah_thomas" style="width:70%;height:190px">
					<div class="caption">
						<p>Isaiah Thomas</p>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="col-md-12">
	<hr>
		<h4 class="text-center"><a href="http://www.denvernuggets.com"><button class="btn btn-warning">Visit Denver Nuggets Website</button></a></h4>
	</div>
</div>

</body>
</html>