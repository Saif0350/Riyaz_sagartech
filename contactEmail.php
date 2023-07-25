<?php


//require 'PHPMailer/PHPMailerAutoload.php';

if (isset($_POST['name'])) {
   // echo "hello";
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $message = $_POST['message'];
   $subject = "Enquiry from " . $name;
   $mailFrom = "s.danish0827@gmail.com";
   $headers = "From:mail.abyazmumbai@gmail.com";
   $to = "$mailFrom";
   $txt = "Name: $name
\nEmail: $email
\nPhone: $phone
\nMessage: $message";


   if (mail($to, $subject, $txt, "http://sagartech.online/abyaz/"))    //http://sagartech.online/abyaz//
   {
      echo "1";
   } else {
      echo "0";
   }
}
?>