<?php
// Start the session
session_start();

?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Project Tigom | Resources</title>
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
            
            <a class="navbar-brand" href="index.html">
              <img class = "img-responsive" style="width: 120px" alt = "logo" src = "images/logo1.png">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html">Home</a></li>
              <li><a href="rationale.html">Rationale</a></li>
              <li><a href="guidelines.html">Guidelines</a></li>
              <li class="active"><a href="resources.php">Search</a></li>
              <li><a href="contact.html">Contact Us</a></li> 
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
                <h1 class="head-text">Resources</h1>
              </legend>
            </div>
          </div>
    <br><br><br>
    
    
  <div class="container">
    <div class="search">
    <div class="col-sm-12 wow fadeInRight" data-wow-delay="400ms">
        
<form action="search.php" method="post">
<input id="search" type="text" name="search" placeholder="Search"/>
<input id="search"  type="submit" name="submit" value="Search" />
</form>




    </div>
    <br><br><br>
    </div>
      <div class="col-sm-12">
        <div class="search">
                 

 <?php
         $link=mysql_connect("localhost","root","JAMES1995") or die("Cannot Connect to the database!");
         mysql_select_db("tigom",$link) or die ("Cannot select the database!");
        
         $query="SELECT book_id,title, author_name, genre, summary, source_link FROM author, book WHERE book.author_id = author.author_id and tag=1 and archive=0 order by book_id";
         $resource=mysql_query($query,$link);
         
         echo "<table id=\"tags\" width=\"100%\">";
echo "<table align=\"center\" border=\"0\" width=\"100%\"><tr><th>Title</th><th>Author</th><th>Genre</th><th>Description</th><th></th></tr>";
    
         
while($row=mysql_fetch_array($resource)) {
           echo "<tr><td> <a href=\"articles.php?book_id=".$row[0]."\">".$row[1]."</a></td><td>".$row[2]."</td><td> ".$row[3]." </td><td>".$row[4]."</td><td><a href=\"articles.php?book_id=".$row[0]."\">view</a></td></tr>";
         }
         echo "</table>";
        ?>                 
                   
                  
                  
                  
                  
                  
        </div>
      </div>
      
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
            <a href="index.html">Home</a>
            ·
            <a href="rationale.html">Rationale</a>
            ·
            <a href="guidelines.html">Guidelines</a>
            ·
            <a href="resources.php">Search</a>
            ·
            <a href="contact.html">Contact Us</a>
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