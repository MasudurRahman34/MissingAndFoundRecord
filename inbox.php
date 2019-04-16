<?php  
    include 'include/Header.php';
    include 'lib/user.php';
    include_once 'lib/session.php';
    session::init();
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Missing records</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/missin.css" rel="stylesheet">
  
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive-sm">
            <table class="table table-hover table-bordered table-striped">
              <th width="30%">Message</th>
              <th width="20%">Contact Email</th>
              <th width="25%">Contact Adress</th>
              <th width="10%">Action</th>
<?php

    $user= new User(); 
    $userdata=$user->getMsg();

  foreach ($userdata as $userdata) { ?>

              <tr>
                
                <td><?php echo $userdata['contactEmail']; ?></td>
             
                <td><textarea cols="5" rows="5" class="form-control" name="address"><?php echo $userdata['cAddress']; ?></textarea></td>
             
                <td><textarea cols="5" rows="5" class="form-control" name="message"><?php echo $userdata['cMessage']; ?></textarea></td>
                <td><a href="" class="btn btn-success">Reply</a></td>
            
              </tr>
 
<?php  } ?>
        </table>
      </div>
    </div>
  </div>
 <a href="profile.php" class="btn btn-primary">Back</a>