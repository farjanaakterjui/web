<!DOCTYPE html>
<html>
<head>
    
<meta charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Contact Us </title>


        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

      
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<style>
  /* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 15px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.swing {
    animation: swing ease-in-out 1s infinite alternate;
    transform-origin: center -20px;
    float:left;
    box-shadow: 5px 5px 10px rgba(0,0,0,0.5);
}
.swing img {
    border: 5px solid #f8f8f8;
    display: block;
}
.swing:after{
    content: '';
    position: absolute;  
    width: 20px; height: 20px;  
    border: 1px solid #999;
    top: -10px; left: 50%;
    z-index: 0;
    border-bottom: none;
    border-right: none;
    transform: rotate(45deg);
}

/* nail */
.swing:before{
    content: '';
    position: absolute;
    width: 5px; height: 5px;
    top: -14px;left: 54%;
    z-index: 5;
    border-radius: 50% 50%;
    background: #000;
}
 
@keyframes swing {
    0% { transform: rotate(3deg); }
    100% { transform: rotate(-3deg); }
}
@use postcss-nested;
@import url(https://fonts.googleapis.com/css?family=Dancing+Script:400,700);
* {
  box-sizing: border-box;
}
body {
  margin: 0;
  padding: 0;
  background-color: #2f4353;
  background-image: linear-gradient(315deg, #2f4353 0%, #d2ccc4 74%);
  text-align: center;
  font-family: monospace;
  overflow: hidden;
}
h1, p {
  margin: 0;
  padding: 0;
}
h1 {
  font-size: 2rem;
  font-family: 'Dancing Script';
}
small {
  display: block;
  padding: 1rem 0;
  font-size: 0.8rem;
  transition: opacity 0.33s;
}
textarea, input, button {
  line-height: 1.5rem;
  border: 0;
  outline: none;
  font-family: inherit;
  appearance: none;
}
textarea, input {
  color: #4e5e72;
  background-color: transparent;
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='10' height='24'><rect fill='rgb(229, 225, 187)' x='0' y='23' width='10' height='1'/></svg>");
}
textarea {
 width: 100%;
 height: 35rem;
 resize: none;
}
input {
 width: 50%;
 margin-bottom: 1rem;
  &[type=text]:invalid, [type=email]:invalid {
    box-shadow: none;
    background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='10' height='24'><rect fill='rgba(240, 132, 114, 0.5)' x='0' y='23' width='10' height='1'/></svg>");
  }
}
button {
 padding: 0.5rem 1rem;
 border-radius: 0.25rem;
 background-color: rgba(78, 94, 114, 0.9);
 color: white;
 font-size: 1rem;
 transition: background-color 0.2s;
  &:hover,:focus {
    outline: none;
    background-color: rgba(78, 94, 114, 1);
  }
}
input[type=text]:focus,
input[type=email]:focus,
textarea:focus {
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='10' height='24'><rect fill='rgba(78, 94, 114, 0.3)' x='0' y='23' width='10' height='1'/></svg>");
  outline: none;
}
.wrapper {
  width: 35rem;
  background-color: white;
}
.letter {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  width: 60rem;
  margin: auto;
  perspective: 60rem;
}
.side {
  height: 12rem;
  background-color: #fcfcf8;
  outline: 1px solid transparent;
  &:nth-of-type(1) {
    padding: 2rem 2rem 0;
    border-radius: 1rem 1rem 0 0;
    box-shadow: inset 0 0.75rem 2rem rgba(229, 225, 187, 0.5);
  }
  &.side:nth-of-type(2) {
    padding: 2rem;
    border-radius: 0 0 1rem 1rem;
    box-shadow: 0 0.3rem 0.3rem rgba(0, 0, 0, 0.05), inset 0 -0.57rem 2rem rgba(229, 225, 187, 0.5);
    text-align: right;
  }
}
.envelope {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  margin: auto;
}
.envelope.front {
  width: 10rem;
  height: 6rem;
  border-radius: 0 0 1rem 1rem;
  overflow: hidden;
  z-index: 9999;
  opacity: 0;
}
.envelope.front::before, .envelope.front::after {
  position: absolute;
  display: block;
  width: 12rem;
  height: 6rem;
  background-color: #e9dc9d;
  transform: rotate(30deg);
  transform-origin: 0 0;
  box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1);
  content: '';
}
.envelope.front::after{
  right: 0;
  transform: rotate(-30deg);
  transform-origin: 100% 0;
}
.envelope.back {
  top: -4rem;
  width: 10rem;
  height: 10rem;
  overflow: hidden;
  z-index: -9998;
  opacity: 0;
  transform: translateY(-6rem);
  &::before {
    display: block;
    width: 10rem;
    height: 10rem;
    background-color: #e9dc9d;
    border-radius: 1rem;
    content: '';
    transform: scaleY(0.6) rotate(45deg)
  }
}
.result-message {
  opacity: 0;
  transition: all 0.3s 2s;
  transform: translateY(9rem);
  z-index: -9999;
}
.sent {
  & .letter {
    animation: scaleLetter 1s forwards ease-in /*,
               pushLetter 0.5s 1.33s forwards ease-out*/ ;
  }
  & .side:nth-of-type(1) {
    transform-origin: 0 100%;
    animation: closeLetter 0.66s forwards ease-in;
  }
  & .side:nth-of-type(1) h1, .side:nth-of-type(1) textarea {
    animation: fadeOutText 0.66s forwards linear;
  }
  & button {
    background-color: rgba(78, 94, 114, 0.2);
  }
  & .envelope {
    animation: fadeInEnvelope 0.5s 1.33s forwards ease-out;
  }
  & .result-message {
    opacity: 1;
    transform: translateY(12rem);
  }
  & small {
    opacity: 0;
  }
}
.centered {
  position: absolute;
  left: 0;
  right: 150;
  margin: 6 rem auto;
}
@keyframes closeLetter {
   50% {transform: rotateX(-90deg);}
   100% {transform: rotateX(-180deg);}
}
@keyframes fadeOutText {
   49% {opacity: 1;}
   50% {opacity: 0;}
   100% {opacity: 0;}
}
@keyframes fadeInEnvelope {
  0% {opacity: 0; transform: translateY(8rem);}
  /*90% {opacity: 1; transform: translateY(4rem);}*/
  100% {opacity: 1; transform: translateY(4.5rem);}
}
@keyframes scaleLetter {
  66% {transform: translateY(-8rem) scale(0.5, 0.5);}
  75% {transform: translateY(-8rem) scale(0.5, 0.5);}
  90% {transform: translateY(-8rem) scale(0.3, 0.5);}
  97% {transform: translateY(-8rem) scale(0.33, 0.5);}
  100%{transform: translateY(-8rem) scale(0.3, 0.5);}
}
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}
/*
@keyframes pushLetter {
  0% {transform: translateY(-8rem) scale(0.3, 0.5);}
  50% {transform: translateY(-8rem) scale(0.3, 0.5);}
  90% {transform: translateY(-8.5rem) scale(0.3, 0.5);}
  100% {transform: translateY(-8rem) scale(0.3, 0.5);}
}
*/

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
   
    </style>
