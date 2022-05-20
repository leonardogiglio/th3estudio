<?php

$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$mensaje = $_POST ['mensaje'];

$mensaje = "Este mensaje fue enviado por" . $nombre . ",\r\n";
$mensaje .= "Su email es" . $email . ",\r\n";
$mensaje .= "Mensaje" . $mensaje . ",\r\n";

$para = "giglioleonardo@hotmail.com";
$asunto = "Mail enviado desde web Th3 Estudio";

mail ($para, $asunto, utf8_decode ($mensaje), $header);

header ('Location:index.html ');

?>