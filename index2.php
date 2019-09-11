<?php

  /*
    En ocasiones el usuario puede volver al login
    aun si ya existe una sesion iniciada, lo correcto
    es no mostrar otra ves el login sino redireccionarlo
    a su pagina principal mientras exista una sesion entonces
    creamos un archivo que controle el redireccionamiento
  */

  session_start();

  // isset verifica si existe una variable o eso creo xd
  if(isset($_SESSION['id'])){
    header('location: controller/redirec.php');
  }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title >Login SIGC</title>


      
      <link href ="open-iconic/svg/trash.svg"> 
      <link rel="stylesheet", href="open-iconic/svg/trash.svg">      

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet"  href="../bosstrap4/iconos/css/all.min.css">
      <script src="bosstrap4/js/jquery.min.js"></script>
      <script src="bosstrap4/js/bootstrap.bundle.min.js"></script>  
      <script src="bosstrap4/js/popper.min.js"></script>
      <link href ="bosstrap4/css/bootstrap.min.css" rel = "stylesheet">
      <link rel="stylesheet", href="bosstrap4/css/bootstrap-theme.css">
      <script src="bosstrap4/js/jquery-3.1.1.min.css"></script>
      <script src="bosstrap4/js/bootstrap.min.js"></script>
      <script src="bosstrap4/js/bootstrap.bundle.min.js"></script>
      <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
      <link rel="shortcut icon" href="imagenes/baner1.jpg" />
    <!-- Importamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome: para los iconos -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
    <link rel="stylesheet" href="css/sweetalert.css">
    <!-- Estilos personalizados: archivo personalizado 100% real no feik -->
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body background=" imagenes/fondov.jpg">

    <!--
      Las clases que utilizo en los divs son propias de Bootstrap
      si no tienes conocimiento de este framework puedes consultar la documentacion en
      https://v4-alpha.getbootstrap.com/getting-started/introduction/
    -->
    <div class="content">  
      <div  align="center" class="p-1 mb-2 bg-dark text-white" >
        <h2 style="color:white" style="text-align: center" class="title">
          <b>UNIDAD EDUCATIVA PROFESOR PORFIRIO O. MORALES
            <img  align="left" src="imagenes/baner1.jpg"  Width="6%" Height="4%"  >
            <img  align="right" src="imagenes/escudo.png"  Width="80" Height="80"  >      
          </b>
        </h2>
        
        <h3  style="color:white" style="text-align: center" class="title"><b>SECCIÓN BACHILLERATO</b>
        </h3> 
           

         </div>     
      


<div class="container" >
<center>
<br>
    <h3  style="color:white" style="text-align: center" class="title"><b>INICIO DE SESION</b>
      <br>
        </h3>
    	<div class="row">
</center>
    <!-- Formulario Login -->
    <div class="container col-3 bg-dark text-light  ">
      <div class="row">
        <div class="col-xs-40 col-md-20 col-md-offset-1">
          <!-- Margen superior (css personalizado )-->
          <!-- Estructura del formulario -->
          <fieldset>
          <br>
          <div class="col-md-3"><img src="imagenes/baner1.jpg" ><br>
            <br></div>
          
            <table align="center "  >
	          <tr >
            <!-- Caja de texto para usuario -->
            <label class="sr-only" for="user">Usuario</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-user"></i></div>
              <input type="text" class="form-control" id="user" placeholder="Ingresa tu usuario">
            </div>
      
            <!-- Div espaciador -->
            <div class="spacing-2"></div>

            <!-- Caja de texto para la clave-->
            <label class="sr-only" for="clave">Contraseña</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-lock"></i></div>
              <input type="password" autocomplete="off" class="form-control" id="clave" placeholder="Ingresa tu usuario">
            </div>

            <!-- Animacion de load (solo sera visible cuando el cliente espere una respuesta del servidor )-->
            <div class="row" id="load" hidden="hidden">
              <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                <img src="img/load.gif" width="100%" alt="">
              </div>
              <div class="col-xs-12 center text-accent">
                <span>Validando información...</span>
              </div>
            </div>
            <!-- Fin load -->

            <!-- boton #login para activar la funcion click y enviar el los datos mediante ajax -->
            <div class="row">
              <div class="col-xs-8 col-xs-offset-2">
                <div class="spacing-2"></div>
                <button type="button" class=" btn btn-lg  btn-success btn-block" name="button" id="login">Iniciar sesion</button>
              </div>
            </div>

            <section class="text-accent center">
              <div class="spacing-2"></div>
              
             <!-- <p>
                No tienes una cuenta? <a href="registro.php"> Registrate!</a>
              </p>
            </section>-->
            </tr>
            </table>
          </fieldset>
        </div>
      </div>
    </div>

    <!-- / Final Formulario login -->

    <!-- Jquery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- SweetAlert js -->
    <script src="js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="js/operaciones.js"></script>
  </body>
</html>
