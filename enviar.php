<?php
// llamando a los campos 
$nombre= $_POST['nombre'];
$correo= $_POST['correo'];
$telefono= $_POST['telefono'];
$mensaje= $_POST['mensaje'];
// datos para el correo 

$destinatario = "alejandrocervantesv76@gmail.com"; 
$asunto = "Contacto desde nuestra web de panaderia"; 

$carta = "De: $nombre \n"; 
$carta .= "Correo: $correo \n"; 
$carta .= "Telefono: $telefono \n"; 
$carta .= "Mensaje: $mensaje"; 

//Enviando Mensaje 
mail($destinatario, $asunto, $carta); 
header('Location:mensaje-de-envio.html');
?>