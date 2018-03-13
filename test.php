<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Timer</title>
<head>
<style>

      @font-face { font-family:assets/images/Pokemon; src: url('assets/images/Pokemon.ttf'); }

body,html{
    min-width: 100%;
    max-width: 100%;
}
p {
  text-align: center;
  font-size: 60px;
  margin-top:0px;
  color: black;
}
.come{
    font-size: 100px;
margin-top: 20%;
color: black;
}
.come1{
    font-size: 100px;

color: black;
}

.bg{
    background-image:url("assets/images/c.gif"); 
     background-size: 100%;
    height: 100vh;
    width: 50%;
}
@media only screen and (max-width: 768px) and (min-width: 100px)
 {
    
  .bg{
background-image:url("assets/images/bck.jpg"); 
     background-size: cover;
    height: 100vh;
    width: 50%;
   background-repeat: no-repeat;
  }
  .come{
    margin-top: 40%;
    font-size: 50px;
  }
   .come1{
    margin-left: -50%;
    font-size: 50px;
  }
  }
</style>
</head>
<body class="bg" >
<div class="row"><div class="col-sm-3 col-xs-3"></div>
<div class="col-sm-6 col-xs-6"><div class="come" align="center">Coming Soon!!</div></div><div class="col-sm-3 col-xs-3"></div></div><br><p id="demo"></p><br>
<div class="row"><div class="col-sm-3 col-xs-3"></div>
<div class="col-sm-6 col-xs-5"><div class="come1" align="center">Codeageddon</div></div><div class="col-sm-3 col-xs-4"></div></div>

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
