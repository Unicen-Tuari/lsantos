<?php
include_once 'view/view.php';
//include_once 'notModel/model.php';
//include_once 'model/noticias_model.php';
//include_once 'model/categorias_model.php';
//include_once 'model/model.php';

 class Controller{
   protected $view;
  // private $model;
   protected $noticiasModel;
   protected $categoriasModel;

   function __construct(){
       //$this->model = new Model();
       $this->view = new View();
       //$this->noticiasModel= new NoticiasModel();
       //$this->categoriasModel=new CategoriasModel();
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

   function mostrarListaNoticias(){
     $this->view->mostrarNoticias('noticias.tpl',$this->noticiasModel->getNoticias(),$this->categoriasModel->getCategorias());
   }

   function mostrarNoticia(){
    if(isset($_REQUEST['id_not']) ){
      $this->view->mostrarNoticias('noticia_ind.tpl',$this->noticiasModel->getNoticia1($_REQUEST['id_not']),$this->categoriasModel->getCategorias());
      }
      else{
        $this->view->mostrarError('La noticia no existe');
    }
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

 }
?>
