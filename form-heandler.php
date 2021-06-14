<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];



$email_form ='info@yourwapside.com';
$email_subject ='new form submisson';
$email_body="user name: $name.\n".
"user email: $visitor_email.\n".
"subject: $subject.\n".
"user message: $message.\n";

$to='harshparmar0421@gmail.com';
$headers = "from: $email_form \r\n";
$headers .="Replt-to:$visitor_email \r\n;
mail($to,$email_subject,$email_body,$headers);
header("location: contect.html");






?>

