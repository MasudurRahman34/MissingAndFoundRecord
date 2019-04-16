<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    
    <link href="css/footer.css" rel="stylesheet">
   <link href="css/carousel.css" rel="stylesheet">
   <link href="css/home.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	 
  </head>
  <body>
  <!-- nav include
    ================================================== -->
  <?php 
      include 'include/Header.php';
      include 'lib/user.php';



  ?>

 
  
  <!-- Carousel
    ================================================== -->
	
	<div class="container-fluid">
	<div class="row">
		<div class="col-sm-6">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="image/certificate1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <p style="color: red; font-size:200% ;">Do you found ?</p>
            <!-- <p><a class="btn btn-lg btn-primary" href="" role="button">View more</a></p>-->

              
              
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="image/Bangladeshi_Passport_Cover.jpg">
          <div class="container">
            <div class="carousel-caption">
              <p style="color:red; font-size:200%;">Do You Found ?</p>
              <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">View more</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="image/raer23.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
             <p style="color: red; font-size:200% ;">Did You Find ?</p>
             <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">View more</a></p><!-->
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
	</div><!-- /col6 -->
	<!-- details -->
	<div class="col-sm-6">
	<div class="details"><p>Welcome to the Bangladesh Missing Records Bureau website. We are the Bangladesh national and international point of contact for all missing recoeds, person  and unidentified investigations. We provide support and advice in order to reach the cases for the exchange of information and expertise in this area. We also maintain the national database of missing  subject and unidentified records.

</p><br><p>Here you can search through some of our unidentified cases to see if you can help us establish their identity.</p>
	</div><!-- details -->
	
	</div><!-- /.row -->
	</div>
	<hr>
	
    <div class="container-fluid">
      <!-- Example row of columns -->
      <div class="row">
	  
        <div class="col-sm-4">
      		<div id="widget">
                <h4>MISSING/FOUND RECORD </h4>
      		  <hr>
                <p>IF you Missed someone/something or found Someone/something easyly you can add to site that cover over the world...</p>
                <p><a class="btn btn-default" href="#" role="button">AD missing people &raquo;</a></p>
          </div>
		   </div>
        <div class="col-sm-4">
      		<div id="widget">
                <h4 class="">SEARCH </h4>
      		      <hr>
                <p>If you lost someone or something search option helps to check out the list..it may help to find the lost things </p>
                <p><a class="btn btn-default" href="#" role="button">SEARCH &raquo;</a></p>
            </div>
    	   </div>
        <div class="col-sm-4">
      		<div id="widget">
                <h4>ABOUT US</h4>
      		      <hr>
                <p>We provides you a database that have the data of found and missing recods or people... We are helping you the reach the things you lost or missed... </p>
                <p><a class="btn btn-default" href="#" role="button">ABOUT US&raquo;</a></p>
             </div>
    	   </div>
    </div>
</div>


<?php include 'include/footer.php';?>

</body>
</html>
