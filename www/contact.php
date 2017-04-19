<?php

$page_title = "P'S Maritime - Contact";

#inlude db
include 'include/db.php';

#include function
include 'include/function.php';

$subject = array("General Customer Service", "Suggestions", "Product Support");


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
                        <li><a href="services.php">Services</a></li>
                        <li class="active"><a href="contact.php">Contact</a></li>                        
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

<?php  


        $error = array();
    if(array_key_exists('submit',$_POST)){ 
        
        if(empty($_POST['name'])){
        $error['name'] = "Please enter your full names";  
        }

        if(empty($_POST['email'])){
        $error['email'] = "Please enter your email address";   
        }

        if(empty($_POST['number'])){
        $error['number'] = "Please enter your mobile number";   
        }

        if(empty($_POST['subject'])){
        $error['subject'] = "Please enter your subject";    
        }
        
        if(empty($_POST['message'])){
        $error['message'] = "Please enter your message";  
        }
        
        
        if(empty($error)){

        #eliminate unwanted spaces from values in the $_POST array
        $clean = array_map('trim', $_POST);

        #calls function to register user
        doSend($conn, $clean);

        } 

        
    }
    
    if(isset($_GET['success'])){
    
        echo $_GET['success'];
    }
    
    
    
    
    ?>


                    <form action="" method="post" role="form" class="contactForm">

                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php if(isset($_POST['name'])){ echo $_POST['name']; }   ?>"/>
                            <div class="validation"> <?php $display = displayError($error, 'name'); echo $display; ?> </div>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>"/>
                            <div class="validation"> <?php $display = displayError($error, 'email'); echo $display; ?> </div>
                        </div>

                        <div class="form-group">
                            <input type="text" name="number" class="form-control" placeholder="Mobile Number" value="<?php if(isset($_POST['number'])){ echo $_POST['number']; } ?>" />
                            <div class="validation"> <?php $display = displayError($error, 'number'); echo $display; ?> </div>
                        </div>

                        <div class="form-group">
                            <select name="subject" class="form-control">
                    
                            <option value="" >Subject</option>

                            <?php foreach($subject as $sub){ ?>

                            <option value="<?php echo $sub ?>">

                            <?php if(isset($_POST['subject']) && $_POST['subject'] == $sub){
            
                            echo 'checked ="unchecked"';  
                            }

                            ?>

                            <?php echo $sub ?>

                            </option>

                            <?php } ?>
    
                            </select>
                            <div class="validation"> <?php $display = displayError($error, 'subject'); echo $display; ?> </div>   
                        </div>

                        <div class="form-group">
                            <textarea name="message" class="form-control" rows="5" placeholder="Message"> <?php if(isset($_POST['message'])) { echo $_POST['message']; } ?> </textarea>
                            <div class="validation"> <?php $display = displayError($error, 'message'); echo $display; ?> </div>
                        </div>
                        
                <div class="text-center"><button type="submit" class="btn btn-primary btn-lg" name="submit">Send Message</button></div>

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
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>   
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>