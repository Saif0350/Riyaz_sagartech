<?php
$statusMsg='';
if(isset($_FILES["file"]["name"])){
   $email = $_POST['email'];
    $name = $_POST['name'];
    $phone= $_POST['phone'];
    $address = $_POST['address'];
    $passport= $_POST['passport'];
    $poi=$_POST['poi'];
    $dob=$_POST['dob'];
    $doi=$_POST['doi'];
    $doe=$_POST['doe'];
    
$fromemail =  $email;
$subject="Retail";
$email_message = '<h2>Contact Request Submitted</h2>
                    <p><b>Name:</b> '.$name.'</p>
                    <p><b>Email:</b> '.$email.'</p>
                    <p><b>phone:</b> '.$phone.'</p>
                    <p><b>Address:</b><br/>'.$address.'</p>
                    <p><b>Passport Number:</b> '.$passport.'</p>
                    <p><b>Place of Issue:</b> '.$poi.'</p>
                    <p><b>Date Of Birth:</b> '.$dob.'</p>
                    <p><b>Date Of Issue:</b> '.$dob.'</p>
                    <p><b>Date Of Expiry:</b> '.$dob.'</p>';
$email_message.="Please find the attachment";
$semi_rand = md5(uniqid(time()));
$headers = "From: ".$fromemail;
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
 
    $headers .= "\nMIME-Version: 1.0\n" .
    "Content-Type: multipart/mixed;\n" .
    " boundary=\"{$mime_boundary}\"";
 
if($_FILES["file"]["name"]!= ""){  
	$strFilesName = $_FILES["file"]["name"];  
	$strContent = chunk_split(base64_encode(file_get_contents($_FILES["file"]["tmp_name"])));  
	
	
    $email_message .= "This is a multi-part message in MIME format.\n\n" .
    "--{$mime_boundary}\n" .
    "Content-Type:text/html; charset=\"iso-8859-1\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" .
    $email_message .= "\n\n";
 
 
    $email_message .= "--{$mime_boundary}\n" .
    "Content-Type: application/octet-stream;\n" .
    " name=\"{$strFilesName}\"\n" .
    //"Content-Disposition: attachment;\n" .
    //" filename=\"{$fileatt_name}\"\n" .
    "Content-Transfer-Encoding: base64\n\n" .
    $strContent  .= "\n\n" .
    "--{$mime_boundary}--\n";
}
$toemail="s.danish0827@gmail.com";	

if(mail($toemail, $subject, $email_message,$headers)){
   $statusMsg= "Email send successfully with attachment";
}else{
   $statusMsg= "Not sent";
}
}
   ?>