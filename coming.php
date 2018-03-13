<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/images/BROKENTOYS.ttf">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="assets/css/js/moment.min.js"></script>
<title>Timer</title>
<head>
<style>
@font-face { 
  font-family: "BROKENTOYS"; 
  src: url("assets/images/BROKENTOYS.ttf"); }
h1{
  font-family: 'BROKENTOYS',Arial,sans-serif;
}
body,html{
    min-width: 100%;
    max-width: 100%;
}

p {
  text-align: center;
  font-size: 450%;
  margin-top:0px;
  color: white;
  z-index: 0;
}
.come{
    font-size: 450%;
margin-top: 20%;
color: black;
font-family: BROKENTOYS;
}
.come1{
    font-size: 450%;
    font-family: BROKENTOYS;
color: black;
}

/*.bg{
    background-image:url("assets/images/c.gif"); 
     background-size: 100%;
    height: 100vh;
    width: 50%;
}*/
* { box-sizing: border-box; transition: 0.3s cubic-bezier(0.6,0,0.2,1); }
body { height: 100%; width: 100%; transition: 0s; }

.canvas-container{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    height: 100%;
    width: 100%;
}
#cnv{
    height: 100%;
    width: 100%;
}
/*@media screen and (max-height: 800px){
    .canvas-container{
        transform: translate(-50%,-50%) scale(0.8);
}}
@media screen and (max-width: 900px)
{    .canvas-container{
        transform: translate(-50%,-50%) scale(0.6);}}
*/@media only screen and (max-width: 768px) and (min-width: 100px)
 {
/*    
  .bg{
background-image:url("assets/images/bck.jpg"); 
     background-size: cover;
    height: 100vh;
    width: 50%;
   background-repeat: no-repeat;
  }*/
  .come{
    margin-top: 40%;
    font-size: 50px;
    font-family: BROKENTOYS;
  }
   .come1{
    margin-left: -50%;
    font-size: 50px;
    font-family: BROKENTOYS;
  }
  }
</style>
</head>
<body class="bg" >
<div class="canvas-container">
    <canvas id="cnv" height="1000px" width="1000px"></canvas>
</div>
<div >
  <h1>Coming Soon!!</h1>
</div>
<div>
  <p id="demo"></p>
</div>
<div>
  <h1>Codeageddon</h1>
</div>
<!--<div class="row"><div class="col-sm-3 col-xs-3"></div>
<div class="col-sm-6 col-xs-6"><div class="come" align="center">Coming Soon!!</div></div><div class="col-sm-3 col-xs-3"></div></div><br><p id="demo"></p><br>
<div class="row"><div class="col-sm-3 col-xs-3"></div>
<div class="col-sm-6 col-xs-5"><div class="come1" align="center">Codeageddon</div></div><div class="col-sm-3 col-xs-4"></div></div>--><!--
<script>
  // --- Notes ---
// Made one of those particle things

// --- Setup -----------------------------------------------
// - Canvas Context -
var ctx = document.getElementById('cnv').getContext('2d');
var container = document.getElementsByClassName('canvas-container')[0];

// - Particles -
var particleCount = 0;
var particles = [];
var colors = ['rgba(255,221,34,0.8)','rgba(187,51,255,0.8)','rgba(68,255,136,0.8)','rgba(0,255,255,0.8)','rgba(255,51,51,0.8)'];

// - Particle Constructor -
function Particle(x,y,vx,vy) {
    this.id = particleCount++;
    this.r = 3;
    this.x = x || Math.floor(Math.random()*ctx.canvas.width);
    this.y = y || Math.floor(Math.random()*ctx.canvas.height);
    this.vx = vx || (Math.floor(Math.random()*11)-5);
    this.vy = vy || (Math.floor(Math.random()*11)-5);
    this.color = colors[Math.floor(Math.random()*5)];
    
    // Just so the particle is not stationary
    if(!this.vx && !this.vy) {this.vy = -1}
}
// ---------------------------------------------------------

// --- Input Handling --------------------------------------
var mouseParticle = { x: 0, y: 0 };
var mouseOn; // To track if the mouse is on the canvas

container.addEventListener('click',function(e){ particles.push(new Particle(mouseParticle.x,mouseParticle.y)); });
container.addEventListener('mouseenter', function(e){ mouseOn = true; });
container.addEventListener('mouseleave', function(e){ mouseOn = false; });

