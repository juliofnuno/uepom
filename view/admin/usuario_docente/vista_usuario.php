
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

<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM usuarios WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
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
	
	<body style="background-color: #ffffbf" >

  		<div  align="center" class="p-2 mb-2 bg-dark text-white " style="height:15%;" >
      <img  align="left" src="../../imagen/escudo-estado.png"  Width="225" Height="90"  >
            <img  align="right" src="../../imagen/escudo.png"  Width="100" Height="90"  >
     <br>
        <h3 >
          <b>USUARIOS DOCENTES</b>
        </h3>

      </div>

      <div align="right">
 <a href='cerrar_sesion.php' class="btn btn-danger" > Cerrar Sesion <i class="fas fa-sign-out-alt"></i></a>

</div>
		<div class="container">
			
			<br>

			<center>
			  <table  class=" table table-primary"  >

			  	<tr class="success"  align="center">
			  		<td class="success"  >
			  		    <div class="form-group">
					      <label for="usuario_docente" class="col-sm-9 control-label">USUARIO</label>
					         <div class="col-sm-10">					       
					      <input  type="usuario_docente" class="form-control" id="usuario_docente" name="usuario_docente"  value="<?php echo $row ['usuario_docente'];?>" readonly>
					         </div>
				         </div>
                    </td>	
                     <td>
                    	
                       <div class="form-group">
					          <label for="pass_docente" class="col-sm-9 control-label">Contraseña</label>
					        <div class="col-sm-10">
						      <input type="pass_docente" class="form-control" id="pass_docente" name="pass_docente"  value="<?php echo $row ['pass_docente'];?>" readonly>
					        </div>
				       </div>                  	
                    </td>
				</tr>

                </table>
			  </center>	  

			  <center>
				           <div class="form-group">
					            <div class="col-sm-offset-2 col-sm-10">
						            <a VALUE="Volver" onClick="history.back()" class="btn btn-success text-white" ><i class="far fa-arrow-alt-circle-left"></i> Regresar </a>
						        </div>
				            </div>
				</center>       		
				        	        	     		
				           	    
					
				         
			</form>
		</div>
	</body>

</html>