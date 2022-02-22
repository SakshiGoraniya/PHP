<?php
  require("phpmailer-master/src/PHPMailer.php");
  require("phpmailer-master/src/SMTP.php");
  require("phpmailer-master/src/Exception.php");


  $mail = new phpmailer\PHPMailer\PHPMailer();
  $mail->IsSMTP(); 

  $mail->CharSet="UTF-8";
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPDebug = 1; 
  $mail->Port = 465 ; //465 or 587

   $mail->SMTPSecure = 'ssl';  
  $mail->SMTPAuth = true; 
  $mail->IsHTML(true);

  //Authentication
  $mail->Username = "sakshigoraniya13@gmail.com";
  $mail->Password = "";

  //Set Params
  $mail->SetFrom("sakshigoraniya13@gmail.com");
  $mail->AddAddress("sakshigoraniya13@gmail.com");
  $mail->AddAddress("divyeshjadeja13@gmail.com");
  $mail->Subject = "Message for Test";
  $mail->Body = "hello";


   if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
   } else {
      echo "Message has been sent";
   }
?>
