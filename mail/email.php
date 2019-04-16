<?php
 require "PHPMailer-master/PHPMailerAutoload.php";
		                  
		                 $mail = new PHPMailer;

		                 $mail->isSMTP();                               
		                 $mail->Host = 'smtp.gmail.com'; 
		                 $mail->SMTPAuth = true;                            
		                 $mail->Username = 'pc0015@diit.info'; //change
		                 $mail->Password = 'diit123456';           //chnages
		                 $mail->SMTPSecure = 'tls';                           
		                 $mail->Port = 587;                             
		                 //$mail->SMTPDebug = 2;                             
		            

		                  //$mail->addAddress('srabon.bilash@outlook.com', 'Srabon Chowdhury'); 
		                  $mail->addAddress($email); //session email  
		                  $mail->isHTML(true);             



		                  $mail->Subject = 'Order Report form upet';
		                  $mail->Body    = '<h4>Hello '.$email.'...</h4><br/><br/><em>
		                     <em>welcome to <a href="http://localhost/upet/">www.upet.com</a>.<br/><h3>
		                      your order is placed:<br><em>your order invoice id is : </em>
		                        '.$ivid.'</h3><br/>Please confirm your payment  for offline payment-method</br><em> </em>';


		                  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		                  if(!$mail->send()) {
		                        array_push($errors, "Message could not be sent.<br/>there is an error in connection".mysql_errno());
		                      //echo 'Mailer Error: ' . $mail->ErrorInfo;
		                    //$fmsg = "Invalid Login Credentials";
		                    } else {
		                              //echo "User exits, create session";
		                            $_SESSION['customer'] = $email;
		                          $_SESSION['customerid'] = $uid;
		                        header("location: my-account.php");
		                  }

						}//email end
?>