<?php
require 'connect.php';
$i=@mysqli_real_escape_string($conn, $_POST['ques']);
$j=@mysqli_real_escape_string($conn, $_POST['ans']);
$n=@mysqli_real_escape_string($conn, $_POST['no']);
$j1 = password_hash($j, PASSWORD_DEFAULT);
@mysqli_query($conn,"insert into question values('','$i','$j1','$n')");

?>