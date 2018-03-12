
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Leaderboard</title>
  <style>

      @font-face { font-family:assets/images/Pokemon; src: url('assets/images/Pokemon.ttf'); }
    
    body,html{
      height: 100%;
      overflow-x: hidden;
        }

      .panel-heading:hover, .panel-heading:active, .panel-heading:not([class*="collapsed"]) {
      background-color: #5c6bc0;
      height:40px;
      padding: 0px;
}

.bg{
    background-image: url("assets/images/wallhaven-172211.jpg");
    width: 100%;
    height:100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.heading{
  font-family: Pokemon Solid; 
  font-size:6em; 
  letter-spacing: 5px;
}
.container{
  padding-top:30px;
}
#shadow {
  padding: 10px;
  }
#shadow:hover {
  -moz-box-shadow: 0 0 5px rgba(0,0,0,0.5);
  -webkit-box-shadow: 0 0 5px rgba(0,0,0,0.5);
  box-shadow: 0 0 5px rgba(0,0,0,1.0);
  }
.panel-group{
  background-color: rgba(0,0,0,0.1);
}
.birds{
  position:fixed;
  animation-name: bird;
  animation-duration: 25s;
  animation-iteration-count: infinite;
  animation-timing-function: steps(30);
  max-height:30px;
  max-width: 70px; 
  will-change:background-position;
  padding-top:50px;
}
.colo{
  color: white;
  font-size: 15px;
}
@keyframes bird {
    0%   { left:1000px; right:0px; top:0px;}
    25%  { right:250px; left: 750px; top:0px;}
    50%  { right:500px; left: 500px; top:0px;}
    75%  { right:750px; left: 250px; top:0px;}
    100% {left: 0px; right:2000px; top:0px;}
}
@media screen and (min-width: 768px) and (max-width: 969px)
{
  .bg{
    background: url("assets/images/wallhaven-172211.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
  .birds{
    padding-top: 40px;
    position: fixed;
  }
  .heading{
    font-size: 6em;
    letter-spacing: 5px;
     margin: 0 2%;
  }
  
}
@media screen and (min-width: 100px) and (max-width: 768px){
  .bg{
    background: url("assets/images/wallhaven-172211.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
  .birds{
    padding:10px;
    position: fixed;
  }
  .heading{
    font-size: 5em;
    letter-spacing: 5px;
    margin: 0 2%;
  }
}
.row{
  width: 110%;
}
.colo{
  display: inline-block;
  width: 20%;
  margin: 0 2% 0 2%;
}

</style>
</head>
<body class="bg">
<a href="home.php"><span class="glyphicon glyphicon-home" style="font-size: 260%;color:#ffffff; margin-left: 2%; margin-top: 3%; z-index: 20"></span></a>
<h1 align="center" class="heading" >Leaderboard</h1>
<div class="birds"> <img src="assets/images/bird.gif"></div>
<div class="container">
<div class="row">
<div class="col-sm-1 col-xs-2"></div>
<div class="col-sm-8 col-xs-4">
<div class="row">
<div class="col-sm-1 col-xs-1"></div>
<div class="col-sm-11 col-xs-11">
  <div class="panel panel-default ">
      <div class="panel-heading" id="shadow">
      <div class="row">
        <div class="colo">NAME </div>
        <div class="colo">ZEALID</div>
        <div class="colo" style="margin-right: 0;">POSITION</div>
        <div class="colo" style="margin-right: 0;">QUESTION</div>
     </div>
   </div>
   </div>
  <?php
require 'connect.php';
  $query_run1=@mysqli_query($conn,"select * from users order by number desc, datetime asc");
if(@mysqli_num_rows($query_run1)>0)
{$i=0;
    while($row1=@mysqli_fetch_assoc($query_run1))
    {
$i++;

?>
    <div class="panel panel-default ">
      <div class="panel-heading" id="shadow">
      <div class="row">
        <div class="colo" ><?php echo $row1['username']?> </div>
        <div class="colo"><?php echo $row1['zealid']?></div>
        <div class="colo" style="margin-right: 0;"><?php echo $i?></div>
        <div class="colo"><?php echo $row1['number']?></div>

     </div>
   </div>
   </div>

<?php
}}?>

   
</div>
<div class="col-sm-1 col-xs-1"></div>
    </div>
    </div>
    <div class="col-sm-2 col-xs-4"></div>
    </div>
    </div>
</div>
</body>
</html>