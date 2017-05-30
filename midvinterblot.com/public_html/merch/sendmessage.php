<?php
error_reporting(-1);

require '../resources/phpmailer/PHPMailerAutoload.php';

$title = $_POST['subject'];
$usermail = $_POST['email'];
$content = nl2br($_POST['msg']);

/*$title = "ännu ett test";
$usermail = "testosteronmannen@live.com";
$content = "nittonhundranittiosextusen dvärgar dricker latte snart";*/

$msg = "<h2 style='border-bottom:1px dotted #ccc'>Message via Midvinterblot.com</h2>\r\n";
$msg .= "<p>".$content."</p>\r\n";


$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               

$mail->isSMTP();                                      
$mail->CharSet = 'UTF-8';
$mail->Host = 'ssl://smtp.gmail.com';  				  

$mail->SMTPAuth = true;                          
$mail->SMTPSecure = 'ssl';                            
$mail->Host       = "smtp.gmail.com";      
$mail->Port = 465;                                    
$mail->Username = 'midvinterblotband@gmail.com';                 
$mail->Password = 'Delirium.,gil';                         


$mail->AddReplyTo($usermail);
$mail->From = 'mail@midvinterblot.com';
$mail->FromName = 'Midvinterblot Merch Contactbox';
//$mail->addAddress('fiskfisk33@live.com');     // Add a recipient
$mail->addAddress('contact@midvinterblot.com');               // Name is optional

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Merch Message: " . strip_tags($title);
$mail->Body    = $msg;
$mail->AltBody = strip_tags($msg);

if(!$mail->send()) {
    echo 'false';
} else {
    echo 'true';
}
?>