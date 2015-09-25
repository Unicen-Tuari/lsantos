<?php
include_once 'view/view.php';
// Definicion del Controlador Principal
 class Controller{
   private $view;
   function __construct(){
     $this->view = new View();
   }
   function mostrarIndex(){
     $this->view->mostrar('index.tpl');
   }
 // Carga el Head, Nav y Footer
   function mostrarInicio(){
     $this->view->mostrar('inicio.tpl');
   }
 // Carga la Seccion de Inicio
   function mostrarCarta(){
    $this->view->mostrar('carta.tpl');
   }
 // Carga la Seccion de Actividades
   function mostrarHistoria(){
$this->view->mostrar('historia.tpl');
  }
 // Carga la Seccion de Galeria
   function mostrarUbicacion(){
$this->view->mostrar('ubicacion.tpl');
   }
 // Carga la Seccion de Contacto
   function mostrarContacto(){
$this->view->mostrar('contacto.tpl');
   }
   function mostrarMenu(){
$this->view->mostrar('menu.tpl');
   }
 }
?>
