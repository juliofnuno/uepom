<?php
  // Se prendio esta mrd :v
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
    /*
      Para redireccionar en php se utiliza header,
      pero al ser datos enviados por cabereza debe ejecutarse
      antes de mostrar cualquier informacion en el DOM es por eso que inserto este
      codigo antes de la estructura del html, espero haber sido claro
    */
    header('location: ../../index.php');
  }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <link rel="shortcut icon" href="../imagenes/logoUNI.ico" type="image/x-icon">
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <link href="../../css/modern-business.css" rel="stylesheet">
    <link href="../../css/estilo.css" rel="stylesheet">
    <link href="../../css/modern-business.css" rel="stylesheet">
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../../js/jquery.js"></script>
    <script src="../js/back-to-top.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../estudiantes/myjava.js"></script>
  </head>
  <body >
  <br>
  <div class="container">
            <div class="row">
            <div class="col-lg-12">
            <div class="col-md-3"><img src="../../imagenes/baner1.jpg" width="80" height="80" class="img-responsive"></div>
            
             <div class="col-md-6">         
               
                <img src="../../imagenes/baner.png" class="img-responsive">
                     
             </div>

             Hola Administrador <?php echo ucfirst($_SESSION['nombre']); ?>
    <a href="../../controller/cerrarSesion.php">
    <img  align="right" src="../../imagenes/baner1.jpg"  Width="80" Height="80"  >
    </a>

            </div>
            <div class="col-lg-12">              
                <ol class="breadcrumb">
                    <li><a href="../../index.php">Inicio</a>
                    </li>
                    <li class="active">Administrador</li>
                </ol>
            </div>
        </div>
    <!-- ucfirst convierte la primera letra en mayusculas de una cadena -->
    <?php
include ('../../includes/menuAdmin.php');
    ?>
    <!-- Page Content -->
    <br>
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
            <div class="col-md-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../imagenes/admin.png" width="100" height="100"></div>
             <div class="col-md-9">      
             <center>
             <h1 class="page-header">Administracion de Usuarios</h1>        
             </center>   
             </div>                 
            </div>
        </div>
        <!-- /.row -->
        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <?php
            include('../../includes/menu_admin.php');
             ?>
            <!-- Content Column -->
            <div class="col-md-9">
            <div class="content"  style=" background-color: #ffffff">
          <br><br>

         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <a href="../../view/admin/usuario_alumno/usuario_alumno.php" type="button" class="btn btn-success btn-lg">
         <span class="fas fa-user"></span>
         <h2 style="color:white" style="text-align: center" class="title">Alumno</h2></a>    
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="usuario_docente/usuario_docente.php" type="button" class="btn btn-success btn-lg">
         <span class="fas fa-users"></span>
         <h2 style="color:white" style="text-align: center" class="title">Docentes</h2></a>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="usuario_admin/index_usuario.php" type="button" class="btn btn-success btn-lg">
         <span class="fas fa-edit"></span>
         <h2 style="color:white" style="text-align: center" class="title">Administrador</h2></a>   
         <br><br>   <br>

</div>
            </div>
        </div>
        <!-- /.row -->
        <hr>
    </div>
 
    <script src="../../js/jquery.js"></script>
         <script src="../../js/back-to-top.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <?php
include('../../includes/footer.php');
 ?>
  </body>
</html>
