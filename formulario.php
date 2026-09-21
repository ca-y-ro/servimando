<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<body>
<?php
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$contenido = $_POST["contenido"];
	$para = "servimando@hotmail.es";
	$asunto = "Mensaje enviado desde mi web";
	
	$mensaje = "
	Nombre del remitente: ".$nombre."
	Correo: ".$correo."
	Comentario: ".$contenido."
	";
	mail ($para,$asunto,$header,utf8_decode($mensaje));
	
	$header  = 'From: ' . $correo . " \r\n"; 
	$header .= "X-Mailer: PHP/".phpversion(). " \r\n"; 
	$header .= "Mime-Version: 1.0 \r\n"; 
	$header .= "Content-Type: text/plain";
	
	echo "Hemos recibido su mensaje correctamente, pronto le contestaremos, gracias";
?>
<a href="formulario.html"><h2>Volver</h2></a>
</body>
</html>