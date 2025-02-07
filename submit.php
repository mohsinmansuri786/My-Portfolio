<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include 'PHPMailer-master/src/Exception.php';
include 'PHPMailer-master/src/PHPMailer.php';

      $name=trim($_POST["name"]);   
      $email= trim($_POST["email"]);
      $subject= trim($_POST["subject"])
      $msg1= trim($_POST["message"]);
  
      
    

   

      $message = '<html><body>';
        $message .= "<h1 style='font-family:Arial, Helvetica, sans-serif; font-size:14px'>A inquiry has been received from mohsin site:-</h1>";
        $message .= '<table width="350" rules="all" style="border:1px solid #069;font-family:Arial, Helvetica, sans-serif; font-size:12px" cellpadding="10">';
        $message .= "<tr><td width='115' style='background: #ccc;'><strong>Name: </strong></td><td>" . $name . "</td></tr>";
        
       
        $message .= "<tr><td style='background: #ccc;'><strong>E-mail: </strong> </td><td>" . $email . "</td></tr>";
        $message .= "<tr><td style='background: #ccc;'><strong>Subject: </strong> </td><td>" . $subject . "</td></tr>";
        $message .= "<tr><td style='background: #ccc;'><strong>Message: </strong> </td><td>" . $msg1 . "</td></tr>";     
        $message .="</td></tr>";
        $message .= "</table>";
        $message .= "<p style='font-family:Arial, Helvetica, sans-serif; font-size:12px'>Regards, <br/>Mohsin Portfolio </p>";
        $message .= "</body></html>";
        


    //   include 'library/mailer/PHPMailerAutoload.php';
      $mail = new PHPMailer;     
      
      // $mail->From = 'noreply@udaipurholiday.com';
      // $mail->FromName = "Udaipurholiday";
      $mail->addReplyTo($email, $name); 

     
     
       $mail->addAddress('mmansuri95@gmail.com');
      //$mail->addCC('');
     

      $mail->isHTML(true);
      $mail->Subject = "An Inquiry has been recieved from Mohsin Portfolio Site";
      $mail->msgHTML($message);
      $mail->Send();
      header('Location:index.html'); 


?>