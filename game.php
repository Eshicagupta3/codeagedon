<?php
@session_start();
require 'connect.php';
if($_SESSION['luser'])
{}
else{
    header('location: login.php');
}
$name=$_SESSION['luser'];
$query="SELECT * FROM users WHERE email='$name'";
$query_run=@mysqli_query($conn,$query);
if(@mysqli_num_rows($query_run)>0)
{
     $row=@mysqli_fetch_assoc($query_run);
$sno=$row['number'];
   }
   $_SESSION['sno']=$sno;
$c=@$_SESSION['sno'];
$url=$_SERVER['REQUEST_URI'];
$d = substr($url, strrpos($url, '?') + 1);
?>
<?php $d= str_replace(' ', '', $d);

?>

<!DOCTYPE html>
<html class="main2">
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
    <title>dashboard</title>
    <style type="text/css">
        
.main2 {
  background-color: #b22222;
  background-image: url("assets/images/dark-brick-wall.png"),url("assets/images/te.png");
  margin: 0;
  padding: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
  background-repeat: repeat,repeat-x;
}
.main {
  font-size: 20px;
  color: #E8E8E8;
  font-family: "Walter Turncoat", cursive;
  display: block;
  width: 50%;
  height: 65%;
  min-height: auto;
  margin: 60px auto 0px auto;
  background-color: #383938;
  padding: 30px 60px;
  overflow-y: auto;
  box-shadow: -1px 2px 2px 0px #555, inset 0 0 10px 0 #555;
  -webkit-border-radius: 10px;
  -khtml-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 10px;
  border-radius: 10px;
  border: #B78240 solid 10px;
  position: relative;
  overflow:hidden;
}
.footer {
    position: fixed;
    
    bottom: 0;
    width: 100%;
    color: white;
}
.log{
  position: fixed;
  left: 0;
  top: 0;
  width: 20%;
  color: white;
}
.fa{
  width: 10%;
  margin: 3px;
  font-size: 2em;
  font-color: white; 
}
 @media only screen and (max-width: 763px) {
.main{
   width: 80%;
   height: 75%;
}

    }
</style>


</head>
<body class="main"  style="overflow-y: scroll;
 
  overflow-x: hidden;">
       
           <?php
$query_run1=@mysqli_query($conn,"select * from question where number=$c");
if(@mysqli_num_rows($query_run1)>0)
{
    $row1=@mysqli_fetch_assoc($query_run1);

$a1=$row1['ans'];
?>

<?php

if($a1==$d)
{
    $c=$c+1;
    $_SESSION['sno']=$c;
    $s=$_SESSION['sno'];
$name=$_SESSION['luser'];
@mysqli_query($conn,"update users set number='$s' where email='$name'");
    header("location:game.php?");
}
}
else{
  echo "congrats u complete all levels!!";
}
?> 
<?php
$query_run=@mysqli_query($conn,"select * from question where number=$c");
if(@mysqli_num_rows($query_run)>0)
{
    $row=@mysqli_fetch_assoc($query_run);
    ?>
    
        <?php
      $q=$row['ques'];
      $a=$row['ans'];
        $n=$row['number'];
      echo "<font size='6%'><u>Level ".$n."</u></font><br><br>";
      echo $q;
      echo"<br>";
echo "<br><br>";

}
  ?>
</p>

<img src="assets/images/bulbe.png" align="right" style="width: 50%;height: 60%;">


</body>
</html>
<span class="log">&nbsp;&nbsp;<?php  echo 'hey '.$_SESSION['lusername']."  "; ?></span>
<footer class="footer">
    <div class="text-center">
      <a href="leaderboard.php" style="color: white;"><span class="fa fa-trophy" data-toggle="tooltip" data-placement="top" title="Leaderboard"></span></a>&nbsp;<a href="logout.php" style="color: white;"><span class="fa fa-sign-out" data-toggle="tooltip" data-placement="top" title="Logout"></span></a>
    </div>
</footer>
<script>
/*$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});*/
</script>
