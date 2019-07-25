
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
    
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Add Item </title>


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
body {
      background: whitesmoke no-repeat center top;
      border-radius: 8px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      background-position: center; 
      
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
         <li><a href="admin_page.php">Home</a></li>
        <li><a href="ad.php">All Customer Info</a></li>
        <li><a href="details.php">Total revenue(daily)</a></li>
        <li><a href="add_item.php">Add Item</a></li>        
        <li><a href="display.php">Menu</a></li>

      <li style="float:right"> <form action="http://localhost/admin/logout.php" method="get">
  <button class="but but1">Log out</button></form></li>

      </ul>
<div class="row">
    <div class="col-sm-6 col-sm-offset-3 form-box">
        <div class="form-top">
            <div class="form-top-left"> <h3>Add Items</h3></div>
        </div>
            <div class="form-bottom">  
    <form method="post"action="add_item_connection.php" enctype="multipart/form-data">
            <div class="form-group"> 
                 <input type="text"name="name"class="form-control" placeholder="Food Name" required>
            </div>
        <div class="form-group" >
        Upload image<br>
        <input type="file" name="image"   required>
        </div>
        <div class="form-group"> 
                 <input type="text"name="price"class="form-control" placeholder="Price" required>
        </div>
        <div class="form-group"> 
                 <input type="text"name="type"class="form-control" placeholder="Food Type" required>
        </div>
        <button type="submit" name="add" value="add" class="btn btn-primary">Add Item</button>
          
    </form>
           </div>
    </div>
</div>      

<script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script> 
 
</body>
</html>