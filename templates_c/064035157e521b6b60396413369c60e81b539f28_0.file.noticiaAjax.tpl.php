<?php /* Smarty version 3.1.27, created on 2015-09-30 20:18:51
         compiled from "/opt/lampp/htdocs/lsantos/templates/noticiaAjax.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2007952345560c278b6e9cf8_20899236%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '064035157e521b6b60396413369c60e81b539f28' => 
    array (
      0 => '/opt/lampp/htdocs/lsantos/templates/noticiaAjax.tpl',
      1 => 1443637126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2007952345560c278b6e9cf8_20899236',
  'variables' => 
  array (
    'tareas' => 0,
    'categorias' => 0,
    'categoria' => 0,
    'imagen' => 0,
    'tarea' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560c278b77df64_45395594',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560c278b77df64_45395594')) {
function content_560c278b77df64_45395594 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2007952345560c278b6e9cf8_20899236';
?>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <br>
            </div>
        </div>
        <div class="row">
          <div class="col-md-3">

          </div>

            <div class="col-md-6 ">
              <div class="row">
                <div class="col-md-12">
                    <h1 class="text-invert">
                        <p class="text-invert"><?php echo $_smarty_tpl->tpl_vars['tareas']->value['tarea'];?>
</p>
                    </h1>
                    <h2><?php
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
                      <?php if ($_smarty_tpl->tpl_vars['categoria']->value['id_categoria'] == $_smarty_tpl->tpl_vars['tareas']->value['fk_id_categoria']) {?>
                      <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>

                      <?php }?>
                      <?php
$_smarty_tpl->tpl_vars['categoria'] = $foreach_categoria_Sav;
}
?>
                    </h2>

                    <h4><?php echo $_smarty_tpl->tpl_vars['tareas']->value['descripcion'];?>
.</h4><br><br>
                  </div>
                </div>
                <div class="row">
                 <div class="col-md-12">
                  <?php
$_from = $_smarty_tpl->tpl_vars['tareas']->value['imagenes'];
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
" class="img-responsive center-block">
                    <?php
$_smarty_tpl->tpl_vars['imagen'] = $foreach_imagen_Sav;
}
?>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
?>