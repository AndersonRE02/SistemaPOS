<?php 

require_once "Controladores/plantilla.controlador.php";
// require_once "Controladores/categorias.controlador.php";
 require_once "Controladores/usuarios.controlador.php";
// require_once "Controladores/clientes.controlador.php";
// require_once "Controladores/ventas.controlador.php";
// require_once "Controladores/productos.controlador.php";

// require_once "Modelos/categorias.modelo.php";
require_once "Modelos/usuarios.modelo.php";
// require_once "Modelos/clientes.modelo.php";
// require_once "Modelos/ventas.modelo.php";
// require_once "Modelos/productos.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla->crtlPlantilla();

 ?>  