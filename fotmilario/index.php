<?php
$destinatario = 'karina_cienfuegos@uttc.edu.mx'

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$email = $_POST['email'];

$header = "Enviado desde la pagina";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $email, $nombre, $mensajeCompleto, $header);

echo "<script>alert('Correo enviado exitosamente')</script>";
echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";





?>