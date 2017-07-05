<?php
// Start the session
session_start();
require 'dbconnect.php';
$book_id = $_GET['book_id'];

                      $book_query = mysqli_query($conn,"SELECT * FROM book WHERE book_id = $book_id");
                     $row = mysqli_num_rows($book_query);
                     $archive_row = mysqli_fetch_assoc($book_query);
                     $pub_id = $archive_row['pub_id'];
                     $author_id = $archive_row['author_id'];
                     $author_query = mysqli_query($conn,"SELECT * FROM author WHERE author_id = $author_id");
                     $a_row = mysqli_num_rows($author_query);
                     $author_row = mysqli_fetch_assoc($author_query);
                     $pub_query = mysqli_query($conn,"SELECT * FROM publisher WHERE pub_id = $pub_id");
                     $p_row = mysqli_num_rows($pub_query);
                     $pub_row = mysqli_fetch_assoc($pub_query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Project Tigom</title>
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
              <li><a href="resources.php">Search</a></li>
              <li><a href="contact.html">Contact Us</a></li> 
            </ul>
          </div>
    </div>
  </nav>

<section id="contact">
    <div id="contact-us" class="parallax">
      <div class="container">
        
        <div class="row" >
          <div class="col-sm-1"></div>
            <div class="col-sm-10 wow fadeInLeft" data-wow-delay="400ms"><br>
              <legend style = "color: white"> <br> <br> <br> <br> <br>
                <h1 class="head-text">
                <?php
                             echo "$archive_row[title]"; 
                             ?></h1>
              </legend>
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10 wow fadeInUp" data-wow-delay="400ms">
              <h2>Summary</h2></div>
          </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-2">
            </div>

            <div class="col-sm-8">
              <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-8">
                  <!--mga char2 na isturya sa article-->
                    <div class="form-group">
                      <?php
                             echo "<th>$archive_row[summary]</th>"; 
                             ?>
                    </div>
                  </div>

                  <!--TABLES for genre, author, location, source, book title, publisher, year pub, contact us?, language, url-->
                  <div class="col-sm-4">
                    <div class="form-group">
                        <table rules="all">

                          <tr>
                            <th> </th>
                            <th></th>
                          <tr>
                            <th>Author </th>
                            <?php
                             echo "<th>$author_row[author_name]</th>"; 
                             ?>
                            
                          </tr>

                           <tr>
                            <th>Genre </th>
                            <?php
                             echo "<th>$archive_row[genre]</th>"; 
                             ?>
                          </tr>

                           <tr>
                            <th>Location</th>
                            <?php
                             echo "<th>$archive_row[source_location]</th>"; 
                             ?>
                          </tr>

                           <tr>
                            <th>Source</th>
                            <?php
                             echo "<th>wala ko kabalo</th>"; 
                             ?>
                          </tr>

                           <tr>
                            <th>Publisher </th>
                            <?php
                             echo "<th>$pub_row[pub_name]</th>"; 
                             ?>
                          </tr>

                           <tr>
                            <th>Year published </th>
                            <?php
                             echo "<th>$archive_row[year_pub]</th>"; 
                             ?>
                          </tr>

                           <tr>
                            <th>Language </th>
                            <?php
                             echo "<th>$archive_row[language]</th>"; 
                             ?>
                          </tr>

                           <tr>
                            <th>URL </th>
                            <?php
                             echo "<th>$archive_row[source_link]</th>"; 
                             ?>
                          </tr>
                        </table>
                    </div>
                  </div>             

                </div>

              
                <!--continuation sa ilang mga ka char2ran hahha.. k . bye-->
                <div class="form-group">
                <div class="row">
                <div class="col-sm-0"></div>
                <div class="col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                  <h2>Excerpt</h2></div>
                <div class="col-sm-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">

                <div class="form-group">
                      <?php
                             echo "<th>$archive_row[excerpt]</th>"; 
                             ?>
                    </div>
                </div> <br> <br> <br> <br>                       
              
              <!--char2 rani cya dri from the original code..-->
              </form>   
            </div>
            <div class="col-sm-2">
              <!--<div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Address:</span> 2400 South Avenue A </li>
                  <li><i class="fa fa-phone"></i> <span> Phone:</span> +928 336 2000  </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:someone@yoursite.com"> support@oxygen.com</a></li>
                  <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">www.sitename.com</a></li>
                </ul>
              </div> -->                           
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->


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