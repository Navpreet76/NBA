<?php include 'header.php' ?>
<!DOCTYPE html>
<html>
<head>
<title>Nba Home page</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="stylesheets/styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $("#button1").click(function(){
    $("#div1").fadeToggle();
    $("#div2").fadeToggle("slow");
    $("#div3").fadeToggle();
    $("#div4").fadeToggle("slow");
    $("#div5").fadeToggle();
    $("#div6").fadeToggle();
    $("#div7").fadeToggle();
    $("#div8").fadeToggle("slow");
    $("#div9").fadeToggle();
    $("#div10").fadeToggle("slow");
    $("#div11").fadeToggle();
    $("#div12").fadeToggle();
    $("#div13").fadeToggle("slow");
    $("#div14").fadeToggle();
    $("#div15").fadeToggle();


  });
  $("#button2").click(function(){
    $("#div16").fadeToggle();
    $("#div17").fadeToggle("slow");
    $("#div18").fadeToggle(3000);
    $("#div19").fadeToggle("slow");
    $("#div20").fadeToggle("3000");
    $("#div21").fadeToggle();
    $("#div22").fadeToggle();
    $("#div23").fadeToggle("slow");
    $("#div24").fadeToggle(3000);
    $("#div25").fadeToggle("slow");
    $("#div26").fadeToggle("3000");
    $("#div27").fadeToggle();
    $("#div28").fadeToggle("slow");
    $("#div29").fadeToggle("3000");
    $("#div30").fadeToggle();
  });
}); 
</script>
</head>
<body>
<div id="wrapper">
  <div class="col-md-4">
  <hr>
    <h4 class="text-warning">Eastern Conference</h4>

    <button id="button1" class="btn btn-info">Toggle/Teams</button><br><br>
    <div id="div1" style="width:80px;height:80px;background-color:red;"><a href="celtics.php"><img src="images/celtics.png" alt="celtics" height="80" width="80"></a></div><br>
    <h4 class="text-success">Boston Celtics</h4>
    <hr>
    <div id="div2" style="width:80px;height:80px;background-color:green;"><a href="raptors.php"><img src="images/raptors.jpg" alt="raptors" height="80" width="80"></a></div><br>
    <h4 class="text-danger">Toronto Raptors</h4>
    <hr>
    <div id="div3" style="width:80px;height:80px;background-color:blue;"><a href="cavaliers.php"><img src="images/cavaliers_logo.jpg" alt="cavs" height="80" width="80"></a></div><br>
    <h4 class="text-danger">Cleveland Cavaliers</h4>
    <hr>
    <div id="div4" style="width:80px;height:80px;background-color:red;"><a href="bulls.php"><img src="images/bulls.jpg" alt="bulls" height="80" width="80"></a></div><br>
    <h4 class="text-danger">Chicago Bulls</h4>
    <hr>
    <div id="div5" style="width:80px;height:80px;background-color:green;"><a href="heat.php"><img src="images/miami_heat.png" alt="heat" height="80" width="80"></a></div><br>
    <h4 class="text-success">Miami Heat</h4>
    <hr>
    <div id="div6" style="width:80px;height:80px;background-color:blue;"><a href="wizards.php"><img src="images/wizards_logo.png" alt="bulls" height="80" width="80"></a></div><br>
    <h4 class="text-primary">Washington Wizards</h4>
    <hr>
    <div id="div7" style="width:80px;height:80px;background-color:blue;"><a href="bucks.php"><img src="images/milwaukee_logo.png" alt="bucks" height="80" width="80"></a></div><br><h4 class="text-success">Milwaukee Bucks</h4>
    <hr>
    <div id="div8" style="width:80px;height:80px;background-color:blue;"><a href="pacers.php"><img src="images/pacers_logo.png" alt="pacers" height="80" width="80"></a></div><br><h4 class="text-warning">Indiana Pacers</h4><hr>
    <div id="div9" style="width:80px;height:80px;background-color:blue;"><a href="sixers.php"><img src="images/philadelphia_logo.png" alt="76ers" height="80" width="80"></a></div><br><h4 class="text-primary">Philadelphia 76ers</h4><hr>
    <div id="div10" style="width:80px;height:80px;background-color:blue;"><a href="pistons.php"><img src="images/detroit_pistons_logo.png" alt="pistons" height="80" width="80"></a></div><br><h4 class="text-primary">Detroit Pistons</h4><hr>
    <div id="div11" style="width:80px;height:80px;background-color:blue;"><a href="knicks.php"><img src="images/knicks_logo.jpg" alt="knicks" height="80" width="80"></a></div><br><h4 class="text-warning">New York Knicks</h4><hr>
    <div id="div12" style="width:80px;height:80px;background-color:blue;"><a href="hornets.php"><img src="images/charlotte_hornets.png" alt="hornets" height="80" width="80"></a></div><br><h4 class="text-info">Charlotte Hornets</h4><hr>
    <div id="div13" style="width:80px;height:80px;background-color:blue;"><a href="nets.php"><img src="images/brooklyn_nets.png" alt="nets" height="80" width="80"></a></div><br><h4>Brooklyn Nets</h4><hr>
    <div id="div14" style="width:80px;height:80px;background-color:blue;"><a href="magic.php"><img src="images/orlando_magic.png" alt="magic" height="80" width="80"></a></div><br><h4>Orlando Magic</h4><hr>
    <div id="div15" style="width:80px;height:80px;background-color:blue;"><a href="hawks.php"><img src="images/Atlanta-Hawks-Logo.gif" alt="bulls" height="80" width="80"></a></div><br><h4 class="text-danger">Atlanta Hawks</h4><hr>
    
