<?php
/**
 * Created by PhpStorm.
 * User: archie
 * Date: 3/21/16
 * Time: 10:09 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Elgeyo Tours &amp; Travel | Home</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--Font Awesome Icons-->
    <link href="font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container-fluid"><!--main container-->
        <div class="row" style="margin-top: 10px;"><!--logo,social,contacts-->
    <div class="col-md-3 col-sm-3"><!--logo-->
        <img src="img/logo.png" class="img-responsive" style="margin-top: 20px;">
            </div><!--logo-->
            <div class="col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-sm-7 col-md-7"><!--contact info and menu-->
                <div class="row" style="margin-top: 0px;"><!--contact info-->
                    <div class="col-sm-3">&nbsp;</div>
                <div class="col-sm-6">
                    <p><i class="fa fa-phone"></i>&nbsp;+1 808 603 6035 | +1 808 603 6035</p>
                    <p><i class="fa fa-envelope"></i>&nbsp;info@elgeyotravel.com</p>

                </div>
                    <div class="col-sm-6">&nbsp;</div>
            </div><!--contact info-->
                <div class="row"><!--menu-->
                    <div class="col-sm-12">
                        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">About Us</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Services<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Contact Us</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
                    </div>
                </div><!--menu-->
            </div><!--contact info and menu-->

    </div><!--logo,social,contacts-->
        <div class="row"><!--slideshow-->
            <div class="col-sm-12 col-md-12">
                 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide img-responsive" src="slideshow/airline%20pic%203.jpg"  height="400px" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Image 1</h1>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide img-responsive" src="slideshow/beach.png" alt="Second slide" height="400px">
          <div class="container">
            <div class="carousel-caption">
              <h1>Image 2</h1>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide img-responsive" src="slideshow/kenya-airways-boeing-777.jpg" height="400px" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


            </div>
        </div><!--slideshow-->
    </div><!--main container-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
