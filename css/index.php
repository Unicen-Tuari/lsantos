<?php
include_once 'config/config_action.php';
include_once 'controller/controller.php';
//Tenga la clave action
//No tenga la clave action
//$_REQUEST['action']
if(!array_key_exists(ConfigAct::$ACTION, $_REQUEST) ||
$_REQUEST[ConfigAct::$ACTION] == ConfigAct::$ACTION_DEFAULT)
{
  $controller = new Controller();
  $controller->mostrarInicio();
}
else {
  switch ($_REQUEST[ConfigAct::$ACTION]) {
    case ConfigAct::$ACTION_CARTA:
      $controller = new Controller();
      $controller->mostrarCarta();
      break;
    case ConfigAct::$ACTION_HISTORIA:
      $controller = new Controller();
      $controller->mostrarHistoria();
      break;
    case ConfigAct::$ACTION_MENU:
      $controller = new Controller();
      $controller->mostrarMenu();
      break;
    case ConfigAct::$ACTION_UBICACION:
      $controller = new Controller();
      $controller->mostrarUbicacion();
      break;
    case ConfigAct::$ACTION_CONTACTO:
      $controller = new Controller();
      $controller->mostrarContacto();
      break;
    default:
      echo 'Pagina no encontrada';
      break;
  }
}
?>
