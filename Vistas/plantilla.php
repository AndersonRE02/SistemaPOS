<?php 

  session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SysPOS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!--=============================
=            Estilos            =
==============================-->
  
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="Vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="Vistas/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Vistas/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="Vistas/dist/css/skins/_all-skins.min.css">

  <link rel="icon" href="Vistas/img/plantilla/icono-negro.png">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<!--====  End of Estilos  ====-->

<!--============================
=            Script            =
=============================-->

  <!-- jQuery 3 -->
  <script src="Vistas/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="Vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="Vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="Vistas/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="Vistas/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="Vistas/dist/js/demo.js"></script>

<!--====  End of Script  ====-->
  
</head>
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">

  <?php 
    if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){
       echo '<div class="wrapper">';
      /*=============================================
      =                   CABEZOTE                  =
      =============================================*/
      include "Modulos/cabezote.php";
      /*=============================================
      =                    MENU                     =
      =============================================*/
      include "Modulos/menu.php";

       if(isset($_GET["ruta"])){
          if($_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "usuarios" ||
            $_GET["ruta"] == "categorias" ||
            $_GET["ruta"] == "productos" ||
            $_GET["ruta"] == "clientes" ||
            $_GET["ruta"] == "ventas" ||
            $_GET["ruta"] == "crear-venta" ||
            $_GET["ruta"] == "reportes-venta" ||
            $_GET["ruta"] == "salir"
          ){
          include "Modulos/".$_GET["ruta"].".php";
          }else{
            include "Modulos/404.php";
          }
      }else{
        include "Modulos/inicio.php";
      }
      include "Modulos/footer.php";
      echo "</div>";
    }else{
      include "Modulos/login.php";
    }
   
   ?>

<script src="Vistas/js/plantillaJs/plantilla.js"></script>

</body>
</html>
