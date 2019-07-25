
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

</ul>
<div class="row">
    <div class="col-sm-6 col-sm-offset-3 form-box">
        <div class="form-top">
            <div class="form-top-left"> <h3>Add Items</h3></div>
        </div>
            <div class="form-bottom">  
    <form method="post"action="" enctype="multipart/form-data">
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
            
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_first_database";
$conn = mysqli_connect($servername, $username, $password, $dbname);



    $target_dir = "image/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["add"])) {
        $name=$_POST['name'];
  //  $target="images/".basename($_FILES['image']['name']);
    $image=$_FILES['image']['name'];
    $price=$_POST['price'];
    $type=$_POST['type'];
    $sql = "INSERT INTO add_items (name,image,price,type) VALUES ('$name','$image','$price','$type')";   
    
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    if (mysqli_query($conn, $sql)) {
        ?>
        <div class="alert alert-success col-lg-6 col-lg-push-3">
        item insert into database successfully
        </div>
        <?php
       // echo "New record created successfully";
    
    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

?>
 </div>
    </div>
</div>    

<script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script> 
 
</body>
</html>