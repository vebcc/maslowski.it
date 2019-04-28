<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
//use PHPMailer;

$_POST = array_map('trim', $_POST);

$error = false;

if (!isset($_POST['contact_name']) || empty($_POST['contact_name'])) {
    $error = true;
    echo "name";
}

if (!isset($_POST['contact_email']) || empty($_POST['contact_email']) || !PHPMailer::ValidateAddress($_POST['contact_email'])) {
    $error = true;
    echo "email";
}

if (!isset($_POST['contact_phone']) || empty($_POST['contact_phone'])) {
    $error = true;
    echo "phone";
}

if (!isset($_POST['contact_message']) || empty($_POST['contact_message'])) {
    $error = true;
    echo "message";
}

if (!isset($_POST['contact_check']) || empty($_POST['contact_check']) || (int) $_POST['contact_check'] !== ((int) $_POST['contact_check_data'][0] + (int) $_POST['contact_check_data'][1])) {
    $error = true;
    echo "checknr";
}
if ($error) {
    exit('nok');
}

$mail = new PHPMailer();

$mail->CharSet = 'UTF-8';

$mail->SetFrom($_POST['contact_email'], $_POST['contact_name'], 0);
$mail->AddAddress('vebcc08@gmail.com');
$mail->Subject = 'Wiadomość ze strony internetowej - maslowski.it';
$mail->Body = $_POST['contact_message'];

if (!$mail->Send()) {
    echo "mailno";
    echo $mail->ErrorInfo;
    exit('nok');
}

exit('ok');