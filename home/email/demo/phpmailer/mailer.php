<?php
require 'C:/xampp/htdocs/demo/phpmailer/PHPMailerAutoload.php';
require 'class.phpmaileroauthgoogle.php'; // path to the PHPMailer class
require 'class.smtp.php';
require 'class.phpmailer.php';
require 'home/index.html';




$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

//$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Mailer = "smtp";
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '';                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

//$mail->setFrom =$_GET["from"];
$mail->addAddress ('gwhelan1114@gmail.com');     // Add a recipient
$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('gwhelan1114@gmail.com');
$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Email=$_REQUEST['email'];
$mail->Name=$_POST['name'];
$mail->Body=$_POST['body'];

//$mail->AddAttachment($_FILES['file']['tmp_name']);

    

$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}




?>
