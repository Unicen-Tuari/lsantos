<?php
include_once 'controller.php';

  class AdminController  extends Controller {

    function __construct() {
      parent::__construct();
    }

    function mostrarHome(){
      $this->view->mostrarNoticias('admin.tpl',$this->noticiasModel->getNoticias(),$this->categoriasModel->getCategorias());
      
    }

    function mostrarNoticia(){
        if(isset($_REQUEST['id_not']) ){
          $this->view->mostrarN($this->noticiasModel->getNoticia1($_REQUEST['id_not']),$this->categoriasModel->getCategorias());
          }
          else{
            $this->view->mostrarError('La noticia no existe');
        }
    }

    function mostrarNoticiaLista(){
      $this->view->mostrarNoticias('noticia_lista.tpl',$this->noticiasModel->getNoticias(),$this->categoriasModel->getCategorias());
    }

    function agregarNoticia(){
      if(isset($_REQUEST['not']) && isset($_REQUEST['desc'])&& isset($_REQUEST['id_cat'])&& isset($_FILES['imagesToUpload'])){
         $this->noticiasModel->agregarNoticiaModel($_REQUEST['not'],$_REQUEST['desc'],$_REQUEST['id_cat'],$_FILES['imagesToUpload']);
      }
      else{
       $this->view->mostrarError('La noticia que intenta crear esta vacia');
      }
      $this->mostrarNoticiaLista();
    }

    function borrarNoticia(){
      if(isset($_REQUEST['id_not'])){
        $this->noticiasModel->borrarNoticia($_REQUEST['id_not']);
      }
      else{
        $this->view->mostrarError('La noticia que intenta borrar no existe');
      }
      $this->mostrarNoticiaLista();
    }

    function realizarNoticia(){
      if(isset($_REQUEST['id_not'])){
       $this->noticiasModel->realizarNoticia($_REQUEST['id_not']);
      }
      else{
       $this->view->mostrarError('La noticia que intenta realizar no existe');
      }
      $this->mostrarHome();
    }

    function mostrarCategorias(){
      $this->view->mostrarCategorias('categoria_noticia.tpl',$this->categoriasModel->getCategorias());
    }

    function agregarCategoria(){
      if(isset($_REQUEST['cat']) ){
        $this->categoriasModel->agregarCategoria($_REQUEST['cat']);
      }
      else{
        $this->view->mostrarError('La categoria que intenta crear esta vacia');
      }
      $this->view->mostrarCategorias('categorias.tpl',$this->categoriasModel->getCategorias());
    }

    function borrarCategoria(){
      if(isset($_REQUEST['id_categoria'])){
        $this->categoriasModel->borrarCategoria($_REQUEST['id_categoria']);
      }
      else{
        $this->view->mostrarError('La categoria que intenta borrar no existe');
      }
      $this->view->mostrarCategorias('categorias.tpl',$this->categoriasModel->getCategorias());
    }

    function modificarCategoria(){
      if(isset($_REQUEST['id_catmod'])&& isset($_REQUEST['catmod'])){
       $this->categoriasModel->modificarCategoria($_REQUEST['catmod'],$_REQUEST['id_catmod']);
      }
      else{
       $this->view->mostrarError('La categoria que intenta modificar no existe');
      }
      $this->view->mostrarCategorias('categorias.tpl',$this->categoriasModel->getCategorias());
    }

    function agregarImagenes(){
      if(isset($_REQUEST['id_not']) && isset($_FILES)){
        $this->noticiasModel->agregarImagenes($_REQUEST['id_not'],$_FILES['imagesToUpload']);
           print_r($_FILES);
        echo '{ "result" :  "OK" }';
      }
      else{
        echo '{ "result" :  "Faltan paramentros" }';
      }
    }

  }

?>
