<?php

	$mysqli = new mysqli ('localhost','root','','login');
	if ($mysqli->connect_error) {
		die('Error en la conexion' . $mysqli->connect_error);
		# code...
	}

	$mysqli->set_charset("utf8");
	//printf("Informacion del servidor: %s\n", $mysqli->server_info);
//$mysqli->set_charset("utf8");
?>
