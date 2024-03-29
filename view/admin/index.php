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
  <body>
  <br>
  <div class="container">
            <div class="row">
            <div class="col-lg-12">
            <div class="col-md-3"><img src="../../imagenes/baner1.jpg" width="80" height="80" class="img-responsive"></div>
            
             <div class="col-md-6">         
               
                <img src="../../imagenes/baner.png" class="img-responsive">
                     
             </div>

             
    <a href="../../controller/cerrarSesion.php">
    <img  align="right" src="../../imagenes/sepescudo.png"  Width="180" Height="80"  >
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
                <h1 class="page-header">Administración del Sitio  : <?php echo ucfirst($_SESSION['nombre']); ?></h1>        
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
                <h2>Pagina Principal</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.</p>
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
