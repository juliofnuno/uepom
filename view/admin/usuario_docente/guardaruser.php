<?php

	require 'conexion.php';
	//$id = $_POST['id'];
	$usuario_docente = $_POST['usuario_docente'];
	$pass_docente = $_POST['pass_docente'];
	//$usuario_docente = $_POST['usuario_docente'];
	//$pass_docente = $_POST['pass_docente'];
	//$usuario_alumno = $_POST['usuario_alumno'];
	//$pass_alumno = $_POST['pass_alumno'];
	
//INSERT INTO usuarios (id, usuario_admin, pass_admin, usuario_docente, pass_docente, usuario_alumno, pass_alumno) VALUES (NULL, 'edgar', 'edgar', 'edgar', 'edgar', 'edgar', 'edgar');

$sql = "INSERT INTO usuarios (id, usuario_admin, pass_admin, usuario_docente, pass_docente, usuario_alumno, pass_alumno, tipo)

 VALUES ( NULL ,'', '', '$usuario_docente', '$pass_docente', '', '','docente')";
	$resultado = $mysqli->query($sql);
?>
 
 <html lang="es">
	<head>
		<TITLE> Usuarios Docente</TITLE>
     <link rel="shortcut icon" href="../../imagen/escudo.png" /> 
		<link href ="open-iconic/svg/trash.svg"> 
      <link rel="stylesheet", href="open-iconic/svg/trash.svg">      

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet"  href="../../bosstrap4/iconos/css/all.min.css">
      <script src="../../bosstrap4/js/jquery.min.js"></script>
      <script src="../../bosstrap4/js/bootstrap.bundle.min.js"></script>  
      <script src="../../bosstrap4/js/popper.min.js"></script>
   <link href ="../../bosstrap4/css/bootstrap.min.css" rel = "stylesheet">
      <link rel="stylesheet", href="../../bosstrap4/css/bootstrap-theme.css">
      <script src="../../bosstrap4/js/jquery-3.1.1.min.css"></script>
      <script src="../../bosstrap4/js/bootstrap.min.js"></script>
      <script src="../../bosstrap4/js/bootstrap.bundle.min.js"></script>
      <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

<link rel="shortcut icon" href="../imagen/escudo.png" />
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO </h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="usuario_docente.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>