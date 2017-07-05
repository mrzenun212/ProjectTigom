<?php
// Start the session
session_start();
require 'dbconnect.php';
?>

<html>
<head>
    <title>137</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="jquery/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!--<script src="js/jquery.easing.min.js"></script> -->
    <!-- <script src="js/scrolling-nav.js"></script> -->
  
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">

    <!-- external links for my LOGOS -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">

  
</head>
<body>
  <div class="container">
  <div class="info" align="center">
    <h1 align="center">Project Tigom</h1><span>Mindanao Literature</span><br>
  </div>
</div>
<form action="verifylogin.php" class="form" method="POST">
  <div class="thumbnail"><img src="images/logo1.png"/></div>
    <div id="notification"></div><br>
      <form class="login-form">
        <input type="text" placeholder="username" name="username"/>
        <input type="password" placeholder="password" name="password"/>
          
        <a href="#signup" class="page-scroll">     Sign Up</a><br>
        <button type="submit">login</button>

      </form>
  </div><br>





  <div class ="paragraph" id="signup" style="height:100%;">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4"><br><br><br>
          <form method="POST">
            <div class="form-group">
              <label for="r_username">Username:</label>
              <input type="text" class="form-control" name="r_username"  placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="r_password">Password:</label>
              <input type="password" class="form-control" name="r_password" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-default" name="pay-btn">Submit</button>
          </form>
        </div>
        <div class="col-sm-4">
        </div>
      </div>
    </div>
  </div>

  <?php
        if(isset($_POST['pay-btn'])){
          $r_username=$_POST['r_username'];
          $r_password=$_POST['r_password'];       
          $add_user=mysqli_query($conn,"INSERT INTO admin(username,password) VALUES ('$r_username','$r_password')");
          if($add_user){
                                ?>
                                <script>
                                    alert("success");
                                </script>
                                <?php
                            }
        }
  ?>


</body>
</html> 
