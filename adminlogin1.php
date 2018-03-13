<?php
@session_start();
require 'connect.php';
?>
<?php 
$auser=@$_POST['auser'];
$apassword=@$_POST['apass'];
$query1="SELECT * FROM admin WHERE user ='$auser'";
$query_run1=@mysqli_query($conn,$query1);
if(@mysqli_num_rows($query_run1)>0)
{
	   while($row=@mysqli_fetch_assoc($query_run1)){
	   $hash=$row['password'];
	 
	   if(password_verify($apassword, $hash))
	   {
	  $_SESSION['aauser']=$auser;
	  setcookie('auser',$auser,time()+60*60*7,"/");
	header('location: try.php');	
}

else
{
	
	echo "<script type='text/javascript'>
            alert('user name or password incorrect');
            window.location.replace('adminlogin.php');
            </script>";
}
}}
else
{
	
	echo "<script type='text/javascript'>
            alert('user name or password incorrect');
            window.location.replace('adminlogin.php');
            </script>";
}
?>