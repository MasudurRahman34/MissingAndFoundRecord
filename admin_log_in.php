<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	 
	
	  <link href="css/footer.css" rel="stylesheet">
	  <link href="css/login.css" rel="stylesheet">
  </head>
  <body>
  <!-- nav include
    ================================================== -->
  <?php include 'include/Header.html';?>
  
 
  
  <!-- Carousel
    ================================================== -->
<div class="container-fluid">
<h2>Admin Log In </h2>


<form action="/action_page.php">
 <!-- <div class="imgcontainer">
    <img src="image/login-icon.png" alt="Avatar" class="avatar" >
  </div>
-->
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="aname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="apsw" required>
	<input type="checkbox" checked="checked"> Remember me
  
    <button type="submit" class="btn btn-primary btn-lg" id="btn">Log in</button>
	
    
  </div>
<!-- admin log in 
  <div class="container" style="background-color:#f1f1f1">
    
	<span class="lpsw"><h4><a href="Registration.php">Forgot Password ?</a></h4></span>
	
    <span class="psw"><h4><a href="Registration.php">Or Need Registration ?</a><h4></span>
	
  </div> -->
  
  <br>
</form>
</div>
	
	


<?php include 'include/footer.html';?>

</body>
</html>

