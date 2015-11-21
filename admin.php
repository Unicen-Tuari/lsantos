<?php
include_once 'config/config_action.php';
include_once 'controller/admin_controller.php';



if( !array_key_exists(ConfigAct::$ACTION, $_REQUEST) || ($_REQUEST[ConfigAct::$ACTION] == ConfigAct::$ACTION_DEFAULT ))
{
  $controller = new AdminController();
  $controller->mostrarHome();
}



?>
