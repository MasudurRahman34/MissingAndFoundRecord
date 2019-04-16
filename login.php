<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 101 Template</title>

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
    include_once 'lib/session.php';
    session::init();


  ?>

  <?php 
    $user= new User();

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['login'])){
      //echo 123;exit;
      $usrLogin=$user->userLogin($_POST);
    }

   ?>  

  
 
  
  <!-- Carousel
    ================================================== -->
<div class="container-fluid">
<h2>Log In </h2>

<?php


if (isset($usrLogin)){
  echo $usrLogin;
}
?>


<form action="" method="POST">

  <div class="container">
    <div class="row">
      <div class="">
        <label><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="remail">

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="rpsw">
        
        <button type="submit" name="login" class="btn btn-primary btn-lg" id="btn">Log in</button>
    	
       
      </div>
  </div>

      <div class="container" style="background-color:#f1f1f1">
        
    	<span class="lpsw"><h4><a href="Registration.php">Forgot Password ?</a></h4></span>
    	
        <span class="psw"><h4><a href="Registration.php">Or Need Registration ?</a></h4></span>
	
    </div>
    <br>
  </form>
</div>

	
	


<?php include 'include/footer.php';?>

</body>
</html>

