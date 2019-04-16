<?php include 'include/Header.php';
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
    
    <title>Bootstrap 101 Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	  <link href="css/footer.css" rel="stylesheet">
	  <link href="css/missing.css" rel="stylesheet">
  
  </head>
  <body>
  <form action="" method="post"> 
<div class="container-fluid">
        <div class="row">
          <div class="col-sm-2 left_nav">
              <div><span><a href="add_missing_subject.php">Add Missing/Found Record</a></span><hr>
                    <span><a href="missing_subject.php">Missing/Record List</a></span><hr>
                    <?php 
                      $user= new User(); 
                      $getMsg=$user->getMsg();
                      $countMsg=count($getMsg);
                      session::set("countMsg", $countMsg);

                     ?>
                    <span><a href="inbox.php" class="">Inbox <span class="label label-danger"><?php echo $countMsg; ?></span></a></span>
                  </div>

              </div><!-- /col6 -->
          <!-- details -->
          <div class="col-sm-10">
            <div class="missing-main">
                  <div class="panel panel-default">
                      <div class="panel-heading"><span class="pull_left" label-success>Welcome : <?php
      $rname=session::get("rname");
      if (isset($rname)) {
        echo $rname;  
     }
 ?>
   Your Profile</span></div>
                  </div>

                  
                    
            <table class="table table-striped" border="1 px solid red">
              <th width="20%">Missing records picture</th>
              <th width="30%">Description</th>
              <th width="10%">Status</th>
              <th width="25%">contact Address</th>
              <th width="15%">Action</th>



<?php 
$user= new User(); 
$userdata=$user->getUserProfile(); 
if ($userdata) {
  $i=0;

  foreach ($userdata  as $data) {
    $i++;
  
 ?>

              <tr>
                <td><img src="<?php echo $data['img']; ?>" alt="" height="250" width="250"></td>
                <td><span>Name:</span><?php echo$data['mname'];?><br><span>Date:</span><?php echo $data['ddate'];?><br>     <span>Description</span><?php echo $data['description'];?> 
                </td>
                <td><?php echo $data['status'];?></td>
                <td><span>Contact address:</span><?php echo $data['contact_add'];?><br><span>phone number:</span><?php echo $data['mphone'];?></td>
                <td><button type="submit" class="btn btn-danger btn-sm" id="btn" name="delete">Delete</button> <br> <br> <button type="submit" class="btn btn-success btn-sm" id="btn" name="Update">Update</button></td>
                          
              
<?php  } } else{?>
 
<tr><td>You dont have  any data Yet</td></tr>

<?php } ?>

              

              </table>


<?php
             if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['delete'])){

   

      $db=mysql_connect  ("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error());

      $mydb=mysql_select_db("db_missing"); 
      if($mydb){
        
      }
      

      $sql="Delete from tbl_mfi where id=$id";
      
        $result = mysql_query($sql);
        if($result){
          echo "<script>window.open('profile.php?=Data has been deleted.','_Self)</script>";

        }

}?>
</form>
 </body>

             
           </html>