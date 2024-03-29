
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_first_database";
$conn = mysqli_connect($servername, $username, $password, $dbname);
?>
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
         <li><a href="admin_page.php">Home</a></li>
        <li><a href="ad.php">All Customer Info</a></li>
        <li><a href="details.php">Total revenue(daily)</a></li>
        <li><a href="add_item.php">Add Item</a></li>        
        <li><a href="display.php">Menu</a></li>

      <li style="float:right"> <form action="http://localhost/admin/logout.php" method="get">
  <button class="but but1">Log out</button></form></li>

      </ul>
<form name="form1" method="post"action="search.php">
  <input type="text" name="t1" placeholder="Enter Item Name"required>
 
  <button name="submit1" class="butt butt1">Search Item</button>
</form>
 
<?php
if(isset($_POST["submit1"]))
{
  $result = mysqli_query($conn, "SELECT * FROM add_items
    WHERE name LIKE '%{$_POST["t1"]}%' ");
    while ($row = mysqli_fetch_array($result)){
  ?><div class="container" >
  <img src="<?php echo $row["image"];?>" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><?php echo $row["name"]."<br>";?>
    <?php echo "price : ".$row["price"]."<br>";?>
    <?php echo $row["type"];?></div>
    <form name="form1" method="post"action=" ">
    <button name="delete" class="butt butt1">Delete Item</button>
    </form>
    <form name="form2" method="post"action="update.php ?id=<?php echo $row["id"];?>">
  <input type="number" name="price" placeholder="price" min="1" max="1000">

            <button name="update" class="butt butt1"style="float:center">Update Price</button>
    </form>
  </div>
</div><?php
    }
}
if(isset($_GET["id"])&& isset($_POST["delete"]))
{

    $id=$_GET["id"];
    // sql to delete a record
$sql = "DELETE FROM add_items WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    $res=mysqli_query($conn,"select * from add_items ");

while($row=mysqli_fetch_array($res)){
  
 ?><div class="container" >
  <img src="<?php echo $row["image"];?>" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><?php echo "<br>".$row["name"]."<br>";?>
    <?php echo "price : ".$row["price"]."<br>";?>
    <?php echo $row["type"];?></div>
    <form name="form1" method="post"action="delete.php ?id=<?php echo $row["id"];?>">
    <button name="delete" class="butt butt1">Delete Item</button>
    </form>
    <form name="form2" method="post"action="update.php ?id=<?php echo $row["id"];?>">
  <input type="number" name="price" placeholder="price" min="1" max="1000">

            <button name="update" class="butt butt1"style="float:center">Update Price</button>
    </form>


  </div>
</div><?php
}
    
?>
<div class="alert alert-success col-lg-6 col-lg-push-3">
item deleted successfully
</div>
<?php
}

else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);

?>

 
</body>
</html>