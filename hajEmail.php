<?php
if (isset($_POST['name'])) {
   // echo "hello";
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $date = $_POST['date'];
   $Country = $_POST['Country'];
   $city = $_POST['city'];
   $details = $_POST['details'];
   $subject = "Enquiry from " . $name;
   $mailFrom = "s.danish0827@gmail.com";
   $headers = "From:mail.abyazmumbai@gmail.com";
   $to = "$mailFrom";
   $txt = "Name: $name
\nEmail: $email
\nPhone: $phone
\nDate: $date
\nCountry: $Country
\nCity: $city
\nDetails: $details";

   if (mail($to, $subject, $txt, "http://sagartech.online/abyaz/"))    //http://sagartech.online/abyaz//
   {
      echo "1";
   } else {
      echo "0";
   }
}
?>