<body>
 <ul>
    
        <li><a href="demo.html">Home</a></li>
        <li><a href="display.php">Menu</a></li>
        <li class="dropdown">
          <a href="javascript:void(0)" class="dropbtn">Contact</a>
          <div class="dropdown-content">
            <a href="https://www.facebook.com/foodpandaBangladesh/">Facebook  <i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/hashtag/foodpanda?lang=en">Twitter  <i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/foodpandasg/?hl=en">Instagram  <i class="fa fa-instagram"></i></a> 
             <a href="#" onclick="alert('09678-777555');">Phone  <i class="material-icons">settings_phone</i></a>
           

          </div>
        </li>  <li style="float:right"><a href="contact.php">Message </a></li>
                <li style="float:right"><a  href="Profile.php">My Profile</a></li>
 
        <li style="float:right"><a  href="table.php">About</a></li>

      </ul>  
      <br><br><br>
<div style="float:left; height: 500px ;width: 500px; color:black" class="wrapper centered">
  <article class="letter"style="float:left; height: 500px ;width: 400px">
    <div class="side" >
     <b><big> <h1>Send Message</h1></big></b>
      <br><br><br>
      <p>
        <textarea placeholder="Your message"></textarea>
      </p>
    </div>     <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  

 
        <form name="form1" method="post"action="demo.html">
    <button name="delete" class="butt butt1" style="float:right;">Send</button>
    </form>

    </div>
  </article>
  <div class="envelope front"></div>
  <div class="envelope back"></div>
 
  <br><br><br><br><br>

  <h1>09678-777555<br><br>
Foodpanda Headoffice, Phone</h1> <br><br>E-mail
 :partner@foodpanda.com.bd  <br><br><br><br><br>
  <br><br><br><br><br>
  <br><br><br><br><br>

<div class="row">
  <div class="column">
    <h2>Food delivery,Dhaka</h2>

Takeout-Banani, Pizza Guy, Shawarma Street , Coffeelicious Coffee-Baily Road, Time Out.</div>
<div class="column">
    <h2>Food delivery,Chittagong</h2>

Barcode Cafe, Muno Cafe Bistro, Afghan Restaurant , Burgwich Town Fusion Cafe, Sadia's Kitchen.</div> 
<div class="column">

 <h2>Chinese food delivery,Dhaka</h2>

Royal Kitchen, Kebabish Original, Eatopia, Rainbow Chinese, Nirvana Inn,</div>
</div> 
</div>

<script type="text/javascript">function addClass() {
  document.body.classList.add("sent");
}

sendLetter.addEventListener("click", addClass);</script>

</body>

</html>