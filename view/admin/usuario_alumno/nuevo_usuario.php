<?php
session_start();
 require 'conexion.php';
$sql = "SELECT * FROM usuarios";
$resultado = $mysqli->query($sql);
?>
  <?php
include("conexion.php");

    
    //session_destroy();
    if (isset($_SESSION['u_usuario'])) {
    
      # code...
      
      echo " ";
    
define ('MYSQL_ASSOC', MYSQLI_ASSOC);
    }
    else{
      header("Location: ../../inicio.html");
    }
  ?>
<html lang="es">
	<head>
		<TITLE> Usuarios Alumno</TITLE>
     <link rel="shortcut icon" href="../../imagen/escudo.png" /> 
       <meta charset="utf-8">

      
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
	
	<body style="background-color: #ffffbf">
			<div  align="center" class="p-1 mb-2 bg-dark text-white" >
        <h2 style="color:white" style="text-align: center" class="title">
        	 <img  align="left" src="../../imagen/escudo-estado.png"  Width="13%" Height="13%"  >
            <img  align="right" src="../../imagen/escudo.png"  Width="8%" Height="13%"  >
        	<br>

          <b>Agregar Nuevo Usuario  </b>        
        </h2>
    </div>

    <div align="right">
 <a href='cerrar_sesion.php' class="btn btn-danger" > Cerrar Sesion <i class="fas fa-sign-out-alt"></i></a>

</div>
		<div class="container">
			
		
<form class="form-horizontal" method="POST" action="guardaruser.php" autocomplete="off">



<table  class="table table-primary" >

  

 <div class="form-group">		
					
						<a VALUE="Volver" onClick="history.back()" class="btn btn-success text-white" ><i class="far fa-arrow-alt-circle-left"></i> Regresar </a>
						<button type="submit" class="btn btn-info">Guardar <span class="glyphicon glyphicon-floppy-saved"></span></button>
					
				</div>
 
<tr class="success">
    <td>
    	<div class="form-group">
					<label for="usuario_alumno" class="col-sm-6 control-label">Nombre del Usuario:</label>
					<div class="col-sm-10">
						<input type="usuario_alumno" class="form-control" id="usuario_alumno" name="usuario_alumno"  required>
					</div>
				</div>
    </td>

    <td>
    	<div class="form-group">
					<label for="pass_alumno" class="col-sm-3 control-label">Contraseña:</label>
					<div class="col-sm-10">
						<input type="pass_alumno" class="form-control" id="pass_alumno" name="pass_alumno"  required>
					</div>
				</div>
    </td>
<tr>
	
</tr>

    </tr>	
 
</div>

	</body>
</html>