<?php

$page_title = "P'S Maritime - Services";


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo $page_title; ?> </title>
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">      
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!-- =======================================================
        Theme Name: Gp
        Theme URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-templat/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->  
    
  </head>
  <body class="homepage">

 <!-- HEADER BEGINS -->
   
	<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"> <img src="images/pslogo.png"/ height="73px"> </a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li class="active"><a href="services.php">Services</a></li>
                        <li><a href="contact.php">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->	
    </header><!--/header-->

<!-- HEADER ENDS -->


<!--FORM SECTION BEGINS -->

<div class="map">
<!--       <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>   -->
    </div>  
    
    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Get In Touch</h2>
                <p class="lead">Please fill the form below.</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="col-sm-8 col-sm-offset-2">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        
                        <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Send Message</button></div>
                    </form>     
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

<!--FORM SECTION ENDS -->

<!-- BOTTOM SECTION WITH ADDRESS BEGINS -->
    
    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company Address</h3>
                        <ul>
                            <li>MAIN OFFICE <br/> 3B Oko Awo Street,<br/> Victoria Island, Lagos, <br/> Nigeria.</li>                       </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Contact Number</h3>
                        <ul>
                            <li>(234) 01 460-5542 <br/>(234) 01 460 5546</li>                          
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Email Address</h3>
                        <ul>
                            <li>info@psmaritime.com.ng</li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Quick Link</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Contact Us</a></li>                          
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

<!-- BOTTOM SECTION WITH ADDRESS ENDS -->

<!-- SOCIAL SECTION BEGINS -->
    
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                   <div class="social">
                        <ul class="social-share">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                   </div>
                </div>
            </div>
        </div><!--/.container-->
    </div><!--/.top-bar-->

<!-- SOCIAL SECTION ENDS -->

<!-- FOOTER SECTION BEGINS -->
    
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    2017 &copy P'S Maritime.com.ng All Rights Reserved.
                    <div class="credits">
                        
              <!--          <a href="https://dipolimene.com/">Designed</a> by <a href="https://bootstrapmade.com/">DO</a>   -->
                        
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="https://dipolimene.com/">Designed</a> by <a href="https://dipolimene.com/">DO</a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

<!-- FOOTER SECTION ENDS -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>   
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>