<?php
// Start the session
session_start();
require 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Project Tigom | Archive</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/logo1s.png">
  
  
  <style>

</style>
</head><!--/head-->

<body>

<!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

    </div><!--/#home-slider-->
    <!-- Navigation Bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id = "navCon">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
            </button>
            
            <a class="navbar-brand" href="welcome.php">
              <img class = "img-responsive" style="width: 120px" alt = "logo" src = "images/logo1.png">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="welcome.php">Home</a></li>
              <li><a href="archive.php">Archive</a></li>
              <li><a href="submission.php">Submission</a></li>
              <li><a href="resources.php">Resources</a></li>
              <li><a href="logout.php">Log out</a></li> 
            </ul>
          </div>
    </div>
  </nav>

  <!--/#SEARCH-->
  <section id="blog">
    <div class="container">
		<div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
        <br><br><br><br>
		
        <div class="row" >
            <div class="col-sm-1"></div>
            <div class="col-sm-10 wow fadeInLeft" data-wow-delay="400ms"><br>
              <legend style = "color: white">  
                <h1 class="head-text">Archives</h1>
              </legend>
            </div>
          </div>
		<br><br><br>
	  
	  
	<div class="container">
    <?php 
    $message="wala koy nakita!";
    $archive_query = mysqli_query($conn,"SELECT * FROM book WHERE tag=1 and archive=1");
    if(mysqli_num_rows($archive_query)==0){
      echo "No Archive books yet!";
    }else{
    ?> 
		
			<div class="col-sm-12">
				<div class="search">
					<table>
						  <tr>
							<th>Title</th>
							<th>Author</th>
							<th>Genre</th>
							<th>Description</th>
							<th></th>
						  </tr>
						  <?php
              while($archive_row = mysqli_fetch_assoc($archive_query)){
                echo "<tr><td>$archive_row[title]</td>";
                echo "<td>$archive_row[author_id]</td>";
                echo "<td>$archive_row[genre]</td>";
                echo "<td>$archive_row[summary]</td>";
                echo "<td><a href=\"retrieve.php?id=$archive_row[book_id]\">Retrieve</a></td>";
                
              }
            ?>
						
						  
						</table>
				</div>
			</div>
			<?php
      }
      ?>
	    </div>
		</div>
    </div>
  </section><!--/#blog-->

  
  <footer class = "footer-distributed" id = "navCon1">
    <div class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="footer-left">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="images/logoPTv2.png" style="width: 250px"></a>
        </div>
      </div>

      <div class="footer-right">
          <p class="footer-links">
            <a href="../welcome.php">Home</a>
            ·
            <a href="../rationale.html">Rationale</a>
            ·
            <a href="../guidelines.html">Guidelines</a>
            ·
            <a href="resources.php">Search</a>
            ·
            <a href="../contact.html">Contact Us</a>
        </p>

        <p class="footer-company-name pull-right">Designed by <a href="http://www.themeum.com/">Themeum</a></p></p>
        
      </div>

    </div>
  </footer>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</body>
</html>