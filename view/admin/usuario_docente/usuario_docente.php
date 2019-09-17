
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
      header("Location: ../../inicio.html");
    }
  ?>
<?php
require 'conexion.php';
$where="";

if (!empty($_POST)) {
  # code...

    $valor = $_POST['campo'];
    if(!empty($valor)){
      $where = "and usuario_alumno LIKE '%$valor%' ";
}
}



$sql = "SELECT * FROM usuarios   where  cargo like '3' $where";
$resultado = $mysqli->query($sql);


//define ('MYSQL_ASSOC', MYSQLI_ASSOC); 
?>



<HTML lang="es">
   <HEAD>
      <TITLE> USUARIOS </TITLE>
      <TITLE> Usuarios Docente</TITLE>
     <link rel="shortcut icon" href="../../imagen/escudo.png" /> 

       <meta charset="utf-8">

     
    <link href ="open-iconic/svg/trash.svg"> 
      <link rel="stylesheet", href="open-iconic/svg/trash.svg">      

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet"  href="../../../bosstrap4/iconos/css/all.min.css">
      <script src="../../../bosstrap4/js/jquery.min.js"></script>
      <script src="../../../bosstrap4/js/bootstrap.bundle.min.js"></script>  
      <script src="../../../bosstrap4/js/popper.min.js"></script>
   <link href ="../../../bosstrap4/css/bootstrap.min.css" rel = "stylesheet">
      <link rel="stylesheet", href="../../../bosstrap4/css/bootstrap-theme.css">
      <script src="../../../bosstrap4/js/jquery-3.1.1.min.css"></script>
      <script src="../../../bosstrap4/js/bootstrap.min.js"></script>
      <script src="../../../bosstrap4/js/bootstrap.bundle.min.js"></script>
      <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

<link rel="shortcut icon" href="../../../imagen/escudo.png" />

       <script>
        
        function eliminaralumno(id){
          if (confirm("Quiere elimina este usuario:")== true) {
            return true;
          }else {
            return false;
          }
        }
      </script>

   </HEAD >
  <body  style="background-color: #ffffbf">
  	<div  align="center" class="p-2 mb-2 bg-dark text-white " style="height:15%;" >
      <img  align="left" src="../../imagen/escudo-estado.png"  Width="60" Height="90"  >
            <img  align="right" src="../../imagen/escudo.png"  Width="100" Height="90"  >
     <br>
        <h3 >
          <b>USUARIOS DOCENTE</b>
        </h3>

      </div>
<div class="container">
  		
      <div align="right">
 <a href='cerrar_sesion.php' class="btn btn-danger" > Cerrar Sesion <i class="fas fa-sign-out-alt"></i></a>

</div>
 
  
  
 
  <a class="btn btn-success text-white" href="../user.php"><i class="far fa-arrow-alt-circle-left"></i> Regresar </a>
  <a href="nuevo_usuario.php" class="btn btn-success" ><span class="fas fa-plus-circle"></span> Nuevo registro <span class="glyphicon glyphicon-plus-sign"></span></a>
     

       <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" align="right"  class="nav justify-content-end">

          <input align="right" class="form-control col-sm-3"  type="text" id="campo" name="campo" align="right" placeholder="Introdusca EL nombre del usuario" />

          <button type="submit" id="enviar" name="enviar"  class="btn btn-primary" >
            Buscar
            <span class=" fa fa-search"></span>
          </button>  
          
        </form>


      
 
    <script>
      $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        
        $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
      });
    </script>
<br>
<div class="row table-responsive">
  <table class="table table-hover ">
    
    <thead class="bg-dark" style="color: white">
      <tr>
        
        <th> NOMBRE DE USUARIO</th>
        <th> EMAIL</th>
        <th>CONTRASEÑA</th>
        <th> CARGO</th>
        <th class="text-success">MODIFICAR</th>
        <th class="text-info">VISTA</th>
        <th class="text-danger">ELIMINAR</th>
      </tr>
    </thead>

    <tbody class="table-primary" >
      <?php  while ($row = $resultado->fetch_array(MYSQL_ASSOC)) {
       
      ?>
      <tr>
        
        <td><?php echo $row['nombre']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['clave']; ?></td>
        <td><?php echo 'docente'; ?></td>
     
       <td class="success" align="center">
          <a class="btn btn-success" href="modificar_usuario.php?id=<?php echo $row['id']; ?>"><span class="fas fa-pencil-alt"></span></a>
        </td>

      

        <td class ="info" align="center">
           <a class="btn btn-primary" href="vista_usuario.php?id=<?php echo $row['id']; ?>"><span class="fas fa-eye"></span></a>
       
         
        </td>
         <td class ="danger " align="center">
          <a onclick="return eliminaralumno(<?php echo $row ['id']; ?>);"
           class="btn btn-danger" href="eliminar.php?id=<?php echo $row['id'];?>"><span class="fas fa-trash-alt"></span></a></td>

       
    
      </tr>
    <?php } ?>
    </tbody>
  </table>

</div>

	</div>


    
    <script>
      $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        
        $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
      });
    </script>
 
  </body>
</HTML>	