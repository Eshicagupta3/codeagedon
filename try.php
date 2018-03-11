<?php
session_start();
require 'connect.php';
if($_SESSION['aauser'])
{}
else{
    header('location: adminlogin.php');
}
if(isset($_POST['del1']))
{
  $m=$_POST['iname'];
  $query_run3=@mysqli_query($conn,"DELETE FROM question WHERE sno='$m'");
}

?>
<html>
 <head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

 <script>

function submitMessage() {
  var xhttp;
  var ques=form1.ques1.value;
var ans=form1.ans1.value;
var no=form1.order.value;
  var  the_data='ques='+ques+'&ans='+ans+'&no='+no;
  xhttp = new XMLHttpRequest();
      xhttp.open('POST','insert.php',true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
  xhttp.onreadystatechange=function() {
    if (xhttp.readyState==4 && xhttp.status==200) {
      document.getElementById('').innerHTML = xhttp.responseText;
    }
  }

  xhttp.send(the_data); 
}
$(document).ready(function(){
setInterval(function(){
  $.ajaxSetup({cache:false});
  
   $('#questions').load("show.php");
}, 500);

});
</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-5">
<h1>write your questions</h1>
<form name="form1" method="post">
	ques:<textarea class="ques1" name="ques1" rows="10" style="width: 100%;" required></textarea><br><br>
	ans:<input type="text" class="ans1" name="ans1" required/><br><br>
	number:<input type="number" name="order" class="order" required />
	<input type="submit" name="done" onclick="submitMessage()" value="Done"/><br>
</form>
</div>
<div class="col-xs-5"><br><br><br><p id="questions"></p></div>
<div class="col-xs-2"><form name="form2" action="adminlogout.php">
   <input type="submit" value="logout"></form></div>
</div>
</div>

</html>