</div> 
<div class="col-md-4">
  <h1 class="text-center text-danger">The League</h1>
</div>  
<div class="col-md-4">
<hr>
    <h4 class="text-warning">Western Conference</h4>
    <button id="button2" class="btn btn-info">Toggle/Teams</button><br><br>

    <div id="div16" style="width:80px;height:80px;background-color:red;"><a href="warriors.php"><img src="images/warriors.png" alt="warriors" height="80" width="80"></a></div><br>
    <h4 class="text-warning">Golden State Warriors</h4>
    <hr>
    <div id="div17" style="width:80px;height:80px;background-color:green;"><a href="rockets.php"><img src="images/houston_rockets.png" alt="rockets" height="80" width="80"></a></div><br>
    <h4 class="text-danger">Houston Rockets</h4>
    <hr>
    <div id="div18" style="width:80px;height:80px;background-color:blue;"><a href="spurs.php"><img src="images/spurs.png" alt="spurs" height="80" width="80"></a></div><br>
    <h4>San Antonio Spurs</h4>
    <hr>
    <div id="div19" style="width:80px;height:80px;background-color:red;"><a href="timberwolves.php"><img src="images/Minnesota_Timberwolves.png" alt="wolves" height="80" width="80"></a></div><br>
    <h4 class="text-success">Minnesota Timberwolves</h4>
    <hr>
    <div id="div20" style="width:80px;height:80px;background-color:green;"><a href="thunder.php"><img src="images/thunder_logo.png" alt="thunder" height="80" width="80"></a></div><br>
    <h4 class="text-primary">Oklahoma City Thunder</h4>
    <hr>
    <div id="div21" style="width:80px;height:80px;background-color:blue;"><a href="pelicans.php"><img src="images/pelicans_logo.png" alt="pelicans" height="80" width="80"></a></div><br>
    <h4 class="text-primary">New Orleans Pelicans</h4>
    <hr>
    <div id="div22" style="width:80px;height:80px;background-color:blue;"><a href="blazers.php"><img src="images/trail_blazers.gif" alt="blazers" height="80" width="80"></a></div><br>
    <h4 class="text-danger">Portland Trailblazers</h4>
    <hr>
    <div id="div23" style="width:80px;height:80px;background-color:blue;"><a href="nuggets.php"><img src="images/nuggets.png" alt="nuggets" height="80" width="80"></a></div><br>
    <h4 class="text-warning">Denver Nuggets</h4>
    <hr>
    <div id="div24" style="width:80px;height:80px;background-color:blue;"><a href="clippers.php"><img src="images/clippers.png" alt="clippers" height="80" width="80"></a></div><br>
    <h4 class="text-info">Los Angeles Clippers</h4>
    <hr>
    <div id="div25" style="width:80px;height:80px;background-color:blue;"><a href="jazz.php"><img src="images/jazz_logo.png" alt="jazz" height="80" width="80"></a></div><br>
    <h4>Utah Jazz</h4>
    <hr>
    <div id="div26" style="width:80px;height:80px;background-color:blue;"><a href="lakers.php"><img src="images/lakers.png" alt="lakers" height="80" width="80"></a></div><br>
    <h4 class="text-warning">Los Angeles Lakers</h4>
    <hr>
    <div id="div27" style="width:80px;height:80px;background-color:blue;"><a href="grizzlies.php"><img src="images/Memphis-Grizzlies-Logo.jpg" alt="grizzlies" height="80" width="80"></a></div><br>
    <h4 class="text-primary">Memphis Grizzlies</h4>
    <hr>
    <div id="div28" style="width:80px;height:80px;background-color:blue;"><a href="suns.php"><img src="images/suns.png" alt="suns" height="80" width="80"></a></div><br>
    <h4 class="text-danger">Phoenix Suns</h4>
    <hr>
    <div id="div29" style="width:80px;height:80px;background-color:blue;"><a href="mavericks.php"><img src="images/mavericks.jpg" alt="mavericks" height="80" width="80"></a></div><br>
    <h4 class="text-info">Dallas Mavericks</h4>
    <hr>
    <div id="div30" style="width:80px;height:80px;background-color:blue;"><a href="kings.php"><img src="images/kings.png" alt="kings" height="80" width="80"></a></div><br>
    <h4>Sacramento Kings</h4>
    <hr>
</div>

<?php include 'footer.php' ?>

</body>
</html>