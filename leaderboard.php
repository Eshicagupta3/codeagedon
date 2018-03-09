<?php
@session_start();
require 'connect.php';
if($_SESSION['luser'])
{}
else{
    header('location: login.php');
}?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial scale=1 shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Leaderboard</title>
  <style>

      @font-face { font-family:Pokemon; src: url('Pokemon.ttf'); }
    
    body,html{
      height: 100%;
      overflow-x: hidden;
    }
      .panel-heading1:hover, .panel-heading1:active, .panel-heading1:not([class*="collapsed"]) {
  background-color: #5c6bc0;
  height:60px;
  word-spacing: 150px;
  font-family:Pokemon Solid;
   letter-spacing: 3px;
}
     .panel-heading2:hover, .panel-heading2:active, .panel-heading2:not([class*="collapsed"]) {
  background-color:#ef9a9a;
  height:60px;
 
  font-family:Pokemon Solid;
   letter-spacing: 3px;
}

.bg{
    background-image: url("wallhaven-172211.jpg");
    width: 100%;
    height:100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-size: 100%;
    position:absolute;
    z-index:-1;
}

.container{
              width: 700px;
              position:relative;
              z-index:2;
              padding-top: 0px;
              left: 10px;
              right: 200px; 
            
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
  position: relative;
  animation-name: bird;
  animation-duration: 25s;
  animation-iteration-count: infinite;
  animation-timing-function: steps(30);
  z-index:-1;
  max-height:30px;
  max-width: 70px; 
  will-change:background-position;
  padding-top: 0px;
}
@keyframes bird {
    0%   { left:1000px; right:0px; top:0px;}
    25%  { right:250px; left: 750px; top:0px;}
    50%  { right:500px; left: 500px; top:0px;}
    75%  { right:750px; left: 250px; top:0px;}
    100% {left: 0px; right:2000px; top:0px;}
}

</style>
</head>
<body>

<div class="bg"></div>

<h1 align="center" style="font-family: Pokemon Solid; font-size: 70px; letter-spacing: 5px">Leaderboard</h1>
<div class="birds"> <img src="assets/images/bird.gif"></div>
<div class="container">

    <div class="panel panel-default ">
      <div class="panel-heading1" id="shadow" style="font-size: 20px;"><span>Name Position Zeal_id</span> </div>
     </div>
   <?php
require 'connect.php';
  $query_run1=@mysqli_query($conn,"select * from users order by number desc");
if(@mysqli_num_rows($query_run1)>0)
{$i=0;
    while($row1=@mysqli_fetch_assoc($query_run1))
    {
$i++;

?>
  
    <div class="panel panel-default">
      <div class="panel-heading2" id="shadow" style="font-size: 20px;"><?php echo $row1['username']."  ".$i." "?><?php echo $row1['number'] ?></div>
      </div>
<?php
}}?>    
    </div>
    </div>
</div>
</body>
</html