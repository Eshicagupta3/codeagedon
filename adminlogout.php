<?php
session_start();
session_destroy();
setcookie('auser','',time()-3600,"/");
header('location: adminlogin.php');
?>