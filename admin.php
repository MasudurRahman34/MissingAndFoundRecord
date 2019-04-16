<?php  
    include 'include/Header.html';
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
	  <link href="css/missini .css" rel="stylesheet">
  
  </head>
  <body>
  <form action="" method="post">
   
<div class="container-fluid">
        <div class="row">
          <div class="col-sm-3 left_nav">

              <?php $id=session::get("id"); 
                    $userlogin=session:: get("login");
                    $rname=session::get("rname ");
                  if($userlogin==true){
                  ?>
                      <div><span><a href="add_missing_subject.php">Add missing Records</a></span><hr>
                        <span><a href="profile.php">Profile</a></span></div><hr>

                  <?php } else{ ?>
                   <li><a href="login.php">Log in for Add missing cases</a></li><hr>


                 <?php } ?>

              
              <!-- /col6 -->
          <!-- details -->
      
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search" name="inputsearch">
                    <span class="input-group-addon">
                        <button type="submit" name="search" ><a href="search.php">
                            <span class="glyphicon glyphicon-search"></span>
                        </a></button>  
                    </span>
                </div>
            </div>
            <hr>
  </div>


    <div class="col-sm-9">
            <div class="missing-main">
                  <div class="panel panel-default">
                                <div class="panel-heading"><span class="pull_left">Welcome  <?php
                                  $rname=session::get("rname");
                                 
                             ?>
                              :</span></div>
                                              </div>

        <?php 



      if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['search'])){

   

      $db=mysql_connect  ("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error());

      $mydb=mysql_select_db("db_missing"); 
      
      $searchname= $_POST['inputsearch'];

      $sql="SELECT * FROM tbl_mfi where mname LIKE '%$searchname%'";
      
        $result = mysql_query($sql);


if($rows=mysql_fetch_array($result)) {
 echo "Data Found"
       ?>
      <table class="table table-striped" border="1 px solid red">
                      <th width="20%">Missing people picture</th>
                      <th width="40%">Description</th>
                      <th width="10%">Status</th>
                      <th width="30%">contact Address</th>
                      
                    

                      <tr>
                        <td><img src="<?php echo $rows['img']; ?>" alt="" height="250" width="250"></td>
                        <td><span>Name:</span ><?php echo$rows['mname'];?><br><span>Date:</span><?php echo $rows['ddate'];?><br>     <span>Description :</span><?php echo $rows['description'];?> 
                        </td>
                        <td><?php echo $rows['status'];?></td>
                        <td><span>Contact address:</span><?php echo $rows['contact_add'];?><br><span>phone number:</span><?php echo $rows['mphone']?></td>

                          
              
                <?php   } else{?>
                 
                <tr><td>no data found</td></tr>

                <?php } } 

                 ?>
       </table>
                    
             <table class="table table-striped" border="1 px solid red">
                     <th width="20%">Missing people picture</th>
                      <th width="35%">Description</th>
                      <th width="10%">Status</th>
                      <th width="25%">contact Address</th>
                      <th width="10%">action</th>
                      

        <?php 
                        $user= new User(); 
                    $userdata=$user->getUserData(); 
                    if ($userdata) {
                      $i=0;

                      foreach ($userdata  as $data) {
                        $i++;
                      
                     ?>

                      <tr>
                        <td><img src="<?php echo $data['img']; ?>" alt="" height="250" width="250"></td>
                        <td><span>Name:</span><?php echo$data['mname'];?><br><span>Date:</span><?php echo $data['ddate'];?><br>     <span>Description :</span><?php echo $data['description'];?> 
                        </td>
                        <td><?php echo $data['status'];?></td>
                        <td><span>Contact address:</span><?php echo $data['contact_add'];?><br><span>phone number:</span><?php echo $data['mphone']?></td>
                        <td><button type="submit" class="btn btn-danger btn-lg" id="btn" name="delete1">Delete</button></td>
                                  
              
                  <?php  } } else{?>
                   
                  <tr><td>no user data found</td></tr>

                  <?php } ?>
                                    
            </table>

<?php
             if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['delete1'])){

   

      $db=mysql_connect  ("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error());

      $mydb=mysql_select_db("db_missing"); 
      if($mydb){
        echo "conneted";
      }
      

      $sql="Delete from tbl_mfi where mid=$mid";
      
        $result = mysql_query($sql);
        if($result){
          echo "<script>window.open('profile.php?=Data has been deleted.','_Self)</script>";

        }

}?>


        </div>
    </div>
           
</div>







    </div>

  
    <?php include 'include/footer.html';?>

    </form>
</body>
</html>

