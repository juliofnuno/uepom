<?php
	
	require 'conexion.php';
	
	$usuario_admin = $_POST['usuario_admin'];
	$pass_admin = $_POST['pass_admin'];


	
	
	
	$sql = "UPDATE usuarios SET usuario_admin='$usuario_admin', pass_admin='$pass_admin' WHERE usuario_admin = '$usuario_admin'";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		<TITLE> Usuarios Admin</TITLE>
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
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="index_usuario.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
