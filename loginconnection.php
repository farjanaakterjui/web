<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_first_database";
//create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


if(isset($_POST['login']))
{
    $email = $_POST['email'];
$pass = $_POST['password'];
session_start();
$_SESSION['email']= $email;  
$sql=mysqli_query($conn,"select * from users where email='$email' and password='$pass' ");
if(mysqli_num_rows($sql)== 1 )
{
    if(isset($_POST['remember'])){
    $rem=$_POST['remember'];

	setcookie ("email",$_POST["email"],time()+ 3600);
	setcookie ("pass",$_POST["password"],time()+ 3600);
}

  include"demo.html";
    exit();

   
}
else
{
	
    include"success.php";

    exit();
}
}
mysqli_close($conn);
?>