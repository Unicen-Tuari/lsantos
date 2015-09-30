<?php
include_once 'view/view.php';
include_once 'model/tareas_model.php';
//include_once 'model/model.php';

 class Controller{
   private $view;
   private $model;
   function __construct(){
       $this->model = new TareasModel();
     $this->view = new View();

   }
   function mostrarIndex(){
     $this->view->mostrar('index.tpl');
   }
   function mostrarInicio(){
     $this->view->mostrar('inicio.tpl');
   }
   function mostrarCarta(){
    $this->view->mostrar('carta.tpl');
   }
    function mostrarHistoria(){
$this->view->mostrar('historia.tpl');
  }
   function mostrarNoticias(){
$this->view->mostrarL($this->model->getTareas(),$this->model->getCategorias());
   }


   function mostrarContacto(){
$this->view->mostrar('contacto.tpl');
   }
   function mostrarMenu(){
$this->view->mostrar('menu.tpl');
   }
   function mostrarAdmin(){
$this->view->mostrar('admin.tpl');
   }
   function mostrarHome(){
     $this->view->mostrarH($this->model->getTareas(),$this->model->getCategorias());
   }


function agregarTarea(){
 if(isset($_REQUEST['task']) && isset($_REQUEST['desc'])&& isset($_REQUEST['id_cat'])&& isset($_FILES['imagesToUpload'])){
     $this->model->agregarTarea($_REQUEST['task'],$_REQUEST['desc'],$_REQUEST['id_cat'],$_FILES['imagesToUpload']);
   }
 else{
   $this->view->mostrarError('La tarea que intenta crear esta vacia');
 }
 $this->mostrarHome();
}
function borrarTarea(){
 if(isset($_REQUEST['id_task'])){
   $this->model->borrarTarea($_REQUEST['id_task']);
 }
 else{
   $this->view->mostrarError('La tarea que intenta borrar no existe');
 }
 $this->mostrarHome();
}
function realizarTarea(){
 if(isset($_REQUEST['id_task'])){
   $this->model->realizarTarea($_REQUEST['id_task']);
 }
 else{
   $this->view->mostrarError('La tarea que intenta realizar no existe');
 }
 $this->mostrarHome();
}
function agregarCategoria(){
 if(isset($_REQUEST['cat']) ){
     $this->model->agregarCategoria($_REQUEST['cat']);
   }
 else{
   $this->view->mostrarError('La categoria que intenta crear esta vacia');
 }
 $this->mostrarHome();
}
function borrarCategoria(){
 if(isset($_REQUEST['id_categoria'])){
   $this->model->borrarCategoria($_REQUEST['id_categoria']);
 }
 else{
   $this->view->mostrarError('La categoria que intenta borrar no existe');
 }
 $this->mostrarHome();
}
function mostrarNoticia(){
    if(isset($_REQUEST['id_task']) ){
      $this->view->mostrarN($this->model->getTarea1($_REQUEST['id_task']),$this->model->getCategorias());
      }
      else{
        $this->view->mostrarError('La tarea no existe');
    }
  }
function agregarImagenes(){
    if(isset($_REQUEST['id_task']) && isset($_FILES)){
      $this->model->agregarImagenes($_REQUEST['id_task'],$_FILES);

      echo '{ "result" :  "OK" }';

    }else{
      echo '{ "result" :  "Faltan paramentros" }';
    }
  
}


 }
?>
