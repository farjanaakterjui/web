
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

</head>
<style>




body {
      border-radius: 10px;
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
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_first_database";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$email=$_SESSION['email'];

$res=mysqli_query($conn,"select * from users where email='$email' ");
      while($row=mysqli_fetch_array($res)){

$name=$row['username'];
$pass=$row['password'];
$add=$row['address'];
$date=$row['signup_date'];

 ?><fieldset>
        <legend align="center">
            <h1><i><b>Personal Information</b></i></h1>
        </legend><br>

        <p align="center">
            <div align="center"><h3><b><?php echo"UserName : ". $name;?></b>
                     <img src="profile.jpg" alt="" align="right" width="300"
                    height="200">
                <br><br>
                <?php echo"Address : ". $add;?><br>
                <?php echo"Sign Up Date : ". $date;?><br>
                E-mail : <a href="mailto:email@"><?php echo $email;?></a></h3></div>
        </p>
    </fieldset>
    <br><br>
       <?php
   }
    ?>
<fieldset>
        <legend align="center"><h1><b><span>Odered Items</span></b></h1></legend><br>
        <table border="1" cellspacing="0" cellpadding="10" align="center">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Ordered Date</th>


                </tr>
            </thead>
            <?php $re=mysqli_query($conn,"select * from customer where email='$email'order by date desc ");
   
                  while($row=mysqli_fetch_array($re)){

         ?> <tbody>
                <tr>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['price']?></td>
                    <td><?php echo $row['quantity']?></td>
                    <td><?php echo $row['t_price']?></td>
                    <td><?php echo $row['date']?></td>
                </tr>
                
            </tbody>
            <?php
          }
              mysqli_close($conn);

            ?>
        </table>
    </fieldset>
</body>
</html>