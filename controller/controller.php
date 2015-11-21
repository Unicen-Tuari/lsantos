<?php
include_once 'view/view.php';
//include_once 'notModel/model.php';
include_once 'model/noticias_model.php';
include_once 'model/categorias_model.php';
//include_once 'model/model.php';

 class Controller{
   protected $view;
  // private $model;
   protected $noticiasModel;
   protected $categoriasModel;

   function __construct(){
       $this->model = new Model();
     $this->view = new View();
     $this->noticiasModel= new NoticiasModel();
     $this->categoriasModel=new CategoriasModel();

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
$this->view->mostrarL($this->noticiasModel->getTareas(),$this->categoriasModel->getCategorias());
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
