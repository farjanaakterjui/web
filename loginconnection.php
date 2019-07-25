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
$sql=mysqli_query($conn,"select * from admin where email='$email' and password='$pass' ");
if(mysqli_num_rows($sql)==1)
{
   include"admin_page.php";
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