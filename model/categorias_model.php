<?php
//cat_model
include_once 'model.php';

/**
 *
 */
class CategoriasModel extends Model{

  function agregarCategoria($categoria){
    $consulta = $this->db->prepare('INSERT INTO categoria(nombre) VALUES(?)');
    $consulta->execute(array($categoria));
  }

  function borrarCategoria($id_categoria){
        $consulta = $this->db->prepare('DELETE FROM categoria WHERE id_categoria =?');
    $consulta->execute(array($id_categoria));
  }

  function getCategorias(){
    $categorias= array();
    $consulta = $this->db->prepare("SELECT * FROM categoria");
    $consulta->execute();
    $categorias = $consulta->fetchAll();
    return $categorias;
  }

}
?>
