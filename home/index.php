<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>Gabriella Whelan</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Bootstrap Css -->
    <link href="bootstrap-assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Style -->
    <link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="plugins/Lightbox/dist/css/lightbox.css" rel="stylesheet">
    <link href="plugins/Icons/et-line-font/style.css" rel="stylesheet">
    <link href="plugins/animate.css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!-- Icons Font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Preloader
	============================================= -->
    <div class="preloader"><i class="fa fa-circle-o-notch fa-spin fa-2x"></i></div>
    <!-- Header
	============================================= -->
    <section class="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="img/logo/GWwebLogo.svg" width="70px" height="70px" class="img-responsive" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                    <div class="col-md-8 col-xs-12 nav-wrap">
                        <ul class="nav navbar-nav">
                            <li><a href="#owl-hero" class="page-scroll">Home</a></li>
                            <li><a href="#services" class="page-scroll">Skills</a></li>
                            <li><a href="#portfolio" class="page-scroll">Work</a></li>
                            <li><a href="#team" class="page-scroll">About</a></li>
                            <li><a href="#contact" class="page-scroll">Contact</a></li>
                        </ul>
                    </div>
                    <div class="social-media hidden-sm hidden-xs">
                        <ul class="nav navbar-nav">
                            <li><a href="https://www.facebook.com/gabriellawhelandesign"><i class="fa fa-facebook"></i></a></li>
                          <!--  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
      

    <!-- Contact me
	============================================= -->
    <section id="contact">
        <div class="container">
            <h2>Contact me</h2>
            <?php
               $name = $_POST["name"];
               $email = $_POST["email"];
               $message = $_POST["message"];
               $errorName = '<p><strong>Please enter your name</strong><p>';
           // if the user has submitted the form 
          if($_POST["submit"]){

             //check for errors
             if(!$name){
             $errors .= $errorName;
              
                }



            }
            ?>
            
            <hr class="sep">
            <p>Get In Touch</p>
            <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
                <form action="" method="post" enctype="text/plain">
                    <div class="form-group">
                        <input type="text" class="form-control" id="Name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="Email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                    </div>
                    <a type="submit" value="Send"class="btn-block">Send</a>
                </form>
            </div>
        </div>
    </section>
 
    
    <!-- Footer
	============================================= -->
    <footer>
        <div class="container">
            <h1></h1>
            <div class="social">
                <a href="https://www.facebook.com/gabriellawhelandesign"><i class="fa fa-facebook fa-2x"></i></a>
              <!--  <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fa fa-dribbble fa-2x"></i></a>-->
            </div>
            <h6>&copy; 2016 GABRIELLA WHELAN</h6>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-assets/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- JS PLUGINS -->
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="plugins/countTo/jquery.countTo.js"></script>
    <script src="plugins/inview/jquery.inview.min.js"></script>
    <script src="plugins/Lightbox/dist/js/lightbox.min.js"></script>
    <script src="plugins/WOW/dist/wow.min.js"></script>
    <!-- GOOGLE MAP -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
</body>

</html>