
<!DOCTYPE html>
<html>
<head>
	        <?php

if(isset($_COOKIE['email'] )and isset($_COOKIE['pass']))
{//echo readfile("demo.html");
     // require( "Location:http://localhost/customer/loginconnection.php" ); die;
  require"demo.html";
    exit();}

?> 
    
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Login Form </title>


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
                          <h1> Login Form</h1>
                         
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-6 col-sm-offset-3 form-box">
                        <div class="form-top">
                          <div class="form-top-left">
                            <h3>Login to our site</h3>
                              <p>Enter your username and password to log on:</p>
                          </div>
                          <div class="form-top-right">
                            <i class="fa fa-key"></i>
                          </div>
                          </div>
                          <div class="form-bottom">       
            <form action="loginconnection.php" method="post">
           
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
                      <input type="checkbox" name="remember" /> Remember me
               <button type="submit" name="login" value="login" class="btn btn-primary">login</button>
               <br><br>
               <a style="  float: right" class="reset_pass" href="#">Forgot password?</a>
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
                          <h3> Not registered?</h3>
                          <form action="http://localhost/customer/signup.php" method="get">
                          <button> Create an account</button></form>
                        </div>
      </div>
      </div>
            </div>
            
        </div>

           
      <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>  
 
</body>
</html>