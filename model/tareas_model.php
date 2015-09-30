<?php
class TareasModel {
  private $tareas;
  private $db;
  function __construct() {
      $this->db = new PDO('mysql:host=localhost;dbname=tasks;charset=utf8', 'root', '');
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  private function subirImagenes($imagenes){
    $carpeta = "uploads/imagenes/";
    $destinos_finales = array();
    foreach ($imagenes["tmp_name"] as $key => $value) {
      $destinos_finales[] = $carpeta.uniqid().$imagenes["name"][$key];//copia la ruta a la carpeta donde se guardan las imagenes en un arreglo
      move_uploaded_file($value, end($destinos_finales));//mueve las imagenes cargadas a la capeta espcificada
    }
    return $destinos_finales;
  }
  function getTareas(){
    $tareas = array();
    $consulta = $this->db->prepare("SELECT * FROM tarea");
    $consulta->execute();
//Todas las tareas
    while($tarea = $consulta->fetch()) {
      $consultaImagenes = $this->db->prepare("SELECT * FROM imagen where fk_id_tarea=?");
      $consultaImagenes->execute(array($tarea['id']));
      $imagenes_tarea = $consultaImagenes->fetchAll();
      $tarea['imagenes'] = $imagenes_tarea;
      $tareas[]=$tarea;
    }
    return $tareas;
  }
  function agregarTarea($tarea,$descripcion,$id_cat,$imagenes){
try{
  $destinos_finales=$this->subirImagenes($imagenes);
//Inserto la tarea
    $this->db->beginTransaction();
    $consulta = $this->db->prepare('INSERT INTO tarea(tarea,descripcion,fk_id_categoria) VALUES(?,?,?)');
    $consulta->execute(array($tarea,$descripcion,$id_cat));
    $id_tarea = $this->db->lastInsertId();
//Insertar las imagenes
    foreach ($destinos_finales as $key => $value) {
      $consulta = $this->db->prepare('INSERT INTO imagen(fk_id_tarea,path) VALUES(?,?)');//saco el id para que funcione eñ autoincremento
      $consulta->execute(array($id_tarea, $value));
    }
    $this->db->commit();
  }
  catch(Exception $e){

    $this->db->rollBack();
  }
}
  function borrarTarea($id_tarea){
    $consulta = $this->db->prepare('DELETE FROM tarea WHERE id=?');
    $consulta->execute(array($id_tarea));
  }
  function getTarea1($id_tarea){
    $consulta = $this->db->prepare('SELECT * FROM tarea WHERE id=?');
    $consulta->execute(array($id_tarea));
    $tarea = $consulta->fetch() ;
    $consultaImagenes = $this->db->prepare("SELECT * FROM imagen where fk_id_tarea=?");
    $consultaImagenes->execute(array($tarea['id']));
    $imagenes_tarea = $consultaImagenes->fetchAll();
    $tarea['imagenes'] = $imagenes_tarea;

    return $tarea;

  }
  function realizarTarea($id_tarea){
    $consulta = $this->db->prepare('UPDATE tarea SET realizada=1 WHERE id=?');
    $consulta->execute(array($id_tarea));
  }

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
private function subirImagenesAjax($imagenes){
    $carpeta = "uploads/imagenes/";
    $destinos_finales = array();
    foreach ($imagenes as $imagen) {
      $destino =  $carpeta.uniqid().$imagen["name"];
      move_uploaded_file($imagen["tmp_name"], end($destino));
      $destinos_finales[] = $destino;
    }
    return $destinos_finales;
  }


  function agregarImagenes($id_tarea, $imagenes){
    $rutas=$this->subirImagenesAjax($imagenes);
    foreach($rutas as $ruta){
    $consulta = $this->db->prepare('INSERT INTO imagen(fk_id_tarea,path) VALUES(?,?)');
    $consulta->execute(array($id_tarea,$ruta));
    }
  }

}
?>
