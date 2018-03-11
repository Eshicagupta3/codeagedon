<?php
require 'connect.php';
$i=$_POST['ques'];
$j=$_POST['ans'];
$n=$_POST['no'];
@mysqli_query($conn,"insert into question values('','$i','$j','$n')");

?>