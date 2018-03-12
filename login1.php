<?php
@session_start();
@require 'connect.php';
?>
<?php 
$user=@mysqli_real_escape_string($conn, $_REQUEST['lemail']);
$password=@mysqli_real_escape_string($conn, $_REQUEST['lpass']);

$query="SELECT * FROM users WHERE email ='$user'";
$query_run=@mysqli_query($conn,$query);
if(@mysqli_num_rows($query_run)>0)
{
	   while($row=@mysqli_fetch_assoc($query_run)){
	   $hash=$row['password'];
	 
	   if(password_verify($password, $hash))
	   {
$_SESSION['luser']=$user;
$_SESSION['lusername']=$row['username'];
$username=$row['username'];
 $_SESSION['logged_in'] = true;
setcookie('user',$user,time()+60*60*7,"/");
setcookie('pass',$password,time()+60*60*7,"/");
setcookie('username',$username,time()+60*60*7,"/");
	header('location: game.php?');	
}
}
}


	echo "<script type='text/javascript'>
            alert('user name or password incorrect');
            window.location.replace('login.php');
            </script>";

@mysqli_close($conn);
?>