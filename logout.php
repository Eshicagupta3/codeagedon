<?php
session_start();

if(isset($_COOKIE['user']) and (isset($_COOKIE['pass'])))
{
  $user=$_COOKIE['user'];
  $pass=$_COOKIE['pass'];

session_destroy();
setcookie('user','',time()-3600,"/");
setcookie('pass','',time()-3600,"/");
setcookie('username','',time()-3600,"/");
setcookie('number',$number,time()-3600,"/");
header('location: login.php');
}
else{
	header('location: login.php');
}
?>