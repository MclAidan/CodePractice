<?php 
header("Location: success.html");
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';


          
$mail = new PHPMailer();

$name = $_POST["name"];
$txt = $_POST["txt"] ;
$email = $_POST["email"];

$txt = wordwrap($txt,70);  
          
$mail->setFrom('zzerohquestion@gmail.com');
$mail->addAddress('zzerohquestion@gmail.com');
$mail->Subject =  'Contact Form Question';
$mail->Body= "   Name:  " . $name ."   Email:  " . $email ."   Question:  " . $txt;
$mail->send();
?>