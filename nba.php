<?php include 'header.php' ?>
<!DOCTYPE html>
<html>
<head>
<title>NBA Home Page</title>
<script>
$(document).ready(function(){
	$(".btna").click(function(){
		var div = $("#div1");
		$("#div1").animate({left: '340px'}, "slow");
		$("#div1").animate({fontSize: '3em', opacity: 0.7}, "slow");
	});
	$(".btnb").click(function(){
		var div = $("#div2");
		$("#div2").animate({right: '280px'}, 'slow');
		$("#div2").animate({opacity: 0.7}, "slow");
	});
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
	padding: 10px;
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
	<div class="col-md-3">
			<div id="flip"><h4>Toggle/Michael Jordan Stats</h4></div>
			<div id="panel">
				<p>Total Points: 32292</p>
				<p>Points/game: 30.1</p>
				<p>Rebounds/game: 6.2</p>
				<p>Assists/game: 5.3</p>
				<p>Field Goal %: 49.7</p>
			</div>
	</div>
	<div class="col-md-6">
		<h1 class="text-info text-center">The greatest ever debate?</h1>
		<h4 class="text-warning text-center"><br><button class="btna btn-danger">Michael Jordan</button></h4>
		<h2 class="text-danger text-center">VS</h2>
		<h4 class="text-center"><button class="btnb btn-danger">Lebron James</button></h4>
	</div>
	<div class="col-md-3">
		<div id="flip2"><h4>Toggle/Lebron James Stats</h4></div>
			<div id="panel2">
				<p>Total Points: 30072</p>
				<p>Points/game: 27.1</p>
				<p>Rebounds/game: 7.3</p>
				<p>Assists/game: 7.1</p>
				<p>Field Goal %: 50.3</p>
			</div>
	</div>
	</div>
	<div class="col-md-12">
		<hr>
	</div>
	<div id="div1" class="col-md-4">
		<img  class="imgnba" src="images/jordan.jpg" alt="mj" width="70%" height="400">
	</div>
	<div class="col-md-4">
		<h1 class="text-primary">Legends of the Game</h1>
	</div>
	<div id="div2" class="col-md-4">
		<img class="imgnba" src="images/nba2.jpg" alt="nbateams" width="70%" height="400">
	</div>
	
	<div class="col-md-12">
		<hr>
		<h4 class="text-center"><a href="index.php"><button class="btnc btn-info">The National Basketball Association</button></a></h4>
	</div>
	<div class="col-md-12">
		<hr>
	</div>
	
<?php include 'footer.php' ?>
</div>

</body>
</html>