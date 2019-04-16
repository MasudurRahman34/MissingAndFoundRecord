<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Add missing Subject Missing Project</title>

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

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['addmissing'])){

      $addmissing=$user->missingInsert($_POST);
    }

   ?>
  
 
  
  <!-- Carousel
    ================================================== -->
<div class="container-fluid">
<h2>Add Missing/Found information</h2>

<?php
if (isset($addmissing)){
  echo $addmissing;
}
?>


<form action="" method="POST" enctype="multipart/form-data">

  <div class="container">
          <label><b>Suject Name</b></label>
          <input type="text" placeholder="Enter subject" name="mname">
        <label><b>Status</b></label>
        <input type="radio" name="status" value="Missing" checked> Missing
        <input type="radio" name="status" value="Found"> Found<br>
      
      
      <label><b>Missing or Found Date</b></label>
      <input type="date"  name="ddate">
      
      <label><b>Subject Information</b></label>
      <input type="text" placeholder="Description of Subject Identification" name="description">

      <label><b>Last seen place</b></label>
      <input type="text" placeholder=" " name="lastplace">

      <label><b>Contact Address</b></label>
      <input type="text" placeholder=" " name="contact_add">

      <label><b>Phone number</b></label>
      <input type="text" placeholder=" " name="mphone">

      
        <label><b>image</b></label>
        <input type="file" placeholder="" name="image" id="image" >
        

        
        <button type="submit" class="btn btn-primary btn-lg" id="btn" name="addmissing">Submit</button>
      

  </div>

  <br>
</form>
</div>
  
  


  <?php include 'include/footer.php';;?>

</body>
</html>

