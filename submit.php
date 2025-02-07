<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(
      !empty($_POST['name'])
      && !empty($_POST['email'])
      && !empty($_POST['subject'])
      && !empty($_POST['message'])
  ){
      $name = $_POST["name"];
      $email = $_POST["email"];
      $subject = $_POST["subject"];
      $message = $_POST["message"];


      $to = "mmansuri95@gmail.com";
      $subject = "New Contact Form Submission";
      $body = "Name: {$name}\nEmail: {$email}\nsubject: {$subject}\nMessage: {$message}";
      $headers = "From: {$email}";


      if (mail($to, $subject, $body, $headers)) {
          echo "Message sent successfully!";
      } else {
          echo "Failed to send message.";
      }
  }
}


?>