<?php

//Llamando a los campos

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

//Datos para el correo

$destinatario = "rickydios27@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre ";
$carta .= "Correo: $correo ";
$carta .= "Telefono: $telefono ";
$carta .= "Mensaje: $mensaje";

//Enviando mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html')

?>
