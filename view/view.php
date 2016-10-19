<?php
include_once 'libs/Smarty.class.php';
class View {
  private $smarty;
  public $noticias;
  public $categorias;
  public $tpl;

function __construct(){
  $this->smarty = new Smarty();
  $this->errores = array();
}

function mostrarError($error){
  array_push($this->errores, $error);
}

function mostrarNoticias($tpl,$noticias,$categorias){
  $this->smarty->assign('categorias', $categorias);
  $this->smarty->assign('errores', $this->errores);
  $this->smarty->assign('noticias', $noticias);
  $this->smarty->display($tpl);
}


 function mostrarCategorias($tpl,$categorias){
   $this->smarty->assign('categorias', $categorias);
   $this->smarty->assign('errores', $this->errores);
    $this->smarty->display($tpl);
  }
/*function mostrarN($noticias,$categorias){
  $this->smarty->assign('categorias', $categorias);
  $this->smarty->assign('errores', $this->errores);
  $this->smarty->assign('noticias', $noticias);
  $this->smarty->display('noticia.tpl');
}
function mostrarL($noticias,$categorias){
  $this->smarty->assign('categorias', $categorias);
  $this->smarty->assign('errores', $this->errores);
  $this->smarty->assign('noticias', $noticias);
  $this->smarty->display('noticias.tpl');
}*/


function mostrar($a){

  $this->smarty->display($a);
}

}
?>
