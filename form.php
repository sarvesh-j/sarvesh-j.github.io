<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "sarvesh.ewps@gmail.com";
$subject = "Mail From Protfolio website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@myportfolio.com" . "\r\n" .

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

?>