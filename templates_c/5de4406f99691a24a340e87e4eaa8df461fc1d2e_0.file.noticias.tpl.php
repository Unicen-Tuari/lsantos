<?php /* Smarty version 3.1.27, created on 2015-10-01 05:10:57
         compiled from "/opt/lampp/htdocs/lsantos/templates/noticias.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:672259241560ca4412ea772_08105283%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5de4406f99691a24a340e87e4eaa8df461fc1d2e' => 
    array (
      0 => '/opt/lampp/htdocs/lsantos/templates/noticias.tpl',
      1 => 1443669049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '672259241560ca4412ea772_08105283',
  'variables' => 
  array (
    'tareas' => 0,
    'tarea' => 0,
    'categorias' => 0,
    'categoria' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560ca4414061b6_60635101',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560ca4414061b6_60635101')) {
function content_560ca4414061b6_60635101 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '672259241560ca4412ea772_08105283';
?>

<div id="conten2"class="container">



  <div class="row">
    <div class="col-md-6" >
      <label class="control-label" for="nombre"><h1>Lista de Noticias</h1></label>
      <ul class="list-group" >
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
        <li class=""><h3>

                <?php echo $_smarty_tpl->tpl_vars['tarea']->value['tarea'];?>
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
                </h3>

            <a class="btn btn-primary" href="index.php?action=noticia&id_task=<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
">Ver Noticia</a><br><br>

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
" class="img-responsive" />
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
</div>
<?php echo '<script'; ?>
>
     $(".glyphicon glyphicon-trash").on("click", function(event){
       event.preventDefault();


       $.ajax({
         type: "GET",
         dataType: "HTML",
         url: event.target.href,

         success: function(data){

           $('#conten2').html(data);

         },
         error: function(){
           alert("No anduvo la llamada AJAX");
         }

       });

     });
   <?php echo '</script'; ?>
>
<?php }
}
?>