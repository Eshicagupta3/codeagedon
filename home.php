<?php
@session_start();
if(isset($_COOKIE['user']) and (isset($_COOKIE['pass'])) and (isset($_COOKIE['username'])))
{
 
$user=$_COOKIE['user'];
$pass=$_COOKIE['pass'];
$username=$_COOKIE['username'];
$_SESSION['luser']=$user;
$_SESSION['lusername']=$username;
setcookie('user','',time()-3600,"/");
setcookie('pass','',time()-3600,"/");
setcookie('username','',time()-3600,"/");
setcookie('user',$user,time()+60*60*7,"/");
setcookie('pass',$pass,time()+60*60*7,"/");
setcookie('username',$username,time()+60*60*7,"/");
header('location: game.php?');
}
else if(isset($_COOKIE['auser']))
{
header('location: try.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Home</title>

<style>
body,html{
    max-height: 100%;
    min-height: 100%;
}
.bg{
  background-image: url("assets/images/i6.jpg");
  background-repeat: no-repeat;
  background-position: center;
  background-clip: border-box;
  background-size:cover;
  overflow-x: hidden;
  overflow-y: hidden; 
  height: 90%;
  width: 90%;
}
@media screen and (max-width: 969px)
{
  .bg{
    background-size:cover;
    width: 90% ;
    height: 90%;
    background-repeat: no-repeat;
    background-position: center;
    
  }
}
#img1{
   position: fixed;
    margin-left: -11%;
    bottom: 130px;
    width:30%; 
    height:24%;
    z-index: 3;
}
#img2{
   position: fixed;
     margin-left: -13%;
    bottom: 34px;
    z-index: 11;
    width:30%; 
    height:24%;
}
#img3{
   position: fixed;
    margin-left: -11%;
    bottom: -40px;
    width:30%; height:24%;
    z-index:12;
}
#img4{
   position: fixed;
    margin-left: -1%;
    bottom: -100px;
    width:150px; height:640px ;
}
.i{
    width: 25%;
    height: 40%;
    bottom: 0;
    left:0;
    position: fixed;
}
.shadowfilter {
    -webkit-filter: drop-shadow(0px 0px 0px rgba(255,255,255,0.80));
    -webkit-transition: all 0.5s linear;
    -o-transition: all 0.5s linear;
    transition: all 0.5s linear;
    
}
.shadowfilter:hover {
    -webkit-filter: drop-shadow(0px 0px 8px rgba(47,79,79, 0.8));
}
.tw{
    position: fixed;
    top: 0px;
    padding-left: 1000px;
    right: 35px;
    z-index: 1;
}
.imagecode{
    padding-left: 15%;
    width: 100%;
    height:90%;
}

 @media only screen and (max-width: 768px) and (min-width: 100px)
 {
    
  .bg{
    background-size:cover;
    width: 90% ;
    height: 90%;
    background-repeat: no-repeat;
    background-position: center;
  }
    #img2{
margin-left: -25%;
width: 50%;
height: 20%; 
}
#img3{
margin-left: -20%;
width: 50%;
height: 20%;
}
#img1{
margin-left: -20%;
width: 50%;
height: 20%;
}
#img4{
    margin-left: 25%
height:10%;
width: 15%;
}
.tw{
    top:30%;
    right: 0%;
 }
  .imagecode{
   padding-left: 15%;
   margin-top: 5%;
     width:110%;
     height:45vh;
}
}
</style>
</head>
<body class="bg">
    <div align="center">
    <img src="assets/images/image4.png" class="imagecode"></div>
    <div class="row">
    <div class="col-sm-5 col-xs-4"></div>
    <div class="col-sm-3 col-xs-4">
    <div class="col-sm-3 col-xs-2"></div>
    <div class="col-sm-6 col-xs-4">
    <a href="login.php"><img src="assets/images/wood32.png" id="img2" class="shadowfilter"></a>
    <img src="assets/images/img.png" id="img4" >
    <a href="signup.php"><img src="assets/images/wood31.png" id="img1" class="shadowfilter"></a>
    <a href="leaderboard.php"><img src="assets/images/wood34.png" id="img3" class="shadowfilter"></a></div><div class="col-sm-3 col-xs-2"></div>
</div>
<div class="col-sm-4 col-xs-3"></div>
<div class="col-sm-4 col-xs-4"></div>
</div>
<div class="tw"><img src="assets/images/tweety.gif"></div>
</body>
</html>
