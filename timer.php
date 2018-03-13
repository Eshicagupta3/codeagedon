<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Timer</title>
<head>
<style>
@font-face {
font-family: "BROKENTOYS";
src: url("assets/images/pokemon/BROKENTOYS.ttf");}
.come{
font-family: 'BROKENTOYS', Arial, sans-serif;
font-weight:normal;
font-style:normal;
}
.come1{
font-family: 'BROKENTOYS', Arial, sans-serif;
font-weight:normal;
font-style:normal;
}
p{
font-family: 'BROKENTOYS', Arial, sans-serif;
font-weight:normal;
font-style:normal;
}
.bg{
  background-image: url("assets/images/s.png");
  background-repeat: no-repeat;
  background-position: center;
  background-clip: border-box;
  background-size:cover;
  height: 100vh;
  width: 100%;
}
@media screen and (max-width: 969px)
{
  .bg{
    background-size:cover;
    width: 100% ;
    height: 100vh;
    background-repeat: no-repeat;
    background-position: center;
    
  }
}
@media only screen and (max-width: 768px) and (min-width: 100px)
 {
    
  .bg{
    background-size:cover;
    width: 100% ;
    height: 100vh;
    background-repeat: no-repeat;
    background-position: center;
  }}

p {
  text-align: center;
  font-size: 500%;
  margin-top:0;
  color: black;
}
.come{
font-size: 500%;
margin-top: 20%;
color: black;
}
.come1{
font-size: 500%;
color: black;
}


@media only screen and (max-width: 768px) and (min-width: 100px)
 {
    
  .come{
    margin-top: 50%;
    font-size: 350%;
  }
   .come1{
    font-size: 350%;
  }
  p{
    font-size: 250%;
  }
  }
  .center {
    line-height: 100%;
    height: 100%;
    text-align: center;
}

/* If the text has multiple lines, add the following: */
.center p {
    line-height: 1.5;
    display: inline-block;
    vertical-align: middle;
}
</style>
</head>
<body class="bg" >
    <!--
<div class="row"><div class="col-sm-3 col-xs-3"></div>
<div class="col-sm-6 col-xs-7"><div class="come" align="center">Coming Soon!!</div><div class="col-sm-3 col-xs-3"></div><br><p id="demo"></p><br></div>
<div class="row"><div class="col-sm-3 col-xs-3"></div>
<div class="col-sm-6 col-xs-7"><div class="come1" align="center">Codeageddon</div></div><div class="col-sm-3 col-xs-3"></div></div>-->
<div class="center">
    <h1 class="come">Coming Soon!!</h1>
    <p id="demo"></p>
    <h1 class="come1">Codeageddon</h1>
</div>
<script>
// Set the date we're counting down to
var countDownDate = new Date("15 march, 2018 00:57:10").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        window.location.replace('home.php');
    }
}, 1000);
</script>
</body>
</html>