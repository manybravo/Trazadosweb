<?php
$mail='trazadosweb@gmail.com.ar';
$nombre = $_POST['name'];
$correo = $_POST['email'];
$telefono = $_POST['phone'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];
$thank = "contactossi.html";
$message = "
Nombre: ".$nombre.";
Telefono: ".$telefono.";
Correo: ".$correo.";
Mensaje: ".$mensaje."";
$subject ="Consulta desde formulario";
$headers = 'From: '.$mail . "\r\n" .
'Reply-To: ' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
if (mail($mail, $subject, $message, $headers)) Header("Location: $thank");
?>