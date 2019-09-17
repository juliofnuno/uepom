<?php
session_start();
 require 'conexion.php';
$sql = "SELECT * FROM usuarios";
$resultado = $mysqli->query($sql);
?>
  <?php
include("conexion.php");

    
    //session_destroy();
    if (isset($_SESSION['id'])) {
    
      # code...
      
      echo " ";
    
define ('MYSQL_ASSOC', MYSQLI_ASSOC);
    }
    else{
      header("Location: index.php");
    }
  ?>

<!DOCTYPE html>
<html>
<head>  
 <TITLE> Usuarios Admin</TITLE>
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
      <link rel="stylesheet", href="../bosstrap4/css/bootstrap-theme.css">
      <script src="../../bosstrap4/js/jquery-3.1.1.min.css"></script>
      <script src="../../bosstrap4/js/bootstrap.min.js"></script>
      <script src="../../bosstrap4/js/bootstrap.bundle.min.js"></script>
      <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>

<body background=" ../../imagen/fondo-escuela.png">     
      <center>
      <div  align="center" class="p-1 mb-2 bg-dark text-white" >
        <h2 style="color:white" style="text-align: center" class="title">
          <b>CENTRO ESCOLAR PRESIDENTES VENUSTIANO CARRANZA 
            <img  align="left" src="../imagen/escudo-estado.png"  Width="225" Height="90"  >
            <img  align="right" src="../imagen/escudo.png"  Width="100" Height="90"  >      
          </b>
        </h2>
        
        <h3  style="color:white" style="text-align: center" class="title"><b>SECUNDARIA VESPERTINA</b>
        </h3> 
        
       <!--<div align="right">
          <img  src="imagen/directora.jpg"  Width="50" Height="50"  >
        </div>-->         

         </div>     
       </center>

<div align="right">
 <a href='cerrar_sesion.php' class="btn btn-danger" > Cerrar Sesion <i class="fas fa-sign-out-alt"></i></a>

</div>
 <div align="center"> 
  <a href="../inicio.html" class="btn btn-dark" ><h3><i class="fas fa-home"></i> Inicio  </h3></a>

</div>

      <br>
<div align="center">
          
<!-- 
     <a href="../Alumnos/index.php?var=<?php echo$var=$_SESSION['u_usuario'];?>" type="button" class="btn btn-success btn-lg">
         <span class="fas fa-user"></span>
         <h2 style="color:orange" style="text-align: center" class="title">Alumno</h2></a> --->

     <a href="../Alumnos/index.php" type="button" class="btn btn-success btn-lg">
         <span class="fas fa-user"></span>
         <h2 style="color:orange" style="text-align: center" class="title">Alumno</h2></a>    

     <a href="../maestros/maestros.php" type="button" class="btn btn-success btn-lg">
         <span class="fas fa-users"></span>
         <h2 style="color:orange" style="text-align: center" class="title">Docentes</h2></a>

     <a href="index_usuario.php" type="button" class="btn btn-success btn-lg">
         <span class="fas fa-edit"></span>
         <h2 style="color:orange" style="text-align: center" class="title">Administrador</h2></a>      

</div>

</body>
</center> 
</html>










