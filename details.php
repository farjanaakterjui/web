
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
         <li><a href="admin_page.php">Home</a></li>
        <li><a href="ad.php">All Customer Info</a></li>
        <li><a href="details.php">Total revenue(daily)</a></li>
        <li><a href="add_item.php">Add Item</a></li>        
        <li><a href="display.php">Menu</a></li>

      <li style="float:right"> <form action="http://localhost/admin/logout.php" method="get">
  <button class="but but1">Log out</button></form></li>

      </ul>

<fieldset>
        <legend align="center"><h1><b><span>Revenue</span></b></h1></legend><br>
        <table border="1" cellspacing="0" cellpadding="10" align="center">
            <thead>
                <tr>
                    <th> Date</th>
                    <th>Total Revenue</th>
                    


                </tr>
            </thead>
            <?php 
            $servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_first_database";
$conn = mysqli_connect($servername, $username, $password, $dbname);
            $re=mysqli_query($conn,"select  DATE_FORMAT(date, '%M %d, %Y')  da,sum(t_price) a from customer group by DATE_FORMAT(date, '%M %d, %Y') Order by date desc");
   
                  while($row=mysqli_fetch_array($re)){

         ?> <tbody>
                <tr>
                   
                    <td><?php echo $row['da']?></td>
                    <td><?php echo $row['a']?></td>

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