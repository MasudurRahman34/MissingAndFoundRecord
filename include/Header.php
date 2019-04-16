 <?php include_once'lib/session.php';
   session::init();

   ?>
<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">MISSING RECORDS  BUREAU</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">HOME <span class="sr-only">(current)</span></a></li>
        <li><a href="missing_subject.php">MISSING / FOUND RECORDS</a></li>
		<li><a href="About_us.php">ABOUT US</a></li>
		<li><a href="Contact_us.php">CONTACT US</a></li>

      </ul>
      <form class="navbar-form navbar-left">
	  
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="search">
        </div>
        <button type="submit" class="btn btn-default" name="search">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
     
                 
            

            
               
         
          <?php $id=session::get("id"); 
                $userlogin=session:: get("login");
                $rname=session::get("rname");
                $remail=session::get("remail");
                $countMsg=session::get("countMsg");
              if($userlogin==true){
              ?>
              
              <li><a href="Profile.php?id=<?php echo $id; ?>"> <?php echo $remail;?><span class="badge"><?php echo $countMsg; ?></span></a></li>
                 <li><a href="Profile.php?id=<?php echo $id; ?>"></a></li>
                 <li><a href="logout.php">Log out</a></li>
              <?php } else{ ?>
              <li><a href="Registration.php">Registration</a></li>
              <li><a href="login.php">Log in</a></li>


             <?php } ?>

        
  
		
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>