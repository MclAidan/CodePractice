<?php 
header("Location: success.html");
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';


          
$mail = new PHPMailer();

$name = $_POST["name"];
$txt = $_POST["txt"] ;
$email = $_POST["email"];
$inst = $_POST["institution"];


$txt = wordwrap($txt,70);  
          
$mail->setFrom('zzerohquestion@gmail.com');
$mail->addAddress('zzerohquestion@gmail.com');
$mail->Subject =  'Batch College';
$mail->Body= "   Name:  " . $name ."   Inst:  " . $inst . "   Email:  " . $email ."   Question:  " . $txt;
$mail->send();
?>