<!DOCTYPE html>
<html>

<head>
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
        integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>

    #more {display: none;}


    .newspaper {
  -webkit-column-count: 3; /* Chrome, Safari, Opera */
  -moz-column-count: 3; /* Firefox */
  column-count: 3;
  -webkit-column-width: 100px; /* Chrome, Safari, Opera */
  -moz-column-width: 100px; /* Firefox */
  column-width: 100px;
}
    .header {
      background-color: #f1f1f1;
      padding: 20px;
      text-align: center;
      background-position: center; 
      background-repeat: no-repeat;
      background-attachment: fixed;
      
    }

    body {
      background: whitesmoke no-repeat center top;
      border-radius: 8px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      background-position: center; 

      background-color: #2f4353;
      background-image: linear-gradient(315deg, #2f4353 0%, #d2ccc4 74%);
      
    }

    .topnav {
      overflow: hidden;
      float:right;
      background-color: #333;
      
    }

    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }


    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }
    .center {
      text-align: center;
     
    }
    .centered {
      position: absolute;
      text-align: center;
      top: 25%;
      left: 35%;
      transform: translate(-50%, -50%);  
    }

    @import url("https://fonts.googleapis.com/css?family=Luckiest+Guy");

/*navigation +dropdown start*/
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: auto;
  background-color: #333;
  left: 50px;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  
}

li a:hover , .dropdown:hover .dropbtn  {
  background-color: #645c74;
  border: 2px solid black;

}

li.dropdown {
  
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}
/*navigation +dropdown finish*/


/*button start*/
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  top: 20%;
  left: 87%;
  position:fixed;
}
.button5 {
  background-color: gray;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}/*button finish*/

/*search button*/
.butt {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  left: 87%;
}
.butt1 {border-radius: 12px;}
/*finish*/
/*reference*/
b.highlight:hover {
  color: grey;
  
} 
.overflow{
  background-color: #eee;
  width: 200px;
  height: 50px;
  overflow-x: hidden;
  overflow-y: scroll;
  float:right;
  border: 2px solid;
  resize:vertical;
  
}
b:link, b:visited {
  background-color: black;
  color: darkgray;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;

}

b:hover, b:active {
  background-color: lightblue;
  border: 1px solid blue; 
}/*finish*/
/*log in /sign up button*/
.but {
  background-color: #4CAF50; /* Green */
  border: none;
  color: lightgreen;
  padding: 12px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
  float:right;
  top:0%;
}

.but1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.but1:hover {
  background-color: #4CAF50;
  color: white;
}
/*finish*/
/*slideshow_gallery*/
.mySlides {display:none;
}
/*finish*/
  </style>
</head>

<body>  

    
 
  
     <ul>
         <li><a href="admin_page.php">Home</a></li>
        <li><a href="ad.php">All Customer Info</a></li>
        <li><a href="details.php">Total revenue(daily)</a></li>
        <li><a href="add_item.php">Add Item</a></li>        
        <li><a href="display.php">Menu</a></li>

      <li style="float:right"> <form action="http://localhost/admin/logout.php" method="get">
  <button class="but but1">Log out</button></form></li>

      </ul>
       <h1  align="center"style='font-size:60px'>FOOD PANDA<div class='fas design'>&#xf2e7;</div>
<br>
<canvas id="canvas" width="400" height="400"
style="background-color:#333">
</canvas>

</h1>
<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>
<hr>
<p>
Copyright © 2019 <b> <a class="highlight" style="color: black;" 
  href="https://www.w3schools.com">https://www.w3schools.com</a></b> All Rights Reserved.<br>
</p>

 

</body>


</html>

