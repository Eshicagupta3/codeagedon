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

<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
<style>

.box{
  width: 50%;
    border: 2px solid #500433;
    padding: 50px;
    position: absolute;
    left: 25%;
}
.a1{
  font-size: 20px;
   color: black
}
.hpad1{
  text-align: center;
  
}
.nav-pills>li.active>a,.nav-pills>li.active>a:focus,.nav-pills>li.active>a:hover{
  background-color: grey;
}
.nav-pills>li>a:hover{
  background-color: lightgreen;
}

</style>
</head>
<body>
<br><br>
<div class="box">


<form method="post" action="adminlogin1.php">
<input id="login_username" class="form-control" type="text" placeholder="admin user" name="auser" required><br>
 <input id="login_password" class="form-control" type="password" placeholder="admin Password" name="apass" required><br>
<input type="submit" class="btn btn-success btn-lg btn-block" value="Admin LogIn" name="alogin">
</form>





</div>

</body>
</html>

