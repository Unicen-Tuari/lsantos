<?php
include_once 'config/config_action.php';
include_once 'controller/controller.php';
//Tenga la clave action
//No tenga la clave action
//$_REQUEST['action']

if( !array_key_exists(ConfigAct::$ACTION, $_REQUEST) ||
$_REQUEST[ConfigAct::$ACTION] == ConfigAct::$ACTION_DEFAULT )
{
  $controller = new Controller();
  $controller->mostrarIndex();
}

else {
  switch ($_REQUEST[ConfigAct::$ACTION]) {
    case ConfigAct::$ACTION_INICIO:
      $controller = new Controller();
      $controller->mostrarInicio();
      break;
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
    case ConfigAct::$ACTION_NOTICIAS:
      $controller = new Controller();
      $controller->mostrarNoticias();
      break;
    case ConfigAct::$ACTION_NOTICIA:
      $controller = new Controller();
      $controller->mostrarNoticia();
      break;
    case ConfigAct::$ACTION_CONTACTO:
      $controller = new Controller();
      $controller->mostrarContacto();
      break;

      case ConfigAct::$ACTION_MOSTRAR:
        $controller = new Controller();
        $controller->mostrarHome();
        break;
      case ConfigAct::$ACTION_AGREGAR_TAREA:
        $controller = new Controller();
        $controller->agregarTarea();
        break;
      case ConfigAct::$ACTION_BORRAR_TAREA:
        $controller = new Controller();
        $controller->borrarTarea();
        break;
      case ConfigAct::$ACTION_REALIZAR_TAREA:
        $controller = new Controller();
        $controller->realizarTarea();
        break;
      case ConfigAct::$ACTION_AGREGAR_CATEGORIA:
        $controller = new Controller();
        $controller->agregarCategoria();
          break;
      case ConfigAct::$ACTION_BORRAR_CATEGORIA:
        $controller = new Controller();
        $controller->borrarCategoria();
          break;
      case ConfigAct::$ACTION_AGREGAR_IMAGENES:
         $controller = new Controller();
         $controller->agregarImagenes();
      break;
    default:
      echo 'Pagina no encontrada';
      break;
  }
}
?>
