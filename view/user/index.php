<?php
  // Se prendio esta mrd :v
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
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
    <title>Alumno</title>
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
    <script src="../estudiantes/myjava.js"></script>
  </head>
  <body>
  <div class="container">
            <div class="row">
            <div class="col-lg-12">
            <div class="col-md-3"><img src="../../imagenes/baner1.jpg" width="80" height="80" class="img-responsive"></div>
             <div class="col-md-6">         
               
                <img src="../../imagenes/banerEst.png" class="img-responsive">
                     
             </div>
             Hola Alumno <?php echo ucfirst($_SESSION['nombre']); ?>
    <a href="../../controller/cerrarSesion.php">
      <button type="button" name="button">Cerrar sesion</button>
    </a>

            </div>
            <div class="col-lg-12">              
                <ol class="breadcrumb">
                    <li><a href="../../index.php">Inicio</a>
                    </li>
                    <li class="active">Alumno </li>
                </ol>
            </div>
        </div>
    <!-- ucfirst convierte la primera letra en mayusculas de una cadena -->
  </body>
</html>
