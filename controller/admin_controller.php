<?php
include_once 'controller.php';

  class AdminController  extends Controller {



    function __construct() {
    parent::__construct();
  }


  
   function mostrarHome(){
     $this->view->mostrarH($this->noticiasModel->getTareas(),$this->categoriasModel->getCategorias());
   }


function agregarTarea(){
 if(isset($_REQUEST['task']) && isset($_REQUEST['desc'])&& isset($_REQUEST['id_cat'])&& isset($_FILES['imagesToUpload'])){
     $this->noticiasModel->agregarTarea($_REQUEST['task'],$_REQUEST['desc'],$_REQUEST['id_cat'],$_FILES['imagesToUpload']);
   }
 else{
   $this->view->mostrarError('La tarea que intenta crear esta vacia');
 }
 $this->mostrarHome();
}
function borrarTarea(){
 if(isset($_REQUEST['id_task'])){
   $this->noticiasModel->borrarTarea($_REQUEST['id_task']);
 }
 else{
   $this->view->mostrarError('La tarea que intenta borrar no existe');
 }
 $this->mostrarHome();
}
function realizarTarea(){
 if(isset($_REQUEST['id_task'])){
   $this->noticiasModel->realizarTarea($_REQUEST['id_task']);
 }
 else{
   $this->view->mostrarError('La tarea que intenta realizar no existe');
 }
 $this->mostrarHome();
}
function agregarCategoria(){
 if(isset($_REQUEST['cat']) ){
     $this->categoriasModel->agregarCategoria($_REQUEST['cat']);
   }
 else{
   $this->view->mostrarError('La categoria que intenta crear esta vacia');
 }
 $this->mostrarHome();
}
function borrarCategoria(){
 if(isset($_REQUEST['id_categoria'])){
   $this->categoriasModel->borrarCategoria($_REQUEST['id_categoria']);
 }
 else{
   $this->view->mostrarError('La categoria que intenta borrar no existe');
 }
 $this->mostrarHome();
}
function mostrarNoticia(){
    if(isset($_REQUEST['id_task']) ){
      $this->view->mostrarN($this->noticiasModel->getTarea1($_REQUEST['id_task']),$this->categoriasModel->getCategorias());
      }
      else{
        $this->view->mostrarError('La tarea no existe');
    }
  }
function agregarImagenes(){
    if(isset($_REQUEST['id_task']) && isset($_FILES)){
      $this->noticiasModel->agregarImagenes($_REQUEST['id_task'],$_FILES['imagesToUpload']);
         print_r($_FILES);
      echo '{ "result" :  "OK" }';

    }else{
      echo '{ "result" :  "Faltan paramentros" }';
    }

}


 }
?>
