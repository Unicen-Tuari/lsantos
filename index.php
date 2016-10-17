<?php
include_once 'config/config_action.php';
include_once 'controller/controller.php';
include_once 'controller/admin_controller.php';
print_r($_REQUEST);
//print_r($_FILES);
//Tenga la clave action
//No tenga la clave action
//$_REQUEST['action']

if( !array_key_exists(ConfigAct::$ACTION, $_REQUEST) ||
$_REQUEST[ConfigAct::$ACTION] == ConfigAct::$ACTION_DEFAULT || $_REQUEST[ConfigAct::$ACTION]=='' )
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
      $controller->mostrarListaNoticias();
      break;
    case ConfigAct::$ACTION_NOTICIA:
      $controller = new Controller();
      $controller->mostrarNoticia();
      break;
    case ConfigAct::$ACTION_CONTACTO:
      $controller = new Controller();
      $controller->mostrarContacto();
      break;

      case ConfigAct::$ACTION_ADMIN:
        $controller = new AdminController();
        $controller->mostrarHome();
        break;
      case ConfigAct::$ACTION_AGREGAR_NOTICIA:

        $controller = new AdminController();
        $controller->agregarNoticia();
        break;
      case ConfigAct::$ACTION_BORRAR_NOTICIA:

        $controller = new AdminController();
        $controller->borrarNoticia();
        break;
      case ConfigAct::$ACTION_REALIZAR_NOTICIA:
        $controller = new AdminController();
        $controller->realizarNoticia();
        break;
      case ConfigAct::$ACTION_MOSTRAR_CATEGORIAS:
        $controller = new AdminController();
        $controller->mostrarCategorias();
        break;
      case ConfigAct::$ACTION_AGREGAR_CATEGORIA:
        $controller = new AdminController();
        $controller->agregarCategoria();
        break;
      case ConfigAct::$ACTION_BORRAR_CATEGORIA:
        $controller = new AdminController();
        $controller->borrarCategoria();
          break;
      case ConfigAct::$ACTION_MODIFICAR_CATEGORIA:
        $controller = new AdminController();
        $controller->modificarCategoria();
          break;
      case ConfigAct::$ACTION_AGREGAR_IMAGENES:
         $controller = new AdminController();
         $controller->agregarImagenes();
      break;
    default:
      echo 'Pagina no encontrada';

      break;
  }
}
?>
