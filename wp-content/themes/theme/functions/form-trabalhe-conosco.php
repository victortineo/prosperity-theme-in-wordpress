<?php
ini_set('default_charset', 'UTF-8');
$nomeUsuario = '';
$emailUsuario = '';
foreach($_POST as $campo => $valor){
   if($campo == 'Nome') {
   	$nomeUsuario = $valor;
   } else if($campo == 'E-mail') {
   	$emailUsuario = $valor;
   }
}

// PHP MAILER
require 'templates/trabalhe-conosco.php';
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
$from = "developer@madknow.com.br";
$fromName = 'Prosperity';

$host = 'srv136.prodns.com.br';
$username = 'developer@madknow.com.br';
$password = 'INt-12133@M4Dg#';
$port = 465;
$secure = 'ssl';                             // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = $host;  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $username;                 // SMTP username
$mail->Password = $password;                           // SMTP password
$mail->SMTPSecure = $secure;                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = $port;                                    // TCP port to connect to

$mail->setFrom($from, $fromName);
$mail->addAddress($from, $fromName);     // Add a recipient
$mail->addReplyTo($emailUsuario, $nomeUsuario);

$mail->AddAttachment($_FILES['curriculo']['tmp_name'], $_FILES['curriculo']['name']);
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Trabalhe Conosco - Prosperity';
$mail->Body    = $template;

if(!$mail->send()) {
    echo 'Erro ao enviar mensagem. Tente novamente!';
} else {
    echo 'Mensagem enviada com sucesso!';
}