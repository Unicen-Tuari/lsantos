<?php
//noticias_model
include_once 'model.php';

class NoticiasModel extends Model{

  private $noticias;

function getNoticias(){
  $noticias = array();
  $consulta = $this->db->prepare("SELECT * FROM noticia");
  $consulta->execute();
//Todas las noticias
  while($noticia = $consulta->fetch()) {
    $consultaImagenes = $this->db->prepare("SELECT * FROM imagen where fk_id_noticia=?");
    $consultaImagenes->execute(array($noticia['id']));
    $imagenes_noticia = $consultaImagenes->fetchAll();
    $noticia['imagenes'] = $imagenes_noticia;
    $noticias[]=$noticia;
  }

  return $noticias;
}

function agregarNoticiaModel($noticia,$descripcion,$id_cat,$imagenes){
try{
$destinos_finales=$this->subirImagenes($imagenes);
//Inserto la noticia
  $this->db->beginTransaction();
  $consulta = $this->db->prepare('INSERT INTO noticia(noticia,descripcion,fk_id_categoria) VALUES(?,?,?)');
  $consulta->execute(array($noticia,$descripcion,$id_cat));
  $id_noticia = $this->db->lastInsertId();
//Insertar las imagenes
  foreach ($destinos_finales as $key => $value) {
    $consulta = $this->db->prepare('INSERT INTO imagen(fk_id_noticia,path) VALUES(?,?)');//saco el id para que funcione eñ autoincremento
    $consulta->execute(array($id_noticia, $value));
  }
  $this->db->commit();
}
catch(Exception $e){

  $this->db->rollBack();
}
}
function modificarNoticia($id_noticia , $noticia , $descripcion , $id_cat){
  try {
  $consulta = $this->db->prepare('UPDATE noticia SET noticia=?, descripcion =?, fk_id_categoria =?  WHERE id=?');
  $consulta->execute(array($noticia , $descripcion , $id_cat , $id_noticia));
}
catch(PDOException $e)
   {
   echo $sql . "<br>" . $e->getMessage();
   }

}
function borrarNoticia($id_noticia){
  $consulta = $this->db->prepare('DELETE FROM noticia WHERE id=?');
  $consulta->execute(array($id_noticia));
}

function getNoticia1($id_noticia){
  $consulta = $this->db->prepare('SELECT * FROM noticia WHERE id=?');
  $consulta->execute(array($id_noticia));
  $noticia = $consulta->fetch() ;

  $consultaImagenes = $this->db->prepare("SELECT * FROM imagen where fk_id_noticia=?");
  $consultaImagenes->execute(array($noticia['id']));
  $imagenes_noticia = $consultaImagenes->fetchAll();
  $noticia['imagenes'] = $imagenes_noticia;

  return $noticia;

}
function realizarNoticia($id_noticia){
  $consulta = $this->db->prepare('UPDATE noticia SET realizada=1 WHERE id=?');
  $consulta->execute(array($id_noticia));
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

private function subirImagenesAjax($imagenes){
    $carpeta = "uploads/imagenes/";
    $destinos_finales = array();
    foreach ($imagenes as $imagen) {
      $destino =  $carpeta.uniqid().$imagen["name"];
      move_uploaded_file($imagen["tmp_name"], end($destino));
      $destinos_finales[] = $destino;
    }
    return $catModelnos_finales;
  }

  function agregarImagenes($id_noticia, $imagenes){
    $rutas=$this->subirImagenes($imagenes);
    foreach($rutas as $ruta){
    $consulta = $this->db->prepare('INSERT INTO imagen(fk_id_noticia,path) VALUES(?,?)');
    $consulta->execute(array($id_noticia,$ruta));
    }
  }

}

?>
