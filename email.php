
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

<?php


if (isset($_GET['emailid'])) {
    $id= $_GET['emailid'];
    $user= new User(); 
    $userdata=$user->getMsgData($id);

  foreach ($userdata as $userdata) { ?>


  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
  <form action="" method="POST">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" value="<?php echo $userdata['remail']; $userdata['rname'];}}?>" name="remail" disabled>
  </div>
  <div class="form-group">
    <label for="email">Your Email Adress</label>
    <input type="email" class="form-control" id="email" name="memail" required>
  </div>
  <div class="form-group">
    <label for="pwd">Your Contact Address</label>
    <textarea cols="5" rows="5" class="form-control" name="address"></textarea>
  </div>
    <div class="form-group">
    <label for="pwd">Your Message</label>
    <textarea cols="5" rows="5" class="form-control" name="message"></textarea>
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default" name="send">Send Message</button>
</form>




<?php 

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['send'])){
  $toName=$userdata['rname'];
  $toId=$userdata['id'];
  $toEmail=$userdata['remail'];

  $contactEmail=$_POST['memail'];
  $cAddress=$_POST['address'];
  $cMessage=$_POST['message'];


require "mail/PHPMailer-master/PHPMailerAutoload.php";
                      
                     $mail = new PHPMailer;

                     $mail->isSMTP();                               
                     $mail->Host = 'smtp.gmail.com'; 
                     $mail->SMTPAuth = true;                            
                     $mail->Username = 'shlaravel@gmail.com'; //change
                     $mail->Password = 'slara1234';           //chnages
                     $mail->SMTPSecure = 'tls';                           
                     $mail->Port = 587;                             
                     //$mail->SMTPDebug = 2;                             
                

                      //$mail->addAddress('srabon.bilash@outlook.com', 'Srabon Chowdhury'); 
                      $mail->addAddress($toEmail); //session email  
                      $mail->isHTML(true);             



                      $mail->Subject = 'Missing/Found Message ';
                      $mail->Body    = '<h4>Hello '.$toName.'...</h4><br/><br/><em>
                         <em>Thanks for Your <a href="http://localhost/Record/">www.Missingbureau.com</a>.<br/><h3>SomeOne Notifided You>> '.$cMessage.'
                          :<br><em>:</em>
                            </h3><br/>Contact Address: '.$cAddress.' and Email address : '.$contactEmail.'</br><em> </em>';


                      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                      if(!$mail->send()) {
                            array_push($errors, "Message could not be sent.<br/>there is an error in connection".mysql_errno());
                          //echo 'Mailer Error: ' . $mail->ErrorInfo;
                        //$fmsg = "Invalid Login Credentials";
                        }else{
                          $userMessage=$user->userMessage($_POST,$toId);
                          if (isset($userMessage)){
                                  echo $userMessage;
                                }
                        }

      }
 ?>


    <?php include 'include/footer.php'; ;?>

    </form>
    </div>
      </div>
    </div>
</body>
</html>