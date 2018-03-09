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
<title>Home</title>

<style>
body,html {
    height: 100%;
    padding: 0px;
    margin:0 auto;
}

.bg{ background-image: url("assets/images/bck.jpg");
     height: 100%;
     width: 100%;
     background-position: center;
     background-repeat: no-repeat;
     background-position:relative;
     z-index:-1;
     overflow-x: hidden;
     background-size: cover;
}
#img1{
    position: absolute;
    top: 400px;
    left: 490px;
    right: 650px;
    z-index:3;
}
#img2{
    position: absolute;
    top: 460px;
    left: 445px;
    right: 700px;
    z-index:2;
}
#img3{
    position: absolute;
    top: 500px;
    left: 490px;
    right: 650px;
    z-index:2;
}
#img4{
    position: absolute;
    top: 220px;
    padding-bottom: 0px;
    left: 600px;
    right: 700px;
    z-index:1;
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
    position: absolute;
    top: 0px;
    padding-left: 1000px;
    right: 35px;
    z-index: 1;
}
</style>
</head>
<body>
<div class="bg"></div>
<a href="#"><img src="assets/images/img.png" width="150px" height="530px" id="img4"></a>
<a href="login.php"><img src="assets/images/wood31.png" width="380px" height="150px" id="img1" class="shadowfilter"></a>
<a href="signup.php"><img src="assets/images/wood32.png" width="380px" height="150px" id="img2" class="shadowfilter"></a>
<a href="Leaderboard.php"><img src="assets/images/wood34.png" width="380px" height="170px" id="img3" class="shadowfilter"></a>
<div class="tw"><img src="assets/images/tweety.gif"></div>
</body>
</html>
