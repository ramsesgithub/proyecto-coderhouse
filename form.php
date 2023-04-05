<!-- SOLO FUNCIONA SI SUBIMOS LA PAGINA A UN SERVIDOR -->


<?php
$nombre = $_POST['name'];
$apellido = $_POST['last-name'];
$numero = $_POST['number'];
$mail = $_POST['email'];
$empresa = $_POST['menssage'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['menssage'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'prueba123@gmail.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:../index.html");
?>