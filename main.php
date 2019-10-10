<?php

// llamando campos

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];

//datos para correo

$destinatario = "camilo.colli@balam.edu.mx";
$asunto = "Contacto desde la web";

$carta = "De: $name \n";
$carta = "Correo: $email \n";
$carta = "Telefono: $number \n";

// Enviando Mensaje

mail($destinatario, $asunto, $carta);
header('mensaje-de-envio.html')

?>
