<?php
include_once 'libs/Smarty.class.php';
class View {
  private $smarty;
  public $tareas;
  public $categorias;

function __construct(){
  $this->smarty = new Smarty();
  $this->errores = array();
}
function mostrarH($tareas,$categorias){
  $this->smarty->assign('categorias', $categorias);
  $this->smarty->assign('errores', $this->errores);
  $this->smarty->assign('tareas', $tareas);
  $this->smarty->display('admin.tpl');
}

function mostrarN($tareas,$categorias){
  $this->smarty->assign('categorias', $categorias);
  $this->smarty->assign('errores', $this->errores);
  $this->smarty->assign('tareas', $tareas);
  $this->smarty->display('noticia.tpl');
}
function mostrarL($tareas,$categorias){
  $this->smarty->assign('categorias', $categorias);
  $this->smarty->assign('errores', $this->errores);
  $this->smarty->assign('tareas', $tareas);
  $this->smarty->display('noticias.tpl');
}
function mostrarError($error){
  array_push($this->errores, $error);
}

function mostrar($a){

  $this->smarty->display($a);
}

}
?>
.
