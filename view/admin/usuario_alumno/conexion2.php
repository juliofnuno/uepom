<?php

	$mysqli = new mysqli ('localhost','root','','cevc');
	if ($mysqli->connect_error) {
		die('Error en la conexion' . $mysqli->connect_error);
		# code...
	}

	//printf("Informacion del servidor: %s\n", $mysqli->server_info);

?>