container.addEventListener('mousemove', function(e){
    var dimensions = container.getBoundingClientRect();
    mouseParticle.x = (e.pageX - (container.offsetLeft - dimensions.width/2)) * (ctx.canvas.width/dimensions.width);
    mouseParticle.y = (e.pageY - (container.offsetTop - dimensions.height/2)) * (ctx.canvas.height/dimensions.height);
});
// ---------------------------------------------------------

// --- Functions -------------------------------------------
function init() {
    reset();
    frameFunction();
}
function reset() {
    particles = [];
    for(var i = 0; i < 40; i++) { particles.push(new Particle); }
}

function frameFunction() {
    // Cover previous frame
    coverFrame(); 
    // - Updating particle positions -
    for(var i in particles) { updateParticlePos(particles[i]); }
    // - Drawing functions -
    drawLines();
    drawParticles();
    
    // Mouse lines
    if(mouseOn) {
        for(var i in particles) {
            if(proximityCheck(mouseParticle,particles[i])) {
                drawLine(mouseParticle.x,mouseParticle.y,particles[i].x,particles[i].y,3);
            }
        }
    }
    
    // Next Frame
    requestAnimationFrame(frameFunction);
}

function coverFrame() {
    ctx.fillStyle = 'rgba(0,10,35,1)'; // change opacity for fade
    ctx.fillRect(0, 0, ctx.canvas.width, ctx.canvas.height);
}

function updateParticlePos(p) {
    var height = ctx.canvas.height, width = ctx.canvas.width;
    p.x += p.vx/5;
    p.y += p.vy/5;

    // Setting Outer Boundaries
    if( ((p.x - p.r) < 0) || (p.x > (width - p.r)) ) { p.vx = -(p.vx); } 
    else if( ((p.y - p.r) < 0) || (p.y > (height - p.r)) ) { p.vy = -(p.vy); }    
    
    if((p.x - p.r) < 0) { p.x = 0 + p.r; }
    else if((p.x + p.r) > width) { p.x = width - p.r; }
    else if((p.y - p.r) < 0) { p.y = 0 + p.r; }
    else if((p.y + p.r) > height) { p.y = height - p.r; }
}

function drawParticles() {
    ctx.lineWidth = 2;
    for(var i in particles) {
        ctx.beginPath();
        ctx.fillStyle = particles[i].color||'rgba(255,255,255,0.9)';
        ctx.arc(particles[i].x,particles[i].y,particles[i].r,0,2*Math.PI);
        ctx.fill();
    }
}

// Circle-Circle collision checks. Proximity check just has expanded radius
/*
function collisionCheck(c1,c2) {
    var dx = c1.x - c2.x, dy = c1.y - c2.y, dist = Math.sqrt(dx * dx + dy * dy);
    return (dist < c1.r + c2.r);
}
*/
function proximityCheck(c1,c2) {
    var dx = c1.x - c2.x, dy = c1.y - c2.y, dist = Math.sqrt(dx * dx + dy * dy);
    return (dist < 200);
}

function drawLines() {
    for(var i in particles) {
        for(var j = i; j < particles.length; j++) {
            if((i !== j) && proximityCheck(particles[i],particles[j])) {
                drawLine(particles[i].x,particles[i].y,particles[j].x,particles[j].y,2);
            }
        }
    }
}

function drawLine(x1,y1,x2,y2,mod) {
    var op = 1/(Math.sqrt( Math.pow((x2-x1),2) + Math.pow((y2-y1),2) )/24);
    ctx.lineWidth = 1;
    ctx.strokeStyle = `rgba(255,255,255,${(op*mod) - 0.21})`;
    ctx.beginPath();
    ctx.lineTo(x1,y1);
    ctx.lineTo(x2,y2);
    ctx.stroke();
}
// ---------------------------------------------------------

// - Go Time -
init();

</script>-->

<script>

  var jun = moment("2014-06-01T12:00:00Z");
var dec = moment("2014-12-01T12:00:00Z");

 document.getElementById("demo").innerHTML=jun.tz('America/Los_Angeles').format('ha z');  // 5am PDT
 document.getElementById("demo").innerHTML=dec.tz('America/Los_Angeles').format('ha z');
// Set the date we're counting down to
/*var countDownDate = new Date("15 march, 2018 00:57:10").getTime();

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
}, 1000);*/
</script>
</body>

</html>