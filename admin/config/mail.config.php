/************* ✨ Windsurf Command ⭐ *************/
<?php
require_once __DIR__ . '/vendor/phpmailer/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/phpmailer/src/SMTP.php';

$phpmailer = new PHPMailer\PHPMailer\PHPMailer(true);

$phpmailer->isSMTP();
$phpmailer->Host = 'smtp.mailtrap.io';
$phpmailer->SMTPAuth = true;
$phpmailer->Username = 'f9c6cacf7f7ca1';
$phpmailer->Password = '88c5b2c3d0d2f4';
$phpmailer->SMTPSecure = 'tls';
$phpmailer->Port = 2525;


/*******  58a73e3f-f90f-42d2-96b3-f38dba450acc  *******/