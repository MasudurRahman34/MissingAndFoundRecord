<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Missing Project</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	  <link href="css/footer.css" rel="stylesheet">
	  <link href="css/login.css" rel="stylesheet">
  </head>
  <body>
  <!-- nav include
    ================================================== -->
  <?php include 'include/Header.php';
        include 'lib/user.php';
  ?>
  

  <?php 
    $user= new User();

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['register'])){

      $usrRegi=$user->userRegistration($_POST);
    }

   ?>
  
 
  
  <!-- Carousel
    ================================================== -->
<div class="container-fluid">
<h2>Please fill up the form And Registered</h2>

<?php
if (isset($usrRegi)){
  echo $usrRegi;
}
?>


<form action="" method="POST">

  <div class="container">
    <label><b>Your Name</b></label>
    <input type="text" placeholder="Enter Username" name="rname">
	
	<label><b>Password</b></label>
	<input type="password" placeholder="Enter Password" name="rpsw">
	
	<label><b>Email Address</b></label>
    <input type="text" placeholder="Enter Email" name="remail">
        
    <button type="submit" class="btn btn-primary btn-lg" id="btn" name="register">Submit</button>
	

  </div>

  <br>
</form>
</div>
	
	


<?php include 'include/footer.php';?>

</body>
</html>

