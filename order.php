
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_first_database";
$conn = mysqli_connect($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Display Menu </title>


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
.butt {
  background-color: grey; 
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
.container {
  float: left;
  position: relative;
  width:50%;
}

.image {
  float: left;
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  float: left;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #2f4353;
  background-image: linear-gradient(315deg, #2f4353 0%, #d2ccc4 74%);
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
}

.container:hover .overlay {
  float: left;
  height: 100%;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
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
<form name="form1" method="post"action="search.php">
  <input type="text" name="t1" placeholder="Enter Item Name"required>
 
  <button name="submit1" class="butt butt1">Search Item</button>
</form>
 
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_first_database";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['quantity']) && isset($_GET["id"]))
{
      $quantity = $_POST['quantity'];
      $id=$_GET["id"];
      $email=$_SESSION['email'];
      $res=mysqli_query($conn,"select * from add_items where id=$id ");
      while($row=mysqli_fetch_array($res)){
      $name=$row["name"];
      $price=$row["price"];
      $t=$row["price"]*$quantity;
      $sql = "INSERT INTO customer(pid,email,quantity,name ,price,t_price) values ('$id','$email','$quantity','$name','$price','$t')";

      if (mysqli_query($conn, $sql)) {
       ?>
<div class="alert alert-success col-lg-6 col-lg-push-3">
item odered successfully
</div>
<?php
        echo"<table class='table table-bordered'>";

echo"<table>";
echo"<tr>";

echo"<th>";echo "item name";echo"</th>";
echo"<th>";echo "quantity";echo"</th>";
echo"<th>";echo "price";echo"</th>";
echo"<th>";echo "total price";echo"</th>";
echo"<th>";echo "Action";echo"</th>";

echo"</tr>";
$re=mysqli_query($conn,"select * from customer order by date DESC");

while($row=mysqli_fetch_array($re))
{
    echo"<tr>";
    echo"<td>";echo $row["name"];echo"</td>";
    echo"<td>";echo $row["quantity"];echo"</td>";
    echo"<td>";echo $row["price"];echo"</td>";
    echo"<td>";echo $row["t_price"];echo"</td>";
     echo"<td>";
     ?><form name="form1" method="post"action="cancel.php ?id=<?php echo $row["id"];?>">
    <button name="delete" class="butt butt1">Delete Order</button>
    </form><?php
     echo"</td>";
    echo"</tr>";

}
echo"</table>";

}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

}
mysqli_close($conn);

//}

//?>

 
</body>
</html>