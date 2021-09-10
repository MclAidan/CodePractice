<?php 
header("Location: success.html");
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';


          
$mail = new PHPMailer();

$name = $_POST["fname"]." ";
$email = $_POST["email"];
$title = $_POST["title"];




 
          
$mail->setFrom('zzerohquestion@gmail.com , ZZEROH');
$mail->addAddress($email);
$mail->Subject =  'ZZEROH, Successful submission';
$mail->isHTML(true);
$mail->Body=
"
<html>


<style>

body 
{
 
 font-family: Raleway;background-color: #F7F7F7;
  margin: 0px;
}



.para
{
  color:#303030;
  font-size: 35px;
  text-align: center;
  margin: 70px;
  padding-top:  0px;
  padding-bottom: :  0px;

}


.subtxt
{
  color:#202020;
  font-size: 35px;
  text-align: center;
  margin-right:  70px;
margin-left:  70px;
margin-top:  70px;
margin-bottom:  0px;
}

.subtxtbod
{
color:#303030;font-size: 20px;
text-align: center;
margin-right:  150px;
margin-left:  150px;
margin-top:  20px;
margin-bottom:  0px;
}




.im
{
  padding: 15px 15px;
}

.center 
{
  display: block;
  margin-left: auto;
  margin-right: auto;
}
	

</style>


<body>

 
< img src = " logo.png" alt = "logo"  class="center im" >


<div class = "para">   
  <h1> Success! </h1>
</div>


<div class="subtxtbod" style="font-size: 23px;">
<p> 
	$name , Thank you for your submission. $title will be processed and posted shortly.
</p>
</div>
<div class="subtxtbod">
<p> 
	If you have questions, concerns or comments about your article please contact us through our contact page.

</p>
</div>

<div class="para">
<p> 
 ZZEROH

</p>
</div>


  
 

</body>
</html>
";



$mail->addAttachment($_FILES['uploaded_file']['tmp_name'],$_FILES['uploaded_file']['name']);
$mail->send();