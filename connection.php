<!DOCTYPE html>
<html>
<head>
    
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Signup Form </title>


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
<body><div class="top-content">
        	
          <div class="inner-bg">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-8 col-sm-offset-2 text">
                          <h1> Sign up Form</h1>
                         
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-6 col-sm-offset-3 form-box">
                        <div class="form-top">
                          <div class="form-top-left">
                            <h3>Signup to our site</h3>
                              <p>Enter your username and password to Signup:</p>
                          </div>
                          <div class="form-top-right">
                            <i class="fa fa-key"></i>
                          </div>
                          </div>
                          <div class="form-bottom">       
            <form action="" method="post">
               <div class="form-group"> 
                 <label>username</label>
                 <input type="text"name="username"class="form-control" required>
               </div>
               <br>
               <div class="form-group"> 
                 <label>E-mail</label>
                 <input type="email"name="email"class="form-control" required>
               </div>
               <br>
               <div class="form-group"> 
                 <label>Password</label>
                 <input type="password"name="password"class="form-control" required>
               </div>
               <br>
               <div class="form-group"> 
                 <label>Address</label>
                 <input type="text"name="address"class="form-control">
               </div>
               <br>
              
               <button type="submit" name="Signup" value="signup" class="btn btn-primary">Sign up!</button>
            </form>
          </div>
        </div>
        <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>...or login with:</h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-1 btn-link-1-facebook" href="#">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
	                        		<i class="fa fa-twitter"></i> Twitter
	                        	</a>
	                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</a>
                        	</div>
                        </div>
      </div>
      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_first_database";
//create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
/*if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo "connected succesfully"."<br>";
}
$sql = "SELECT * FROM users";
$result=mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0) {
   while($row=mysqli_fetch_assoc($result))
   {
       echo $row["id"]." ".$row["username"]." ".$row["email"]."<br>";
   }
}
else {
    echo "whoops! NO result.";
}*/

$email = $_POST['email'];
$pass = $_POST['password'];



//$result = mysqli_query($conn, $sql);

$duplicate=mysqli_query($conn,"select * from admin where  email='$email' ");
if (mysqli_num_rows($duplicate)==0) {
if(isset($_POST['Signup'] ) )
{ 
    $sql = "INSERT INTO admin (email,password) VALUES ('$email','$pass')";
}

if (mysqli_query($conn, $sql)) {
    ?>
    <div class="alert alert-success col-lg-6 col-lg-push-3">
    Rigistration successful,You will get email when your account is approved.
    </div>
    <?php
   // echo "New record created successfully";

}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
else
{
    echo"duplicate data";
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