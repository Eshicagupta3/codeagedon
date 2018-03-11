<?php
@session_start();
@require 'connect.php';
?>

<?php 

$rname=@mysqli_real_escape_string($conn, $_REQUEST['fname']);

$remail=@mysqli_real_escape_string($conn, $_REQUEST['remail']);
$rpass=@mysqli_real_escape_string($conn, $_REQUEST['rpass']);
$rzeal=@mysqli_real_escape_string($conn, $_REQUEST['rzeal']);

$query1="SELECT * FROM users WHERE email='$remail'";
$query_run1=mysqli_query($conn,$query1);

if(@mysqli_num_rows($query_run1)>0)
{
 echo "<script type='text/javascript'>
            alert('Email already Exist')
            window.location.replace('signup.php');
            </script>";
}

else{
$query="insert into users values(' ','$rname','$remail','$rpass','$rzeal','1')";
$query_run=@mysqli_query($conn,$query);
$_SESSION['luser']=$remail;
$_SESSION['lusername']=$rname;
 $_SESSION['logged_in'] = true;
 setcookie('user',$remail,time()+60*60*7,"/");
setcookie('pass',$rpass,time()+60*60*7,"/");
setcookie('username',$rname,time()+60*60*7,"/");
if($query_run)
{
 echo "<script type='text/javascript'>
            
            window.location.replace('game.php?');
            </script>";

      
}
else{
 echo "<script type='text/javascript'>
 alert('Some Error!!');
            window.location.replace('signup.php');
            </script>";
}
}

?>
