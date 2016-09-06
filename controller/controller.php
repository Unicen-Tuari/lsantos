<?php
include_once 'view/view.php';

 class Controller{
   protected $view;


     function __construct(){
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

    function mostrarContacto(){
     $this->view->mostrar('contacto.tpl');
    }

   function mostrarMenu(){
     $this->view->mostrar('menu.tpl');
   }


 }
?>
