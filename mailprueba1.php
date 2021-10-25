<?php
	$nombre = $_POST['nombre'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];

	echo $nombre. "ha dicho <br/>".$mensaje;
	if(mail('marco.palmero2001@gmail.com', $asunto, $mensaje)){
		echo "mail enviado";
	}else{
		echo "algo salió mal";
	}
?>