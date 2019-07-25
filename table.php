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

/*animation start*/
@function makelongshadow($length,$angle) {
  $val: 0px 0px transparent;
  @for $i from 1 through $length {
    $val: #{$val}, #{$i}px #{$i*$angle}px #aaa;
  }
  @return $val;
}

@import url('https://fonts.googleapis.com/css?family=Roboto:700,900');


.txt {
  text-align: center;
  font-family: 'Roboto';
  font-size: 12vmin;
  font-weight: 700;
  animation: netflix_style 3.5s infinite;
  outline: none;
  white-space: nowrap;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}

@keyframes netflix_style {
  0% {
   
    color:whitesmoke;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
    transform: scale(1.5, 1.5);
  }
  10% {

    color:whitesmoke;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
    transform: scale(1.5, 1.5);
  }
  15% {
     color:whitesmoke;
     text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
  }
  20% {    
    color:whitesmoke;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;

    transform: scale(1.1, 1.1);
  }
  75% {
    opacity: 1;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
  }
  80% {
    opacity: 0;    
    color:whitesmoke;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
    transform: scale(0.85, 0.9);
  }
  
  100% {
    opacity: 0;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
  }
}
/*animation finish*/
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
/*gallery start*/
div.gallery {
  border: 1px solid #ccc;
  
  margin: 5px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;

}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}/*gallery finish*/
/*animated search*/
input[type=text] {
  width: 190px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 20px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 30px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 80%;
}
/*finish*/
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
      <p >
      	<div style="    font-family: 'Sofia';font-size: 18px;
" align="center">
   <h2 > What is Foodpanda?</h2>  <br>

We are a small team of problem solvers, designers, thinkers and tinkers, working around the clock to make Foodpanda the most powerful online tool for ordering food in the universe. We believe that ordering food should be easy, fast and definitely fun! We wanted something simpler, so we made it.

<h2>Foodpanda Online Experience</h2><br>

Staying in the office for lunch? Tired of the same takeaways? No more wondering what is available near you. Foodpanda has online menus from the staggering selection of delivery restaurants around you. Simply enter your area and search for cuisine type, restaurants or even price range. The restaurant index also includes address and delivery hours. No online food delivery is too difficult for Foodpanda! Ordering food filtered to your needs has never been made easier!<br>

Do you have any questions or feedback? We love to hear from you! Email us with your queries and we'll have it sorted in no time!</p>
</div>
<h1 style="    font-family: 'Sofia';
" >Location</h1>
<div style="width: 1575px;
height: 400px;
  padding: 10px;
  border: 5px solid gray;
  margin: 0; float: center;" align="center">
<iframe width='100%' height='100%' id='mapcanvas' src='https://maps.google.com/maps?q=Navana%20Pristine%20Pavilion,%208th%20Floor,%20Plot-128,%20Block-CEN,%20Gulshan%20Ave%20&amp;t=&amp;z=10&amp;ie=UTF8&amp;iwloc=&amp;output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0'><div class="zxos8_gm"><a href="http://news.bbc.co.uk/2/hi/technology/4225496.stm">BBC</a></div><div style='overflow:hidden;'><div id='gmap_canvas' style='height:100%;width:100%;'></div></div><div><small>Powered by <a href="https://www.embedgooglemap.co.uk">Embed Google Map</a></small></div></iframe></div>

</body>
</html>
