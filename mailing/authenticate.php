<?php
require_once('phpmailer/PHPMailer.php');
require_once('phpmailer/Exception.php');
require_once('phpmailer/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$obj = new PHPMailer(true);
try{
    $obj->SMTPDebug = 2;
    $obj->isSMTP(true);
    $obj->Host = "mail.server.com";
    $obj->SMTPAuth = true;
    $obj->Username = "youremail@domain.com";
    $obj->Password = "*********";
    $obj->SMTPSecure = "tls";
    $obj->Port = 587;

    $obj->setFrom("nayem@gmail.com");
    $obj->addAddress("nayemishan377@gmail.com");
    $obj->isHTML(true);
    $obj->addAttachment("/opt/lampp/htdocs/php_code/mailing/nayem.pdf");
    $obj->Subject = 'Here is the subject';
    $obj->Body    = 'This is the HTML message body <b>in bold!</b>';
    $obj->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $obj->send();
    echo "Mail sent";
}catch(Exception $e){
    echo "Mail sent failed";
}
