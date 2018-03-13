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
  <meta  charset="utf-8" name="viewport" content="width=device-width" scale="initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/default.css">
  <title>Login</title>
  <style>
  body,html{
max-height: 100%;
min-height: 100%;
    
}
/*.btn1{
    background-color: White;
    border: none;
    color: Black;
    padding: 12px 16px;
    font-size: 16px;
    cursor: pointer;
}*/
.bg{
  background: url("assets/images/two.jpg");
  background-repeat: no-repeat;
  background-size:cover;
  overflow-x: hidden;
  overflow-y: hidden; 
  height: 100%;

  width: 100%;
}
/* Darker background on mouse-over */
.btn1:hover {
  
}
@media screen and (max-width: 969px)
{
  .bg{
    background-size:cover;
    height: 100vh ;
    background-repeat: no-repeat;
    overflow-y: scroll;
  overflow-x: hidden;
    
  }
}
@media screen and (min-width: 100px) and (max-width:768px)
{
  .bg{
    background-size:cover;
    height: 100vh ;
    background-repeat: no-repeat;
    overflow-y: scroll;
  overflow-x: hidden;
  }

}
</style>
</head>

<body class="bg">
<a href="home.php"><span class="glyphicon glyphicon-home" style="font-size: 210%;color:#ffffff; margin-left: 2%; margin-top: 3%; z-index: 20"></span></a>
<div class="wrapper">

  <div>
    <div class="cloud large cloud-1">
  <div></div><div></div><div></div><div></div>
</div>
<div class="cloud normal cloud-2">
  <div></div><div></div><div></div><div></div>
</div>
<div class="cloud small cloud-3">
  <div></div><div></div><div></div><div></div>
</div>
<div class="cloud tiny cloud-4">
  <div></div><div></div><div></div><div></div>
</div>
<div class="cloud large cloud-5">
  <div></div><div></div><div></div><div></div>
</div>
<div class="cloud normal cloud-6">
  <div></div><div></div><div></div><div></div>
</div>
<div class="cloud small cloud-7">
  <div></div><div></div><div></div><div></div>
</div>
<div class="cloud tiny cloud-8">
  <div></div><div></div><div></div><div></div>
</div>
<div class="cloud small cloud-9">
  <div></div><div></div><div></div><div></div>
</div>
<div class="cloud normal cloud-10">
  <div></div><div></div><div></div><div></div>
</div>
<div class="cloud tiny cloud-11">
  <div></div><div></div><div></div><div></div>
</div>
<div class="cloud small cloud-12">
  <div></div><div></div><div></div><div></div>
</div>
  </div>
  
<div class="overlay">
<div class="container col-md-offset-4 col-md-4" style="margin-top:5%;">
  <div>
      <h1 style=" font-size: 200%; font-color:#1a237e;"><img src="assets/images/bird3.gif" width="45%" height="20%">Log-In</h1>
  </div>
  <div class="forms">
<form class="form-horizontal" method="post" action="login1.php">
    <div class="form-group">
      <label style="color: black;">Email:<span class="req">*</span></label>
      <input class="form-control" type="email" placeholder="Enter your email" name="lemail" required>
    </div>
    <div class="form-group">
      <label style="color: black;">Password:<span class="req">*</span></label>
      <input class="form-control" type="password" placeholder="Enter your password" name="lpass" required>
    </div>
    <div class="form-group">
      <button class="btn btn-primary btn-block" type="submit"><label style="color: white;">Login</label></button>
    </div>
    
</form>
</div>
</div>
</div>
<div class="train"></div>
</div>

</body>
</html>