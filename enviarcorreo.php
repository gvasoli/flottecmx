<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$destinatario = "1hitman19@gmail.com";
$asunto = "Correo de Contacto";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

mail($destinatario, $asunto, $carta);

//header("Location:contacto.php");

?>
