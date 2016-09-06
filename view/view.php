<?php
include_once 'libs/Smarty.class.php';
class View {
  private $smarty;

function __construct(){
  $this->smarty = new Smarty();

}



function mostrar($a){

  $this->smarty->display($a);
}

}
?>
