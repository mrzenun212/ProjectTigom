<?php
// Start the session
session_start();
require 'dbconnect.php';
?>

<!-- 

  Project Tigom Version 1.0
  Used templates: Oxygen by Themeum

  Notes: Still has many lacking features and still has errors

 -->

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
  <!--<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC|Bree+Serif|Francois+One" rel="stylesheet">-->

  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC" rel="stylesheet">

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

  <!-- CAROUSEL -->
  <div class="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/1.jpg)">
          <div class="captionThis">
            <h1 class="animated fadeInLeftBig" id = "title">Featured Works<span></span></h1>
            <!--<p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p> -->
            <div class="container">
              <div class="blog-posts">
               <div class="row">

                  <!-- Featured lit 1 -->
                  <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                    <div class="post-thumb">
                      
                      <a href="articles.html"><img class="img-responsive" src="images/blog/1.jpg" alt=""></a> 
            
                    </div>

                    <!-- Title Here -->
                    <div class="entry-content">
                      <p>Ibong Ardana and the poop that turns people to stone </p>
                    </div>

                  </div>
                  <!-- End of Featured lit 1 -->
                  
                  <!-- Featured Lit 2 -->
                  <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
                    <div class="post-thumb">
                      <a href="articles.html"><img class="img-responsive" src="images/blog/3.jpg" alt=""></a>
                      

                    </div>
                    
                    <!-- Title Here -->
                    <div class="entry-content">
                      <p>Florante at Laura</p>
                    </div>
                  </div>

                  <!-- End of Featured Lit 2 -->

                  <!-- Featured Lit 3 -->
                  <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1200ms">
                    <div class="post-thumb">
                      <a href="articles.html"><img class="img-responsive" src="images/blog/3.jpg" alt=""></a>
                      

                    </div>
                    
                    <!-- Title here -->
                    <div class="entry-content">
                      <p>Dont Let Me Down wooh</p>
                    </div>
                  </div>
                  <!-- End of FEatured Lit 3 -->

                </div>
                      
              </div>
            </div>

            
          </div>
        </div>

        <div class="item" style="background-image: url(images/slider/2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig" id = "title">Want to <span>sumbit an article?</span></h1>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="submit.html">Submit</a>
            <!--<p class="animated fadeInRightBig"><a href ="submit.html"> Click here!</a></p>-->
            
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/3.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig" id = "title"><span>Support us!</span></h1>
            <p class="animated fadeInRightBig">Contact us for means of donation.</p>
            
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

    </div>
  </div>
  <!-- END OF CAROUSEL -->

  <!-- ABOUT PROJECT TIGOM -->
  <section id="about-us">
    <div class="container">
      <div class="row">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <legend style = "color: white"> 
              <h1 id = "head">About <span>Project Tigom</span></h1>
            </legend> 

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
      </div>

      <div class="row">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <!--<legend style = "color: white"> 
              <h1 id = "head">Map of <span>Mindanao</span></h1>
            </legend>-->

            <img class="img-responsive" src="images/infograohic.png" alt=""> 
          </div>
      </div>

    </div>
  </section><!--/#about-project-->

  <footer class = "footer-distributed" id = "navCon1">
    <div class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="footer-left">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="images/logoPTv2.png" style="width: 250px"></a>
        </div>
      </div>

      <div class="footer-right">
          <p class="footer-links">
            <a href="../index.html">Home</a>
            ·
            <a href="../rationale.html">Rationale</a>
            ·
            <a href="../guidelines.html">Guidelines</a>
            ·
            <a href="../resources.php">Search</a>
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