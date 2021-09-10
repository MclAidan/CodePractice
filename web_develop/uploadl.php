<?php 
header("Location: successl.html");
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';


          
$mail = new PHPMailer();

$name = $_POST["fname"]." ".$_POST["lname"];
$email = $_POST["email"];
$title = $_POST["title"];
$author = $_POST["author"];
$field = $_POST["field"];
$abstract = $_POST["abstract"];
$agree = $_POST["agree"];
$filename = $_FILES['uploaded_file']['name'];



 
          
$mail->setFrom('zzerohquestion@gmail.com');
$mail->addAddress('zzerohquestion@gmail.com');
$mail->Subject =  'Literature Upload Request';
$mail->isHTML(true);
$mail->Body=
"
<html>

<body>

<table>
<tr>
    <th> $name </th>
    <th>$email</th>
    <th>$field</th>
    <th>$title</th>
    <th>$author</th>
    <th>$abstract</th>
    <th>$agree</th>
    <th>$filename</th
    
  
 </tr>
</table>

</body>
</html>



";



$mail->addAttachment($_FILES['uploaded_file']['tmp_name'],$_FILES['uploaded_file']['name']);
$mail->send();


$mail = new PHPMailer();
$name1 = $_POST["fname"];
$email1 = $_POST["email"];
$title1 = $_POST["title"];

$mail->setFrom('zzerohquestion@gmail.com');
$mail->addAddress($email1);
$mail->Subject =  'Succesfull Submission';
$mail->isHTML(true);
$mail->Body=
"
<html>

<body>

<h1>Thank you for your submission to ZZEROH.</h1>
<h2>We are processing your article and it will be displayed soon in our Journal.</h2>
<h2>If you have any questions please feel free to contact us through our <a href='http://zzeroh.net/contact.html'>contact page</a>.</h2>
<h2>ZZEROH</h2>


</body>



";
$mail->send();
?>