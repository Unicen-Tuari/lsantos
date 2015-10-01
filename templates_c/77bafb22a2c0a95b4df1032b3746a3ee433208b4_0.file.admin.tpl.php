<?php /* Smarty version 3.1.27, created on 2015-10-01 04:56:10
         compiled from "/opt/lampp/htdocs/lsantos/templates/admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1935577704560ca0caa82967_93701455%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77bafb22a2c0a95b4df1032b3746a3ee433208b4' => 
    array (
      0 => '/opt/lampp/htdocs/lsantos/templates/admin.tpl',
      1 => 1443668166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1935577704560ca0caa82967_93701455',
  'variables' => 
  array (
    'tareas' => 0,
    'tarea' => 0,
    'categorias' => 0,
    'categoria' => 0,
    'imagen' => 0,
    'errores' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560ca0cab0b7e0_12550097',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560ca0cab0b7e0_12550097')) {
function content_560ca0cab0b7e0_12550097 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1935577704560ca0caa82967_93701455';
?>
<!DOCTYPE HTML>
  <head>
    <meta name="keywords" content="asado, carne al asador,parrillada">
    <meta name="description" content="Asador criollo y restaurant estilo campo">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head
    content must come *after* these tags -->
    <title>Don Coco</title>
      <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap_custom_style.css" rel="stylesheet">
    <!--link rel="stylesheet" href="css/style.css" type="text/css" media="screen"-->
    <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </head>
  <body class="cort">
    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation ">
      <div class="container ">
        <div class="navbar-header page-scroll ">
          <button type="button " class="navbar-toggle" data-toggle="collapse " data-target=".navbar-ex1-collapse ">
            <span class="sr-only ">Toggle navigation</span>
            <span class="icon-bar "></span>
            <span class="icon-bar "></span>
            <span class="icon-bar "></span>
          </button>
          <a class="navbar-brand page-scroll " target="_blank" href="http://localhost/lsantos/index.php? "><span class="text-invert">Don Coco  </span></a>
        </div>
        <div class="collapse navbar-collapse navbar-ex-collapse ">
          <ul class="nav navbar-nav navbar-right ">
            <li>
              <a target="_blank" href="http://localhost/lsantos/index.php?">Inicio</a>
            </li>
            <li>
              <a target="_blank" href="http://localhost/lsantos/index.php?">Carta</a>
            </li>
            <li>
              <a id="hi" ></a>
            </li>
            <li>
              <a id="me" ></a>
            </li>
            <li>
              <a id="co" ></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <body class="cort">
    <div class="container">
      <div class="page-header">
        <h1>Lista de Noticias</h1>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label class="control-label" for="nombre"></label>
          <ul class="">
            <?php
$_from = $_smarty_tpl->tpl_vars['tareas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tarea'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tarea']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tarea']->value) {
$_smarty_tpl->tpl_vars['tarea']->_loop = true;
$foreach_tarea_Sav = $_smarty_tpl->tpl_vars['tarea'];
?>
            <li class="">
                  <?php if ($_smarty_tpl->tpl_vars['tarea']->value['realizada']) {?>
                    <s><?php echo $_smarty_tpl->tpl_vars['tarea']->value['tarea'];?>
</s>
                  <?php } else { ?>
                    <h4><?php echo $_smarty_tpl->tpl_vars['tarea']->value['tarea'];?>
 |
                    <?php
$_from = $_smarty_tpl->tpl_vars['categorias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['categoria']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
$foreach_categoria_Sav = $_smarty_tpl->tpl_vars['categoria'];
?>
                      <?php if ($_smarty_tpl->tpl_vars['categoria']->value['id_categoria'] == $_smarty_tpl->tpl_vars['tarea']->value['fk_id_categoria']) {?>
                      <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>

                      <?php }?>
                      <?php
$_smarty_tpl->tpl_vars['categoria'] = $foreach_categoria_Sav;
}
?>
                  <?php }?>
                  <a class="glyphicon glyphicon-trash" href="index.php?action=borrar_tarea&id_task=<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
"></a>
                 <a class="glyphicon glyphicon-plus botonAgregarImagenes" href="index.php?action=agregar_imagenes&id_task=<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
"></a></h4>
                  <?php
$_from = $_smarty_tpl->tpl_vars['tarea']->value['imagenes'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['imagen']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
$foreach_imagen_Sav = $_smarty_tpl->tpl_vars['imagen'];
?>
                  <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="imagen-<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id'];?>
-tarea-<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
" class="img-thumbnail" >
                  <?php
$_smarty_tpl->tpl_vars['imagen'] = $foreach_imagen_Sav;
}
?></li>
            <?php
$_smarty_tpl->tpl_vars['tarea'] = $foreach_tarea_Sav;
}
?>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <?php if (count($_smarty_tpl->tpl_vars['errores']->value) > 0) {?>
          <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Errores</h3>
            </div>
            <ul>
              <?php
$_from = $_smarty_tpl->tpl_vars['errores']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['error']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
$foreach_error_Sav = $_smarty_tpl->tpl_vars['error'];
?>
                <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
              <?php
$_smarty_tpl->tpl_vars['error'] = $foreach_error_Sav;
}
?>
            </ul>
          </div>
          <?php }?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <form action="index.php?action=agregar_tarea" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="id_cat"><h3>Nueva Noticia</h3></label>
              <select class=" form-control" id="id_cat" name="id_cat" placeholder="Categoria" name="id_cat">
                <?php
$_from = $_smarty_tpl->tpl_vars['categorias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['categoria']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
$foreach_categoria_Sav = $_smarty_tpl->tpl_vars['categoria'];
?>
                    <option value = "<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
" > <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</option>
                <?php
$_smarty_tpl->tpl_vars['categoria'] = $foreach_categoria_Sav;
}
?>
              </select>
            </div>
            <div class="form-group">
              <label for="task"></label>
              <input type="text" class="form-control" id="task" name="task" placeholder="Titulo">
            </div>
            <div class="form-group">
              <label for="desc"></label>
              <input type="text" class="form-control" id="desc" name="desc" placeholder="Descripcion">
            </div>
            <div class="form-group">
              <label for="imagesToUpload">Imagenes</label>
              <input type="file"  name="imagesToUpload[]" id="imagesToUpload" >
            </div>
            <button type="submit" class="btn btn-default">Agregar Noticia</button>
          </form>
        </div>
      </div><br><br>
      <div class="row">
        <div class="col-md-6">
          <label class="control-label" for="nombre"><h3>Lista de Categorias</h3></label>
          <ul class="list-group">
            <?php
$_from = $_smarty_tpl->tpl_vars['categorias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['categoria']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
$foreach_categoria_Sav = $_smarty_tpl->tpl_vars['categoria'];
?>
            <li class="">
                      <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>

                  <a class="glyphicon glyphicon-trash" href="index.php?action=borrar_categoria&id_categoria=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"></a>
              </li>
            <?php
$_smarty_tpl->tpl_vars['categoria'] = $foreach_categoria_Sav;
}
?>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <form action="index.php?action=agregar_categoria" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="cat"><h3>Nueva Categoria</h3></label>
              <input type="text" class="form-control" id="cat" name="cat" placeholder="Categoria">
            </div>
            <button type="submit" class="btn btn-default">Agregar</button>
          </form>
        </div>
      </div>
    </div>
    <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
       $(".botonAgregarImagenes").on("click", function(event){
         event.preventDefault();

         var archivos = $("#imagesToUpload").prop('files');

         if(typeof(archivos) == 'undefined'){
           alert("No pusiste imagenes");
           return;
         }

         var datos = new FormData();

         $.each(archivos, function(key,value){
           datos.append(key,value);
         });

         $.ajax({
           type: "POST",
           dataType: "json",
           url: event.target.href,
           data: datos,
           success: function(data){
             alert(data.result);
           },
           error: function(){
             alert("No anduvo la llamada AJAX");
           },
           contentType : false,
           processData : false
         });

       });
     <?php echo '</script'; ?>
>

  </body>
</html>
<?php }
}
?>